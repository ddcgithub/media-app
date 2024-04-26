<x-guest-layout>
    <x-slot name="title">Welcome</x-slot>

    <h1>Product Create</h1>

    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')

        <div>
            <span class="label-text">Name</span>
            <input type="text" name="name" placeholder="Name" class="input input-bordered w-full max-w-xs" />
        </div>

        <div>
            <span class="label-text">Image</span>
            <input type="text" name="" placeholder="Image" class="input input-bordered w-full max-w-xs" />
        </div>

        <div>
            <span class="label-text">Category</span>
            <input type="text" name="category" placeholder="Category" class="input input-bordered w-full max-w-xs" />
        </div>

        <div>
            <span class="label-text">Type</span>
            <input type="text" name="type" placeholder="Type" class="input input-bordered w-full max-w-xs" />
        </div>

        <div>
            <span class="label-text">Quantity</span>
            <input type="text" name="quantity" placeholder="Quantity" class="input input-bordered w-full max-w-xs" />
        </div>

        <div>
            <span class="label-text">Group</span>
            <input type="text" name="group" placeholder="Group" class="input input-bordered w-full max-w-xs" />
        </div>

        <div>
            <span class="label-text">Notes</span>
            <input type="text" name="notes" placeholder="Notes" class="input input-bordered w-full max-w-xs" />
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Save a New Product</button>
        </div>
    </form>
</x-guest-layout>
