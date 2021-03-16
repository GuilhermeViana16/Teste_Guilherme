# Introdução (Windows 10 x64)

É necessário que o ambiente tenha **postgresql versão 10 e Wampserver** instalados para gerar o banco de dados e Wampserver que irá rodar o site.

# Instalando o wampserver (se você não tiver o wampserver instalado)

Acesse o link: https://www.wampserver.com/en/#wampserver-64-bits-php-5-6-25-php-7

Siga todas as etapas passo a passo

# Instalando laravel no wampserver

Normalmente o Wampserver é instalado em `c:\wamp64`

É importante que todo o conteúdo presente na pasta `www` seja excluído

Após isso acesse o terminal e execute o comando `cd c:/wamp64/www`

# Preparando o ambiente (arquivo .zip)

No terminal acesse o diretório `cd c:/wamp64/www`

Depois disso, execute o seguinte comando: `composer create-project laravel/laravel=8.0 www --prefer-dist`

Com o laravel instalado, acesse o link abaixo para baixar o Crud `.zip`:

`https://github.com/GuilhermeViana16/Teste_Guilherme/archive/main.zip`

Depois copie todas as pastas do arquivo `.zip` e cole no projeto criado em `c:/wamp64/www`

# Preparando o ambiente (git clone)

No terminal acesse o diretório `cd c:/wamp64/www`

Após isso rode `git clone https://github.com/GuilhermeViana16/Teste_Guilherme.git`

E quando finalizar instale as dependências do Laravel, com `composer install`

# Gerencie o site

Ainda no mesmo diretório `cd c:/wamp64/www` execute o comando `php artisan serve`

Em seguida, em outro terminal no mesmo diretório `cd c:/wamp64/www` execute o comando `php artisan migrate`

Para acessar o site [http://localhost:8000/documentos](http://localhost:8000/documentos)