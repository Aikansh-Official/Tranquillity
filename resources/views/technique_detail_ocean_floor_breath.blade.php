<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>The Ocean Floor Breath | Sanctuary</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&amp;family=Manrope:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "on-error-container": "#6e1400",
                      "on-surface-variant": "#66645e",
                      "surface-container-high": "#f1ede6",
                      "surface-variant": "#ece8df",
                      "on-tertiary-fixed-variant": "#6b5c51",
                      "inverse-surface": "#0f0e0c",
                      "error-container": "#fd795a",
                      "surface-container-highest": "#ece8df",
                      "secondary-dim": "#5a5665",
                      "primary-dim": "#4d5d40",
                      "on-tertiary-container": "#615247",
                      "tertiary-fixed": "#fae4d6",
                      "surface-bright": "#fffbff",
                      "on-primary": "#ffffff",
                      "primary-container": "#d6e9c3",
                      "on-background": "#393832",
                      "outline-variant": "#bcb9b1",
                      "surface-container": "#f7f3ec",
                      "surface-dim": "#e6e2da",
                      "on-error": "#ffffff",
                      "secondary-fixed": "#e7dff2",
                      "secondary-fixed-dim": "#d8d1e3",
                      "on-primary-container": "#46563a",
                      "surface": "#fffbff",
                      "primary": "#59694b",
                      "surface-container-low": "#fdf9f2",
                      "on-surface": "#393832",
                      "secondary-container": "#e7dff2",
                      "on-secondary-fixed-variant": "#5e5968",
                      "error-dim": "#791903",
                      "secondary": "#676271",
                      "tertiary": "#716156",
                      "surface-container-lowest": "#ffffff",
                      "on-tertiary-fixed": "#4e4036",
                      "on-secondary-fixed": "#413d4b",
                      "error": "#ae4025",
                      "inverse-primary": "#eafdd6",
                      "tertiary-fixed-dim": "#ebd6c8",
                      "primary-fixed": "#d6e9c3",
                      "primary-fixed-dim": "#c8dbb6",
                      "on-tertiary": "#ffffff",
                      "inverse-on-surface": "#9f9c98",
                      "on-secondary-container": "#544f5e",
                      "outline": "#838079",
                      "on-primary-fixed": "#344429",
                      "surface-tint": "#59694b",
                      "on-secondary": "#ffffff",
                      "tertiary-dim": "#64554a",
                      "tertiary-container": "#fae4d6",
                      "background": "#fffbff",
                      "on-primary-fixed-variant": "#506043"
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
        .editorial-shadow {
            box-shadow: 0 40px 60px -15px rgba(57, 56, 50, 0.05);
        }
        body {
            background-color: #fffbff;
            color: #393832;
        }
    </style>
</head>
<body class="font-body selection:bg-primary-container selection:text-on-primary-container">
<!-- TopAppBar -->
<header class="bg-stone-50/80 dark:bg-stone-950/80 backdrop-blur-xl text-sage-700 dark:text-sage-400 font-serif text-lg tracking-tight docked full-width top-0 sticky no-border shadow-none bg-stone-100/50 dark:bg-stone-900/50 z-50">
<div class="flex justify-between items-center w-full px-8 py-4 max-w-screen-2xl mx-auto">
<div class="font-serif italic text-2xl text-sage-800 dark:text-sage-200">Sanctuary</div>
<nav class="hidden md:flex items-center gap-10">
                <a class="text-stone-500 dark:text-stone-400 hover:text-sage-600 hover:bg-sage-50/30 dark:hover:bg-sage-900/30 transition-colors ease-in-out duration-300" href="{{ route('dashboard') }}">Dashboard</a>
                <a class="text-sage-800 dark:text-sage-200 font-semibold border-b-2 border-sage-600 hover:bg-sage-50/30 dark:hover:bg-sage-900/30 transition-colors ease-in-out duration-300" href="{{ route('library') }}">Library</a>
                <a class="text-stone-500 dark:text-stone-400 hover:text-sage-600 hover:bg-sage-50/30 dark:hover:bg-sage-900/30 transition-colors ease-in-out duration-300" href="{{ route('progress') }}">Progress</a>
