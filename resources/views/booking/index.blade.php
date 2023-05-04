<x-app-layout>
    @if($book_reserved)

				<!-- Container -->
			<div class="container mt-12 mb-16 md:p-0 mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-5">
			
				<!-- Card wrapper -->
				<div class="shadow-lg flex flex-wrap w-full lg:w-4/5 mx-auto">
				
					<!-- Card image -->
					<div class="bg-cover  bg-bottom border w-full md:w-1/3 " style="background-image:url('images/edit_reservation.jpg')">
					</div>
					<!-- ./Card image -->
					
					<!-- Card body -->
					<div class="bg-white w-full md:w-2/3">
						<!-- Card body - outer wrapper -->
						<div class="h-full mx-auto px-6 md:px-0 md:pt-6 md:-ml-6 relative">
							<!-- Card body - inner wrapper -->
							<div class="bg-white lg:h-full p-6 -mt-6 md:mt-0 relative mb-4 md:mb-0 flex flex-wrap md:flex-wrap items-center">
								<!-- Card title and subtitle -->
								<div class="w-full lg:w-1/5 lg:border-right lg:border-solid text-center">
									
									<h2 class="text-orange-500 font-bold">Your Reservation Details</h2>
								</div>
								<!-- ./Card title and subtitle -->
								
								<!-- Card description -->
								<div class="w-full lg:w-3/5 lg:px-3 text-center">
									<div class="mt-2">
										<h5 class="text-orange-500 font-bold">Email</h5>
										<p class="text-md mt-4 lg:mt-0 text-center text-sm">
											{{ $book_reserved['customer_email'] }}
										</p>
									</div>
									<div class="mt-2">
										<h5 class="text-orange-500 font-bold">Package avail</h5>
										<p class="text-md mt-4 lg:mt-0 text-center text-sm">
											{{ $book_reserved['package'] }}
										</p>
									</div>
									<div class="mt-2">
										<h5 class="text-orange-500 font-bold">Count of person</h5>
										<p class="text-md mt-4 lg:mt-0 text-center text-sm">
											{{ $book_reserved['customer_avail'] }}
										</p>
									</div>
									<div class="mt-2">
										<h5 class="text-orange-500 font-bold">Added Services</h5>
										<p class="text-md mt-4 lg:mt-0 text-center text-sm">
											{{ $book_reserved['added_services'] }}
										</p>
									</div>
									<div class="mt-2">
										<h5 class="text-orange-500 font-bold">Price</h5>
										<p class="text-md mt-4 lg:mt-0 text-center text-sm">
											{{ $book_reserved['avail_price'] }}
										</p>
									</div>
									<div class="mt-2">
										<h5 class="text-orange-500 font-bold">Tour Guide</h5>
										<p class="text-md mt-4 lg:mt-0 text-center text-sm">
											{{ $book_reserved['tour_guide'] }}
										</p>
									</div>
									<div class="mt-2">
										<h5 class="text-orange-500 font-bold">Reservation Date</h5>
										<p class="text-md mt-4 lg:mt-0 text-center text-sm">
											{{ $book_reserved['res_date'] }}
										</p>
									</div>
								
								</div>
								<!-- ./Card description -->
								
								<!-- Call to action button -->
								<div class="w-full lg:w-1/5 mt-6 lg:mt-0 lg:px-4 text-center">
									<a href="{{ route('booking.edit', $book_reserved['id']) }}" class="bg-blue-500 cursor-pointer hover:bg-blue-600 text-white p-6 border border-solid rounded w-1/3 lg:w-full py-2">Edit </a>
								</div>
								<!-- ./Call to action button -->
							</div>
						<!-- ./Card body - inner wrapper -->
						</div>
						<!-- ./Card body - outer wrapper -->
					</div>
					<!-- ./Card body -->
				</div>
				<!-- ./Card wrapper -->
			</div>
			<!-- ./Container -->	
	@else
		<!-- Container -->
		<div class="container mt-12 mb-16 md:p-0 mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-5">
		
			<!-- Card wrapper -->
			<div class="shadow-lg flex flex-wrap w-full lg:w-4/5 mx-auto">
			
				<!-- Card image -->
				<div class="bg-cover  bg-bottom border w-full md:w-1/3 h-80" style="background-image:url('images/edit_reservation.jpg')">
				</div>
				<!-- ./Card image -->
				
				<!-- Card body -->
				<div class="bg-white w-full  md:w-2/3">
					<!-- Card body - outer wrapper -->
					<div class="h-full mx-auto px-6 md:px-0 md:pt-6 md:-ml-6 relative">
						<!-- Card body - inner wrapper -->
						<div class="bg-white lg:h-full p-6 -mt-6 md:mt-0 relative mb-4 md:mb-0 flex flex-wrap md:flex-wrap items-center">
							<!-- Card title and subtitle -->
							<div class="w-full px-4 lg:w-1/5 lg:border-right lg:border-solid text-center md:text-left">
								<h3 class="text-orange-500 font-bold">Your Reservation Details</h3>
							</div>
							<!-- ./Card title and subtitle -->
							
							<!-- Card description -->
							<div class="w-full lg:w-3/5 lg:px-3 px-4">
								<p class="text-md mt-4 lg:mt-0 text-justify md:text-left text-sm">
									Im sorry, you have no current details here. Click the button to reserve you as soon as possible. Thank you.
								</p>
							</div>
							<!-- ./Card description -->
							
							<!-- Call to action button -->
							<div class="w-full px-2 lg:w-1/5 mt-6 lg:mt-0 lg:px-4 text-center md:text-left">
								<a href="{{ route('booking.create') }}" class="bg-blue-500 cursor-pointer hover:bg-blue-600 text-white p-6 border border-solid rounded w-1/3 lg:w-full py-2">Book</a>
							</div>
							<!-- ./Call to action button -->
						</div>
					<!-- ./Card body - inner wrapper -->
					</div>
					<!-- ./Card body - outer wrapper -->
				</div>
				<!-- ./Card body -->
			</div>
			<!-- ./Card wrapper -->
		</div>
		<!-- ./Container -->
	@endif
</x-app-layout>

