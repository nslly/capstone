<x-app-layout>
    <div class="mx-auto w-full max-w-7xl px-4 sm:px-20 lg:px-12 mt-12 mb-20">
        <div class="flex flex-col lg:flex-row justify-between gap-8">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">About Us</h1>
                <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">Laque Beach is a secluded and peaceful getaway located on a private island in the Mariveles Bataan. We offer a unique and exclusive vacation experience for those looking to escape the hustle and bustle of everyday life. Our resort features a variety of accommodations, from beachfront bungalows to overwater villas, all with breathtaking views of the ocean. Guests can enjoy a variety of activities, such as snorkeling, kayaking, and hiking, as well as relax on the powdery white sands of our secluded beach. Our on-site restaurant serves delicious and fresh seafood, as well as local and international cuisine. Our dedicated staff is committed to providing personalized service and creating an unforgettable experience for all of our guests. Come and experience the tranquility and natural beauty of Laque Beach.</p>
            </div>
            <div class="w-full lg:w-8/12">
                <img class="w-full h-full" src="{{ asset('images/our_story.jpg') }}" alt="Our Team" />
            </div>
        </div>

        <div class="flex lg:flex-row flex-col justify-between gap-8 pt-12">
            <div class="w-full mx-auto lg:w-8/12 lg:pt-8">
                <div class="grid md:grid-cols-5 sm:grid-cols-3 grid-cols-2 lg:gap-4 shadow-lg rounded-md">
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden h-28 w-24" src="{{ asset('images/about_us/nslly.jpg') }}" alt="Alexa featured Image" />
                        <img class="md:hidden block h-28 w-24" src="{{ asset('images/about_us/nslly.jpg') }}" alt="Alexa featured Image" />
                        <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Nslly</p>
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden h-28 w-24" src="{{ asset('images/about_us/kieven.jpg') }}" alt="Olivia featured Image" />
                        <img class="md:hidden block h-28 w-24" src="{{ asset('images/about_us/kieven.jpg') }}" alt="Olivia featured Image" />
                        <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Kieven</p>
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden h-28 w-24" src="{{ asset('images/about_us/junell.jpg') }}" alt="Liam featued Image" />
                        <img class="md:hidden block h-28 w-24" src="{{ asset('images/about_us/junell.jpg') }}" alt="Liam featued Image" />
                        <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Junell</p>
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden h-28 w-24" src="{{ asset('images/about_us/stephine.jpg') }}" alt="Elijah featured image" />
                        <img class="md:hidden block h-28 w-24" src="{{ asset('images/about_us/stephine.jpg') }}" alt="Elijah featured image" />
                        <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Stephine</p>
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden h-28 w-24" src="{{ asset('images/about_us/arries.jpg') }}" alt="Elijah featured image" />
                        <img class="md:hidden block h-28 w-24" src="{{ asset('images/about_us/arries.jpg') }}" alt="Elijah featured image" />
                        <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Arries</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>