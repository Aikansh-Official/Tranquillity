<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Sanctuary - Profile Settings</title>
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
                        "surface-container-high": "#f1ede6",
                        "primary-fixed": "#d6e9c3",
                        "surface-variant": "#ece8df",
                        "surface": "#fffbff",
                        "on-surface": "#393832",
                        "outline": "#838079",
                        "secondary-container": "#e7dff2",
                        "primary-container": "#d6e9c3",
                        "background": "#fffbff",
                        "on-background": "#393832",
                        "error": "#ae4025",
                        "on-primary": "#ffffff",
                        "on-secondary": "#ffffff",
                        "primary-dim": "#4d5d40",
                        "surface-container-low": "#fdf9f2",
                        "surface-dim": "#e6e2da",
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
        body { font-family: 'Manrope', sans-serif; background-color: #fffbff; color: #393832; }
        .glass-nav { backdrop-filter: blur(20px); }
        .fade-in { animation: fadeIn 0.5s ease forwards; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(12px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="bg-background min-h-screen text-on-surface">

    {{-- Header --}}
    <header class="fixed top-0 left-0 right-0 z-50 bg-stone-50/80 dark:bg-stone-950/80 backdrop-blur-xl">
        <div class="flex justify-between items-center w-full px-8 py-6 max-w-7xl mx-auto">
            <div class="font-['Noto_Serif'] text-2xl font-light text-emerald-900">Sanctuary</div>
            <nav class="hidden md:flex gap-10">
                <a class="text-stone-500 hover:text-emerald-700 ease-in-out duration-300 font-['Noto_Serif'] text-lg tracking-wide" href="{{ route('dashboard') }}">Dashboard</a>
                <a class="text-stone-500 hover:text-emerald-700 ease-in-out duration-300 font-['Noto_Serif'] text-lg tracking-wide" href="{{ route('library') }}">Library</a>
                <a class="text-stone-500 hover:text-emerald-700 ease-in-out duration-300 font-['Noto_Serif'] text-lg tracking-wide" href="{{ route('progress') }}">Progress</a>
            </nav>
            <div class="flex items-center gap-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="hover:bg-stone-200/40 rounded-full p-2 transition-all" title="Logout">
                        <span class="material-symbols-outlined text-emerald-800">logout</span>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="pt-32 pb-40 px-6 max-w-3xl mx-auto fade-in">
        <div class="mb-12">
            <h1 class="font-['Noto_Serif'] text-5xl font-light text-on-surface mb-3">Profile Settings</h1>
            <p class="text-on-surface-variant text-lg font-light italic">Manage your account and preferences.</p>
        </div>

        {{-- Avatar & Name --}}
        <div class="bg-surface-container-low rounded-xl p-8 mb-6 flex items-center gap-6">
            <div class="w-20 h-20 rounded-full bg-primary-container flex items-center justify-center text-3xl font-['Noto_Serif'] text-on-primary-container font-semibold select-none">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>
            <div>
                <p class="text-xl font-semibold text-on-surface">{{ Auth::user()->name }}</p>
                <p class="text-on-surface-variant text-sm">{{ Auth::user()->email }}</p>
                <p class="text-xs text-on-surface-variant mt-1 opacity-60">Member since {{ Auth::user()->created_at->format('F Y') }}</p>
            </div>
        </div>

        {{-- Update Name & Email --}}
        <div class="bg-surface-container-low rounded-xl p-8 mb-6">
            <h2 class="font-['Noto_Serif'] text-2xl mb-6 text-on-surface">Account Information</h2>
            <form method="POST" action="{{ route('profile.edit') }}" class="space-y-5">
                @csrf
                @method('PATCH')
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2" for="name">Full Name</label>
                    <input id="name" name="name" type="text" value="{{ Auth::user()->name }}"
                        class="w-full bg-surface-variant/40 border border-outline-variant rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/40 transition"
                        placeholder="Your name">
                </div>
                <div>
                    <label class="block text-sm font-medium text-on-surface-variant mb-2" for="email">Email Address</label>
                    <input id="email" name="email" type="email" value="{{ Auth::user()->email }}"
                        class="w-full bg-surface-variant/40 border border-outline-variant rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/40 transition"
                        placeholder="you@example.com">
                </div>
                <button type="submit"
                    class="bg-primary text-white px-8 py-3 rounded-full font-medium hover:opacity-90 transition-opacity">
                    Save Changes
                </button>
            </form>
        </div>

        {{-- Logout --}}
        <div class="bg-surface-container-low rounded-xl p-8">
            <h2 class="font-['Noto_Serif'] text-2xl mb-2 text-on-surface">Sign Out</h2>
            <p class="text-on-surface-variant text-sm mb-6">Sign out from your Sanctuary account on this device.</p>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="border border-error text-error px-8 py-3 rounded-full font-medium hover:bg-error hover:text-white transition-all">
                    Sign Out
                </button>
            </form>
        </div>
    </main>

    {{-- Mobile bottom nav --}}
    <nav class="md:hidden fixed bottom-6 left-1/2 -translate-x-1/2 z-50 flex justify-around items-center p-2 bg-stone-100/70 backdrop-blur-2xl rounded-full w-[90%] max-w-md mx-auto shadow-[0_20px_50px_rgba(57,56,50,0.06)]">
        <a class="flex flex-col items-center justify-center text-stone-500 px-5 py-2 hover:bg-emerald-50/50 transition-all rounded-full" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined">spa</span>
            <span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium">Home</span>
        </a>
        <a class="flex flex-col items-center justify-center text-stone-500 px-5 py-2 hover:bg-emerald-50/50 transition-all rounded-full" href="{{ route('library') }}">
            <span class="material-symbols-outlined">auto_stories</span>
            <span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium">Library</span>
        </a>
        <a class="flex flex-col items-center justify-center text-stone-500 px-5 py-2 hover:bg-emerald-50/50 transition-all rounded-full" href="{{ route('progress') }}">
            <span class="material-symbols-outlined">bar_chart</span>
            <span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium">Stats</span>
        </a>
        <a class="flex flex-col items-center justify-center bg-emerald-100/50 text-emerald-900 rounded-full px-5 py-2" href="{{ route('profile.edit') }}">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">settings</span>
            <span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium">Profile</span>
        </a>
    </nav>

</body>
</html>
