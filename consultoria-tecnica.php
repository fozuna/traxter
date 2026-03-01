<?php
require_once 'includes/TraxterPage.php';
$page = new TraxterPage();
$page->renderHeader('consultoria-tecnica');
?>

<!-- Hero Section -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
        <div class="absolute top-[-10%] right-[10%] w-[500px] h-[500px] bg-white/10 blur-[120px] rounded-full animate-pulse-slow"></div>
        <div class="absolute bottom-[0%] left-[20%] w-[400px] h-[400px] bg-brand-primary/10 blur-[100px] rounded-full animate-pulse-slow" style="animation-delay: 2s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-4xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-6 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                <span class="text-white text-xs font-medium uppercase tracking-wider">Consultoria Técnica</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-display font-bold text-white tracking-tight mb-6 leading-tight animate-fade-in-up" style="animation-delay: 0.1s;">
                Visão Estratégica para <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-brand-muted to-brand-primary">Decisões Tecnológicas</span>
            </h1>
            
            <p class="text-xl text-brand-muted leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                Navegue pela complexidade digital com a orientação de especialistas sêniores. Transformamos desafios técnicos em vantagens competitivas.
            </p>
        </div>
    </div>
</section>

<!-- Advisory Services -->
<section class="py-20 bg-brand-darker relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- CTO as a Service -->
            <div class="glass-card p-8 rounded-2xl border border-white/5 group hover:border-white/30 transition-all duration-500 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 blur-3xl rounded-full -translate-y-1/2 translate-x-1/2"></div>
                
                <h3 class="text-2xl font-display font-bold text-white mb-4">CTO as a Service</h3>
                <p class="text-brand-muted text-sm leading-relaxed mb-6">
                    Liderança técnica sob demanda para startups e scale-ups. Definimos o roadmap tecnológico, stack e cultura de engenharia sem o custo de um C-Level full-time.
                </p>
                <ul class="space-y-2 text-sm text-brand-muted">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-primary"></span>
                        Definição de Roadmap
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-primary"></span>
                        Mentoria de Equipe
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-primary"></span>
                        Gestão de Vendors
                    </li>
                </ul>
            </div>

            <!-- Architecture Review -->
            <div class="glass-card p-8 rounded-2xl border border-white/5 group hover:border-white/30 transition-all duration-500 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 blur-3xl rounded-full -translate-y-1/2 translate-x-1/2"></div>
                
                <h3 class="text-2xl font-display font-bold text-white mb-4">Architecture Review</h3>
                <p class="text-brand-muted text-sm leading-relaxed mb-6">
                    Diagnóstico profundo da sua infraestrutura e código atual. Identificamos gargalos de performance, riscos de segurança e débitos técnicos críticos.
                </p>
                <ul class="space-y-2 text-sm text-brand-muted">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-primary"></span>
                        Análise de Performance
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-primary"></span>
                        Auditoria de Segurança
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-primary"></span>
                        Plano de Refatoração
                    </li>
                </ul>
            </div>

            <!-- Tech Due Diligence -->
            <div class="glass-card p-8 rounded-2xl border border-white/5 group hover:border-white/30 transition-all duration-500 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 blur-3xl rounded-full -translate-y-1/2 translate-x-1/2"></div>
                
                <h3 class="text-2xl font-display font-bold text-white mb-4">Tech Due Diligence</h3>
                <p class="text-brand-muted text-sm leading-relaxed mb-6">
                    Para investidores e fusões (M&A). Avaliamos a qualidade do ativo tecnológico, propriedade intelectual e capacidade de execução do time.
                </p>
                <ul class="space-y-2 text-sm text-brand-muted">
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-primary"></span>
                        Avaliação de Código
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-primary"></span>
                        Análise de Escalabilidade
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-primary"></span>
                        Relatório de Riscos
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Methodology Process -->
<section class="py-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl font-display font-bold text-white mb-8">Nossa Abordagem Consultiva</h2>
                
                <div class="space-y-8 relative">
                    <div class="absolute left-[19px] top-4 bottom-4 w-0.5 bg-white/10"></div>
                    
                    <div class="relative flex gap-6">
                        <div class="w-10 h-10 rounded-full bg-brand-dark border border-white/20 flex items-center justify-center text-white font-bold text-sm relative z-10">01</div>
                        <div>
                            <h4 class="text-white font-bold text-lg mb-2">Imersão e Diagnóstico</h4>
                            <p class="text-brand-muted text-sm">Mergulhamos no contexto do negócio para entender as dores reais, não apenas os sintomas.</p>
                        </div>
                    </div>

                    <div class="relative flex gap-6">
                        <div class="w-10 h-10 rounded-full bg-brand-dark border border-white/20 flex items-center justify-center text-white font-bold text-sm relative z-10">02</div>
                        <div>
                            <h4 class="text-white font-bold text-lg mb-2">Definição Estratégica</h4>
                            <p class="text-brand-muted text-sm">Desenhamos soluções agnósticas a vendors, focadas no melhor ROI e fit cultural para a empresa.</p>
                        </div>
                    </div>

                    <div class="relative flex gap-6">
                        <div class="w-10 h-10 rounded-full bg-brand-dark border border-white/20 flex items-center justify-center text-white font-bold text-sm relative z-10">03</div>
                        <div>
                            <h4 class="text-white font-bold text-lg mb-2">Acompanhamento da Execução</h4>
                            <p class="text-brand-muted text-sm">Não entregamos apenas um PDF. Apoiamos a implementação para garantir que a visão se torne realidade.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="glass-card p-8 rounded-2xl border border-white/10 bg-[#0B1120]/80 relative overflow-hidden h-full flex flex-col justify-center">
                <!-- Decorative Background -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-brand-primary/10 blur-[80px] rounded-full -translate-y-1/2 translate-x-1/2"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-brand-cyan/10 blur-[80px] rounded-full translate-y-1/2 -translate-x-1/2"></div>

                <div class="relative z-10">
                    <h3 class="text-2xl font-display font-bold text-white mb-2">Entregáveis Estratégicos</h3>
                    <p class="text-brand-muted text-sm mb-8">Tangibilizamos a consultoria em artefatos claros que garantem governança, continuidade e independência tecnológica.</p>

                    <div class="space-y-4">
                        <!-- Item 1: Roadmap -->
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white/5 border border-white/5 hover:border-brand-primary/30 transition-colors group cursor-default">
                            <div class="w-10 h-10 rounded-lg bg-brand-primary/20 flex items-center justify-center flex-shrink-0 group-hover:bg-brand-primary/30 transition-colors">
                                <svg class="w-5 h-5 text-brand-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-sm group-hover:text-brand-primary transition-colors">Roadmap Tecnológico</h4>
                                <p class="text-brand-muted text-xs mt-1 leading-relaxed">Plano de ação priorizado por ROI e impacto no negócio, alinhado com a visão de longo prazo.</p>
                            </div>
                        </div>

                        <!-- Item 2: Architecture -->
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white/5 border border-white/5 hover:border-brand-cyan/30 transition-colors group cursor-default">
                            <div class="w-10 h-10 rounded-lg bg-brand-cyan/20 flex items-center justify-center flex-shrink-0 group-hover:bg-brand-cyan/30 transition-colors">
                                <svg class="w-5 h-5 text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-sm group-hover:text-brand-cyan transition-colors">Arquitetura de Referência</h4>
                                <p class="text-brand-muted text-xs mt-1 leading-relaxed">Documentação de padrões de design, stack tecnológico e diretrizes de escalabilidade.</p>
                            </div>
                        </div>

                         <!-- Item 3: Governance -->
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white/5 border border-white/5 hover:border-brand-violet/30 transition-colors group cursor-default">
                            <div class="w-10 h-10 rounded-lg bg-brand-violet/20 flex items-center justify-center flex-shrink-0 group-hover:bg-brand-violet/30 transition-colors">
                                <svg class="w-5 h-5 text-brand-violet" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold text-sm group-hover:text-brand-violet transition-colors">Governança & Compliance</h4>
                                <p class="text-brand-muted text-xs mt-1 leading-relaxed">Matriz de riscos, auditoria de processos e conformidade com padrões de segurança (ISO/LGPD).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-t from-brand-darker to-brand-dark z-0"></div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-4xl font-display font-bold text-white mb-8">Tome decisões fundamentadas.</h2>
        <div class="flex justify-center">
            <a href="contato.php" class="btn-gradient px-10 py-5 rounded-full text-white font-bold text-lg shadow-2xl hover:shadow-brand-primary/60 transform hover:-translate-y-1 transition-all">
                Agendar Reunião Executiva
            </a>
        </div>
    </div>
</section>

<?php
$page->renderFooter();
?>