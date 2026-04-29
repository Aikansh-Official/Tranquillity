<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Quietude Sanctuary - Welcome Home</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&family=Manrope:wght@300;400;500;600&display=swap" rel="stylesheet"/>
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
              },
            },
          },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .ethereal-bg {
            background: linear-gradient(135deg, #fdf9f2 0%, #fffbff 50%, #e7dff2 100%);
        }
        .glass-panel {
            background: rgba(255, 251, 255, 0.6);
            backdrop-filter: blur(32px);
            -webkit-backdrop-filter: blur(32px);
        }
        .input-focus-ring:focus {
            box-shadow: 0 0 0 2px rgba(89, 105, 75, 0.1);
        }
    </style>
</head>
<body class="bg-background font-body text-on-background min-h-screen flex items-center justify-center ethereal-bg overflow-hidden relative">
    <div class="absolute top-[-10%] left-[-5%] w-[40vw] h-[40vw] bg-primary-container/20 rounded-full blur-[100px]"></div>
    <div class="absolute bottom-[-10%] right-[-5%] w-[30vw] h-[30vw] bg-secondary-container/30 rounded-full blur-[100px]"></div>
    <main class="w-full max-w-7xl mx-auto px-6 relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="hidden lg:flex lg:col-span-6 flex-col space-y-8 pr-12">
            <div class="space-y-4">
                <span class="text-secondary font-label tracking-[0.2em] uppercase text-xs">A moment of pause</span>
                <h1 class="text-6xl font-display leading-[1.1] text-on-background">
                    Your sanctuary <br/>
                    <span class="italic text-primary">awaits.</span>
                </h1>
            </div>
            <p class="text-lg text-on-surface-variant font-body leading-relaxed max-w-md">
                Step away from the noise and return to your center. Quietude is more than a tool—it's a digital breath of fresh air designed for your peace of mind.
            </p>
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 rounded-full flex items-center justify-center bg-primary-container/40">
                    <span class="material-symbols-outlined text-primary">spa</span>
                </div>
                <span class="text-sm font-label text-secondary-dim tracking-wide italic">"Quietude Sanctuary"</span>
            </div>
        </div>
        <div class="lg:col-span-6 flex justify-center lg:justify-end">
            <div class="glass-panel w-full max-w-md p-10 lg:p-12 rounded-xl shadow-2xl shadow-on-surface/5 flex flex-col items-center">
                <div class="mb-12 text-center">
                    <h2 class="font-display italic text-3xl text-on-background mb-2">Welcome home</h2>
                    <p class="text-on-surface-variant font-body text-sm">Please sign in to continue your journey</p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="w-full space-y-6">
                    @csrf
                    <div class="space-y-2">
                        <label class="text-xs font-label uppercase tracking-widest text-secondary-dim px-2" for="email">Email Address</label>
                        <input class="w-full h-14 px-6 rounded-lg bg-surface-container-high border-none text-on-surface focus:ring-2 focus:ring-primary/20 transition-all duration-300 font-body placeholder:text-outline/50" id="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="hello@example.com" type="email"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-error text-xs" />
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between items-center px-2">
                            <label class="text-xs font-label uppercase tracking-widest text-secondary-dim" for="password">Password</label>
                            @if (Route::has('password.request'))
                                <a class="text-xs font-label text-primary hover:text-primary-dim transition-colors" href="{{ route('password.request') }}">Forgot password?</a>
                            @endif
                        </div>
                        <input class="w-full h-14 px-6 rounded-lg bg-surface-container-high border-none text-on-surface focus:ring-2 focus:ring-primary/20 transition-all duration-300 font-body placeholder:text-outline/50" id="password" name="password" required autocomplete="current-password" placeholder="••••••••" type="password"/>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-error text-xs" />
                    </div>
                    <div class="pt-4">
                        <button type="submit" class="w-full h-14 rounded-full bg-primary text-on-primary font-label font-semibold tracking-wide text-sm shadow-lg shadow-primary/10 hover:shadow-primary/20 hover:bg-primary-dim active:scale-[0.98] transition-all duration-300 flex items-center justify-center space-x-2">
                            <span>Enter the Sanctuary</span>
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </button>
                    </div>
                </form>
                <div class="mt-10 pt-8 border-t border-outline-variant/10 w-full text-center">
                    <p class="text-sm font-body text-on-surface-variant">
                        New to the sanctuary? 
                        <a class="text-primary font-semibold ml-1 hover:underline underline-offset-4" href="{{ route('register') }}">Create an account</a>
                    </p>
                </div>
                <div class="mt-8 flex justify-center space-x-1 opacity-20">
                    <div class="w-1.5 h-1.5 rounded-full bg-secondary"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-secondary mx-2"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-secondary"></div>
                </div>
            </div>
        </div>
    </main>
    <div class="absolute inset-0 w-full h-full opacity-20 z-0 pointer-events-none">
        <img class="w-full h-full object-cover" data-alt="Soft focused photograph of morning mist over a calm lake with tall grass in the foreground in sage and lavender tones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2XJhd_Zhxtnj7trfaMcxJI0sHo_o8uxLPXF83c44Iy2lzo1TufwtKkVwSlzPPNiy-m4SGoCCCtkX2QXUY6T_rYmpFamUGcBxPxHD9LMZri5yoRHMclpGb3PlWk1Ugi4ulNBDRV18udR-stAHSXzVIMZ0IcDT6YyNLDNXCSc5DQKmwuZXLx6e7LPOc-PRJPzpVo0_YoQD2pd4y_RLOFPUSs6orC6frl-sjFSIaj4TrmVgh6_8TLoRxCasb8lMol8_3zyxR5lcj05w"/>
    </div>
    <div class="fixed bottom-8 left-1/2 -translate-x-1/2 text-[11px] font-label text-outline tracking-[0.2em] uppercase pointer-events-none opacity-50">
        Quietude Sanctuary © 2024
    </div>
</body>
</html>
