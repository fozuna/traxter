<?php
require_once 'includes/TraxterPage.php';
$page = new TraxterPage();
$page->renderHeader('privacidade');
?>

<!-- Hero Section Interna -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 bg-brand-darker">
        <div class="absolute top-[-10%] right-[-5%] w-[400px] h-[400px] bg-brand-primary/10 blur-[100px] rounded-full"></div>
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:64px_64px] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_50%,#000_70%,transparent_100%)]"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 animate-fade-in-up">
            Política de Privacidade
        </h1>
        <p class="text-lg text-brand-muted max-w-2xl mx-auto leading-relaxed animate-fade-in-up" style="animation-delay: 0.1s;">
            Seu compromisso com a proteção de dados e transparência.
        </p>
    </div>
</section>

<!-- Conteúdo da Política -->
<section class="py-20 bg-brand-surface border-t border-white/5">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-invert prose-lg max-w-none text-brand-muted">
            <p class="lead text-xl text-white mb-8">
                A Traxter Tecnologia & Automação ("Traxter") está comprometida em proteger a sua privacidade. Esta Política de Privacidade descreve como coletamos, usamos, armazenamos e protegemos suas informações pessoais, em conformidade com a Lei Geral de Proteção de Dados (LGPD - Lei nº 13.709/2018).
            </p>

            <h3 class="text-white font-bold mt-12 mb-4">1. Coleta de Informações</h3>
            <p>
                Coletamos informações que você nos fornece diretamente, como quando você solicita um orçamento, entra em contato conosco ou se inscreve em nossa newsletter. As informações podem incluir: nome, e-mail, telefone, empresa e cargo.
            </p>
            <p>
                Também coletamos informações automaticamente através de cookies e tecnologias semelhantes para melhorar sua experiência de navegação e analisar o tráfego do site.
            </p>

            <h3 class="text-white font-bold mt-12 mb-4">2. Uso das Informações</h3>
            <p>
                Utilizamos suas informações para:
            </p>
            <ul class="list-disc pl-6 space-y-2 mb-6">
                <li>Fornecer, operar e manter nossos serviços;</li>
                <li>Melhorar, personalizar e expandir nossos serviços;</li>
                <li>Compreender e analisar como você utiliza nosso site;</li>
                <li>Desenvolver novos produtos, serviços, recursos e funcionalidades;</li>
                <li>Comunicar com você, diretamente ou através de um dos nossos parceiros, inclusive para atendimento ao cliente, para fornecer atualizações e outras informações relacionadas ao site, e para fins de marketing e promoção;</li>
                <li>Enviar e-mails;</li>
                <li>Encontrar e prevenir fraudes.</li>
            </ul>

            <h3 class="text-white font-bold mt-12 mb-4">3. Compartilhamento de Dados</h3>
            <p>
                Não vendemos, alugamos ou comercializamos suas informações pessoais. Podemos compartilhar suas informações com prestadores de serviços terceirizados que nos ajudam a operar nosso negócio (como provedores de hospedagem e ferramentas de análise), desde que eles concordem em manter a confidencialidade dessas informações.
            </p>

            <h3 class="text-white font-bold mt-12 mb-4">4. Segurança de Dados</h3>
            <p>
                Implementamos medidas de segurança técnicas e organizacionais apropriadas para proteger suas informações pessoais contra acesso não autorizado, alteração, divulgação ou destruição. No entanto, nenhum método de transmissão pela Internet ou armazenamento eletrônico é 100% seguro.
            </p>

            <h3 class="text-white font-bold mt-12 mb-4">5. Seus Direitos (LGPD)</h3>
            <p>
                De acordo com a LGPD, você tem o direito de:
            </p>
            <ul class="list-disc pl-6 space-y-2 mb-6">
                <li>Confirmar a existência de tratamento de seus dados;</li>
                <li>Acessar seus dados;</li>
                <li>Corrigir dados incompletos, inexatos ou desatualizados;</li>
                <li>Solicitar a anonimização, bloqueio ou eliminação de dados desnecessários, excessivos ou tratados em desconformidade;</li>
                <li>Solicitar a portabilidade dos dados a outro fornecedor de serviço ou produto;</li>
                <li>Eliminar dados pessoais tratados com o seu consentimento;</li>
                <li>Obter informações sobre as entidades públicas ou privadas com as quais compartilhamos seus dados.</li>
            </ul>

            <h3 class="text-white font-bold mt-12 mb-4">6. Contato</h3>
            <p>
                Se você tiver dúvidas sobre esta Política de Privacidade ou desejar exercer seus direitos, entre em contato conosco através do e-mail: <a href="mailto:privacidade@traxter.com.br" class="text-brand-cyan hover:text-white transition-colors">privacidade@traxter.com.br</a>.
            </p>

            <p class="text-sm mt-12 pt-8 border-t border-white/5">
                Última atualização: <?php echo date("d/m/Y"); ?>
            </p>
        </div>
    </div>
</section>

<?php
$page->renderFooter();
?>