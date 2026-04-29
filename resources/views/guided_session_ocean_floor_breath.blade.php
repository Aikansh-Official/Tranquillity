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
        }

        .wave-svg {
            position: relative;
            display: block;
            width: calc(154% + 1.3px);
            height: 120px;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
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
<!-- Main Guided Content (Canvas) -->
<main class="relative z-10 flex flex-col items-center justify-center min-h-screen px-6 text-center py-32">
<!-- Guided Visualization Text Cluster -->
<div class="max-w-4xl space-y-32">
<div class="space-y-6">
<p class="font-manrope text-white/40 tracking-[0.4em] uppercase text-xs font-semibold">Active Session: Ocean Floor</p>
<h1 class="font-notoSerif text-5xl md:text-7xl lg:text-8xl text-white font-light tracking-tight leading-tight">
                    Sinking slowly... <br/>
<span class="text-white/60 italic">deeper...</span>
</h1>
</div>
<!-- Kinetic Typography Element -->
<div class="flex flex-col items-center space-y-12">
<div class="w-32 h-32 md:w-48 md:h-48 rounded-full border border-white/10 flex items-center justify-center p-4">
<div class="w-full h-full rounded-full bg-white/5 backdrop-blur-md flex items-center justify-center relative">
<div class="absolute inset-0 rounded-full border border-white/20 scale-75"></div>
<span class="material-symbols-outlined text-white/40 text-4xl" data-icon="air">air</span>
</div>
</div>
<h2 class="font-notoSerif text-3xl md:text-5xl text-white/80 font-light tracking-wide max-w-2xl">
                    zero pressure...
                </h2>
</div>
</div>
<!-- Floating UI Elements -->
<div class="fixed bottom-12 left-1/2 -translate-x-1/2 flex flex-col items-center gap-8">
<!-- Progress Indicator -->
<div class="flex items-center gap-3">
<div class="w-1.5 h-1.5 rounded-full bg-white"></div>
<div class="w-1.5 h-1.5 rounded-full bg-white/20"></div>
<div class="w-1.5 h-1.5 rounded-full bg-white/20"></div>
<div class="w-1.5 h-1.5 rounded-full bg-white/20"></div>
</div>
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
<img alt="Ocean depth" class="w-full h-full object-cover" data-alt="abstract deep teal water background with faint light rays piercing through from the surface into the abyss" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAN0RhFGgAunVIrwpfTFfZ3KZ2uCyusD__ZNGQ8rlTLequbVgmDQlUfa-NDGHzTHdYNYEVy4xOngRGG9T69yExD0-6LMM95OdYTaamnqq9nJd67zDUuIKUZGhDy4tB-9TgOTNGamRRFHDk6WM3BYv8D_knr_oz-F7hv3MRuDrFvRLdZFMJHLHH2xw_u9pOqSTyKtZ9J9fPREe2leETbW44UWBrHxBMOvrIdAHdTI9p_sVMOCoSPhemr-A_6hK0LCXkd1qjI-jz1xE"/>
</div>
<!-- Tonal Overlays for Depth -->
<div class="fixed inset-0 bg-gradient-to-t from-[#02121a] via-transparent to-transparent pointer-events-none z-0"></div>
</body></html>
