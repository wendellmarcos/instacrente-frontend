# Configuração de Produção para HostGator

## Arquivo .env para Produção

Crie um arquivo `.env` no servidor com o seguinte conteúdo:

```env
APP_NAME=Instacrente
APP_ENV=production
APP_KEY=base64:GERE_UMA_CHAVE_COM_php_artisan_key:generate
APP_DEBUG=false
APP_URL=https://instacrente.com.br

LOG_CHANNEL=stack
LOG_LEVEL=error

# Backend API (Render)
API_URL=https://api.instacrente.com.br

# Database - AJUSTE COM CREDENCIAIS DO HOSTGATOR
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=seu_database_name
DB_USERNAME=seu_database_user
DB_PASSWORD=sua_senha_segura

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

VITE_APP_NAME="${APP_NAME}"
```

## Passos para Gerar APP_KEY

1. Localmente, execute:
```bash
php artisan key:generate --show
```

2. Copie a chave gerada (formato: `base64:...`)

3. Cole no `.env` do servidor na linha `APP_KEY=`

## Credenciais do Banco de Dados

Você precisará obter do cPanel do HostGator:
- Nome do banco de dados
- Usuário do banco de dados  
- Senha do banco de dados

Geralmente encontrado em: **cPanel → MySQL Databases**
