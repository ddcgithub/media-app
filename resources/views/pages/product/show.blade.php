<x-guest-layout>
    <x-slot name="title">Welcome</x-slot>

    <h1>Product Show</h1>

    <div>
        @if (session()->has('success'))
            <div role="alert" class="alert alert-success">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif
    </div>

    <a href="{{ route('product.create') }}" class="btn btn-primary">Create</a>

    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Quantity</th>
                    <th>Group</th>
                    <th>Notes</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="bg-base-200">
                        <th>{{ $loop->index + 1 }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->image }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->type }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->group }}</td>
                        <td>{{ $product->notes }}</td>
                        <td>
                            <a href="{{ route('product.edit', ['product' => $product]) }}"
                                class="link link-warning">Edit</a>
                            <form method="post" action="">
                                @csrf
                                @method('delete')
                                <button type="submit" class="link link-error">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-guest-layout>
