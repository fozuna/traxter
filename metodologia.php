<?php
require_once 'includes/TraxterPage.php';
$page = new TraxterPage();
$page->renderHeader('metodologia');
?>

<!-- Hero Section Interna -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 bg-brand-darker">
        <div class="absolute top-[-10%] left-[20%] w-[500px] h-[500px] bg-brand-primary/10 blur-[120px] rounded-full animate-pulse-slow"></div>
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:64px_64px] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_50%,#000_70%,transparent_100%)]"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="text-brand-cyan font-semibold tracking-wider text-sm uppercase mb-4 block animate-fade-in-up">Nossa Metodologia</span>
        <h1 class="text-4xl md:text-6xl font-display font-bold text-white mb-6 animate-fade-in-up" style="animation-delay: 0.1s;">
            Engenharia não é sorte.<br/>É <span class="text-gradient-animated">Processo</span>.
        </h1>
        <p class="text-lg text-brand-muted max-w-3xl mx-auto leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
            Transformamos incerteza em previsibilidade através de um framework de desenvolvimento testado em batalha. Cada etapa é desenhada para mitigar riscos e maximizar valor.
        </p>
    </div>
</section>

<!-- Timeline do Processo -->
<section class="py-24 bg-brand-surface relative border-t border-white/5">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative">
            <!-- Linha Central -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-px bg-gradient-to-b from-brand-primary via-brand-secondary to-transparent hidden md:block"></div>

            <!-- Step 1 -->
            <div class="relative z-10 mb-20 reveal">
                <div class="flex flex-col md:flex-row items-center justify-between w-full">
                    <div class="md:w-5/12 text-right order-1 pr-8">
                        <h3 class="text-2xl font-display font-bold text-white mb-2">1. Discovery & Estratégia</h3>
                        <p class="text-brand-muted text-sm leading-relaxed">
                            Mergulhamos no seu negócio para entender o problema raiz, não apenas o sintoma. Definimos KPIs, escopo e viabilidade técnica antes de escrever uma linha de código.
                        </p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-brand-primary border-4 border-brand-darker shadow-[0_0_20px_rgba(252,163,17,0.5)] z-10 flex items-center justify-center text-black font-bold text-lg order-2 my-4 md:my-0">01</div>
                    <div class="md:w-5/12 pl-8 order-3">
                        <span class="text-brand-primary text-xs font-bold uppercase tracking-wider bg-brand-primary/10 px-3 py-1 rounded-full">Planejamento</span>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative z-10 mb-20 reveal">
                <div class="flex flex-col md:flex-row items-center justify-between w-full">
                    <div class="md:w-5/12 text-right order-1 md:order-3 pl-8">
                        <h3 class="text-2xl font-display font-bold text-white mb-2">2. Arquitetura de Solução</h3>
                        <p class="text-brand-muted text-sm leading-relaxed">
                            Desenhamos sistemas resilientes e escaláveis. Definimos stack, infraestrutura cloud, modelagem de dados e padrões de integração.
                        </p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-brand-secondary border-4 border-brand-darker shadow-[0_0_20px_rgba(143,165,208,0.5)] z-10 flex items-center justify-center text-white font-bold text-lg order-2 my-4 md:my-0">02</div>
                    <div class="md:w-5/12 pr-8 text-right md:text-left order-3 md:order-1">
                        <span class="text-brand-secondary text-xs font-bold uppercase tracking-wider bg-brand-secondary/10 px-3 py-1 rounded-full">Design</span>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative z-10 mb-20 reveal">
                <div class="flex flex-col md:flex-row items-center justify-between w-full">
                    <div class="md:w-5/12 text-right order-1 pr-8">
                        <h3 class="text-2xl font-display font-bold text-white mb-2">3. Desenvolvimento Ágil</h3>
                        <p class="text-brand-muted text-sm leading-relaxed">
                            Ciclos curtos (Sprints), entrega contínua e feedback rápido. Código limpo, revisado por pares e documentado.
                        </p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-brand-cyan border-4 border-brand-darker shadow-[0_0_20px_rgba(252,163,17,0.5)] z-10 flex items-center justify-center text-black font-bold text-lg order-2 my-4 md:my-0">03</div>
                    <div class="md:w-5/12 pl-8 order-3">
                        <span class="text-brand-cyan text-xs font-bold uppercase tracking-wider bg-brand-cyan/10 px-3 py-1 rounded-full">Execução</span>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="relative z-10 mb-20 reveal">
                <div class="flex flex-col md:flex-row items-center justify-between w-full">
                    <div class="md:w-5/12 text-right order-1 md:order-3 pl-8">
                        <h3 class="text-2xl font-display font-bold text-white mb-2">4. QA & Segurança</h3>
                        <p class="text-brand-muted text-sm leading-relaxed">
                            Testes automatizados, análise de vulnerabilidades e validação de performance. Nada vai para produção sem garantia de qualidade.
                        </p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-brand-primary border-4 border-brand-darker shadow-[0_0_20px_rgba(252,163,17,0.5)] z-10 flex items-center justify-center text-black font-bold text-lg order-2 my-4 md:my-0">04</div>
                    <div class="md:w-5/12 pr-8 text-right md:text-left order-3 md:order-1">
                        <span class="text-brand-primary text-xs font-bold uppercase tracking-wider bg-brand-primary/10 px-3 py-1 rounded-full">Qualidade</span>
                    </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="relative z-10 reveal">
                <div class="flex flex-col md:flex-row items-center justify-between w-full">
                    <div class="md:w-5/12 text-right order-1 pr-8">
                        <h3 class="text-2xl font-display font-bold text-white mb-2">5. Deploy & Escala</h3>
                        <p class="text-brand-muted text-sm leading-relaxed">
                            Implantação automatizada (CI/CD) com zero downtime. Monitoramento em tempo real e suporte para crescimento exponencial.
                        </p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-green-500 border-4 border-brand-darker shadow-[0_0_20px_rgba(34,197,94,0.5)] z-10 flex items-center justify-center text-white font-bold text-lg order-2 my-4 md:my-0">05</div>
                    <div class="md:w-5/12 pl-8 order-3">
                        <span class="text-green-500 text-xs font-bold uppercase tracking-wider bg-green-500/10 px-3 py-1 rounded-full">Entrega</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tech Stack -->
