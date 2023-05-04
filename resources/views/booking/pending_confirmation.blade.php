<x-app-layout>
    <section class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-5 my-20" >
        <div class="flex flex-wrap items-center ">
            <!-- Column-1 -->
            <div class="px-3 mb-12 w-full lg:mb-0 lg:w-2/5 mt-6">
                <!-- Illustrations Container -->
                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/pending.svg') }}" alt="Pending approval image">
                </div>
            </div>
            

            <!-- Column-2 -->
            <div class="px-16 w-full lg:w-3/5">
                <div
                    class="mx-auto mb-8  text-center lg:mx-0 lg:text-left">
                    <h2 class="visible mx-0 mt-3 mb-0 text-xl font-bold leading-relaxed text-left sm:text-3xl text-slate-400 tracking-wide">
                        Your reservation are now pending please wait for the confirmation of staff. We notify you as soon as possible.
                        <span class="text-orange-600">
                            Thank you.
                        </span>
                    </h2>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>