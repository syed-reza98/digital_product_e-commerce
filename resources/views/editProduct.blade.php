<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
        <head>
    </head>
    
    </x-slot>

	      

          

			<div class="min-h-0 flex items-center justify-center bg-gray-50 py-6 px-4 sm:px-6 lg:px-8">

				<form class="space-y-6 w-half" action="{{ route('updateProductPostRequest') }}" method="POST">
                    @csrf
                    @foreach ($list as $item )

					<input type="hidden" name="id" value={{ $item->id }}>
					<input type="hidden" name="remember" value="True">
					<div class="rounded-md shadow-sm -space-y-px">
						<div class="grid gap-6">
							<div class="col-span-12 ">
								<label for="ProductName" class="block text-lg font-medium text-blue-600">Product Name</label>
								<input type="text" name="ProductName" id="ProductName" placeholder="Enter Product Name" value= {{ $item->name }} class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <span style="color:red">@error('ProductName'){{$message}}@enderror</span>
							</div>

                            <div class="col-span-12 ">
								<label for="Description" class="block text-lg font-medium text-blue-600">Description</label>
								<input type="text" name="Description" id="Description" placeholder="Write Product Description"  value= {{ $item->description }}  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <span style="color:red">@error('Description'){{$message}}@enderror</span>
							</div>

                            <div class="col-span-12 ">
								<label for="Quantity" class="block text-lg font-medium text-blue-600">Quantity</label>
								<input type="number" name="Quantity" id="Quantity"  value= {{ $item->quantity }}  placeholder="Enter Quantity"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <span style="color:red">@error('Quantity'){{$message}}@enderror</span>
							</div>

                            <div class="col-span-12 ">
								<label for="Price" class="block text-lg font-medium text-blue-600">Price</label>
								<input type="number" step="0.01" name="Price" id="Price"  value= {{ $item->price }}  placeholder="Enter Price" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <span style="color:red">@error('Price'){{$message}}@enderror</span>
							</div>

							<div class="col-span-12 ">
								<label for="Category" class="block text-lg font-medium text-blue-600">Category</label>
								<select class="form-control" name="Category" id="Category">
									<option hidden>Choose Category</option>
									@foreach ($catdata as $cat)
									<option value="{{ $cat->id }}">{{ $cat->name }}</option>
									@endforeach
								</select>
								{{-- <input type="text" name="Description" id="Description" placeholder="Write Product Description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"> --}}
                                <span style="color:red">@error('Category'){{$message}}@enderror</span>
							</div>

							
						</div>
					</div>

					@endforeach


					<div>
						<button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
							<span class="absolute left-0 inset-y-0 flex items-center pl-3">
								<!-- Heroicon name: solid/lock-closed -->
								
							</span>
							Update
						</button>
					</div>
				</form>
		</div>
	</div>


</x-app-layout>
