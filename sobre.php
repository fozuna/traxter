<?php
require_once 'includes/TraxterPage.php';
$page = new TraxterPage();
$page->renderHeader('sobre');
?>

<!-- Hero Section Interna -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 bg-brand-darker">
        <div class="absolute top-[-10%] right-[-5%] w-[400px] h-[400px] bg-brand-primary/10 blur-[100px] rounded-full"></div>
        <div class="absolute bottom-[-10%] left-[-5%] w-[400px] h-[400px] bg-brand-secondary/10 blur-[100px] rounded-full"></div>
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:64px_64px] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_50%,#000_70%,transparent_100%)]"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-brand-cyan font-semibold tracking-wider text-sm uppercase mb-4 block animate-fade-in-up">Sobre a Traxter</span>
        <h1 class="text-4xl md:text-6xl font-display font-bold text-white mb-6 animate-fade-in-up" style="animation-delay: 0.1s;">
            Engenharia com <span class="text-gradient-animated">Propósito</span>
        </h1>
        <p class="text-lg text-brand-muted max-w-3xl mx-auto leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
            Nascemos para preencher a lacuna entre o desenvolvimento de software tradicional e as reais necessidades de negócios em escala. Não somos apenas codificadores; somos parceiros estratégicos de crescimento.
        </p>
    </div>
</section>

<!-- Manifesto / Valores -->
<section class="py-20 bg-brand-surface border-y border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="reveal">
                <h2 class="text-3xl font-display font-bold text-white mb-6">
                    Nossa Filosofia
                </h2>
                <div class="space-y-8">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-lg bg-brand-primary/10 flex items-center justify-center flex-shrink-0">
                            <span class="text-brand-primary font-bold text-xl">01</span>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-lg mb-2">Excelência Técnica Inegociável</h3>
                            <p class="text-brand-muted text-sm leading-relaxed">
                                Não pegamos atalhos. Código limpo, testado e arquitetura escalável são o padrão, não o diferencial.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-lg bg-brand-secondary/10 flex items-center justify-center flex-shrink-0">
                            <span class="text-brand-secondary font-bold text-xl">02</span>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-lg mb-2">Transparência Radical</h3>
                            <p class="text-brand-muted text-sm leading-relaxed">
                                Você terá visibilidade total do processo. Sem caixas pretas, sem jargões desnecessários para esconder problemas.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-lg bg-brand-cyan/10 flex items-center justify-center flex-shrink-0">
                            <span class="text-brand-cyan font-bold text-xl">03</span>
                        </div>
                        <div>
                            <h3 class="text-white font-bold text-lg mb-2">Foco no ROI</h3>
                            <p class="text-brand-muted text-sm leading-relaxed">
                                Cada linha de código deve servir a um propósito de negócio. Se não gera valor, não desenvolvemos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reveal">
                <div class="glass-card p-1 rounded-2xl border border-white/5 bg-black/40 h-full min-h-[400px] flex items-center justify-center relative">
                    <div class="bg-brand-darker rounded-xl p-8 overflow-hidden relative w-full h-full flex flex-col justify-center">
                        <!-- Background Gradient -->
                        <div class="absolute top-0 right-0 w-64 h-64 bg-brand-primary/10 blur-[80px] rounded-full translate-x-1/2 -translate-y-1/2"></div>
                        
                        <div class="relative z-10">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-xl bg-brand-primary/20 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-brand-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-white">Traxter Standard</h3>
                                    <span class="text-brand-cyan text-xs font-mono uppercase tracking-wider">Quality Assurance</span>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <!-- Item 1 -->
                                <div class="flex items-center justify-between p-4 rounded-lg bg-white/5 border border-white/5 hover:bg-white/10 transition-colors cursor-default">
                                    <span class="text-brand-muted text-sm">Arquitetura</span>
                                    <span class="text-white font-mono text-sm">Scalable & Modular</span>
                                </div>
                                <!-- Item 2 -->
                                <div class="flex items-center justify-between p-4 rounded-lg bg-white/5 border border-white/5 hover:bg-white/10 transition-colors cursor-default">
                                    <span class="text-brand-muted text-sm">Código</span>
                                    <span class="text-white font-mono text-sm">Clean & Documented</span>
                                </div>
                                <!-- Item 3 -->
                                <div class="flex items-center justify-between p-4 rounded-lg bg-white/5 border border-white/5 hover:bg-white/10 transition-colors cursor-default">
                                    <span class="text-brand-muted text-sm">Segurança</span>
                                    <span class="text-white font-mono text-sm">Enterprise Grade</span>
                                </div>
                                <!-- Item 4 -->
                                <div class="flex items-center justify-between p-4 rounded-lg bg-white/5 border border-white/5 hover:bg-white/10 transition-colors cursor-default">
                                    <span class="text-brand-muted text-sm">Performance</span>
                                    <span class="text-brand-primary font-mono text-sm">Optimized</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Diferenciais e Prova Social (Substitui Liderança) -->
