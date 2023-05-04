<x-app-layout>

    <section class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-5">
        <div class="container mx-auto px-20 mb-16">
            <div>
                <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" style="cursor: auto;">
                    <div class="max-w-lg mx-auto overflow-hidden rounded-lg shadow-lg lg:max-w-none lg:flex">
                        <div class="flex-1 px-6 py-8 bg-white lg:p-12" style="cursor: auto;">
                            <h3 class="text-2xl font-extrabold text-blue-500 sm:text-3xl" style="cursor: auto;">Package {{ $package->id }}</h3>
                            <p class="mt-6 text-base text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita cumque tempora excepturi. Corrupti, illo soluta!.</p>
                            <div class="mt-8">
                                <div class="flex items-center">
                                    <h4 class="flex-shrink-0 pr-4 text-sm font-semibold tracking-wider text-blue-500 uppercase bg-white">What's included</h4>
                                    <div class="flex-1 border-t-2 border-gray-200"></div>
                                </div>
                                <ul class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="w-5 h-5 text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">{{ $package->count_of_person }} Persons</p>
                                    </li>
                                    <?php 
                                        $inclusions = explode(", ", $package->inclusions) 
                                    ?>
                                    @foreach ($inclusions as $inclusion)
                                        <li class="flex items-start lg:col-span-1">
                                            <div class="flex-shrink-0">
                                                <svg class="w-5 h-5 text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                            <p class="mt-4 text-lg text-gray-500">Price </p>
                            <div class="flex items-center justify-center mt-4 text-5xl font-extrabold text-gray-900">
                                <span>₱{{ $package_price }}</span>
                                {{-- <span class="ml-3 text-xl font-medium text-gray-500">/ Day</span> --}}
                            </div>
                            <div class="mt-6">
                                <form action="{{ route('package.book')  }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="package_name" value="Package {{ $package->id }}">
                                    <input type="hidden" name="package_price" value=" {{  $package_price  }}">
                                    <div class="rounded-md shadow">
                                        <button type="submit" class="flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white bg-blue-500 border border-transparent rounded-md hover:bg-blue-600">Submit</button>
                                    </div>
                                </form>
                                
                                <div class="mt-8 flex align-center justify-center">
                                    <a href="{{ route('package.add_service', ['id' => $package->id]) }}" class="text-gray-400 underline font-bold text-sm uppercase hover:text-gray-500">ADD MORE SERVICE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(Session::get('services'))
            <div class="container mx-auto px-20 mb-16">
                <div>
                    <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" style="cursor: auto;">
                        <div class="max-w-lg mx-auto overflow-hidden rounded-lg shadow-lg lg:max-w-none lg:flex">
                            <div class="flex-1 px-6 py-8 bg-white lg:p-12" style="cursor: auto;">
                                <h3 class="text-2xl font-extrabold text-gray-900 sm:text-3xl" style="cursor: auto;">Added Services</h3>
                                <p class="mt-6 text-base text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita cumque tempora excepturi. Corrupti, illo soluta!.</p>
                                <div class="mt-8">
                                    <div class="flex items-center">
                                        <h4 class="flex-shrink-0 pr-4 text-sm font-semibold tracking-wider text-orange-600 uppercase bg-white">Extra Services</h4>
                                        <div class="flex-1 border-t-2 border-gray-200"></div>
                                    </div>
                                    <ul class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                                        @forelse (Session::get('services') as $key => $services_add )
                                            <form action="{{ route('package.show', $package->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('delete')
                                                <li class="flex items-start lg:col-span-1">
                                                    <div class="flex-shrink-0">
                                                        <svg class="w-5 h-5 text-orange-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                    <input type="hidden" name="services_name" value="{{ $services_add['name']  }}">
                                                    <input type="hidden" name="services_price" value="{{ $services_add['price']  }}">
                                                    <p class="text-sm ml-3 text-gray-700">{{ $services_add['name']  }}</p>
                                                    <p class="ml-2 text-sm text-blue-500">(₱{{ $services_add['price']  }})</p>
                                                    <button type="button" class="deleteModal ml-2"><img class="w-4" src="{{ asset('images/delete.png') }}" alt="delete icon"></button>
                                                </li>
                                                <div class='fixed z-10 inset-0 invisible overflow-y-auto' aria-labelledby='modal-title' role='dialog' aria-modal='true' id='popup-modal-delete'>
                                                    <div class='flex items-start justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0'>
                                                        <div class='fixed inset-0 bg-black bg-opacity-75 transition-opacity' aria-hidden='true'></div>
                                                            <span class='hidden sm:inline-block sm:align-middle sm:h-screen' aria-hidden='true'>​</span>
                                                            <div class='inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-top sm:max-w-lg sm:w-full'>
                                                                <div class='bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4'>
                                                                    <div class='sm:flex sm:items-start'>
                                                                        <div class='mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left'>
                                                                            <div class="flex w-full">
                                                                                <svg aria-hidden="true" class="w-5 h-5 mr-3 text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                                                <h3 class='text-lg leading-6 font-bold text-gray-900' id='modal-title'>
                                                                                    Are you sure you want to delete it?
                                                                                </h3>
                                                                            </div>
                                                                            <hr class='mt-2 w-full'>
                                                                        <div class='mt-4'>
                                                                            <p class='text-sm text-gray-500'>
                                                                                It will delete the other service you add.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class='bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse'>
                                                                <button type="submit" class='w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 cursor-pointer  bg-blue-500 text-base font-medium text-white  focus:outline-none focus:ring-1 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm'>
                                                                    Confirm
                                                                </button>
                                                                <button type='button' class='closeDeleteModal mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700  focus:outline-none focus:ring-1 focus:ring-offset-2  sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm'>
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        @empty
                                            <p>No Data</p>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
</x-app-layout>