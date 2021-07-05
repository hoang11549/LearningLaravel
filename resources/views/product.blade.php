<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rating system</title>
    <link rel="stylesheet" href="{{ asset('./css/heart.css') }}">
    <!-- Fonts -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/19b91c275f.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @livewireStyles


</head>

<body class="antialiased">

    <div
        class="relative flex justify-center min-h-screen bg-gray-100 items-top dark:bg-gray-700 sm:items-center sm:pt-0">
        <div class="pt-2 text-2xl">



        </div>
        <div class="mt-8 overflow-hidden bg-white shadow dark:bg-gray-200 sm:rounded-lg">
            <div class="fixed inset-0 z-10 overflow-y-auto bg-white">
                <div class="flex items-center justify-center min-h-screen text-center">
                    <div class="inline-block px-2 py-6 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg w-full"
                        role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                        <div class="pb-2 bg-white">
                            <div class="flex-col items-center sm:flex">

                                <div
                                    class="flex items-center justify-center flex-shrink-0 w-12 h-12 p-4 mx-auto bg-red-100 rounded-full sm:mx-0 sm:h-16 sm:w-16">
                                    <svg class="w-full h-full text-red-600" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <line x1="19" y1="5" x2="5" y2="19"></line>
                                        <circle cx="6.5" cy="6.5" r="2.5"></circle>
                                        <circle cx="17.5" cy="17.5" r="2.5"></circle>
                                    </svg>
                                </div>
                                <div class="mt-3 mb-1 text-center sm:ml-4 sm:text-left">
                                    <h3 class="pt-1 text-3xl font-black leading-6 text-gray-900" id="modal-headline">
                                        {{ $product->title }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="w-full text-base text-center text-gray-600">
                            {{ $product->description }}
                        </div>

                        <div
                            class="justify-center w-full px-4 mt-2 font-sans text-xs leading-6 text-center text-gray-500">
                            <a href="#_">Terms and conditions apply</a>
                        </div>

                        <div class="buttonHeart ">
                            @if (empty($liking))
                                <button class="content 1 ">
                                    <span class="heart 1 "></span>
                                    <span class="text 1">Like</span>
                                    <span class="numb 2 ">{{ $numblike ?? '' }} </span>
                                </button>
                            @else
                                <button class="content 1 heart-active">
                                    <span class=" heart 1 heart-active"></span>
                                    <span class="text 1 heart-active">Like</span>
                                    <span class="numb 2 heart-active">{{ $numblike }}</span>
                                </button>
                            @endif
                        </div>

                        @livewire('product-ratings', ['product' => $product], key($product->id))
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

    <script>
        $('.content').click(function() {

            var product_id = {{ session('product_id') }};
            $.ajax({
                type: 'GET',
                url: '/heart',

                data: {
                    product_id: product_id,
                },
                success: function(result) {
                    $('.numb').html(result);
                }
            });

            $('.1').toggleClass("heart-active");
            $('.2').toggleClass("heart-active");

        });
    </script>
    @livewireScripts

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
</body>

</html>
