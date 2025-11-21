# Guia Rápido de Deploy - HostGator

## Passo 1: Compilar Assets (Local)

```bash
cd c:\Users\Utilizador\OneDrive\Área de Trabalho\instacrente\frontend-laravel
npm run build
```

## Passo 2: Otimizar Composer (Local)

```bash
composer install --optimize-autoloader --no-dev
```

## Passo 3: Gerar Application Key (Local)

```bash
php artisan key:generate --show
```

**Copie a chave gerada** (formato: `base64:...`)

## Passo 4: Estrutura de Upload

### Arquivos para `/home/seu_usuario/instacrente/`:
- Toda a aplicação Laravel **EXCETO** a pasta `public`

### Arquivos para `/home/seu_usuario/public_html/`:
- Todo o conteúdo da pasta `public` do Laravel

## Passo 5: Editar index.php no Servidor

Arquivo: `public_html/index.php`

Altere as linhas:
```php
require __DIR__.'/../instacrente/vendor/autoload.php';
$app = require_once __DIR__.'/../instacrente/bootstrap/app.php';
```

## Passo 6: Criar .env no Servidor

Arquivo: `instacrente/.env`

```env
APP_NAME=Instacrente
APP_ENV=production
APP_KEY=COLE_A_CHAVE_GERADA_AQUI
APP_DEBUG=false
APP_URL=https://instacrente.com.br

API_URL=https://api.instacrente.com.br

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=seu_database
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

SESSION_DRIVER=file
CACHE_DRIVER=file
```

## Passo 7: Permissões (SSH ou File Manager)

```bash
chmod -R 775 ~/instacrente/storage
chmod -R 775 ~/instacrente/bootstrap/cache
```

## Passo 8: Cachear Configurações (SSH)

```bash
cd ~/instacrente
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Passo 9: Testar

Acesse: `https://instacrente.com.br`

## Troubleshooting

### Erro 500
- Verifique permissões de storage e bootstrap/cache
- Verifique se APP_KEY está definida no .env

### Assets não carregam
- Verifique se pasta build/ foi enviada para public_html/
- Execute: `php artisan cache:clear`

### Página em branco
- Verifique storage/logs/laravel.log
- Ative temporariamente APP_DEBUG=true
