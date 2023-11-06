# API - Laravel

```composter create-project laravel/laravel nomeProjeto``` -> cria arquivo laravel já arquitetado em pastas

```php artisan serve``` -> gera um link que inicializa o projeto laravel

```php artisan make:controller NomeController``` -> cria um arquivo controller com código padrão básico.

```php artisan migrate``` -> gera tabela no banco de dados a partir dos arquivos migrations do projeto

```php artisan make:migration create_nomeTabela_table``` -> cria um arquivo migration padrão básico

```php artisan migrate:status``` -> status de todas as migrations existentes no projeto

```php artisan migrate:fresh``` -> dropa todas as tabelas e cria-as novamente com as devidas alterações

```php artisan make:model nomeModel``` -> cria um model padrão básico
