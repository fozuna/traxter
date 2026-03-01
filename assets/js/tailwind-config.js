// Tailwind Configuration
tailwind.config = {
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                brand: {
                    dark: '#0B1120',      // Azul Profundo Exclusivo
                    darker: '#020617',    // Slate 950 (Fundo base)
                    surface: '#111827',   // Background Secundário
                    primary: '#2563EB',   // Traxter Blue
                    secondary: '#6D28D9', // Deep Violet
                    cyan: '#0891B2',      // Electric Cyan
                    text: '#F1F5F9',      // Texto Principal
                    muted: '#94A3B8',     // Texto Secundário
                }
            },
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                display: ['Space Grotesk', 'sans-serif'],
            },
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                'hero-glow': 'conic-gradient(from 180deg at 50% 50%, #2563EB33 0deg, #6D28D933 180deg, #0891B233 360deg)',
            },
            animation: {
                'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'gradient-x': 'gradientX 15s ease infinite',
            },
            keyframes: {
                fadeInUp: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                gradientX: {
                    '0%, 100%': {
                        'background-size': '200% 200%',
                        'background-position': 'left center'
                    },
                    '50%': {
                        'background-size': '200% 200%',
                        'background-position': 'right center'
                    },
                },
            }
        }
    }
}