<header>
    <div class="container mx-auto px-4">
        {{-- <div class="container mx-auto px-4">
            <div class="navbar bg-base-100 mb-16 shadow-xl rounded-box">
                <div class="flex-1">
                    <a href="/" class="btn btn-ghost text-xl">Media APP</a>
                </div>
                <div class="flex-none">
                    @if (Route::has('login'))
                        <ul class="menu menu-horizontal px-1">
                            @auth
                                <li>
                                    <a href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Dashboard
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Log in
                                    </a>
                                </li>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </ul>
                    @endif
                </div>
            </div>
        </div> --}}

        @include('layouts.navigation')
    </div>
</header>
