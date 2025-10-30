# Laravel RBAC Admin Panel

Este projeto é um painel administrativo em Laravel 11 com controle de acesso baseado em funções (RBAC) usando o pacote **Spatie Laravel-Permission**.

## Status
🚧 Em desenvolvimento

## Funcionalidades implementadas
- Gestão de usuários, roles e permissões
- Middleware para proteger rotas administrativas
- Painel de administração básico com Blade + TailwindCSS

## Como usar
1. Clone o projeto
2. Configure o `.env`
3. Execute:
```bash
composer install
php artisan migrate --seed
php artisan serve

Usuários iniciais:

Admin: admin@example.com / 123456

Manager: manager@example.com / 123456

Próximos passos

Dashboard interativo com métricas reais

Logs de atividades e auditoria

Módulos corporativos (estoque, relatórios, etc)

Integração com frontend moderno (Vue/React)