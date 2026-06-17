<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carolina Cashers | Check Cashing · Money Orders · Notary | Greenville, SC</title>
    <meta name="description" content="Carolina Cashers in Greenville, SC offers fast check cashing, money orders, and notary services. No appointment needed. Mon–Thu 9–5:30, Fri 9–6:30, Sat 9:30–5.">
    <meta property="og:title" content="Carolina Cashers | Greenville, SC">
    <meta property="og:description" content="Fast check cashing, money orders, and notary services in Greenville, SC. Walk in — walk out with cash.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://carolinacashers.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased" style="background-color: #F9F7F2; font-family: 'Inter', sans-serif;">

{{-- ===== NAV ===== --}}
<header class="sticky top-0 z-50 shadow-sm" style="background-color: #1A3C2E;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            {{-- Logo --}}
            <a href="#" class="flex items-center gap-2">
                <span class="text-xl font-bold tracking-tight" style="color: #F9F7F2;">
                    Carolina<span style="color: #D4A017;">Cashers</span>
                </span>
            </a>

            {{-- Desktop nav links --}}
            <nav class="hidden md:flex items-center gap-8">
                <a href="#services" class="text-sm font-medium transition-colors hover:opacity-80" style="color: #F9F7F2;">Services</a>
                <a href="#how-it-works" class="text-sm font-medium transition-colors hover:opacity-80" style="color: #F9F7F2;">How It Works</a>
                <a href="#hours" class="text-sm font-medium transition-colors hover:opacity-80" style="color: #F9F7F2;">Hours &amp; Location</a>
            </nav>

            {{-- Phone CTA --}}
            <a href="tel:8642698266"
               class="flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-semibold transition-colors"
               style="background-color: #D4A017; color: #1A3C2E;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd"/>
                </svg>
                (864) 269-8266
            </a>
        </div>
    </div>
</header>

{{-- ===== HERO ===== --}}
<section class="relative overflow-hidden" style="background-color: #1A3C2E; background-image: url('/images/hero.jpg'); background-size: cover; background-position: center;">
    {{-- Dark green overlay --}}
    <div class="absolute inset-0" style="background-color: rgba(18, 43, 32, 0.85);"></div>
    {{-- Gold accent glow --}}
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 80% 20%, #D4A017 0%, transparent 40%);"></div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
        <div class="max-w-3xl">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold mb-6"
                 style="background-color: rgba(212,160,23,0.15); color: #D4A017; border: 1px solid rgba(212,160,23,0.3);">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742z" clip-rule="evenodd"/>
                </svg>
                Locally Owned · Greenville, SC
            </div>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight mb-6" style="color: #F9F7F2;">
                Walk In.<br>
                Walk Out<br>
                <span style="color: #D4A017;">With Cash.</span>
            </h1>

            <p class="text-lg sm:text-xl mb-10 max-w-xl leading-relaxed" style="color: rgba(249,247,242,0.75);">
                Fast, friendly financial services — no appointment, no hassle. Check cashing, money orders, and notary services right here in Greenville.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="tel:8642698266"
                   class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl text-base font-bold transition-all hover:scale-105"
                   style="background-color: #D4A017; color: #1A3C2E;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd"/>
                    </svg>
                    Call Us Now
                </a>
                <a href="#hours"
                   class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl text-base font-semibold transition-all hover:bg-white/10"
                   style="color: #F9F7F2; border: 2px solid rgba(249,247,242,0.3);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742z" clip-rule="evenodd"/>
                    </svg>
                    Get Directions
                </a>
            </div>
        </div>
    </div>

    {{-- Bottom wave --}}
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 60L1440 60L1440 20C1440 20 1200 60 720 60C240 60 0 20 0 20L0 60Z" fill="#F9F7F2"/>
        </svg>
    </div>
</section>

