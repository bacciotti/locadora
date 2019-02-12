**CRIAÇÃO DE "CRUD" DE UM OBJETO/TABELA USANDO PROJETO CRUD-GENERATOR**  

- Para criar todos os arquivos pré-configurados do CRUD dentro do Projeto Laravel é necessario rodar apenas um comando, seguindo esses exemplos:  

>php artisan crud:generate Genres --fields='name#string' --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models  

>php artisan crud:generate MediaTypes --fields='name#string; price#number' --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models  

>php artisan crud:generate Distributors --fields='corporate_name#string; cnpj#number; address#string; phone#number; contact_person#string' --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models  

>php artisan crud:generate Movies --fields='original_title#string; pt_br_tittle#string; countries#string; year#number; director#string; cast#string; sinopse#text; duration#string' --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models  

>php artisan crud:generate GenresMovies --fields='genre_id#integer#unsigned; movie_id#integer#unsigned' --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html --model-namespace=Models --foreign-keys="genre_id#id#genres#cascade;movie_id#id#movies#cascade"  

- Após criar os arquivos do "CRUD" é necessario popular a base de dados, usando este comando:  
> php artisan migrate  

- Outras informações de uso podem ser encontradas na pagina do projeto:  
https://github.com/appzcoder/crud-generator/blob/master/doc/usage.md  
