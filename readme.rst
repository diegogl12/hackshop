###################
Projeto Gradú
###################

Sistema web voltado para uso interno da empresa Gradú, com intuito de otimizar a gerência das negociações da empresa. Desenvolvida pela Focus Consultoria.

*******************
Guia de Instalação
*******************

*******************
Banco de Dados
*******************

Para o funcionamento do sistema, primeiro siga os passos a baixo para criar o banco de dados de forma que funcione com o sistema.
Todos os scripts referenciados no passo-a-passo abaixo estão disponíveis na pasta 'banco de dados' do projeto.

<<<<<<< HEAD
1 - Rode o script 'PRJ_GRADU_Create_Schema_SCRIPT.sql'; (Ele irá criar o schema do banco de dados da gradú)
2 - Atualize seus schemas e selecione o schema da Gradú com o nome 'projeto_gradu';
3 - Rode o script 'PRJ_GRADU_tables_SCRIPT.sql'; (Ele irá criar todas as tableas e conexões de chave estrangeira do banco de dados)
4 - Rode o script 'PRJ_GRADU_info_SCRIPT.sql'; (Que irá alimentar o banco de dados com algumas informações iniciais importantes para ser possível entrar no sistema)
5 - No MySQL Workbench, vá em: Management-> Users and Privileges-> Add Account;
6 - Coloque o Login Name como 'focus', Limit to Hosts Matching como 'localhost' e password como 'ejrfocus';
7 - ainda em Add Account vá na aba 'Administrative Roles', selecione as caixas 'DBManager', 'DBDesigner' e 'BackupAdmin';
8 - Clique em 'Apply' na base da aba, e pronto.
=======
1 - Rode o script 'PRJ_GRADU_Create_Schema_SCRIPT.sql'; (Ele irá criar o schema do banco de dados da gradú)  
2 - Atualize seus schemas e selecione o schema da Gradú com o nome 'projeto_gradu';  
3 - Rode o script 'PRJ_GRADU_tables_SCRIPT.sql'; (Ele irá criar todas as tableas e conexões de chave estrangeira do banco de dados)  
4 - Rode o script 'PRJ_GRADU_info_SCRIPT.sql'; (Que irá alimentar o banco de dados com algumas informações iniciais importantes para ser possível entrar no sistema)  
5 - No MySQL Workbench, vá em: Management->Users and Privileges->Add Account;  
6 - Coloque o Login Name como 'focus', Limit to Hosts Matching como 'localhost' e password como 'ejrfocus';  
7 - ainda em Add Account vá na aba 'Administrative Roles', selecione as caixas 'DBManager', 'DBDesigner' e 'BackupAdmin';  
8 - Clique em 'Apply' na base da aba, e pronto.

>>>>>>> a99742e08dff7b10753b54ca59656f0ff84e8314
