<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Products') }}
        </h2>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" >
        </script>
    </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="py-4 align-middle inline-block min-w-full sm:px-6 lg:px-8 sm:flex items-center justify-between">
                        <form action="#" method="GET" class="w-full max-w-sm">
                        </form>
                        <form action="#" method="GET" class="w-full max-w-sm">
                        </form>
                        <form action="#" method="GET" class="w-full max-w-sm">
                        </form>
                        <form action="#" method="GET" class="w-full max-w-sm">
                        </form>
                        <form action="#" method="GET" class="w-full max-w-sm">
                        </form>
                        <form action="#" method="GET" class="w-full max-w-sm">
                        </form>
                        <form action="#" method="GET" class="w-full max-w-sm">
                        </form>
                        <form action="#" method="GET" class="w-full max-w-sm">
                        </form>
                        <form action="{{ route('addProduct') }}" method="get" class="w-full max-w-sm">
                            @csrf
                            <button type="submit"  class="shadow bg-green-100 hover:bg-green-100 focus:shadow-outline focus:outline-none text-xs font-bold py-3 px-5 rounded">
                            Add Product
                            </button>


                        </form>
                    </div>


                    @if(Session()->has('success'))
                    <script>
                        swal("success","{{Session()->get('success')}}","success");
                        </script>
                 @endif
                {{-- @if(Session::get('fail'))
                 <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                        <p>{{Session::get('fail')}}</p>
                    </div>
                 @endif --}}
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Product's Name
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Description
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Quantity
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Price
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Action
                                            </th>
                                            {{-- <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                            </th> --}}
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($list as $item )
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">

                                                <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{-- Call Product from Database --}}
                                                    {{ $item->name }}
                                                </div>

                                                </div>
                                            </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">   {{ $item->description }}</div>

                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $item->quantity }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-bold rounded bg-green-100 text-green-800">
                                            {{ $item->status }}
                                            </span>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $item->price }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 sm:flex items-center">
                                                <form action="{{ route('editProduct',['id' => "$item->id" ]) }}"  method="GET" class="w-full max-w-sm">
                                                    @csrf
                                                    <button type="submit" class="shadow bg-green-100 hover:bg-green-100 focus:shadow-outline focus:outline-none text-xs font-bold py-2 px-4 rounded">
                                                        Edit
                                                    </button>
                                                </form>

                                                <form action="{{route('deleteProduct',['id'=>"$item->id" ])}}" method="GET"  class="w-full max-w-sm">

                                                    @csrf
                                                    <button type="submit" class="shadow bg-green-100 hover:bg-green-100 focus:shadow-outline focus:outline-none text-xs font-bold py-2 px-4 rounded">
                                                        Delete
                                                    </button>
                                                </form>
                                            {{-- <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a> --}}
                                            </td>

                                        </tr>

                                        <!-- More people... -->
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


</x-app-layout>
