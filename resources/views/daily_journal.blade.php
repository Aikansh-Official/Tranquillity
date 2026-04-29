<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Quietude - Daily Journal</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "tertiary": "#716156",
                      "on-error-container": "#6e1400",
                      "inverse-surface": "#0f0e0c",
                      "on-secondary-fixed-variant": "#5e5968",
                      "on-secondary-fixed": "#413d4b",
                      "tertiary-container": "#fae4d6",
                      "tertiary-dim": "#64554a",
                      "on-primary-fixed-variant": "#506043",
                      "surface-tint": "#59694b",
                      "inverse-primary": "#eafdd6",
                      "secondary-dim": "#5a5665",
                      "primary-dim": "#4d5d40",
                      "on-tertiary": "#ffffff",
                      "surface-container": "#f7f3ec",
                      "primary-fixed-dim": "#c8dbb6",
                      "secondary-fixed": "#e7dff2",
                      "on-surface-variant": "#66645e",
                      "on-error": "#ffffff",
                      "on-tertiary-fixed-variant": "#6b5c51",
                      "on-background": "#393832",
                      "surface-container-low": "#fdf9f2",
                      "on-secondary-container": "#544f5e",
                      "surface-variant": "#ece8df",
                      "surface-bright": "#fffbff",
                      "error": "#ae4025",
                      "on-tertiary-container": "#615247",
                      "surface-container-highest": "#ece8df",
                      "primary": "#59694b",
                      "on-surface": "#393832",
                      "tertiary-fixed-dim": "#ebd6c8",
                      "surface-dim": "#e6e2da",
                      "on-primary": "#ffffff",
                      "error-container": "#fd795a",
                      "secondary": "#676271",
                      "background": "#fffbff",
                      "on-primary-container": "#46563a",
                      "surface-container-lowest": "#ffffff",
                      "primary-fixed": "#d6e9c3",
                      "on-primary-fixed": "#344429",
                      "on-tertiary-fixed": "#4e4036",
                      "on-secondary": "#ffffff",
                      "tertiary-fixed": "#fae4d6",
                      "secondary-container": "#e7dff2",
                      "outline": "#838079",
                      "outline-variant": "#bcb9b1",
                      "surface-container-high": "#f1ede6",
                      "secondary-fixed-dim": "#d8d1e3",
                      "primary-container": "#d6e9c3",
                      "error-dim": "#791903",
                      "surface": "#fffbff",
                      "inverse-on-surface": "#9f9c98"
              },
              "borderRadius": {
                      "DEFAULT": "1rem",
                      "lg": "2rem",
                      "xl": "3rem",
                      "full": "9999px"
              },
              "fontFamily": {
                      "headline": ["Noto Serif"],
                      "body": ["Manrope"],
                      "label": ["Manrope"]
              }
            },
          },
        }
    </script>
    <style>
        body { font-family: 'Manrope', sans-serif; background-color: #fffbff; color: #393832; }
        .font-serif { font-family: 'Noto Serif', serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24; }
        .slider-custom { -webkit-appearance: none; width: 100%; height: 6px; background: #f1ede6; border-radius: 999px; outline: none; transition: background 0.3s; }
        .slider-custom::-webkit-slider-thumb { -webkit-appearance: none; width: 24px; height: 24px; background: #59694b; border-radius: 50%; cursor: pointer; transition: transform 0.2s; }
        .slider-custom::-webkit-slider-thumb:hover { transform: scale(1.1); }
        .glass-nav { backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); }
    </style>
</head>
<body class="bg-background text-on-background selection:bg-primary-fixed-dim">
    <header class="fixed top-0 left-0 right-0 z-50 bg-stone-50/80 backdrop-blur-lg px-8 py-4 w-full flex justify-between items-center shadow-none">
        <div class="flex items-center gap-4">
            <span class="text-2xl font-serif tracking-tight text-emerald-900">Quietude</span>
        </div>
        <div class="flex items-center gap-6">
            <button class="text-stone-500 hover:opacity-80 transition-opacity flex items-center gap-2">
                <span class="material-symbols-outlined">calendar_month</span>
            </button>
            <a href="{{ route('profile.edit') }}" class="text-stone-500 hover:opacity-80 transition-opacity">
                <span class="material-symbols-outlined">settings</span>
            </a>
            <div class="w-10 h-10 rounded-full bg-surface-container overflow-hidden">
                <img alt="User profile" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVRs8vBV9dKNnA_2IfzwESzS7u6YHp38K2LhAEV1uZuE4NxGWLLapas8HPB2zmB7BdeiXwgCZc1KtoObsL0yLesKjFdpckbqfKRM3kLp2HA2C5lDJQ7vvcH_B8joWOcK7mj7z3A5gIy7U8L3Ry2mGZGEv84kL2m6AlwYwTZGHvsXVF-rPaoOeC7Xxo21fx8eZ1cgB9vEkokIHtjdTBTEBD3Yn83re7_Gtm2S30oJIdpZ385DopdPk73y12KrTAI-en730IbWYhhKA"/>
            </div>
        </div>
    </header>
    <main class="pt-24 pb-32 px-6 max-w-4xl mx-auto min-h-screen">
        <section class="mb-12 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div class="space-y-1">
                <p class="text-secondary-dim font-medium uppercase tracking-[0.2em] text-[10px]">Your Sanctuary Space</p>
                <h1 class="text-5xl font-serif text-primary leading-tight">Daily Journal</h1>
            </div>
            <div class="flex items-center gap-4 bg-surface-container-low px-6 py-3 rounded-full shadow-sm">
                <button class="hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <div class="flex items-center gap-2 px-2">
                    <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">calendar_today</span>
                    <span class="font-medium text-on-surface">{{ now()->format('F j, Y') }}</span>
                </div>
                <button class="hover:text-primary transition-colors opacity-30 cursor-not-allowed">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
        </section>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
            <section class="md:col-span-7 bg-surface-container-lowest rounded-xl p-8 shadow-[0_20px_50px_rgba(57,56,50,0.04)]">
                <div class="flex items-center gap-3 mb-8">
                    <span class="material-symbols-outlined text-tertiary">psychology_alt</span>
                    <h2 class="text-2xl font-serif text-on-surface">Emotional Landscape</h2>
                </div>
                <div class="space-y-10">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <label class="text-sm font-semibold tracking-wide text-on-surface-variant uppercase">Anger</label>
                            <span class="text-xs text-tertiary italic">Moderate</span>
                        </div>
                        <input class="slider-custom" max="5" min="1" type="range" value="2"/>
                        <div class="flex justify-between text-[10px] text-outline font-medium uppercase tracking-widest">
                            <span>Minimal</span>
                            <span>Intense</span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <label class="text-sm font-semibold tracking-wide text-on-surface-variant uppercase">Happiness</label>
                            <span class="text-xs text-tertiary italic">Radiant</span>
                        </div>
                        <input class="slider-custom" max="5" min="1" type="range" value="4"/>
                        <div class="flex justify-between text-[10px] text-outline font-medium uppercase tracking-widest">
                            <span>Minimal</span>
                            <span>Intense</span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <label class="text-sm font-semibold tracking-wide text-on-surface-variant uppercase">Sadness</label>
                            <span class="text-xs text-tertiary italic">Faint</span>
                        </div>
                        <input class="slider-custom" max="5" min="1" type="range" value="1"/>
                        <div class="flex justify-between text-[10px] text-outline font-medium uppercase tracking-widest">
                            <span>Minimal</span>
                            <span>Intense</span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <label class="text-sm font-semibold tracking-wide text-on-surface-variant uppercase">Frustration</label>
                            <span class="text-xs text-tertiary italic">Fleeting</span>
                        </div>
                        <input class="slider-custom" max="5" min="1" type="range" value="2"/>
                        <div class="flex justify-between text-[10px] text-outline font-medium uppercase tracking-widest">
                            <span>Minimal</span>
                            <span>Intense</span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <label class="text-sm font-semibold tracking-wide text-on-surface-variant uppercase">Procrastination</label>
                            <span class="text-xs text-tertiary italic">High</span>
                        </div>
                        <input class="slider-custom" max="5" min="1" type="range" value="5"/>
                        <div class="flex justify-between text-[10px] text-outline font-medium uppercase tracking-widest">
                            <span>Minimal</span>
                            <span>Intense</span>
                        </div>
                    </div>
                    <div class="pt-6 border-t border-surface-variant/30 space-y-4">
                        <div class="flex justify-between items-center">
                            <label class="text-base font-bold tracking-tight text-primary uppercase">Overall Day</label>
                            <span class="px-3 py-1 bg-primary-container text-on-primary-container rounded-full text-xs font-bold">4.0 / 5.0</span>
                        </div>
                        <input class="slider-custom h-2" max="5" min="1" type="range" value="4"/>
                    </div>
                </div>
            </section>
            <div class="md:col-span-5 space-y-8">
                <div class="bg-surface-container-low rounded-xl p-8 overflow-hidden relative">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="material-symbols-outlined text-primary">analytics</span>
                        <h2 class="text-xl font-serif text-on-surface">Reflection Map</h2>
                    </div>
                    <div class="h-48 w-full relative">
                        <svg class="w-full h-full drop-shadow-sm" viewbox="0 0 400 200">
                            <defs>
                                <lineargradient id="lineGrad" x1="0%" x2="100%" y1="0%" y2="0%">
                                    <stop offset="0%" style="stop-color:#59694b;stop-opacity:1"></stop>
                                    <stop offset="50%" style="stop-color:#d6e9c3;stop-opacity:1"></stop>
                                    <stop offset="100%" style="stop-color:#676271;stop-opacity:1"></stop>
                                </lineargradient>
                            </defs>
                            <path d="M0,150 C50,140 80,40 130,60 C180,80 220,160 270,140 C320,120 350,20 400,40" fill="none" stroke="url(#lineGrad)" stroke-linecap="round" stroke-width="4"></path>
                            <circle cx="130" cy="60" fill="#59694b" r="4"></circle>
                            <circle cx="270" cy="140" fill="#59694b" r="4"></circle>
                        </svg>
                        <div class="absolute bottom-0 left-0 right-0 flex justify-between px-2 text-[9px] uppercase tracking-tighter text-outline-variant font-bold">
                            <span>Morning</span>
                            <span>Noon</span>
                            <span>Evening</span>
                            <span>Night</span>
                        </div>
                    </div>
                    <p class="mt-4 text-sm text-secondary italic leading-relaxed">
                        Your energy peaked during the midday hours, reflecting a strong sense of accomplishment.
                    </p>
                </div>
                <div class="bg-surface-container-highest rounded-xl p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="material-symbols-outlined text-tertiary">edit_square</span>
                        <h2 class="text-xl font-serif text-on-surface">Additional Notes</h2>
                    </div>
                    <textarea class="w-full bg-transparent border-none focus:ring-0 text-on-surface-variant font-body leading-relaxed resize-none h-40 placeholder:text-outline-variant" placeholder="What's lingering on your mind?"></textarea>
                </div>
            </div>
        </div>
        <div class="mt-12 flex justify-center">
            <button class="bg-primary text-on-primary px-12 py-4 rounded-full font-semibold tracking-widest uppercase text-sm shadow-xl hover:opacity-90 transition-all active:scale-95 duration-300">
                Save Reflection
            </button>
        </div>
    </main>
    <nav class="fixed bottom-0 left-0 right-0 z-50 flex justify-around items-center max-w-lg mx-auto h-20 bg-stone-50/70 dark:bg-stone-900/70 backdrop-blur-2xl rounded-full mx-6 mb-8 shadow-[0_20px_50px_rgba(57,56,50,0.06)]">
        <a class="flex flex-col items-center justify-center text-stone-500 px-6 py-2 hover:text-emerald-700 transition-opacity" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined">spa</span>
            <span class="font-sans text-[11px] uppercase tracking-widest font-medium mt-1">Sanctuary</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-emerald-100/50 text-emerald-900 rounded-full px-6 py-2 shadow-inner active:scale-90 duration-500" href="{{ route('journal') }}">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">edit_note</span>
            <span class="font-sans text-[11px] uppercase tracking-widest font-medium mt-1">Journal</span>
        </a>
        <a class="flex flex-col items-center justify-center text-stone-500 px-6 py-2 hover:text-emerald-700 transition-opacity" href="{{ route('progress') }}">
            <span class="material-symbols-outlined">monitoring</span>
            <span class="font-sans text-[11px] uppercase tracking-widest font-medium mt-1">Insights</span>
        </a>
        <a class="flex flex-col items-center justify-center text-stone-500 px-6 py-2 hover:text-emerald-700 transition-opacity" href="{{ route('profile.edit') }}">
            <span class="material-symbols-outlined">person</span>
            <span class="font-sans text-[11px] uppercase tracking-widest font-medium mt-1">Profile</span>
        </a>
    </nav>
</body>
</html>
