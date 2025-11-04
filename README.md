# Projeto1-Daniel

## 🗃️ Banco de Dados

O nome do banco de dados deve ser:
-> yorkut

Depois de criar o banco no phpMyAdmin, execute o seguinte comando SQL para criar a tabela necessária:

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    pais VARCHAR(100) NOT NULL,
    postagem TEXT NOT NULL
);

## 📁 Estrutura do Projeto

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
