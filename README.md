# Relatórios de Produtividade

Sistema de Relatórios de Produtividade feito em Laravel.

### Instalação ambiente de desenvolvimento:
 - Abra o terminal no diretório onde estão os arquivos do projeto e execute os comandos abaixo:

    `composer install`
    
 - Renomeie o arquivo `.env.exempe` para `.env`
 - Execute o comando `php artisan key:generate` para gerar a chave no 'APP_KEY' do arquivo `env` 
 - Crie um banco de dados e importe o arquivo `sys_relatorios`
 - Adcione os dados de acesso ao banco de dados no arquivo `.env` 
 - Use o comando migrate para criar o restante das tabelas no banco de dados: 
 
    `php artisan migrate`

 - Execute `php artisan db:seed` , para criar relatórios ficticios no banco de dados (para fins de demonstração)
 
#### Logar no sistema: 
 - Execute `php artisan serve`, para poder acessar o sistema utilizando o endereço abaixo em seu navegador:
   `http://127.0.0.1:8000`
 - Selecione um dos usuários abaixo para logar-se e poder criar e visualizar relatórios
 - Os Relatórios estão separados por setor, então é possível visualizar os relatórios de todos que são do mesmo setor.
       
   - Elisana - chave: 36385 	
   - Amanda - chave: 73956 	
   - Joaquim - chave: 87493 	
   - Alex - chave: 14741 	
   - Fabio - chave: 31051
   - Jones - chave: 31051
   
#### Visualizar todos os relatórios:
- O usuário abaixo tem acesso à visualização de todos os relatórios, porém ele não tem permição para criar relatórios.
   - Luis - chave: 12052
       
