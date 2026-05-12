<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Quietude Sanctuary - Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Manrope:wght@200..800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
            vertical-align: middle;
        }
        body {
            font-family: 'Manrope', sans-serif;
            background-color: #fffbff;
            color: #393832;
        }
        .serif-font {
            font-family: 'Noto Serif', serif;
        }
        .glass-nav {
            backdrop-filter: blur(20px);
        }
        /* Gradient slider track */
        input[type=range].mood-slider {
            -webkit-appearance: none;
            appearance: none;
            height: 8px;
            border-radius: 9999px;
            background: linear-gradient(to right, #7FB5A0 0%, #D4A843 50%, #C4956A 100%);
            cursor: pointer;
            outline: none;
        }
        input[type=range].mood-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: #59694b;
            box-shadow: 0 2px 8px rgba(89,105,75,0.35);
            cursor: pointer;
            border: 3px solid #fff;
            transition: transform 0.15s ease;
        }
        input[type=range].mood-slider::-webkit-slider-thumb:hover {
            transform: scale(1.15);
        }
        input[type=range].mood-slider::-moz-range-thumb {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: #59694b;
            box-shadow: 0 2px 8px rgba(89,105,75,0.35);
            cursor: pointer;
            border: 3px solid #fff;
        }
        /* Technique card left border */
        .technique-card-rec {
            border-left: 3px solid #59694b;
        }
    </style>
