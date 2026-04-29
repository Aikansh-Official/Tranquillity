<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Technique Library - Sanctuary</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,300;0,400;0,600;0,700;1,400&amp;family=Manrope:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#59694b",
                        "surface-container-lowest": "#ffffff",
                        "secondary": "#676271",
                        "on-secondary-fixed": "#413d4b",
                        "surface-container": "#f7f3ec",
                        "on-primary-fixed": "#344429",
                        "tertiary": "#716156",
                        "outline-variant": "#bcb9b1",
                        "on-surface-variant": "#66645e",
                        "on-primary-container": "#46563a",
                        "tertiary-fixed-dim": "#ebd6c8",
                        "surface-container-high": "#f1ede6",
                        "primary-fixed": "#d6e9c3",
                        "on-tertiary-fixed": "#4e4036",
                        "surface-variant": "#ece8df",
                        "surface": "#fffbff",
                        "on-tertiary": "#ffffff",
                        "on-secondary-fixed-variant": "#5e5968",
                        "tertiary-fixed": "#fae4d6",
                        "inverse-primary": "#eafdd6",
                        "surface-tint": "#59694b",
                        "on-secondary-container": "#544f5e",
                        "error-dim": "#791903",
                        "error": "#ae4025",
                        "surface-container-highest": "#ece8df",
                        "inverse-on-surface": "#9f9c98",
                        "on-error-container": "#6e1400",
                        "primary-container": "#d6e9c3",
                        "tertiary-dim": "#64554a",
                        "surface-container-low": "#fdf9f2",
                        "secondary-fixed-dim": "#d8d1e3",
                        "background": "#fffbff",
                        "primary-fixed-dim": "#c8dbb6",
                        "surface-dim": "#e6e2da",
                        "tertiary-container": "#fae4d6",
                        "on-primary-fixed-variant": "#506043",
                        "on-tertiary-fixed-variant": "#6b5c51",
                        "inverse-surface": "#0f0e0c",
                        "on-surface": "#393832",
                        "outline": "#838079",
                        "secondary-container": "#e7dff2",
                        "secondary-dim": "#5a5665",
                        "surface-bright": "#fffbff",
                        "on-primary": "#ffffff",
                        "on-error": "#ffffff",
                        "primary-dim": "#4d5d40",
                        "on-background": "#393832",
                        "error-container": "#fd795a",
                        "secondary-fixed": "#e7dff2",
                        "on-secondary": "#ffffff",
                        "on-tertiary-container": "#615247"
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Manrope', sans-serif;
            background-color: #fffbff;
            color: #393832;
        }
        .editorial-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 2rem;
        }
        .glass-nav {
            backdrop-filter: blur(20px);
        }
    </style>
