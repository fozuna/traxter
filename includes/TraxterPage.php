<?php
/**
 * Traxter Tecnologia & Automação
 * Classe principal de renderização (header, navbar, footer e helpers).
 * Contatos e textos globais ficam em includes/config.php.
 */

class TraxterPage {
    private static ?array $config = null;

    private string $title;
    private string $description;

    public function __construct(?string $title = null, ?string $description = null) {
        $site = self::cfg('site');
        $this->title = $title ?? $site['title'];
        $this->description = $description ?? $site['description'];
    }

    /** Lê uma seção do config.php (carregado uma única vez). */
    public static function cfg(string $section): array {
        if (self::$config === null) {
            self::$config = require __DIR__ . '/config.php';
        }
        return self::$config[$section] ?? [];
    }

    /** Escape padrão para saída HTML. */
    public static function e(?string $value): string {
        return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    /** Link do WhatsApp com mensagem pré-preenchida. */
    public static function whatsappUrl(?string $message = null): string {
        $c = self::cfg('contato');
        $number = preg_replace('/\D+/', '', $c['whatsapp']);
        return 'https://wa.me/' . $number . '?text=' . rawurlencode($message ?? $c['whatsapp_msg']);
    }

    /** Telefone formatado para exibição: +55 (67) 99872-3814 */
    public static function whatsappDisplay(): string {
        $n = preg_replace('/\D+/', '', self::cfg('contato')['whatsapp']);
        if (strlen($n) === 13) {
            return sprintf('(%s) %s-%s', substr($n, 2, 2), substr($n, 4, 5), substr($n, 9));
        }
        return $n;
    }

    public static function whatsappIcon(string $class = 'w-5 h-5'): string {
        return '<svg class="' . self::e($class) . '" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163a11.867 11.867 0 01-1.587-5.946C.16 5.335 5.495 0 12.05 0a11.817 11.817 0 018.413 3.488 11.824 11.824 0 013.48 8.414c-.003 6.557-5.338 11.892-11.893 11.892a11.9 11.9 0 01-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884a9.86 9.86 0 001.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>';
    }

    public function renderHeader(string $activePage = ''): void {
        header("X-Frame-Options: SAMEORIGIN");
        header("X-Content-Type-Options: nosniff");
        header("Referrer-Policy: strict-origin-when-cross-origin");
        header("Permissions-Policy: geolocation=(), microphone=(), camera=()");
        header("Strict-Transport-Security: max-age=31536000; includeSubDomains");

        $site = self::cfg('site');
        $contato = self::cfg('contato');
        $path = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
        $canonical = rtrim($site['url'], '/') . ($path === '/index.php' ? '/' : $path);
        $ogImage = is_file(dirname(__DIR__) . '/' . $site['og_image'])
            ? rtrim($site['url'], '/') . '/' . $site['og_image']
            : null;

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'ProfessionalService',
            'name' => $site['name'],
            'url' => $site['url'],
            'email' => $contato['email'],
            'telephone' => '+' . preg_replace('/\D+/', '', $contato['whatsapp']),
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => $contato['endereco'],
                'addressLocality' => 'Campo Grande',
                'addressRegion' => 'MS',
                'postalCode' => '79070-295',
                'addressCountry' => 'BR',
            ],
            'areaServed' => 'Mato Grosso do Sul',
            'openingHours' => 'Mo-Fr 09:00-18:00',
        ];
        ?>
<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= self::e($this->title) ?></title>
    <meta name="description" content="<?= self::e($this->description) ?>">
    <meta name="theme-color" content="#0B1120">
    <link rel="canonical" href="<?= self::e($canonical) ?>">