</nav>
<div class="flex items-center gap-4">
<button class="p-2 rounded-full hover:bg-sage-50/30 dark:hover:bg-sage-900/30 transition-colors duration-300">
<span class="material-symbols-outlined text-stone-500">settings</span>
</button>
</div>
</div>
</header>
<main class="relative overflow-hidden">
<!-- Hero Section: Editorial & Asymmetric -->
<section class="max-w-screen-2xl mx-auto px-8 pt-16 md:pt-24 pb-20 grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
<div class="md:col-span-6 lg:col-span-5 order-2 md:order-1">
<span class="font-label text-xs uppercase tracking-[0.2em] text-secondary font-bold mb-6 block">Mindfulness Series • 04</span>
<h1 class="font-display text-5xl md:text-7xl lg:text-8xl leading-[1.1] text-on-surface mb-8">The Ocean <br/><span class="italic font-normal">Floor Breath</span></h1>
<p class="font-body text-lg md:text-xl text-on-surface-variant leading-relaxed max-w-md">
                    Descend beneath the noise of daily life. A technique designed to ground your nervous system by mimicking the slow, heavy pressure of the deep sea.
                </p>
<div class="mt-12">
                    <a href="{{ route('session', $technique->id) }}" class="inline-block rounded-full bg-primary text-on-primary px-10 py-5 text-lg font-bold hover:scale-[1.02] active:scale-95 transition-all duration-300 editorial-shadow">
                        Start Guided Session
                    </a>
</div>
</div>
<div class="md:col-span-6 lg:col-span-7 order-1 md:order-2 relative h-[400px] md:h-[600px]">
<div class="absolute inset-0 rounded-xl overflow-hidden shadow-2xl">
<img class="w-full h-full object-cover grayscale-[20%] sepia-[10%] brightness-90 transition-transform duration-700 hover:scale-105" data-alt="Dreamy abstract overhead view of deep turquoise ocean water with gentle ripples and soft light filtering through the surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDg_lqxyiahhIj0A3exTmYBGOUm9PSCinJUS2Q9oQDSOPpj9kAViLx0MiNCOn56rUKhwm7xcDvIS0L1ftKMxFw0aMlSMpiMJ7r9up2KMXSc2BHufILQZ3re_8Z_gehrsHnEDvP9PRhzc3mAJFJ9GS2mm4-q5haHUAoO9jLD1l9vcdA-LiXoDbeF8NWJCwA7clYIxBIucxv-3L6xB3r_wF-VDp5eaqvbrL_6JtM_gPxt0-ttdTaLcQgocgjzASRiNnzWwSom2cwA5cU"/>
</div>
<!-- Glass Overlay Element -->
<div class="absolute -bottom-8 -left-8 md:-left-16 p-8 bg-surface-container-low/60 backdrop-blur-3xl rounded-lg max-w-[280px] hidden lg:block">
<span class="material-symbols-outlined text-primary text-4xl mb-4">waves</span>
<p class="font-label text-sm text-on-surface-variant font-medium">Focused on parasympathetic activation and cortisol reduction.</p>
</div>
</div>
</section>
<!-- Benefits: Subtle Tonal Shift -->
<section class="bg-surface-container-low py-24 md:py-32">
<div class="max-w-screen-2xl mx-auto px-8">
<div class="flex flex-col md:flex-row justify-between items-baseline mb-16 gap-8">
<h2 class="font-display text-4xl md:text-5xl text-on-surface italic">The Weight of Stillness</h2>
<p class="font-label text-secondary-dim font-bold tracking-widest uppercase text-sm">Benefits of Practice</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Benefit 1 -->
<div class="bg-surface-container-lowest p-10 rounded-xl transition-transform duration-300 hover:-translate-y-2">
<span class="material-symbols-outlined text-tertiary mb-6 text-3xl" data-weight="fill">psychology</span>
<h3 class="font-display text-2xl mb-4 text-on-surface">Neurological Anchoring</h3>
<p class="font-body text-on-surface-variant leading-relaxed">
                            Simulated deep-pressure breathing signals the amygdala to transition from high-alert to restful awareness.
                        </p>