</head>
<body class="bg-background min-h-screen">
<!-- TopAppBar -->
<header class="bg-stone-50/80 dark:bg-stone-950/80 backdrop-blur-xl docked full-width top-0 z-40 fixed w-full">
<div class="flex justify-between items-center w-full px-8 py-6 max-w-7xl mx-auto">
<span class="font-['Noto_Serif'] text-2xl font-light text-emerald-900 dark:text-emerald-100">Sanctuary</span>
<nav class="hidden md:flex items-center gap-8 font-['Noto_Serif'] text-lg tracking-wide">
<a class="text-stone-500 dark:text-stone-400 hover:text-emerald-700 transition-colors" href="{{ route('dashboard') }}">Dashboard</a>
<a class="text-emerald-800 dark:text-emerald-400 font-semibold border-b-2 border-emerald-800/30" href="{{ route('library') }}">Library</a>
<a class="text-stone-500 dark:text-stone-400 hover:text-emerald-700 transition-colors" href="{{ route('progress') }}">Progress</a>
</nav>
<div class="flex items-center gap-4">
<a href="{{ route('profile.edit') }}" class="hover:bg-stone-200/40 dark:hover:bg-stone-800/40 rounded-full p-2 transition-colors" title="Profile Settings">
<span class="material-symbols-outlined text-stone-600">account_circle</span>
</a>
</div>
</div>
</header>
<main class="pt-32 pb-40 max-w-7xl mx-auto px-8">
<!-- Hero & Search Section -->
<section class="mb-20">
<div class="max-w-2xl">
<h1 class="font-headline text-5xl md:text-7xl text-on-surface mb-6 tracking-tight">Technique Library</h1>
<p class="font-body text-xl text-on-surface-variant leading-relaxed mb-10">Explore our curated collection of practices designed to restore your inner balance and clarity.</p>
<div class="relative max-w-xl">
<div class="absolute inset-y-0 left-6 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-outline">search</span>
</div>
<input class="w-full pl-14 pr-6 py-5 bg-surface-container-high rounded-lg border-none focus:ring-2 focus:ring-primary/20 transition-all font-body text-lg shadow-sm placeholder:text-outline" placeholder="Find a practice..." type="text"/>
</div>
</div>
</section>
<!-- Filter Chips -->
<section class="flex flex-wrap gap-4 mb-16" id="filter-container">
<button data-filter="all" class="filter-btn bg-primary text-on-primary px-8 py-3 rounded-full font-label text-sm tracking-widest uppercase transition-all shadow-md">All Practices</button>
<button data-filter="breathing" class="filter-btn bg-surface-container-low hover:bg-surface-container-highest text-on-surface-variant px-8 py-3 rounded-full font-label text-sm tracking-widest uppercase transition-all">Breathing</button>
<button data-filter="meditation" class="filter-btn bg-surface-container-low hover:bg-surface-container-highest text-on-surface-variant px-8 py-3 rounded-full font-label text-sm tracking-widest uppercase transition-all">Meditation</button>
<button data-filter="physical" class="filter-btn bg-surface-container-low hover:bg-surface-container-highest text-on-surface-variant px-8 py-3 rounded-full font-label text-sm tracking-widest uppercase transition-all">Physical</button>
<button data-filter="journaling" class="filter-btn bg-surface-container-low hover:bg-surface-container-highest text-on-surface-variant px-8 py-3 rounded-full font-label text-sm tracking-widest uppercase transition-all">Journaling</button>
</section>
<!-- Asymmetric Bento Grid Library -->
<div class="editorial-grid">
<!-- Featured Card - Meditation -->
<div data-category="meditation" class="technique-card col-span-12 lg:col-span-8 bg-surface-container-low rounded-xl p-8 flex flex-col md:flex-row gap-8 items-center shadow-[0_20px_50px_rgba(57,56,50,0.04)] hover:shadow-lg transition-shadow duration-500">
<div class="w-full md:w-1/2 aspect-square rounded-lg overflow-hidden">
<img class="w-full h-full object-cover" data-alt="serene woman meditating in a soft-lit minimalist room with flowing linen curtains and morning sunlight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD641yDleDsg5PWLvmLl_F5WHL4qRzKkW5ceXhWfHBBm3q0DoVl5mowv9Ly3vtjtPgYoYJpYPi1VAl572dn0GINQgBV2YGGFBiKwo-kFv0A4YK-K_gOirTwPsDfoi2QAm9DVI8EM4wpg0g3DZlHF5npnxC6tQ2PTwADAilvs2dM5Oas-UgRYDdvGTrqIFbxIu5_VLoTAl-9QaQgFjLwJxz-OZulhf2hflVVGOS80scZZfBq2NvXIuZLVzp6yLFYkIpP4dYlMg6EDuU"/>
</div>
<div class="w-full md:w-1/2 flex flex-col justify-center">
<div class="flex items-center gap-3 mb-4">
<span class="px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full text-[10px] uppercase tracking-widest font-bold">Meditation</span>
<span class="text-on-surface-variant text-sm font-medium">20 mins</span>
</div>
<h3 class="font-headline text-3xl mb-4 text-on-surface">The Ocean Floor Breath</h3>
<p class="text-on-surface-variant font-body mb-8 leading-relaxed">Deepen your focus by visualizing the stillness of the deep sea while maintaining rhythmic tidal breathing patterns.</p>
<a href="{{ route('technique.show', 2) }}" class="self-start text-primary font-bold border-b border-primary/30 pb-1 hover:border-primary transition-all block mt-4">Begin Practice</a>
</div>
</div>
<!-- Standard Card 1 - Breathing -->
<div data-category="breathing" class="technique-card col-span-12 md:col-span-6 lg:col-span-4 bg-surface-container-lowest rounded-xl p-8 flex flex-col shadow-[0_20px_50px_rgba(57,56,50,0.03)] border border-outline-variant/10">
<div class="h-48 rounded-lg overflow-hidden mb-6">
<img class="w-full h-full object-cover" data-alt="atmospheric shot of fog rolling over a calm forest lake at dawn with ethereal cool lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYfhjlOTMOlhNMN3UFcBSCF3PW_cGTuyhL0deJFbnVQq_e1ijHHtDrKhrAutqhU3FGnTftFrweTRK64lJfmMm8jgtazbShj-K3zzzR4RR-7n7VvOApnpIwXAwbluDMnBk8Q-uMXTrWzU5bkkttD3i9d6ZN4JueTUC69uMY1iNWqCW1LLsxFOrZlGis-_ZIUHzD7MYT6szJhCBysjHMXSIgxruxZ7CfhIQqRm7zP2tHfM2g7cCQu1Z9lBOVfc2g4x1vcQpMK74E9xg"/>
</div>
<div class="flex items-center gap-3 mb-3">
<span class="px-3 py-1 bg-primary-container text-on-primary-container rounded-full text-[10px] uppercase tracking-widest font-bold">Breathing</span>
<span class="text-on-surface-variant text-xs">5 mins</span>
</div>
<h3 class="font-headline text-2xl mb-4">Box Breathing</h3>
<p class="text-on-surface-variant text-sm mb-6 flex-grow">A tactical tool to reset the nervous system. Four seconds in, four hold, four out, four hold.</p>
<div class="flex justify-between items-center mt-auto">
<span class="material-symbols-outlined text-outline cursor-pointer">favorite</span>
<a href="{{ route('session', 1) }}" class="material-symbols-outlined text-primary hover:scale-110 transition-transform">play_circle</a>
</div>
</div>
<!-- Standard Card 2 - Physical -->
<div data-category="physical" class="technique-card col-span-12 md:col-span-6 lg:col-span-4 bg-surface-container-lowest rounded-xl p-8 flex flex-col shadow-[0_20px_50px_rgba(57,56,50,0.03)] border border-outline-variant/10">
<div class="h-48 rounded-lg overflow-hidden mb-6">
<img class="w-full h-full object-cover" data-alt="close up of smooth basalt stones stacked on a wooden surface with soft blurred background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCtQT1Elom5CU9ke9V2QKSOhzL4YRWMbDBRYV4KsjRP59eF5WpkQQBPwPLGnwTmsvHPVwWOyQJKWZAdfmXmKc4auNS8dB6QgadwenC5SA4o7pdhzT4FXO6FyWoTq67YDGieHfID8VCY4BCAXuztsnT-SQaXJe5j-BO-MOGDKJz6EFx9gHL5ZVYTVan1LIJ_QHy_oFVcEp9q6PZ7eNH_gmfUApNHvhP6lA2twqg7Z5YnwIPNTQBDX2P3H1H7j0w_eyICLpSXuLDAlMY"/>
</div>
<div class="flex items-center gap-3 mb-3">
<span class="px-3 py-1 bg-tertiary-container text-on-tertiary-container rounded-full text-[10px] uppercase tracking-widest font-bold">Physical</span>
<span class="text-on-surface-variant text-xs">15 mins</span>
</div>
<h3 class="font-headline text-2xl mb-4">Body Scan Release</h3>
<p class="text-on-surface-variant text-sm mb-6 flex-grow">Progressively relax every muscle group from your crown to your toes, releasing stored tension.</p>
<div class="flex justify-between items-center mt-auto">
<span class="material-symbols-outlined text-outline cursor-pointer">favorite</span>
<a href="{{ route('session', 3) }}" class="material-symbols-outlined text-primary hover:scale-110 transition-transform">play_circle</a>
</div>
</div>
<!-- Standard Card 3 - Journaling -->
<div data-category="journaling" class="technique-card col-span-12 md:col-span-6 lg:col-span-4 bg-surface-container-lowest rounded-xl p-8 flex flex-col shadow-[0_20px_50px_rgba(57,56,50,0.03)] border border-outline-variant/10">
<div class="h-48 rounded-lg overflow-hidden mb-6">
<img class="w-full h-full object-cover" data-alt="a high-end textured paper notebook and a wooden pen on a clean stone desk in natural light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdhx5-tAfBZxYCIZtjgEIOnwGiALQ8Qql-8Wzno8-HB8tWTOJVs7hGbcTMOuRXPlMfIdW4sT5pz8UhN720GU5lABmqa40Frpf_bcevanbTXN6uNMXXGOGf4TttqLq0yspdXsCupT_Z7I170mIIWsq0P5T5paRYyl77ZP7-vtQ7omiavaU-pWBu5RHVBUA0Pnwm0ft_NztB6Pg3O4KDraP1xAgoeJ9y2f53tGzWkmFP6uJllf3TCSPISp4vQjgTZ2N9hWwd5lTRLLc"/>
</div>
<div class="flex items-center gap-3 mb-3">
<span class="px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full text-[10px] uppercase tracking-widest font-bold">Journaling</span>
<span class="text-on-surface-variant text-xs">10 mins</span>
</div>
<h3 class="font-headline text-2xl mb-4">Gratitude Flow</h3>
<p class="text-on-surface-variant text-sm mb-6 flex-grow">A guided prompt series to help you identify the subtle moments of beauty in your daily landscape.</p>
<div class="flex justify-between items-center mt-auto">
<span class="material-symbols-outlined text-outline cursor-pointer">favorite</span>
<a href="{{ route('journal') }}" class="material-symbols-outlined text-primary hover:scale-110 transition-transform">edit_note</a>
</div>
</div>
<!-- Special Large Card - Physical -->
<div data-category="physical" class="technique-card col-span-12 lg:col-span-4 bg-primary text-on-primary rounded-xl p-10 flex flex-col justify-between shadow-2xl overflow-hidden relative group">
<div class="absolute -right-10 -top-10 w-40 h-40 bg-white/5 rounded-full blur-3xl group-hover:scale-150 transition-transform duration-700"></div>
<div>
<h3 class="font-headline text-3xl mb-4 leading-snug">The Morning Sun Salutation</h3>
<p class="text-on-primary/80 mb-8 font-body">A vibrant physical sequence to awaken the spirit and align the body's energy channels with the day ahead.</p>
</div>
<div class="flex items-center justify-between">
<div class="flex flex-col">
<span class="text-xs uppercase tracking-widest opacity-60 mb-1">Level</span>
<span class="font-bold">Beginner</span>
</div>
<a href="{{ route('session', 5) }}" class="bg-surface-container-lowest text-primary rounded-full px-6 py-2 font-bold shadow-sm hover:scale-105 transition-all inline-block">Open Guide</a>
</div>
</div>

