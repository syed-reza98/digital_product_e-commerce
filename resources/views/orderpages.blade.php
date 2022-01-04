<x-guest-layout>
	<head>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" ></script>
	</head>

				@if(Session()->has('success'))
                    <script>
                        swal("success","{{Session()->get('success')}}","success");
                        </script>
                 @endif

			<div class="min-h-0 flex items-center justify-center bg-gray-50 py-6 px-4 sm:px-6 lg:px-8">

				<form class="space-y-6 w-half" action="{{ route('addOrderPostRequest') }}" method="POST">
                    @csrf

					<input type="hidden" name="remember" value="True">
					<div class="rounded-md shadow-sm -space-y-px">
						<div class="grid gap-6">
							<div class="col-span-12 ">
								<label for="first_name" class="block text-lg font-medium text-blue-600">First Name</label>
								<input type="text" name="first_name" id="first_name" placeholder="Enter First Name"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <span style="color:red">@error('first_name'){{$message}}@enderror</span>
							</div>

							<div class="col-span-12 ">
								<label for="last_name" class="block text-lg font-medium text-blue-600">Last Name</label>
								<input type="text" name="last_name" id="last_name" placeholder="Enter Last Name"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <span style="color:red">@error('last_name'){{$message}}@enderror</span>
							</div>

                            <div class="col-span-12 ">
								<label for="email" class="block text-lg font-medium text-blue-600">Email</label>
								<input type="text" name="email" id="email" placeholder="Email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <span style="color:red">@error('email'){{$message}}@enderror</span>
							</div>

                            <div class="col-span-12 ">
								<label for="phone" class="block text-lg font-medium text-blue-600">Phone</label>
								<input type="text" name="phone" id="phone" placeholder="Enter Phone"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <span style="color:red">@error('phone'){{$message}}@enderror</span>
							</div>

                            <div class="col-span-12 ">
								<label for="address1" class="block text-lg font-medium text-blue-600">Address</label>
								<input type="text" step="0.01" name="address1" id="address1" placeholder="Enter Address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <span style="color:red">@error('address1'){{$message}}@enderror</span>
							</div>

							<div class="col-span-12 ">
								<label for="product_id" class="block text-lg font-medium text-blue-600">Product</label>
								<select class="form-control" name="product_id" id="product_id">
									<option hidden>Choose Product</option>
									@foreach ($products as $post)
									<option value="{{ $post->id }}">{{ $post->name }}</option>
									@endforeach
								</select>
                                <span style="color:red">@error('product_id'){{$message}}@enderror</span>
							</div>

							<div class="col-span-12 ">
								<label for="quantity" class="block text-lg font-medium text-blue-600">Quantity</label>
								<input type="text" step="0.01" name="quantity" id="quantity" placeholder="Enter Quantity" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <span style="color:red">@error('quantity'){{$message}}@enderror</span>
							</div>


							<div class="col-span-12 ">
								<label for="bkash" class="block text-lg font-medium text-blue-600">Bkash</label>
								<input type="text" step="0.01" name="bkash" id="bkash" placeholder="Enter Bkash" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <span style="color:red">@error('bkash'){{$message}}@enderror</span>
							</div>

						</div>
					</div>




					<div>
						<button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
							<span class="absolute left-0 inset-y-0 flex items-center pl-3">
								<!-- Heroicon name: solid/lock-closed -->

							</span>
							Save
						</button>
					</div>
				</form>
		</div>
	</div>


</x-guest-layout>
