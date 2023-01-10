<x-app-layout>

    <section class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-5">
        <div class="container mx-auto px-20 mb-16">
            <div>
                <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" style="cursor: auto;">
                    <div class="max-w-lg mx-auto overflow-hidden rounded-lg shadow-lg lg:max-w-none lg:flex">
                        <div class="flex-1 px-6 py-8 bg-white lg:p-12" style="cursor: auto;">
                            <h3 class="text-2xl font-extrabold text-gray-900 sm:text-3xl" style="cursor: auto;">Package {{ $package->id }}</h3>
                            <p class="mt-6 text-base text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita cumque tempora excepturi. Corrupti, illo soluta!.</p>
                            <div class="mt-8">
                                <div class="flex items-center">
                                    <h4 class="flex-shrink-0 pr-4 text-sm font-semibold tracking-wider text-orange-600 uppercase bg-white">What's included</h4>
                                    <div class="flex-1 border-t-2 border-gray-200"></div>
                                </div>
                                <ul class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">{{ $package->count_of_person }}</p>
                                    </li>
                                    <?php 
                                        $inclusions = explode(", ", $package->inclusions) 
                                    ?>
                                    @foreach ($inclusions as $inclusion)
                                        <li class="flex items-start lg:col-span-1">
                                            <div class="flex-shrink-0">
                                                <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-sm text-gray-700">{{ $inclusion }}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="px-6 py-8 text-center bg-gray-50 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12" style="cursor: auto;">
                            <p class="mt-4 text-gray-500" style="text-decoration-line:line-through;text-decoration-style:solid">$299 / year</p>
                            <div class="flex items-center justify-center mt-4 text-5xl font-extrabold text-gray-900">
                                <span>₱{{ $package->price }}</span>
                                {{-- <span class="ml-3 text-xl font-medium text-gray-500">/ Day</span> --}}
                            </div>
                            <div class="mt-6">
                                <div class="rounded-md shadow">
                                <a href="{{ route('booking.index') }}" class="flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white bg-orange-600 border border-transparent rounded-md hover:bg-orange-700">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto mt-12 px-20 mb-16">
            <div>
                <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" style="cursor: auto;">
                    <div class="max-w-lg mx-auto overflow-hidden rounded-lg shadow-lg lg:max-w-none lg:flex">
                        <div class="flex-1 px-6 py-8 bg-white lg:p-12" style="cursor: auto;">
                            <h3 class="text-2xl font-extrabold text-gray-900 sm:text-3xl" style="cursor: auto;">Add more</h3>
                            <p class="mt-6 text-base text-gray-500">You can add a service or activities here if you want. Please check the blank if you want to add a services.</p>
                            <div class="mt-8">
                                <div class="flex items-center">
                                    <h4 class="flex-shrink-0 pr-4 text-sm font-semibold tracking-wider text-orange-600 uppercase bg-white">Activites/Services</h4>
                                    <div class="flex-1 border-t-2 border-gray-200"></div>
                                </div>
                                <ul class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                                    @foreach ($services as $service)
                                        <li class="flex items-start lg:col-span-1">
                                            <div class="flex-shrink-0">
                                                <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-sm text-gray-700">{{ $service->service_name }}</p>
                                            <p class="ml-2 text-sm text-orange-600">( ₱{{ $service->price }} / head )</p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>