<section class="py-20 bg-brand-darker relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-primary/5 blur-[120px] rounded-full translate-x-1/3 -translate-y-1/3"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-brand-violet/5 blur-[100px] rounded-full -translate-x-1/3 translate-y-1/3"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-20">
            <!-- Copywriting Persuasivo -->
            <div class="reveal">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-6">
                    <span class="w-2 h-2 rounded-full bg-brand-cyan animate-pulse"></span>
                    <span class="text-brand-cyan text-xs font-medium uppercase tracking-wider">Por que a Traxter?</span>
                </div>
                
                <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-6 leading-tight">
                    Mais do que código.<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary to-brand-violet">Engenharia de Resultados.</span>
                </h2>
                
                <p class="text-brand-muted text-lg leading-relaxed mb-8">
                    Enquanto o mercado vende horas de desenvolvimento, nós vendemos <strong class="text-white">eficiência operacional e escalabilidade</strong>. Nossa abordagem elimina o "gap" entre a estratégia de negócio e a execução técnica, entregando software que se paga.
                </p>

                <ul class="space-y-4 mb-8">
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-brand-primary/20 flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-brand-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <strong class="text-white block">Zero Vendor Lock-in</strong>
                            <span class="text-brand-muted text-sm">Código proprietário seu. Arquitetura agnóstica a provedores.</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-brand-primary/20 flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-brand-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <strong class="text-white block">Documentação Executiva</strong>
                            <span class="text-brand-muted text-sm">Manuais técnicos e de negócio para garantir governança total.</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-brand-primary/20 flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-brand-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <strong class="text-white block">Onboarding Acelerado</strong>
                            <span class="text-brand-muted text-sm">Processos que permitem novos devs produtivos em dias, não meses.</span>
                        </div>
                    </li>
                </ul>

                <a href="cases.php" class="inline-flex items-center gap-2 text-brand-primary font-bold hover:text-brand-primary/80 transition-colors group">
                    Ver nossos cases de sucesso
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <!-- Métricas e Resultados (Prova Social) -->
            <div class="grid grid-cols-2 gap-6 reveal" style="transition-delay: 200ms;">
                <div class="glass-card p-6 rounded-2xl border border-white/5 bg-white/5 text-center group hover:bg-white/10 transition-colors">
                    <div class="text-4xl font-bold text-white mb-2 group-hover:scale-110 transition-transform duration-300">98%</div>
                    <div class="text-brand-muted text-sm uppercase tracking-wider">Retenção de Clientes</div>
                </div>
                <div class="glass-card p-6 rounded-2xl border border-white/5 bg-white/5 text-center group hover:bg-white/10 transition-colors">
                    <div class="text-4xl font-bold text-brand-cyan mb-2 group-hover:scale-110 transition-transform duration-300">+500k</div>
                    <div class="text-brand-muted text-sm uppercase tracking-wider">Usuários Impactados</div>
                </div>
                <div class="glass-card p-6 rounded-2xl border border-white/5 bg-white/5 text-center group hover:bg-white/10 transition-colors">
                    <div class="text-4xl font-bold text-brand-violet mb-2 group-hover:scale-110 transition-transform duration-300">30%</div>
                    <div class="text-brand-muted text-sm uppercase tracking-wider">Redução de Custos Cloud</div>
                </div>
                <div class="glass-card p-6 rounded-2xl border border-white/5 bg-white/5 text-center group hover:bg-white/10 transition-colors">
                    <div class="text-4xl font-bold text-brand-primary mb-2 group-hover:scale-110 transition-transform duration-300">24/7</div>
                    <div class="text-brand-muted text-sm uppercase tracking-wider">Monitoramento Ativo</div>
                </div>
            </div>
        </div>

        <!-- Depoimento (Social Proof) -->
        <div class="glass-card p-8 md:p-12 rounded-3xl border border-white/10 bg-gradient-to-br from-white/5 to-transparent relative overflow-hidden reveal">
            <div class="absolute top-0 right-0 text-brand-primary/10 transform translate-x-1/4 -translate-y-1/4">
                <svg width="200" height="200" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V11C14.017 11.5523 13.5693 12 13.017 12H12.017V5H22.017V15C22.017 18.3137 19.3307 21 16.017 21H14.017ZM5.0166 21L5.0166 18C5.0166 16.8954 5.91203 16 7.0166 16H10.0166C10.5689 16 11.0166 15.5523 11.0166 15V9C11.0166 8.44772 10.5689 8 10.0166 8H6.0166C5.46432 8 5.0166 8.44772 5.0166 9V11C5.0166 11.5523 4.56889 12 4.0166 12H3.0166V5H13.0166V15C13.0166 18.3137 10.3303 21 7.0166 21H5.0166Z"></path></svg>
            </div>
            
            <div class="relative z-10 flex flex-col md:flex-row gap-8 items-center md:items-start">
                <div class="flex-shrink-0">
                     <div class="w-16 h-16 rounded-full bg-brand-surface border border-white/20 overflow-hidden">
                        <img src="assets/logos/aria.png" alt="Aria Consultoria" class="w-full h-full object-contain p-2 opacity-80">
                     </div>
                </div>
                <div>
                    <blockquote class="text-xl md:text-2xl font-medium text-white leading-relaxed mb-6">
                        "A Traxter não apenas entregou o software, eles reestruturaram nossa visão de produto. A arquitetura proposta reduziu nosso tempo de resposta em 60% e abriu portas para novos mercados que antes eram tecnicamente inviáveis."
                    </blockquote>
                    <div class="flex flex-col">
                        <strong class="text-white text-lg">Diretor de Tecnologia</strong>
                        <span class="text-brand-primary font-medium">Aria Consultoria</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10 reveal">
        <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-8">
            Compartilha dos nossos valores?
        </h2>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="contato.php" class="btn-gradient px-8 py-4 rounded-full text-white font-bold shadow-lg hover:shadow-brand-primary/50 transition-all">
                Vamos Conversar
            </a>
        </div>
    </div>
</section>

<?php
$page->renderFooter();
?>