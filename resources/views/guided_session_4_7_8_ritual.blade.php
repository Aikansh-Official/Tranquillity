<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Manrope:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .breathe-circle {
            transition: all 4s ease-in-out;
        }
        .bg-soft-gradient {
            background: linear-gradient(135deg, #fdf9f2 0%, #ece8df 100%);
        }
        .glass-panel {
            backdrop-filter: blur(40px);
            background: rgba(255, 251, 255, 0.7);
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body selection:bg-primary-container selection:text-on-primary-container">
<!-- TopNavBar (Shared Component) -->
<header class="fixed top-0 w-full z-50 flex justify-between items-center px-8 py-6 bg-transparent">
<div class="font-headline italic text-sage-800 dark:text-sage-200 text-lg">The Living Atmosphere</div>
<div class="flex items-center gap-6">
<button class="text-sage-700 dark:text-sage-400 font-headline text-lg hover:opacity-80 transition-opacity active:scale-95">
<span class="material-symbols-outlined">close</span>
</button>
</div>
</header>
<main class="relative min-h-screen w-full flex flex-col items-center justify-center bg-soft-gradient overflow-hidden">
<!-- Background Atmosphere -->
<div class="absolute inset-0 z-0 pointer-events-none">
<div class="absolute top-[-10%] right-[-5%] w-[600px] h-[600px] rounded-full bg-primary-container opacity-20 blur-[120px]"></div>
<div class="absolute bottom-[-10%] left-[-5%] w-[500px] h-[500px] rounded-full bg-secondary-container opacity-20 blur-[100px]"></div>
</div>
<!-- Central Ritual Canvas -->
<div class="relative z-10 w-full max-w-4xl px-6 flex flex-col items-center">
<div class="text-center mb-16">
<h1 class="font-display text-4xl md:text-5xl lg:text-6xl text-on-surface mb-4">4-7-8 Ritual</h1>
<p class="font-body text-secondary text-lg tracking-wide opacity-80 uppercase font-light">Grounding Breath</p>
</div>
<!-- Breathing Sphere -->
<div class="relative flex items-center justify-center w-80 h-80 md:w-96 md:h-96">
<!-- Inner Pulse -->
<div class="absolute w-full h-full rounded-full border-2 border-primary/10"></div>
<div class="absolute w-4/5 h-4/5 rounded-full border border-primary/20"></div>
<!-- Main Breathing Circle -->
<div class="w-64 h-64 md:w-80 md:h-80 bg-primary/10 rounded-full flex items-center justify-center relative overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-tr from-primary to-primary-container opacity-20"></div>
<!-- Dynamic Text State -->
<div class="text-center z-10">
<span class="block font-display text-2xl md:text-3xl text-primary-dim leading-tight">Inhale...</span>
<span class="block font-body text-sm text-primary tracking-widest mt-2">4 SECONDS</span>
</div>
</div>
<!-- Floating Instruction Chips -->
<div class="absolute top-0 right-0 glass-panel px-6 py-3 rounded-full shadow-sm">
<span class="font-body text-sm font-medium text-primary">Hold (7s)</span>
</div>
<div class="absolute bottom-12 left-[-2rem] glass-panel px-6 py-3 rounded-full shadow-sm">
<span class="font-body text-sm font-medium text-primary">Slowly release (8s)</span>
</div>
</div>
<!-- Progress & Metadata -->
<div class="mt-20 flex flex-col items-center gap-8 w-full max-w-xs">
<div class="w-full h-1 bg-surface-container-highest rounded-full overflow-hidden">
<div class="w-1/3 h-full bg-primary rounded-full"></div>
</div>
<div class="flex justify-between w-full font-body text-sm text-secondary">
<span>Cycle 2 of 4</span>
<span>1:42 remaining</span>
</div>
</div>
</div>
<!-- Transactional Footer (Floating End Session) -->
<div class="fixed bottom-12 z-50">
<button class="group flex items-center gap-3 bg-surface-container-lowest border border-outline-variant/15 text-primary px-8 py-4 rounded-full shadow-xl hover:bg-surface transition-all active:scale-95">
<span class="material-symbols-outlined text-[20px]">stop_circle</span>
<span class="font-body font-semibold tracking-wide">End Session</span>
</button>
</div>
</main>
<!-- Side Content / Contextual Information (Bento Style) -->
<section class="max-w-7xl mx-auto px-8 pb-32 grid grid-cols-1 md:grid-cols-12 gap-6">
<div class="md:col-span-8 bg-surface-container-low p-10 rounded-xl flex flex-col justify-between">
<div>
<h3 class="font-display text-2xl text-on-surface mb-6">The Benefit of 4-7-8</h3>
<p class="font-body text-on-surface-variant leading-relaxed max-w-xl">
                    This technique, also known as the "Relaxing Breath," acts as a natural tranquilizer for the nervous system. By extending the exhale, you stimulate the vagus nerve, signaling your body to shift from "fight or flight" into a state of deep restoration.
                </p>
</div>
<div class="mt-12 flex gap-4">
<div class="flex items-center gap-2 text-primary">
<span class="material-symbols-outlined" data-weight="fill">spa</span>
<span class="text-sm font-medium">Reduced Anxiety</span>
</div>
<div class="flex items-center gap-2 text-primary">
<span class="material-symbols-outlined" data-weight="fill">bedtime</span>
<span class="text-sm font-medium">Better Sleep</span>
</div>
</div>
</div>
<div class="md:col-span-4 bg-primary text-on-primary p-10 rounded-xl relative overflow-hidden">
<img alt="calm forest morning" class="absolute inset-0 w-full h-full object-cover opacity-20 mix-blend-overlay" data-alt="misty forest at dawn with soft sunlight filtering through ancient cedar trees creating long shadows and a serene atmosphere" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIb0K-BFtbTP1i_pPlVFDDXO9ViVXzqvRGL7rjFwnpt8QuUbsvh-xG6yxE_edkt4aZ_uuEk2zZ03S5sbEjSVR1pn_KZMtmeonj7YH2kxg_UdBsM37YD0hongavWmDwLoPP4sZ1tJyiF47ql8ANXBvlOSvox2eNKoOnX1QTqxNflv23BIBSJ6JZ4qSXxj7F1FWEtv-5TaHh5W6HGwlhxC6EGB4OBvqgyrkagcWoUWFFpjv8D2rfcRFj3HoP5publzCxY9bkFydRIMo"/>
<div class="relative z-10 h-full flex flex-col justify-between">
<h3 class="font-display text-xl leading-snug">Deepen your presence with mindful stillness.</h3>
<button class="mt-8 self-start bg-on-primary text-primary px-6 py-3 rounded-full font-body text-sm font-bold hover:bg-primary-container transition-colors">
                    Explore Journal
                </button>
</div>
</div>
</section>
<!-- Floating Audio Control (Glassmorphism) -->
<div class="fixed bottom-8 left-8 z-50 hidden lg:flex items-center gap-4 glass-panel p-4 rounded-2xl shadow-lg border border-white/20">
<div class="w-12 h-12 rounded-lg bg-primary-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined">waves</span>
</div>
<div>
<p class="text-xs font-body font-bold text-primary uppercase tracking-tighter">Ambient Sound</p>
<p class="text-sm font-display text-on-surface">Summer Rain in Kyoto</p>
</div>
<div class="ml-4 flex gap-2">
<button class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-black/5">
<span class="material-symbols-outlined text-[18px]">volume_up</span>
</button>
</div>
</div>
</body></html>