<section class="py-20 bg-brand-darker border-t border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
        <h2 class="text-3xl font-display font-bold text-white mb-12">Stack Tecnológica</h2>
        <div class="flex flex-wrap justify-center gap-4 md:gap-8">
            <span class="px-6 py-3 rounded-lg bg-white/5 border border-white/10 text-brand-muted hover:text-white hover:border-brand-primary/50 transition-all cursor-default">PHP 8+</span>
            <span class="px-6 py-3 rounded-lg bg-white/5 border border-white/10 text-brand-muted hover:text-white hover:border-brand-primary/50 transition-all cursor-default">Laravel</span>
            <span class="px-6 py-3 rounded-lg bg-white/5 border border-white/10 text-brand-muted hover:text-white hover:border-brand-primary/50 transition-all cursor-default">Node.js</span>
            <span class="px-6 py-3 rounded-lg bg-white/5 border border-white/10 text-brand-muted hover:text-white hover:border-brand-primary/50 transition-all cursor-default">React / Vue</span>
            <span class="px-6 py-3 rounded-lg bg-white/5 border border-white/10 text-brand-muted hover:text-white hover:border-brand-primary/50 transition-all cursor-default">Docker</span>
            <span class="px-6 py-3 rounded-lg bg-white/5 border border-white/10 text-brand-muted hover:text-white hover:border-brand-primary/50 transition-all cursor-default">AWS / Azure</span>
            <span class="px-6 py-3 rounded-lg bg-white/5 border border-white/10 text-brand-muted hover:text-white hover:border-brand-primary/50 transition-all cursor-default">PostgreSQL</span>
            <span class="px-6 py-3 rounded-lg bg-white/5 border border-white/10 text-brand-muted hover:text-white hover:border-brand-primary/50 transition-all cursor-default">Redis</span>
        </div>
    </div>
</section>

<!-- CTA Final -->
<section class="py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-brand-primary/5"></div>
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10 reveal">
        <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-8">
            Segurança para seu projeto
        </h2>
        <p class="text-xl text-brand-muted mb-12 max-w-2xl mx-auto">
            Não arrisque seu negócio com amadorismo. Tenha uma equipe de engenharia de elite cuidando do seu produto.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="contato.php" class="btn-gradient px-10 py-5 rounded-full text-white font-bold text-lg shadow-2xl hover:shadow-brand-primary/60 transform hover:-translate-y-1 transition-all">
                Falar com Engenheiro
            </a>
        </div>
    </div>
</section>

<?php
$page->renderFooter();
?>