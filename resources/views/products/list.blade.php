<x-layout>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold mb-1">
                Products List
            </h1>
        </div>
        <a href="{{ route('products.create') }}"
        class="btn btn-primary">
            Add new product
        </a>
    </div>
    <div class="row">
        @foreach($products as $product)
            <x-product-card :product="$product"/>
        @endforeach
    </div>

</x-layout>
