<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
</head>

<body>
    @include('includes.header')
    @include('includes.jumbo')
    <main>
        <section>
            <div class="content">
                <div class="container">
                    @yield('content')
                </div>
            </div>
            <div class="options">
                <div class="container">
                    <div class="row">
                        <div class="option">
                            <img class="option-img" src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                            <span class="option-text">DIGITAL COMICS</span>
                        </div>
                        <div class="option">
                            <img class="option-img" src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                            <span class="option-text">DC MERCHANDISE</span>
                        </div>
                        <div class="option">
                            <img class="option-img" src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                            <span class="option-text">SUBSCRIPTIONS</span>
                        </div>
                        <div class="option">
                            <img class="option-img" src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                            <span class="option-text">COMIC SHOP LOCATOR</span>
                        </div>
                        <div class="option">
                            <img class="option-img" src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                            <span class="option-text">DC POWER VISA</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('includes.footer')
    @include('includes.bottomFooter')
</body>

</html>