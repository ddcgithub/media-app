<x-guest-layout>
    <x-slot name="title">Media APP</x-slot>

    <div class="relative isolate overflow-hidden bg-gray-900 mb-12 py-24 sm:py-32">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">คลังสื่อ สคร. 5 จ.ราชบุรี</h2>
            <p class="mt-6 text-lg leading-8 text-gray-300">กรมควบคุมโรคห่วงใย อยากเห็นคนไทยมีสุขภาพดี</p>
          </div>
          <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
            <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
              <div class="flex flex-col-reverse">
                <dt class="text-base leading-7 text-gray-300">แผ่นพับ</dt>
                <dd class="text-2xl font-bold leading-9 tracking-tight text-white">109</dd>
              </div>
              <div class="flex flex-col-reverse">
                <dt class="text-base leading-7 text-gray-300">โปสเตอร์</dt>
                <dd class="text-2xl font-bold leading-9 tracking-tight text-white">40</dd>
              </div>
              <div class="flex flex-col-reverse">
                <dt class="text-base leading-7 text-gray-300">ใบปลิว</dt>
                <dd class="text-2xl font-bold leading-9 tracking-tight text-white">39</dd>
              </div>
              <div class="flex flex-col-reverse">
                <dt class="text-base leading-7 text-gray-300">สื่อทั้งหมด</dt>
                <dd class="text-2xl font-bold leading-9 tracking-tight text-white">399</dd>
              </div>
            </dl>
          </div>
        </div>
    </div>


    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-4">
        @if (!empty($products))
            @foreach ($products as $product)
                <div class="card bg-base-100 shadow-xl">
                    <div>
                        <img src="{{ $product->getImageURL() }}" alt="" class="rounded-t-2xl"
                            style="width:100%;height:250px;object-fit:cover;" />
                    </div>
                    <div class="card-body justify-between p-4">
                        <h2 class="card-title">{{ Str::limit($product->name, 65) }}</h2>
                        <div class="card-actions justify-end">
                            <a class="btn btn-primary w-full"
                                href="{{ route('product.detail', ['product' => $product]) }}">View</a>
                            <p class="btn-holder"><a href="{{ route('product.add.order', ['product' => $product]) }}" class="btn btn-outline-danger">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h2 class="text-error">No data</h2>
        @endif
    </div>

    <div class="my-6">
        {{ $products->links() }}
    </div>
</x-guest-layout>
