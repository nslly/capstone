<x-app-layout>

    <div class="mx-auto mb-16 w-full max-w-7xl px-4 sm:px-6 lg:px-5">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-orange-600">GCASH PAYMENT</h3>
                    <p class="mt-1 text-sm text-gray-600">This information is the latest and current gcash account of laque beach. Please check it before you fill up the form.</p>
                </div>
                <div class="px-4 mt-6 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-500">GCASH NAME:</h3>
                    <h3 class="text-lg mt-1 font-medium leading-6 text-orange-600">NSLLY GULPO</h3>
                </div>
                <div class="px-4 mt-6 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-500">GCASH NUMBER:</h3>
                    <h3 class="text-lg mt-1 font-medium leading-6 text-orange-600">09445566778</h3>
                </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form action="{{ route('payment') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div class="mt-2">
                                <h3 class="pt-4 text-xl font-medium text-center sec-font">GCASH PAYMENT</h3>
                                <hr class="mx-auto w-36 h-1 mt-1 px-8 bg-orange-600 rounded border-0  ">
                            </div>
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label for="company-website" class="block text-sm font-medium text-gray-700">Email</label>
                                    <div class="mt-1 flex rounded-md">
                                        <input type="hidden" name="email" value="{{ $book_email }}">
                                        <h2 class="mt-1 text-lg">
                                            {{ $book_email }}
                                        </h2>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <label class="block text-sm font-medium text-gray-700">Upload the screenshot of payment in gcash</label>
                                <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 mb-1 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2 hover:text-blue-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="payment_file" type="file" class="text-blue-500 block text-center p-2">
                                            </label>
                                        </div>
                                        <p class="text-xs mt-1 text-gray-500">PNG, JPG, JPEG up to 5MB</p>
                                    </div>
                                </div>
                                @if ($errors->has('payment_file'))
                                    <p class="text-red-500 text-sm text-center mt-2">{{ $errors->first('payment_file') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-blue-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




</x-app-layout>