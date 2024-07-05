@extends("product.app")
@section("product")
<div class="container mx-auto p-4 mt-32 mb-32">
    <div class="flex flex-col lg:flex-row">
        <!-- Sidebar with small images -->
        <div class="flex flex-col items-center mb-4 lg:mb-0 lg:mr-4">
            <img src={{asset('storage/01J213M80WYBVYXYPVBT6W8N3Y.jpg')}} alt="Small Image 1" class="mb-2 w-20 h-20 object-cover border border-gray-300">
            <img src={{asset('storage/01J213M80WYBVYXYPVBT6W8N3Y.jpg')}} alt="Small Image 2" class="mb-2 w-20 h-20 object-cover border border-gray-300">
        </div>
        <!-- Main product image and details -->
        <div class="flex-1 flex flex-col lg:flex-row">
            <!-- Main Image -->
            <div class="flex justify-center items-center mb-4 lg:mb-0 lg:mr-4">
                <img src={{asset('storage/01J213M80WYBVYXYPVBT6W8N3Y.jpg')}} alt="Main Product Image" class="max-w-full max-h-[500px] object-cover border border-gray-300">
            </div>
            <!-- Product Details -->
            <div class="flex-1 px-20">
                <nav class="text-gray-600 text-sm mb-4">
                    <a href="#" class="hover:underline">Gift</a> / 
                    <a href="#" class="hover:underline">Jewellery</a> / 
                    <a href="#" class="hover:underline">Anniversary Gift Ideas</a> / 
                    <a href="#" class="hover:underline">Reflections</a> / 
                    <a href="#" class="hover:underline">Bracelets</a>
                </nav>
                <h1 class="text-2xl font-semibold mb-2">Reflections Baguette Bracelet</h1>
                <p class="text-xl text-gray-800 mb-2">IDR 19.809.000</p>
                <p class="text-gray-600 mb-4">Installment starting at IDR 1.650.750 <a href="#" class="text-blue-500 hover:underline">SEE OPTIONS</a></p>
                <div class="flex items-center mb-4">
                    <span class="text-green-500 font-semibold mr-2">Ready Stock</span>
                    <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div class="flex space-x-4 mb-4">
                    <button class="bg-gray-200 text-gray-800 px-4 py-2 rounded-lg hover:bg-green-500">ORDER BY PHONE</button>
                </div>
                <div class="flex space-x-4 text-gray-600">
                    <a href="#" class="hover:underline flex items-center">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.5 12.5l-1.5-1.5m0 0l-1.5 1.5m1.5-1.5V21m0 0v-8.5m0-1.5H21m-9 9v-8.5m0 8.5V21m0-8.5H21m-1.5 9.5H8.5m-1.5 0h-3"></path>
                        </svg>
                        SHARE
                    </a>
                    <a href="#" class="hover:underline flex items-center">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        DROP A HINT
                    </a>
                    <a href="#" class="hover:underline flex items-center">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 18.364l1.414-1.414a1.5 1.5 0 011.414-.293A9.977 9.977 0 0012 21a9.977 9.977 0 004.95-1.343 1.5 1.5 0 011.414.293l1.414 1.414A9.978 9.978 0 0112 24a9.978 9.978 0 01-6.879-2.636z"></path>
                        </svg>
                        FIND A STORE
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection