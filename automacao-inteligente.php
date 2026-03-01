<?php
require_once 'includes/TraxterPage.php';
$page = new TraxterPage();
$page->renderHeader('automacao-inteligente');
?>

<!-- Hero Section -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
        <div class="absolute top-[-20%] left-[30%] w-[600px] h-[600px] bg-brand-cyan/20 blur-[150px] rounded-full animate-pulse-slow"></div>
        <div class="absolute bottom-[0%] right-[10%] w-[400px] h-[400px] bg-brand-primary/10 blur-[100px] rounded-full animate-pulse-slow" style="animation-delay: 2.5s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-4xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-6 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-brand-cyan animate-pulse"></span>
                <span class="text-brand-cyan text-xs font-medium uppercase tracking-wider">Automação Inteligente</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-display font-bold text-white tracking-tight mb-6 leading-tight animate-fade-in-up" style="animation-delay: 0.1s;">
                Operações Autônomas para <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-cyan via-brand-primary to-brand-violet">Eficiência Máxima</span>
            </h1>
            
            <p class="text-xl text-brand-muted leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                Libere sua equipe de tarefas repetitivas. Implementamos robôs (RPA) e agentes de IA que trabalham 24/7 com precisão absoluta.
            </p>
        </div>
    </div>
</section>

<!-- Benefícios da Automação -->
<section class="py-20 bg-brand-darker relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Benefit 1 -->
            <div class="glass-card p-8 rounded-2xl border border-white/5 group hover:border-brand-cyan/30 transition-all duration-500">
                <h3 class="text-4xl font-display font-bold text-brand-cyan mb-2">10x</h3>
                <h4 class="text-lg font-semibold text-white mb-3">Mais Rápido</h4>
                <p class="text-brand-muted text-sm leading-relaxed">
                    Processos manuais que levam horas são concluídos em minutos, acelerando drasticamente o time-to-market.
                </p>
            </div>

            <!-- Benefit 2 -->
            <div class="glass-card p-8 rounded-2xl border border-white/5 group hover:border-brand-cyan/30 transition-all duration-500">
                <h3 class="text-4xl font-display font-bold text-brand-cyan mb-2">0%</h3>
                <h4 class="text-lg font-semibold text-white mb-3">Taxa de Erro</h4>
                <p class="text-brand-muted text-sm leading-relaxed">
                    Elimine falhas humanas em processos críticos como conciliação financeira, cadastro e processamento de dados.
                </p>
            </div>

            <!-- Benefit 3 -->
            <div class="glass-card p-8 rounded-2xl border border-white/5 group hover:border-brand-cyan/30 transition-all duration-500">
                <h3 class="text-4xl font-display font-bold text-brand-cyan mb-2">24/7</h3>
                <h4 class="text-lg font-semibold text-white mb-3">Disponibilidade</h4>
                <p class="text-brand-muted text-sm leading-relaxed">
                    Sua operação não para nunca. Robôs trabalham ininterruptamente, feriados e finais de semana inclusos.
                </p>
            </div>
        </div>

        <!-- Use Cases Component -->
        <div class="w-full mb-20">
            <h2 class="text-3xl font-display font-bold text-white mb-12 text-center">Onde Aplicar</h2>
            
            <?php
            // Dados estruturados para o componente Master-Detail
            $applicationAreas = [
                'finance' => [
                    'id' => 'finance',
                    'title' => 'Financeiro & Contábil',
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                    'description' => 'Automatize processos críticos como emissão de notas, conciliação e relatórios.',
                    'use_case' => [
                        'problem' => 'Processamento manual de 5.000+ faturas/mês com erros recorrentes.',
                        'solution' => 'Bot de RPA com OCR que extrai dados, valida no ERP e agenda pagamentos.',
                        'result' => 'Redução de 90% no tempo de processamento e zero erros de digitação.'
                    ],
                    'visual_type' => 'process_log', // Tipo de visualização
                    'visual_data' => [
                        ['time' => '09:00:01', 'level' => 'INFO', 'msg' => 'Iniciando processamento em lote #4829'],
                        ['time' => '09:00:02', 'level' => 'SUCCESS', 'msg' => 'OCR: Fatura_Vendor_A.pdf lida com sucesso'],
                        ['time' => '09:00:03', 'level' => 'INFO', 'msg' => 'Validando CNPJ e valores no SAP...'],
                        ['time' => '09:00:03', 'level' => 'SUCCESS', 'msg' => 'Validação OK. Agendado para 15/10'],
                        ['time' => '09:00:04', 'level' => 'INFO', 'msg' => 'Notificação enviada para financeiro@empresa.com']
                    ]
                ],
                'hr' => [
                    'id' => 'hr',
                    'title' => 'Recursos Humanos',
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>',
                    'description' => 'Agilize o onboarding e a gestão de benefícios sem burocracia.',
                    'use_case' => [
                        'problem' => 'Demora de 5 dias para provisionar acessos e equipamentos para novos funcionários.',
                        'solution' => 'Workflow automatizado disparado na assinatura do contrato.',
                        'result' => 'Funcionário produtivo no Dia 1 com todos os acessos liberados.'
                    ],
                    'visual_type' => 'checklist',
                    'visual_data' => [
                        ['status' => 'done', 'task' => 'Criar conta de e-mail corporativo'],
                        ['status' => 'done', 'task' => 'Adicionar ao Slack e grupos de projeto'],
                        ['status' => 'done', 'task' => 'Provisionar licença do Office 365'],
                        ['status' => 'processing', 'task' => 'Solicitar envio de notebook (Logística)'],
                        ['status' => 'pending', 'task' => 'Agendar reunião de boas-vindas']
                    ]
                ],
                'logistics' => [
                    'id' => 'logistics',
                    'title' => 'Logística & Supply',
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>',
                    'description' => 'Otimize estoques e rastreamento de pedidos em tempo real.',
                    'use_case' => [
                        'problem' => 'Rupturas de estoque frequentes por falha no monitoramento de demanda.',
                        'solution' => 'Algoritmo preditivo que dispara ordens de compra baseadas em tendências.',
                        'result' => 'Redução de 35% em custos de armazenagem e 0% de stockouts.'
                    ],
                    'visual_type' => 'metric_card',
                    'visual_data' => [
                        'metric' => 'Estoque SKU-902',
                        'value' => '142 un.',
                        'threshold' => '< 150 (CRÍTICO)',
                        'action' => 'Auto-Order #9921 Disparada',
                        'status' => 'Em Trânsito'
                    ]
                ],
                'tracking' => [
                    'id' => 'tracking',
                    'title' => 'Rastreamento de Cargas',
                    'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>',
                    'description' => 'Visibilidade total da cadeia logística com IoT e inteligência artificial.',
                    'use_case' => [
                        'problem' => 'Cegueira logística ("In-Transit Blindness") causando incerteza na entrega e alto volume de SAC.',
                        'solution' => 'Torre de Controle 4.0 com rastreamento preditivo e alertas proativos.',
                        'result' => '100% de rastreabilidade e redução de 40% no WISMO (Where Is My Order).'
                    ],
                    'visual_type' => 'specs',
                    'visual_data' => [
                        [
                            'title' => '1. Descrição Técnica',
                            'content' => 'Arquitetura de microsserviços orientada a eventos (Event-Driven) consumindo telemetria IoT via broker MQTT de alta performance e baixa latência.'
                        ],
                        [
                            'title' => '2. Requisitos Funcionais',
                            'items' => [
                                'Atualização de coordenadas em tempo real (< 30s latência)',
                                'Histórico imutável de localização (Blockchain Ledger)',
                                'Notificações automáticas via Webhook/Push para desvios de rota',
                                'Cálculo dinâmico de ETA (Estimated Time of Arrival)'
                            ]
                        ],
                        [
                            'title' => '3. Requisitos Não-Funcionais',
                            'items' => [
                                'Alta Disponibilidade: SLA 99.99% (Multi-Region)',
                                'Segurança: Criptografia TLS 1.3 ponta-a-ponta',
                                'Escalabilidade: Suporte a 1M+ dispositivos simultâneos'
                            ]
                        ],
                        [
                            'title' => '4. Integração & Interface',
                            'items' => [
                                'Conectores nativos para SAP, Oracle e TOTVS',
                                'Dashboard White-label para clientes finais',
                                'App Mobile para motoristas (Comprovante Digital)'
                            ]
                        ],
                        [
                            'title' => '5. Critérios de Sucesso',
                            'items' => [
                                'Redução de 20% em custos de demurrage',
                                'Aumento de 15% no OTIF (On-Time In-Full)'
                            ]
                        ]
                    ]
                ]
            ];
            ?>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8" id="automation-showcase">
                <!-- Left Column: Selection Menu -->
                <div class="lg:col-span-4 space-y-4">
                    <?php $first = true; foreach ($applicationAreas as $key => $area): ?>
                        <div 
                            class="area-selector glass-card p-4 rounded-xl border border-white/5 cursor-pointer hover:bg-white/5 transition-all duration-300 group <?php echo $first ? 'active ring-1 ring-brand-cyan bg-white/5' : ''; ?>"
                            onclick="selectArea('<?php echo $key; ?>', this)"
                            role="button"
                            tabindex="0"
                        >
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-lg bg-brand-cyan/10 flex items-center justify-center text-brand-cyan group-hover:scale-110 transition-transform">
                                    <?php echo $area['icon']; ?>
                                </div>
                                <div>
                                    <h3 class="text-white font-semibold text-lg"><?php echo $area['title']; ?></h3>
                                    <p class="text-brand-muted text-xs mt-1 line-clamp-1"><?php echo $area['description']; ?></p>
                                </div>
                                <div class="ml-auto opacity-0 group-[.active]:opacity-100 transition-opacity">
                                    <svg class="w-5 h-5 text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </div>
                    <?php $first = false; endforeach; ?>
                </div>

                <!-- Right Column: Detail Panel -->
                <div class="lg:col-span-8">
                    <?php foreach ($applicationAreas as $key => $area): ?>
                        <div id="detail-<?php echo $key; ?>" class="detail-panel glass-card p-8 rounded-2xl border border-white/5 bg-black/40 h-full flex flex-col <?php echo $key !== 'finance' ? 'hidden' : ''; ?>">
                            <!-- Header -->
                            <div class="mb-8 border-b border-white/5 pb-6">
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="px-2 py-1 rounded text-[10px] font-bold uppercase tracking-wider bg-brand-cyan/10 text-brand-cyan border border-brand-cyan/20">Caso de Uso Real</span>
                                    <h3 class="text-2xl font-display font-bold text-white"><?php echo $area['title']; ?></h3>
                                </div>
                                <p class="text-brand-muted text-lg leading-relaxed">
                                    <?php echo $area['description']; ?>
                                </p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 flex-grow">
                                <!-- Problem/Solution Text -->
                                <div class="space-y-6">
                                    <div>
                                        <h4 class="text-white font-semibold mb-2 flex items-center gap-2">
                                            <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                            O Desafio
                                        </h4>
                                        <p class="text-brand-muted text-sm leading-relaxed bg-white/5 p-3 rounded-lg border-l-2 border-red-400">
                                            <?php echo $area['use_case']['problem']; ?>
                                        </p>
                                    </div>
                                    <div>
                                        <h4 class="text-white font-semibold mb-2 flex items-center gap-2">
                                            <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            Solução Traxter
                                        </h4>
                                        <p class="text-brand-muted text-sm leading-relaxed bg-white/5 p-3 rounded-lg border-l-2 border-green-400">
                                            <?php echo $area['use_case']['solution']; ?>
                                        </p>
                                    </div>
                                    <div class="pt-4">
                                        <div class="flex items-center gap-2 text-brand-cyan font-bold">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                            Resultado: <?php echo $area['use_case']['result']; ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Visual Example -->
                                <div class="bg-brand-darker rounded-xl border border-white/10 p-4 relative overflow-hidden font-mono text-xs shadow-inner">
                                    <div class="absolute top-0 left-0 w-full h-6 bg-white/5 border-b border-white/5 flex items-center px-3 gap-1.5">
                                        <div class="w-2.5 h-2.5 rounded-full bg-red-500/50"></div>
                                        <div class="w-2.5 h-2.5 rounded-full bg-yellow-500/50"></div>
                                        <div class="w-2.5 h-2.5 rounded-full bg-green-500/50"></div>
                                        <span class="ml-2 text-[10px] text-brand-muted opacity-50">Automated_Workflow_Engine.exe</span>
                                    </div>
                                    <div class="mt-6 space-y-2 h-full overflow-y-auto custom-scrollbar">
                                        <?php if ($area['visual_type'] === 'process_log'): ?>
                                            <?php foreach ($area['visual_data'] as $log): ?>
                                                <div class="flex gap-2 animate-fade-in">
                                                    <span class="text-brand-muted opacity-50">[<?php echo $log['time']; ?>]</span>
                                                    <span class="<?php echo $log['level'] === 'SUCCESS' ? 'text-green-400' : 'text-blue-400'; ?>"><?php echo $log['level']; ?>:</span>
                                                    <span class="text-white/80"><?php echo $log['msg']; ?></span>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php elseif ($area['visual_type'] === 'checklist'): ?>
                                            <?php foreach ($area['visual_data'] as $item): ?>
                                                <div class="flex items-center gap-2 mb-2">
                                                    <?php if ($item['status'] === 'done'): ?>
                                                        <div class="w-4 h-4 rounded bg-green-500/20 flex items-center justify-center border border-green-500/50">
                                                            <svg class="w-3 h-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                                        </div>
                                                        <span class="text-white/60 line-through"><?php echo $item['task']; ?></span>
                                                    <?php elseif ($item['status'] === 'processing'): ?>
                                                        <div class="w-4 h-4 rounded border border-brand-cyan/50 flex items-center justify-center">
                                                            <div class="w-2 h-2 rounded-full bg-brand-cyan animate-pulse"></div>
                                                        </div>
                                                        <span class="text-white font-medium"><?php echo $item['task']; ?></span>
                                                    <?php else: ?>
                                                        <div class="w-4 h-4 rounded border border-white/10"></div>
                                                        <span class="text-white/30"><?php echo $item['task']; ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php elseif ($area['visual_type'] === 'metric_card'): ?>
                                            <div class="flex flex-col items-center justify-center h-full text-center">
                                                <div class="text-brand-muted mb-1"><?php echo $area['visual_data']['metric']; ?></div>
                                                <div class="text-4xl font-bold text-white mb-2"><?php echo $area['visual_data']['value']; ?></div>
                                                <div class="text-red-400 text-[10px] bg-red-400/10 px-2 py-1 rounded border border-red-400/20 mb-4">
                                                    Trigger: <?php echo $area['visual_data']['threshold']; ?>
                                                </div>
                                                <div class="w-full bg-white/5 rounded p-2 border border-white/5">
                                                    <div class="flex justify-between text-[10px] mb-1">
                                                        <span class="text-brand-cyan animate-pulse">● <?php echo $area['visual_data']['action']; ?></span>
                                                    </div>
                                                    <div class="w-full h-1 bg-white/10 rounded overflow-hidden">
                                                        <div class="w-2/3 h-full bg-brand-cyan animate-slide-right"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php elseif ($area['visual_type'] === 'terminal'): ?>
                                            <?php foreach ($area['visual_data'] as $line): ?>
                                                <div class="font-mono text-xs">
                                                    <?php if (strpos($line, '$') === 0): ?>
                                                        <span class="text-green-400">root@server:~$</span> <span class="text-white"><?php echo substr($line, 2); ?></span>
                                                    <?php elseif (strpos($line, '[ALERT]') !== false): ?>
                                                        <span class="text-red-400"><?php echo $line; ?></span>
                                                    <?php elseif (strpos($line, '[SUCCESS]') !== false): ?>
                                                        <span class="text-green-400"><?php echo $line; ?></span>
                                                    <?php else: ?>
                                                        <span class="text-brand-muted"><?php echo $line; ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php elseif ($area['visual_type'] === 'specs'): ?>
                                            <div class="h-full overflow-y-auto custom-scrollbar pr-2 space-y-6">
                                                <?php foreach ($area['visual_data'] as $section): ?>
                                                    <div class="space-y-2">
                                                        <h5 class="text-brand-cyan font-bold uppercase tracking-wider text-[10px] border-b border-brand-cyan/20 pb-1">
                                                            <?php echo $section['title']; ?>
                                                        </h5>
                                                        <?php if (isset($section['content'])): ?>
                                                            <p class="text-brand-muted leading-relaxed">
                                                                <?php echo $section['content']; ?>
                                                            </p>
                                                        <?php elseif (isset($section['items'])): ?>
                                                            <ul class="space-y-1">
                                                                <?php foreach ($section['items'] as $item): ?>
                                                                    <li class="flex items-start gap-2 text-brand-muted">
                                                                        <span class="text-brand-cyan mt-1.5 text-[8px]">▶</span>
                                                                        <span><?php echo $item; ?></span>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <script>
                function selectArea(id, element) {
                    // Update selectors
                    document.querySelectorAll('.area-selector').forEach(el => {
                        el.classList.remove('active', 'ring-1', 'ring-brand-cyan', 'bg-white/5');
                    });
                    element.classList.add('active', 'ring-1', 'ring-brand-cyan', 'bg-white/5');

                    // Update panels
                    document.querySelectorAll('.detail-panel').forEach(panel => {
                        panel.classList.add('hidden');
                    });
                    
                    const targetPanel = document.getElementById('detail-' + id);
                    targetPanel.classList.remove('hidden');
                    
                    // Re-trigger animations in the new panel
                    targetPanel.querySelectorAll('.animate-fade-in').forEach(el => {
                        el.style.animation = 'none';
                        el.offsetHeight; /* trigger reflow */
                        el.style.animation = null;
                    });
                }

                // Self-test suite for Master-Detail Component
                document.addEventListener('DOMContentLoaded', () => {
                    console.group('🧪 Unit Tests: Automation Showcase');
                    try {
                        const selectors = document.querySelectorAll('.area-selector');
                        const panels = document.querySelectorAll('.detail-panel');
                        
                        // Test 1: Structure
                        console.log(selectors.length === 4 ? '✅ Selectors count correct (4)' : '❌ Selectors count mismatch');
                        console.log(panels.length === 4 ? '✅ Panels count correct (4)' : '❌ Panels count mismatch');
                        
                        // Test 2: Initial State
                        const financePanel = document.getElementById('detail-finance');
                        console.log(!financePanel.classList.contains('hidden') ? '✅ Initial panel visible' : '❌ Initial panel hidden');
                        
                        // Test 3: Interaction Simulation
                        if(selectors.length > 1) {
                            const hrSelector = selectors[1]; // HR
                            hrSelector.click();
                            const hrPanel = document.getElementById('detail-hr');
                            console.log(!hrPanel.classList.contains('hidden') && financePanel.classList.contains('hidden') 
                                ? '✅ Interaction working (HR visible, Finance hidden)' 
                                : '❌ Interaction failed');
                            
                            // Reset to Finance for user
                            selectors[0].click();
                        }
                    } catch (e) {
                        console.error('Test Suite Error:', e);
                    }
                    console.groupEnd();
                });
            </script>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-t from-brand-darker to-brand-dark z-0"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-4xl font-display font-bold text-white mb-8">Automatize o tédio. Foque no estratégico.</h2>
        <div class="flex justify-center">
            <a href="contato.php" class="btn-gradient px-10 py-5 rounded-full text-white font-bold text-lg shadow-2xl hover:shadow-brand-primary/60 transform hover:-translate-y-1 transition-all">
                Solicitar Análise de Processos
            </a>
        </div>
    </div>
</section>

<?php
$page->renderFooter();
?>