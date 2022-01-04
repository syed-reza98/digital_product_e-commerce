<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Category') }}
        </h2>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" ></script>

    </x-slot>

				@if(Session()->has('success'))
                    <script>
                        swal("success","{{Session()->get('success')}}","success");
                        </script>
                 @endif

			<div class="min-h-0 flex items-center justify-center bg-gray-50 py-6 px-4 sm:px-6 lg:px-8">

				<form class="space-y-6 w-half" action="{{ route('addCategoryPostRequest') }}" method="POST">
                    @csrf

					<input type="hidden" name="remember" value="True">
					<div class="rounded-md shadow-sm -space-y-px">
						<div class="grid gap-6">
							<div class="col-span-12 ">
								<label for="CategoryName" class="block text-lg font-medium text-blue-600">Category Name</label>
								<input type="text" name="CategoryName" id="CategoryName" placeholder="Enter Category Name"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <span style="color:red">@error('CategoryName'){{$message}}@enderror</span>
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


</x-app-layout>
