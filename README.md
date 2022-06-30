![sistemao](https://user-images.githubusercontent.com/91217656/176745210-e692a52d-31b9-45d1-8b95-a0b9e2a8389c.png)

## Comandos

- `docker-compose up -d` (Cria o container do docker)

- `docker-compose run --rm composer install` (Instala a dependecia do php via composer)

- `cp .env.example .env` (Copia e cria o arquivo de configuracao do laravel)

- `docker-compose run --rm artisan key:generate` (Gera a chave do sistema)

O arquivo .env deve ser configurado nesse momento para que o comando migrate funcione.
É fundamental que a configuração esteja nesta ordem.
e posteriormente os dados de acesso ao banco do sistema. O env.example já esta neste formato só 
aguardando os dados.

//ACESSO AO BANCO LOCAL
DB_CONNECTION=pgsql
DB_HOST=postgres
DB_PORT=5432
DB_DATABASE=sorteio_cafe
DB_USERNAME=postgres
DB_PASSWORD=cafe@uema2022

- `docker-compose run --rm npm install` (Instala as dependencias do frontEnd)
- `docker-compose run --rm npm run dev` (Compilacao das libs do frontEnd)

Tem que criar a base agora
- `docker-compose run --rm artisan migrate --seed` (Cria as tabelas do banco de dados e popula ele)

AGORA SERÁ A INSTALAÇÃO DO ADMINLTE, CASO EM ALGUM MOMENTO APAREÇA PEDINDO PARA SOBRESCREVER
ALGUM ARQUIVO, RECUSE.

- `docker-compose run --rm composer update` (Atualiza a dependecia do php via composer)

- `docker-compose run --rm artisan storage:link` (Cria o link nas pastas das remessas)

- `docker-compose run --rm app chmod -R 775 bootstrap storage` (Mudo a permisao)
- `docker-compose run --rm app chown -R www-data.www-data bootstrap storage` (Coloco o nginx para se dono da pasta)