</head>
<body class="bg-background min-h-screen text-on-surface">
    <header class="fixed top-0 left-0 right-0 z-50 bg-stone-50/80 dark:bg-stone-950/80 backdrop-blur-xl">
        <div class="flex justify-between items-center w-full px-8 py-6 max-w-7xl mx-auto">
            <div class="font-['Noto_Serif'] text-2xl font-light text-emerald-900 dark:text-emerald-100">Sanctuary</div>
            <nav class="hidden md:flex gap-10">
                <a class="text-emerald-800 dark:text-emerald-400 font-semibold border-b-2 border-emerald-800/30 font-['Noto_Serif'] text-lg tracking-wide Active: opacity-80 transition-opacity duration-300" href="{{ route('dashboard') }}">Dashboard</a>
                <a class="text-stone-500 dark:text-stone-400 hover:text-emerald-700 transition-colors font-['Noto_Serif'] text-lg tracking-wide" href="{{ route('library') }}">Library</a>
                <a class="text-stone-500 dark:text-stone-400 hover:text-emerald-700 transition-colors font-['Noto_Serif'] text-lg tracking-wide" href="{{ route('progress') }}">Progress</a>
            </nav>
            <div class="flex items-center gap-2">
                <a href="{{ route('profile.edit') }}" class="hover:bg-stone-200/40 dark:hover:bg-stone-800/40 rounded-full p-2 transition-colors" title="Profile Settings">
                    <span class="material-symbols-outlined text-stone-600">account_circle</span>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="hover:bg-stone-200/40 dark:hover:bg-stone-800/40 rounded-full p-2 transition-all" title="Logout">
                        <span class="material-symbols-outlined text-emerald-800 dark:text-emerald-400" data-icon="logout">logout</span>
                    </button>
                </form>
            </div>
        </div>
    </header>
    <main class="pt-32 pb-40 px-6 max-w-7xl mx-auto">
        <section class="mb-16">
            <h1 class="serif-font text-5xl md:text-7xl text-on-surface mb-4 tracking-tight leading-tight">Welcome back, {{ explode(' ', Auth::user()->name)[0] }}</h1>
            <p class="text-on-surface-variant text-lg max-w-xl font-light italic">Your sanctuary is ready. Take a breath, and let the outside world fade away.</p>
        </section>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
            <div class="md:col-span-8 bg-surface-container-low rounded-xl p-10 flex flex-col justify-between">
                <form id="mood_form" method="POST" action="{{ route('mood.store') }}">
                    @csrf
                    <h2 class="serif-font text-3xl mb-8 text-on-surface">How are you feeling today?</h2>
                    <input type="hidden" name="mood_label" id="mood_label" value="">
                    <div class="flex flex-wrap gap-4 md:gap-6 items-center" id="mood_buttons">
                        <button type="button" onclick="selectMood('Calm', this)" class="group flex flex-col items-center gap-3 p-4 bg-surface-container-lowest rounded-lg hover:bg-primary-container transition-all">
                            <span class="text-4xl">😌</span>
                            <span class="text-sm font-medium text-on-surface-variant group-hover:text-on-primary-container">Calm</span>
                        </button>
                        <button type="button" onclick="selectMood('Focused', this)" class="group flex flex-col items-center gap-3 p-4 bg-surface-container-lowest rounded-lg hover:bg-primary-container transition-all">
                            <span class="text-4xl">🌱</span>
                            <span class="text-sm font-medium text-on-surface-variant group-hover:text-on-primary-container">Focused</span>
                        </button>
                        <button type="button" onclick="selectMood('Restless', this)" class="group flex flex-col items-center gap-3 p-4 bg-surface-container-lowest rounded-lg hover:bg-primary-container transition-all">
                            <span class="text-4xl">🌪️</span>
                            <span class="text-sm font-medium text-on-surface-variant group-hover:text-on-primary-container">Restless</span>
                        </button>
                        <button type="button" onclick="selectMood('Pensive', this)" class="group flex flex-col items-center gap-3 p-4 bg-surface-container-lowest rounded-lg hover:bg-primary-container transition-all">
                            <span class="text-4xl">🕯️</span>
                            <span class="text-sm font-medium text-on-surface-variant group-hover:text-on-primary-container">Pensive</span>
                        </button>
                        <button type="button" onclick="selectMood('Inspired', this)" class="group flex flex-col items-center gap-3 p-4 bg-surface-container-lowest rounded-lg hover:bg-primary-container transition-all">
                            <span class="text-4xl">✨</span>
                            <span class="text-sm font-medium text-on-surface-variant group-hover:text-on-primary-container">Inspired</span>
                        </button>
                    </div>
                    <div class="mt-12">
                        <p class="text-sm text-on-surface-variant uppercase tracking-widest mb-6">Or on a scale of 1-10 (1 = Calm, 10 = High Stress)</p>
                        <div class="flex justify-between items-center gap-4 max-w-2xl">
                            <input type="range" name="stress_score" min="1" max="10" value="6" class="mood-slider w-full" oninput="document.getElementById('stress_val').innerText = this.value">
                            <span id="stress_val" class="text-xl font-semibold text-primary w-8 text-center">6</span>
                        </div>
                        <div class="flex justify-between max-w-2xl mt-2 px-1">
                            <span class="text-xs text-on-surface-variant opacity-60">😌 Calm</span>
                            <span class="text-xs text-on-surface-variant opacity-60">😰 High Stress</span>
                        </div>
                    </div>
                    <div class="mt-8">
                        <button type="submit" class="bg-primary text-white px-8 py-3 rounded-full font-medium hover:opacity-90 transition-opacity">Save Daily Mood</button>
                    </div>
                </form>
                <script>
                    function selectMood(mood, btn) {
                        document.getElementById('mood_label').value = mood;
                        let btns = document.querySelectorAll('#mood_buttons button');
                        btns.forEach(b => b.classList.remove('ring-2', 'ring-primary', 'bg-primary-container'));
                        btn.classList.add('ring-2', 'ring-primary', 'bg-primary-container');
                    }
                </script>
            </div>
            <div class="md:col-span-4 bg-secondary-container/30 rounded-xl p-8 flex flex-col">
                <div class="mb-auto">
                    <span class="material-symbols-outlined text-secondary mb-4" data-icon="auto_awesome">auto_awesome</span>
                    <h3 class="serif-font text-2xl text-on-secondary-container mb-4">Daily Reflection</h3>
                    <p class="text-on-secondary-container/80 italic leading-relaxed">
                        "What is one small thing that brought you a sense of peace in the last 24 hours?"
                    </p>
                </div>
                <div class="mt-8">
                    <textarea name="reflection_note" form="mood_form" class="w-full bg-surface-container-lowest/50 border-none rounded-lg p-4 focus:ring-1 focus:ring-secondary/20 placeholder:text-stone-400" placeholder="Capture your thought..." rows="3"></textarea>
                    <button type="submit" form="mood_form" class="mt-4 block w-full text-center bg-secondary text-white py-3 rounded-full font-medium hover:opacity-90 transition-opacity">Save Reflection</button>
                </div>
            </div>
            <div class="md:col-span-12 mt-8">
                <div class="flex justify-between items-end mb-10">
                    <div>
                        <h3 class="serif-font text-4xl text-on-surface">Recommended for You</h3>
                        <p class="text-on-surface-variant mt-2">Based on your recent restless state, try these techniques.</p>
                    </div>
                    <a class="text-primary font-medium hover:underline flex items-center gap-1" href="{{ route('library') }}">
                        View Library <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($techniques as $technique)
                    @php
                        $slug = Str::slug(str_replace(['The Morning ', 'The '], '', $technique->title), '_');
                        // Mapping some images since we don't have them in DB
                        $images = [
                            'box_breathing' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDYfhjlOTMOlhNMN3UFcBSCF3PW_cGTuyhL0deJFbnVQq_e1ijHHtDrKhrAutqhU3FGnTftFrweTRK64lJfmMm8jgtazbShj-K3zzzR4RR-7n7VvOApnpIwXAwbluDMnBk8Q-uMXTrWzU5bkkttD3i9d6ZN4JueTUC69uMY1iNWqCW1LLsxFOrZlGis-_ZIUHzD7MYT6szJhCBysjHMXSIgxruxZ7CfhIQqRm7zP2tHfM2g7cCQu1Z9lBOVfc2g4x1vcQpMK74E9xg',
                            'ocean_floor_breath' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD641yDleDsg5PWLvmLl_F5WHL4qRzKkW5ceXhWfHBBm3q0DoVl5mowv9Ly3vtjtPgYoYJpYPi1VAl572dn0GINQgBV2YGGFBiKwo-kFv0A4YK-K_gOirTwPsDfoi2QAm9DVI8EM4wpg0g3DZlHF5npnxC6tQ2PTwADAilvs2dM5Oas-UgRYDdvGTrqIFbxIu5_VLoTAl-9QaQgFjLwJxz-OZulhf2hflVVGOS80scZZfBq2NvXIuZLVzp6yLFYkIpP4dYlMg6EDuU',
                            'body_scan_release' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCiDJWzrlKw8XRnM4UqhlGTvw0hu5BEm8mLIWil29-nGPBtUF59io9QP5l-bJjtmrzoFKjCqfOJNjRQd48vUOgUot8YUtXug1vH5H_3ORjolqqaF7sjw9dNgSZ-z8RUbcO6y78gc2_8yZh6lg1Yn4S2wvqHezdEi4Q3A5A3oY1oj-9MCgQ17LgNoxXpo1-Uq-TZtTZW1Z2ftZPcpxM4ACyVijAZSQKn55Ar-UElU_mOnDavEeqAYS71dUGqRLXXW_tmFJpcvWXCvIw',
                            'gratitude_flow' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCdhx5-tAfBZxYCIZtjgEIOnwGiALQ8Qql-8Wzno8-HB8tWTOJVs7hGbcTMOuRXPlMfIdW4sT5pz8UhN720GU5lABmqa40Frpf_bcevanbTXN6uNMXXGOGf4TttqLq0yspdXsCupT_Z7I170mIIWsq0P5T5paRYyl77ZP7-vtQ7omiavaU-pWBu5RHVBUA0Pnwm0ft_NztB6Pg3O4KDraP1xAgoeJ9y2f53tGzWkmFP6uJllf3TCSPISp4vQjgTZ2N9hWwd5lTRLLc',
                            'sun_salutation' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCtQT1Elom5CU9ke9V2QKSOhzL4YRWMbDBRYV4KsjRP59eF5WpkQQBPwPLGnwTmsvHPVwWOyQJKWZAdfmXmKc4auNS8dB6QgadwenC5SA4o7pdhzT4FXO6FyWoTq67YDGieHfID8VCY4BCAXuztsnT-SQaXJe5j-BO-MOGDKJz6EFx9gHL5ZVYTVan1LIJ_QHy_oFVcEp9q6PZ7eNH_gmfUApNHvhP6lA2twqg7Z5YnwIPNTQBDX2P3H1H7j0w_eyICLpSXuLDAlMY',
                            '4_7_8_ritual' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAGZk9Tsl_O8fTYZqu9acmOfG997vJZJQvVdawWRxqppRSH-OwUWQ8WK-BCOqoTM5QWiOBk37--mJ3yeBCDHfGWOPYYGVH-Wp9fO2jdYRtpxboXTjsW4L7R14iV6yILdzScX8n5EMGsx-QfFbuJq9_fyv-qkuD5WYbUw_QG5CqPPZ4t2bSndzQVEG4AiDCC_0pFOZ2ZyTnz6KRwwLnMl_DO0brF4kfu_F4SkFr8foVygOn1chFzmJFDWdhAaHdGoTuwoJ5OYuMISTg'
                        ];
                        $image = $images[$slug] ?? 'https://images.unsplash.com/photo-1518241353330-0f7941c2d9b5?auto=format&fit=crop&w=800&q=80';
                    @endphp
                    <a href="{{ route('session', $technique->id) }}" class="technique-card-rec group cursor-pointer block bg-surface-container-low rounded-lg overflow-hidden hover:-translate-y-1 transition-all duration-300 hover:shadow-md">
                        <div class="aspect-[4/3] overflow-hidden bg-surface-container relative">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="{{ $image }}"/>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
                                <span class="text-white font-medium flex items-center gap-2">Start Session <span class="material-symbols-outlined">play_circle</span></span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="serif-font text-xl text-on-surface mb-1">{{ $technique->title }}</h4>
                            <p class="text-on-surface-variant text-sm">{{ $technique->duration_mins }} Minutes • {{ ucfirst($technique->category) }}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="md:col-span-12 bg-surface-container-high rounded-xl p-10 flex flex-col md:flex-row gap-12 items-center justify-between mt-8">
                <div class="max-w-md">
                    <h3 class="serif-font text-3xl mb-4">Your Progress</h3>
                    <p class="text-on-surface-variant leading-relaxed">You've maintained a 4-day streak of mindful moments. Your average focus score has improved by 12% this week.</p>
                    <a href="{{ route('progress') }}" class="mt-8 text-primary font-bold tracking-tight uppercase text-xs flex items-center gap-2 group">
                        See Detailed Analytics <span class="material-symbols-outlined text-lg group-hover:translate-x-1 transition-transform" data-icon="trending_up">trending_up</span>
                    </a>
                </div>
                <div class="flex gap-4 md:gap-8 overflow-hidden">
                    {{-- Mon: Calm → green --}}
                    <div class="flex flex-col items-center gap-2" title="Monday · Calm">
                        <div class="w-12 h-24 bg-surface-variant rounded-full relative overflow-hidden">
                            <div class="absolute bottom-0 w-full h-1/2 rounded-full" style="background:#7FB5A0;"></div>
                        </div>
                        <span class="text-[10px] uppercase font-bold text-on-surface-variant">Mon</span>
                        <span class="text-[9px] text-on-surface-variant opacity-60">😌</span>
                    </div>
                    {{-- Tue: Focused → sage/blue --}}
                    <div class="flex flex-col items-center gap-2" title="Tuesday · Focused">
                        <div class="w-12 h-24 bg-surface-variant rounded-full relative overflow-hidden">
                            <div class="absolute bottom-0 w-full h-2/3 rounded-full" style="background:#6B8CAE;"></div>
                        </div>
                        <span class="text-[10px] uppercase font-bold text-on-surface-variant">Tue</span>
                        <span class="text-[9px] text-on-surface-variant opacity-60">🌱</span>
                    </div>
                    {{-- Wed: Restless → amber --}}
                    <div class="flex flex-col items-center gap-2" title="Wednesday · Restless">
                        <div class="w-12 h-24 bg-surface-variant rounded-full relative overflow-hidden">
                            <div class="absolute bottom-0 w-full h-4/5 rounded-full" style="background:#D4A843;"></div>
                        </div>
                        <span class="text-[10px] uppercase font-bold text-on-surface-variant">Wed</span>
                        <span class="text-[9px] text-on-surface-variant opacity-60">🌪️</span>
                    </div>
                    {{-- Thu: Pensive → warm terra --}}
                    <div class="flex flex-col items-center gap-2" title="Thursday · Pensive">
                        <div class="w-12 h-24 bg-surface-variant rounded-full relative overflow-hidden">
                            <div class="absolute bottom-0 w-full h-1/3 rounded-full" style="background:#C4956A;"></div>
                        </div>
                        <span class="text-[10px] uppercase font-bold text-on-surface-variant">Thu</span>
                        <span class="text-[9px] text-on-surface-variant opacity-60">🕯️</span>
                    </div>
                    {{-- Fri: No entry --}}
                    <div class="flex flex-col items-center gap-2 opacity-30" title="Friday · No entry">
                        <div class="w-12 h-24 bg-surface-variant rounded-full relative overflow-hidden">
                        </div>
                        <span class="text-[10px] uppercase font-bold text-on-surface-variant">Fri</span>
                        <span class="text-[9px] text-on-surface-variant opacity-60">—</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <nav class="md:hidden fixed bottom-6 left-1/2 -translate-x-1/2 z-50 flex justify-around items-center p-2 bg-stone-100/70 dark:bg-stone-900/70 backdrop-blur-2xl rounded-full w-[90%] max-w-md mx-auto shadow-[0_20px_50px_rgba(57,56,50,0.06)]">
        <a class="flex flex-col items-center justify-center bg-emerald-100/50 dark:bg-emerald-900/30 text-emerald-900 dark:text-emerald-100 rounded-full px-5 py-2 glow-sm scale-95 duration-200 ease-in-out" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined" data-icon="spa" style="font-variation-settings: 'FILL' 1;">spa</span>
            <span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium">Home</span>
        </a>
        <a class="flex flex-col items-center justify-center text-stone-500 dark:text-stone-400 px-5 py-2 hover:bg-emerald-50/50 transition-all" href="{{ route('library') }}">
            <span class="material-symbols-outlined" data-icon="auto_stories">auto_stories</span>
            <span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium">Library</span>
        </a>
        <a class="flex flex-col items-center justify-center text-stone-500 dark:text-stone-400 px-5 py-2 hover:bg-emerald-50/50 transition-all" href="{{ route('session', ['technique' => 1]) }}">
            <span class="material-symbols-outlined" data-icon="air">air</span>
            <span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium">Breathe</span>
        </a>
        <a class="flex flex-col items-center justify-center text-stone-500 dark:text-stone-400 px-5 py-2 hover:bg-emerald-50/50 transition-all" href="{{ route('progress') }}">
            <span class="material-symbols-outlined" data-icon="bar_chart">bar_chart</span>
            <span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium">Stats</span>
        </a>
    </nav>
    <footer class="bg-stone-50 dark:bg-stone-950 py-12 px-8 border-t border-stone-200/20">
        <div class="flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto gap-4">
            <div class="font-['Noto_Serif'] text-lg text-emerald-800">Quietude Sanctuary</div>
            <div class="font-['Manrope'] text-sm text-stone-500">© 2024 The Digital Sanctuary. Breathe easy.</div>
            <div class="flex gap-6">
                <a class="text-stone-400 hover:text-emerald-600 transition-colors" href="#">Privacy</a>
                <a class="text-stone-400 hover:text-emerald-600 transition-colors" href="#">Terms</a>
                <a class="text-stone-400 hover:text-emerald-600 transition-colors" href="#">Support</a>
            </div>
        </div>
    </footer>
</body>
</html>
