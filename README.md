# Instacrente Frontend - Laravel

Frontend da plataforma Instacrente - Rede social cristã.

## Tecnologias

- Laravel 11
- Tailwind CSS 3
- MySQL
- Vite

## Design

Tema "Sangue de Cristo" com cores vermelhas suaves e efeitos glassmorphism.

## Instalação Local

```bash
# Instalar dependências
composer install
npm install

# Configurar .env
cp .env.example .env
php artisan key:generate

# Migrar banco
php artisan migrate

# Build assets
npm run build

# Executar
php artisan serve
```

## Deploy

Hospedado na Locaweb em: https://instacrente.com.br

## Backend API

Conecta-se ao backend Java em: https://api.instacrente.com.br

## Domínios

- instacrente.com.br (principal)
- instacrente.com (redireciona)
- instacrente.store (redireciona)
