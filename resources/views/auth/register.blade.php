<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Serenity | Quietude Sanctuary</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&family=Manrope:wght@300;400;600;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-error-container": "#6e1400",
                        "on-background": "#393832",
                        "inverse-primary": "#eafdd6",
                        "error-dim": "#791903",
                        "primary-container": "#d6e9c3",
                        "on-tertiary-fixed-variant": "#6b5c51",
                        "on-primary-fixed-variant": "#506043",
                        "tertiary-dim": "#64554a",
                        "secondary-container": "#e7dff2",
                        "secondary-fixed": "#e7dff2",
                        "on-secondary-fixed-variant": "#5e5968",
                        "surface-dim": "#e6e2da",
                        "secondary": "#676271",
                        "surface-container-low": "#fdf9f2",
                        "on-surface-variant": "#66645e",
                        "surface-container": "#f7f3ec",
                        "on-secondary-fixed": "#413d4b",
                        "primary-fixed-dim": "#c8dbb6",
                        "outline": "#838079",
                        "surface-container-lowest": "#ffffff",
                        "inverse-surface": "#0f0e0c",
                        "surface-variant": "#ece8df",
                        "outline-variant": "#bcb9b1",
                        "on-error": "#ffffff",
                        "on-primary-fixed": "#344429",
                        "primary-fixed": "#d6e9c3",
                        "on-tertiary-container": "#615247",
                        "surface-container-high": "#f1ede6",
                        "tertiary-container": "#fae4d6",
                        "surface-container-highest": "#ece8df",
                        "surface-bright": "#fffbff",
                        "surface-tint": "#59694b",
                        "on-secondary": "#ffffff",
                        "on-surface": "#393832",
                        "on-primary-container": "#46563a",
                        "on-tertiary-fixed": "#4e4036",
                        "tertiary-fixed": "#fae4d6",
                        "tertiary": "#716156",
                        "secondary-fixed-dim": "#d8d1e3",
                        "secondary-dim": "#5a5665",
                        "error-container": "#fd795a",
                        "on-primary": "#ffffff",
                        "inverse-on-surface": "#9f9c98",
                        "tertiary-fixed-dim": "#ebd6c8",
                        "primary-dim": "#4d5d40",
                        "on-tertiary": "#ffffff",
                        "primary": "#59694b",
                        "on-secondary-container": "#544f5e",
                        "background": "#fffbff",
                        "error": "#ae4025",
                        "surface": "#fffbff"
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
        .glass-panel {
            background: rgba(255, 251, 255, 0.7);
            backdrop-filter: blur(40px);
            -webkit-backdrop-filter: blur(40px);
        }
        .ambient-glow {
            box-shadow: 0 40px 60px -15px rgba(57, 56, 50, 0.06);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body selection:bg-primary-container selection:text-on-primary-container min-h-screen overflow-x-hidden">
    <header class="fixed top-0 w-full z-50 bg-white/70 dark:bg-stone-900/70 backdrop-blur-xl">
        <nav class="flex justify-between items-center px-8 py-4 w-full max-w-7xl mx-auto">
            <div class="text-2xl font-serif text-sage-800 dark:text-sage-100 font-noto-serif italic">
                Serenity
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}" class="p-2 rounded-full hover:bg-stone-100/50 dark:hover:bg-stone-800/50 transition-colors ease-in-out duration-300">
                    <span class="material-symbols-outlined text-stone-500 dark:text-stone-400">account_circle</span>
                </a>
            </div>
        </nav>
    </header>
    <main class="relative min-h-screen grid grid-cols-1 lg:grid-cols-12">
        <section class="hidden lg:block lg:col-span-7 relative h-screen overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent to-background z-10"></div>
            <img alt="Close-up of a single green leaf with crystal clear morning dew drops reflecting soft sunlight in a serene forest setting" class="w-full h-full object-cover grayscale-[20%] opacity-90" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBSymFR_PYV_ac2FIqtR2PwymgWda4Cy1U1YwMFXclo2tvftOMedo77U_igf4gTHHX6bLXIKum4XBdJqT-GcFftaHWWDm0tBA-tsHLnZZOz3slqqc_aFTdwJ9NdVI6HvN8oDN_pa3soI05xPTvgmFVarOb50arZtiflyVqF20wdtNHw4OQMPMUWLXQPUksTufE8cJ0teA6C5meTqLzIK9AEYU5f94mzadoWFPUAvh4QreU7TxZcHqqi2DfZAlvCpT29QbAcMrN2PF0"/>
            <div class="absolute bottom-24 left-16 z-20 max-w-md">
                <h2 class="font-display text-5xl text-on-surface leading-tight mb-6">
                    A space for your <span class="italic text-primary">inner quiet</span>.
                </h2>
                <p class="text-secondary text-lg leading-relaxed font-light">
                    Reconnect with the rhythm of your breath and the stillness of the present moment.
                </p>
            </div>
        </section>
        <section class="col-span-1 lg:col-span-5 flex items-center justify-center px-6 py-20 lg:py-0 bg-surface-container-low lg:bg-transparent">
            <div class="w-full max-w-md lg:ml-[-4rem] z-30">
                <div class="glass-panel p-10 lg:p-12 rounded-xl ambient-glow">
                    <header class="mb-12">
                        <span class="text-primary font-label text-sm tracking-[0.2em] uppercase mb-4 block">Welcome to Quietude Sanctuary</span>
                        <h1 class="font-display text-4xl text-on-surface mb-2">Create Account</h1>
                        <p class="text-on-surface-variant font-light">Enter your details to begin your transformation.</p>
                    </header>
                    <form method="POST" action="{{ route('register') }}" class="space-y-8">
                        @csrf
                        <div class="space-y-2">
                            <label class="block text-xs font-label font-semibold text-secondary ml-1" for="name">Full Name</label>
                            <input class="w-full px-6 py-4 bg-surface-container-high border-none rounded-md focus:ring-0 focus:bg-surface-container-highest transition-all duration-300 placeholder:text-outline-variant text-on-surface" id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Evelyn Thorne" type="text"/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-error text-xs" />
                        </div>
                        <div class="space-y-2">
                            <label class="block text-xs font-label font-semibold text-secondary ml-1" for="email">Email Address</label>
                            <input class="w-full px-6 py-4 bg-surface-container-high border-none rounded-md focus:ring-0 focus:bg-surface-container-highest transition-all duration-300 placeholder:text-outline-variant text-on-surface" id="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="hello@quietude.com" type="email"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-error text-xs" />
                        </div>
                        <div class="space-y-2">
                            <label class="block text-xs font-label font-semibold text-secondary ml-1" for="password">Secure Password</label>
                            <input class="w-full px-6 py-4 bg-surface-container-high border-none rounded-md focus:ring-0 focus:bg-surface-container-highest transition-all duration-300 placeholder:text-outline-variant text-on-surface" id="password" name="password" required autocomplete="new-password" placeholder="••••••••••••" type="password"/>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-error text-xs" />
                        </div>
                        <div class="space-y-2">
                            <label class="block text-xs font-label font-semibold text-secondary ml-1" for="password_confirmation">Confirm Password</label>
                            <input class="w-full px-6 py-4 bg-surface-container-high border-none rounded-md focus:ring-0 focus:bg-surface-container-highest transition-all duration-300 placeholder:text-outline-variant text-on-surface" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••••••" type="password"/>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-error text-xs" />
                        </div>
                        <div class="pt-6">
                            <button class="w-full py-5 bg-gradient-to-r from-primary to-primary-dim text-on-primary rounded-full font-label font-semibold tracking-wide hover:opacity-90 active:scale-[0.98] transition-all duration-300 shadow-xl shadow-primary/10" type="submit">
                                Begin your journey
                            </button>
                        </div>
                    </form>
                    <footer class="mt-10 text-center">
                        <p class="text-on-surface-variant text-sm font-light">
                            Already have an account? 
                            <a class="text-primary font-semibold hover:underline decoration-primary-container underline-offset-4 transition-all" href="{{ route('login') }}">Login</a>
                        </p>
                    </footer>
                </div>
                <div class="mt-12 text-center opacity-40">
                    <span class="material-symbols-outlined text-4xl text-tertiary">spa</span>
                </div>
            </div>
        </section>
    </main>
    <div class="lg:hidden w-full h-64 relative">
        <img alt="Soft light reflecting on calm water ripples in a circular pattern, creating a meditative and peaceful atmosphere" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD23d9JjarWzEOiGq_yhSaYUrgryFUEUpZzXAxxyOre5JNaQFYw8UD9eaU5L-r8LVy81GkZ382X9ma-wKWeoUfLFB7tC0B-CWEcdBuXahuLC66jAz95bLatqVaJspnz9AFMX_flo9weWPagmrswKN2Yfs8jjK1D_ypEYWNcmPx0WhIRtAENk1DJ8UfV01sTLaoX_LOarNMcPOrpW8RXMVrpphWXR24RmztxSN3hTsfDj5mtPSOWldcvSNIkZ5Hb_xOnzYUI5eSX1Vo"/>
        <div class="absolute inset-0 bg-gradient-to-t from-background to-transparent"></div>
    </div>
</body>
</html>
