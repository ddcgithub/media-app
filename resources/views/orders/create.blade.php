<x-guest-layout>
    <x-slot name="title">Order create</x-slot>

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

    <form method="post" enctype="multipart/form-data" action="{{ route('order.store') }}">
        @csrf
        @method('post')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Order create</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Create your order.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Name --}}
                    <div class="col-span-full">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <div class="mt-2">
                            <input type="text" name="name" placeholder="Name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    {{-- Category --}}
                    <div class="col-span-full">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                        <div class="mt-2">
                            <input type="text" name="category" placeholder="Category"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    {{-- Type --}}
                    <div class="col-span-full">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Type</label>
                        <div class="mt-2">
                            <input type="text" name="type" placeholder="Type"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    {{-- Group --}}
                    <div class="col-span-full">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Quantity</label>
                        <div class="mt-2">
                            <input type="number" name="quantity" placeholder="Quantity"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    {{-- Quantity --}}
                    <div class="col-span-full">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Group</label>
                        <div class="mt-2">
                            <input type="text" name="group" placeholder="Group"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    {{-- Notes --}}
                    <div class="col-span-full">
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Notes</label>
                        <div class="mt-2">
                            <textarea name="notes" placeholder="Notes" rows="3"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="btn btn-primary">Save a New Product</button>
        </div>
    </form>

</x-guest-layout>
