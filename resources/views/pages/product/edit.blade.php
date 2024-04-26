<x-guest-layout>
    <x-slot name="title">Edit</x-slot>

    <h1>Product Edit</h1>

    <div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div role="alert" class="alert alert-error">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Error! {{ $error }}</span>
                </div>
            @endforeach
        @endif
    </div>

    <form method="post" action="{{ route('product.update', ['product' => $product]) }}">
        @csrf
        @method('put')

        <div>
            <span class="label-text">Name</span>
            <input type="text" name="name" placeholder="Name" value="{{ $product->name }}" class="input input-bordered w-full max-w-xs" />
        </div>

        <div>
            <span class="label-text">Image</span>
            <input type="file" name="image" value="{{ $product->image }}" class="file-input file-input-bordered w-full max-w-xs" />
        </div>

        <div>
            <span class="label-text">Category</span>
            <input type="text" name="category" placeholder="Category" value="{{ $product->category }}" class="input input-bordered w-full max-w-xs" />
        </div>

        <div>
            <span class="label-text">Type</span>
            <input type="text" name="type" placeholder="Type" value="{{ $product->type }}" class="input input-bordered w-full max-w-xs" />
        </div>

        <div>
            <span class="label-text">Quantity</span>
            <input type="number" name="quantity" placeholder="Quantity" value="{{ $product->quantity }}" class="input input-bordered w-full max-w-xs" />
        </div>

        <div>
            <span class="label-text">Group</span>
            <input type="text" name="group" placeholder="Group" value="{{ $product->group }}" class="input input-bordered w-full max-w-xs" />
        </div>

        <div>
            <span class="label-text">Notes</span>
            <input type="text" name="notes" placeholder="Notes" value="{{ $product->notes }}" class="input input-bordered w-full max-w-xs" />
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</x-guest-layout>
