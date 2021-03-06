<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/styles.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fruktur&family=Indie+Flower&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Concert+One|Neucha|Poiret+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


  <title>MECHANICALL</title>
</head>
<body >
  <div id="mwanzo1">
    <header>
      <div class="menu-toggle" id="hamburger">
        <i class="fas fa-bars"></i>
      </div>
      <div class="overlay"></div>
      <div class="container">
        <nav>
          <h2 class="brand"><a href="index.php">Mechani<span>Call</span>!</a></h2>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="#services">Find a Mechanic</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#contactus">Contacts</a></li>
            </ul>

          </nav>
        </div>

        <section>

          <h1 id="kubwa" >
            <span>M</span>
            <span>E</span>
            <span>C</span>
            <span>H</span>
            <span>A</span>
            <span>N</span>
            <span>I</span>

            <span class="orange">C</span>
            <span class="orange">A</span>
            <span class="orange">L</span>
            <span class="orange">L</span>
            <span>!</span>

          </h1>


        </section>
      </header>
    </div>



  <div class="container" id="services">
      <h3 id="title">FIND HELP</h3>
      <div id="yaservices" class="row">
          <!--<div class="rada">
            <h1><marquee>HOW TO USE  MECHANICALL:
            1.Enter your  Location or use the automatic locator.
            2.Choose your preferred service.
            3.Enter information about your car (if required).
            4.Get the nearest mechanic contact. </marquee></h1>
          </div >-->
        <div class="container">
          <div class="row">
            <div class="col-0"></div>
            <div class="col-12">
              <form class="form1">
                <div class="row">
                  <div class="col-3 logo11"></div>
                  <div class="col-6">
                    <p id="ser"></p>
                      <div class="form-group">
                        <!--<label><strong>Enter your Location:</strong></label>
                        <select class="form-control form-control-lg" required id="locationSelection">
                          <optgroup>
                            <option>---Select Your Location---</option>
                            <option id="ngong" value="Ngong">Ngong Road</option>
                            <option id="thika-road" value="Thikaroad">Thika Road</option>
                            <option id="kiambu-road" value="Kiamburoad">Kiambu Road</option>
                            <option id="westland" value="Westlands">Westlands</option>
                            <option id="cbd" value="Cbd">Nairobi CBD</option>
                            <option id="eastlands" value="Eastlands">Eastlands</option>
                            <option id="jogoo" value="Jogooroad">Jogoo Road</option>
                          </optgroup>

                        </select><br>-->
                        <!--<p>OR</p>
                        <button type="button" onclick="getLocation()" class="btn btn-outline-primary btn-lg btn-block">Locate me </button>-->
                      </div>
                      <br><br>
                      <h2>WHAT SERVICE BEST SUITES YOU ?</h2>
                      <a href="mechanicresult.php"><button type="button"  id="buttona" class="btn btn-outline-primary">Mechanic</button></a>
                      <a href="towresult.php"><button type="button"  id="buttona" class="btn btn-outline-primary">Tow Truck</button></a>
                      <a href="petrolresult.php"><button type="button"  id="buttona" class="btn btn-outline-primary">Petroleum Services</button></a>


                  </div>
                  <div class="col-3 logo22"></div>
                </div>
              </form>
              </div>
            <div class="col-0"></div>
          </div>
            <br><br>

              <div id="contactForm" >
                <p id="demo"></p>
                <h2>Help us understand your problem</h2>
                <small><em>Which part is causing the breakdown</em></small>
                <form action="" method="post" action="">
                    <input type="hidden" name="new" value="1" />
                  <fieldset class="form-group">
                    <div class="row">
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="problem" id="gridRadios1" value="Engine" checked>
                          <label class="form-check-label" for="gridRadios1">
                            Engine
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="problem" id="gridRadios2" value="Transmission">
                          <label class="form-check-label" for="gridRadios2">
                            Transmission
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="problem" id="gridRadios3" value="Brakes">
                          <label class="form-check-label" for="gridRadios3">
                            Brakes
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="problem" id="gridRadios4" value="Tyre">
                          <label class="form-check-label" for="gridRadios4">
                            Tyre
                          </label>
                        </div>

                      </div>
                    </div>
                  </fieldset>

                  <!--Brand of car-->
                  <form class="form-inline">
                    <small><em>What model is your car?</em></small>
                    <select class="form-control form-control-lg" name="carmodell" required id="inlineFormCustomSelectPref">
                      <optgroup>
                        <option>--Select Your Car Model--</option>
                        <option id="ford" value="Ford">Ford</option>
                        <option id="toyota" value="Toyota">Toyota</option>
                        <option id="nissan" value="Nissan">Nissan</option>
                        <option id="subaru" value="Subaru">Subaru</option>
                        <option id="mazda" value="Mazda">Mazda</option>
                        <option id="volvo" value="Volvo">Volvo</option>
                        <option id="MercedesBenz" value="MercedesBenz">Mercedes Benz</option>
                        <option id="rover" value="Land Rover">Land Rover</option>
                        <option id="jeep" value="Jeep">Jeep</option>
                        <option id="bmw" value="BMW">BMW</option>
                        <option id="hyundai" value="Hyundai">Hyundai</option>
                      </optgroup>

                    </select>
                    <a href="towresult.php"><button type="button" id="fnb" class="btn btn-outline-primary">Locate mechanic</button></a>




                  </form>
                  </form>





            </div>


            </div>



          </div>

        </div>

      </div>
    </div>





