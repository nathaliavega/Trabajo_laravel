<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fashion Store') }}
        </h2>
    </x-slot>

    <div class="py-12 content">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($products as $product)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="text-gray-900 data">
                        <div class="image">
                            <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}"
                                class="img w-full h-64 object-cover">
                        </div>
                        <div class="p-4 body">
                            <h2 class="titulo text-lg font-semibold">{{ $product['title'] }}</h2>
                            <p class="parrafo text-gray-600 text-sm mt-2">
                                {{ \Illuminate\Support\Str::limit(strip_tags($product['description']), 100) }}
                            </p>
                            <p class="price text-center text-green-500 font-semibold mt-2">${{ $product['price'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .data {
            display: grid;
            padding: 10px;
            grid-template:
                "image"
                "body";
            width: 100%;
        }

        .image {
            grid-area: image;
            width: 100%;
            height: 200px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;

            .img {
                width: 100%;
                height: 100%;
                object-fit: contain;
            }
        }

        .body {
            grid-area: body;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

            h2 {
                color: #DB663A;
                font-size: 18px;
            }

            .parrafo {
                font-size: 14px;
            }

            .price {
                margin-top: 20px;
                font-size: 15px;
                color: #00bb2d;
            }
        }
    </style>

</x-app-layout>