</div>
<!-- Benefit 2 -->
<div class="bg-surface-container-lowest p-10 rounded-xl transition-transform duration-300 hover:-translate-y-2">
<span class="material-symbols-outlined text-tertiary mb-6 text-3xl" data-weight="fill">spa</span>
<h3 class="font-display text-2xl mb-4 text-on-surface">Emotional Filtration</h3>
<p class="font-body text-on-surface-variant leading-relaxed">
                            Visualizing the ocean floor allows chaotic thoughts to remain on the 'surface' while you remain grounded below.
                        </p>
</div>
<!-- Benefit 3 -->
<div class="bg-surface-container-lowest p-10 rounded-xl transition-transform duration-300 hover:-translate-y-2">
<span class="material-symbols-outlined text-tertiary mb-6 text-3xl" data-weight="fill">sleep</span>
<h3 class="font-display text-2xl mb-4 text-on-surface">Deep Rest Cycle</h3>
<p class="font-body text-on-surface-variant leading-relaxed">
                            Prepares the body for restorative sleep states by lowering the heart rate and core body temperature effectively.
                        </p>
</div>
</div>
</div>
</section>
<!-- Instructions: Asymmetric Editorial Layout -->
<section class="max-w-screen-2xl mx-auto px-8 py-24 md:py-40 grid grid-cols-1 lg:grid-cols-12 gap-16">
<div class="lg:col-span-5 relative">
<div class="sticky top-32">
<h2 class="font-display text-5xl md:text-6xl text-on-surface mb-10 leading-tight">Finding Your <br/>Depth</h2>
<div class="w-24 h-px bg-outline-variant mb-10"></div>
<p class="font-body text-xl text-on-surface-variant leading-relaxed mb-8 italic">
                        "The deeper you sink, the quieter the world becomes. At the floor, there is only the rhythm of the tides."
                    </p>
<div class="aspect-square w-full rounded-xl overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Soft focused close-up of a person's hands resting peacefully on a linen fabric in soft morning sunlight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGRVV4Q-yL-SDI3gbbi2ihtgwuybBI4wkRjbRFxAEK_PtcL77z-XvPguGkGt7WqSTHXlNlo-aEL_5aE0E6dOcfMeBNktqoC9OD9erc9m4zrTc3HQLN11UATOFOk1UtU6lGr2tWcfbInPhBTn1PkL80yPRpot5xKBTTzRafpTSLSA_Ta531PeSMiTSaN_jrOdgJbWlArwGjVTbrAqKYGu3iAyelsOH4sGgrr_qO03unGuVWWX-T-048uX-srFrjixENgaZdoJRVDGA"/>
</div>
</div>
</div>
<div class="lg:col-span-6 lg:col-start-7 flex flex-col gap-16">
<!-- Step 1 -->
<div class="group">
<span class="font-display text-6xl text-primary/10 group-hover:text-primary/20 transition-colors duration-500 mb-4 block">01</span>
<h4 class="font-display text-2xl text-on-surface mb-4">The Descent Position</h4>
<p class="font-body text-lg text-on-surface-variant leading-relaxed">
                        Sit or lie down in a space where you feel completely supported. If sitting, imagine your spine as an anchor line extending down into the cool, dark waters. Close your eyes and soften your jaw.
                    </p>
