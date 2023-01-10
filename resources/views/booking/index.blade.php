<x-app-layout>
    
    <div class="mb-10">
        <div class="container mx-auto">
			<div class="flex justify-center px-6">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
                    <img src="{{ asset('images/reservation.jpg') }}" alt="reservation image" class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg">
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white p-5 rounded-xl lg:rounded-l-none">
						<h3 class="pt-4 text-3xl text-center">Reservation</h3>
                        <hr class="mt-3 border-t" />
						<form action="/booking" method="POST" enctype="multipart/form-data" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                            @csrf
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="email">
									Email
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="email"
									type="email"
                                    name="customer_email"
                                    value="{{ auth()->user()->email }}"
								/>
                                @if ($errors->has('customer_email'))
                                    <p class="text-red-500">{{ $errors->first('customer_email') }}</p>
                                @endif
							</div>

                            <div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="contact_num">
									Contact Number
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="contact_num"
									type="number"
                                    name="contact_num"
								/>
                                @if ($errors->has('contact_num'))
                                    <p class="text-red-500">{{ $errors->first('contact_num') }}</p>
                                @endif
							</div>


                            <div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="contact_num">
									Package available
								</label>
								<select name="package" id="package" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
									@foreach ($packages as $package)
										
											<option value="{{ $package->name }}">{{ $package->name }}</option>
										
										@if ($errors->has('contact_num'))
											<p class="text-red-500">{{ $errors->first('package') }}</p>
										@endif
									@endforeach
								</select>
							</div>

                            <div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="number">
									Number Of Person
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="number"
									type="number"
                                    name="customer_avail"
								/>
                                @if ($errors->has('customer_avail'))
                                    <p class="text-red-500">{{ $errors->first('customer_avail') }}</p>
                                @endif
							</div>
                        

                            <div class="mb-4">
								<div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="services">
										Services Available 
                                    </label>
									<div class="my-4 space-y-4 md:my-8 md:space-y-0 md:grid md:grid-cols-2 md:gap-5">
										@forelse ($services as $service)
											<div class="block md:mb-2">
												<input
												type="checkbox"
												class="appearance-none indeterminate:bg-gray-300 services"
												name="customer_services_avail[]"
												value="{{ $service->service_name }}"
												/>
												<label class="md:ml-1 text-sm text-gray-700">{{  $service->service_name }}</label>
												<p class="text-sm text-orange-600">( ₱{{ $service->price }} / head )</p>
											</div>
										@empty
											<p>No services as of now.</p>
										@endforelse	
									</div>
                                    
								</div>
                                @if ($errors->has('customer_services_avail'))
                                    <p class="text-red-500">{{ $errors->first('customer_services_avail') }}</p>
                                @endif
							</div>
                            

                            <div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="res_date">
									Date Of Reservation
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="res_date"
									type="date"
                                    name="res_date"
								/>
                                @if ($errors->has('res_date'))
                                    <p class="text-red-500">{{ $errors->first('res_date') }}</p>
                                @endif
							</div>
							

							<div class="mb-6 text-center">
								<button
									class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
									type="submit"
								>
									Submit
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
</x-app-layout>

