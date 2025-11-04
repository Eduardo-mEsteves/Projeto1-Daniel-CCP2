## 🎯 Tema do Projeto
O tema escolhido para este CRUD é uma **plataforma de postagens estilo rede social**, chamada **Yorkut**.  
O sistema permite **criar, listar, editar e excluir postagens** feitas por usuários, armazenadas em um banco de dados MySQL.

---

## 🧩 Desafios Implementados
- Criação de um **banco de dados relacional** no MySQL.  
- Implementação de todas as operações do CRUD:
  - **Create:** Cadastrar novos posts.  
  - **Read:** Exibir a lista de postagens.  
  - **Update:** Editar postagens existentes.  
  - **Delete:** Excluir postagens.  
- Separação de páginas para cada funcionalidade.  
- Aplicação de **estilos personalizados (CSS)** para melhorar a interface.  
- **Mensagens de feedback** após as ações (ex: “Post alterado com sucesso!”).  

---

## ⚙️ Instruções para Rodar o Projeto
1. No **phpMyAdmin**, crie o banco de dados com o nome:
   ```
   yorkut
   ```
2. Depois, execute o seguinte comando SQL para criar a tabela:
   ```sql
   CREATE TABLE posts (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nome VARCHAR(100) NOT NULL,
       pais VARCHAR(100) NOT NULL,
       postagem TEXT NOT NULL
   );
   ```
3. Coloque a pasta `PROJETO1-DANIEL-CCP2` dentro do diretório do seu servidor local (por exemplo: `htdocs` no XAMPP).  
4. Inicie o **Apache** e o **MySQL** no painel do XAMPP.  
5. No navegador, acesse:
   ```
   http://localhost/PROJETO1-DANIEL-CCP2/admin/index.php
   ```
6. A partir da página inicial, é possível cadastrar, listar, editar e excluir postagens.

---

## 📁 Estrutura do Projeto
```
PROJETO1-DANIEL-CCP2/
│
├── admin/
│   ├── config.inc.php          # Conexão com o banco de dados
│   ├── index.php               # Página inicial
│   ├── post-cadastro.php       # Cadastra novos posts
│   ├── post-altera.php         # Atualiza posts existentes
│   ├── post-excluir.php        # Exclui posts
│   ├── post-form.php           # Formulário de criação
│   ├── posts-altera-form.php   # Formulário de edição
│   ├── posts.php               # Lista de postagens
│   └── yorkut.css              # Estilos da aplicação
│
└── README.md                   # Instruções do projeto
```
