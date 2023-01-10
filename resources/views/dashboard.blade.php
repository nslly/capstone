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

                <div class="text-center lg:text-left">

                    <a
                        class="block visible py-4 px-8 mb-4 text-xs font-semibold tracking-wide leading-none text-white bg-blue-500 rounded-lg cursor-pointer sm:mr-3 sm:mb-0 sm:inline-block hover:bg-blue-600  focus:outline-none transition duration-150 ease-in-out"
                        >Get Started</a
                    >

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


    
    <section style="background-image: url('{{ asset('images/2nd-bg.png') }}')" class=" bg-no-repeat bg-contain mt-16">
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
            <div class="container w-full max-w-7xl px-4 sm:px-6 lg:px-5 mx-auto">
                <div class="flex flex-wrap -m-1 md:-m-2">
                    <div class="flex flex-wrap w-1/2">
                        <div class="w-1/2 p-1 lg:p-2">
                            <img class="block object-cover object-center w-full h-full rounded-lg opacity-70 hover:opacity-100 hover:shadow-lg focus:outline-none transition duration-300 ease-in-out"
                                src="{{ asset('images/laque_images/img1.jpg') }}" alt="laque photos">
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img class="block object-cover object-center w-full h-full rounded-lg opacity-70 hover:opacity-100 hover:shadow-lg focus:outline-none transition duration-300 ease-in-out"
                                src="{{ asset('images/laque_images/img2.jpg') }}" alt="laque photos">
                        </div>
                        <div class="w-full p-1 md:p-2">
                            <img class="block object-cover object-center w-full h-full rounded-lg opacity-70 hover:opacity-100 hover:shadow-lg focus:outline-none transition duration-300 ease-in-out"
                                src="{{ asset('images/laque_images/img8.jpg') }}" alt="laque photos">
                        </div>
                    </div>
                    <div class="flex flex-wrap w-1/2">
                        <div class="w-full p-1 md:p-2">
                            <img class="block object-cover object-center w-full h-full rounded-lg opacity-70 hover:opacity-100 hover:shadow-lg focus:outline-none transition duration-300 ease-in-out"
                                src="{{ asset('images/laque_images/img4.jpg') }}" alt="laque photos">
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img class="block object-cover object-center w-full h-full rounded-lg opacity-70 hover:opacity-100 hover:shadow-lg focus:outline-none transition duration-300 ease-in-out"
                                src="{{ asset('images/laque_images/img5.jpg') }}" alt="laque photos">
                        </div>
                        <div class="w-1/2 p-1 md:p-2">
                            <img class="block object-cover object-center w-full h-full rounded-lg opacity-70 hover:opacity-100 hover:shadow-lg focus:outline-none transition duration-300 ease-in-out"
                                src="{{ asset('images/laque_images/img6.jpg') }}" alt="laque photos">
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="text-center mt-12 drop-shadow-lg">
            <a
                class=" visible py-3 px-8 mb-4 text-xs font-semibold tracking-wide leading-none text-white bg-blue-500 rounded-lg cursor-pointer  hover:bg-blue-600  focus:outline-none transition duration-300 ease-in-out"
            >See More</a>
        </div>
    </section>



    
{{-- 
    <div class="">
        <img src="{{ asset('images/wave.png') }}" alt="Wave image" class="w-full">
    </div> --}}


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


    <section class="mt-16 mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-5">
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
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias beatae voluptatibus ut, amet harum, similique, recusandae omnis sequi alias obcaecati vero! Voluptatum ex consectetur perferendis, pariatur quisquam sit corrupti exercitationem voluptate inventore atque consequatur quod dolores repellat dolorem a quis vel dolorum suscipit cum quasi id minus harum. Recusandae tenetur velit eius ad incidunt quibusdam.
                    </p>
                </div>
                <div class="text-left mt-8 drop-shadow-lg">
                    <a
                        class=" visible py-3 px-6 mb-4 text-xs font-semibold tracking-wide leading-none text-white bg-blue-500 rounded-3xl cursor-pointer  hover:bg-blue-600  focus:outline-none transition duration-300 ease-in-out"
                    >READ MORE...</a>
                </div>

            </div>

            
            
        </div>

    </section>


    
    <section class=" flex flex-col w-full bg-cover bg-fixed bg-center justify-center items-center bg-orange-200">
        <div x-data="{ 
            billingType: 'Day', 
            basicPrice: '700',
            premiumPrice: '29',
            proPrice: '39'
        }" class="my-24 p-16 first-letter:opacity-100 bg-zinc-50 pb-12 rounded-2xl">
            <div class="w-full bg-blue-500 pt-16 pb-24 text-center opacity-100">
                <h4 class="text-2xl text-gray-100">Choose the right plan for you</h4>
                <p class="text-sm text-gray-100 mt-2">Pricing built for businesses of all sizes. Choose package that suits your needs.</p>
                {{-- <div class="flex items-center justify-center mt-8">
                    <button @click="
                            billingType = 'Day',
                            basicPrice = '700',
                            premiumPrice = '29',
                            proPrice = '39'
                        " class="text-gray-800 px-4 py-2 rounded-tl-lg rounded-bl-lg bg-gray-200" :class=" billingType === 'month' ? 'bg-blue-300' : 'bg-gray-200' " title="Choose Monthly billing">
                        Monthly billing
                    </button>
                    <button @click="
                            billingType = 'year',
                            basicPrice = '205',
                            premiumPrice = '313',
                            proPrice = '421'
                        " class="text-gray-800 px-4 py-2 rounded-tr-lg rounded-br-lg bg-gray-200" :class=" billingType === 'year' ? 'bg-blue-300' : 'bg-gray-200' " title="Choose Annual billing">
                        Annual billing
                    </button>
                </div> --}}
            </div>
            <div class="w-full 2xl:w-3/4 flex items-center justify-center px-8 6 2xl:px-0 mx-auto -mt-8 opacity-100">
                <div class="w-full grid grid-cols-1 xl:grid-cols-3 gap-8">
                    @foreach ($packages as $package)
                        @if ($package->id <= 3)
                        <div class="bg-white shadow-2xl rounded-lg px-12 py-4">
                            <p class="text-xl text-center font-bold text-blue-500">{{ $package->name }}</p>
                            <p class="text-center p-8">
                                <span class="text-4xl font-bold text-gray-700">
                                    ₱{{ $package->price }}
                                </span>
                                <span class="text-xs uppercase  text-gray-500">
                                    / Day
                                </span>
                            </p>

                            <ul class="border-t flex flex-col justify-center border-gray-300 py-8 space-y-6">
                                <li class="flex items-center space-x-2 px-8">
                                    <span class="bg-blue-500 rounded-full p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <span class="text-gray-600 capitalize">{{ $package->count_of_person }} Person</span>
                                </li>
                                <?php 
                                    $inclusions = explode(", ", $package->inclusions) 
                                ?>
                                @foreach ($inclusions as $inclusion)
                                    @if ($inclusion > $inclusions[2])
                                        <li class="flex items-center  space-x-2 px-8">
                                            <span class="bg-blue-500 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
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
                                {{-- <li class="flex items-center space-x-2 px-8">
                                    <span class="bg-gray-300 rounded-full p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <span class="text-gray-400 capitalize">API Access</span>
                                </li> --}}
                                
                            </ul>
                            <div class="flex items-center justify-center my-6">
                                <a href="#" class="bg-blue-500 hover:bg-blue-600 px-8 py-2 text-sm text-gray-200 uppercase rounded-3xl font-bold transition duration-150" title="Purchase">Purchase</a>
                            </div>
                        </div>
                        @endif
                    @endforeach    
                </div>
            </div>
            <div class="text-center mt-12 drop-shadow-lg">
                <a
                    href="{{ route('package.index') }}"
                    class=" visible py-3 px-8 mb-4 text-xs font-semibold tracking-wide leading-none text-white bg-blue-500 rounded-lg cursor-pointer  hover:bg-blue-600  focus:outline-none transition duration-300 ease-in-out"
                    >See More</a>
            </div>
        </div>
    </section>
    

    <section class="space-y-8">
        <h1 class="text-4xl text-center my-20">Reviews</h1>
        <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2">
            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:border-r dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Very easy this was to integrate</h3>
                    <p class="my-4 font-light">If you care for your time, I hands down would go with this."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center space-x-3">
                    <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Bonnie Green</div>
                        <div class="text-sm font-light text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                    </div>
                </figcaption>    
            </figure>
            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-tr-lg dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
                    <p class="my-4 font-light">Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!"</p>
                </blockquote>
                <figcaption class="flex items-center justify-center space-x-3">
                    <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Roberta Casas</div>
                        <div class="text-sm font-light text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                    </div>
                </figcaption>    
            </figure>
            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-bl-lg md:border-b-0 md:border-r dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow</h3>
                    <p class="my-4 font-light">Aesthetically, the well designed components are beautiful and will undoubtedly level up your next application."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center space-x-3">
                    <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Jese Leos</div>
                        <div class="text-sm font-light text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div>
                    </div>
                </figcaption>    
            </figure>
            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-b-lg md:rounded-br-lg dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
                    <p class="my-4 font-light">You have many examples that can be used to create a fast prototype for your team."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center space-x-3">
                    <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Joseph McFall</div>
                        <div class="text-sm font-light text-gray-500 dark:text-gray-400">CTO at Google</div>
                    </div>
                </figcaption>    
            </figure>
        </div>
    </section>

    
 


    

    <section>
        <div class="w-full bg-white border rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select tab</label>
                <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>Statistics</option>
                    <option>Services</option>
                    <option>FAQ</option>
                </select>
            </div>
            <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                <li class="w-full">
                    <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Statistics</button>
                </li>
                <li class="w-full">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Services</button>
                </li>
                <li class="w-full">
                    <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">FAQ</button>
                </li>
            </ul>
            <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
                    <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                            <dd class="font-light text-gray-500 dark:text-gray-400">Developers</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                            <dd class="font-light text-gray-500 dark:text-gray-400">Public repositories</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                            <dd class="font-light text-gray-500 dark:text-gray-400">Open source projects</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold">1B+</dt>
                            <dd class="font-light text-gray-500 dark:text-gray-400">Contributors</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold">90+</dt>
                            <dd class="font-light text-gray-500 dark:text-gray-400">Top Forbes companies</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold">4M+</dt>
                            <dd class="font-light text-gray-500 dark:text-gray-400">Organizations</dd>
                        </div>
                    </dl>
                </div>
                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">We invest in the world’s potential</h2>
                    <!-- List -->
                    <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-500 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="font-light leading-tight">Dynamic reports and dashboards</span>
                        </li>
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-500 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="font-light leading-tight">Templates for everyone</span>
                        </li>
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-500 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="font-light leading-tight">Development workflow</span>
                        </li>
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-500 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="font-light leading-tight">Limitless business automation</span>
                        </li>
                    </ul>
                </div>
                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                    <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <h2 id="accordion-flush-heading-1">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                            <span>What is Flowbite?</span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                            <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                            <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-500 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-2">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                            <span>Is there a Figma file available?</span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                            <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                            <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-500 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-3">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                            <span>What are the differences between Flowbite and Tailwind UI?</span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                            <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                            <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                <li><a href="https://flowbite.com/pro/" class="text-blue-500 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                                <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-500 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                            </ul>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
