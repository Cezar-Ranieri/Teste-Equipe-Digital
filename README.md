Para acessar o site não é necessário instalação, pois já está disponível em: https://cezar-ranieri.github.io/Teste-Equipe-Digital/

Contudo, caso opte por fazer a instalação, siga os passos abaixo:

- Baixe o XAMPP e instale no seu computador
- Abra o XAMPP e habilite os módulos "Apache" e "MySQL" <br>

`Nesse repositório, existe uma pasta chamada "Arquivos", que contem a pasta com os arquivos do Wordpress e do banco de dados SQL. Primeiro iremos importar o banco de dados utilizando o phpMyAdmin que veio junto com o XAMPP.`

- No seu navegador, acesse o endereço "localhost/phpmyadmin"
- Clique em "Novo" e crie um banco de dados com o nome "wordpressdb"
- Clique no banco de dados que criou e depois clique na aba "Importar"
- Clique em "Escolher arquivo" e selecione o arquivo "dbwordpress" que disponibilizei
- Clique em "Importar"

`Agora importaremos a pasta do Wordpress:`

- No diretório que instalou o XAMPP, procure pela pasta "htdocs"
- Coloque a pasta "wordpress" dentro dela

Por fim, para acessar o site basta acessar o endereço ``localhost/wordpress`` no navegador.
