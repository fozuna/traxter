<?php
/**
 * Traxter Tecnologia & Automação
 * Classe Principal de Renderização
 */

class TraxterPage {
    private $title = "Traxter Tecnologia & Automação | Engenharia de Software Estratégica";
    private $description = "Engenharia de software de alto padrão e automação estratégica para empresas que buscam escalabilidade, governança tecnológica e eficiência operacional.";
    
    public function renderHeader($activePage = '') {
        // Security Headers
        header("X-Frame-Options: SAMEORIGIN");
        header("X-XSS-Protection: 1; mode=block");
        header("X-Content-Type-Options: nosniff");
        header("Referrer-Policy: strict-origin-when-cross-origin");
        header("Permissions-Policy: geolocation=(), microphone=(), camera=()");
        header("Strict-Transport-Security: max-age=31536000; includeSubDomains");
        ?>
        <!DOCTYPE html>
        <html lang="pt-BR" class="scroll-smooth">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="<?php echo $this->description; ?>">
            <meta name="theme-color" content="#14213D">
            <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">
            <meta property="og:type" content="website">
            <meta property="og:title" content="<?php echo $this->title; ?>">
            <meta property="og:description" content="<?php echo $this->description; ?>">
            <title><?php echo $this->title; ?></title>

            <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-HM7H90EN72"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'G-HM7H90EN72');
            </script>

            <!-- Fontes da marca: Archivo, IBM Plex Sans e IBM Plex Mono -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@62..125,500..900&family=IBM+Plex+Mono:wght@400;500&family=IBM+Plex+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
            
            <!-- Tailwind CSS -->
            <script src="https://cdn.tailwindcss.com"></script>
            <script src="assets/js/tailwind-config.js"></script>

            <!-- Custom CSS -->
            <link rel="stylesheet" href="assets/css/style.css">
        </head>
        <body class="antialiased selection:bg-brand-primary selection:text-black">
            <div class="noise-overlay"></div>
            <?php $this->renderNavbar($activePage); ?>
        <?php
    }

    private function renderNavbar($activePage) {
        ?>
        <!-- Navbar Flutuante e Glassmorphism -->
        <nav id="navbar" class="fixed top-0 w-full z-40 transition-all duration-300 py-6 border-b border-transparent">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <!-- Logo -->
                    <a href="index.php" class="flex-shrink-0 flex items-center gap-2 group cursor-pointer text-decoration-none">
                        <span class="sym text-3xl" aria-hidden="true"><i></i><i></i><i></i></span>
                        <span class="wm text-2xl" aria-label="TRAXTER">TRAXTER</span>
                    </a>
                    
                    <!-- Desktop Menu -->
                    <div class="hidden md:flex items-center space-x-8">
                        <!-- Soluções Dropdown -->
                        <div class="relative group">
                            <?php 
                            $solutionsPages = ['engenharia-software', 'automacao-inteligente', 'integracao-apis', 'consultoria-tecnica', 'solucoes'];
                            $isSolutionsActive = in_array($activePage, $solutionsPages);
                            ?>
                            <button class="text-sm font-medium <?php echo $isSolutionsActive ? 'text-white' : 'text-brand-muted'; ?> hover:text-white transition-colors flex items-center gap-1 focus:outline-none py-2">
                                Soluções
                                <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div class="absolute left-0 mt-0 w-64 rounded-xl bg-[#0B1428]/95 backdrop-blur-xl border border-white/10 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-left z-50 overflow-hidden translate-y-2 group-hover:translate-y-0">
                                <div class="py-2">
                                    <a href="engenharia-software.php" class="block px-6 py-3 text-sm <?php echo $activePage === 'engenharia-software' ? 'text-brand-cyan bg-white/5' : 'text-brand-muted hover:bg-white/5 hover:text-brand-cyan'; ?> transition-colors border-b border-white/5">Engenharia de Software</a>
                                    <a href="automacao-inteligente.php" class="block px-6 py-3 text-sm <?php echo $activePage === 'automacao-inteligente' ? 'text-brand-cyan bg-white/5' : 'text-brand-muted hover:bg-white/5 hover:text-brand-cyan'; ?> transition-colors border-b border-white/5">Automação Inteligente</a>
                                    <a href="integracao-apis.php" class="block px-6 py-3 text-sm <?php echo $activePage === 'integracao-apis' ? 'text-brand-cyan bg-white/5' : 'text-brand-muted hover:bg-white/5 hover:text-brand-cyan'; ?> transition-colors border-b border-white/5">Integração de APIs</a>
                                    <a href="consultoria-tecnica.php" class="block px-6 py-3 text-sm <?php echo $activePage === 'consultoria-tecnica' ? 'text-brand-cyan bg-white/5' : 'text-brand-muted hover:bg-white/5 hover:text-brand-cyan'; ?> transition-colors">Consultoria Técnica</a>
                                </div>
                            </div>
                        </div>

                        <!-- Empresa Dropdown -->
                        <div class="relative group">
                            <button class="text-sm font-medium <?php echo in_array($activePage, ['sobre', 'metodologia']) ? 'text-white' : 'text-brand-muted'; ?> hover:text-white transition-colors flex items-center gap-1 focus:outline-none py-2">
                                A Empresa
                                <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div class="absolute left-0 mt-0 w-56 rounded-xl bg-[#0B1428]/95 backdrop-blur-xl border border-white/10 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-left z-50 overflow-hidden translate-y-2 group-hover:translate-y-0">
                                <div class="py-2">
                                    <a href="sobre.php" class="block px-6 py-3 text-sm <?php echo $activePage === 'sobre' ? 'text-brand-cyan bg-white/5' : 'text-brand-muted hover:bg-white/5 hover:text-brand-cyan'; ?> transition-colors border-b border-white/5">Sobre Nós</a>
                                    <a href="metodologia.php" class="block px-6 py-3 text-sm <?php echo $activePage === 'metodologia' ? 'text-brand-cyan bg-white/5' : 'text-brand-muted hover:bg-white/5 hover:text-brand-cyan'; ?> transition-colors">Metodologia</a>
                                </div>
                            </div>
                        </div>

                        <a href="cases.php" class="text-sm font-medium <?php echo $activePage === 'cases' ? 'text-white' : 'text-brand-muted'; ?> hover:text-white transition-colors relative group">
                            Cases
                            <span class="absolute -bottom-1 left-0 <?php echo $activePage === 'cases' ? 'w-full' : 'w-0'; ?> h-0.5 bg-brand-cyan transition-all group-hover:w-full"></span>
                        </a>
                        <a href="contato.php" class="btn-gradient px-6 py-2.5 rounded-full text-white text-sm font-semibold shadow-lg shadow-brand-primary/25 hover:shadow-brand-primary/50 transform hover:-translate-y-0.5 transition-all">
                            Agendar Diagnóstico
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <?php
    }

