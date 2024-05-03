<x-guest-layout>
    <x-slot name="title">{{ $products->name }}</x-slot>

    <div class="bg-white">
        <div class="pt-6">
            <nav aria-label="Breadcrumb">
                <ol role="list"
                    class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <li>
                        <div class="flex items-center">
                            <a href="/" class="mr-2 text-sm font-medium text-gray-900">Home</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true"
                                class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-2 text-sm font-medium text-gray-900">{{ $products->name }}</a>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Product info -->
            <div
                class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $products->name }}</h1>
                </div>

                {{-- Image --}}
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <img src="{{ $products->getImageURL() }}" alt="" class="w-full" style="height:480px;object-fit:contain;">
                </div>

                {{-- Detail --}}
                <div class="py-6 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                    <div class="mt-4">
                        <h3 class="text-sm font-medium text-gray-900">Details</h3>

                        <div class="mt-4">
                            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                <li class="text-gray-400"><span class="text-gray-600">Group :
                                        {{ $products->group }}</span></li>
                                <li class="text-gray-400"><span class="text-gray-600">Category :
                                        {{ $products->category }}</span></li>
                                <li class="text-gray-400"><span class="text-gray-600">Type :
                                        {{ $products->type }}</span></li>
                                <li class="text-gray-400"><span class="text-gray-600">Quantity :
                                        {{ $products->quantity }}</span></li>
                                <li class="text-gray-400">
                                    <span class="text-gray-600">
                                        Note :
                                        @if (!empty($products->notes))
                                            {{ $products->notes }}
                                        @else
                                            No information
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
