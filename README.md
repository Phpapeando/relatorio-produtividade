# Sistema de Relatórios de Produtividade

Este é um sistema desenvolvido para permitir que os funcionários de uma empresa de software cadastrem seus relatórios de produtividade e os compartilhem com os membros da equipe do mesmo setor. O sistema visa fornecer ao proprietário da empresa um maior controle sobre as atividades das equipes e proporcionar aos funcionários uma maneira de identificar áreas de melhoria para o cumprimento de prazos.

### Funcionalidades Principais

Cadastro de Relatórios: Os funcionários podem preencher um formulário com informações sobre as atividades realizadas durante a semana e as tarefas planejadas que não foram concluídas, juntamente com os motivos para o descumprimento dos prazos.
Avaliação de Produtividade: Os usuários têm a oportunidade de avaliar sua própria produtividade, atribuindo um nível de satisfação de 1 a 5 estrelas(⭐⭐⭐⭐⭐).

Acesso Restrito: O acesso aos relatórios é restrito aos membros da equipe do mesmo setor. O proprietário da empresa tem acesso a todos os relatórios, mas não pode gerar relatórios.

### Tecnologias Utilizadas
Laravel: Framework PHP utilizado para o desenvolvimento do backend.
JavaScript: Utilizado para interações dinâmicas na interface do usuário.

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
 
### Logar no sistema: 
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
   
### Visualizar todos os relatórios:
- O usuário abaixo tem acesso à visualização de todos os relatórios, porém ele não tem permição para criar relatórios.
   - Luis - chave: 12052





       
