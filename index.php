<?php
// Autoload simples ou require direto
require_once 'includes/TraxterPage.php';

$page = new TraxterPage();
$page->renderHeader();
?>


    <!-- Hero Section Ultra Premium -->
    <section class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-brand-darker">
            <!-- Glow Duplo Animado -->
            <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-brand-primary/20 blur-[120px] rounded-full animate-pulse-slow"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[600px] h-[600px] bg-brand-secondary/20 blur-[120px] rounded-full animate-pulse-slow" style="animation-delay: 2s;"></div>
            
            <!-- Grid Sutil -->
            <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:64px_64px] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_50%,#000_70%,transparent_100%)]"></div>
        </div>

        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Badge de Autoridade -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-8 animate-fade-in-up hover:bg-white/10 transition-colors cursor-default">
                <span class="flex h-2 w-2 relative">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-cyan opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-cyan"></span>
                </span>
                <span class="text-xs font-semibold text-brand-cyan tracking-wide uppercase">Engenharia de Software Estratégica</span>
            </div>

            <!-- Headline Executiva -->
            <h1 class="text-5xl md:text-7xl font-display font-bold text-white tracking-tight leading-tight mb-8 animate-fade-in-up" style="animation-delay: 0.1s;">
                Transformamos Tecnologia em <br/>
                <span class="text-gradient-animated">Vantagem Competitiva</span>
            </h1>

            <!-- Subheadline Focada em Valor -->
            <p class="text-lg md:text-xl text-brand-muted max-w-2xl mx-auto mb-10 leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                Desenvolvemos ecossistemas digitais de alta performance para empresas que exigem escalabilidade, governança e eficiência operacional. Sem clichês, apenas engenharia robusta.
            </p>

            <!-- CTAs de Conversão -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-fade-in-up" style="animation-delay: 0.3s;">
                <a href="#contato" class="w-full sm:w-auto btn-gradient px-8 py-4 rounded-full text-white font-semibold text-lg shadow-xl shadow-brand-primary/30 hover:shadow-brand-primary/50 transform hover:-translate-y-1 transition-all flex items-center justify-center gap-2">
                    Iniciar Projeto Estratégico
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                </a>
                <a href="cases.php" class="w-full sm:w-auto px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-medium hover:bg-white/10 hover:border-white/20 transition-all flex items-center justify-center gap-2 backdrop-blur-sm">
                    Ver Cases de Sucesso
                </a>
            </div>

            <!-- Social Proof Inicial (Logos Fictícios) -->
            <div class="mt-16 pt-8 border-t border-white/5 animate-fade-in-up" style="animation-delay: 0.4s;">
                <p class="text-xs text-brand-muted uppercase tracking-widest mb-6 font-semibold">Empresas que confiam na nossa engenharia</p>
                <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">

                    <a href="https://ariabpo.com.br/" target="_blank" rel="noopener noreferrer" title="Visitar site da Aria Consultoria">
                        <img src="assets/logos/aria.png"
                            alt="Aria Consultoria"
                            class="h-14 md:h-16 w-auto object-contain opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-300 ease-out hover:scale-110 hover:shadow-[0_0_15px_5px_rgba(255,255,255,0.8)] rounded-xl p-2 bg-white" />
                    </a>

                    <a href="https://ctprice.com.br/" target="_blank" rel="noopener noreferrer" title="Visitar site da CT Price">
                        <img src="assets/logos/ctprice.png"
                            alt="CT Price"
                            class="h-14 md:h-16 w-auto object-contain opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-300 ease-out hover:scale-110 hover:shadow-[0_0_15px_5px_rgba(255,255,255,0.8)] rounded-xl p-2 bg-white" />
                    </a>

                    <a href="https://madeplant.com.br/" target="_blank" rel="noopener noreferrer" title="Visitar site da Madeplant Florestal">
                        <img src="assets/logos/madeplant.png"
                            alt="Madeplant Florestal"
                            class="h-14 md:h-16 w-auto object-contain opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-300 ease-out hover:scale-110 hover:shadow-[0_0_15px_5px_rgba(255,255,255,0.8)] rounded-xl p-2 bg-white" />
                    </a>

                    <a href="https://casamentosemfloripa.com.br/" target="_blank" rel="noopener noreferrer" title="Visitar site da Nani Eventos">
                        <img src="assets/logos/nanieventos.png"
                            alt="Nani Eventos"
                            class="h-14 md:h-16 w-auto object-contain opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-300 ease-out hover:scale-110 hover:shadow-[0_0_15px_5px_rgba(255,255,255,0.8)] rounded-xl p-2 bg-white" />
                    </a>

                </div>
            </div>
        </div>
    </section>

    <!-- Seção 2: O Problema (Dores Reais) -->
    <section class="py-24 relative bg-brand-surface border-y border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="reveal">
                    <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-6">
                        O Custo Oculto da <span class="text-brand-secondary">Ineficiência Tecnológica</span>
                    </h2>
                    <p class="text-brand-muted mb-6 leading-relaxed">
                        Muitas empresas operam com sistemas legados, integrações frágeis e processos manuais que drenam recursos. Não é apenas sobre "ter um site", é sobre quanto dinheiro você perde por não ter uma infraestrutura digital inteligente.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3">
                            <div class="mt-1 w-5 h-5 rounded-full bg-red-500/20 flex items-center justify-center text-red-400 text-xs">✕</div>
                            <span class="text-brand-text">Perda de dados críticos e falta de governança.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="mt-1 w-5 h-5 rounded-full bg-red-500/20 flex items-center justify-center text-red-400 text-xs">✕</div>
                            <span class="text-brand-text">Lentidão operacional e gargalos em processos manuais.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="mt-1 w-5 h-5 rounded-full bg-red-500/20 flex items-center justify-center text-red-400 text-xs">✕</div>
                            <span class="text-brand-text">Sistemas que não escalam com o crescimento da empresa.</span>
                        </li>
                    </ul>
                </div>
                <div class="reveal relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-brand-secondary to-brand-primary opacity-20 blur-2xl rounded-xl"></div>
                    <div class="relative glass-card p-8 rounded-xl border border-white/10">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-white font-semibold">Análise de Risco Operacional</h3>
                            <span class="px-2 py-1 rounded text-xs bg-red-500/20 text-red-400 border border-red-500/20">Crítico</span>
                        </div>
                        <!-- Gráfico ilustrativo CSS -->
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-xs text-brand-muted mb-1"><span>Custo Operacional</span> <span>Alto</span></div>
                                <div class="w-full h-2 bg-white/5 rounded-full overflow-hidden">
                                    <div class="h-full bg-red-500 w-[85%]"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs text-brand-muted mb-1"><span>Eficiência</span> <span>Baixa</span></div>
                                <div class="w-full h-2 bg-white/5 rounded-full overflow-hidden">
                                    <div class="h-full bg-brand-muted w-[30%]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção 3: Soluções e Impacto -->
    <section id="solucoes" class="py-24 relative bg-brand-darker">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <span class="text-brand-cyan font-semibold tracking-wider text-sm uppercase">Nossa Abordagem</span>
                <h2 class="text-3xl md:text-5xl font-display font-bold text-white mt-3 mb-6">
                    Engenharia para <span class="text-brand-primary">Resultados Reais</span>
                </h2>
                <p class="text-brand-muted">
                    Não vendemos código, entregamos soluções de negócio. Nossa stack tecnológica é selecionada para garantir performance, segurança e longevidade.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="glass-card p-8 rounded-2xl reveal group cursor-pointer">
                    <div class="w-14 h-14 rounded-xl bg-brand-primary/10 flex items-center justify-center mb-6 group-hover:bg-brand-primary/20 transition-colors">
                        <svg class="w-7 h-7 text-brand-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Sistemas Customizados</h3>
                    <p class="text-brand-muted text-sm leading-relaxed mb-6">
                        Desenvolvimento de plataformas web e mobile sob medida, focadas em resolver dores específicas da sua operação.
                    </p>
                    <div class="border-t border-white/5 pt-4">
                        <span class="text-brand-cyan text-sm font-medium">Impacto: +40% Produtividade</span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="glass-card p-8 rounded-2xl reveal group cursor-pointer" style="transition-delay: 100ms;">
                    <div class="w-14 h-14 rounded-xl bg-brand-secondary/10 flex items-center justify-center mb-6 group-hover:bg-brand-secondary/20 transition-colors">
                        <svg class="w-7 h-7 text-brand-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Automação de Processos</h3>
                    <p class="text-brand-muted text-sm leading-relaxed mb-6">
                        Eliminação de tarefas repetitivas e integração de sistemas díspares para criar um fluxo de trabalho contínuo.
                    </p>
                    <div class="border-t border-white/5 pt-4">
                        <span class="text-brand-secondary text-sm font-medium">Impacto: -30% Custos Operacionais</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="glass-card p-8 rounded-2xl reveal group cursor-pointer" style="transition-delay: 200ms;">
                    <div class="w-14 h-14 rounded-xl bg-brand-cyan/10 flex items-center justify-center mb-6 group-hover:bg-brand-cyan/20 transition-colors">
                        <svg class="w-7 h-7 text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Modernização de Legado</h3>
                    <p class="text-brand-muted text-sm leading-relaxed mb-6">
                        Refatoração e migração de sistemas antigos para arquiteturas modernas, escaláveis e seguras na nuvem.
                    </p>
                    <div class="border-t border-white/5 pt-4">
                        <span class="text-brand-cyan text-sm font-medium">Impacto: Escala Ilimitada</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de CTA Final -->
    <section id="contato" class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-brand-primary/5"></div>
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-8">
                Pronto para <span class="text-brand-primary">profissionalizar</span> sua tecnologia?
            </h2>
            <p class="text-xl text-brand-muted mb-12 max-w-2xl mx-auto">
                Agende uma sessão estratégica gratuita de 30 minutos. Vamos analisar sua infraestrutura atual e desenhar um roadmap de evolução.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="#" class="btn-gradient px-10 py-5 rounded-full text-white font-bold text-lg shadow-2xl hover:shadow-brand-primary/60 transform hover:-translate-y-1 transition-all">
                    Agendar Diagnóstico Estratégico
                </a>
            </div>
            <p class="mt-6 text-sm text-brand-muted">
                Sem compromisso. Apenas engenharia de verdade.
            </p>
        </div>
    </section>

<?php
$page->renderFooter();
?>