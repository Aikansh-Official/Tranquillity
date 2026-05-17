<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Ocean Floor Breath - The Living Atmosphere</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Manrope:wght@300;400;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "primary": "#59694b",
                    "on-secondary": "#ffffff",
                    "primary-container": "#d6e9c3",
                    "secondary-fixed-dim": "#d8d1e3",
                    "primary-fixed": "#d6e9c3",
                    "outline-variant": "#bcb9b1",
                    "inverse-primary": "#eafdd6",
                    "surface-dim": "#e6e2da",
                    "on-tertiary": "#ffffff",
                    "surface-variant": "#ece8df",
                    "on-primary": "#ffffff",
                    "outline": "#838079",
                    "on-secondary-container": "#544f5e",
                    "tertiary-fixed-dim": "#ebd6c8",
                    "primary-fixed-dim": "#c8dbb6",
                    "on-surface": "#393832",
                    "secondary-container": "#e7dff2",
                    "surface-bright": "#fffbff",
                    "error-container": "#fd795a",
                    "background": "#fffbff",
                    "tertiary-container": "#fae4d6",
                    "secondary-fixed": "#e7dff2",
                    "on-primary-fixed-variant": "#506043",
                    "tertiary-fixed": "#fae4d6",
                    "inverse-on-surface": "#9f9c98",
                    "on-primary-container": "#46563a",
                    "tertiary-dim": "#64554a",
                    "surface-container-high": "#f1ede6",
                    "on-surface-variant": "#66645e",
                    "surface": "#fffbff",
                    "on-error": "#ffffff",
                    "inverse-surface": "#0f0e0c",
                    "on-tertiary-fixed": "#4e4036",
                    "surface-container-highest": "#ece8df",
                    "secondary-dim": "#5a5665",
                    "on-tertiary-container": "#615247",
                    "error": "#ae4025",
                    "surface-container": "#f7f3ec",
                    "surface-tint": "#59694b",
                    "secondary": "#676271",
                    "primary-dim": "#4d5d40",
                    "on-background": "#393832",
                    "on-tertiary-fixed-variant": "#6b5c51",
                    "on-secondary-fixed": "#413d4b",
                    "on-primary-fixed": "#344429",
                    "on-secondary-fixed-variant": "#5e5968",
                    "surface-container-lowest": "#ffffff",
                    "error-dim": "#791903",
                    "surface-container-low": "#fdf9f2",
                    "on-error-container": "#6e1400",
                    "tertiary": "#716156"
            },
            "borderRadius": {
                    "DEFAULT": "1rem",
                    "lg": "2rem",
                    "xl": "3rem",
                    "full": "9999px"
            },
            "fontFamily": {
                    "headline": ["Noto Serif"],
                    "display": ["Noto Serif"],
                    "body": ["Manrope"],
                    "label": ["Manrope"]
            }
          },
        },
      }
    </script>