    public function renderFooter() {
        ?>
            <!-- Footer Sofisticado -->
            <footer class="bg-brand-darker border-t border-white/5 pt-20 pb-10 relative overflow-hidden">
                <!-- Glow decorativo footer -->
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-brand-primary/5 blur-[100px] rounded-full pointer-events-none"></div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                        <div class="col-span-1 md:col-span-1">
                            <span class="inline-flex items-center gap-2"><span class="sym text-3xl" aria-hidden="true"><i></i><i></i><i></i></span><span class="wm text-2xl">TRAXTER</span></span>
                            <p class="text-brand-muted text-sm mt-4 leading-relaxed">
                                Engenharia de software estratégica e infraestrutura digital para negócios de alta performance.
                            </p>
                        </div>
                        
                        <div>
                            <h4 class="text-white font-semibold mb-6">Soluções</h4>
                            <ul class="space-y-3 text-sm text-brand-muted">
                                <li><a href="engenharia-software.php" class="hover:text-brand-primary transition-colors">Engenharia de Software</a></li>
                                <li><a href="automacao-inteligente.php" class="hover:text-brand-primary transition-colors">Automação Inteligente</a></li>
                                <li><a href="integracao-apis.php" class="hover:text-brand-primary transition-colors">Integração de APIs</a></li>
                                <li><a href="consultoria-tecnica.php" class="hover:text-brand-primary transition-colors">Consultoria Técnica</a></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="text-white font-semibold mb-6">Empresa</h4>
                            <ul class="space-y-3 text-sm text-brand-muted">
                                <li><a href="sobre.php" class="hover:text-brand-primary transition-colors">Sobre Nós</a></li>
                                <li><a href="metodologia.php" class="hover:text-brand-primary transition-colors">Metodologia</a></li>
                                <li><a href="contato.php" class="hover:text-brand-primary transition-colors">Contato</a></li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="text-white font-semibold mb-6">Contato</h4>
                            <p class="text-brand-muted text-sm mb-4">
                                Discussões estratégicas sobre tecnologia e inovação.
                            </p>
                            <a href="contato.php" class="text-brand-cyan hover:text-white transition-colors text-sm font-medium flex items-center gap-2">
                                Falar com Especialista
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                    
                    <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                        <div class="text-brand-muted text-xs">
                            &copy; <?php echo date("Y"); ?> Traxter Tecnologia & Automação. Todos os direitos reservados.
                        </div>
                        <div class="flex gap-6">
                            <a href="privacidade.php" class="text-brand-muted hover:text-white transition-colors text-xs">Privacidade</a>
                            <a href="termos.php" class="text-brand-muted hover:text-white transition-colors text-xs">Termos de Uso</a>
                            <a href="sla.php" class="text-brand-muted hover:text-white transition-colors text-xs">SLA</a>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Scripts -->
            <script src="assets/js/script.js"></script>
        </body>
        </html>
        <?php
    }
}
?>