{{-- ===== SERVICES ===== --}}
<section id="services" class="py-20 lg:py-28" style="background-color: #F9F7F2;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <p class="text-sm font-semibold uppercase tracking-widest mb-3" style="color: #D4A017;">What We Offer</p>
            <h2 class="text-3xl sm:text-4xl font-extrabold" style="color: #1A3C2E;">Our Services</h2>
            <p class="mt-4 text-base max-w-xl mx-auto" style="color: #4B5563;">
                Simple, straightforward services — all under one roof on White Horse Road.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Check Cashing --}}
            <div class="rounded-2xl p-8 shadow-sm border transition-shadow hover:shadow-md" style="background-color: #fff; border-color: #E5E0D8;">
                <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6" style="background-color: rgba(26,60,46,0.08);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="#1A3C2E" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="6" width="20" height="12" rx="2"/>
                        <path d="M12 12a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                        <path d="M6 12h.01M18 12h.01"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #1A3C2E;">Check Cashing</h3>
                <p class="text-sm leading-relaxed" style="color: #6B7280;">
                    Cash your payroll, government, tax refund, insurance, or personal checks fast — no bank account required. Bring a valid ID and walk out with cash.
                </p>
                <ul class="mt-5 space-y-2">
                    @foreach(['Payroll checks', 'Government checks', 'Tax refund checks', 'Insurance checks', 'Personal checks'] as $item)
                    <li class="flex items-center gap-2 text-sm" style="color: #374151;">
                        <svg class="h-4 w-4 flex-shrink-0" style="color: #D4A017;" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"/>
                        </svg>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Money Orders --}}
            <div class="rounded-2xl p-8 shadow-sm border transition-shadow hover:shadow-md" style="background-color: #1A3C2E; border-color: #2A5C46;">
                <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6" style="background-color: rgba(212,160,23,0.15);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="#D4A017" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="9" y1="13" x2="15" y2="13"/>
                        <line x1="9" y1="17" x2="11" y2="17"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #F9F7F2;">Money Orders</h3>
                <p class="text-sm leading-relaxed" style="color: rgba(249,247,242,0.75);">
                    Need to pay rent, bills, or send money safely? We issue money orders quickly and affordably — safer than cash, accepted almost everywhere.
                </p>
                <ul class="mt-5 space-y-2">
                    @foreach(['Pay rent or utilities', 'Send money safely', 'No bank account needed', 'Affordable fees', 'Widely accepted'] as $item)
                    <li class="flex items-center gap-2 text-sm" style="color: rgba(249,247,242,0.85);">
                        <svg class="h-4 w-4 flex-shrink-0" style="color: #D4A017;" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"/>
                        </svg>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Notary --}}
            <div class="rounded-2xl p-8 shadow-sm border transition-shadow hover:shadow-md" style="background-color: #fff; border-color: #E5E0D8;">
                <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6" style="background-color: rgba(26,60,46,0.08);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="#1A3C2E" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <polyline points="9 12 11 14 15 10"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3" style="color: #1A3C2E;">Notary Public</h3>
                <p class="text-sm leading-relaxed" style="color: #6B7280;">
                    Get important documents notarized by a certified notary public. Quick, professional service — no lengthy appointment required.
                </p>
                <ul class="mt-5 space-y-2">
                    @foreach(['Legal documents', 'Real estate paperwork', 'Power of attorney', 'Affidavits & oaths', 'Loan documents'] as $item)
                    <li class="flex items-center gap-2 text-sm" style="color: #374151;">
                        <svg class="h-4 w-4 flex-shrink-0" style="color: #D4A017;" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"/>
                        </svg>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ===== HOW IT WORKS ===== --}}
<section id="how-it-works" class="py-20 lg:py-28" style="background-color: #F0EDE4;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <p class="text-sm font-semibold uppercase tracking-widest mb-3" style="color: #D4A017;">Simple Process</p>
            <h2 class="text-3xl sm:text-4xl font-extrabold" style="color: #1A3C2E;">How It Works</h2>
            <p class="mt-4 text-base max-w-xl mx-auto" style="color: #4B5563;">
                No complicated process. No waiting days. In and out in minutes.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 relative">
            {{-- Connector line (desktop only) --}}
            <div class="hidden md:block absolute top-10 left-1/4 right-1/4 h-0.5" style="background: linear-gradient(to right, #D4A017, #D4A017); opacity: 0.3;"></div>

            @php
            $steps = [
                ['num' => '01', 'title' => 'Walk In', 'desc' => 'No appointment needed. Mon–Thu 9–5:30, Fri 9–6:30, Sat 9:30–5. Just walk in.'],
                ['num' => '02', 'title' => 'Show Your ID', 'desc' => 'Bring a valid government-issued photo ID and the check or document you need processed.'],
                ['num' => '03', 'title' => 'Walk Out With Cash', 'desc' => 'We handle it quickly and professionally. You leave with what you came for, no hassle.'],
            ];
            @endphp

            @foreach($steps as $step)
            <div class="flex flex-col items-center text-center p-8 rounded-2xl" style="background-color: #fff;">
                <div class="w-16 h-16 rounded-full flex items-center justify-center text-xl font-black mb-6 shadow-md"
                     style="background-color: #1A3C2E; color: #D4A017;">
                    {{ $step['num'] }}
                </div>
                <h3 class="text-lg font-bold mb-3" style="color: #1A3C2E;">{{ $step['title'] }}</h3>
                <p class="text-sm leading-relaxed" style="color: #6B7280;">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== WHY US ===== --}}
