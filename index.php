<?php
// Autoload simples ou require direto
require_once 'includes/TraxterPage.php';

$page = new TraxterPage();
$page->renderHeader();

// Conteúdo centralizado: edite aqui sem mexer no HTML
$servicos = [
    ['t' => 'Engenharia de Software', 'd' => 'Plataformas web e mobile sob medida, com arquitetura pensada para crescer com a operação.', 'href' => 'engenharia-software.php', 'n' => '01'],
    ['t' => 'Automação Inteligente', 'd' => 'Tarefas repetitivas eliminadas e fluxos conectados, do pedido ao financeiro.', 'href' => 'automacao-inteligente.php', 'n' => '02'],
    ['t' => 'Integração de APIs', 'd' => 'Sistemas que hoje não conversam passam a trabalhar juntos, com segurança e rastreio.', 'href' => 'integracao-apis.php', 'n' => '03'],
    ['t' => 'Consultoria Técnica', 'd' => 'Diagnóstico, roadmap e governança para decidir tecnologia com critério de negócio.', 'href' => 'consultoria-tecnica.php', 'n' => '04'],
];
$etapas = [
    ['Discovery', 'Entendemos o negócio, o gargalo e o que medir.'],
    ['Arquitetura', 'Desenhamos a solução, a stack e a integração.'],
    ['Desenvolvimento', 'Entregas curtas e validadas, sem surpresa no fim.'],
    ['QA e Segurança', 'Testes, revisão e proteção antes de ir ao ar.'],
    ['Deploy e Escala', 'Publicação, monitoramento e evolução contínua.'],
];
$pilares = [
    ['Segurança desde o projeto', 'Security by design em cada camada.'],
    ['Pronto para escalar', 'Arquitetura cloud native.'],
    ['SLA formal', 'Prazos e responsabilidades por escrito.'],
    ['Governança', 'Documentação e rastreabilidade.'],
];
?>

    <!-- HERO -->
    <section class="relative min-h-screen flex items-center pt-28 pb-16 overflow-hidden bg-brand-darker">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-[-20%] right-[-10%] w-[620px] h-[620px] bg-brand-primary/10 blur-[140px] rounded-full"></div>
            <div class="absolute bottom-[-20%] left-[-10%] w-[560px] h-[560px] bg-brand-secondary/30 blur-[140px] rounded-full"></div>
            <div class="absolute inset-0 bg-[linear-gradient(rgba(185,200,230,0.05)_1px,transparent_1px),linear-gradient(90deg,rgba(185,200,230,0.05)_1px,transparent_1px)] bg-[size:64px_64px] [mask-image:radial-gradient(ellipse_70%_70%_at_60%_40%,#000_40%,transparent_100%)]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-7">
                    <span class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.18em] text-brand-cyan mb-6 animate-fade-in-up">
                        <span class="w-2 h-2 rounded-full bg-brand-primary"></span> Automações e Sistemas
                    </span>
                    <h1 class="text-5xl md:text-7xl font-display font-extrabold text-white leading-[1.02] mb-8 animate-fade-in-up" style="animation-delay:.1s">
                        Tecnologia que <span class="text-brand-primary">movimenta</span> o seu negócio.
                    </h1>
                    <p class="text-lg md:text-xl text-brand-muted max-w-xl leading-relaxed mb-10 animate-fade-in-up" style="animation-delay:.2s">
                        Sistemas, automação e integrações sob medida para empresas que precisam de escala, governança e eficiência. Sem clichês, apenas engenharia robusta.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up" style="animation-delay:.3s">
                        <a href="contato.php" class="btn-gradient inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl font-semibold">
                            Agendar diagnóstico
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                        </a>
                        <a href="cases.php" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl border border-white/15 text-white font-medium hover:bg-white/5 hover:border-white/30 transition-all">
                            Ver cases
                        </a>
                    </div>
                </div>

                <!-- Visual: trilha + nó (sistema gráfico da marca) -->
                <div class="lg:col-span-5 relative h-[320px] md:h-[440px]" aria-hidden="true">
                    <svg viewBox="0 0 440 440" class="absolute inset-0 w-full h-full" fill="none">
                        <defs>
                            <linearGradient id="trk" x1="0" y1="1" x2="1" y2="0">
                                <stop offset="0" stop-color="#324A78" stop-opacity="0"/>
                                <stop offset=".6" stop-color="#B9C8E6" stop-opacity=".55"/>
                                <stop offset="1" stop-color="#FCA311"/>
                            </linearGradient>
                            <radialGradient id="nodeGlow"><stop offset="0" stop-color="#FCA311" stop-opacity=".55"/><stop offset="1" stop-color="#FCA311" stop-opacity="0"/></radialGradient>
                        </defs>
                        <circle cx="330" cy="110" r="150" stroke="#324A78" stroke-opacity=".5"/>
                        <circle cx="330" cy="110" r="100" stroke="#324A78" stroke-opacity=".35"/>
                        <path d="M10 400 H120 V320 H230 V230 H320 V110 H430" stroke="url(#trk)" stroke-width="10" stroke-linejoin="round" stroke-linecap="round"/>
                        <path d="M10 360 H80 V290 H190 V200 H280 V70 H430" stroke="#B9C8E6" stroke-opacity=".18" stroke-width="3" stroke-linejoin="round"/>
                        <circle cx="320" cy="110" r="70" fill="url(#nodeGlow)"/>
                        <circle cx="320" cy="110" r="20" fill="#FCA311"/>
                        <circle cx="320" cy="110" r="34" stroke="#FCA311" stroke-opacity=".5"/>
                    </svg>
                    <div class="absolute left-0 bottom-6 md:bottom-10 glass-card rounded-xl px-4 py-3 text-xs font-mono text-brand-muted">
                        <span class="text-brand-cyan">●</span> fluxo ativo
                    </div>
                </div>
            </div>

            <!-- Faixa de clientes -->
            <div class="mt-16 rounded-2xl border border-white/10 bg-white/[0.03] backdrop-blur-sm px-6 py-6 animate-fade-in-up" style="animation-delay:.4s">
                <p class="font-mono text-[11px] uppercase tracking-[0.18em] text-brand-muted mb-5">Empresas que confiam na nossa engenharia</p>
                <div class="flex flex-wrap items-center gap-6 md:gap-12">
                    <a href="https://ariabpo.com.br/" target="_blank" rel="noopener noreferrer" title="Visitar site da Aria Consultoria"><img src="assets/logos/aria.png" alt="Aria Consultoria" class="h-12 w-auto object-contain opacity-70 grayscale hover:grayscale-0 hover:opacity-100 transition-all rounded-lg p-2 bg-white"></a>
                    <a href="https://ctprice.com.br/" target="_blank" rel="noopener noreferrer" title="Visitar site da CT Price"><img src="assets/logos/ctprice.png" alt="CT Price" class="h-12 w-auto object-contain opacity-70 grayscale hover:grayscale-0 hover:opacity-100 transition-all rounded-lg p-2 bg-white"></a>
                    <a href="https://madeplant.com.br/" target="_blank" rel="noopener noreferrer" title="Visitar site da Madeplant Florestal"><img src="assets/logos/madeplant.png" alt="Madeplant Florestal" class="h-12 w-auto object-contain opacity-70 grayscale hover:grayscale-0 hover:opacity-100 transition-all rounded-lg p-2 bg-white"></a>
                    <a href="https://casamentosemfloripa.com.br/" target="_blank" rel="noopener noreferrer" title="Visitar site da Nani Eventos"><img src="assets/logos/nanieventos.png" alt="Nani Eventos" class="h-12 w-auto object-contain opacity-70 grayscale hover:grayscale-0 hover:opacity-100 transition-all rounded-lg p-2 bg-white"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- O QUE FAZEMOS (seção clara) -->
    <section id="solucoes" class="bg-[#EEF2FA] text-brand-surface py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 items-end mb-14 reveal">
                <div>
                    <span class="font-mono text-xs uppercase tracking-[0.18em] text-[#8F4F0A]">O que fazemos</span>
                    <h2 class="font-display font-extrabold text-4xl md:text-5xl leading-[1.05] mt-3">Soluções sob medida para operações reais.</h2>
                </div>
                <p class="text-slate-600 text-lg leading-relaxed">Não vendemos código, entregamos solução de negócio. A stack é escolhida para dar performance, segurança e longevidade.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <?php foreach ($servicos as $i => $s): $dark = ($i === 3); ?>
                <a href="<?php echo $s['href']; ?>" class="reveal group flex flex-col justify-between min-h-[280px] rounded-2xl p-7 transition-all duration-300 hover:-translate-y-1 <?php echo $dark ? 'bg-brand-darker text-white' : 'bg-white text-brand-surface shadow-[0_1px_0_rgba(20,33,61,0.06)] hover:shadow-xl hover:shadow-brand-surface/10'; ?>" style="transition-delay: <?php echo $i * 80; ?>ms">
                    <div>
                        <span class="inline-flex items-center justify-center w-11 h-11 rounded-xl font-mono text-sm font-medium <?php echo $dark ? 'bg-brand-primary text-black' : 'bg-brand-surface text-white'; ?>"><?php echo $s['n']; ?></span>
                        <h3 class="font-display font-bold text-xl mt-6 mb-3"><?php echo $s['t']; ?></h3>
                        <p class="text-sm leading-relaxed <?php echo $dark ? 'text-brand-muted' : 'text-slate-600'; ?>"><?php echo $s['d']; ?></p>
                    </div>
                    <span class="mt-8 inline-flex items-center gap-2 text-sm font-semibold <?php echo $dark ? 'text-brand-cyan' : 'text-brand-surface'; ?>">
                        Saiba mais
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- O PROBLEMA -->
    <section class="bg-brand-darker py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl bg-brand-surface border border-white/10 p-8 md:p-14 grid lg:grid-cols-2 gap-12 items-center overflow-hidden relative">
                <div class="absolute -right-24 -top-24 w-80 h-80 rounded-full bg-brand-primary/10 blur-[100px] pointer-events-none"></div>
                <div class="reveal relative">
                    <span class="font-mono text-xs uppercase tracking-[0.18em] text-brand-cyan">O problema</span>
                    <h2 class="font-display font-extrabold text-3xl md:text-4xl text-white mt-3 mb-6 leading-[1.08]">O custo oculto da <span class="text-brand-primary">ineficiência tecnológica</span>.</h2>
                    <p class="text-brand-muted leading-relaxed mb-8">Sistemas legados, integrações frágeis e processos manuais drenam recursos todos os dias. Não é sobre "ter um site": é sobre quanto você perde sem uma infraestrutura digital inteligente.</p>
                    <ul class="space-y-4">
                        <?php foreach (['Perda de dados críticos e falta de governança.', 'Lentidão operacional e gargalos em processos manuais.', 'Sistemas que não escalam com o crescimento da empresa.'] as $p): ?>
                        <li class="flex items-start gap-3 text-brand-text">
                            <span class="mt-2 w-2 h-2 rounded-full bg-brand-primary flex-shrink-0"></span><?php echo $p; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="reveal relative">
                    <div class="rounded-2xl bg-brand-darker/70 border border-white/10 p-6 md:p-8">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-white font-semibold">Análise de risco operacional</h3>
                            <span class="font-mono text-[11px] uppercase tracking-wider px-2 py-1 rounded bg-white/5 text-brand-cyan border border-white/10">Ilustrativo</span>
                        </div>
                        <div class="space-y-5">
                            <div>
                                <div class="flex justify-between text-xs text-brand-muted mb-2"><span>Custo operacional</span><span>Alto</span></div>
                                <div class="w-full h-2 bg-white/5 rounded-full overflow-hidden"><div class="h-full bg-brand-primary w-[85%]"></div></div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs text-brand-muted mb-2"><span>Eficiência</span><span>Baixa</span></div>
                                <div class="w-full h-2 bg-white/5 rounded-full overflow-hidden"><div class="h-full bg-brand-muted w-[30%]"></div></div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs text-brand-muted mb-2"><span>Integração entre sistemas</span><span>Parcial</span></div>
                                <div class="w-full h-2 bg-white/5 rounded-full overflow-hidden"><div class="h-full bg-brand-secondary w-[45%]"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESSO -->
    <section class="bg-brand-darker pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-12 reveal">
                <div>
                    <span class="font-mono text-xs uppercase tracking-[0.18em] text-brand-cyan">Como trabalhamos</span>
                    <h2 class="font-display font-extrabold text-3xl md:text-5xl text-white mt-3">Um processo claro, do início ao fim.</h2>
                </div>
                <a href="metodologia.php" class="text-sm font-semibold text-brand-cyan hover:text-white transition-colors inline-flex items-center gap-2">Ver metodologia <span aria-hidden="true">→</span></a>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4">
                <?php foreach ($etapas as $i => $e): ?>
                <div class="reveal rounded-2xl border border-white/10 bg-white/[0.03] p-6 hover:border-brand-primary/40 transition-colors" style="transition-delay: <?php echo $i * 70; ?>ms">
                    <span class="font-mono text-sm text-brand-primary">0<?php echo $i + 1; ?></span>
                    <h3 class="font-display font-bold text-lg text-white mt-6 mb-2"><?php echo $e[0]; ?></h3>
                    <p class="text-sm text-brand-muted leading-relaxed"><?php echo $e[1]; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FAIXA ÂMBAR: pilares -->
    <section class="bg-brand-darker pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl bg-brand-primary text-black px-8 py-10 grid sm:grid-cols-2 lg:grid-cols-4 gap-8 reveal">
                <?php foreach ($pilares as $p): ?>
                <div>
                    <h3 class="font-display font-extrabold text-xl leading-tight"><?php echo $p[0]; ?></h3>
                    <p class="text-sm mt-2 text-black/75"><?php echo $p[1]; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section id="contato" class="bg-brand-darker pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal relative overflow-hidden rounded-3xl bg-gradient-to-br from-brand-surface to-brand-dark border border-white/10 px-8 md:px-16 py-16 md:py-20">
                <svg viewBox="0 0 400 200" class="absolute right-0 bottom-0 w-[60%] max-w-[520px] pointer-events-none" fill="none" aria-hidden="true">
                    <path d="M0 170 H120 V110 H230 V50 H400" stroke="#B9C8E6" stroke-opacity=".25" stroke-width="6" stroke-linejoin="round"/>
                    <circle cx="230" cy="50" r="12" fill="#FCA311"/>
                </svg>
                <div class="relative max-w-2xl">
                    <h2 class="font-display font-extrabold text-4xl md:text-5xl text-white leading-[1.05] mb-6">Pronto para <span class="text-brand-primary">profissionalizar</span> sua tecnologia?</h2>
                    <p class="text-lg text-brand-muted mb-10">Agende uma sessão estratégica gratuita de 30 minutos. Analisamos sua infraestrutura atual e desenhamos um roadmap de evolução.</p>
                    <a href="contato.php" class="btn-gradient inline-flex items-center gap-2 px-8 py-4 rounded-xl font-semibold">Agendar diagnóstico estratégico
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                    </a>
                    <p class="mt-5 text-sm text-brand-muted">Sem compromisso. Apenas engenharia de verdade.</p>
                </div>
            </div>
        </div>
    </section>

<?php
$page->renderFooter();
