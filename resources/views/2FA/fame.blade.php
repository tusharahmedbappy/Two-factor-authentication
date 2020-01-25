<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Two | Factor | Authentication</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>

    <body>
        <div class="contianer">
            <section class="login-block">
                <div class="container">
                    <div class="row">
                            @yield('form_content')
                        <div class="col-md-8 banner-sec">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid"
                                            src="https://static.pexels.com/photos/33972/pexels-photo.jpg"
                                            alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <div class="banner-text">
                                                <h2>This is Heaven</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis
                                                    nostrud exercitation</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid"
                                            src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg"
                                            alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <div class="banner-text">
                                                <h2>This is Heaven</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis
                                                    nostrud exercitation</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid"
                                            src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg"
                                            alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <div class="banner-text">
                                                <h2>This is Heaven</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis
                                                    nostrud exercitation</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            </section>
        </div>


        <script src="{{asset('js/app.js')}}"></script>
    </body>

</html>