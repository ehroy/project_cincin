<section class="new-arrivals py-16 text-[#221409] italic font-serif">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-8">Explore the Passion Collection</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @csrf
            @foreach ($data as $item)
            <div class="product bg-white p-4 rounded-lg ">
                <img src={{asset('storage/'.$item->image)}} alt="Product 1" class="w-full h-64 object-cover mb-4 rounded-lg">
                <p class="text-xl font-serif">{{$item->name}}</p>
                <p class="text-gray-600 mb-4">${{$item->price}}</p>
                <a href="/product-detail/{{$item->slug}}" class="text-gray-900  py-2 px-4 rounded-lg hover:text-orange-300">View More</a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="flex justify-end px-9 py-4">
       <a href="/product">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
        </svg>
       </a>
          
    </div>
</section>