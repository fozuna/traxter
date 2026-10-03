// Tailwind Configuration
tailwind.config = {
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                brand: {
                    dark: '#0B1428',      // Navy 950
                    darker: '#05070D',    // Black Traxter (fundo base)
                    surface: '#14213D',   // Navy 900 (cartões e seções)
                    primary: '#FCA311',   // Âmbar 500 (ação / destaque, até 10% da área)
                    secondary: '#324A78', // Navy 600
                    cyan: '#FDB52F',      // Âmbar 400 (texto de destaque sobre escuro)
                    violet: '#8FA5D0',    // Navy 300 (antes indefinido)
                    text: '#EEF2FA',      // Navy 50
                    muted: '#B9C8E6',     // Navy 200
                }
            },
            fontFamily: {
                sans: ['"IBM Plex Sans"', 'system-ui', 'sans-serif'],
                display: ['Archivo', 'system-ui', 'sans-serif'],
                mono: ['"IBM Plex Mono"', 'ui-monospace', 'monospace'],
            },
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                'hero-glow': 'conic-gradient(from 180deg at 50% 50%, #FCA31133 0deg, #14213D66 180deg, #FCA31122 360deg)',
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