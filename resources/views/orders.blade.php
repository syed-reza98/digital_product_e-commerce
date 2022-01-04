<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
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
                    {{-- <form action="products/add" method="GET" class="w-full max-w-sm">
                        @csrf
                        <button type="submit" class="shadow bg-green-100 hover:bg-green-100 focus:shadow-outline focus:outline-none text-xs font-bold py-3 px-5 rounded">
                          Add Product
                        </button>
                    </form> --}}
                </div>
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Order ID
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Product Name
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Customer Name
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email
                                        </th>
                                        <th scope="col" class="px-6 py-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Address
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Phone Number
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Total
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Quantity
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Bkash Transaction ID
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Payment Status
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
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
                                            {{-- <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                            </div> --}}
                                            <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $item->id }}
                                            </div>
                                            </div>
                                        </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $item->products->name }}
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $item->first_name }}{{ $item->last_name }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $item->email }}
                                            </div>
                                        </td>

                                        <td class="px-6 py-6 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $item->address1 }}
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $item->phone }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $item->total }}
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $item->quantity }}
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $item->bkash }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $item->payment_status }}
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $item->status }}
                                            </div>
                                            
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
