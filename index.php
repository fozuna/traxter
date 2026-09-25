<?php
require_once 'includes/TraxterPage.php';

$page = new TraxterPage();
$page->renderHeader('home');

$e = [TraxterPage::class, 'e'];

$clientes = [
    ['url' => 'https://ariabpo.com.br/',             'logo' => 'aria.png',        'nome' => 'Aria Consultoria'],
    ['url' => 'https://ctprice.com.br/',             'logo' => 'ctprice.png',     'nome' => 'CT Price'],
    ['url' => 'https://madeplant.com.br/',           'logo' => 'madeplant.png',   'nome' => 'Madeplant Florestal'],
    ['url' => 'https://casamentosemfloripa.com.br/', 'logo' => 'nanieventos.png', 'nome' => 'Nani Eventos'],
];

$dores = [
    'Cliente manda mensagem no WhatsApp e espera horas (ou nunca recebe resposta).',
    'A equipe perde o dia cobrando documentos, pagamentos e confirmações, um por um.',
    'Informação espalhada em planilhas, cadernos e grupos de WhatsApp.',
    'Sistemas que não conversam: alguém digita a mesma coisa duas vezes.',
];

$solucoes = [
    [
        'titulo' => 'Atendimento com IA no WhatsApp',
        'texto'  => 'Um assistente que responde na hora, 24h por dia, com as informações da sua empresa, e passa para a sua equipe quando precisa de gente.',
        'itens'  => ['Responde dúvidas e envia informações', 'Qualifica o cliente antes do vendedor', 'Agenda horários e visitas', 'Transfere para um humano quando necessário'],
        'cor'    => 'text-green-400',
        'bg'     => 'bg-green-500/10',
        'icone'  => 'M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z',
    ],
    [
        'titulo' => 'Cobranças e rotinas no automático',
        'texto'  => 'As tarefas repetitivas que tomam o dia da sua equipe passam a rodar sozinhas, com registro de tudo o que foi enviado e respondido.',
        'itens'  => ['Lembretes de pagamento e vencimento', 'Cobrança de documentos de clientes', 'Confirmação de agendamentos', 'Relatórios enviados sem ninguém montar'],
        'cor'    => 'text-brand-cyan',
        'bg'     => 'bg-brand-cyan/10',
        'icone'  => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
    ],
    [
        'titulo' => 'Sistemas sob medida e integrações',
        'texto'  => 'Quando a planilha não dá mais conta, criamos o sistema do tamanho da sua operação e conectamos com o que você já usa.',
        'itens'  => ['Painéis e sistemas web internos', 'Integração entre ERP, planilhas e WhatsApp', 'Portais para clientes e candidatos', 'Migração de planilhas para sistema'],
        'cor'    => 'text-brand-primary',
        'bg'     => 'bg-brand-primary/10',
        'icone'  => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
    ],
];

$passos = [
    ['n' => '1', 'titulo' => 'Diagnóstico gratuito', 'texto' => 'Uma conversa de 30 minutos, presencial em Campo Grande ou online, para entender onde sua operação perde tempo e dinheiro.'],
    ['n' => '2', 'titulo' => 'Piloto em um processo', 'texto' => 'Começamos por um processo só, o que mais dói. Você vê funcionando no seu dia a dia antes de ampliar.'],
    ['n' => '3', 'titulo' => 'Acompanhamento contínuo', 'texto' => 'Suporte, ajustes e novas automações conforme a empresa cresce, com um responsável que conhece a sua operação.'],
];

