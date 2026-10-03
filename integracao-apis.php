<?php
require_once 'includes/TraxterPage.php';
$page = new TraxterPage();
$page->renderHeader('integracao-apis');
?>

<!-- Hero Section -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
        <div class="absolute top-[-15%] right-[20%] w-[550px] h-[550px] bg-brand-violet/20 blur-[130px] rounded-full animate-pulse-slow"></div>
        <div class="absolute bottom-[5%] left-[5%] w-[450px] h-[450px] bg-brand-primary/15 blur-[100px] rounded-full animate-pulse-slow" style="animation-delay: 1.5s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-4xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-6 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-brand-violet animate-pulse"></span>
                <span class="text-brand-violet text-xs font-medium uppercase tracking-wider">Integração de Sistemas</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-display font-bold text-white tracking-tight mb-6 leading-tight animate-fade-in-up" style="animation-delay: 0.1s;">
                Ecossistemas Digitais <br/>Totalmente <span class="text-gradient-animated">Integrados</span>.
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary via-brand-cyan to-[#FEDF8C]">Totalmente Integrados</span>
            </h1>
            
            <p class="text-xl text-brand-muted leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                Unifique seus dados e sistemas. Desenvolvemos e integramos APIs robustas para criar um fluxo de informações contínuo e seguro em toda sua organização.
            </p>
        </div>
    </div>
</section>

<!-- Integration Protocols -->
<section class="py-20 bg-brand-darker relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- RESTful APIs -->
            <div class="glass-card p-8 rounded-2xl border border-white/5 group hover:border-brand-violet/30 transition-all duration-500">
                <div class="w-12 h-12 rounded-lg bg-brand-violet/10 flex items-center justify-center mb-6">
                    <span class="text-brand-violet font-mono font-bold text-lg">REST</span>
                </div>
                <h3 class="text-xl font-display font-bold text-white mb-3">APIs RESTful</h3>
                <p class="text-brand-muted text-sm leading-relaxed">
                    Arquiteturas padronizadas, escaláveis e de fácil consumo para integração entre serviços web e mobile.
                </p>
            </div>

            <!-- GraphQL -->
            <div class="glass-card p-8 rounded-2xl border border-white/5 group hover:border-brand-violet/30 transition-all duration-500">
                <div class="w-12 h-12 rounded-lg bg-brand-violet/10 flex items-center justify-center mb-6">
                    <span class="text-brand-violet font-mono font-bold text-lg">GQL</span>
                </div>
                <h3 class="text-xl font-display font-bold text-white mb-3">GraphQL</h3>
                <p class="text-brand-muted text-sm leading-relaxed">
                    Consultas precisas e flexíveis, permitindo que o cliente solicite exatamente os dados necessários, otimizando a performance.
                </p>
            </div>

            <!-- Event-Driven -->
            <div class="glass-card p-8 rounded-2xl border border-white/5 group hover:border-brand-violet/30 transition-all duration-500">
                <div class="w-12 h-12 rounded-lg bg-brand-violet/10 flex items-center justify-center mb-6">
                    <span class="text-brand-violet font-mono font-bold text-lg">Evt</span>
                </div>
                <h3 class="text-xl font-display font-bold text-white mb-3">Event-Driven Architecture</h3>
                <p class="text-brand-muted text-sm leading-relaxed">
                    Sistemas reativos baseados em eventos (Kafka, RabbitMQ) para processamento assíncrono e alta vazão de dados.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Representation of Integration -->
<section class="py-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="glass-card rounded-2xl border border-white/5 p-10 relative overflow-hidden">
            <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-display font-bold text-white mb-6">Conecte o Legado ao Moderno</h2>
                    <p class="text-brand-muted leading-relaxed mb-6">
                        Muitas empresas operam com sistemas legados vitais que não conversam com novas tecnologias. Nós construímos as pontes.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-brand-violet flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-white text-sm">Modernização de Legacy Systems via API Wrappers</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-brand-violet flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-white text-sm">Centralização de dados em Data Lakes/Warehouses</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-brand-violet flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-white text-sm">Segurança com OAuth2, JWT e API Gateways</span>
                        </li>
                    </ul>
                </div>

                <div class="relative h-[300px] flex items-center justify-center">
                    <!-- Central Hub -->
                    <div class="w-24 h-24 rounded-full bg-brand-violet/20 border border-brand-violet/50 flex items-center justify-center relative z-20 shadow-[0_0_50px_rgba(143,165,208,0.3)]">
                        <svg class="w-10 h-10 text-brand-violet" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>

                    <!-- Satellite Nodes -->
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center animate-bounce-slow">
                        <span class="text-xs text-white font-mono">ERP</span>
                    </div>
                    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 w-16 h-16 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center animate-bounce-slow" style="animation-delay: 1s;">
                        <span class="text-xs text-white font-mono">CRM</span>
                    </div>
                    <div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center animate-bounce-slow" style="animation-delay: 0.5s;">
                        <span class="text-xs text-white font-mono">APP</span>
                    </div>
                    <div class="absolute right-0 top-1/2 translate-x-1/2 -translate-y-1/2 w-16 h-16 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center animate-bounce-slow" style="animation-delay: 1.5s;">
                        <span class="text-xs text-white font-mono">WEB</span>
                    </div>
                    
                    <!-- Connecting Lines (Visual) -->
                    <div class="absolute inset-0 border border-brand-violet/10 rounded-full animate-ping-slow pointer-events-none"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-brand-darker to-brand-dark z-0"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-4xl font-display font-bold text-white mb-8">Elimine silos de informação.</h2>
        <div class="flex justify-center">
            <a href="contato.php" class="btn-gradient px-10 py-5 rounded-full text-white font-bold text-lg shadow-2xl hover:shadow-brand-primary/60 transform hover:-translate-y-1 transition-all">
                Integrar Meus Sistemas
            </a>
        </div>
    </div>
</section>

<?php
$page->renderFooter();
?>