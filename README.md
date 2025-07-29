# DevFashion

**Projeto acadêmico desenvolvido para a faculdade.**

DevFashion é uma aplicação web focada em moda, criada como parte de um trabalho acadêmico para aplicar conceitos de desenvolvimento web utilizando PHP, Docker e arquitetura modularizada.

## Tecnologias Utilizadas

- PHP  
- Composer  
- Docker e Docker Compose  
- MySQL (via container Docker)  
- Apache (via container Docker)  
- Arquitetura MVC (Model-View-Controller)  

## Estrutura do Projeto

- `config/` - Arquivos de configuração da aplicação  
- `core/` - Lógica central e núcleo da aplicação  
- `database/` - Scripts e configurações do banco de dados  
- `public/assets/` - Arquivos públicos (CSS, JS, imagens)  
- `script/` - Scripts auxiliares  
- `src/` - Código-fonte principal da aplicação  
- `index.php` - Ponto de entrada da aplicação  
- `composer.json` - Gerenciador de dependências PHP  
- `.htaccess` - Configurações para o servidor Apache  
- `Dockerfile` e `docker-compose.yml` - Configurações para containerização  

## Como executar

1. Clone o repositório:  
   ```bash
   git clone https://github.com/Franciscojr08/devfashion.git
