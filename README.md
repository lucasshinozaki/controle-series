# Aplicação de Gestão de Séries

Esta aplicação Laravel permite salvar e gerenciar nomes de séries. Durante o desenvolvimento desta aplicação, foram aplicados diversos conceitos fundamentais do Laravel.

## Conceitos Aprendidos

- **Model**: Estrutura de dados que representa as séries na aplicação.
- **Migrations**: Controle de versão do banco de dados, permitindo criar e alterar tabelas de forma incremental.
- **Facade DB**: Utilização de queries diretamente com a Facade DB.
- **Eloquent ORM**: Mapeamento objeto-relacional para interagir com o banco de dados de forma intuitiva.

## Requisitos

- PHP >= 7.3
- Composer
- Banco de dados MySQL

## Instalação

1. Clone o repositório:
    ```bash
    git clone https://github.com/seu-usuario/controle-series.git
    ```
2. Navegue até o diretório do projeto:
    ```bash
    cd controle-series
    ```
3. Instale as dependências do Composer:
    ```bash
    composer install
    ```
4. Copie o arquivo `.env.example` para `.env`:
    ```bash
    cp .env.example .env
    ```
5. Gere a chave da aplicação:
    ```bash
    php artisan key:generate
    ```
6. Configure o banco de dados no arquivo `.env`:
    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nome_do_banco
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha
    ```
7. Execute as migrations para criar as tabelas:
    ```bash
    php artisan migrate
    ```

## Comandos Artisan Úteis

- Iniciar o servidor de desenvolvimento:
    ```bash
    php artisan serve
    ```

- Criar um novo model:
    ```bash
    php artisan make:model NomeDoModel
    ```

- Criar um novo controller:
    ```bash
    php artisan make:controller NomeDoController
    ```

- Criar uma nova migration:
    ```bash
    php artisan make:migration criar_tabela_exemplo
    ```

- Rodar as migrations:
    ```bash
    php artisan migrate
    ```

- Reverter as últimas migrations:
    ```bash
    php artisan migrate:rollback
    ```
