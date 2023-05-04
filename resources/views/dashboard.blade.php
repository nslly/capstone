<x-app-layout>
    <!-- Hero -->
    <section class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-5">
        
        <div class="flex flex-wrap items-center ">
            
            <!-- Column-1 -->
            <div class="px-3 w-full lg:w-2/5">
                <div
                    class="mx-auto mb-8 max-w-lg text-center lg:mx-0 lg:max-w-md lg:text-left sec-font">
                    <h2 class="mb-4 text-3xl font-bold text-left lg:text-5xl tracking-wide">
                        DISCOVER

                        <span class="text-5xl text-orange-600 lg:text-7xl my-2 md:my-0 leading-relaxeds tracking-wide block"
                            >LAQUE
                        </span>

                        BEACH RESORT
                    </h2>

                    <p
                        class="visible mx-0 mt-3 mb-0 text-sm leading-relaxed text-left text-slate-400">
                        Helping you to explore the excitement of our resort
                    </p>
                </div>
                <div class="text-center lg:text-left mt-8 mb-5 drop-shadow-lg">
                    <a
                        href="{{ route('login') }}"
                        class=" visible py-3 px-8 mb-4 text-xs font-semibold tracking-wide leading-none text-white bg-blue-500 rounded-lg cursor-pointer  hover:bg-blue-600  focus:outline-none transition duration-300 ease-in-out"
                        >Get Started</a>
                </div>
            </div>

            <!-- Column-2 -->
            <div class="px-3 mb-12 w-full lg:mb-0 lg:w-3/5 mt-6">
                <!-- Illustrations Container -->
                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/10051.png') }}" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>


    <section class="mt-16 mx-auto w-full py-12 lg:py-0 max-w-7xl px-4 sm:px-6 lg:px-5">
        <div>
            <h1 class="text-3xl sm:text-6xl text-center sm:text-left sec-font font-bold tracking-wider drop-shadow-2xl">
                What's 
                <span class="text-orange-600 font-bold mt-2">New</span>
            </h1>
            <hr class=" w-36 h-1 mt-1 mx-auto sm:mx-0 bg-orange-600 rounded border-0  ">
            <hr class=" w-24 mt-4 h-1 mx-auto sm:mx-0 bg-orange-600 rounded border-0  ">
            <hr class=" w-12 mt-4 h-1 mx-auto sm:mx-0 bg-orange-600 rounded border-0  ">
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
            @foreach ($events as $event)
                <div class="max-w-4xl px-10 my-4 py-6 bg-white rounded-lg shadow-md">
                    <div class="flex justify-between items-center">
                        <span class="font-light text-sm text-gray-400">{{ date('d-m-Y', strtotime($event->updated_at)) }}</span>
                    </div>
                    <div class="mt-2">
                        <a class="text-2xl text-orange-600 font-bold">{{ $event['title_event'] }}</a>
                        <p class="mt-4 text-lg text-gray-400">{{ $event['description'] }}</p>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <a class="text-blue-600 hover:underline">Read more</a>
                    </div>
                </div>
            @endforeach
            
        </div>
        
    </section>


    <section class="mt-16 mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-5 relative" style="z-index: 1">
        <div>
            <h1 class="text-3xl text-center font-bold tracking-wide">
                Services
                <hr class="mx-auto w-36 h-1 mt-1 bg-orange-600 rounded border-0  ">
            </h1>
            <p
                class="visible mx-0 mt-2 mb-0 text-sm leading-relaxed text-center text-gray-400">
                    Information you must know
            </p>
        </div>
        <div class="container mx-auto">
            <div>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-4 mt-12 md:mt-8 lg:py-12" style="cursor: auto;">
                            
                    <div class="p-6 shadow-lg rounded-xl bg-white">
                                
                        <div class="my-6">       
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/boat.png') }}" alt="Services Image" class="w-16">
                            </div>
                        </div>
                                
                        <h3 class="text-lg font-bold mb-3 text-center">
                            Boat
                        </h3>
                                
                        <p class="text-sm leading-6 text-gray-600">
                            Metus potenti velit sollicitudin porttitor magnis elit lacinia tempor varius, ut cras orci vitae parturient id nisi vulputate consectetur, primis venenatis cursus tristique malesuada viverra congue risus.
                        </p>
                                
                    </div>
                    <div class="p-6 shadow-lg rounded-xl bg-white">
                                
                        <div class="my-6">       
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/food-tray.png') }}" alt="Services Image" class="w-16">
                            </div>
                        </div>
                                
                        <h3 class="text-lg font-bold mb-3 text-center">
                            Food
                        </h3>
                                
                        <p class="text-sm leading-6 text-gray-600">
                            Metus potenti velit sollicitudin porttitor magnis elit lacinia tempor varius, ut cras orci vitae parturient id nisi vulputate consectetur, primis venenatis cursus tristique malesuada viverra congue risus.
                        </p>
                                
                    </div>
                    <div class="p-6 shadow-lg rounded-xl bg-white">
                                
                        <div class="my-6">       
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/soda.png') }}" alt="Services Image" class="w-16">
                            </div>
                        </div>
                                
                        <h3 class="text-lg font-bold mb-3 text-center">
                            Drinks
                        </h3>
                                
                        <p class="text-sm leading-6 text-gray-600">
                            Metus potenti velit sollicitudin porttitor magnis elit lacinia tempor varius, ut cras orci vitae parturient id nisi vulputate consectetur, primis venenatis cursus tristique malesuada viverra congue risus.
                        </p>
                                
                    </div>
                    <div class="p-6 shadow-lg rounded-xl bg-white">
                                
                        <div class="my-6">       
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/beach-hut.png') }}" alt="Services Image" class="w-16">
                            </div>
                        </div>
                                
                        <h3 class="text-lg font-bold mb-3 text-center">
                            Nippa Hut
                        </h3>
                                
                        <p class="text-sm leading-6 text-gray-600">
                            Metus potenti velit sollicitudin porttitor magnis elit lacinia tempor varius, ut cras orci vitae parturient id nisi vulputate consectetur, primis venenatis cursus tristique malesuada viverra congue risus.
                        </p>
                                
                    </div>
                    <div class="p-6 shadow-lg rounded-xl bg-white">
                                
                        <div class="my-6">       
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/kayak.png') }}" alt="Services Image" class="w-16">
                            </div>
                        </div>
                                
                        <h3 class="text-lg font-bold mb-3 text-center">
                            Water Activities
                        </h3>
                                
                        <p class="text-sm leading-6 text-gray-600">
                            Metus potenti velit sollicitudin porttitor magnis elit lacinia tempor varius, ut cras orci vitae parturient id nisi vulputate consectetur, primis venenatis cursus tristique malesuada viverra congue risus.
                        </p>
                                
                    </div>   
                </div>
            </div>
        </div>

        <div>
            <img src="{{ asset('images/design.png') }}" alt="Design Image" class="w-9/12 absolute top-0 hidden lg:block" style="right:-8rem; z-index: -1">
        </div>
    </section>

    
    <section class="mt-16 mx-auto w-full py-12 lg:py-0 max-w-7xl px-4 sm:px-6 lg:px-5">
        <div>
            <h1 class="text-3xl text-center font-bold tracking-wide">
                About us
                <hr class="mx-auto w-36 h-1 mt-1 bg-orange-600 rounded border-0  ">
            </h1>
        </div>

        <div class="flex flex-wrap items-center mt-4 md:mt-8">
            
            <!-- Column-1 -->

            <div class="px-3 mb-12 w-full lg:mb-0 lg:w-3/5 mt-6">
                <!-- Illustrations Container -->
                <div class="flex justify-center md:justify-left items-center mx-auto">
                    <img src="{{ asset('images/about-us.png') }}" alt="About Image" class="w-4/5">
                </div>
            </div>

            <!-- Column-2 -->
            <div class="px-3 w-full lg:w-2/5 ">
                <div
                    class="mx-auto mb-8 max-w-full text-center lg:mx-0 lg:max-w-md lg:text-center sec-font">
                    <h4 class="mb-4 text-3xl font-bold text-left tracking-wide">
                        We select unforgettable experience for you all
                    </h4>
                    <p
                        class="visible mt-3 mb-0 text-sm leading-relaxed text-left text-slate-400">
                        Laque Beach is a secluded and peaceful getaway located on a private island in the Mariveles Bataan. We offer a unique and exclusive vacation experience for those looking to escape the hustle and bustle of everyday life.
                    </p>
                </div>
                <div class="text-left mt-8 drop-shadow-lg">
                    <a
                        href="{{ route('about_us') }}"
                        class=" visible py-3 px-6 mb-4 text-xs font-semibold tracking-wide leading-none text-white bg-blue-500 rounded-3xl cursor-pointer  hover:bg-blue-600  focus:outline-none transition duration-300 ease-in-out"
                    >READ MORE...</a>
                </div>

            </div>

            
            
        </div>

    </section>


        
    <section class=" flex flex-col w-full bg-cover bg-fixed bg-center justify-center items-center bg-orange-200" style="background-image:url('images/bg2.jpg')">
        <div class="my-8 p-8 first-letter:opacity-100 rounded-2xl">
            <div class="w-full bg-blue-500 pt-16 pb-24 shadow-lg rounded-2xl text-center">
                <h4 class="text-2xl text-gray-100">Choose the right plan for you</h4>
                <p class="text-sm text-gray-100 mt-2">Pricing built for businesses of all sizes. Choose package that suits your needs.</p>
            </div>
            <div class="w-full 2xl:w-3/4 flex items-center justify-center px-8 6 2xl:px-0 mx-auto -mt-8 opacity-100">
                <div class="w-full grid grid-cols-1 xl:grid-cols-3 gap-8">
                    @foreach ($packages as $key => $package)
                        @if ($key < 3)
                        <div class="bg-white shadow-2xl rounded-lg px-12 py-4">
                            <p class="text-xl text-center font-bold text-blue-500">{{ $package->name }}</p>
                            <p class="text-center py-8">
                                <span class="text-4xl font-bold text-gray-700">
                                    ₱{{ $package->price }}
                                </span>
                            </p>

                            <ul class="border-t flex flex-col justify-center align-center border-gray-300 py-8 space-y-6">
                                <li class="flex items-center justify-center space-x-2 px-8">
                                    <span class="bg-orange-600 rounded-full p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white bg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <span class="text-gray-600 capitalize">{{ $package->count_of_person }} Person</span>
                                </li>
                                <?php 
                                    $inclusions = explode(", ", $package->inclusions) 
                                ?>
                                @foreach ($inclusions as $key => $inclusion)
                                    @if ($key < 3)
                                        <li class="flex items-center justify-center space-x-2 px-8">
                                            <span class="bg-orange-600 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white " viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <span class="text-gray-600 capitalize ">{{ $inclusion }}</span>
                                        </li>
                                    @endif
                                @endforeach

                                <hr>
                                <div class="mt-6 flex align-center justify-center">
                                    <a href="{{ route('package.show', $package->id) }}" class="text-gray-400 font-bold text-sm uppercase hover:text-gray-500">See More...</a>
                                </div>
                                
                            </ul>
                            <div class="flex items-center justify-center my-6">
                                <a href="{{ route('package.show', $package->id) }}" class="bg-blue-500 hover:bg-blue-600 px-8 py-2 text-sm text-gray-200 uppercase rounded-3xl font-bold transition duration-150" title="Purchase">Purchase</a>
                            </div>
                        </div>
                        @endif
                    @endforeach    
                </div>
            </div>
            <div class="text-center mt-10 drop-shadow-lg">
                <a
                    href="{{ route('package.index') }}"
                    class=" visible py-3 px-8 mb-4 text-xs font-semibold tracking-wide leading-none text-white bg-blue-500 rounded-lg cursor-pointer  hover:bg-blue-600  focus:outline-none transition duration-300 ease-in-out"
                    >See More</a>
            </div>
        </div>
    </section>



    <section class=" mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-5 relative" style="z-index: 1">
        <div>
            <h1 class="mt-16 text-3xl text-center font-bold tracking-wide">
                Tour Guide
                <hr class="mx-auto w-36 h-1 mt-1 bg-orange-600 rounded border-0  ">
            </h1>
            <p
                class="visible mx-0 mt-2 mb-0 text-sm leading-relaxed text-center text-gray-400">
                    For more exciting experience and to enjoy the nature of mariveles
            </p>
        </div>

        <div class="mt-12">
            <div class="shadow-xl border-x-2">
                
                <ul id="autoWidth" class="cs-hidden flex justify-center">
                    @foreach ($tour_guides as $tour_guide)
                        <li class="px-16 w-full flex flex-col py-8 mr-12 bg-white shadow-md">
                            <div class="w-full">
                                <img class="mx-auto mb-4 w-36 h-32 rounded-full" src="{{ $tour_guide->image_path }}" alt="Tour Guide Image">
                            </div>
                            <div class="text-center text-gray-500 dark:text-gray-400">
                                <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $tour_guide->name }}
                                </h3>
                                <p class="text-sm leading-6 text-gray-400">
                                    Email {{ $tour_guide->email }}
                                </p>
                                <p class="text-sm mt-1 leading-6 text-gray-400">
                                    Contact Number {{ $tour_guide->contact_num }}
                                </p>
                            </div>
                        </li>
                    @endforeach
                    
                </ul>
            </div>    
        </div>
        <div>
            <img src="{{ asset('images/design2.png') }}" alt="Design Image" class="w-full absolute top-0 hidden lg:block" style="left:-8rem; z-index: -1">
        </div>
    </section>

    
    <section class="mt-16 mb-16 mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-5" style="z-index: 1">
        <div>
            <h1 class="text-3xl text-center font-bold tracking-wide">
                Gallery
                <hr class="mx-auto w-36 h-1 mt-1 bg-orange-600 rounded border-0  ">
            </h1>
            <p
                class="visible mx-0 mt-2 mb-0 text-sm leading-relaxed text-center text-gray-400">
                    You can enjoy the photos of our resort
            </p>
        </div>
        <div class="overflow-hidden mt-4 md:mt-8">
            <div class="container">
                <div class="flex flex-wrap -m-1 md:-m-2">
                    @foreach ($galleries as $gallery)

                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg opacity-70 hover:opacity-100 hover:shadow-lg focus:outline-none transition duration-300 ease-in-out"
                                    src="{{ $gallery->img_path }}" alt="laque photo">
                            </div>
                        </div>
                        
                    @endforeach
                </div>
            </div>
        </div> 
        <div class="text-center mt-10 drop-shadow-lg">
            <a
                href="{{ route('gallery') }}"
                class=" visible py-3 px-8 mb-4 text-xs font-semibold tracking-wide leading-none text-white bg-blue-500 rounded-lg cursor-pointer  hover:bg-blue-600  focus:outline-none transition duration-300 ease-in-out"
                >See More</a>
        </div>
    </section>


</x-app-layout>