// TODO (Fabio): revisar as respostas abaixo para garantir que refletem exatamente o que a Traxter oferece.
$faq = [
    ['p' => 'Preciso trocar os sistemas que já uso?', 'r' => 'Não. Na maioria dos casos integramos a automação ao que você já tem: ERP, planilhas, e-mail e WhatsApp. Só sugerimos um sistema novo quando ele realmente se paga.'],
    ['p' => 'A IA pode responder algo errado para o meu cliente?', 'r' => 'O assistente é configurado com as informações da sua empresa e com limites claros do que pode ou não responder. Quando a pergunta foge desse escopo, ele transfere a conversa para a sua equipe.'],
    ['p' => 'Quanto custa?', 'r' => 'Depende do processo a ser automatizado. Normalmente há um valor de implantação e uma mensalidade que cobre suporte, infraestrutura e ajustes. Após o diagnóstico gratuito você recebe uma proposta fechada, sem surpresa.'],
    ['p' => 'Usam o WhatsApp oficial?', 'r' => 'Trabalhamos com a API oficial do WhatsApp (Meta) e também com conexões alternativas, e indicamos a opção adequada ao volume e ao risco da sua operação.'],
    ['p' => 'Como fica a LGPD?', 'r' => 'Os dados dos seus clientes são tratados com acesso restrito, registro de operações e cláusulas de proteção de dados em contrato.'],
    ['p' => 'Atendem fora de Campo Grande?', 'r' => 'Sim. Atendemos empresas de todo o Brasil de forma remota. Em Campo Grande, também presencialmente.'],
];
?>

    <!-- HERO -->
    <section class="relative min-h-screen flex items-center justify-center pt-28 pb-16 overflow-hidden">
        <div class="absolute inset-0 bg-brand-darker">
            <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-brand-primary/20 blur-[120px] rounded-full animate-pulse-slow"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[600px] h-[600px] bg-green-500/10 blur-[120px] rounded-full animate-pulse-slow" style="animation-delay: 2s;"></div>
            <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:64px_64px] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_50%,#000_70%,transparent_100%)]"></div>
        </div>

        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-8 animate-fade-in-up">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-400"></span>
                </span>
                <span class="text-xs font-semibold text-brand-text tracking-wide uppercase">Automação com IA · Campo Grande - MS</span>
            </div>

            <h1 class="text-4xl sm:text-5xl md:text-7xl font-display font-bold text-white tracking-tight leading-tight mb-8 animate-fade-in-up" style="animation-delay: .1s;">
                Sua empresa atendendo e cobrando no WhatsApp,
                <span class="text-gradient-animated">no automático</span>
            </h1>

            <p class="text-lg md:text-xl text-brand-muted max-w-2xl mx-auto mb-10 leading-relaxed animate-fade-in-up" style="animation-delay: .2s;">
                Criamos assistentes com IA, automações e sistemas sob medida que respondem clientes, fazem cobranças e organizam a sua operação, integrados aos sistemas que você já usa.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-fade-in-up" style="animation-delay: .3s;">
                <a href="<?= $e(TraxterPage::whatsappUrl('Olá! Vim pelo site e quero agendar um diagnóstico gratuito.')) ?>" target="_blank" rel="noopener" data-wa="hero"
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-green-600 hover:bg-green-500 px-8 py-4 rounded-full text-white font-semibold text-lg shadow-xl shadow-green-600/30 transform hover:-translate-y-1 transition-all">
                    <?= TraxterPage::whatsappIcon('w-6 h-6') ?> Agendar diagnóstico gratuito
                </a>
                <a href="#como-funciona" class="w-full sm:w-auto px-8 py-4 rounded-full bg-white/5 border border-white/10 text-white font-medium hover:bg-white/10 transition-all">
                    Como funciona
                </a>
            </div>
            <p class="mt-4 text-sm text-brand-muted animate-fade-in-up" style="animation-delay: .35s;">Conversa de 30 minutos, sem compromisso.</p>

            <div class="mt-16 pt-8 border-t border-white/5 animate-fade-in-up" style="animation-delay: .4s;">
                <p class="text-xs text-brand-muted uppercase tracking-widest mb-6 font-semibold">Empresas que já trabalham com a Traxter</p>
                <div class="flex flex-wrap justify-center items-center gap-6 md:gap-12">
                    <?php foreach ($clientes as $c): ?>
                    <a href="<?= $e($c['url']) ?>" target="_blank" rel="noopener noreferrer" title="<?= $e($c['nome']) ?>">
                        <img src="assets/logos/<?= $e($c['logo']) ?>" alt="<?= $e($c['nome']) ?>" loading="lazy"
                             class="h-14 md:h-16 w-auto object-contain opacity-70 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-300 hover:scale-105 rounded-xl p-2 bg-white">
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- DORES -->
    <section class="py-24 bg-brand-surface border-y border-white/5">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 reveal">
                <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-4">Alguma dessas situações acontece na sua empresa?</h2>
                <p class="text-brand-muted max-w-2xl mx-auto">Cada uma delas custa horas da sua equipe e clientes que desistem no meio do caminho.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <?php foreach ($dores as $i => $d): ?>
                <div class="glass-card p-6 rounded-xl flex items-start gap-4 reveal" style="transition-delay: <?= $i * 80 ?>ms;">
                    <div class="mt-0.5 w-7 h-7 rounded-full bg-red-500/15 flex items-center justify-center text-red-400 text-sm flex-shrink-0">✕</div>
                    <p class="text-brand-text leading-relaxed"><?= $e($d) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <p class="text-center text-white text-lg font-medium mt-12 reveal">Tudo isso pode rodar sozinho. É o que fazemos.</p>
        </div>
    </section>

    <!-- SOLUÇÕES -->
    <section id="solucoes" class="py-24 bg-brand-darker">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <span class="text-brand-cyan font-semibold tracking-wider text-sm uppercase">O que entregamos</span>
                <h2 class="text-3xl md:text-5xl font-display font-bold text-white mt-3">Menos trabalho manual, mais tempo para vender</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($solucoes as $i => $s): ?>
                <div class="glass-card p-8 rounded-2xl reveal flex flex-col" style="transition-delay: <?= $i * 100 ?>ms;">
                    <div class="w-14 h-14 rounded-xl <?= $s['bg'] ?> flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 <?= $s['cor'] ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $s['icone'] ?>"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3"><?= $e($s['titulo']) ?></h3>
                    <p class="text-brand-muted text-sm leading-relaxed mb-6"><?= $e($s['texto']) ?></p>
                    <ul class="space-y-2 mt-auto border-t border-white/5 pt-5">
                        <?php foreach ($s['itens'] as $item): ?>
                        <li class="flex items-start gap-2 text-sm text-brand-text"><span class="<?= $s['cor'] ?>">✓</span><?= $e($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- COMO FUNCIONA -->
    <section id="como-funciona" class="py-24 bg-brand-surface border-y border-white/5">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <span class="text-brand-cyan font-semibold tracking-wider text-sm uppercase">Como funciona</span>
                <h2 class="text-3xl md:text-5xl font-display font-bold text-white mt-3 mb-4">Comece pequeno, veja funcionar, depois amplie</h2>
                <p class="text-brand-muted">Nada de projeto de meses para só então descobrir se deu certo.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($passos as $i => $p): ?>
                <div class="relative glass-card p-8 rounded-2xl reveal" style="transition-delay: <?= $i * 100 ?>ms;">
                    <div class="w-12 h-12 rounded-full btn-gradient flex items-center justify-center text-white font-display font-bold text-xl mb-6"><?= $p['n'] ?></div>
                    <h3 class="text-xl font-bold text-white mb-3"><?= $e($p['titulo']) ?></h3>
                    <p class="text-brand-muted text-sm leading-relaxed"><?= $e($p['texto']) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CASE + DEPOIMENTO (reais) -->
    <section class="py-24 bg-brand-darker">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <span class="text-brand-cyan font-semibold tracking-wider text-sm uppercase">Trabalho real</span>
                <h2 class="text-3xl md:text-5xl font-display font-bold text-white mt-3">Projetos em operação, com clientes de verdade</h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="glass-card p-8 rounded-2xl reveal">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="assets/logos/ctprice.png" alt="CT Price" class="h-12 w-auto rounded-lg bg-white p-1.5" loading="lazy">
                        <span class="text-brand-cyan text-sm font-medium uppercase tracking-wider">Recursos Humanos</span>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-white mb-4">Recrutamento organizado do anúncio da vaga à contratação</h3>
                    <p class="text-brand-muted leading-relaxed mb-6">
                        Currículos chegavam por canais soltos e o acompanhamento dos candidatos dependia de controles manuais. Desenvolvemos um sistema próprio de recrutamento, sob medida para a operação da CT Price.
                    </p>
                    <ul class="space-y-2 text-sm text-brand-text mb-6">
                        <li class="flex gap-2"><span class="text-brand-cyan">✓</span>Portal público de vagas com candidatura e envio de currículo</li>
                        <li class="flex gap-2"><span class="text-brand-cyan">✓</span>Funil de seleção visual, com histórico de cada candidato</li>
                        <li class="flex gap-2"><span class="text-brand-cyan">✓</span>Programa de indicação de colaboradores com controle de comissões</li>
                        <li class="flex gap-2"><span class="text-brand-cyan">✓</span>Perfis de acesso e trilha de auditoria</li>
                    </ul>
                    <a href="cases.php" class="text-brand-cyan hover:text-white text-sm font-medium">Ver todos os cases →</a>
                </div>

                <div class="glass-card p-8 rounded-2xl reveal flex flex-col justify-between" style="transition-delay: 100ms;">
                    <svg class="w-10 h-10 text-brand-primary/40 mb-4" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    <blockquote class="text-xl text-white leading-relaxed mb-8">
                        "A Traxter não apenas entregou o software, eles reestruturaram nossa visão de produto. A arquitetura proposta reduziu nosso tempo de resposta em 60% e abriu portas para novos mercados que antes eram tecnicamente inviáveis."
                    </blockquote>
                    <div class="flex items-center gap-4">
                        <img src="assets/logos/aria.png" alt="Aria Consultoria" class="h-12 w-auto rounded-lg bg-white p-1.5" loading="lazy">
                        <div>
                            <!-- TODO (Fabio): incluir o nome do diretor, se ele autorizar. Depoimento com nome converte mais. -->
                            <strong class="block text-white">Diretor de Tecnologia</strong>
                            <span class="text-brand-muted text-sm">Aria Consultoria</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUEM ESTÁ POR TRÁS -->
    <!-- TODO (Fabio): adicionar sua foto em assets/fabio.jpg e revisar o texto. PME compra de pessoas. -->
    <section class="py-24 bg-brand-surface border-y border-white/5">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center reveal">
                <div class="flex justify-center">
                    <?php if (is_file(__DIR__ . '/assets/fabio.jpg')): ?>
                    <img src="assets/fabio.jpg" alt="Fabio Ozuna" class="w-48 h-48 rounded-full object-cover border-4 border-white/10" loading="lazy">
                    <?php else: ?>
                    <div class="w-48 h-48 rounded-full btn-gradient flex items-center justify-center text-white font-display font-bold text-5xl border-4 border-white/10">FO</div>
                    <?php endif; ?>
                </div>
                <div class="md:col-span-2">
                    <span class="text-brand-cyan font-semibold tracking-wider text-sm uppercase">Quem cuida do seu projeto</span>
                    <h2 class="text-3xl font-display font-bold text-white mt-3 mb-4">Fabio Ozuna</h2>
                    <p class="text-brand-muted leading-relaxed mb-4">
                        Uno experiência em vendas e gestão comercial com desenvolvimento de sistemas e automação. Por isso começo toda conversa pelo problema do seu negócio, não pela tecnologia.
                    </p>
                    <p class="text-brand-muted leading-relaxed">
                        Você fala direto com quem desenha e acompanha a solução, sem intermediários e sem call center.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-24 bg-brand-darker">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-display font-bold text-white text-center mb-12 reveal">Perguntas frequentes</h2>
            <div class="space-y-4">
                <?php foreach ($faq as $f): ?>
                <div class="glass-card rounded-xl border border-white/5 overflow-hidden" data-faq>
                    <button class="w-full px-6 py-5 text-left flex items-center justify-between gap-4" aria-expanded="false">
                        <span class="text-white font-medium"><?= $e($f['p']) ?></span>
                        <svg class="w-5 h-5 text-brand-muted flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="px-6 pb-5 text-brand-muted leading-relaxed"><?= $e($f['r']) ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <section id="contato" class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-brand-primary/5"></div>
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6">
                Qual processo da sua empresa você <span class="text-brand-primary">não aguenta mais</span> fazer na mão?
            </h2>
            <p class="text-xl text-brand-muted mb-10 max-w-2xl mx-auto">
                Conte pra gente no WhatsApp. Em 30 minutos de conversa mostramos o que dá para automatizar e quanto tempo isso libera.
            </p>
            <a href="<?= $e(TraxterPage::whatsappUrl('Olá! Quero automatizar um processo da minha empresa: ')) ?>" target="_blank" rel="noopener" data-wa="cta-final"
               class="inline-flex items-center justify-center gap-3 bg-green-600 hover:bg-green-500 px-10 py-5 rounded-full text-white font-bold text-lg shadow-2xl shadow-green-600/30 transform hover:-translate-y-1 transition-all">
                <?= TraxterPage::whatsappIcon('w-6 h-6') ?> Falar no WhatsApp
            </a>
            <p class="mt-6 text-sm text-brand-muted">
                Prefere e-mail? <a href="mailto:<?= $e(TraxterPage::cfg('contato')['email']) ?>" class="text-brand-cyan hover:text-white"><?= $e(TraxterPage::cfg('contato')['email']) ?></a>
            </p>
        </div>
    </section>

<?php
$page->renderFooter();
