<?php
require_once 'includes/TraxterPage.php';
$page = new TraxterPage();
$page->renderHeader('cases');
?>

<!-- Hero Section -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
        <div class="absolute top-[-15%] left-[5%] w-[600px] h-[600px] bg-brand-primary/15 blur-[120px] rounded-full animate-pulse-slow"></div>
        <div class="absolute bottom-[-10%] right-[5%] w-[500px] h-[500px] bg-brand-cyan/15 blur-[120px] rounded-full animate-pulse-slow" style="animation-delay: 2s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-4xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-6 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-brand-primary animate-pulse"></span>
                <span class="text-brand-primary text-xs font-medium uppercase tracking-wider">Cases de Sucesso</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-display font-bold text-white tracking-tight mb-6 leading-tight animate-fade-in-up" style="animation-delay: 0.1s;">
                Resultados que Falam <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary via-brand-cyan to-brand-violet">Mais que Código</span>
            </h1>
            
            <p class="text-xl text-brand-muted leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                Descubra como transformamos desafios complexos em soluções de alta performance para líderes de mercado.
            </p>
        </div>
    </div>
</section>

<!-- Case Study 1: Fintech -->
<section class="py-20 bg-brand-darker relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1">
                <span class="text-brand-cyan font-mono text-sm tracking-wider uppercase mb-2 block">Fintech • Infraestrutura</span>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-6">Escalabilidade para 1M+ Transações/Dia</h2>
                <p class="text-brand-muted leading-relaxed mb-6">
                    Redesenhamos a arquitetura core de uma fintech líder, migrando de um monólito legado para microserviços em Kubernetes. O resultado foi uma redução drástica na latência e zero downtime durante a Black Friday.
                </p>
                
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div>
                        <span class="block text-3xl font-bold text-white mb-1">99.99%</span>
                        <span class="text-xs text-brand-muted uppercase tracking-wider">Uptime Garantido</span>
                    </div>
                    <div>
                        <span class="block text-3xl font-bold text-white mb-1">-40%</span>
                        <span class="text-xs text-brand-muted uppercase tracking-wider">Custo de Infra</span>
                    </div>
                </div>

                <a href="#" class="inline-flex items-center gap-2 text-brand-cyan hover:text-white transition-colors font-medium group">
                    Ler Case Completo
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
            
            <div class="order-1 lg:order-2">
                <div class="glass-card rounded-2xl border border-white/5 p-6 bg-black/40 relative group overflow-hidden h-full min-h-[300px] flex flex-col justify-center">
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-cyan/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                    
                    <!-- Fintech Dashboard UI Representation -->
                    <div class="relative z-10 w-full">
                        <div class="flex items-center justify-between mb-4 border-b border-white/5 pb-2">
                            <div class="flex items-center gap-2">
                                <div class="w-2 h-2 rounded-full bg-red-500"></div>
                                <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                                <div class="w-2 h-2 rounded-full bg-green-500"></div>
                            </div>
                            <span class="text-[10px] text-brand-muted font-mono">live_metrics_dashboard.tsx</span>
                        </div>
                        
                        <div class="grid grid-cols-3 gap-3 mb-4">
                            <div class="bg-white/5 rounded p-2 border border-white/5">
                                <span class="text-[10px] text-brand-muted block mb-1">REQ/SEC</span>
                                <span class="text-brand-cyan font-mono font-bold text-lg">12,402</span>
                            </div>
                            <div class="bg-white/5 rounded p-2 border border-white/5">
                                <span class="text-[10px] text-brand-muted block mb-1">LATENCY</span>
                                <span class="text-green-400 font-mono font-bold text-lg">14ms</span>
                            </div>
                            <div class="bg-white/5 rounded p-2 border border-white/5">
                                <span class="text-[10px] text-brand-muted block mb-1">ERRORS</span>
                                <span class="text-brand-muted font-mono font-bold text-lg">0.00%</span>
                            </div>
                        </div>

                        <!-- Animated Graph Area -->
                        <div class="bg-brand-darker/50 rounded-lg p-3 border border-white/5 h-24 flex items-end gap-1 relative overflow-hidden">
                             <!-- Grid lines -->
                             <div class="absolute inset-0 grid grid-cols-6 grid-rows-4 gap-4 opacity-10 pointer-events-none">
                                <div class="border-t border-r border-white"></div><div class="border-t border-r border-white"></div>
                                <div class="border-t border-r border-white"></div><div class="border-t border-r border-white"></div>
                                <div class="border-t border-r border-white"></div><div class="border-t border-r border-white"></div>
                             </div>
                             
                             <!-- Bars -->
                             <div class="w-1/12 bg-brand-cyan/20 h-[30%] rounded-t-sm"></div>
                             <div class="w-1/12 bg-brand-cyan/30 h-[45%] rounded-t-sm"></div>
                             <div class="w-1/12 bg-brand-cyan/40 h-[40%] rounded-t-sm"></div>
                             <div class="w-1/12 bg-brand-cyan/50 h-[60%] rounded-t-sm"></div>
                             <div class="w-1/12 bg-brand-cyan/60 h-[55%] rounded-t-sm"></div>
                             <div class="w-1/12 bg-brand-cyan/70 h-[75%] rounded-t-sm"></div>
                             <div class="w-1/12 bg-brand-cyan/80 h-[90%] rounded-t-sm"></div>
                             <div class="w-1/12 bg-brand-cyan h-[85%] rounded-t-sm animate-pulse"></div>
                             <div class="w-1/12 bg-brand-cyan/80 h-[80%] rounded-t-sm"></div>
                             <div class="w-1/12 bg-brand-cyan/70 h-[70%] rounded-t-sm"></div>
                             <div class="w-1/12 bg-brand-cyan/60 h-[65%] rounded-t-sm"></div>
                             <div class="w-1/12 bg-brand-cyan/50 h-[50%] rounded-t-sm"></div>
                        </div>
                        
                        <div class="mt-3 flex items-center gap-2 text-[10px] text-green-400 font-mono bg-green-400/10 px-2 py-1 rounded inline-block border border-green-400/20">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                            System Operational • Scale-out Active
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Study 2: Logistics -->
<section class="py-20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="order-1">
                <div class="glass-card rounded-2xl border border-white/5 p-6 bg-black/40 relative group overflow-hidden h-full min-h-[300px] flex flex-col justify-center">
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-violet/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                    
                    <!-- Logistics Map UI Representation -->
                    <div class="relative z-10 w-full">
                        <div class="flex items-center justify-between mb-4 border-b border-white/5 pb-2">
                            <span class="text-[10px] text-brand-muted font-mono uppercase tracking-widest">Route_Optimizer_AI.py</span>
                            <div class="flex items-center gap-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-brand-violet animate-pulse"></span>
                                <span class="text-[10px] text-brand-violet">Processing</span>
                            </div>
                        </div>

                        <!-- Abstract Map Visualization -->
                        <div class="bg-brand-darker/50 rounded-lg p-4 border border-white/5 h-48 relative overflow-hidden">
                            <!-- Map Grid Background -->
                            <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:20px_20px]"></div>
                            
                            <!-- Nodes -->
                            <div class="absolute top-[20%] left-[20%] w-3 h-3 rounded-full bg-brand-violet/50 border border-brand-violet shadow-[0_0_10px_rgba(143,165,208,0.5)] z-20"></div>
                            <div class="absolute top-[60%] left-[40%] w-3 h-3 rounded-full bg-brand-violet/50 border border-brand-violet shadow-[0_0_10px_rgba(143,165,208,0.5)] z-20"></div>
                            <div class="absolute top-[30%] right-[30%] w-3 h-3 rounded-full bg-white/50 border border-white z-20"></div> <!-- Destination -->
                            
                            <!-- Connecting Lines (SVG) -->
                            <svg class="absolute inset-0 w-full h-full z-10 pointer-events-none">
                                <path d="M80 50 L160 140" stroke="rgba(143, 165, 208, 0.3)" stroke-width="1" stroke-dasharray="4 4" />
                                <path d="M160 140 L280 70" stroke="#8FA5D0" stroke-width="2" fill="none" class="drop-shadow-[0_0_5px_rgba(143,165,208,0.5)]">
                                    <animate attributeName="stroke-dasharray" from="0, 1000" to="1000, 0" duration="3s" repeatCount="indefinite" />
                                </path>
                            </svg>

                            <!-- Floating Info Card -->
                            <div class="absolute bottom-2 left-2 bg-black/80 backdrop-blur-md border border-white/10 rounded p-2 z-30">
                                <div class="flex items-center gap-2 mb-1">
                                    <svg class="w-3 h-3 text-brand-violet" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    <span class="text-[10px] text-white font-bold">-22% Fuel</span>
                                </div>
                                <div class="w-24 h-1 bg-white/10 rounded-full overflow-hidden">
                                    <div class="w-[78%] h-full bg-brand-violet"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-2">
                <span class="text-brand-violet font-mono text-sm tracking-wider uppercase mb-2 block">Logística • IA</span>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-6">Otimização de Rotas com Machine Learning</h2>
                <p class="text-brand-muted leading-relaxed mb-6">
                    Implementamos algoritmos genéticos para otimização de last-mile delivery. A solução reduziu o consumo de combustível e aumentou a pontualidade das entregas em tempo recorde.
                </p>
                
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div>
                        <span class="block text-3xl font-bold text-white mb-1">-22%</span>
                        <span class="text-xs text-brand-muted uppercase tracking-wider">Custos Operacionais</span>
                    </div>
                    <div>
                        <span class="block text-3xl font-bold text-white mb-1">+35%</span>
                        <span class="text-xs text-brand-muted uppercase tracking-wider">Capacidade de Entrega</span>
                    </div>
                </div>

                <a href="#" class="inline-flex items-center gap-2 text-brand-violet hover:text-white transition-colors font-medium group">
                    Ler Case Completo
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Case Study 3: Healthtech -->
<section class="py-20 bg-brand-darker relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1">
                <span class="text-brand-primary font-mono text-sm tracking-wider uppercase mb-2 block">Healthtech • Segurança</span>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-6">Telemedicina com Criptografia End-to-End</h2>
                <p class="text-brand-muted leading-relaxed mb-6">
                    Desenvolvimento de plataforma de vídeo segura para consultas remotas, totalmente compliant com HIPAA e LGPD. Integração nativa com prontuário eletrônico e prescrição digital.
                </p>
                
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div>
                        <span class="block text-3xl font-bold text-white mb-1">ISO</span>
                        <span class="text-xs text-brand-muted uppercase tracking-wider">27001 Certified</span>
                    </div>
                    <div>
                        <span class="block text-3xl font-bold text-white mb-1">50k+</span>
                        <span class="text-xs text-brand-muted uppercase tracking-wider">Consultas/Mês</span>
                    </div>
                </div>

                <a href="#" class="inline-flex items-center gap-2 text-brand-primary hover:text-white transition-colors font-medium group">
                    Ler Case Completo
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
            
            <div class="order-1 lg:order-2">
                <div class="glass-card rounded-2xl border border-white/5 p-6 bg-black/40 relative group overflow-hidden h-full min-h-[300px] flex flex-col justify-center">
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                    
                    <!-- Healthtech Secure UI Representation -->
                    <div class="relative z-10 w-full">
                        <div class="flex items-center justify-between mb-4 border-b border-white/5 pb-2">
                            <div class="flex items-center gap-2 text-brand-primary">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                <span class="text-[10px] font-mono uppercase tracking-widest">E2E_Encrypted_Session</span>
                            </div>
                            <span class="px-2 py-0.5 rounded-full bg-brand-primary/20 text-brand-primary text-[10px] font-bold border border-brand-primary/30">HIPAA Compliant</span>
                        </div>

                        <!-- Video Call Mockup -->
                        <div class="bg-brand-darker/50 rounded-lg overflow-hidden border border-white/5 relative h-48">
                            <!-- Main Video Placeholder -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center">
                                    <div class="w-16 h-16 rounded-full bg-white/5 mx-auto mb-2 flex items-center justify-center animate-pulse">
                                        <svg class="w-8 h-8 text-brand-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                    </div>
                                    <span class="text-xs text-brand-muted block">Dr. Silva (Cardiologia)</span>
                                    <span class="text-[10px] text-green-500 flex items-center justify-center gap-1 mt-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Conexão Segura
                                    </span>
                                </div>
                            </div>

                            <!-- PIP (Picture in Picture) -->
                            <div class="absolute bottom-3 right-3 w-16 h-20 bg-black/80 rounded border border-white/10 flex items-center justify-center">
                                <svg class="w-6 h-6 text-brand-muted/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>

                            <!-- Encryption Overlay Animation -->
                            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIiBmaWxsPSJub25lIiBzdHJva2U9InJnYmEoMzcsIDk5LCAyMzUsIDAuMDUpIiBzdHJva2Utd2lkdGg9IjAuNSI+PHBhdGggZD0iTTAgMjBMMjAgME0xMCAyMEwyMCAxME0wIDEwTDEwIDAiIC8+PC9zdmc+')] opacity-50"></div>
                            
                            <!-- Floating Security Badge -->
                            <div class="absolute top-3 left-3 bg-brand-primary/10 backdrop-blur-md border border-brand-primary/20 rounded px-2 py-1 flex items-center gap-2">
                                <svg class="w-3 h-3 text-brand-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                <span class="text-[8px] text-brand-primary font-bold uppercase">AES-256 Encrypted</span>
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
        <h2 class="text-4xl font-display font-bold text-white mb-8">Seja o próximo case de sucesso.</h2>
        <div class="flex justify-center">
            <a href="contato.php" class="btn-gradient px-10 py-5 rounded-full text-white font-bold text-lg shadow-2xl hover:shadow-brand-primary/60 transform hover:-translate-y-1 transition-all">
                Iniciar Projeto
            </a>
        </div>
    </div>
</section>

<?php
$page->renderFooter();
?>