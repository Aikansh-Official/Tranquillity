<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sanctuary - Journal History</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
                }
            }
        }
    </script>
<style>
        body { font-family: 'Manrope', sans-serif; }
        .font-serif { font-family: 'Noto Serif', serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .ambient-shadow {
            box-shadow: 0 10px 40px -10px rgba(57, 56, 50, 0.06);
        }
        /* Mood dot colors */
        .dot-calm      { background: #7FB5A0; }
        .dot-focused   { background: #6B8CAE; }
        .dot-restless  { background: #D4A843; }
        .dot-pensive   { background: #C4956A; }
        .dot-inspired  { background: #9B7EC8; }
        .dot-default   { background: #59694b; }
        /* Reflection quote styling */
        .reflection-quote {
            background: #F5F0E8;
            border-left: 4px solid #7FB5A0;
            padding: 1.5rem;
        }
        /* Emotional Resonance card accent */
        .resonance-card {
            border-left: 4px solid #7FB5A0;
            background: linear-gradient(135deg, #f7f3ec 0%, #f0ede8 100%);
        }
    </style>
</head>
<body class="bg-surface text-on-surface selection:bg-primary-container selection:text-on-primary-container">
<!-- TopAppBar -->
<header class="bg-stone-50/80 dark:bg-stone-950/80 backdrop-blur-xl dock full-width top-0 sticky z-40">
<div class="flex justify-between items-center w-full px-8 py-4 max-w-screen-2xl mx-auto">
<div class="font-serif italic text-2xl text-emerald-900 dark:text-emerald-100">Sanctuary</div>
<nav class="hidden md:flex items-center gap-10 font-serif text-lg tracking-tight">
<a class="text-stone-500 dark:text-stone-400 hover:text-emerald-700 ease-in-out duration-300" href="{{ route('dashboard') }}">Dashboard</a>
<a class="text-stone-500 dark:text-stone-400 hover:text-emerald-700 ease-in-out duration-300" href="{{ route('library') }}">Library</a>
<a class="text-emerald-800 dark:text-emerald-400 font-semibold border-b-2 border-emerald-800/30 font-['Noto_Serif'] ease-in-out duration-300" href="{{ route('progress') }}">Progress</a>
</nav>
<div class="flex items-center gap-4">
<a href="{{ route('profile.edit') }}" class="hover:bg-stone-200/40 dark:hover:bg-stone-800/40 rounded-full p-2 transition-colors" title="Profile Settings">
<span class="material-symbols-outlined text-stone-600">account_circle</span>
</a>
</div>
</div>
</header>
<main class="max-w-screen-2xl mx-auto px-6 md:px-12 py-12 pb-32">
<!-- Hero Title Section -->
<section class="mb-16 md:flex items-end justify-between gap-8">
<div class="max-w-2xl">
<h1 class="font-headline text-5xl md:text-7xl text-on-surface leading-tight mb-6">Your Journey in <span class="italic text-primary">Stillness</span></h1>
<p class="font-body text-lg text-on-surface-variant max-w-lg">A monthly map of your reflections, tracing the subtle shifts in your emotional landscape.</p>
</div>
<div class="mt-8 md:mt-0 flex items-center gap-4 bg-surface-container-low px-6 py-3 rounded-full">
<a href="{{ route('progress', ['date' => $selectedDate->copy()->subMonth()->format('Y-m-d')]) }}" class="material-symbols-outlined text-primary hover:scale-110">chevron_left</a>
<span class="font-headline text-xl px-4">{{ $selectedDate->format('F Y') }}</span>
<a href="{{ route('progress', ['date' => $selectedDate->copy()->addMonth()->format('Y-m-d')]) }}" class="material-symbols-outlined text-primary hover:scale-110">chevron_right</a>
</div>
</section>
<!-- Main Layout: Asymmetric Bento Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Calendar Section -->
<div class="lg:col-span-7 bg-surface-container-low rounded-xl p-8 ambient-shadow">
<div class="grid grid-cols-7 gap-y-12 gap-x-2 text-center">
<!-- Weekdays -->
<div class="font-label text-xs uppercase tracking-widest text-on-surface-variant opacity-60">Mon</div>
<div class="font-label text-xs uppercase tracking-widest text-on-surface-variant opacity-60">Tue</div>
<div class="font-label text-xs uppercase tracking-widest text-on-surface-variant opacity-60">Wed</div>
<div class="font-label text-xs uppercase tracking-widest text-on-surface-variant opacity-60">Thu</div>
<div class="font-label text-xs uppercase tracking-widest text-on-surface-variant opacity-60">Fri</div>
<div class="font-label text-xs uppercase tracking-widest text-on-surface-variant opacity-60">Sat</div>
<div class="font-label text-xs uppercase tracking-widest text-on-surface-variant opacity-60">Sun</div>

@php
    $startDayOfWeek = $startOfMonth->dayOfWeekIso;
    $daysInMonth = $startOfMonth->daysInMonth;
    $endDayOfWeek = $endOfMonth->dayOfWeekIso;
    $paddingEnd = 7 - $endDayOfWeek;
@endphp

@for ($i = 1; $i < $startDayOfWeek; $i++)
    @php $prevDate = $startOfMonth->copy()->subDays($startDayOfWeek - $i); @endphp
    <a href="{{ route('progress', ['date' => $prevDate->format('Y-m-d')]) }}" class="aspect-square flex flex-col items-center justify-center opacity-20 hover:opacity-100 transition-all">
        <span class="font-body text-lg">{{ $prevDate->day }}</span>
    </a>
@endfor

@for ($day = 1; $day <= $daysInMonth; $day++)
    @php 
        $currentDateLoop = $startOfMonth->copy()->addDays($day - 1);
        $logForDay = $monthLogs->filter(function($log) use ($currentDateLoop) {
            return $log->created_at->isSameDay($currentDateLoop);
        })->last();
        $isSelected = $currentDateLoop->isSameDay($selectedDate);
    @endphp
    <a href="{{ route('progress', ['date' => $currentDateLoop->format('Y-m-d')]) }}" class="aspect-square group flex flex-col items-center justify-center relative rounded-lg transition-all {{ $isSelected ? 'bg-primary-container text-on-primary-container ambient-shadow' : 'hover:bg-surface' }}">
        <span class="font-body text-lg {{ $isSelected ? 'font-bold' : '' }}">{{ $day }}</span>
        @if($logForDay)
            @php
                $dotClass = match(strtolower($logForDay->mood_label ?? '')) {
                    'calm'     => 'dot-calm',
                    'focused'  => 'dot-focused',
                    'restless' => 'dot-restless',
                    'pensive'  => 'dot-pensive',
                    'inspired' => 'dot-inspired',
                    default    => 'dot-default',
                };
            @endphp
            <span class="w-2 h-2 rounded-full {{ $dotClass }} mt-1 shadow-sm"></span>
        @endif
    </a>
@endfor

@for ($i = 1; $i <= $paddingEnd; $i++)
    @php $nextDate = $endOfMonth->copy()->addDays($i); @endphp
    <a href="{{ route('progress', ['date' => $nextDate->format('Y-m-d')]) }}" class="aspect-square flex flex-col items-center justify-center opacity-20 hover:opacity-100 transition-all">
        <span class="font-body text-lg">{{ $nextDate->day }}</span>
    </a>
@endfor

</div>
</div>
<!-- Detail Reflection Map Section -->
<div class="lg:col-span-5 flex flex-col gap-8">
<!-- Reflection Card -->
<div class="bg-surface-container-highest rounded-xl p-10 ambient-shadow flex flex-col h-full">
<div class="flex justify-between items-start mb-8">
<div>
<p class="font-label text-sm uppercase tracking-tighter text-secondary mb-1">{{ $selectedDate->format('l, F jS') }}</p>
@if($selectedLog)
    <h2 class="font-headline text-3xl">Daily Reflection</h2>
@else
    <h2 class="font-headline text-3xl">No Entry Found</h2>
@endif
</div>
@if($selectedLog && $selectedLog->mood_label)
<div class="flex items-center gap-2 bg-primary-container/40 px-3 py-1.5 rounded-full">
<span class="material-symbols-outlined text-primary scale-75" style="font-variation-settings: 'FILL' 1;">spa</span>
<span class="font-label text-xs font-bold text-on-primary-container">{{ $selectedLog->mood_label }}</span>
</div>
@endif
</div>

@if($selectedLog)
<div class="flex-1">
@php
    $moodAccent = match(strtolower($selectedLog->mood_label ?? '')) {
        'calm'     => '#7FB5A0',
        'focused'  => '#6B8CAE',
        'restless' => '#D4A843',
        'pensive'  => '#C4956A',
        'inspired' => '#9B7EC8',
        default    => '#59694b',
    };
@endphp
<div class="reflection-quote p-6 rounded-lg italic font-serif text-on-surface-variant leading-relaxed mb-8" style="border-left-color: {{ $moodAccent }};">
    {{ $selectedLog->reflection_note ?: 'No note captured for this day.' }}
</div>
<!-- Reflection Map Visual -->
<div class="relative py-8">
<h3 class="font-label text-xs uppercase tracking-widest text-on-surface-variant mb-6">Reflection Map</h3>
<div class="h-40 w-full relative flex items-center justify-center">
<!-- Abstract SVG Visual for Reflection Map -->
<svg class="w-full h-full opacity-60" viewbox="0 0 400 150">
<path d="M0,100 C100,20 200,140 400,60" fill="none" stroke="#59694b" stroke-dasharray="8 4" stroke-width="2"></path>
<circle cx="50" cy="90" fill="#59694b" r="4"></circle>
<circle class="animate-pulse" cx="150" cy="50" fill="#59694b" r="6"></circle>
<circle cx="280" cy="110" fill="#59694b" r="4"></circle>
<circle cx="380" cy="70" fill="#59694b" r="4"></circle>
</svg>
<div class="absolute inset-0 flex justify-around items-end">
<div class="flex flex-col items-center">
<span class="text-[10px] font-label text-on-surface-variant mb-1">Stress Level</span>
<div class="w-2 rounded-full bg-primary transition-all duration-1000" style="height: {{ max(10, $selectedLog->stress_score * 12) }}px"></div>
<span class="text-[10px] font-bold text-primary mt-1">{{ $selectedLog->stress_score }} / 10</span>
</div>
</div>
</div>
</div>
</div>
@else
<div class="flex-1 flex flex-col justify-center items-center opacity-60">
    <span class="material-symbols-outlined text-6xl text-secondary mb-4">edit_note</span>
    <p class="font-body text-center text-on-surface-variant">There is no reflection recorded for this day.<br><a href="{{ route('dashboard') }}" class="text-primary hover:underline">Return to dashboard</a> to capture today's thought.</p>
</div>
@endif
</div>
<!-- Emotional Resonance Card -->
<div class="resonance-card rounded-lg p-6 flex items-center gap-6">
<div class="w-16 h-16 rounded-full bg-white/60 flex items-center justify-center shadow-sm flex-shrink-0">
<span class="material-symbols-outlined text-3xl" style="color:#7FB5A0;">insights</span>
</div>
<div>
<p class="font-headline text-lg text-on-surface">Emotional Resonance</p>
<p class="font-body text-sm text-on-surface-variant">You have captured <strong>{{ $monthLogs->count() }}</strong> reflection(s) this month. Each one is a step toward clarity.</p>
</div>
</div>
</div>
</div>
<!-- Get Help Section -->
<section class="mt-24 flex flex-col items-center justify-center py-16">
    <p class="font-body text-sm uppercase tracking-widest text-on-surface-variant mb-6 opacity-60">Need support?</p>
    <button id="get-help-btn" class="get-help-btn font-['Noto_Serif'] text-3xl md:text-4xl font-light text-on-surface group relative overflow-hidden px-12 py-6 rounded-full border border-outline-variant/40 hover:border-primary/60 transition-all duration-700 hover:shadow-[0_0_60px_rgba(89,105,75,0.15)]">
        <span class="relative z-10 flex items-center gap-4 transition-all duration-500 group-hover:tracking-widest">
            <span class="heart-icon material-symbols-outlined text-2xl text-primary opacity-70 group-hover:opacity-100 transition-all duration-500 group-hover:rotate-12" style="font-variation-settings:'FILL' 0,'wght' 200;">favorite</span>
            Get Help
            <span class="material-symbols-outlined text-xl text-primary opacity-0 group-hover:opacity-100 transition-all duration-500 translate-x-[-8px] group-hover:translate-x-0">arrow_forward</span>
        </span>
        <span class="absolute inset-0 bg-primary-container/0 group-hover:bg-primary-container/40 transition-all duration-700 rounded-full"></span>
    </button>
    <p class="font-body text-xs text-on-surface-variant mt-6 opacity-40 tracking-wide">You are not alone in your journey.</p>
</section>
<style>
    .get-help-btn {
        animation: breathe 4s ease-in-out infinite;
    }
    @keyframes breathe {
        0%, 100% { box-shadow: 0 0 0 0 rgba(89,105,75,0.0); }
        50% { box-shadow: 0 0 30px 8px rgba(89,105,75,0.08); }
    }

    /* Heart glow on hover */
    .get-help-btn .heart-icon {
        font-variation-settings: 'FILL' 0, 'wght' 200;
        transition: color 0.4s ease, text-shadow 0.4s ease, font-variation-settings 0.4s ease;
    }
    .get-help-btn:hover .heart-icon {
        color: #e53e3e !important;
        font-variation-settings: 'FILL' 1, 'wght' 400;
        text-shadow:
            0 0 8px rgba(229, 62, 62, 0.8),
            0 0 20px rgba(229, 62, 62, 0.5),
            0 0 40px rgba(229, 62, 62, 0.3);
        opacity: 1 !important;
    }
</style>
</main>
<!-- BottomNavBar -->
<nav class="md:hidden fixed bottom-6 left-1/2 -translate-x-1/2 z-50 flex justify-around items-center p-2 bg-stone-100/70 dark:bg-stone-900/70 backdrop-blur-2xl rounded-full w-[90%] max-w-md mx-auto shadow-[0_20px_50px_rgba(57,56,50,0.06)]">
    <a href="{{ route('dashboard') }}" class="flex flex-col items-center justify-center text-stone-500 dark:text-stone-400 px-5 py-2 hover:bg-emerald-50/50 transition-all rounded-full">
        <span class="material-symbols-outlined">spa</span>
        <span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium">Home</span>
    </a>
    <a href="{{ route('library') }}" class="flex flex-col items-center justify-center text-stone-500 dark:text-stone-400 px-5 py-2 hover:bg-emerald-50/50 transition-all rounded-full">
        <span class="material-symbols-outlined">auto_stories</span>
        <span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium">Library</span>
    </a>
    <a href="{{ route('session', 1) }}" class="flex flex-col items-center justify-center text-stone-500 dark:text-stone-400 px-5 py-2 hover:bg-emerald-50/50 transition-all rounded-full">
        <span class="material-symbols-outlined">air</span>
        <span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium">Breathe</span>
    </a>
    <a href="{{ route('progress') }}" class="flex flex-col items-center justify-center bg-emerald-100/50 dark:bg-emerald-900/30 text-emerald-900 dark:text-emerald-100 rounded-full px-5 py-2 glow-sm scale-95">
        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">bar_chart</span>
        <span class="font-['Manrope'] text-[11px] uppercase tracking-widest font-medium">Stats</span>
    </a>
</nav>

<!-- Floating Chatbox -->
<div id="sanctuary-chatbox" class="fixed bottom-6 right-6 w-[380px] h-[520px] bg-surface rounded-2xl shadow-2xl flex flex-col overflow-hidden opacity-0 pointer-events-none transition-all duration-500 translate-y-4 z-50 border border-outline-variant/30">
    <!-- Header -->
    <div class="bg-primary-container px-4 py-3 flex items-center justify-between border-b border-primary-container/50">
        <div class="flex items-center gap-2 text-on-primary-container">
            <span class="material-symbols-outlined text-primary">eco</span>
            <span class="font-serif font-medium text-lg">Sanctuary Guide</span>
        </div>
        <button id="close-chat-btn" class="text-on-primary-container/70 hover:text-on-primary-container transition-colors">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>
    
    <!-- Messages Area -->
    <div id="chat-messages" class="flex-1 overflow-y-auto p-4 flex flex-col gap-4 bg-surface-container-lowest font-body">
        <!-- Initial greeting -->
        <div class="flex items-end gap-2 self-start max-w-[85%]">
            <div class="w-8 h-8 rounded-full bg-primary-container flex flex-shrink-0 items-center justify-center text-primary">
                <span class="material-symbols-outlined text-[18px]">eco</span>
            </div>
            <div class="bg-surface-container px-4 py-2 rounded-2xl rounded-bl-sm text-on-surface text-sm leading-relaxed shadow-sm">
                Hello. I am Sage, your Sanctuary guide. How are you feeling right now?
            </div>
        </div>
    </div>
    
    <!-- Typing Indicator (Hidden by default) -->
    <div id="typing-indicator" class="hidden px-4 pb-2 bg-surface-container-lowest">
        <div class="flex items-end gap-2 self-start max-w-[85%]">
            <div class="w-8 h-8 rounded-full bg-primary-container flex flex-shrink-0 items-center justify-center text-primary">
                <span class="material-symbols-outlined text-[18px]">eco</span>
            </div>
            <div class="bg-surface-container px-4 py-3 rounded-2xl rounded-bl-sm flex items-center gap-1 shadow-sm">
                <span class="w-1.5 h-1.5 bg-primary/60 rounded-full animate-bounce"></span>
                <span class="w-1.5 h-1.5 bg-primary/60 rounded-full animate-bounce" style="animation-delay: 0.15s"></span>
                <span class="w-1.5 h-1.5 bg-primary/60 rounded-full animate-bounce" style="animation-delay: 0.3s"></span>
            </div>
        </div>
    </div>

    <!-- Input Area -->
    <div class="p-3 bg-surface border-t border-outline-variant/20">
        <form id="chat-form" class="flex items-center gap-2">
            <input type="text" id="chat-input" class="flex-1 bg-surface-container-low border border-outline-variant/30 rounded-full px-4 py-2 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-on-surface placeholder:text-on-surface-variant/50 transition-all" placeholder="Type a message..." autocomplete="off">
            <button type="submit" class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center hover:bg-primary-dim transition-colors shadow-sm flex-shrink-0">
                <span class="material-symbols-outlined text-lg translate-x-[1px]">send</span>
            </button>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const getHelpBtn = document.getElementById('get-help-btn');
    const chatbox = document.getElementById('sanctuary-chatbox');
    const closeChatBtn = document.getElementById('close-chat-btn');
    const chatForm = document.getElementById('chat-form');
    const chatInput = document.getElementById('chat-input');
    const chatMessages = document.getElementById('chat-messages');
    const typingIndicator = document.getElementById('typing-indicator');
    
    // CSRF Token setup for fetch
    const csrfToken = '{{ csrf_token() }}';
    
    // Audio setup
    const hoverSound = new Audio('/sounds/hover.m4a');
    hoverSound.volume = 0.2;
    
    // Toggle Chatbox
    getHelpBtn.addEventListener('click', (e) => {
        e.preventDefault();
        chatbox.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-4');
        setTimeout(() => chatInput.focus(), 300);
    });
    
    closeChatBtn.addEventListener('click', () => {
        chatbox.classList.add('opacity-0', 'pointer-events-none', 'translate-y-4');
    });
    
    // Auto-scroll
    function scrollToBottom() {
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
    
    // Add message to UI
    function addMessage(text, isUser = false) {
        const msgDiv = document.createElement('div');
        msgDiv.className = `flex items-end gap-2 max-w-[85%] ${isUser ? 'self-end flex-row-reverse' : 'self-start'}`;
        
        const avatarHtml = isUser 
            ? '' 
            : `<div class="w-8 h-8 rounded-full bg-primary-container flex flex-shrink-0 items-center justify-center text-primary">
                <span class="material-symbols-outlined text-[18px]">eco</span>
               </div>`;
               
        const bubbleStyle = isUser
            ? 'bg-[#3D5A3E] text-white rounded-2xl rounded-br-sm px-4 py-2 text-sm shadow-sm'
            : 'bg-[#F5F0E8] text-[#393832] rounded-2xl rounded-bl-sm px-4 py-2 text-sm leading-relaxed shadow-sm';
            
        msgDiv.innerHTML = `
            ${avatarHtml}
            <div class="${bubbleStyle}">${escapeHtml(text)}</div>
        `;
        
        chatMessages.appendChild(msgDiv);
        scrollToBottom();
        
        if (!isUser) {
            hoverSound.play().catch(e => {}); // Ignore error if sound doesn't exist
        }
    }
    
    // Simple HTML escaper
    function escapeHtml(unsafe) {
        return unsafe
             .replace(/&/g, "&amp;")
             .replace(/</g, "&lt;")
             .replace(/>/g, "&gt;")
             .replace(/"/g, "&quot;")
             .replace(/'/g, "&#039;");
    }
    
    // Handle form submit
    chatForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const text = chatInput.value.trim();
        if (!text) return;
        
        // Show user message
        addMessage(text, true);
        chatInput.value = '';
        chatInput.disabled = true;
        
        // Show typing indicator
        typingIndicator.classList.remove('hidden');
        scrollToBottom();
        
        try {
            const response = await fetch('{{ route("chat.respond") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ message: text })
            });
            
            const data = await response.json();
            
            typingIndicator.classList.add('hidden');
            addMessage(data.reply, false);
            
        } catch (error) {
            typingIndicator.classList.add('hidden');
            addMessage("I am having a moment of difficulty connecting. Please take a gentle breath. I will be here when you try again.", false);
        } finally {
            chatInput.disabled = false;
            chatInput.focus();
        }
    });
});
</script>
</body>
</html>
