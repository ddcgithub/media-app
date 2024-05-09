<x-guest-layout>
    <x-slot name="title">Edit</x-slot>

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

    <form method="post" enctype="multipart/form-data" action="{{ route('product.update', ['product' => $product]) }}">
        @csrf
        @method('put')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Product Edit</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Edit your media product.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Image cover --}}
                    <div class="col-span-full">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Cover
                            photo</label>
                        <div
                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">

                                @if ($product->getImageURL())
                                    <img src="{{ $product->getImageURL() }}" alt="" width="100px" class="m-auto">
                                @else
                                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                @endif


                                <div class="mt-4 flex justify-center text-sm leading-6 text-gray-600">
                                    <label class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Upload a file</span>
                                        <input name="image" accept=".jpg,.jpeg,.png,.gif,.bmp,.webp"
                                            type="file" class="sr-only">
                                    </label>
                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 5MB</p>
                            </div>
                        </div>
                    </div>

                    {{-- Name --}}
                    <div class="col-span-full">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <div class="mt-2">
                            <input type="text" name="name" value="{{ $product->name }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    {{-- Category --}}
                    <div class="col-span-full">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                        <div class="mt-2">
                            <input type="text" name="category" value="{{ $product->category }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    {{-- Type --}}
                    <div class="col-span-full">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Type</label>
                        <div class="mt-2">
                            <input type="text" name="type" value="{{ $product->type }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    {{-- Group --}}
                    <div class="col-span-full">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Quantity</label>
                        <div class="mt-2">
                            <input type="number" name="quantity" value="{{ $product->quantity }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    {{-- Quantity --}}
                    <div class="col-span-full">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Group</label>
                        <div class="mt-2">
                            <input type="text" name="group" value="{{ $product->group }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    {{-- Notes --}}
                    <div class="col-span-full">
                        <label class="block text-sm font-medium leading-6 text-gray-900">Notes</label>
                        <div class="mt-2">
                            <textarea name="notes" rows="3"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $product->notes }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="btn btn-primary">Update the product</button>
        </div>
    </form>
</x-guest-layout>
