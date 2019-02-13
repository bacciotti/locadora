**CRIAÇÃO DE "CRUD" DE UM OBJETO/TABELA USANDO PROJETO CRUD-GENERATOR**  

- Para criar todos os arquivos pré-configurados do CRUD dentro do Projeto Laravel é necessario rodar apenas um comando, seguindo esses exemplos:  

>php artisan crud:generate Genres --fields_from_file=".\crud\Genres.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models

>php artisan crud:generate MediaTypes --fields_from_file=".\crud\MediaTypes.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models

>php artisan crud:generate Distributors --fields_from_file=".\crud\Distributors.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models

>php artisan crud:generate Movies --fields_from_file=".\crud\Movies.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models

>php artisan crud:generate Bookings --fields_from_file=".\crud\Bookings.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models

>php artisan crud:generate Leasings --fields_from_file=".\crud\Leasings.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models

>php artisan crud:generate Items --fields_from_file=".\crud\Items.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models

php artisan crud:migration GenresMovies --schema="genre_id#integer#unsigned; movie_id#integer#unsigned"
php artisan crud:migration ItemsLeasings --schema="item_id#integer#unsigned; leasing_id#integer#unsigned"
php artisan crud:migration MoviesBookings --schema="movie_id#integer#unsigned; booking_id#integer#unsigned"

>php artisan crud:generate Payments --fields_from_file=".\crud\Payments.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models

>php artisan crud:generate CheckPayments --fields_from_file=".\crud\CheckPayments.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models

>php artisan crud:generate CardPayments --fields_from_file=".\crud\CardPayments.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models

--- Exemplos (Não rodar)

>php artisan crud:generate GenresMovies --model-name=GenreMovie --fields_from_file=".\crud\GenresMovies.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models

>php artisan crud:generate ItemsLeasings --model-name=ItemLeasing --fields_from_file=".\crud\ItemsLeasings.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models

>php artisan crud:generate MoviesBookings --model-name=MovieBooking --fields_from_file=".\crud\MoviesBookings.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models

>php artisan crud:generate Users --fields_from_file=".\crud\Users.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models

>php artisan crud:generate Exemplos --fields_from_file=".\crud\Exemplos.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models

- Após criar os arquivos do "CRUD" é necessario popular a base de dados, usando este comando:  
> php artisan migrate  

- Outras informações de uso podem ser encontradas na pagina do projeto:  
https://github.com/appzcoder/crud-generator/blob/master/doc/usage.md  


## Campos Suportados  
Você pode usar qualquer um dos campos da lista.

### Tipos de campos de formulário:

* text
* textarea
* password
* email
* number
* date
* datetime
* time
* radio
* select
* file

### Tipos de campo de migração:

* string
* char
* varchar
* date
* datetime
* time
* timestamp
* text
* mediumtext
* longtext
* json
* jsonb
* binary
* integer
* bigint
* mediumint
* tinyint
* smallint
* boolean
* decimal
* double
* float
* enum
  
  
## Tipos de Relacionamentos  

### Lista de Tipos:  
* hasOne
* hasMany
* belongsTo
* belongsToMany

### 1 - 1  
* hasOne (Usuário)
* belongsTo (Telefone)

### 1 - N  
* hasMany (Postagem)
* belongsTo (Comentário)

### N - N  
* belongsToMany (Usuário)
* belongsToMany (UsuárioFunção)
* belongsToMany (FunçãoUsuário)
* belongsToMany (Função)
