<x-app-layout>
    
    <div class="mb-12">
        <div class="container mx-auto">
			<div class="flex justify-center px-6">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
                    <img src="{{ asset('images/reservation.jpg') }}" alt="reservation image" class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg">
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white shadow-lg p-5 rounded-xl relative lg:rounded-l-none">
						<h3 class="pt-4 text-2xl font-medium text-center sec-font">Reservation</h3>
                        <hr class="mx-auto w-32 h-1 mt-1 px-8 bg-orange-600 rounded border-0  ">
						<form action="{{ route('booking.update', $booking['id']) }}" method="POST" enctype="multipart/form-data" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                            @csrf
                            @method('PUT')
							<div class="mb-2 border-2 py-2 rounded-lg">
								@if (Session::has('package'))
									<?php 
										$package_pick = Session::get('package');
									?>
									<div class="flex w-full justify-center flex-col align-center  ">
										<div class="flex justify-center align-center">
											<input type="hidden" name="avail_price" value="{{  $package_pick['package_price'] }}">
											<label class="block mb-2 text-sm font-medium text-gray-700">
												Price
											</label>
										</div>
										<div class="mx-auto">
											<p class="text-orange-600 text-3xl font-bold">
												{{ $package_pick['package_price'] }}
											</p>
										</div>
									</div>
								@endif
							</div>

							<div class="flex flex-col sm:flex-row">
								<div class="mb-2 pr-1 w-full">
									<label class="block mb-2 text-sm font-medium text-gray-700" for="package">
										Package available
									</label>
									@if (Session::has('package'))
										<select name="package" id="package" class="w-full px-3 py-2 mb-2 text-sm leading-tight text-gray-700 border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 rounded-md  appearance-none focus:outline-none focus:shadow-outline">
											<?php 
												$package_pick = Session::get('package');
											?>
											<option value="{{ $package_pick['package_name'] }}">{{ $package_pick['package_name'] }}</option>
												
											@if ($errors->has('package'))
												<p class="text-red-500 text-sm">{{ $errors->first('package') }}</p>
											@endif
										</select>
									@else
										<div class="flex align-center border-2 py-2 px-3 rounded">
											<p class="block text-sm font-medium text-gray-700">
												Check available
											</p>
											<a href="{{ route('package.index') }}" class="ml-1.5 text-sm font-semibold underline text-orange-600 tracking-wide  cursor-pointer hover:text-orange-700 focus:outline-none transition duration-300 ease-in-out">
												Package here.
											</a>
										</div>
										
									@endif
								</div>
							</div>
							
							<div class="flex flex-col sm:flex-row">
								<div class="mb-2 pr-1 w-full">
									<label class="block mb-2 text-sm font-medium text-gray-700" for="email">
										Email
									</label>
									<input
										class="w-full px-3 py-2 mb-2 text-sm leading-tight text-gray-700 border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 rounded-md  appearance-none focus:outline-none focus:shadow-outline"
										id="email"
										type="email"
										name="customer_email"
										value="{{ auth()->user()->email }}"
									/>
									@if ($errors->has('customer_email'))
										<p class="text-red-500 text-sm">{{ $errors->first('customer_email') }}</p>
									@endif
								</div>
								<div class="mb-2 pl-1 w-full">
									<label class="block mb-2 text-sm font-medium text-gray-700" for="contact_num">
										Contact Number
									</label>
									<input
										class="w-full px-3 py-2 mb-2 text-sm leading-tight text-gray-700 border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 rounded-md  appearance-none focus:outline-none focus:shadow-outline"
										id="contact_num"
										type="number"
										name="contact_num"
									/>
									@if ($errors->has('contact_num'))
										<p class="text-red-500 text-sm">{{ $errors->first('contact_num') }}</p>
									@endif
								</div>
							</div>
							
							<div class="flex flex-col sm:flex-row">
								<div class="mb-2 pr-1 w-full">
									<label class="block mb-2 text-sm font-medium text-gray-700" for="number">
										Number Of Person
									</label>
									<input
										class="w-full px-3 py-2 mb-2 text-sm leading-tight text-gray-700 border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 rounded-md  appearance-none focus:outline-none focus:shadow-outline"
										id="number"
										min="1"
										type="number"
										name="customer_avail"
									/>
									@if ($errors->has('customer_avail'))
										<p class="text-red-500 text-sm">{{ $errors->first('customer_avail') }}</p>
									@endif
								</div>
								<div class="mb-2 pl-1 w-full">
									<label class="block mb-2 text-sm font-medium text-gray-700" for="tour_guide">
										Tour Guide
									</label>
									<select name="tour_guide" id="tour_guide" class="w-full px-3 py-2 mb-2 text-sm leading-tight text-gray-700 border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 rounded-md  appearance-none focus:outline-none focus:shadow-outline">
										<option value="">--------</option>
										@foreach ($tour_guides as $tour_guide)
											
												<option value="{{ $tour_guide->name }}">{{ $tour_guide->name }}</option>
											
											@if ($errors->has('tour_guide'))
												<p class="text-red-500 text-sm">{{ $errors->first('tour_guide') }}</p>
											@endif
										@endforeach
									</select>
								</div>
	
							</div>


							<div class="mb-2 pl-1 w-full">
								<label class="block mb-2 text-sm font-medium text-gray-700" for="res_date">
									Date Of Reservation
								</label>
								<input
									class="w-full px-3 py-2 mb-2 text-sm leading-tight text-gray-700 border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 rounded-md  appearance-none focus:outline-none focus:shadow-outline"
									id="res_date"
									type="datetime-local"
									name="res_date"
								/>
								@if ($errors->has('res_date'))
									<p class="text-red-500 text-sm">The reservation date is required to fill up.</p>
								@endif
							</div>
							

							<div class="mb-6 w-full">
								<label class="block mb-2 text-sm font-medium text-gray-700" for="added_services">
									Added Services
								</label>
								@if(Session::get('services'))
									<ul class="mt-4 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
										@forelse (Session::get('services') as $key => $services_add )
											<li class="flex items-start lg:col-span-1">
												<span class="bg-blue-500 rounded-full p-1">
													<svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white" viewBox="0 0 20 20" fill="currentColor">
														<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
													</svg>
												</span>
												<input
													id="added_services"
													type="hidden"
													name="added_services[]"
													value="{{ $services_add['name'] }}"
												/>
												<p class="ml-3 text-sm text-gray-700">{{ $services_add['name']  }}</p>
												<p class="ml-2 text-sm text-orange-600">(₱{{ $services_add['price']  }})</p>
											</li>
										@empty
											<p>No Data</p>
										@endforelse
									</ul>
									@if ($errors->has('added_services'))
										<p class="text-red-500 text-sm">{{ $errors->first('added_services') }}</p>
									@endif
								@else 
									<div class="flex-shrink-0">
										<input type="hidden" name="added_services" value="N/A">
										<p class="ml-1 text-sm text-gray-700">( No added service )</p>
									</div>
								
								@endif
							</div>

							<div class="mb-6 text-center">
								<button
									class="w-full px-4 py-2 font-bold bookModal text-white bg-blue-500 rounded-full hover:bg-blue-600 focus:outline-none focus:shadow-outline"
									type="button"
								>
									Update
								</button>
							</div>
							<div class='fixed z-10 inset-0 invisible overflow-y-auto' aria-labelledby='modal-title' role='dialog' aria-modal='true' id='interestModal'>
								<div class='flex items-start justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0'>
									<div class='fixed inset-0 bg-black bg-opacity-75 transition-opacity' aria-hidden='true'></div>
										<span class='hidden sm:inline-block sm:align-middle sm:h-screen' aria-hidden='true'>​</span>
										<div class='inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-top sm:max-w-lg sm:w-full'>
											<div class='bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4'>
												<div class='sm:flex sm:items-start'>
													<div class='mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left'>
														<h3 class='text-lg leading-6 font-bold text-gray-900' id='modal-title'>
															Are you sure you want to update your reservation?
														</h3>
														<hr class='mt-2 w-full'>
													<div class='mt-4'>
														<p class='text-sm text-gray-500'>
															Please wait for the staff to accept your booking. Thank you 
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class='bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse'>
											<button type="submit" class='w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 cursor-pointer  bg-blue-500 text-base font-medium text-white  focus:outline-none focus:ring-1 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm'>
												Confirm
											</button>
											<button type='button' class='closeModal mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700  focus:outline-none focus:ring-1 focus:ring-offset-2  sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm'>
												Cancel
											</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
</x-app-layout>

