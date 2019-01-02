**CONFIGURAÇÕES INICIAS**  
- Instalar o Git no computador, para este projeto foi utilizado a versão 2.20.1. (Não há necessidade de ser nesta versão)  
> Dentro do terminal rodar os comandos abaixo para configurar o git na máquina:  
> git config --global user.name "Your Name"  
> git config --global user.email "you@example.com"  

- Instalar o PHP na versão 7.2.13  
> Configurar a variavel de ambiente para o PHP.  

- Instalar o Composer - Gerenciador de dependências.  

- Dentro da pasta do PHP, editar o arquivo php.ini e dentro do arquivo procurar o item extension_dir = "ext" e abaixo colocar a seguinte linha: extension=php_pdo_mysql.dll  

- Instalar a versão do Mysql 8.0.13  

- Após clonar o repositorio do projeto na branch develop, executar o comando abaixo:   
> composer require league/flysystem  
> composer install  

- Dentro da raiz do projeto, renomear o arquivo .env.example para .env
- Dentro do arquivo alterar conforme orientações abaixo:

> DB_DATABASE=db_locadora  
> DB_USERNAME=root  
> DB_PASSWORD=root  

**CONFIGURAÇÃO DO BANCO DE DADOS E APLICAÇÃO**  

- Criar o banco de dados com o nome "db_locadora", conforme está no arquivo .env.  
-  No terminal do projeto rodar o comando abaixo para criar as tabelas no banco:  
> php artisan migrate  

- Rodar o comando abaixo no terminal para criar dados fictícios, neste caso irá criar somente a tabela de usuário. 
> php artisan db:seed  

- Agora para iniciar a aplicação basta digitar no terminal o comando abaixo:  
> php artisan serve

usuário: admin@gmail.com  
senha: secret  

- Obs: Caso ocorra o erro: "No application encryption key has been specified." É necessário gerar as chaves novamente. Execute o comando abaixo no terminal do projeto:  
> php artisan key:generate  

**NOMENCLATURA E PADRONIZAÇÃO**
- Usar os nomes de clasess em inglês;  
- Não usar espaço em branco;  
- Não usar hífen, acentos e caracteres especiais;  
- Não usar palavras reservadas;  
- Não usar mais que 30(trinta) caracteres;  

