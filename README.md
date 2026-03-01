# Traxter - Tecnologia & Automação Estratégica

Traxter é uma plataforma corporativa de alto padrão desenvolvida para apresentar soluções de Engenharia de Software, Automação Inteligente e Consultoria Técnica. O projeto utiliza uma arquitetura PHP moderna com foco em performance, SEO e uma experiência de usuário (UX) premium baseada em design system proprietário.

## 🚀 Visão Geral do Projeto

O sistema foi construído seguindo princípios de **Clean Architecture** e **Component-Based Design** no front-end, utilizando PHP 8.x para renderização server-side e Tailwind CSS para estilização reativa.

### Principais Funcionalidades
- **Arquitetura Modular**: Componentes reutilizáveis (Navbar, Footer, Cards) via `TraxterPage.php`.
- **Design System Premium**: Interface "Ultra Premium" com glassmorphism, animações fluidas e tipografia executiva (Space Grotesk & Inter).
- **SEO Otimizado**: Meta tags dinâmicas e estrutura semântica HTML5.
- **Segurança Nativa**: Headers de segurança implementados (HSTS, X-Frame-Options, XSS-Protection).
- **Performance**: Assets otimizados e carregamento assíncrono de scripts.

## 🛠️ Tecnologias Utilizadas

- **Back-end**: PHP 8.0+
- **Front-end**: HTML5, JavaScript (ES6+), Tailwind CSS (via CDN/Config)
- **Servidor Web**: Apache (Recomendado) ou Nginx
- **Controle de Versão**: Git

## ⚙️ Requisitos do Sistema

- **PHP**: Versão 8.0 ou superior.
- **Servidor Web**: Apache com `mod_rewrite` habilitado (ou Nginx configurado adequadamente).
- **Extensões PHP**: `mbstring`, `curl`, `json`.

## 📦 Instalação e Configuração

Siga os passos abaixo para configurar o ambiente de desenvolvimento local ou produção.

### 1. Clonar o Repositório

```bash
git clone https://github.com/fozuna/traxter.git
cd traxter
```

### 2. Configuração do Servidor Web (Apache)

Certifique-se de que o `DocumentRoot` do seu servidor aponte para a pasta `public` ou para a raiz do projeto, dependendo da sua configuração de vhost.

Caso utilize XAMPP/WAMP (Local):
- Mova a pasta `traxter` para `htdocs` ou `www`.
- Acesse `http://localhost/traxter`.

### 3. Configuração de Variáveis de Ambiente

O projeto não requer configuração complexa de banco de dados no momento (site institucional estático/dinâmico), mas para funcionalidades futuras (ex: formulário de contato via SMTP), renomeie o arquivo de exemplo (se houver) e configure:

```bash
cp .env.example .env
# Edite o arquivo .env com suas credenciais
```

## 🔒 Segurança e Deployment

Para instruções detalhadas sobre como realizar o deploy em ambiente VPS (Linux/Ubuntu) com hardening de segurança, firewall e SSL, consulte o guia de deploy:

👉 **[Guia de Segurança e Deployment (DEPLOY.md)](DEPLOY.md)**

## 📂 Estrutura de Diretórios

```
traxter/
├── assets/             # Recursos estáticos (CSS, JS, Imagens)
│   ├── css/
│   ├── js/
│   └── img/
├── includes/           # Classes e componentes PHP (TraxterPage.php)
├── logs/               # Logs de aplicação (ignorado no git)
├── .gitignore          # Arquivos ignorados pelo Git
├── DEPLOY.md           # Guia de Hardening e Deploy
├── README.md           # Documentação do projeto
├── index.php           # Página Inicial
├── sobre.php           # Página Sobre Nós
├── servicos.php        # Página de Serviços
└── ...
```

## 🤝 Contribuição

1. Faça um Fork do projeto
2. Crie uma Branch para sua Feature (`git checkout -b feature/MinhaFeature`)
3. Faça o Commit de suas mudanças (`git commit -m 'Adiciona MinhaFeature'`)
4. Faça o Push para a Branch (`git push origin feature/MinhaFeature`)
5. Abra um Pull Request

## 📄 Licença

Todos os direitos reservados a **Traxter Tecnologia & Automação**.
Este código é proprietário e não deve ser distribuído sem autorização expressa.

---
Desenvolvido por **Equipe Traxter**
