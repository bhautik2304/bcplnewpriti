<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Store Locator</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- jquery cdn link --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Header section -->

    <div class="container-fluid bg-white text-black headercontainer">
        <div class="firstnav mt-3 pe-5 text-center">
            <nav class="allnav">
                <ul class="nav-links">
                    <li><a href="{{ route('about') }}" class="leftmenu">ABOUT US</a></li>
                    <li><a href="{{ route('Brands') }}" class="leftmenu">BRANDS</a></li>
                    <li>
                        <a href="{{ route('Maisondeperfums') }}" class="leftmenu">MAISON DES PARFUMS</a>
                    </li>
                    <li>
                        <a href="{{ route('Index') }}" class="centermenu"><img src="pictures/logoblack.png"
                                alt="" /></a>
                    </li>
                    <li><a href="{{ route('Ourstores') }}" class="rightmenu">OUR STORES</a></li>
                    <li>
                        <a href="{{ route('createForm') }}" class="rightmenu">CONTACT US</a>
                    </li>
                    <li>
                        <a href="{{ route('Storelocator') }}" class="rightmenu active">STORE LOCATOR</a>
                    </li>
                </ul>
                <div class="float-end language-class">
                                    <!-- Button trigger modal -->

    <img src="/pictures/internet-black.png" alt="" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width:25px" >

<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
      <div class="google-class" id="google_element"></div>
      </div>

    </div>
  </div>
</div>



                            </div>
            </nav>
        </div>
        <div class="secondnav">
            <nav class="navbar navbar-expand-xm navbar-light p-md-3">
                <div class="container">
                    <a class="navbar-brand" class="centermenu" href="{{ route('Index') }}"><img
                            src="pictures/logoblack.png" width="40%" alt="" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mx-auto"></div>
                        <ul class="navbar-nav d-flex flex-column text-start mt-3">
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('about') }}">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('Brands') }}">BRANDS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{route('Maisondeperfums')}}">MAISON DES PARFUMS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('Ourstores') }}">OUR STORES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('createForm') }}">CONTACT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="{{ route('Storelocator') }}">STORE LOCATOR</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <img src="pictures/store-locator-01.png" width="100%" alt="" />


    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 storecard">
                <div class="wrapper mt-3 mb-5">
                    <div class="st">
                        <label class="storelabel">
                            <select onchange="store()" id="store" class="form-select form-store"
                                aria-label="Default select example">
                                <option selected value="0">Store</option>


                                <!---   store data   --->
                                @foreach ($storedata as $store)
                                <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                                <!---   store data   --->


                            </select>
                        </label>
                    </div>
                    <div class="st">
                        <label class="storelabel-2">
                            <select onchange="storeCity()" id="storeCity" class="form-select form-store appendcity"
                                aria-label="Default select example">
                                <option selected value="0">City</option>


                                <!---   city data   --->
                                {{-- @foreach ($storecity as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach --}}
                                <!---   city data   --->


                            </select>
                        </label>
                    </div>
                </div>
                <div class="scroll-container">


                    <!--------- Your Store Data-------->
                    <div class="modelclass">

                    </div>
                    <div class="scroll-page store">
                        <p><b>SELECT CITY WALK</b></p>

                        <p>G – 55, Ground Floor, Select City Walk, New Delhi - 110017</p>

                        <p><b>PALLADIUM MUMBAI</b></p>

                        <p>F-15A, 1st Floor, Palladium Mall, Lower Parel, Mumbai - 400013</p>

                        <p> <b>JIO WORLD DRIVE</b></p>

                        <p>F-32, 1st Floor, Jio World Drive Mall, Bandra Kurla Complex, Bandra East, Mumbai - 400051</p>

                        <p><b>BEAUTE LUXE, KOLKATA:</b></p>

                        <p>Domestic Airport ,Jessore Rd, Dum Dum, Kolkata, West Bengal - 700052</p>

                        <p><b>BEAUTE LUXE, MUMBAI</b></p>

                        <p>Gr Floor, Inorbit Mall, New Link Rd, Malad West, Mumbai, Maharashtra 400064</p>

                    </div>

                    <!--------- Your Store Data-------->
                </div>
            </div>

            <!-------------map ifram--------------->
            <div class="col-lg-6">
                <div class="iframes">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.3748146587704!2d77.21678531409329!3d28.528451695536855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce18b191c94cd%3A0x85c0f34afdd33a5f!2sMaison%20des%20Parfums!5e0!3m2!1sen!2sin!4v1654511375707!5m2!1sen!2sin"
                        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="iframe">

                </div>
            </div>


            <!-------------map ifram--------------->

        </div>
    </div>

    <!-- footer -->

    <x-footer />
    <!-- Button trigger modal -->
<button type="button" onclick="model()">
    Launch demo modal
</button>

  <!-- Modal -->
  <div class="modal fade" id="model">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" onclick="closemodel()"></button>
        </div>
        <div class="modal-body">
    <div class="owl-carousel">
        <div class="mySlides1">
            <img src="https://hatrabbits.com/wp-content/uploads/2017/01/random.jpg" style="width:100%" height="600px" />
            <div class="note">
            </div>
        </div>
        <div class="mySlides1">
            <img src="https://hatrabbits.com/wp-content/uploads/2017/01/random.jpg" style="width:100%" height="600px" />
            <div class="note">
            </div>
        </div>
        <div class="mySlides1">
            <img src="https://hatrabbits.com/wp-content/uploads/2017/01/random.jpg" style="width:100%" height="600px" />
            <div class="note">
            </div>
        </div>
    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
    <script src="{{url('js/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{url('js/storelocator.js')}}"></script>
    {{-- <script src="jquery.min.js"></script> --}}
    <script>

    </script>
    <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>

<script>
  function loadGoogleTranslate() {
    new google.translate.TranslateElement("google_element");
  }
</script>
</body>

</html>