<section class="py-20 lg:py-28" style="background-color: #F9F7F2;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <p class="text-sm font-semibold uppercase tracking-widest mb-3" style="color: #D4A017;">Why Choose Us</p>
                <h2 class="text-3xl sm:text-4xl font-extrabold mb-6" style="color: #1A3C2E;">
                    Greenville's Trusted<br>Financial Services Stop
                </h2>
                <p class="text-base leading-relaxed mb-8" style="color: #4B5563;">
                    We're a locally owned business right here in Greenville, SC — not a national chain. We treat every customer with respect and get you in and out fast.
                </p>

                @php
                $reasons = [
                    ['icon' => '⚡', 'title' => 'Fast Service', 'desc' => 'Most transactions completed in minutes. No long lines or waits.'],
                    ['icon' => '🏠', 'title' => 'Locally Owned', 'desc' => 'Your money stays in the community. We know our neighbors.'],
                    ['icon' => '🤝', 'title' => 'Friendly Staff', 'desc' => 'No judgment, no runaround. Just straightforward, helpful service.'],
                    ['icon' => '✅', 'title' => 'No Appointment', 'desc' => 'Walk in any time during business hours — we\'re ready for you.'],
                ];
                @endphp

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    @foreach($reasons as $reason)
                    <div class="flex gap-4">
                        <div class="text-2xl flex-shrink-0 mt-0.5">{{ $reason['icon'] }}</div>
                        <div>
                            <h4 class="font-bold text-sm mb-1" style="color: #1A3C2E;">{{ $reason['title'] }}</h4>
                            <p class="text-sm" style="color: #6B7280;">{{ $reason['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Trust card --}}
            <div class="rounded-2xl p-10 text-center shadow-lg" style="background-color: #1A3C2E;">
                <div class="text-5xl font-black mb-2" style="color: #D4A017;">Serving</div>
                <div class="text-lg font-semibold mb-6" style="color: rgba(249,247,242,0.8);">Greenville, SC &amp; surrounding areas</div>
                <div class="space-y-4">
                    <div class="flex items-center justify-between py-3 border-b" style="border-color: rgba(249,247,242,0.1);">
                        <span class="text-sm font-medium" style="color: rgba(249,247,242,0.7);">Check Cashing</span>
                        <span class="text-sm font-bold" style="color: #D4A017;">Fast &amp; Easy</span>
                    </div>
                    <div class="flex items-center justify-between py-3 border-b" style="border-color: rgba(249,247,242,0.1);">
                        <span class="text-sm font-medium" style="color: rgba(249,247,242,0.7);">Money Orders</span>
                        <span class="text-sm font-bold" style="color: #D4A017;">Affordable Fees</span>
                    </div>
                    <div class="flex items-center justify-between py-3">
                        <span class="text-sm font-medium" style="color: rgba(249,247,242,0.7);">Notary Services</span>
                        <span class="text-sm font-bold" style="color: #D4A017;">Certified</span>
                    </div>
                </div>
                <a href="tel:8642698266"
                   class="mt-8 w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl text-base font-bold transition-all hover:scale-105"
                   style="background-color: #D4A017; color: #1A3C2E;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd"/>
                    </svg>
                    (864) 269-8266
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ===== HOURS & LOCATION ===== --}}
<section id="hours" class="py-20 lg:py-28" style="background-color: #1A3C2E;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <p class="text-sm font-semibold uppercase tracking-widest mb-3" style="color: #D4A017;">Find Us</p>
            <h2 class="text-3xl sm:text-4xl font-extrabold" style="color: #F9F7F2;">Hours &amp; Location</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            {{-- Hours + address --}}
            <div class="space-y-8">
                {{-- Hours table --}}
                <div class="rounded-2xl p-8" style="background-color: rgba(249,247,242,0.06);">
                    <h3 class="text-lg font-bold mb-6 flex items-center gap-2" style="color: #F9F7F2;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" style="color: #D4A017;" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd"/>
                        </svg>
                        Business Hours
                    </h3>

                    @php
                    $hours = [
                        ['day' => 'Monday',    'open' => '9:00 AM', 'close' => '5:30 PM'],
                        ['day' => 'Tuesday',   'open' => '9:00 AM', 'close' => '5:30 PM'],
                        ['day' => 'Wednesday', 'open' => '9:00 AM', 'close' => '5:30 PM'],
                        ['day' => 'Thursday',  'open' => '9:00 AM', 'close' => '5:30 PM'],
                        ['day' => 'Friday',    'open' => '9:00 AM', 'close' => '6:30 PM'],
                        ['day' => 'Saturday',  'open' => '9:30 AM', 'close' => '5:00 PM'],
                        ['day' => 'Sunday',    'open' => null,       'close' => null],
                    ];
                    @endphp

                    <div class="space-y-3">
                        @foreach($hours as $row)
                        <div class="flex items-center justify-between py-2 border-b" style="border-color: rgba(249,247,242,0.08);">
                            <span class="text-sm font-medium" style="color: rgba(249,247,242,0.7);">{{ $row['day'] }}</span>
                            @if($row['open'])
                                <span class="text-sm font-semibold" style="color: #F9F7F2;">{{ $row['open'] }} – {{ $row['close'] }}</span>
                            @else
                                <span class="text-sm font-semibold" style="color: rgba(249,247,242,0.4);">Closed</span>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Address + phone --}}
                <div class="rounded-2xl p-8 space-y-6" style="background-color: rgba(249,247,242,0.06);">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: rgba(212,160,23,0.15);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" style="color: #D4A017;" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider mb-1" style="color: #D4A017;">Address</p>
                            <p class="text-base font-semibold" style="color: #F9F7F2;">3111 White Horse Rd</p>
                            <p class="text-sm" style="color: rgba(249,247,242,0.7);">Greenville, SC 29611</p>
                            <a href="https://maps.google.com/?q=3111+White+Horse+Rd,+Greenville,+SC+29611"
                               target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-1 mt-2 text-sm font-medium" style="color: #D4A017;">
                                Get Directions
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z" clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: rgba(212,160,23,0.15);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" style="color: #D4A017;" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider mb-1" style="color: #D4A017;">Phone</p>
                            <a href="tel:8642698266" class="text-base font-semibold" style="color: #F9F7F2;">(864) 269-8266</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Map --}}
            <div class="rounded-2xl overflow-hidden shadow-xl h-96 lg:h-auto min-h-80">
                <iframe
                    src="https://maps.google.com/maps?q=3111+White+Horse+Rd,+Greenville,+SC+29611&output=embed&z=15"
                    width="100%"
                    height="100%"
                    style="border: 0; min-height: 320px;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Carolina Cashers location map">
                </iframe>
            </div>
        </div>
    </div>
