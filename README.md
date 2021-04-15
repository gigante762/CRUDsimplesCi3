# CRUD simples com Codeigniter3

Nesse projeto você poderá cadastrar um usuário com nome e email assim tendo uma lista de todos os usuários cadastrados. Além disso a data de criação do mesmo ficara salva bem como a data da última atualização desse usuário.


## Configurações
Para baixar o projeto vá até a pasta desejada e digite o comand:
`git clone https://github.com/gigante762/CRUDsimplesCi3.git`

### Ambiente
 - Tenha um servidor apache na sua máquina
 - Tenha acesso a um banco de dados MySql, MariaDB.
### Banco de Dados
Vá até a pasta *projeto* e alí você encontrará a DDL do banco de dados e também o DML, ambos em formato sql.

Acesse o seu banco de dados, crie uma *database* e então rode o comando DDL encontrado em *projeto/DDL.sql*

*Caso queira alguns dados fictícos rode também o comando  quem está em *projeto/DLM.slq*
### Projeto
 - Configure o acesso ao banco de dados em *config/database.php*
 
 -  Configure a url base em *config/config.php*
 `$config['base_url'] =  'http://seusite.com/';`



## Como usar

### Ver todos usuários
Logo na página de incio em `/users` você verá a listagem de todos os usuários.
### Criar novo usuário
Estando na página de início `/users` clique em **novo** para ter acesso ao formulário de criação de novo usuário.
### Ver usuário
Estando na página de início `/users`, escolha um usuário e clique em **ver** para ter acesso aos dados desse usuário.
### Editar usuário
Estando na página de um usuário específico `/users/123` clique em **editar** para ter acesso a edição dos dados desse usuário.
### Deletar usuário
Estando na página de edição de um usuário específico `/users/edit/123` clique em **deletar** para deletar esse usuário.
