# 💰 Budget Control  

**Budget Control** é um sistema de controle financeiro desenvolvido em Laravel e Vue.js, que permite gerenciar transações, relatórios de despesas e orçamentos de forma eficiente.  

## 🚀 Tecnologias Utilizadas  
- **PHP 8.x**  
- **Laravel 10.x**  
- **Vue.js**  
- **MySQL**  
- **Inertia.js**  
- **Tailwind CSS**  

## Requisitos

Antes de começar, certifique-se de ter as seguintes ferramentas instaladas:

- **PHP 8.1** ou superior
- **Composer** (para gerenciar dependências)
- **MySQL** (ou MariaDB)
- **Node.js** (caso deseje usar Vue.js no futuro)

## 📥 Instalação  

1. Clone este repositório:  
   ```bash
   git clone https://github.com/FabioRG37/budget-control.git
   ```
2. Acesse a pasta do projeto:  
   ```bash
   cd budget-control
   ```
3. Instale as dependências do Laravel:  
   ```bash
   composer install
   ```
4. Instale as dependências do frontend:  
   ```bash
   npm install
   ```
5. Copie o arquivo de configuração:  
   ```bash
   cp .env.example .env
   ```
6. Configure as credenciais do banco de dados no arquivo **.env**  
7. Gere a chave do aplicativo:  
   ```bash
   php artisan key:generate
   ```
8. Execute as migrações e seeds:  
   ```bash
   php artisan migrate --seed
   ```
9. Inicie o servidor local:  
   ```bash
   php artisan serve
   ```

## 🔑 Autenticação  
O sistema possui um fluxo completo de autenticação (login, registro e recuperação de senha) utilizando Laravel Breeze e Inertia.js.  

## 📌 Funcionalidades  
✅ Gerenciamento de categorias  
✅ Cadastro e listagem de transações financeiras  
✅ Geração de relatórios de despesas  
✅ Criação e controle de orçamentos  
✅ Autenticação de usuários  

## Estrutura de Diretórios

- **app/**: Contém as models, controllers, e lógicas do aplicativo.
- **database/migrations/**: Contém as migrações do banco de dados.
- **database/seeders/**: Contém os seeders para popular as tabelas.
- **resources/views/**: Contém as views Blade (para visualização).
- **routes/web.php**: Define as rotas da aplicação.

## 🛠️ Como Contribuir  
1. Faça um fork do projeto  
2. Crie uma branch com sua feature:  
   ```bash
   git checkout -b minha-feature
   ```
3. Commit suas alterações:  
   ```bash
   git commit -m "Adicionando nova funcionalidade"
   ```
4. Envie para o repositório:  
   ```bash
   git push origin minha-feature
   ```
5. Abra um Pull Request  

## 📄 Licença  
Este projeto está sob a licença MIT.  

---
