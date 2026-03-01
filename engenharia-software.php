<?php
require_once 'includes/TraxterPage.php';
$page = new TraxterPage();
$page->renderHeader('engenharia-software');
?>

<!-- Hero Section -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
        <div class="absolute top-[-10%] left-[20%] w-[500px] h-[500px] bg-brand-primary/20 blur-[120px] rounded-full animate-pulse-slow"></div>
        <div class="absolute bottom-[10%] right-[-5%] w-[600px] h-[600px] bg-brand-cyan/10 blur-[120px] rounded-full animate-pulse-slow" style="animation-delay: 2s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-4xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-6 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-brand-primary animate-pulse"></span>
                <span class="text-brand-primary text-xs font-medium uppercase tracking-wider">Engenharia de Software</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-display font-bold text-white tracking-tight mb-6 leading-tight animate-fade-in-up" style="animation-delay: 0.1s;">
                Arquiteturas Robustas para <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary via-brand-cyan to-brand-violet">Escalabilidade Infinita</span>
            </h1>
            
            <p class="text-xl text-brand-muted leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                Desenvolvemos sistemas críticos, plataformas SaaS e aplicações enterprise com foco em performance, segurança e manutenibilidade a longo prazo.
            </p>
        </div>
    </div>
</section>

<!-- Core Capabilities -->
<section class="py-20 bg-brand-darker relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Capability 1 -->
            <div class="glass-card p-8 rounded-2xl border border-white/5 group hover:border-brand-primary/30 transition-all duration-500">
                <div class="w-14 h-14 rounded-xl bg-brand-primary/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-7 h-7 text-brand-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <h3 class="text-xl font-display font-bold text-white mb-3">Arquitetura de Microserviços</h3>
                <p class="text-brand-muted text-sm leading-relaxed">
                    Desacoplamento estratégico de domínios para permitir deploy independente, escalabilidade granular e resiliência sistêmica.
                </p>
            </div>

            <!-- Capability 2 -->
            <div class="glass-card p-8 rounded-2xl border border-white/5 group hover:border-brand-cyan/30 transition-all duration-500">
                <div class="w-14 h-14 rounded-xl bg-brand-cyan/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-7 h-7 text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                </div>
                <h3 class="text-xl font-display font-bold text-white mb-3">Cloud Native Development</h3>
                <p class="text-brand-muted text-sm leading-relaxed">
                    Aplicações nascidas na nuvem, otimizadas para ambientes serverless e containerizados (Kubernetes), maximizando a eficiência de recursos.
                </p>
            </div>

            <!-- Capability 3 -->
            <div class="glass-card p-8 rounded-2xl border border-white/5 group hover:border-brand-violet/30 transition-all duration-500">
                <div class="w-14 h-14 rounded-xl bg-brand-violet/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                    <svg class="w-7 h-7 text-brand-violet" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h3 class="text-xl font-display font-bold text-white mb-3">Security by Design</h3>
                <p class="text-brand-muted text-sm leading-relaxed">
                    Implementação de práticas de DevSecOps desde o primeiro commit, garantindo conformidade com LGPD/GDPR e proteção contra vulnerabilidades.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Tech Stack -->
<section class="py-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-6">Stack Tecnológica de Elite</h2>
            <p class="text-brand-muted max-w-2xl mx-auto">
                Utilizamos tecnologias modernas e comprovadas para entregar soluções que perduram.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Backend -->
            <div class="glass-card p-6 rounded-xl border border-white/5 text-center hover:bg-white/5 transition-colors">
                <span class="text-brand-cyan font-mono text-sm block mb-2">Backend</span>
                <span class="text-white font-bold text-lg">Go / Node.js</span>
            </div>
            <div class="glass-card p-6 rounded-xl border border-white/5 text-center hover:bg-white/5 transition-colors">
                <span class="text-brand-cyan font-mono text-sm block mb-2">Backend</span>
                <span class="text-white font-bold text-lg">Python / Java</span>
            </div>
            
            <!-- Frontend -->
            <div class="glass-card p-6 rounded-xl border border-white/5 text-center hover:bg-white/5 transition-colors">
                <span class="text-brand-violet font-mono text-sm block mb-2">Frontend</span>
                <span class="text-white font-bold text-lg">React / Next.js</span>
            </div>
            <div class="glass-card p-6 rounded-xl border border-white/5 text-center hover:bg-white/5 transition-colors">
                <span class="text-brand-violet font-mono text-sm block mb-2">Frontend</span>
                <span class="text-white font-bold text-lg">Vue / Nuxt</span>
            </div>

            <!-- Infrastructure -->
            <div class="glass-card p-6 rounded-xl border border-white/5 text-center hover:bg-white/5 transition-colors">
                <span class="text-brand-primary font-mono text-sm block mb-2">Infra</span>
                <span class="text-white font-bold text-lg">AWS / Azure</span>
            </div>
            <div class="glass-card p-6 rounded-xl border border-white/5 text-center hover:bg-white/5 transition-colors">
                <span class="text-brand-primary font-mono text-sm block mb-2">Infra</span>
                <span class="text-white font-bold text-lg">Docker / K8s</span>
            </div>

            <!-- Data -->
            <div class="glass-card p-6 rounded-xl border border-white/5 text-center hover:bg-white/5 transition-colors">
                <span class="text-white font-mono text-sm block mb-2">Data</span>
                <span class="text-white font-bold text-lg">PostgreSQL</span>
            </div>
            <div class="glass-card p-6 rounded-xl border border-white/5 text-center hover:bg-white/5 transition-colors">
                <span class="text-white font-mono text-sm block mb-2">Data</span>
                <span class="text-white font-bold text-lg">Redis / Mongo</span>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-brand-darker to-brand-dark z-0"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-4xl font-display font-bold text-white mb-8">Pronto para elevar seu software?</h2>
        <p class="text-xl text-brand-muted mb-10 leading-relaxed">
            Não construímos apenas código. Construímos ativos digitais que geram valor real e sustentável para o seu negócio.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="contato.php" class="btn-gradient px-10 py-5 rounded-full text-white font-bold text-lg shadow-2xl hover:shadow-brand-primary/60 transform hover:-translate-y-1 transition-all">
                Falar com o Especialista
            </a>
            <a href="cases.php" class="px-10 py-5 rounded-full text-white font-medium border border-white/10 hover:bg-white/5 transition-all">
                Ver Cases de Sucesso
            </a>
        </div>
    </div>
</section>

<?php
$page->renderFooter();
?>