</section>

{{-- ===== FOOTER ===== --}}
<footer class="py-12" style="background-color: #122B20;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pb-8 border-b" style="border-color: rgba(249,247,242,0.08);">
            {{-- Brand --}}
            <div>
                <span class="text-xl font-bold tracking-tight" style="color: #F9F7F2;">
                    Carolina<span style="color: #D4A017;">Cashers</span>
                </span>
                <p class="mt-3 text-sm leading-relaxed" style="color: rgba(249,247,242,0.5);">
                    Fast, friendly financial services in Greenville, SC. Locally owned and operated.
                </p>
            </div>

            {{-- Services --}}
            <div>
                <h4 class="text-xs font-semibold uppercase tracking-wider mb-4" style="color: #D4A017;">Services</h4>
                <ul class="space-y-2">
                    @foreach(['Check Cashing', 'Money Orders', 'Notary Public'] as $service)
                    <li class="text-sm" style="color: rgba(249,247,242,0.6);">{{ $service }}</li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4 class="text-xs font-semibold uppercase tracking-wider mb-4" style="color: #D4A017;">Contact</h4>
                <div class="space-y-2 text-sm" style="color: rgba(249,247,242,0.6);">
                    <p>3111 White Horse Rd</p>
                    <p>Greenville, SC 29611</p>
                    <a href="tel:8642698266" class="block hover:opacity-80" style="color: rgba(249,247,242,0.6);">(864) 269-8266</a>
                    <p class="pt-2">Mon–Thu: 9:00 AM – 5:30 PM</p>
                    <p>Fri: 9:00 AM – 6:30 PM</p>
                    <p>Sat: 9:30 AM – 5:00 PM</p>
                    <p>Sunday: Closed</p>
                </div>
            </div>
        </div>

        <div class="pt-8 text-center text-xs" style="color: rgba(249,247,242,0.3);">
            &copy; {{ date('Y') }} Carolina Cashers, LLC. All rights reserved.
        </div>
    </div>
</footer>

</body>
</html>
