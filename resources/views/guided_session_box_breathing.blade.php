<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>The Living Atmosphere - Box Breathing</title>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .breathing-square-container {
            position: relative;
            width: 280px;
            height: 280px;
        }
        .breathing-square-bg {
            position: absolute;
            inset: 0;
            border: 2px solid rgba(89, 105, 75, 0.15);
            border-radius: 1rem;
        }
        /* Custom animation for the breathing dot visual without JS */
        @keyframes move-dot {
            0% { top: 0; left: 0; }
            25% { top: 0; left: 100%; }
            50% { top: 100%; left: 100%; }
            75% { top: 100%; left: 0%; }
            100% { top: 0; left: 0%; }
        }
        .breathing-dot {
            position: absolute;
            width: 12px;
            height: 12px;
            background-color: #59694b;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            animation: move-dot 16s linear infinite;
        }
        .glass-panel {
            backdrop-filter: blur(24px);
            background: rgba(255, 251, 255, 0.7);
        }
        .no-line-boundary {
            box-shadow: 0 40px 60px -20px rgba(57, 56, 50, 0.05);
        }
    </style>
</head>
<body class="bg-surface font-body text-on-surface selection:bg-primary-container">
<!-- TopNavBar (Shared Component) -->
<nav class="fixed top-0 w-full z-50 flex justify-between items-center px-8 py-6 bg-transparent">
<div class="font-notoSerif italic text-sage-800 dark:text-sage-200 text-xl font-headline tracking-tight">The Living Atmosphere</div>
<div class="flex items-center gap-6">
<a href="{{ route('dashboard') }}" class="material-symbols-outlined text-sage-700 dark:text-sage-400 text-2xl hover:opacity-80 transition-opacity active:scale-95">close</a>
</div>
</nav>
<!-- Main Content Canvas -->
<main class="min-h-screen flex flex-col items-center justify-center px-6 relative overflow-hidden">
<!-- Background Artistic Element -->
<div class="absolute -top-24 -right-24 w-96 h-96 bg-primary-container/20 rounded-full blur-[100px]"></div>
<div class="absolute -bottom-24 -left-24 w-96 h-96 bg-secondary-container/20 rounded-full blur-[100px]"></div>
<!-- Session Progress / Subtle Header -->
<div class="mb-12 text-center">
<span class="font-label text-sm uppercase tracking-widest text-secondary opacity-70">Focus Session</span>
<h1 class="font-display text-4xl md:text-5xl text-on-surface mt-2">Box Breathing</h1>
</div>
<!-- The Breathing Visualizer -->
<div class="relative flex flex-col items-center">
<!-- Asymmetrical Text Placement -->
<div class="absolute -left-32 top-1/2 -translate-y-1/2 hidden lg:block w-24 text-right">
<p class="font-display text-lg italic text-primary">Inhale</p>
<p class="font-body text-xs text-outline">4 seconds</p>
</div>
<div class="absolute -right-32 top-1/2 -translate-y-1/2 hidden lg:block w-24 text-left">
<p class="font-display text-lg italic text-primary">Exhale</p>
<p class="font-body text-xs text-outline">4 seconds</p>
</div>
<!-- Central Visual -->
<div class="breathing-square-container surface-container-low rounded-lg p-1">
<div class="breathing-square-bg"></div>
<div class="breathing-dot"></div>
<!-- Inner Content: Dynamic Instructions -->
<div class="w-full h-full flex flex-center justify-center items-center flex-col gap-2">
<!-- This text would normally change via JS, styled for "Breathe In" state -->
<span class="font-display text-3xl text-on-surface">Breathe In</span>
<span class="font-body text-primary text-sm tracking-[0.2em] font-semibold">4 . 3 . 2 . 1</span>
</div>
</div>
<div class="mt-16 max-w-sm text-center">
<p class="font-body text-on-surface-variant leading-relaxed">
                    Allow your lungs to fill naturally as the dot travels across the top. Calm the mind, center the body.
                </p>
</div>
</div>
<!-- Transactional Info Section (Asymmetric Bento Style) -->
<section class="mt-24 grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-4xl px-4">
<div class="bg-surface-container-low rounded-lg p-8 no-line-boundary flex flex-col gap-4">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">spa</span>
<h3 class="font-headline text-xl">The Benefits</h3>
</div>
<p class="text-on-surface-variant font-body">Box breathing is a powerful technique used by athletes and high-performers to regulate the autonomic nervous system and lower cortisol levels.</p>
</div>
<div class="bg-surface-container-highest/40 backdrop-blur-sm rounded-lg p-8 no-line-boundary flex flex-col justify-between">
<div>
<div class="flex items-center gap-3 mb-4">
<span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">timer</span>
<h3 class="font-headline text-xl">Session Stats</h3>
</div>
<div class="flex gap-8">
<div>
<p class="font-label text-xs uppercase text-outline">Time Elapsed</p>
<p class="font-display text-2xl">04:12</p>
</div>
<div>
<p class="font-label text-xs uppercase text-outline">Cycles Done</p>
<p class="font-display text-2xl">16</p>
</div>
</div>
</div>
<div class="mt-6">
<div class="w-full bg-outline-variant/20 h-1 rounded-full overflow-hidden">
<div class="bg-primary h-full w-2/3"></div>
</div>
<p class="text-[10px] uppercase tracking-tighter mt-2 text-outline">Daily Goal: 10 Minutes</p>
</div>
</div>
</section>
<!-- Aesthetic Imagery Insert -->
<div class="w-full max-w-4xl mt-12 px-4">
<div class="h-64 rounded-xl overflow-hidden relative group">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="soft focused view of sunlight filtering through green leaves in a quiet forest with a tranquil atmosphere" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAI7LfFyjuF3ZRzCBCd08pwz3Nc0DtzyjxOcg_d-rInvoz-dB56CohvCJbX2bgZcehnW6KYKrhc-YHmnPD9DwUEg-Yx4tV5WhRSwTLxzP9nPLS7NnT5UtkotKRaXbcjejPq6neU_3GTzChvm-vtL67f-XuROPa2wyb40fhKFMW0qcE8FHmjWMEeHFB23jtmI9ZInb7mQGV2dykB_F5Is_D5uCFYvtTrM_s4Zya9pZFQvBLheWx_kOKZdFEuYZV2jijT9oLdUPtfnSM"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent"></div>
<div class="absolute bottom-6 left-8">
<p class="text-on-primary font-display text-2xl italic">Find your inner stillness.</p>
</div>
</div>
</div>
</main>
<!-- Floating End Session Button (Task Specific) -->
<div class="fixed bottom-10 left-1/2 -translate-x-1/2 z-50">
<a href="{{ route('dashboard') }}" class="bg-primary text-on-primary px-10 py-4 rounded-full font-label font-semibold shadow-2xl flex items-center gap-3 hover:opacity-90 transition-all active:scale-95 group">
<span class="material-symbols-outlined text-sm group-hover:rotate-90 transition-transform">close</span>
            End Session
        </a>
</div>
<!-- SideNavBar (Suppressed for focused session flow - Hidden by logic) -->
<!-- The "Destination Rule" suggests suppressing the Nav shell for focused journeys like breathing sessions. -->
<!-- Spacer for Footer clarity -->
<footer class="py-24 text-center">
<p class="font-label text-xs text-outline opacity-50">Part of your daily ritual with The Living Atmosphere</p>
</footer>
</body></html>