<div class="container" id="about">

  <h3 id="title">ABOUT US</h3>

    <br>
    <h2><em>"Reliability and quality service comes standard"</em></h2>
    <br><br>
    <p id="abo">We are a production based company with a knack in problem solving. Mechanicall is a company that was founded when the incessant generational problem of poor standards of mechanics and mechanical services became apparent to us. We then decided to improve industry standards by creating an application that is going to link quality mechanics and mechanical services to all motorists within the countrys' border.<br><br>
    We make sure everything we do honors the connection of the user and the best mechanics with the highest ratings.</p>


</div>


<!--Communicate with us-->
<div class="container" id="contactus">
  <h3 id="title">Contact US</h3>
  <div class="bg-info contact4 overflow-hiddedn position-relative">
    <!-- Row  -->
    <div class="row no-gutters">
      <div class="container">
        <div class="col-lg-6 contact-box mb-4 mb-md-0">
          <div class="">
            <h1 class="title font-weight-light text-white mt-2">Reach out to us</h1>
            <form class="mt-3">
              <div class="row" id="contacta">
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input class="form-control text-white" type="text" placeholder="name">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <input class="form-control text-white" type="email" placeholder="email address">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mt-2">
                    <textarea class="form-control text-white" rows="3" placeholder="message"></textarea>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-center mt-2">
                  <button type="submit" class="btn bg-white text-inverse px-3 py-2"><span> Submit</span></button>
                  <span class="ml-auto text-white align-self-center"><i class="icon-phone mr-2"></i>254 723456789</span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6 right-image p-r-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.791115560163!2d36.77947121516666!3d-1.3001662990516951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1b264fa4327b%3A0x4a4fd87e6260dbe!2sAdams%20Arcade!5e0!3m2!1sen!2ske!4v1655927681309!5m2!1sen!2ske" width="100%" height="405" frameborder="0" style="border:0" allowfullscreen data-aos="fade-left" data-aos-duration="3000"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
    </div>
  </div>
</div>
  <br><br><br>



<!--footer-->
<footer class="page-footer font-small unique-color-dark">
    <div id="footer" style="background-color: #1e5379">
      <div class="container">
  
        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">
  
          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">
  
            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>
  
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row-->
  
      </div>
    </div>

  
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
  
      <!-- Grid row -->
      <div class="row mt-3">
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
  
          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">MECHANICALL</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>We are a problem-solving based company that deals in matters motor-repair. We practise our exclusive right to provide mechanics for your cars care. We are the best part of you bad</p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#">Your Account</a>
          </p>
          <p>
            <a href="#">Become an Affiliate</a>
          </p>
          <p>
            <a href="#"></a>Shipping Rates</a>
          </p>
          <p>
            <a href="#">Help</a>
          </p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fas fa-home mr-3"></i> NAIROBI, NGONG, Kenya</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> customercare@mechanical.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 254712345678</p>
          <p>
            <i class="fas fa-print mr-3"></i> + 254798765432</p>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">?? Osugo:
    </div>
    <!-- Copyright -->
  
  </footer>

<!--  <script>
    $(function() {

      // Mechanics form animations
      $('#buttona').click(function() {
        $('#contactForm').fadeToggle();
      })
      $(document).mouseup(function (e) {
        var container = $("#contactForm");

        if (!container.is(e.target) // if the target of the click isn't the container...
                && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
          container.fadeOut();
        }
      });

    });
  </script>-->


    </body >

    </html>
