<x-guest-layout>
    <x-slot name="title">Media APP</x-slot>

    <div class="hero mb-12"
        style="background-image: url(https://daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                    exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-4">

        {{-- @foreach ($products as $product)
            <div class="card bg-base-100 shadow-xl">
                <div>
                    <img src="{{ $product->getImageURL() }}" alt="" class="rounded-t-2xl" style="width:100%;height:250px;object-fit:cover;" />
                </div>
                <div class="card-body justify-between p-4">
                    <h2 class="card-title">{{ Str::limit($product->name, 65) }}</h2>
                    <div class="card-actions justify-end">
                        <a class="btn btn-primary w-full"
                            href="{{ route('product.detail', ['product' => $product]) }}">View</a>
                    </div>
                </div>
            </div>
        @endforeach --}}

    </div>

    {{-- <div class="my-6">
        {{ $products->links() }}
    </div> --}}
</x-guest-layout>
