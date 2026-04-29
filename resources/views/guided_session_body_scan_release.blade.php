<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Body Scan Release | The Living Atmosphere</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Manrope:wght@300;400;600&amp;display=swap" rel="stylesheet"/>
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
          }
        }
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .body-outline-svg {
            stroke: #bcb9b1; /* outline-variant */
            stroke-width: 1;
            fill: transparent;
        }
        .scanning-line {
            filter: blur(8px);
            background: linear-gradient(90deg, transparent, #59694b, transparent);
        }
        .canvas-bg {
            background: radial-gradient(circle at center, #fffbff 0%, #f7f3ec 100%);
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body selection:bg-primary-container selection:text-on-primary-container">
<!-- Top Navigation (Shared Component Integration) -->
<nav class="fixed top-0 w-full z-50 flex justify-between items-center px-8 py-6 bg-transparent">
<div class="font-notoSerif italic text-sage-800 dark:text-sage-200 text-xl tracking-tight">
            The Living Atmosphere
        </div>
<div class="flex items-center gap-6">
<button class="material-symbols-outlined text-sage-700 dark:text-sage-400 hover:opacity-80 transition-opacity active:scale-95">
                close
            </button>
</div>
</nav>
<!-- Main Content Canvas -->
<main class="relative min-h-screen canvas-bg flex flex-col items-center justify-center px-6 pt-24 pb-12 overflow-hidden">
<!-- Instructional Header: Intentional Asymmetry -->
<header class="w-full max-w-4xl mb-12 text-center">
<h1 class="font-display text-4xl md:text-5xl text-on-surface mb-4 leading-tight">
                Body Scan Release
            </h1>
<p class="font-body text-secondary text-lg max-w-md mx-auto opacity-70">
                Follow the light. Breathe into the areas of tension as they are illuminated.
            </p>
</header>
<!-- The Immersive Body Visualization Centerpiece -->
<div class="relative w-full max-w-md aspect-[3/5] flex items-center justify-center">
<!-- Abstract Human Outline -->
<svg class="w-full h-full body-outline-svg" viewbox="0 0 200 500" xmlns="http://www.w3.org/2000/svg">
<!-- Head -->
<circle cx="100" cy="50" r="30"></circle>
<!-- Torso & Limbs (Stylized) -->
<path d="M100 80 C130 80 150 120 150 180 L140 450 M100 80 C70 80 50 120 50 180 L60 450 M70 120 L30 250 M130 120 L170 250" stroke-linecap="round"></path>
<!-- Feet Markers -->
<ellipse cx="60" cy="455" rx="12" ry="5"></ellipse>
<ellipse cx="140" cy="455" rx="12" ry="5"></ellipse>
</svg>
<!-- Glowing Scanning Line (Positioned over shins/calves based on user prompt 'release your calves') -->
<div class="absolute w-full h-12 bottom-[15%] left-0 right-0 z-10">
<div class="scanning-line w-full h-0.5 shadow-[0_0_15px_rgba(89,105,75,0.8)]"></div>
</div>
<!-- Dynamic Instruction Overlay -->
<div class="absolute inset-0 flex flex-col items-center justify-end pb-32 pointer-events-none">
<div class="bg-surface-container-lowest/40 backdrop-blur-md px-8 py-4 rounded-xl border border-outline-variant/10">
<span class="font-display italic text-2xl text-primary animate-pulse">
                        release your calves...
                    </span>
</div>
</div>
</div>
<!-- Progress Indicator & Controls -->
<div class="mt-16 w-full max-w-sm flex flex-col items-center gap-12">
<!-- Minimalist Progress Bar -->
<div class="w-full h-px bg-outline-variant/20 relative">
<div class="absolute left-0 top-0 h-full bg-primary w-1/4"></div>
</div>
<!-- Focus Stats - Bento Style Row -->
<div class="grid grid-cols-2 gap-4 w-full">
<div class="bg-surface-container-low p-6 rounded-lg text-center">
<span class="block font-label text-xs uppercase tracking-widest text-outline mb-1">Time Elapsed</span>
<span class="font-display text-xl text-on-surface">04:12</span>
</div>
<div class="bg-surface-container-low p-6 rounded-lg text-center">
<span class="block font-label text-xs uppercase tracking-widest text-outline mb-1">Heart Rate</span>
<span class="font-display text-xl text-on-surface">62 <small class="text-sm">BPM</small></span>
</div>
</div>
<!-- The 'End Session' Button -->
<button class="group flex flex-col items-center gap-4 hover:opacity-80 transition-all duration-500">
<div class="w-16 h-16 rounded-full border border-outline-variant/30 flex items-center justify-center group-active:scale-95 transition-transform">
<span class="material-symbols-outlined text-primary text-3xl">stop_circle</span>
</div>
<span class="font-label text-sm tracking-[0.2em] uppercase text-outline">End Session</span>
</button>
</div>
</main>
<!-- Side Decoration (Editorial Spacing Element) -->
<aside class="fixed right-12 top-1/2 -translate-y-1/2 hidden xl:block pointer-events-none">
<div class="flex flex-col gap-24 items-center">
<span class="rotate-90 origin-center whitespace-nowrap font-label text-[10px] tracking-[0.5em] uppercase text-outline/40">
                Body Awareness • Presence • Release
            </span>
<div class="w-px h-32 bg-gradient-to-b from-transparent via-outline-variant/20 to-transparent"></div>
</div>
</aside>
<!-- Background Atmospheric Elements -->
<div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
<div class="absolute top-[-10%] right-[-5%] w-[40vw] h-[40vw] rounded-full bg-primary-container/10 blur-[120px]"></div>
<div class="absolute bottom-[-10%] left-[-5%] w-[30vw] h-[30vw] rounded-full bg-secondary-container/20 blur-[100px]"></div>
</div>
</body></html>
