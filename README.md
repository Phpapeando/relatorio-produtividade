# Relatórios de Produtividade

Sistema de Relatórios de Produtividade feito em Laravel.

### Instalação ambiente de desenvolvimento
 - Renomeie o arquivo `.env.exempe` para `.env` e configure com os dados do seu banco de dados
 - Use o comando migrate para criar as tabelas necessárias no banco de dados: 
 
`php artisan migrate`

 - Execute `php artisan db:seed` , para criar relatórios ficticios no banco de dados (somente para fins de demonstração)
 
#### Logar no sistema 
 - Importe o arquivo `users.sql` para o seu banco de dados.
 - Selecione um dos usuários abaixo para logar-se e criar relatórios
       
   
   - Elisana - chave: 36385 	
   - Amanda - chave: 73956 	
   - Joaquim - chave: 87493 	
   - Alex - chave: 14741 	
   - Fabio - chave: 31051
   - Jones - chave: 31051
   
#### Visualizar todos os relatórios
- O usuário abaixo tem acesso à visualização de todos os relatórios, porém ele não tem permição para gerar um relatório.
   - Luis - chave: 12052
       
