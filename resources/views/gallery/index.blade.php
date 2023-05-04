<x-app-layout>
    <section class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-5">
        <div class="overflow-hidden mt-4 pb-12 md:mt-8">
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
            <div class="mx-auto flex justify-center">
                <div class="mt-6">
                    {{ $galleries->links('pagination::tailwind') }}
                </div>
            </div>
        </div> 
    </section>
</x-app-layout>