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

Obs: Ao instalar no MySQL na tela de "Authentication Method" escolher a opção abaixo, para não ocorrer erro de autenticação do Laravel com o MySQL.  

> Use Legacy Authentication Method (Retain MySQL 5.x Compatibility)

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


**DESENVOLVIMENTO**  

- Sempre antes de iniciar uma tarefa executar um git pull, para baixar todas as atualizações que está no github.  

**NOMENCLATURA E PADRONIZAÇÃO**
- Usar os nomes de clasess em inglês;  
- Não usar espaço em branco;  
- Não usar hífen, acentos e caracteres especiais;  
- Não usar palavras reservadas;  
- Não usar mais que 30(trinta) caracteres;  

**CONFIGURAÇÃO DO SERVIDOR DE APLICAÇÃO**  

**Heroku**  
- Criar conta no Keroku  
- Instalar o Heroku Toolbelt no seu computador (Heroku CLI)  
Obs: Necessário para executar comandos direto do terminal.  

Inicialização  

- Digitar no terminal o comando abaixo e digitar as crendicias de acesso, como e-mail e senha, executar o comando dentro da pasta do projeto.  
> Heroku login  

- O comando abaixo é possível listar todas as aplicações da conta:  
> heroku apps --all  

- Criar aplicação:  
> heroku create locadora-imperial  

Automaticamente é criado um link para aplicação: http://locadora-imperial.herokuapp.com. Este link é único.  

Deploy da Aplicação  

- Adicionar o repositório remoto  
> heroku git:clone -a locadora-imperial  

- Executar o comando abaixo para enviar para o repositório remoto do heroku:  
> heroku git push heroku develop:master  

Obs: Nesse processo irá compactar e enviar para o servidor. O Heroku tem capacidade de identificar qual é o tipo de linguagem está sendo usada no projeto. Neste caso irá identificar que é PHP e que possui um arquivo composer.json, e irá instalar automaticamente as dependencias no servidor.  

- A aplicação ainda não está funcionando, pois precisamos configurar um arquivo chamado Procfile e configurar as váriáveis de ambiente no Heroku.  


Procfile  

- Criar um arquivo com o nome de Procfile dentro da raiz do projeto e dentro dele deve conter o conteudo abaixo:  
> web: vendor/bin/heroku-php-apache2 public/  

Variáveis de Ambiente  

- Para configurar as variáveis de ambiente pode ser feito de duas maneiras pela interface Web e pelo terminal.  

- Interface Web  

1º - Acessar a conta e entrar dentro do projeto em especifico.  
2º - Acessar aba Settings e ir na opção "Config Vars" e clicar no botão Reveal Config Vars.
3º - Adicionar o nome e o conteudo de cada variável que é utilizada no arquivo .env do Laravel.  

Ex:  
APP_KEY: base64...  
DB_CONNECTION: mysql  

- Terminal  

1º Acessar o terminal e digitar o comando abaixo:  
> heroku config:set APP_KEY: base64...  
> heroku config:set DB_CONNECTION: mysql   

Após essas alterações deve ser feito o commit na maquina e enviar para o repositório do heroku.

> git add .
> git commit -m "Texto"
> git push heroku develop:master

Banco de dados
- Como o Heroku não possui banco de dados foi adicionado um addon que é o ClearDB Mysql, para criar ele digitar o comando no terminal.  
> heroku addons:create cleardb:ignite  

Obs: para verificar qual foi o endereço, nome do banco, usuário e senha criados digitar o comando abaixo:  
- heroku config  

No link que mostra os parametros são so seguinte, primeiro é usuário, segundo a senha, terceiro endereço da url quarto nome do banco.  

- Após isso foi executado o comando no terminal:  
> heroku run php artisan migrate  

Este comando cria as tabelas no banco de dados da aplicação.  