    <!-- Open Graph (prévia do link no WhatsApp/LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:site_name" content="<?= self::e($site['name']) ?>">
    <meta property="og:title" content="<?= self::e($this->title) ?>">
    <meta property="og:description" content="<?= self::e($this->description) ?>">
    <meta property="og:url" content="<?= self::e($canonical) ?>">
    <?php if ($ogImage): ?>
    <meta property="og:image" content="<?= self::e($ogImage) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <?php endif; ?>

    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= self::e($site['ga_id']) ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '<?= self::e($site['ga_id']) ?>');
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (TODO: compilar em build para produção; o CDN deixa o site mais lento) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="assets/js/tailwind-config.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="antialiased selection:bg-brand-primary selection:text-white">
    <div class="noise-overlay"></div>
    <?php $this->renderNavbar($activePage); ?>
        <?php
    }

    private function renderNavbar(string $activePage): void {
        $link = function (string $page, string $label) use ($activePage): string {
            $active = $activePage === $page;
            return '<a href="' . $page . '.php" class="block px-6 py-3 text-sm ' .
                ($active ? 'text-brand-cyan bg-white/5' : 'text-brand-muted hover:bg-white/5 hover:text-brand-cyan') .
                ' transition-colors border-b border-white/5 last:border-0">' . self::e($label) . '</a>';
        };
        $solutions = [
            'automacao-inteligente' => 'Automação com IA',
            'engenharia-software'   => 'Sistemas sob Medida',
            'integracao-apis'       => 'Integração de Sistemas',
            'consultoria-tecnica'   => 'Consultoria Técnica',
        ];
        $company = ['sobre' => 'Sobre Nós', 'metodologia' => 'Como Trabalhamos'];
        ?>
    <nav id="navbar" class="fixed top-0 w-full z-40 transition-all duration-300 py-6 border-b border-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="index.php" class="flex-shrink-0 flex items-center gap-2 group">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-brand-primary to-brand-secondary flex items-center justify-center shadow-lg shadow-brand-primary/20">
                        <span class="text-white font-bold text-lg">T</span>
                    </div>
                    <span class="text-2xl font-display font-bold text-white tracking-tight group-hover:text-brand-cyan transition-colors">TRAXTER<span class="text-brand-primary">.</span></span>
                </a>

                <!-- Desktop -->
                <div class="hidden md:flex items-center space-x-8">
                    <div class="relative group">
                        <button class="text-sm font-medium <?= isset($solutions[$activePage]) ? 'text-white' : 'text-brand-muted' ?> hover:text-white transition-colors flex items-center gap-1 py-2">
                            Soluções
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="absolute left-0 w-64 rounded-xl bg-[#0B1120]/95 backdrop-blur-xl border border-white/10 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 overflow-hidden">
                            <div class="py-2"><?php foreach ($solutions as $p => $l) echo $link($p, $l); ?></div>
                        </div>
                    </div>
                    <div class="relative group">
                        <button class="text-sm font-medium <?= isset($company[$activePage]) ? 'text-white' : 'text-brand-muted' ?> hover:text-white transition-colors flex items-center gap-1 py-2">
                            A Empresa
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="absolute left-0 w-56 rounded-xl bg-[#0B1120]/95 backdrop-blur-xl border border-white/10 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 overflow-hidden">
                            <div class="py-2"><?php foreach ($company as $p => $l) echo $link($p, $l); ?></div>
                        </div>
                    </div>
                    <a href="cases.php" class="text-sm font-medium <?= $activePage === 'cases' ? 'text-white' : 'text-brand-muted' ?> hover:text-white transition-colors">Cases</a>
                    <a href="contato.php" class="text-sm font-medium <?= $activePage === 'contato' ? 'text-white' : 'text-brand-muted' ?> hover:text-white transition-colors">Contato</a>
                    <a href="<?= self::e(self::whatsappUrl()) ?>" target="_blank" rel="noopener" data-wa="navbar"
                       class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-500 px-5 py-2.5 rounded-full text-white text-sm font-semibold shadow-lg shadow-green-600/25 transition-all">
                        <?= self::whatsappIcon('w-4 h-4') ?> Falar no WhatsApp
                    </a>
                </div>

                <!-- Mobile -->
                <button id="mobile-menu-btn" class="md:hidden p-2 text-white" aria-label="Abrir menu" aria-expanded="false" aria-controls="mobile-menu">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
            <div id="mobile-menu" class="hidden md:hidden mt-2 rounded-xl bg-[#0B1120]/95 backdrop-blur-xl border border-white/10 overflow-hidden">
                <?php foreach ($solutions + $company + ['cases' => 'Cases', 'contato' => 'Contato'] as $p => $l) echo $link($p, $l); ?>
            </div>
        </div>
    </nav>
        <?php
    }

    public function renderFooter(): void {
        $c = self::cfg('contato');
        $r = self::cfg('redes');
        ?>
    <footer class="bg-brand-darker border-t border-white/5 pt-20 pb-10 relative overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-brand-primary/5 blur-[100px] rounded-full pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div>
                    <span class="text-2xl font-display font-bold text-white tracking-tight">TRAXTER<span class="text-brand-primary">.</span></span>
                    <p class="text-brand-muted text-sm mt-4 leading-relaxed">
                        Automação com IA, WhatsApp e sistemas sob medida para empresas de Campo Grande e de todo o Mato Grosso do Sul.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-6">Soluções</h4>
                    <ul class="space-y-3 text-sm text-brand-muted">
                        <li><a href="automacao-inteligente.php" class="hover:text-brand-primary transition-colors">Automação com IA</a></li>
                        <li><a href="engenharia-software.php" class="hover:text-brand-primary transition-colors">Sistemas sob Medida</a></li>
                        <li><a href="integracao-apis.php" class="hover:text-brand-primary transition-colors">Integração de Sistemas</a></li>
                        <li><a href="consultoria-tecnica.php" class="hover:text-brand-primary transition-colors">Consultoria Técnica</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-6">Empresa</h4>
                    <ul class="space-y-3 text-sm text-brand-muted">
                        <li><a href="sobre.php" class="hover:text-brand-primary transition-colors">Sobre Nós</a></li>
                        <li><a href="cases.php" class="hover:text-brand-primary transition-colors">Cases</a></li>
                        <li><a href="contato.php" class="hover:text-brand-primary transition-colors">Contato</a></li>
                        <?php if ($r['linkedin']): ?><li><a href="<?= self::e($r['linkedin']) ?>" target="_blank" rel="noopener" class="hover:text-brand-primary transition-colors">LinkedIn</a></li><?php endif; ?>
                        <?php if ($r['instagram']): ?><li><a href="<?= self::e($r['instagram']) ?>" target="_blank" rel="noopener" class="hover:text-brand-primary transition-colors">Instagram</a></li><?php endif; ?>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-6">Contato</h4>
                    <ul class="space-y-3 text-sm text-brand-muted">
                        <li><a href="<?= self::e(self::whatsappUrl()) ?>" target="_blank" rel="noopener" data-wa="footer" class="text-green-400 hover:text-green-300 inline-flex items-center gap-2"><?= self::whatsappIcon('w-4 h-4') ?> <?= self::e(self::whatsappDisplay()) ?></a></li>
                        <li><a href="mailto:<?= self::e($c['email']) ?>" class="hover:text-white"><?= self::e($c['email']) ?></a></li>
                        <li><?= self::e($c['endereco']) ?><br><?= self::e($c['cidade']) ?></li>
                        <li><?= self::e($c['horario']) ?></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-brand-muted text-xs">&copy; <?= date('Y') ?> Traxter Tecnologia & Automação. Todos os direitos reservados.</div>
                <div class="flex gap-6">
                    <a href="privacidade.php" class="text-brand-muted hover:text-white transition-colors text-xs">Privacidade</a>
                    <a href="termos.php" class="text-brand-muted hover:text-white transition-colors text-xs">Termos de Uso</a>
                    <a href="sla.php" class="text-brand-muted hover:text-white transition-colors text-xs">SLA</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Botão flutuante de WhatsApp -->
    <a href="<?= self::e(self::whatsappUrl()) ?>" target="_blank" rel="noopener" data-wa="flutuante"
       class="fixed bottom-5 right-5 z-50 w-14 h-14 rounded-full bg-green-500 hover:bg-green-400 text-white flex items-center justify-center shadow-2xl shadow-green-500/40 transition-transform hover:scale-110"
       aria-label="Falar com a Traxter no WhatsApp">
        <?= self::whatsappIcon('w-7 h-7') ?>
    </a>

    <script src="assets/js/script.js"></script>
</body>
</html>
        <?php
    }
}
