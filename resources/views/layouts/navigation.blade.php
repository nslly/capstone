<nav x-data="{ open: false }" class="bg-white shadow-md" >
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <img src="{{ asset('images/laque-logo.png') }}" alt="LOGO IMAGE" class="w-24 fill-current">
                    </a>
                    
                </div>
            </div>
            <div class="flex justify-center">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 lg:-my-px sm:ml-10 lg:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Home') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 lg:-my-px sm:ml-10 lg:flex">
                    <x-nav-link :href="route('about_us')" :active="request()->routeIs('about_us')">
                        {{ __('About us') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 lg:-my-px lg:ml-10 lg:flex">
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>  
                <div class="hidden space-x-8 lg:-my-px lg:ml-10 lg:flex">
                    <x-nav-link :href="route('package.index')" :active="request()->routeIs('package.index')">
                        {{ __('Package') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 lg:-my-px lg:ml-10 lg:flex">
                    <x-nav-link :href="route('gallery')" :active="request()->routeIs('gallery')">
                        {{ __('Gallery') }}
                    </x-nav-link>
                </div>
                
                
                {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                        {{ __('About') }}
                    </x-nav-link>
                </div> --}}
            </div>


            @if(auth()->check()) 
                <!-- Settings Dropdown -->

                <div class="flex justify-between">
                    @auth
                        <div class="hidden lg:flex lg:items-center lg:ml-9">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>
            
                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>
            
                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                    <a href="{{ route('booking.index') }}" class='block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out'>
                                        Edit Reservation
                                    </a>
                                    <a href="{{ route('payment') }}" class='block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out'>
                                        Payment
                                    </a>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
            
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @endauth
        
                    <div class="hidden lg:flex lg:items-center lg:ml-4">
                        <div>
                            <a href="{{ route('booking.create') }}"  class="  px-4 py-2 text-center border border-1 border-orange-500 bg-orange-500 text-slate-50 hover:text-white hover:bg-orange-600 shadow-md rounded-2xl focus:outline-none transition duration-150 ease-in-out"> 
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>


            @else 
                <div class="hidden lg:flex lg:items-center lg:ml-4">
                    <div>
                        <a href="{{ route('login') }}" class=" px-4 py-2 text-center border border-1 border-blue-500  text-gray-700 hover:text-slate-50 hover:bg-blue-500 shadow-md rounded-2xl focus:outline-none transition duration-150 ease-in-out"> 
                            Login
                        </a>
                    </div>
        
                    <div class="hidden sm:flex sm:items-center sm:ml-4">
                        <div>
                            <a href="{{ route('booking.create') }}"  class=" px-4 py-2 text-center border border-1 border-orange-500 bg-orange-500 text-slate-50 hover:text-white hover:bg-orange-600 shadow-md rounded-2xl focus:outline-none transition duration-150 ease-in-out"> 
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
        
            @endif


            <!-- Hamburger -->
            <div class="-mr-2 flex items-center lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Home') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('about_us')" :active="request()->routeIs('about_us')">
                {{ __('About us') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                {{ __('Contact') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('package.index')" :active="request()->routeIs('package.index')">
                {{ __('Package') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('gallery')" :active="request()->routeIs('gallery')">
                {{ __('Gallery') }}
            </x-responsive-nav-link>
        </div>


        @if(auth()->check()) 
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">

                <div class="space-y-1">
                    <x-responsive-nav-link :href="route('booking.index')" :active="request()->routeIs('booking.index')">
                        {{ __('Edit Reservation') }}
                    </x-responsive-nav-link>
                </div>
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('payment')" :active="request()->routeIs('payment')">
                        {{ __('Payment') }}
                    </x-responsive-nav-link>
                </div>
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('booking.create')" :active="request()->routeIs('booking.create')">
                        {{ __('Book Now') }}
                    </x-responsive-nav-link>
                </div>

                <hr class="mt-3">

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>

        @else
            
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="space-y-1">

                    <x-responsive-nav-link :href="route('login')">
                        {{ __('Login') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('register')">
                        {{ __('Register') }}
                    </x-responsive-nav-link>

                </div>
            </div>
        @endif
    </div>
</nav>
