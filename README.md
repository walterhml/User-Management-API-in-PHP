# Documentação do Projeto
![image](/assents/img.png)

## API de Gerenciamento de Usuários em PHP

Este projeto consiste em uma API simples para gerenciar usuários em PHP utilizando o padrão CRUD (Create, Read, Update, Delete). A API foi desenvolvida como parte de um desafio técnico e inclui operações básicas como criar, listar, atualizar e excluir usuários.

### Estrutura do Projeto

O projeto está organizado da seguinte maneira:
api/ <br>
├── config/ <br>
│ └── database.php <br>
├── controllers/ <br>
│ └── UserController.php <br>
├── models/ <br>
│ └── User.php <br>
└── index.php <br>


- O diretório `config` contém o arquivo `database.php`, que armazena as credenciais de conexão com o banco de dados.
- O diretório `controllers` contém o controlador `UserController.php`, responsável por lidar com as requisições HTTP e acessar o modelo de usuário.
- O diretório `models` contém o modelo `User.php`, que define as operações de banco de dados para os usuários.
- O arquivo `index.php` atua como ponto de entrada da API, roteando as requisições para os controladores apropriados.

### Configuração do Banco de Dados

O projeto requer um banco de dados MySQL. O arquivo `database.php` deve ser configurado com as credenciais corretas do banco de dados.

### Utilização da API

A API suporta as seguintes operações:

- **GET /users**: Retorna uma lista de todos os usuários.
- **POST /users**: Cria um novo usuário.
- **GET /users/{id}**: Retorna os detalhes de um usuário específico.
- **PUT /users/{id}**: Atualiza os detalhes de um usuário existente.
- **DELETE /users/{id}**: Exclui um usuário existente.

### Instruções de Uso

1. Configure as credenciais do banco de dados no arquivo `config/database.php`.
2. Inicie um servidor web local e configure o projeto na raiz do servidor.
3. Acesse a API através do navegador ou de uma ferramenta de requisições HTTP, como o Postman.

### Melhorias Futuras

- Implementar autenticação de usuário.
- Adicionar validação de entrada para prevenir SQL injection e outros ataques.
- Expandir a API para suportar mais operações e recursos.

---




