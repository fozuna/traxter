<?php
require_once 'includes/TraxterPage.php';
$page = new TraxterPage(
    'Cases | Traxter - Projetos reais de automação e sistemas',
    'Projetos da Traxter em operação: sistemas sob medida, automações e integrações para empresas reais.'
);
$page->renderHeader('cases');
$e = [TraxterPage::class, 'e'];

/*
 * Cases reais. Somente itens com 'publicado' => true aparecem no site.
 * Regra: só publicar números medidos e com autorização do cliente.
 */
$cases = [
    [
        'publicado' => true,
        'cliente'   => 'CT Price',
        'logo'      => 'ctprice.png',
        'area'      => 'Recursos Humanos · Sistema sob medida',
        'titulo'    => 'Recrutamento organizado, do anúncio da vaga à contratação',
        'desafio'   => 'Currículos chegavam por canais diferentes, o acompanhamento de cada candidato dependia de controles manuais e o programa de indicação de colaboradores não tinha controle centralizado de comissões.',
        'solucao'   => 'Sistema de recrutamento próprio, desenvolvido para a rotina da equipe de RH da CT Price e hospedado na infraestrutura do cliente.',
        'entregas'  => [
            'Portal público de vagas com candidatura online e envio de currículo em PDF',
            'Funil de seleção visual (kanban) com histórico de cada movimentação',
            'Programa de indicação de colaboradores com controle de pagamento das comissões',
            'Perfis de acesso (administração, RH, visualização) e trilha de auditoria',
            'Recuperação de senha, política de senhas e proteção contra tentativas de acesso indevido',
        ],
        // TODO (Fabio): adicionar resultados medidos, ex.: ['valor' => 'X', 'rotulo' => 'candidaturas/mês']
        'resultados' => [],
    ],
    // TODO (Fabio): preencher e publicar o case da Madeplant.
    [
        'publicado' => false,
        'cliente'   => 'Madeplant Florestal',
        'logo'      => 'madeplant.png',
        'area'      => '',
        'titulo'    => '',
        'desafio'   => '',
        'solucao'   => '',
        'entregas'  => [],
        'resultados' => [],
    ],
    // TODO (Fabio): preencher e publicar o case da Nani Eventos.
    [
        'publicado' => false,
        'cliente'   => 'Nani Eventos',
        'logo'      => 'nanieventos.png',
        'area'      => '',
        'titulo'    => '',
        'desafio'   => '',
        'solucao'   => '',
        'entregas'  => [],
        'resultados' => [],
    ],
];
$cases = array_filter($cases, fn($c) => $c['publicado']);
?>

<section class="relative pt-32 pb-16 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden z-0">
        <div class="absolute top-[-15%] left-[5%] w-[600px] h-[600px] bg-brand-primary/15 blur-[120px] rounded-full animate-pulse-slow"></div>
        <div class="absolute bottom-[-10%] right-[5%] w-[500px] h-[500px] bg-brand-cyan/15 blur-[120px] rounded-full animate-pulse-slow" style="animation-delay: 2s;"></div>
    </div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-6 animate-fade-in-up">
            <span class="w-2 h-2 rounded-full bg-brand-primary animate-pulse"></span>
            <span class="text-brand-primary text-xs font-medium uppercase tracking-wider">Cases</span>
        </div>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-display font-bold text-white tracking-tight mb-6 leading-tight animate-fade-in-up" style="animation-delay: .1s;">
            Projetos reais, <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary to-brand-cyan">em operação</span>
        </h1>
        <p class="text-xl text-brand-muted leading-relaxed animate-fade-in-up" style="animation-delay: .2s;">
            Sem cases ilustrativos: aqui estão sistemas e automações que nossos clientes usam no dia a dia.
        </p>
    </div>
</section>

<?php foreach ($cases as $c): ?>
<section class="py-16 bg-brand-darker border-t border-white/5">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass-card rounded-2xl p-8 md:p-12 reveal">
            <div class="flex flex-wrap items-center gap-4 mb-6">
                <img src="assets/logos/<?= $e($c['logo']) ?>" alt="<?= $e($c['cliente']) ?>" class="h-14 w-auto rounded-lg bg-white p-2" loading="lazy">
                <div>
                    <div class="text-white font-semibold"><?= $e($c['cliente']) ?></div>
                    <div class="text-brand-cyan text-sm"><?= $e($c['area']) ?></div>
                </div>
            </div>
            <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-8"><?= $e($c['titulo']) ?></h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div>
                    <h3 class="text-sm uppercase tracking-wider text-red-400 font-semibold mb-3">O desafio</h3>
                    <p class="text-brand-muted leading-relaxed mb-8"><?= $e($c['desafio']) ?></p>
                    <h3 class="text-sm uppercase tracking-wider text-brand-cyan font-semibold mb-3">A solução</h3>
                    <p class="text-brand-muted leading-relaxed"><?= $e($c['solucao']) ?></p>
                </div>
                <div>
                    <h3 class="text-sm uppercase tracking-wider text-green-400 font-semibold mb-3">O que foi entregue</h3>
                    <ul class="space-y-3">
                        <?php foreach ($c['entregas'] as $item): ?>
                        <li class="flex gap-3 text-brand-text"><span class="text-green-400">✓</span><span><?= $e($item) ?></span></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <?php if ($c['resultados']): ?>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-10 pt-8 border-t border-white/5">
                <?php foreach ($c['resultados'] as $r): ?>
                <div>
                    <div class="text-3xl font-display font-bold text-white"><?= $e($r['valor']) ?></div>
                    <div class="text-sm text-brand-muted"><?= $e($r['rotulo']) ?></div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endforeach; ?>

<!-- Depoimento real -->
<section class="py-16 bg-brand-darker">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass-card rounded-2xl p-8 md:p-12 reveal">
            <blockquote class="text-xl md:text-2xl text-white leading-relaxed mb-8">
                "A Traxter não apenas entregou o software, eles reestruturaram nossa visão de produto. A arquitetura proposta reduziu nosso tempo de resposta em 60% e abriu portas para novos mercados que antes eram tecnicamente inviáveis."
            </blockquote>
            <div class="flex items-center gap-4">
                <img src="assets/logos/aria.png" alt="Aria Consultoria" class="h-12 w-auto rounded-lg bg-white p-1.5" loading="lazy">
                <div>
                    <strong class="block text-white">Diretor de Tecnologia</strong>
                    <span class="text-brand-muted text-sm">Aria Consultoria</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-brand-primary/5"></div>
    <div class="max-w-3xl mx-auto px-4 text-center relative z-10 reveal">
        <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-6">Seu processo pode ser o próximo case</h2>
        <p class="text-lg text-brand-muted mb-10">Conte o que mais toma tempo da sua equipe. O diagnóstico é gratuito.</p>
        <a href="<?= $e(TraxterPage::whatsappUrl('Olá! Vi os cases no site e quero conversar sobre um projeto.')) ?>" target="_blank" rel="noopener" data-wa="cases"
           class="inline-flex items-center gap-3 bg-green-600 hover:bg-green-500 px-10 py-5 rounded-full text-white font-bold text-lg shadow-2xl shadow-green-600/30 transition-all">
            <?= TraxterPage::whatsappIcon('w-6 h-6') ?> Falar no WhatsApp
        </a>
    </div>
</section>

<?php
$page->renderFooter();