<style>
        body { font-family: 'Manrope', sans-serif; }
        .font-notoSerif { font-family: 'Noto Serif', serif; }
        .font-manrope { font-family: 'Manrope', sans-serif; }
        
        .ocean-gradient {
            background: linear-gradient(to bottom, #114b5f 0%, #062a3d 40%, #02121a 100%);
        }

        .wave-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            opacity: 0.3;
            animation: wave-drift 18s ease-in-out infinite alternate;
        }

        .wave-svg {
            position: relative;
            display: block;
            width: calc(154% + 1.3px);
            height: 120px;
            animation: wave-slide 26s linear infinite;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .depth-image {
            animation: depth-drift 28s ease-in-out infinite alternate;
            transform-origin: center;
        }

        .caustic-field,
        .current-field,
        .silt-field {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 1;
        }

        .caustic-field {
            background:
                radial-gradient(ellipse at 20% 0%, rgba(132, 221, 234, 0.18), transparent 42%),
                radial-gradient(ellipse at 74% 8%, rgba(255, 255, 255, 0.12), transparent 38%),
                linear-gradient(105deg, transparent 0 22%, rgba(150, 230, 235, 0.08) 30%, transparent 42% 100%);
            filter: blur(22px);
            mix-blend-mode: screen;
            opacity: 0.58;
            animation: caustic-sway 16s ease-in-out infinite alternate;
        }

        .current-field {
            background:
                repeating-linear-gradient(172deg, transparent 0 58px, rgba(174, 226, 230, 0.04) 60px, transparent 68px),
                repeating-linear-gradient(8deg, transparent 0 92px, rgba(255, 255, 255, 0.035) 96px, transparent 110px);
            opacity: 0.55;
            animation: current-flow 24s linear infinite;
        }

        .silt-field {
            overflow: hidden;
        }

        .silt-field span {
            position: absolute;
            bottom: -9vh;
            left: var(--x);
            width: var(--size);
            height: var(--size);
            border-radius: 9999px;
            background: rgba(214, 244, 244, var(--alpha));
            box-shadow: 0 0 16px rgba(175, 230, 235, 0.22);
            animation: silt-rise var(--duration) linear infinite;
            animation-delay: var(--delay);
        }

        .guided-copy {
            animation: slow-sink 9s ease-in-out infinite alternate;
        }

        .breath-orb {
            animation: breath-orb 8s ease-in-out infinite;
            box-shadow: 0 0 0 0 rgba(180, 227, 228, 0.14);
        }

        .breath-core {
            animation: breath-core 8s ease-in-out infinite;
        }

        .breath-ring {
            animation: breath-ring 8s ease-in-out infinite;
        }

        .breath-ring-delayed {
            animation-delay: -4s;
        }

        .air-icon {
            animation: air-float 4s ease-in-out infinite;
        }

        .progress-dot {
            animation: progress-breathe 8s ease-in-out infinite;
        }

        .progress-dot:nth-child(2) { animation-delay: 2s; }
        .progress-dot:nth-child(3) { animation-delay: 4s; }
        .progress-dot:nth-child(4) { animation-delay: 6s; }

        @keyframes wave-drift {
            from { transform: translateY(0); opacity: 0.23; }
            to { transform: translateY(20px); opacity: 0.38; }
        }

        @keyframes wave-slide {
            from { transform: translateX(-7%); }
            to { transform: translateX(0); }
        }

        @keyframes depth-drift {
            from { transform: scale(1.04) translate3d(-1.5%, -1%, 0); filter: saturate(0.9) brightness(0.9); }
            to { transform: scale(1.12) translate3d(1.5%, 1.8%, 0); filter: saturate(1.12) brightness(1.04); }
        }

        @keyframes caustic-sway {
            from { transform: translate3d(-3%, -2%, 0) rotate(-1deg) scale(1); opacity: 0.42; }
            to { transform: translate3d(3%, 4%, 0) rotate(1deg) scale(1.08); opacity: 0.72; }
        }

        @keyframes current-flow {
            from { transform: translate3d(0, 0, 0); }
            to { transform: translate3d(-90px, 70px, 0); }
        }

        @keyframes silt-rise {
            0% { transform: translate3d(0, 0, 0) scale(0.65); opacity: 0; }
            12% { opacity: 0.75; }
            70% { opacity: 0.4; }
            100% { transform: translate3d(var(--drift), -118vh, 0) scale(1.1); opacity: 0; }
        }

        @keyframes slow-sink {
            from { transform: translateY(-8px); }
            to { transform: translateY(18px); }
        }

        @keyframes breath-orb {
            0%, 100% { transform: scale(0.92); box-shadow: 0 0 0 0 rgba(180, 227, 228, 0.06); }
            45% { transform: scale(1.08); box-shadow: 0 0 0 34px rgba(180, 227, 228, 0.08); }
            70% { transform: scale(1.08); box-shadow: 0 0 0 16px rgba(180, 227, 228, 0.04); }
        }

        @keyframes breath-core {
            0%, 100% { transform: scale(0.78); opacity: 0.45; }
            45%, 70% { transform: scale(1); opacity: 0.78; }
        }

        @keyframes breath-ring {
            0% { transform: scale(0.58); opacity: 0.42; }
            70% { opacity: 0.16; }
            100% { transform: scale(1.42); opacity: 0; }
        }

        @keyframes air-float {
            0%, 100% { transform: translateY(4px); opacity: 0.36; }
            50% { transform: translateY(-6px); opacity: 0.7; }
        }

        @keyframes progress-breathe {
            0%, 100% { background: rgba(255, 255, 255, 0.22); transform: scale(1); }
            15%, 35% { background: rgba(255, 255, 255, 1); transform: scale(1.35); }
        }

        @media (prefers-reduced-motion: reduce) {
            .wave-container,
            .wave-svg,
            .depth-image,
            .caustic-field,
            .current-field,
            .silt-field span,
            .guided-copy,
            .breath-orb,
            .breath-core,
            .breath-ring,
            .air-icon,
            .progress-dot {
                animation: none !important;
            }
        }
    </style>
</head>
<body class="ocean-gradient min-h-screen text-surface-container overflow-hidden">
<!-- Top Navigation (Shared Component) -->
<header class="fixed top-0 w-full z-50 flex justify-between items-center px-8 py-6 bg-transparent">
<div class="flex items-center gap-4">
<span class="font-notoSerif italic text-sage-800 dark:text-sage-200 text-2xl tracking-tight text-white/90">The Living Atmosphere</span>
</div>
<div class="flex items-center space-x-8">
<nav class="hidden md:flex space-x-10">
<a class="text-sage-900 dark:text-sage-100 font-bold transition-opacity hover:opacity-80 font-notoSerif text-lg text-white" href="#">Breathe</a>
<a class="text-sage-600 dark:text-sage-400 transition-opacity hover:opacity-80 font-notoSerif text-lg text-white/60" href="#">Meditate</a>
<a class="text-sage-600 dark:text-sage-400 transition-opacity hover:opacity-80 font-notoSerif text-lg text-white/60" href="#">Journal</a>
</nav>
<button class="material-symbols-outlined text-white/80 text-3xl hover:opacity-70 transition-opacity active:scale-95" data-icon="close">close</button>
</div>
</header>
<!-- Side Navigation (Suppressed due to focus mode) -->
<!-- Ambient Background Elements -->
<div class="wave-container">
<svg class="wave-svg" data-name="Layer 1" preserveaspectratio="none" viewbox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg">
<path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="#ffffff" opacity="0.1"></path>
</svg>
</div>
<div class="caustic-field"></div>
<div class="current-field"></div>
<div class="silt-field">
<span style="--x: 6%; --size: 4px; --alpha: 0.38; --duration: 18s; --delay: -2s; --drift: 38px;"></span>
<span style="--x: 14%; --size: 2px; --alpha: 0.28; --duration: 24s; --delay: -15s; --drift: -24px;"></span>
<span style="--x: 23%; --size: 5px; --alpha: 0.26; --duration: 28s; --delay: -9s; --drift: 54px;"></span>
<span style="--x: 32%; --size: 3px; --alpha: 0.34; --duration: 20s; --delay: -7s; --drift: -36px;"></span>
<span style="--x: 43%; --size: 6px; --alpha: 0.22; --duration: 31s; --delay: -20s; --drift: 42px;"></span>
<span style="--x: 51%; --size: 2px; --alpha: 0.36; --duration: 22s; --delay: -4s; --drift: -48px;"></span>
<span style="--x: 59%; --size: 4px; --alpha: 0.24; --duration: 27s; --delay: -13s; --drift: 31px;"></span>
<span style="--x: 68%; --size: 3px; --alpha: 0.32; --duration: 19s; --delay: -11s; --drift: -26px;"></span>
<span style="--x: 76%; --size: 5px; --alpha: 0.2; --duration: 30s; --delay: -17s; --drift: 58px;"></span>
<span style="--x: 87%; --size: 2px; --alpha: 0.42; --duration: 21s; --delay: -5s; --drift: -34px;"></span>
<span style="--x: 94%; --size: 4px; --alpha: 0.25; --duration: 26s; --delay: -22s; --drift: 28px;"></span>
</div>
<!-- Main Guided Content (Canvas) -->
<main class="relative z-10 flex flex-col items-center justify-center min-h-screen px-6 pt-28 pb-48 text-center">
<!-- Guided Visualization Text Cluster -->
<div class="guided-copy max-w-4xl space-y-16 md:space-y-20">
<div class="space-y-6">
<p class="font-manrope text-white/40 tracking-[0.4em] uppercase text-xs font-semibold">Active Session: Ocean Floor</p>
<h1 class="font-notoSerif text-5xl md:text-7xl lg:text-8xl text-white font-light tracking-tight leading-tight">
                    Sinking slowly... <br/>
<span class="text-white/60 italic">deeper...</span>
</h1>
</div>
<!-- Kinetic Typography Element -->
<div class="flex flex-col items-center space-y-6">
<div class="breath-orb w-32 h-32 md:w-48 md:h-48 rounded-full border border-white/10 flex items-center justify-center p-4">
<div class="breath-core w-full h-full rounded-full bg-white/5 backdrop-blur-md flex items-center justify-center relative">
<div class="breath-ring absolute inset-0 rounded-full border border-white/20"></div>
<div class="breath-ring breath-ring-delayed absolute inset-0 rounded-full border border-white/10"></div>
<div class="absolute inset-0 rounded-full border border-white/20 scale-75"></div>
<span class="air-icon material-symbols-outlined text-white/40 text-4xl" data-icon="air">air</span>
</div>
</div>
<!-- Progress Indicator -->
<div class="flex items-center gap-3 pt-3">
<div class="progress-dot w-1.5 h-1.5 rounded-full bg-white"></div>
<div class="progress-dot w-1.5 h-1.5 rounded-full bg-white/20"></div>
<div class="progress-dot w-1.5 h-1.5 rounded-full bg-white/20"></div>
<div class="progress-dot w-1.5 h-1.5 rounded-full bg-white/20"></div>
</div>
<h2 class="font-notoSerif text-3xl md:text-5xl text-white/80 font-light tracking-wide max-w-2xl">
                    zero pressure...
                </h2>
</div>
</div>
<!-- Floating UI Elements -->
<div class="fixed bottom-8 left-1/2 z-40 -translate-x-1/2 flex flex-col items-center">
<!-- End Session Button -->
<a href="{{ route('library') }}" class="group px-10 py-4 bg-white/10 backdrop-blur-xl hover:bg-white/20 transition-all rounded-full flex items-center gap-3 border border-white/5">
<span class="text-white font-manrope font-semibold tracking-wider text-sm">End Session</span>
<span class="material-symbols-outlined text-white text-lg transition-transform group-hover:rotate-90" data-icon="close">close</span>
</a>
</div>
</main>
<!-- Side Decoration (Asymmetric Editorial Element) -->
<aside class="hidden lg:block fixed right-12 top-1/2 -translate-y-1/2 pointer-events-none">
<div class="flex flex-col gap-24 items-end opacity-20">
<div class="w-px h-64 bg-gradient-to-b from-transparent via-white to-transparent"></div>
<div class="rotate-90 origin-right -mr-4">
<span class="font-manrope text-white uppercase tracking-[1em] text-[10px] whitespace-nowrap">Atmospheric Submersion</span>
</div>
<div class="w-px h-64 bg-gradient-to-b from-transparent via-white to-transparent"></div>
</div>
</aside>
<!-- Visual Anchor: Deep Sea Imagery -->
<div class="fixed inset-0 z-0 pointer-events-none mix-blend-overlay opacity-40">
<img alt="Ocean depth" class="depth-image w-full h-full object-cover" data-alt="abstract deep teal water background with faint light rays piercing through from the surface into the abyss" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAN0RhFGgAunVIrwpfTFfZ3KZ2uCyusD__ZNGQ8rlTLequbVgmDQlUfa-NDGHzTHdYNYEVy4xOngRGG9T69yExD0-6LMM95OdYTaamnqq9nJd67zDUuIKUZGhDy4tB-9TgOTNGamRRFHDk6WM3BYv8D_knr_oz-F7hv3MRuDrFvRLdZFMJHLHH2xw_u9pOqSTyKtZ9J9fPREe2leETbW44UWBrHxBMOvrIdAHdTI9p_sVMOCoSPhemr-A_6hK0LCXkd1qjI-jz1xE"/>
</div>
<!-- Tonal Overlays for Depth -->
<div class="fixed inset-0 bg-gradient-to-t from-[#02121a] via-transparent to-transparent pointer-events-none z-0"></div>
</body></html>