<!-- Card 6 - Breathing -->
<div data-category="breathing" class="technique-card col-span-12 md:col-span-6 lg:col-span-4 bg-surface-container-lowest rounded-xl p-8 flex flex-col shadow-[0_20px_50px_rgba(57,56,50,0.03)] border border-outline-variant/10">
<div class="h-48 rounded-lg overflow-hidden mb-6">
<img class="w-full h-full object-cover" data-alt="vibrant green fern leaf detail with morning dew drops and soft bokeh lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGZk9Tsl_O8fTYZqu9acmOfG997vJZJQvVdawWRxqppRSH-OwUWQ8WK-BCOqoTM5QWiOBk37--mJ3yeBCDHfGWOPYYGVH-Wp9fO2jdYRtpxboXTjsW4L7R14iV6yILdzScX8n5EMGsx-QfFbuJq9_fyv-qkuD5WYbUw_QG5CqPPZ4t2bSndzQVEG4AiDCC_0pFOZ2ZyTnz6KRwwLnMl_DO0brF4kfu_F4SkFr8foVygOn1chFzmJFDWdhAaHdGoTuwoJ5OYuMISTg"/>
</div>
<div class="flex items-center gap-3 mb-3">
<span class="px-3 py-1 bg-primary-container text-on-primary-container rounded-full text-[10px] uppercase tracking-widest font-bold">Breathing</span>
<span class="text-on-surface-variant text-xs">8 mins</span>
</div>
<h3 class="font-headline text-2xl mb-4">4-7-8 Ritual</h3>
<p class="text-on-surface-variant text-sm mb-6 flex-grow">The classic "natural tranquilizer" for the nervous system, ideal for evening relaxation and sleep prep.</p>
<div class="flex justify-between items-center mt-auto">
<span class="material-symbols-outlined text-outline cursor-pointer">favorite</span>
<a href="{{ route('session', 6) }}" class="material-symbols-outlined text-primary hover:scale-110 transition-transform">play_circle</a>
</div>
</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('.technique-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Reset all buttons to inactive state
                filterBtns.forEach(b => {
                    b.classList.remove('bg-primary', 'text-on-primary', 'shadow-md');
                    b.classList.add('bg-surface-container-low', 'text-on-surface-variant');
                });

                // Set active state on clicked button
                btn.classList.remove('bg-surface-container-low', 'text-on-surface-variant');
                btn.classList.add('bg-primary', 'text-on-primary', 'shadow-md');

                const filterValue = btn.getAttribute('data-filter');

                // Filter cards
                cards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.style.display = 'flex'; // or whatever the original display was, flex works for these cards
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
</div>
</main>
<!-- Footer -->
<footer class="bg-stone-50 dark:bg-stone-950 full-width py-12 px-8 border-t border-stone-200/20">
<div class="flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto gap-4">
<span class="font-['Noto_Serif'] text-lg text-emerald-800">Sanctuary</span>
<p class="font-['Manrope'] text-sm text-stone-500">© 2024 The Digital Sanctuary. Breathe easy.</p>
<div class="flex gap-8">
<a class="text-stone-400 hover:text-emerald-600 transition-all font-['Manrope'] text-sm" href="#">Privacy</a>
<a class="text-stone-400 hover:text-emerald-600 transition-all font-['Manrope'] text-sm" href="#">Terms</a>
<a class="text-stone-400 hover:text-emerald-600 transition-all font-['Manrope'] text-sm" href="#">Support</a>
</div>
</div>
</footer>
<!-- BottomNavBar -->
<nav class="md:hidden fixed bottom-6 left-1/2 -translate-x-1/2 z-50 flex justify-around items-center p-2 bg-stone-100/70 dark:bg-stone-900/70 backdrop-blur-2xl docked rounded-full w-[90%] max-w-md mx-auto shadow-[0_20px_50px_rgba(57,56,50,0.06)]">
<a class="flex flex-col items-center justify-center text-stone-500 dark:text-stone-400 px-5 py-2 hover:bg-emerald-50/50 transition-all" href="#">
<span class="material-symbols-outlined">spa</span>
<span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium mt-1">Home</span>
</a>
<a class="flex flex-col items-center justify-center bg-emerald-100/50 dark:bg-emerald-900/30 text-emerald-900 dark:text-emerald-100 rounded-full px-5 py-2 glow-sm" href="#">
<span class="material-symbols-outlined">auto_stories</span>
<span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium mt-1">Library</span>
</a>
<a class="flex flex-col items-center justify-center text-stone-500 dark:text-stone-400 px-5 py-2 hover:bg-emerald-50/50 transition-all" href="#">
<span class="material-symbols-outlined">air</span>
<span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium mt-1">Breathe</span>
</a>
<a class="flex flex-col items-center justify-center text-stone-500 dark:text-stone-400 px-5 py-2 hover:bg-emerald-50/50 transition-all" href="#">
<span class="material-symbols-outlined">bar_chart</span>
<span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium mt-1">Stats</span>
</a>
</nav>
</body>
</html>