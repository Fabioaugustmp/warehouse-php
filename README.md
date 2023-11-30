# WAREHOUSE PHP
<p>Este projeto visa ser um simples projeto demonstrativo utilizando php como tecnologia princial de um simples armazem de intens.</p>

![Images](https://github.com/Fabioaugustmp/warehouse-php/blob/main/warehouse-architecture.png)

# Configuração do Ambiente Local para o Projeto "warehouse-php"

Este guia fornece instruções passo a passo sobre como configurar corretamente o ambiente local usando XAMPP ou MAMP para o projeto "warehouse-php".

## 1. Localizar o Arquivo `httpd-vhosts.conf`

Encontre o arquivo `httpd-vhosts.conf` dentro do diretório XAMPP ou MAMP. Normalmente, ele está localizado em `SEU-DISCO\xammp\apache\httpd-vhosts.conf`.

## 2. Abrir e Configurar `httpd-vhosts.conf`

Abra o arquivo `httpd-vhosts.conf` e adicione a seguinte configuração, ajustando o caminho para o diretório onde seu projeto está localizado:

```apache
<VirtualHost *:80>
    DocumentRoot "SEU-DISCO/xammp/htdocs/warehouse-php"
    ServerName warehouse
    <Directory "SEU-DISCO/xammp/htdocs/warehouse-php">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```
Certifique-se de substituir SEU-DISCO/xammp/htdocs/warehouse-php pelo caminho real para o diretório do seu projeto.

## 3. Salvar e Fechar o Arquivo httpd-vhosts.conf
Após adicionar a configuração, salve e feche o arquivo httpd-vhosts.conf.

## 4. Copiar o Arquivo .htaccess para o Projeto
Dentro do diretório htdocs, onde seu projeto está localizado, cole o arquivo .htaccess que está dentro do projeto "warehouse". Certifique-se de copiar e colar este arquivo exatamente na raiz da pasta htdocs.

Após seguir esses passos, você deve ter configurado corretamente o ambiente local para o projeto "warehouse-php". Certifique-se de reiniciar seu servidor Apache para que as alterações tenham efeito.

Este guia organiza os passos necessários para configurar seu ambiente local de maneira clara e fácil de seguir. Certifique-se de adaptar os caminhos e nomes de diretórios conforme necessário para o seu ambiente específico.

## 5. O .htaccess deve conter estas orientações

```apache
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . / [L]
</IfModule>

<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

## 6. Banco de Dados

Configure o arquivo env.ini que está localizado na raiz do projeto, altere o nome do arquivo de `env-develop.ini` para `env.ini` e coloque as credenciais de banco de dados tais como usuário e senha. Este projeto utiliza o MySql como banco de dados

## Front End

Neste projeto utilizaremos para o front-end uma dashboard integrada, oferecida pelo <a href="https://startbootstrap.com/theme/sb-admin-2">Sb Admin 2</a>


