@extends("product.app")
@section("product")
<div class="container mx-auto p-4 mt-24">
    <div class="flex flex-col md:flex-row justify-between items-center mb-4  border-b-2">
        <div class="mb-2 md:mb-0">
            <label for="collection" class="mr-2">Collection:</label>
            <select id="collection" class=" rounded p-2">
                <option>All</option>
                <option>peli</option>
                <option>Reflections</option>
                <option>Reflections</option>
            </select>
        </div>
        <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4 mb-2 md:mb-0">
            <div>
                <label for="occasion" class="mr-2">Occasion:</label>
                <select id="occasion" class=" rounded p-2">
                    <option>All</option>
                </select>
            </div>
            <div>
                <label for="price" class="mr-2">Price:</label>
                <select id="price" class=" rounded p-2">
                    <option>All</option>
                </select>
            </div>
        </div>
        <div>
            <label for="sort" class="mr-2">Sort By:</label>
            <select id="sort" class=" rounded p-2">
                <option>Featured</option>
            </select>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 justify-center items-center">
        @csrf
        @foreach ($data as $item)
        <div class="p-4 rounded-lg flex flex-col items-center justify-between h-80 w-full px-20">
            <a href="/product-detail/{{$item->slug}}" class="text-center">
            <img src={{asset('storage/'.$item->image)}} alt={{$item->name}} class="mb-4 h-40 w-full object-cover">
            <h2 class="text-lg font-serif mb-2">{{$item->name}}</h2>
            <p class="text-xs text-orange-950">Starts from</p>
            <p class="font-serif">IDR {{$item->price}}</p>
            </a>
        </div>
        @endforeach
       
       
    </div>
</div>
@endsection
