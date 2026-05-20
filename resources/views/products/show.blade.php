<x-layout>
    <div class="card">
        <div class="card-body">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <h4>
                Rp {{number_format($product->price)}}
            </h4>
        </div>

        <a href="{{ route('products') }}"
           class="btn btn-secondary">
            Back To list
        </a>
    </div>
</x-layout>
