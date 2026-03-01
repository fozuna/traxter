# Guia de Segurança e Deployment (VPS)

Este documento descreve os procedimentos de segurança (hardening) e deployment para a aplicação Traxter em um ambiente VPS Linux (Ubuntu 20.04/22.04 LTS).

## 🛡️ Auditoria e Hardening do Servidor

### 1. Atualização do Sistema
Mantenha o sistema operacional atualizado para corrigir vulnerabilidades conhecidas.

```bash
sudo apt update && sudo apt upgrade -y
sudo apt autoremove -y
```

### 2. Configuração de Usuário (Não-Root)
Nunca execute a aplicação como root.

```bash
# Criar novo usuário
adduser traxter_deploy
usermod -aG sudo traxter_deploy

# Configurar SSH Key Authentication (Local -> Servidor)
# No seu computador local:
ssh-copy-id traxter_deploy@seu-ip-vps
```

### 3. Configuração de Firewall (UFW)
Habilite apenas as portas estritamente necessárias.

```bash
sudo ufw default deny incoming
sudo ufw default allow outgoing
sudo ufw allow ssh
sudo ufw allow http
sudo ufw allow https
sudo ufw enable
```

### 4. Proteção contra Brute-Force (Fail2Ban)
Instale e configure o Fail2Ban para proteger o SSH e o servidor web.

```bash
sudo apt install fail2ban -y
sudo systemctl enable fail2ban
sudo systemctl start fail2ban

# Configuração recomendada (/etc/fail2ban/jail.local)
# [sshd]
# enabled = true
# port = ssh
# filter = sshd
# logpath = /var/log/auth.log
# maxretry = 3
```

### 5. Configuração do Servidor Web (Nginx/Apache) + SSL/TLS

#### Instalação do Certbot (Let's Encrypt)
```bash
sudo apt install certbot python3-certbot-apache -y  # Para Apache
# ou
sudo apt install certbot python3-certbot-nginx -y   # Para Nginx
```

#### Gerar Certificado SSL
```bash
sudo certbot --apache -d traxter.com.br -d www.traxter.com.br
```
*O Certbot configurará automaticamente o redirecionamento HTTPS e a renovação automática.*

### 6. Permissões de Arquivos
Garanta que o servidor web tenha apenas as permissões necessárias.

```bash
# Assumindo /var/www/traxter como diretório
sudo chown -R www-data:www-data /var/www/traxter
sudo find /var/www/traxter -type f -exec chmod 644 {} \;
sudo find /var/www/traxter -type d -exec chmod 755 {} \;
```

### 7. Monitoramento de Intrusão e Logs
Verifique regularmente os logs de acesso e erro.

- Apache: `/var/log/apache2/access.log` e `error.log`
- Nginx: `/var/log/nginx/access.log` e `error.log`
- Auth: `/var/log/auth.log`

## 🚀 Processo de Deploy (Staging -> Produção)

### 1. Preparação (Local)
Certifique-se de que todos os arquivos estão commitados e os testes locais passaram.

```bash
git status
git add .
git commit -m "Preparação para deploy v1.0"
git push origin main
```

### 2. Deploy no Servidor

```bash
# No servidor VPS
cd /var/www/traxter

# Se for a primeira vez:
# git clone https://github.com/fozuna/traxter.git .

# Atualizar código
git pull origin main

# Limpar cache (se houver framework/opcache)
sudo systemctl reload apache2
```

### 3. Checklist Pós-Deploy
- [ ] Verificar se o site carrega via HTTPS.
- [ ] Testar navegação entre todas as páginas.
- [ ] Verificar console do navegador (F12) por erros de JS ou CSP.
- [ ] Testar envio de formulários (se houver).
- [ ] Validar headers de segurança em [securityheaders.com](https://securityheaders.com).

## ⚠️ Plano de Contingência (Rollback)

Caso ocorra erro crítico em produção:

```bash
# Reverter para o commit anterior
git reset --hard HEAD^
sudo systemctl reload apache2
```
