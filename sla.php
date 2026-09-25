<?php
require_once 'includes/TraxterPage.php';
$page = new TraxterPage();
$page->renderHeader('sla');
?>

<!-- Hero Section Interna -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute inset-0 bg-brand-darker">
        <div class="absolute top-[-10%] right-[30%] w-[400px] h-[400px] bg-brand-accent/10 blur-[100px] rounded-full"></div>
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:64px_64px] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_50%,#000_70%,transparent_100%)]"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 animate-fade-in-up">
            Service Level Agreement (SLA)
        </h1>
        <p class="text-lg text-brand-muted max-w-2xl mx-auto leading-relaxed animate-fade-in-up" style="animation-delay: 0.1s;">
            Compromisso de disponibilidade, desempenho e suporte técnico.
        </p>
    </div>
</section>

<!-- Conteúdo do SLA -->
<section class="py-20 bg-brand-surface border-t border-white/5">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-invert prose-lg max-w-none text-brand-muted">
            <p class="lead text-xl text-white mb-8">
                Este Acordo de Nível de Serviço ("SLA") define os compromissos da Traxter em relação à disponibilidade, tempo de resposta e qualidade dos serviços prestados. Este SLA é parte integrante dos contratos de serviço firmados com nossos clientes.
            </p>

            <h3 class="text-white font-bold mt-12 mb-4">1. Disponibilidade de Serviços (Uptime)</h3>
            <p>
                A Traxter garante uma disponibilidade mensal de 99,9% para serviços de infraestrutura gerenciada e aplicações críticas.
            </p>
            <div class="bg-white/5 border border-white/10 rounded-xl p-6 mt-6">
                <ul class="space-y-4 text-sm">
                    <li class="flex justify-between items-center border-b border-white/5 pb-2">
                        <span class="text-white font-medium">Uptime Garantido</span>
                        <span class="text-brand-cyan font-bold">99,9%</span>
                    </li>
                    <li class="flex justify-between items-center border-b border-white/5 pb-2">
                        <span class="text-white font-medium">Janela de Manutenção Programada</span>
                        <span class="text-brand-muted">Avisada com 48h de antecedência</span>
                    </li>
                    <li class="flex justify-between items-center">
                        <span class="text-white font-medium">Monitoramento</span>
                        <span class="text-brand-muted">24/7/365</span>
                    </li>
                </ul>
            </div>

            <h3 class="text-white font-bold mt-12 mb-4">2. Tempos de Resposta (Suporte)</h3>
            <p>
                Os tempos de resposta para chamados de suporte são definidos com base na severidade do incidente:
            </p>

            <div class="overflow-x-auto mt-6">
                <table class="w-full text-left text-sm">
                    <thead class="bg-white/5 text-white uppercase font-bold">
                        <tr>
                            <th class="px-6 py-4 rounded-tl-xl">Severidade</th>
                            <th class="px-6 py-4">Definição</th>
                            <th class="px-6 py-4 rounded-tr-xl">Tempo de Resposta (SLA)</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5 border border-white/5 rounded-b-xl">
                        <tr class="bg-brand-surface hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4 text-red-400 font-bold">Crítica (P1)</td>
                            <td class="px-6 py-4">Serviço indisponível ou degradação severa afetando operações críticas.</td>
                            <td class="px-6 py-4 text-white">15 minutos</td>
                        </tr>
                        <tr class="bg-brand-surface hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4 text-orange-400 font-bold">Alta (P2)</td>
                            <td class="px-6 py-4">Funcionalidade importante indisponível, com impacto significativo.</td>
                            <td class="px-6 py-4 text-white">1 hora</td>
                        </tr>
                        <tr class="bg-brand-surface hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4 text-yellow-400 font-bold">Média (P3)</td>
                            <td class="px-6 py-4">Impacto moderado, funcionalidade parcial ou dúvidas técnicas.</td>
                            <td class="px-6 py-4 text-white">4 horas</td>
                        </tr>
                        <tr class="bg-brand-surface hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4 text-green-400 font-bold">Baixa (P4)</td>
                            <td class="px-6 py-4">Solicitações de informação, melhorias ou bugs cosméticos.</td>
                            <td class="px-6 py-4 text-white">1 dia útil</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h3 class="text-white font-bold mt-12 mb-4">3. Créditos de Serviço</h3>
            <p>
                Caso a Traxter não atinja os níveis de serviço garantidos neste SLA, o cliente poderá ser elegível a receber créditos de serviço, calculados como uma porcentagem da fatura mensal do serviço afetado.
            </p>
            <p>
                Para solicitar créditos, o cliente deve abrir um chamado de suporte dentro de 30 dias após o incidente.
            </p>

            <h3 class="text-white font-bold mt-12 mb-4">4. Exclusões</h3>
            <p>
                Este SLA não se aplica a indisponibilidades causadas por:
            </p>
            <ul class="list-disc pl-6 space-y-2 mb-6">
                <li>Manutenções programadas;</li>
                <li>Força maior (desastres naturais, guerras, etc.);</li>
                <li>Falhas na infraestrutura do cliente ou de terceiros (ISPs, DNS externo);</li>
                <li>Ataques DDoS massivos que excedam as proteções padrão contratadas;</li>
                <li>Uso indevido dos serviços pelo cliente.</li>
            </ul>

            <h3 class="text-white font-bold mt-12 mb-4">5. Contato de Suporte</h3>
            <p>
                Para reportar incidentes ou solicitar suporte, utilize nossos canais oficiais:
            </p>
            <div class="flex flex-col sm:flex-row gap-4 mt-6">
                <a href="mailto:support@traxter.com.br" class="flex items-center justify-center px-6 py-3 border border-white/10 rounded-lg bg-white/5 hover:bg-white/10 hover:border-brand-cyan/50 transition-all group">
                    <svg class="w-5 h-5 text-brand-cyan mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span class="text-white group-hover:text-brand-cyan transition-colors">support@traxter.com.br</span>
                </a>
                <a href="<?= TraxterPage::e(TraxterPage::whatsappUrl('Olá! Sou cliente Traxter e preciso de suporte.')) ?>" target="_blank" rel="noopener" data-wa="sla" class="flex items-center justify-center px-6 py-3 border border-white/10 rounded-lg bg-white/5 hover:bg-white/10 hover:border-brand-cyan/50 transition-all group">
                    <?= TraxterPage::whatsappIcon('w-5 h-5 mr-2 text-green-400') ?>
                    <span class="text-white group-hover:text-brand-cyan transition-colors">WhatsApp de suporte</span>
                </a>
            </div>

            <p class="text-sm mt-12 pt-8 border-t border-white/5">
                Válido a partir de: 01/01/<?php echo date("Y"); ?>
            </p>
        </div>
    </div>
</section>

<?php
$page->renderFooter();
?>