<x-layout>
    <h1>
        {{  isset($product) ? 'Edit Product' : 'Create Product' }}
    </h1>
    <form method="POST"
          action="{{ isset($product)
                ? route('products.update', $product->id)
                : route('products.store')}}">
        @csrf
        <div class="mb-3">
            <label class="form-label">
                Product Name
            </label>
            <input type="text"
                   name="name"
                   class="form-control"
                   value="{{ $product->name ?? '' }}">
        </div>

        <div class="mb-3">
            <label class="form-label">
                Description
            </label>
            <input name="description"
                   class="form-control"
                   value="{{ $product->description ?? '' }}">
        </div>

        <div class="mb-3">
            <label class="form-label">
                Price
            </label>
            <input type="number"
                   name="price"
                   class="form-control"
                   value="{{ $product->price ?? '' }}">
        </div>
        <button type="submit" class="btn btn-primary">
            submit
        </button>
        <a href="{{ route('products') }}"
        class="btn btn-secondary">
            Back To list
        </a>
    </form>
</x-layout>
