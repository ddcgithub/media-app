<x-guest-layout>
    <x-slot name="title">Product lists</x-slot>

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
                    <th>รูปภาพ</th>
                    <th>ชื่อเรื่อง</th>
                    <th>หมวดหมู่</th>
                    <th>ประเภทสื่อ</th>
                    <th>จำนวน</th>
                    <th>กลุ่ม/ศูนย์</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>

                @if (!empty($products))
                    @foreach ($products as $product)
                        <tr class="bg-base-200">
                            <th>{{ $loop->index + 1 }}</th>
                            <td><img src="{{ $product->getImageURL() }}" alt="" width="100px"></td>
                            <td>{{ Str::limit($product->name, 50) }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->type }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->group }}</td>
                            <td>
                                <a href="{{ route('product.edit', ['product' => $product]) }}"
                                    class="btn btn-xs btn-warning">Edit</a>
                            </td>
                            <td>
                                <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-xs btn-error">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="bg-base-200">
                        <td colspan="9" class="text-center text-error">No data</td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>

    {{-- {{ $products->links() }} --}}
</x-guest-layout>
