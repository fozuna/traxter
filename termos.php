<?php
require_once 'includes/TraxterPage.php';
$page = new TraxterPage();
$page->renderHeader('termos');
?>

<!-- Hero Section Interna -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 bg-brand-darker">
        <div class="absolute top-[-10%] left-[-5%] w-[400px] h-[400px] bg-brand-secondary/10 blur-[100px] rounded-full"></div>
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:64px_64px] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_50%,#000_70%,transparent_100%)]"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 animate-fade-in-up">
            Termos de Uso
        </h1>
        <p class="text-lg text-brand-muted max-w-2xl mx-auto leading-relaxed animate-fade-in-up" style="animation-delay: 0.1s;">
            Regras e diretrizes para o uso dos serviços Traxter.
        </p>
    </div>
</section>

<!-- Conteúdo dos Termos -->
<section class="py-20 bg-brand-surface border-t border-white/5">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-invert prose-lg max-w-none text-brand-muted">
            <p class="lead text-xl text-white mb-8">
                Estes Termos de Uso ("Termos") regem o uso do site e serviços da Traxter Tecnologia & Automação ("Traxter"). Ao acessar ou usar nossos serviços, você concorda com estes Termos.
            </p>

            <h3 class="text-white font-bold mt-12 mb-4">1. Aceitação dos Termos</h3>
            <p>
                Ao acessar e utilizar nosso site, você aceita e concorda em estar vinculado por estes Termos. Se você não concordar com qualquer parte destes Termos, você não deve acessar ou usar nossos serviços.
            </p>

            <h3 class="text-white font-bold mt-12 mb-4">2. Uso do Serviço</h3>
            <p>
                Você concorda em usar nossos serviços apenas para fins legais e de acordo com estes Termos. Você não deve usar nossos serviços de qualquer maneira que possa danificar, desativar, sobrecarregar ou prejudicar nossos servidores ou redes, ou interferir no uso de qualquer outra parte.
            </p>
            <p>
                É proibido:
            </p>
            <ul class="list-disc pl-6 space-y-2 mb-6">
                <li>Tentar obter acesso não autorizado a qualquer parte dos serviços;</li>
                <li>Utilizar bots, scrapers ou outras ferramentas automatizadas para acessar nossos dados sem permissão;</li>
                <li>Introduzir vírus, trojans ou outros materiais maliciosos;</li>
                <li>Violar quaisquer leis locais, estaduais, nacionais ou internacionais aplicáveis.</li>
            </ul>

            <h3 class="text-white font-bold mt-12 mb-4">3. Propriedade Intelectual</h3>
            <p>
                Todo o conteúdo presente neste site, incluindo textos, gráficos, logotipos, ícones, imagens, clipes de áudio, downloads digitais e compilações de dados, é propriedade exclusiva da Traxter ou de seus fornecedores de conteúdo e é protegido pelas leis de direitos autorais e propriedade intelectual do Brasil e internacionais.
            </p>
            <p>
                O uso não autorizado de qualquer material contido neste site pode violar leis de direitos autorais, marcas registradas e outras leis.
            </p>

            <h3 class="text-white font-bold mt-12 mb-4">4. Limitação de Responsabilidade</h3>
            <p>
                Em nenhuma circunstância a Traxter, seus diretores, funcionários, parceiros ou fornecedores serão responsáveis por quaisquer danos diretos, indiretos, incidentais, especiais ou consequenciais resultantes do uso ou da incapacidade de usar nossos serviços, incluindo, mas não se limitando a, perda de lucros, dados ou interrupção de negócios.
            </p>

            <h3 class="text-white font-bold mt-12 mb-4">5. Modificações dos Termos</h3>
            <p>
                Reservamo-nos o direito de modificar estes Termos a qualquer momento. As alterações entrarão em vigor imediatamente após a publicação no site. O uso continuado dos serviços após a publicação de quaisquer alterações constitui aceitação dessas alterações.
            </p>

            <h3 class="text-white font-bold mt-12 mb-4">6. Lei Aplicável</h3>
            <p>
                Estes Termos serão regidos e interpretados de acordo com as leis da República Federativa do Brasil, sem levar em conta seus conflitos de disposições legais. Qualquer disputa decorrente destes Termos será submetida à jurisdição exclusiva dos tribunais da comarca de São Paulo/SP.
            </p>

            <h3 class="text-white font-bold mt-12 mb-4">7. Contato</h3>
            <p>
                Se você tiver alguma dúvida sobre estes Termos, entre em contato conosco através do e-mail: <a href="mailto:legal@traxter.com.br" class="text-brand-cyan hover:text-white transition-colors">legal@traxter.com.br</a>.
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