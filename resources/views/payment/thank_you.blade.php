<x-app-layout>
    <section class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-5 my-20" >
        <div class="flex flex-wrap items-center ">
            <!-- Column-1 -->
            <div class="px-3 mb-12 w-full lg:mb-0 lg:w-2/5 mt-6">
                <!-- Illustrations Container -->
                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/thankyou.svg') }}" alt="Pending approval image">
                </div>
            </div>
            

            <!-- Column-2 -->
            <div class="px-16 w-full lg:w-3/5">
                <div
                    class="mx-auto mb-8  text-center lg:mx-0 lg:text-left">
                    <h2 class="visible mx-0 mt-3 mb-0 text-xl font-bold leading-relaxed text-left sm:text-3xl text-slate-400 tracking-wide">
                        Thank you for availing and booking in laque beach. We hope you enjoy the trip.
                        <span class="text-orange-600">
                            Thank you.
                        </span>
                    </h2>
                    <span class="text-gray-400 font-bold mt-2 text-md block">(Note: Please save your screenshot of proof of payment for your accomodation.) </span>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>