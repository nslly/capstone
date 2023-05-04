<x-app-layout>
    <section class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-5">
        <div class="my-12 first-letter:opacity-100 bg-zinc-50 pb-12 rounded-2xl">
            <div class="w-full bg-blue-500 pt-16 pb-24 text-center opacity-100">
                <h4 class="text-2xl text-gray-100">Choose the package plan for you</h4>
            </div>
            <div class="w-full flex items-center justify-center px-8 lg:px-16 2xl:px-0 mx-auto -mt-8 opacity-100">
                <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-8">
                    @foreach ($packages as $package)
                        <div class="bg-white shadow-2xl rounded-lg px-12 py-4">
                            <p class="text-xl text-center font-bold text-blue-500">{{ $package->name }}</p>
                            <p class="text-center p-8">
                                <span class="text-4xl font-bold text-gray-700">
                                    ₱{{ $package->price }}
                                </span>
                            </p>
                            
                            <ul class="border-t flex flex-col justify-center border-gray-300 py-8 space-y-6">
                                <li class="flex items-center space-x-2 px-8">
                                    <span class="bg-orange-600 rounded-full p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <span class="ml-3 text-gray-600 capitalize">{{ $package->count_of_person }} Person</span>
                                </li>
                                <?php 
                                    $inclusions = explode(", ", $package->inclusions) 
                                ?>
                                @foreach ($inclusions as $inclusion)
                                    <li class="flex items-center  space-x-2 px-8">
                                        <span class="bg-orange-600 rounded-full p-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        <span class="text-gray-600 capitalize ml-3">{{ $inclusion }}</span>
                                    </li>
                                @endforeach
                                <hr>
                                <div class="mt-6 flex align-center justify-center">
                                    <a href="{{ route('package.add_service', ['id' => $package->id]) }}" class="text-gray-400 font-bold text-sm uppercase hover:text-gray-500">ADD SERVICE</a>
                                </div>
                                
                            </ul>
                            <div class="flex items-center justify-center my-6">
                                <a href="{{ route('package.show', $package->id) }}" class="bg-blue-500 hover:bg-blue-600 px-8 py-2 text-sm text-gray-200 uppercase rounded-3xl font-bold transition duration-150" title="Purchase">Purchase</a>
                            </div>
                        </div>
                    @endforeach    
                </div>
            </div>
            <div class="mx-auto flex justify-center">
                <div class="mt-6">
                    {{ $packages->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </section>
</x-app-layout>