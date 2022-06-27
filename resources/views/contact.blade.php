<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Contact us</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="js/main.js"></script>
  <link rel="stylesheet" href="css/style.css">

  {{-- jquery cdn link --}}
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Header section -->

  <div class="container-fluid bg-white text-black headercontainer">
    <div class="firstnav mt-3 pe-5 text-center">
      <nav class="allnav">
        <ul class="nav-links">
          <li><a href="{{route('about')}}" class="leftmenu">ABOUT US</a></li>
          <li><a href="{{route('Brands')}}" class="leftmenu">BRANDS</a></li>
          <li>
            <a href="{{route('Maisondeperfums')}}" class="leftmenu">MAISON DE PARFUMS</a>
          </li>
          <li>
            <a href="{{route('Index')}}" class="centermenu"><img src="pictures/logoblack.png" alt="" /></a>
          </li>
          <li><a href="{{route('Retail')}}" class="rightmenu">RETAIL</a></li>
          <li>
            <a href="{{ route('createForm') }}" class="rightmenu active">CONTACT US</a>
          </li>
          <li>
            <a href="{{route('Storelocator')}}" class="rightmenu">STORE LOCATOR</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="secondnav">
      <nav class="navbar navbar-expand-xm navbar-light p-md-3">
        <div class="container">
          <a class="navbar-brand" class="centermenu" href="{{route('Index')}}"><img src="pictures/logoblack.png" width="40%" alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav mt-3">
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('about')}}">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('Brands')}}">BRANDS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('Maisondeperfums')}}">MAISON DE PARFUMS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('Retail')}}">RETAIL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('createForm')}}">CONTACT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" href="{{route('Storelocator')}}">STORE LOCATOR</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <img src="pictures/contact-banner.svg" width="100%" alt="" />

  <div class="container">
    <div class="row">
      <div class="col-md-6 pt-5">
        <div id="map">
          <div class=" mt-3">
            <img src="/pictures/bcpl/map bcpl.png" width="100%" alt="Map">
          </div>
          <div id="dots">
            <div class="dot dot-1"><img src="/pictures/bcpl/warehouse.svg" />
            <span class="tooltiptext">Warehouse</span></div>
            <div class="dot dot-2"><img src="/pictures/bcpl/office.svg" />
            <span class="tooltiptext">Office</span></div>
            <div class="dot dot-3"><img src="/pictures/bcpl/beauty scentiments.svg" />
              <span class="tooltiptext p-2">
                <h5>Beauty Scentiments</h5>
                <!-- <hr/>
                <p>
                </p> -->
              </span>
            </div>
            <div class="dot dot-4"><img src="/pictures/bcpl/warehouse.svg" />
            <span class="tooltiptext">Warehouse</span></div>
            <div class="dot dot-5"><img src="/pictures/bcpl/office.svg" />
            <span class="tooltiptext">Office</span></div>
            <div class="dot dot-6"><img src="/pictures/bcpl/maison de parfums.svg" />

              <span class="tooltiptext p-2">
                <h5>Maison des parfums</h5>
                <hr />
                <p><b>(1)</b>&nbsp; PALLADIUM MUMBAI
                  ,F-15A, 1st Floor, Palladium Mall, Lower Parel,Mumbai - 400013</p>

                <p><b>(2)</b> &nbsp;JIO WORLD DRIVE
                  ,F-32, 1st Floor, Jio World Drive Mall, Bandra Kurla Complex, Bandra East, Mumbai - 400051</p>

              </span>

            </div>
            <div class="dot dot-20"><img src="/pictures/bcpl/beaute luxe.svg" />
            <span class="tooltiptext">Beaute luxe</span></div>
            <div class="dot dot-7"><img src="/pictures/bcpl/beauty scentiments.svg" />
              <span class="tooltiptext p-2">
                <h5>Beauty Scentiments</h5>
                <!-- <hr/>
                <p>SELECT CITY WALK
                  G – 55, Ground Floor, Select City Walk, New Delhi -
                </p> -->
              </span>
            </div>
            <div class="dot dot-8"><img src="/pictures/bcpl/beaute luxe.svg" />
              <span class="tooltiptext p-2">
                <h5>Beaute Luxe</h5>
                <hr />
                <p>Kochi:
                  Shop No 8, Domestic Departure Terminal,
                  Cochin International Airport Limited,
                  Aluva, Ernkulam, Kerala - 683111
                </p>
              </span>
            </div>
            <div class="dot dot-9"><img src="/pictures/bcpl/maison de parfums.svg" />
              <span class="tooltiptext p-2">
                <h5>Maison Des Parfums</h5>
                <hr />
                <p>SELECT CITY WALK
                  ,G – 55, Ground Floor, Select City Walk, New Delhi - 110017
                </p>
              </span>
            </div>
            <div class="dot dot-10"><img src="/pictures/bcpl/office.svg" />
              <span class="tooltiptext">Office</span>
            </div>
            <div class="dot dot-11"><img src="/pictures/bcpl/warehouse.svg" />
            <span class="tooltiptext">Warehouse</span></div>
            <div class="dot dot-12"><img src="/pictures/bcpl/beauty scentiments.svg" />
              <span class="tooltiptext p-2">
                <h5>Beauty Scentiments</h5>
                <hr />
                <p>VR MALL NAGPUR
                  ,VR Mall unit no. K03 Upper Ground Floor Medical Square Nagpur : 440003
                </p>
              </span>
            </div>
            <div class="dot dot-13"><img src="/pictures/bcpl/warehouse.svg" />
            <span class="tooltiptext">Warehouse</span></div>
            <div class="dot dot-14"><img src="/pictures/bcpl/office.svg" />
            <span class="tooltiptext">Office</span></div>
            <div class="dot dot-15"><img src="/pictures/bcpl/warehouse.svg" />
            <span class="tooltiptext">Warehouse</span></div>
            <div class="dot dot-16"><img src="/pictures/bcpl/office.svg" />
            <span class="tooltiptext">Office</span></div>
            <div class="dot dot-17"><img src="/pictures/bcpl/warehouse.svg" />
            <span class="tooltiptext">Warehouse</span></div>
            <div class="dot dot-18"><img src="/pictures/bcpl/office.svg" />
            <span class="tooltiptext">Office</span></div>
            <div class="dot dot-19"><img src="/pictures/bcpl/beaute luxe.svg" />
              <span class="tooltiptext p-2">
                <h5>Beaute Luxe</h5>
                <hr />
                <p>Kolkata:
                  Domestic Airport
                  Jessore Rd, Dum Dum, Kolkata, West Bengal
                </p>
              </span>
            </div>

          </div>
        </div>
        <div class="row">
          <p>

          </p>
        </div>
      </div>
      <div class="col-md-6 mt-5 mb-5 formbg pb-5">
        <div class="container">
          <form method="POST" id="formSubmit">
            @csrf
            <p class="text-center formhead">We are here to help you</p>
            <input class="fname" type="text" id="FullName" placeholder="Full name" /><br />
            <!-- Error -->
            @if ($errors->has('name'))
            <div class="error">
              {{ $errors->first('name') }}
            </div>
            @endif
            <input class="feemail" id="email" type="email" placeholder="E-Mail Address" />
            @if ($errors->has('email'))
            <div class="error">
              {{ $errors->first('email') }}
            </div>
            @endif<br />

            <input class="fnumber" id="mobail" type="number" placeholder="Contact details" />
            @if ($errors->has('phone'))
            <div class="error">
              {{ $errors->first('phone') }}
            </div>
            @endif<br />
            <select id="subject" value="Select Subject" class="selectsubject">
              @if ($errors->has('subject'))
              <div class="error">
                {{ $errors->first('subject') }}
              </div>
              @endif
              <option value="Select Subject">Select Subject</option>
              <option value="Brand Partnership">Brand Partnership</option>
              <option value="Retail Partnership">Retail Partnership</option>
              <option value="Career Options">Career Options</option>
              <option value="customer enquiries">Customer Enquiries</option>
              <option value="Feedback">Feedback</option>
              <option value="Others">Others</option>
            </select><br />
            <input class="fmessage mb-5" id="msg" type="text" placeholder="Your message" />
            @if ($errors->has('message'))
            <div class="error">
              {{ $errors->first('message') }}
            </div>
            @endif<br />
            <button class="fsubmit" type="submit">Talk to us</button><br />
        </div>
        </form>

      </div>
    </div>
  </div>

  <!-- footer -->

  <div class="container-fluid ftoor pb-4 bg-black text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="row">
            <div class="col-md-8 col-sm-6 text-center mt-5">
              <img src="pictures/logobig3.svg" width="80%" alt="" />
              <p class="mt-5 afterlogo">
                Vardaan 403 25A, Camac Street <br />
                Kolkata- 700016, India <br />
                ph: +91-33-2287-2358
              </p>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="row text-center">
                <div class="col-lg-12 col-xm-6">
                  <div class="fabev foot-about">
                    <div class="ftheadabout">
                      <span class="foothead">ABOUT US</span>
                    </div>
                    <div class="footdataaa">
                      <a href="{{route('about')}}" class="fbrands">
                        <li>Vision</li>
                      </a>
                      <a href="{{route('about')}}" class="fbrands">
                        <li>Mission</li>
                      </a>
                      <a href="{{route('about')}}" class="fbrands">
                        <li>CSR</li>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-xm-6">
                  <div class="fabev">
                    <div class="ftheadevent">
                      <span class="footheadevent">Retail</span>
                    </div>
                    <div class="footdataaa">
                      <a href="{{route('Retail')}}" class="fbrands">
                        <li>MDP</li>
                      </a>
                      <a href="{{route('Retail')}}" class="fbrands">
                        <li>Beauty Luxe</li>
                      </a>
                      <a href="{{route('Retail')}}" class="fbrands">
                        <li>Beauty Scentiments</li>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="row brandmaison">
                <div class="col-lg-12">
                  <div class="ftheadbrands">
                    <span class="foothead">BRANDS</span>
                  </div>
                  <div class="footdataaa">
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Luxury</li>
                    </a>
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Prestige</li>
                    </a>
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Popular</li>
                    </a>
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Fashion</li>
                    </a>
                    <a href="{{route('Brands')}}" class="fbrands">
                      <li>Lifestyle</li>
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <!-- <div class="ftheadmaison">
                      <span class="footheadmaison">MAISON DE PARFUMS</span>
                      <div class="footdataaa">
                        <a href="#" class="fbrands"><li>Mumbai store</li></a>
                        <a href="#" class="fbrands"><li>delhi store</li></a>
                      </div>
                    </div> -->
                </div>
              </div>
            </div>
            <div class="col-md-8 col-sm-6 mt-3">

              <div class="text-center mt-3">
                <div class="fabev">
                  <div class="mb-3">
                    <span class="icontext">Follow us: </span>&nbsp;&nbsp;
                    <span>
                      <a href="https://www.instagram.com/beautyconcepts_india/" target="_blank"><img src="/pictures/insta.png" width="12%" alt=""></a>&nbsp;&nbsp;

                      <a href="https://www.facebook.com/BeautyConceptsIndia" target="_blank"><img src="/pictures/fb.png" width="12%" alt=""></a>&nbsp;&nbsp;

                      <a href="https://www.linkedin.com/company/beauty-concepts-pvt.-ltd./" target="_blank"><img src="/pictures/linkedin.png" width="12%" alt=""></a>

                    </span>
                  </div>
                  <img src="pictures/letterbox.png" width="20%" alt="" />
                  <p class="mt-3">Subscribe to our newsletter</p>
                  <input type="email" class="femail" placeholder="Email to...." /><br />
                  <button class="fbtn">Subscribe</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-white text-black">
    <div class="row text-center p-3">
      <div class="col-md-4 wfoot">Copyright 2021</div>
      <div class="col-md-4 wfoot">Rights reserved by Beauty Concepts</div>
      <div class="col-md-4 wfoot"> <a href="https://www.roots-and-stalks.com/" target="_blank"> Powered by Roots and Stalks Digital</a></div>
    </div>
  </div>
  <script src="js/main.js" async defer></script>
  <script src="{{url('js/contactus.js')}}" async defer></script>
</body>

</html>