# WAREHOUSE PHP
<p>Este projeto visa ser um simples projeto demonstrativo utilizando php como tecnologia princial de um simples armazem de intens.</p>

![Images](https://github.com/Fabioaugustmp/warehouse-php/blob/main/warehouse-architecture.png)

## Como Rodar no Xampp & Mamp
<p>Para que seja possível rodar o sistema no xammp e mamp será necessário seguir os seguintes passsos</p>

Procurar o arquivo `httpd-vhosts.conf` dentro do Xammp ou Mamp geralmente este arquivo está localizado dentro da pasta apache `SEU-DISCO\xammp\apache\httpd-vhosts.conf`:
    - Abra o arquivo
    - Cole a seguinte configuração, troque para a pasta aonde o seu projeto está:
        ```<VirtualHost *:80>
            DocumentRoot "SEU-DISCO/xammp/htdocs/warehouse-php"
            ServerName warehouse
            <Directory "SEU-DISCO/xammp/htdocs/warehouse-php">
                Options Indexes FollowSymLinks
                AllowOverride All
                Require all granted
            </Directory>
        </VirtualHost>```
    - Salve e feche o arquivo
    - Dentro da sua pasta htdocs, aonde o seu projeto está, cole o arquivo .htdocs, que está dentro do projeto warehouse.
    - Copie e Cole este arquivo exatamente na raiz da pasta htdocs

## Front End

Neste projeto utilizaremos para o front-end uma dashboard integrada, oferecida pelo <a href="https://startbootstrap.com/theme/sb-admin-2">Sb Admin 2</a>


