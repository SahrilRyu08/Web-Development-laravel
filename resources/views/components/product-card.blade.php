<div class="card mb-3">
    <div class="card-body">
        <h4>{{ $product->name }}</h4>
        <p>{{ $product->description }}</p>
        <h5>
            Rp {{ number_format($product->price) }}
        </h5>
        <a href="{{ route('products.show', $product->id) }}"
        class="btn btn-primary">
            Detail
        </a>
        <a href="{{ route('products.edit', $product->id) }}"
           class="btn btn-primary">
            Edit
        </a>
    </div>
</div>
