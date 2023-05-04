<x-app-layout>
    <section class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-5 my-20" >
        
        <div class="flex flex-wrap items-center ">
            <!-- Column-1 -->
            <div class="px-3 mb-12 w-full lg:mb-0 lg:w-2/5 mt-6">
                <!-- Illustrations Container -->
                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/booking.svg') }}" alt="ALREADY BOOK PHOTO">
                </div>
            </div>
            
            <!-- Column-2 -->
            <div class="px-16 w-full lg:w-3/5">
                <div
                    class="mx-auto mb-8  text-center lg:mx-0 lg:text-left">
                    <h2 class="visible mx-0 mt-3 mb-0 text-xl sm:text-3xl font-bold leading-relaxed text-left text-slate-400 tracking-wide">
                        You are already reserved please wait for the staff to confirm your reservation. 
                        <span class="text-orange-600">
                            Thank you.
                        </span>
                    </h2>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>