</div>
<!-- Step 2 -->
<div class="group">
<span class="font-display text-6xl text-primary/10 group-hover:text-primary/20 transition-colors duration-500 mb-4 block">02</span>
<h4 class="font-display text-2xl text-on-surface mb-4">Tidal Inhalation</h4>
<p class="font-body text-lg text-on-surface-variant leading-relaxed">
                        Inhale slowly through your nose for a count of four. Imagine the breath as a cool, rising tide filling your chest. Feel the expansion not just in your lungs, but in your entire presence.
                    </p>
</div>
<!-- Step 3 -->
<div class="group">
<span class="font-display text-6xl text-primary/10 group-hover:text-primary/20 transition-colors duration-500 mb-4 block">03</span>
<h4 class="font-display text-2xl text-on-surface mb-4">The Weighted Pause</h4>
<p class="font-body text-lg text-on-surface-variant leading-relaxed">
                        Hold the breath for two seconds. In this moment, you are weightless at the highest point of the wave. Feel the stillness before the downward motion begins.
                    </p>
</div>
<!-- Step 4 -->
<div class="group">
<span class="font-display text-6xl text-primary/10 group-hover:text-primary/20 transition-colors duration-500 mb-4 block">04</span>
<h4 class="font-display text-2xl text-on-surface mb-4">Floor Exhalation</h4>
<p class="font-body text-lg text-on-surface-variant leading-relaxed">
                        Exhale for a count of six through pursed lips. Imagine you are sinking through the water, leaving the sunlight and the noise above. With every second, feel yourself becoming heavier, more grounded, until you reach the soft, silent floor.
                    </p>
</div>
<div class="pt-12">
<div class="p-12 bg-secondary-container/30 rounded-xl border border-outline-variant/15">
<h5 class="font-display text-xl mb-4 text-on-secondary-container">Practitioner's Note</h5>
<p class="font-body text-on-secondary-container/80 leading-relaxed italic">
                            Repeat this cycle ten times. If your mind wanders to the surface, simply acknowledge the thought and let it float away like foam on a wave.
                        </p>
</div>
</div>
</div>
</section>
<!-- Bottom Padding for Nav -->
<div class="h-32"></div>
</main>
<!-- BottomNavBar -->
<nav class="fixed bottom-0 left-0 right-0 z-50 flex justify-around items-center p-3 bg-stone-50/70 dark:bg-stone-900/70 backdrop-blur-2xl rounded-full mb-6 mx-auto w-[90%] max-w-md shadow-xl shadow-stone-900/5 md:hidden">
<a class="flex flex-col items-center justify-center text-stone-400 dark:text-stone-500 hover:text-sage-500 px-5 py-2 hover:scale-105 transition-transform duration-300 active:scale-95" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined">home</span>
<span class="font-sans text-[11px] font-medium uppercase tracking-widest mt-1">Home</span>
</a>
<a class="flex flex-col items-center justify-center bg-sage-100 dark:bg-sage-900/40 text-sage-800 dark:text-sage-100 rounded-full px-5 py-2 hover:scale-105 transition-transform duration-300 active:scale-95" href="{{ route('library') }}">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">self_care</span>
<span class="font-sans text-[11px] font-medium uppercase tracking-widest mt-1">Meditate</span>
</a>
<a class="flex flex-col items-center justify-center text-stone-400 dark:text-stone-500 hover:text-sage-500 px-5 py-2 hover:scale-105 transition-transform duration-300 active:scale-95" href="{{ route('journal') }}">
<span class="material-symbols-outlined">menu_book</span>
<span class="font-sans text-[11px] font-medium uppercase tracking-widest mt-1">Journal</span>
</a>
<a class="flex flex-col items-center justify-center text-stone-400 dark:text-stone-500 hover:text-sage-500 px-5 py-2 hover:scale-105 transition-transform duration-300 active:scale-95" href="{{ route('progress') }}">
<span class="material-symbols-outlined">bar_chart</span>
<span class="font-sans text-[11px] font-medium uppercase tracking-widest mt-1">Stats</span>
</a>
</nav>
</body></html>