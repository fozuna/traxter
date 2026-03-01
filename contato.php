<?php
require_once 'includes/TraxterPage.php';
$page = new TraxterPage();
$page->renderHeader('contato');
?>

<!-- Hero Section -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
        <div class="absolute top-[-10%] right-[-5%] w-[500px] h-[500px] bg-brand-primary/20 blur-[120px] rounded-full animate-pulse-slow"></div>
        <div class="absolute bottom-[-10%] left-[-5%] w-[500px] h-[500px] bg-brand-violet/20 blur-[120px] rounded-full animate-pulse-slow" style="animation-delay: 2s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-6 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-brand-cyan animate-pulse"></span>
                <span class="text-brand-cyan text-xs font-medium uppercase tracking-wider">Fale com um Especialista</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-display font-bold text-white tracking-tight mb-6 leading-tight animate-fade-in-up" style="animation-delay: 0.1s;">
                Inicie sua <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary via-brand-cyan to-brand-violet">Transformação Digital</span>
            </h1>
            
            <p class="text-xl text-brand-muted leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                Estamos prontos para discutir como nossa engenharia de software estratégica pode impulsionar a eficiência e escalabilidade do seu negócio.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            <!-- Informações de Contato -->
            <div class="animate-fade-in-up" style="animation-delay: 0.3s;">
                <div class="glass-card p-8 rounded-2xl border border-white/5 relative overflow-hidden group hover:border-brand-primary/30 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <h3 class="text-2xl font-display font-bold text-white mb-6 relative z-10">Canais de Comunicação</h3>
                    
                    <div class="space-y-8 relative z-10">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center flex-shrink-0 text-brand-cyan">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Email Corporativo</h4>
                                <p class="text-brand-muted text-sm mb-2">Para consultas gerais e projetos.</p>
                                <a href="mailto:contato@traxter.com.br" class="text-brand-cyan hover:text-white transition-colors font-medium">contato@traxter.com.br</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center flex-shrink-0 text-brand-cyan">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Escritório Central</h4>
                                <p class="text-brand-muted text-sm mb-2">Venha tomar um café conosco.</p>
                                <address class="text-brand-muted not-italic">
                                    Av. Paulista, 1106 - Bela Vista<br>
                                    São Paulo - SP, 01310-914
                                </address>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center flex-shrink-0 text-brand-cyan">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold mb-1">Horário de Atendimento</h4>
                                <p class="text-brand-muted text-sm">
                                    Segunda a Sexta: 09:00 - 18:00<br>
                                    Sábado e Domingo: Fechado
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulário de Contato -->
            <div class="animate-fade-in-up" style="animation-delay: 0.4s;">
                <form class="glass-card p-8 md:p-10 rounded-2xl border border-white/5 relative overflow-hidden shadow-2xl">
                    <h3 class="text-2xl font-display font-bold text-white mb-6">Envie uma Mensagem</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div class="group">
                            <label for="name" class="block text-sm font-medium text-brand-muted mb-2 group-focus-within:text-brand-cyan transition-colors">Nome Completo</label>
                            <input type="text" id="name" class="w-full bg-black/20 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/20 focus:outline-none focus:border-brand-cyan focus:ring-1 focus:ring-brand-cyan transition-all" placeholder="Seu nome">
                        </div>
                        <div class="group">
                            <label for="email" class="block text-sm font-medium text-brand-muted mb-2 group-focus-within:text-brand-cyan transition-colors">Email Corporativo</label>
                            <input type="email" id="email" class="w-full bg-black/20 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/20 focus:outline-none focus:border-brand-cyan focus:ring-1 focus:ring-brand-cyan transition-all" placeholder="voce@empresa.com">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div class="group">
                            <label for="company" class="block text-sm font-medium text-brand-muted mb-2 group-focus-within:text-brand-cyan transition-colors">Empresa</label>
                            <input type="text" id="company" class="w-full bg-black/20 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/20 focus:outline-none focus:border-brand-cyan focus:ring-1 focus:ring-brand-cyan transition-all" placeholder="Nome da sua empresa">
                        </div>
                        <div class="group">
                            <label for="role" class="block text-sm font-medium text-brand-muted mb-2 group-focus-within:text-brand-cyan transition-colors">Cargo</label>
                            <input type="text" id="role" class="w-full bg-black/20 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/20 focus:outline-none focus:border-brand-cyan focus:ring-1 focus:ring-brand-cyan transition-all" placeholder="Seu cargo">
                        </div>
                    </div>

                    <div class="mb-6 group">
                        <label for="interest" class="block text-sm font-medium text-brand-muted mb-2 group-focus-within:text-brand-cyan transition-colors">Interesse Principal</label>
                        <select id="interest" class="w-full bg-black/20 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-cyan focus:ring-1 focus:ring-brand-cyan transition-all appearance-none">
                            <option value="" disabled selected>Selecione uma opção</option>
                            <option value="software">Engenharia de Software</option>
                            <option value="automacao">Automação Inteligente</option>
                            <option value="integracao">Integração de APIs</option>
                            <option value="consultoria">Consultoria Técnica</option>
                            <option value="outro">Outro Assunto</option>
                        </select>
                    </div>

                    <div class="mb-8 group">
                        <label for="message" class="block text-sm font-medium text-brand-muted mb-2 group-focus-within:text-brand-cyan transition-colors">Mensagem</label>
                        <textarea id="message" rows="4" class="w-full bg-black/20 border border-white/10 rounded-lg px-4 py-3 text-white placeholder-white/20 focus:outline-none focus:border-brand-cyan focus:ring-1 focus:ring-brand-cyan transition-all resize-none" placeholder="Descreva brevemente seu desafio ou projeto..."></textarea>
                    </div>

                    <button type="submit" class="w-full btn-gradient py-4 rounded-xl text-white font-bold text-lg shadow-2xl hover:shadow-brand-primary/60 transform hover:-translate-y-1 transition-all flex items-center justify-center gap-2">
                        Enviar Solicitação
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                    
                    <p class="text-center text-brand-muted text-xs mt-4">
                        Ao enviar, você concorda com nossa <a href="#" class="text-white hover:underline">Política de Privacidade</a>.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-brand-darker relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <h2 class="text-3xl font-display font-bold text-white text-center mb-12">Perguntas Frequentes</h2>
        
        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="glass-card rounded-xl border border-white/5 overflow-hidden">
                <button class="w-full px-6 py-4 text-left flex items-center justify-between focus:outline-none group">
                    <span class="text-white font-medium group-hover:text-brand-cyan transition-colors">Qual é o prazo médio para início de um projeto?</span>
                    <svg class="w-5 h-5 text-brand-muted transform group-hover:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="px-6 pb-4 hidden text-brand-muted text-sm leading-relaxed">
                    Nossa equipe de engenharia inicia o processo de discovery em até 48 horas após a formalização do contrato. Projetos de consultoria podem ter início imediato, dependendo da disponibilidade dos especialistas sêniores.
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="glass-card rounded-xl border border-white/5 overflow-hidden">
                <button class="w-full px-6 py-4 text-left flex items-center justify-between focus:outline-none group">
                    <span class="text-white font-medium group-hover:text-brand-cyan transition-colors">Vocês trabalham com contratos de manutenção (SLA)?</span>
                    <svg class="w-5 h-5 text-brand-muted transform group-hover:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="px-6 pb-4 hidden text-brand-muted text-sm leading-relaxed">
                    Sim. Oferecemos diferentes níveis de SLA (Service Level Agreement) para garantir a continuidade, segurança e evolução das soluções entregues, com suporte 24/7 para operações críticas.
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="glass-card rounded-xl border border-white/5 overflow-hidden">
                <button class="w-full px-6 py-4 text-left flex items-center justify-between focus:outline-none group">
                    <span class="text-white font-medium group-hover:text-brand-cyan transition-colors">A Traxter atende internacionalmente?</span>
                    <svg class="w-5 h-5 text-brand-muted transform group-hover:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="px-6 pb-4 hidden text-brand-muted text-sm leading-relaxed">
                    Sim. Atuamos globalmente com clientes na América do Norte, Europa e América Latina, oferecendo suporte bilíngue e conformidade com regulamentações internacionais de dados (GDPR/LGPD).
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$page->renderFooter();
?>