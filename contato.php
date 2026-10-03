<?php
require_once 'includes/TraxterPage.php';
$page = new TraxterPage();
$page->renderHeader('contato');
?>

<!-- Hero Section -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
        <div class="absolute top-[-10%] right-[-5%] w-[500px] h-[500px] bg-brand-primary/10 blur-[120px] rounded-full animate-pulse-slow"></div>
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
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary via-brand-cyan to-[#FEDF8C]">Transformação Digital</span>
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
                                    Av. Senador Antônio Mendes Canale, 1429 - Pioneiros<br>
                                    Campo Grande, 79070-295
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
                <div class="glass-card p-8 md:p-10 rounded-2xl border border-white/5 relative overflow-hidden shadow-2xl">
                    <h3 class="text-2xl font-display font-bold text-white mb-2 text-center">Conecte-se Conosco</h3>
                
                    
                    <div class="flex flex-col gap-4">
                        <!-- WhatsApp -->
                        <a href="#" target="_blank" class="group flex items-center gap-5 p-5 rounded-xl bg-white/5 border border-white/10 hover:border-green-500/50 hover:bg-green-500/10 transition-all duration-300 transform hover:-translate-y-1">
                            <div class="w-12 h-12 rounded-full bg-green-500/20 flex items-center justify-center text-green-400 group-hover:text-green-300 group-hover:scale-110 transition-all shadow-[0_0_15px_rgba(34,197,94,0.3)]">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-8.68-2.031-.967-.272-.099-.47-.149-.669.198-.198.347-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.52.151-.174.2-.298.3-.495.099-.198.05-.372-.025-.52-.075-.149-.669-1.611-.916-2.207-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z"/></svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg font-bold text-white group-hover:text-green-400 transition-colors">WhatsApp</h4>
                                <p class="text-sm text-brand-muted group-hover:text-white/80 transition-colors">Fale diretamente com um especialista</p>
                            </div>
                            <div class="text-white/20 group-hover:text-green-400 transition-colors transform group-hover:translate-x-1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </div>
                        </a>

                        <!-- LinkedIn -->
                        <a href="#" target="_blank" class="group flex items-center gap-5 p-5 rounded-xl bg-white/5 border border-white/10 hover:border-blue-500/50 hover:bg-blue-500/10 transition-all duration-300 transform hover:-translate-y-1">
                            <div class="w-12 h-12 rounded-full bg-blue-500/20 flex items-center justify-center text-blue-400 group-hover:text-blue-300 group-hover:scale-110 transition-all shadow-[0_0_15px_rgba(59,130,246,0.3)]">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg font-bold text-white group-hover:text-blue-400 transition-colors">LinkedIn</h4>
                                <p class="text-sm text-brand-muted group-hover:text-white/80 transition-colors">Acompanhe nossas atualizações corporativas</p>
                            </div>
                            <div class="text-white/20 group-hover:text-blue-400 transition-colors transform group-hover:translate-x-1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </div>
                        </a>

                        <!-- Instagram -->
                        <a href="#" target="_blank" class="group flex items-center gap-5 p-5 rounded-xl bg-white/5 border border-white/10 hover:border-pink-500/50 hover:bg-gradient-to-r hover:from-purple-500/10 hover:to-pink-500/10 transition-all duration-300 transform hover:-translate-y-1">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-yellow-500/20 via-pink-500/20 to-purple-500/20 flex items-center justify-center text-pink-400 group-hover:text-pink-300 group-hover:scale-110 transition-all shadow-[0_0_15px_rgba(236,72,153,0.3)]">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.451 4.635c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg font-bold text-white group-hover:text-pink-400 transition-colors">Instagram</h4>
                                <p class="text-sm text-brand-muted group-hover:text-white/80 transition-colors">Bastidores e cultura Traxter</p>
                            </div>
                            <div class="text-white/20 group-hover:text-pink-400 transition-colors transform group-hover:translate-x-1">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </div>
                        </a>
                    </div>
                </div>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqButtons = document.querySelectorAll('.glass-card button');
    
    faqButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Toggle content visibility
            const content = button.nextElementSibling;
            content.classList.toggle('hidden');
            
            // Toggle icon rotation
            const icon = button.querySelector('svg');
            icon.classList.toggle('rotate-180');
            
            // Optional: Close other items (accordion behavior)
            faqButtons.forEach(otherButton => {
                if (otherButton !== button) {
                    const otherContent = otherButton.nextElementSibling;
                    const otherIcon = otherButton.querySelector('svg');
                    
                    if (!otherContent.classList.contains('hidden')) {
                        otherContent.classList.add('hidden');
                        otherIcon.classList.remove('rotate-180');
                    }
                }
            });
        });
    });
});
</script>

<?php
$page->renderFooter();
?>