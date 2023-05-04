<x-app-layout>
    <section class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-5">
        <div class="container mx-auto mb-16">
            <div>
                <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" style="cursor: auto;">
                    <div class="max-w-lg mx-auto overflow-hidden rounded-lg shadow-lg lg:max-w-none lg:flex">
                        <div class="flex-1 px-6 py-8 bg-white lg:p-12 relative" style="cursor: auto;">
                            <div class="flex flex-col sm:flex-row w-full">
                                <div class="flex justify-start w-1/2 ">
                                    <h3 class="text-2xl font-extrabold text-gray-900 sm:text-3xl" style="cursor: auto;">Add more</h3>
                                </div>
                                <div class="flex w-1/2 align-center justify-end">
                                    <a href="{{ route('package.show', $package->id) }}" class="font-bold text-base  text-blue-500 hover:text-blue-600 underline ">
                                        See addded services
                                    </a>
                                </div>
                            </div>
                            <p class="mt-6 text-base text-gray-500">You can add a service or activities here if you want. Please check the blank if you want to add a services.</p>
                            <div class="mt-8">
                                <div class="flex items-center">
                                    <h4 class="flex-shrink-0 pr-4 text-sm font-semibold tracking-wider text-orange-600 uppercase bg-white">Activites/Services</h4>
                                    
                                    <div class="flex-1 border-t-2 border-gray-200"></div>
                                </div>
                                <div>
                                    <ul class="mt-8 space-y-4 lg:space-y-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:gap-y-5">
                                        @foreach ($services as $service)
                                            <li class="flex items-start justify-center lg:col-span-1">
                                                <div class="bg-white rounded-lg shadow-lg relative">
                                                    @if($service->service_discount >= 1)
                                                        <div class="absolute top-0 right-0">
                                                            <div class="py-1.5 px-4 rounded-lg bg-red-600">
                                                                <p class="text-sm text-white">{{ $service->service_discount }}% Off</p>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <img src="{{ asset($service->image_path) }}" alt="Services Image" class="rounded-t-lg h-40 w-full">
                                                    <div class="p-6">
                                                        <h2 class="font-bold mb-2 text-xl">
                                                            {{ $service->service_name  }}
                                                        </h2>
                                                        <div class="flex my-2">
                                                            @php
                                                                $discount = ($service->service_discount / 100) * $service->price;
                                                                $price    = $service->price - $discount; 
                                                            @endphp
                                                            <p class="text-slate-500 ">Price: </p>
                                                            @if($service->service_discount >= 1)
                                                                <p class="text-gray-400 ml-2 line-through" >( ₱{{ $service->price }} )</p>
                                                                <p class="text-red-500 ml-2">( ₱{{ $price }} )</p>
                                                            @else 
                                                                <p class="text-red-500 ml-2">( ₱{{ $price }} )</p>
                                                            @endif
                                        
                                                        </div>
                                                        <form action="{{ route('package.add_service', ['id' => $package->id])  }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="services_name" value="{{ $service->service_name }}">
                                                            <input type="hidden" name="services_price" value="{{ $price }}">
                                                            <div class="rounded-md shadow mt-1 ">
                                                                <button type="submit" class="flex items-center justify-center w-full px-3 py-1.5 text-base font-sm text-white bg-orange-600 border border-transparent rounded-md hover:bg-orange-700"
                                                                >Add Service</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach 
                                    </ul>
                                </div>
                            </div>
                            <div class="mx-auto flex justify-center">
                                <div class="mt-6">
                                    {{ $services->links('pagination::tailwind') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</x-app-layout>