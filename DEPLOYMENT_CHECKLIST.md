# Checklist Final de Deploy - HostGator

## ✅ Preparação Local Concluída

- [x] Guias de deployment criados
- [x] Configuração de produção documentada
- [ ] Assets compilados (aguardando npm build)
- [ ] Composer otimizado (executando)

## 📋 Próximos Passos

### 1. Após compilação dos assets

Verifique se a pasta `public/build/` foi criada com os arquivos:
- `manifest.json`
- Arquivos CSS e JS minificados

### 2. Preparar para Upload

**Pasta 1: Aplicação Laravel** (vai para `/home/usuario/instacrente/`)
- Todos os arquivos **EXCETO** a pasta `public`

**Pasta 2: Public** (vai para `/home/usuario/public_html/`)
- Todo o conteúdo da pasta `public`

### 3. No cPanel do HostGator

1. **File Manager** → Criar pasta `instacrente` no diretório home
2. Upload da aplicação para `instacrente/`
3. Upload do conteúdo de `public/` para `public_html/`
4. Editar `public_html/index.php`:
   ```php
   require __DIR__.'/../instacrente/vendor/autoload.php';
   $app = require_once __DIR__.'/../instacrente/bootstrap/app.php';
   ```

### 4. Configurar .env no Servidor

Criar arquivo `instacrente/.env` com:
- APP_KEY gerada
- Credenciais do banco de dados do HostGator
- APP_URL=https://instacrente.com.br

### 5. Permissões

Via SSH ou File Manager:
```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

### 6. Cache (via SSH)

```bash
cd ~/instacrente
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 7. Testar

Acesse: https://instacrente.com.br

## 📁 Arquivos de Referência

- `DEPLOY_GUIDE.md` - Guia passo a passo
- `PRODUCTION_ENV.md` - Configuração do .env
- `deployment_plan.md` - Plano completo detalhado

## ⚠️ Importante

- **NÃO** envie o arquivo `.env` local para o servidor
- **CRIE** um novo `.env` no servidor com as configurações de produção
- **VERIFIQUE** se o APP_DEBUG está como `false`
- **CONFIGURE** SSL/HTTPS no cPanel
