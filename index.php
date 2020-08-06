<?php include 'backend.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Club</title>
    <link rel="icon" type="image/png" href="logotitle.png">

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- FONTAWESOME Library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    
    <!-- AOS.js -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Raleway:500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

    <!--Modified CSS Files-->
    <link rel="stylesheet" href="maincss/scrollbar.css">
    <link rel="stylesheet" href="maincss/owncss.css">
    <link rel="stylesheet" href="maincss/about.css">
    <link rel="stylesheet" type="text/css" href="SlideQuotes/quotes.css">
    <link rel="stylesheet" type="text/css" href="maincss/count.css">
    <link rel="stylesheet" type="text/css" href="maincss/sponser.css">
    <link rel="stylesheet" type="text/css" href="flipbox.css">
    <link rel="stylesheet" type="text/css" href="Contact-Form-2/contact2.css">
    <link rel="stylesheet" type="text/css" href="maincss/footer.css">
    <link rel="stylesheet" href="maincss/scroll.css">

    <!--jQuery Link for Couting-Up Numbers-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    

</head>
<body>

  

  <!--Section-1 Home-->  
  <section class="pimg1">

    <!--Nav bar (here to align links on LEFT SIDE we use "ml-auto" in collapse navbar )-->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
      <!--Logo-->
      <a class="navbar-brand" href="#"><img src="logo.png" width="70" height="70" class="d-inline-block align-top" alt=""></a>
      <button id="nav-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!--(here to align links on LEFT SIDE we use "ml-auto" in place of "mr-auto" in collapse navbar )-->
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item">
            <a class="nav-link" href="#index">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#About">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="eventpage.html">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="team.html">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.html">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Contact">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
    <!--Navbar Ends here-->



    <section id="index">
      <div class="container">
        <div class="row" id="row1" data-aos="fade-up" data-aos-duration="1500">
          <div class="col-lg-6 md-12 d-none d-lg-block">
              <img src="logo.png"  width="300" height="300" alt="">
          </div>
          <div class="col-lg-6 md-12 mt-5">
              <h1 class="display-5">TECHNICAL <span></span> CLUB</h1>
              <h5 class="display-6 d-flex justify-content-center">THE TECH SOC OF BITP</h5>
          </div>
        </div>

        <!--2nd Row-->
        <div class="row start" id="row2" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500">
          <div class="col-lg-12">
            <a class="start" href="#About">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Get Started
            </a>
          </div>
        </div>
      </div>
      <!--If you want to add another row or column then do it here in this GRID SYSTEM-->
    </section>
  </section>



  <!--Fixed Button at the right-->
  <div class="row" >
    <div id="fixed-Btn" class="col-lg-6 md-6 sm-6 xs-6" data-aos="fade-left" data-aos-delay="700" data-aos-duration="1500">
      <a href="https://www.facebook.com/bitptechnical"><i class="fab fa-facebook-square"></i></a>
      <a href="https://www.instagram.com/bitptechnical/?hl=en"><i class="fab fa-instagram"></i></a>
      <a href=""><i class="fab fa-github"></i></a>
      <a href="https://www.linkedin.com/company/14748147/"><i class="fab fa-linkedin"></i></a>
      <a href=""><i class="fab fa-youtube"></i></a>
    </div>
  </div>
  <!--Fixed btn Ends here-->




  <!--Section-2 ABOUT-->
  <section id="About" class="section section-light">
    <h1 class="h1" data-aos="fade-up">What We Do</h1>
    <hr class="style-two" data-aos="fade-up" data-aos-delay="300">
    <div class="container">

      <!--1st Row-->
      <div class="row" id="icon">
        <div class="col-lg-4" data-aos="fade-in" data-aos-delay="400">
          <h1><i class="fas fa-brain"></i></h1>
          <h4>Developing thinking and Intelligence</h4>
          <p class= brainpara>Developing Mental ability is our main moto</p>
        </div>

        <div class="col-lg-4" id="colpad" data-aos="fade-in" data-aos-delay="500">
          <h1><i class="fas fa-users"></i></h1>
          <h4>Personality Build-up</h4>
          <p class= hpara>More you Interact more you will gain confidence</p>
        </div>

        <div class="col-lg-4" id="colpad" data-aos="fade-in" data-aos-delay="600">
          <h1><i class="fas fa-briefcase"></i></h1>
          <h4>Current Market</h4>
          <p class= hpara>Get to know about the latest trend and requirement of Technology</p>
        </div>
      </div>
      <!--2nd Row-->
      <div class="row" id="icon">
        <div class="col-lg-4" id="colpad" data-aos="fade-in" data-aos-delay="400">
          <h1><i class="fas fa-code-branch"></i></h1>
          <h4>Circuit is Everything</h4>
          <p class= hpara>Club focuses on Every Aspect but circuit is Everything</p>
        </div>

        <div class="col-lg-4" id="colpad" data-aos="fade-in" data-aos-delay="500">
          <h1><i class="fas fa-laptop-code"></i></h1>
          <h4>Code Like a Pro</h4>
          <p class= hpara>With many events and works to come, you will learn to code</p>
        </div>

        <div class="col-lg-4" id="colpad" data-aos="fade-in" data-aos-delay="600">
          <h1><i class="fab fa-apple"></i></h1>
          <h4>Just Think why it is here</h4>
          <p class= hpara>We don't have any tie-up with Apple, this here so that you see this & dream big</p>
        </div>
      </div>
    </div>
  </section>

  <!--Section-3 Our Members-->
  <section id="About">

    <div class="slideshow-container">

      <div class="mySlides">
          <img src="maincss/Ritesh-Sir.jpg" alt="Avatar" width="220" height="220" data-aos="fade-up">
          <br>
          <h1 data-aos="fade-in" data-aos-delay="400"><i class="fas fa-quote-left"></i></h1>
          <br>
      <q data-aos="fade-up" data-aos-delay="500">Development of skills can only be done when you implement it in real life.</q>
      <p class="author" data-aos="fade-up" data-aos-delay="600">- Dr. Ritesh K. Badhai</p>
      </div>

      <div class="mySlides">
          <img src="maincss/elon-musk.jpg" alt="Avatar" width="220" height="220" data-aos="fade-up">
          <br class="br">
          <h1><i class="fas fa-quote-left"></i></h1>
          <br>
      <q data-aos="fade-up" data-aos-delay="300">"When Henry Ford made cheap, reliable cars, people said, 'Nah, what's wrong with a horse?' That was a huge bet he made, and it worked."</q>
      <p class="author" data-aos-delay="400">- Elon Musk</p>
      </div>

      <div class="mySlides">
          <img src="maincss/Thomas-Edison.jpg" alt="Avatar" width="220" height="220">
          <br>
          <h1><i class="fas fa-quote-left"></i></h1>
          <br>
          
      <q>I have not failed. I've just found 10,000 ways that won't work.</q>
      <p class="author">- Thomas A. Edison</p>
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

      

      <div class="dot-container">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
      </div>

    </div>
  </section>
  <!--Section-3 Ends here-->

  <!--Section-4 Starts here (DARK-FLIPCARD) -->
  <section id="About" class="section section-dark">
    <h1 class="h1" data-aos="fade-up">Why Technical Club is better?</h1>
    <h5 class="orange" data-aos="fade-up" data-aos-delay="300">Find Out Yourself</h5>
    <hr class="style-two" id="section-2-hr" data-aos="fade-up" data-aos-delay="400">
    <div class="container flip-cont" data-aos="fade-up" data-aos-delay="450">

      <!--1st Row-->
      <div id="padingl" class="row">
        <div class="col-lg-4 md-6 sm-12">
          
          <div class="cardl middli">
            <div class="front">
              <div class="front-header">
                  <img src="maincss/mentor1.jpg" alt="">
              </div>


              <svg class="card__svg flip-card-front" viewBox="0 0 800 500">
                  <path d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400 L 800 500 L 0 500" stroke="transparent" fill="#333"></path>
                  <path class="card__line" d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400" stroke="#fc4f02" stroke-width="3" fill="transparent"></path>
              </svg>


              <div class="front-content" id="fontsize">
                 <h2>Mentors</h2>
              </div>
            </div>
            <div class="back">
                <div class="back-content middli">
                    <h2>Mentors</h2>
                    <p>As a Mentor Dr. Ritesh Badhai has been our guide for the past years.</p>
                    <div class="se">
                       <!--Below is Linkdin Button commented out-->
                       <!-- <a href="#"><i class="fab fa-linkedin-in"></i></a> -->
                        <a href="https://www.linkedin.com/in/dr-ritesh-kumar-badhai-08034a21/" class="btr">Know More</a>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <div class="col-lg-4 md-6 sm-12">
          
          <div class="cardl middli">
            <div class="front">
              <div class="front-header">
                  <img src="maincss/research1.jpg" alt="">
              </div>
              

              <svg class="card__svg flip-card-front" viewBox="0 0 800 500">
                  <path d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400 L 800 500 L 0 500" stroke="transparent" fill="#333"></path>
                  <path class="card__line" d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400" stroke="#fc4f02" stroke-width="3" fill="transparent"></path>
              </svg>

            
              <div class="front-content" id="fontsize">
                 <h2>Research</h2>
              </div>
            </div>
            <div class="back">
                <div class="back-content middli">
                    <h2>Research</h2>
                    <p>It's the only club which will help you with your Research Papers</p>
                    <div class="se">
                       <!--Below is Linkdin Button commented out-->
                       <!-- <a href="#"><i class="fab fa-linkedin-in"></i></a> -->
                        <a href="#" class="btr">Know More</a>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <div class="col-lg-4 md-6 sm-12">
          
          <div class="cardl middli">
            <div class="front">
              <div class="front-header">
                  <img src="maincss/compitition.jpg" alt="">
              </div>
              

              <svg class="card__svg flip-card-front" viewBox="0 0 800 500">
                <path d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400 L 800 500 L 0 500" stroke="transparent" fill="#333"></path>
                <path class="card__line" d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400" stroke="#fc4f02" stroke-width="3" fill="transparent"></path>
            </svg>

            
              <div class="front-content" id="fontsize">
                 <h2>Competition</h2>
              </div>
            </div>
            <div class="back">
                <div class="back-content middli">
                    <h2>Competition</h2>
                    <p>Regular participation in various Events opens our mind, this is the main mantra of this club</p>
                    <div class="se">
                       <!--Below is Linkdin Button commented out-->
                       <!-- <a href="#"><i class="fab fa-linkedin-in"></i></a> -->
                        <a href="#" class="btr">Know More</a>
                    </div>
                </div>
            </div>
        </div>

        </div>
      </div>

      <!--2nd Row-->
      <div id="padingl" class="row">
        <div class="col-lg-4 md-6">

          <div class="cardl middli">
            <div class="front">
              <div class="front-header">
                  <img src="maincss/Edu-Trip.jpg" alt="">
              </div>
              

              <svg class="card__svg flip-card-front" viewBox="0 0 800 500">
                <path d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400 L 800 500 L 0 500" stroke="transparent" fill="#333"></path>
                <path class="card__line" d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400" stroke="#fc4f02" stroke-width="3" fill="transparent"></path>
            </svg>

            
              <div class="front-content" id="fontsize">
                 <h2>Edu. Trip</h2>
              </div>
            </div>
            <div class="back">
                <div class="back-content middli">
                    <h2>Edu. Trip</h2>
                    <p>We make Learning interesting by giving everyone to go and explore.</p>
                    <div class="se">
                       <!--Below is Linkdin Button commented out-->
                       <!-- <a href="#"><i class="fab fa-linkedin-in"></i></a> -->
                        <a href="#" class="btr">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    

        </div>
        <div class="col-lg-4 md-6">

          <div class="cardl middli">
            <div class="front">
              <div class="front-header">
                  <img src="maincss/Workshops.jpg" alt="">
              </div>
              

              <svg class="card__svg flip-card-front" viewBox="0 0 800 500">
                <path d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400 L 800 500 L 0 500" stroke="transparent" fill="#333"></path>
                <path class="card__line" d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400" stroke="#fc4f02" stroke-width="3" fill="transparent"></path>
            </svg>

            
              <div class="front-content" id="fontsize">
                 <h2>Workshops</h2>
              </div>
            </div>
            <div class="back">
                <div class="back-content middli">
                    <h2>Workshops</h2>
                    <p>We present very new and Innovative Techs and let you know about the working of it.</p>
                    <div class="se">
                       <!--Below is Linkdin Button commented out-->
                       <!-- <a href="#"><i class="fab fa-linkedin-in"></i></a> -->
                        <a href="#" class="btr">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    

        </div>
      </div>
      <!--Row2 Ends here-->
    </div>
  </section>
  <!--Section-4 Ends here-->

  

  <!--Section-5 Starts here (COUNTING UP NUMBERS)-->
  <section class="pimg3">

    <div class="middlie">
      <div class="counting-sec1" data-aos="fade-up">
          <div class="inner-width1">
            <div class="row">
              <div class="colsm col-md-12 sm-12">
                  <i class="fas fa-users"></i>
                  <div class="num1">48</div>
                  Members
              </div>

              <div class="colsm col-md-12 sm-12">
                  <i class="fas fa-user-graduate"></i>
                  <div class="num1">25</div>
                  Alumni
              </div>

              <div class="colsm col-md-12 sm-12">
                  <i class="fas fa-calendar"></i>
                  <div class="num1">10</div>
                  Events
              </div>

              <div class="colsm col-md-12 sm-12">
                  <i class="fas fa-book-open"></i>
                  <div class="num1">4</div>
                  Research Papers
              </div>
            </div>  

          </div>
      </div>
  </div>

  </section>



  <!--Section-6 Starts here (Sponser)-->
  <section class="section section-light">
    <h4 class="display-4" data-aos="fade-up">Our Previous Sponsers</h4>
    <hr class="style-two" id="section-6-hr" data-aos="fade-up" data-aos-delay="200">
    <div class="container sponser" data-aos="fade-right" data-aos-delay="400">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-lg-4 sm-2 align-center">
              <img alt="logo" src="sponsors/Coding-blocks.png" width="100" height="50">
            </div>

            <div class="col-lg-4 sm-2 align-center">
              <img alt="logo" src="sponsors/Made-easy.png" width="80" height="50">
            </div>

            <div class="col-lg-4 sm-2 align-center">
              <img alt="logo" src="sponsors/E-stationary.png" width="100" height="50">
            </div> 
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Section-7 Contact Us-->
  <div id="Contact" style="background-image: url(Contact-Form-2/imgcontact.jpg);background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">


    <!--1st Row of section-7-->

    <div class="row">
        <div id="col-lg-12" class="col-lg-12">
            <h1 id="h1" style="color: white; text-align: center; color: #fc4f02;" data-aos="fade-up"><b>Contact Us</b></h1>
            <hr class="style-two-2" data-aos="fade-up" data-aos-delay="300">
            <h2 id="contact-us-text" data-aos="fade-right" data-aos-delay="400"> The Technical Ecosystem is Brewing with <span style="color: #fc4f02">change</span>. We are Fanning the <span style="color: #fc4f02">fire</span>.</h2>
        </div>
    </div>


    <!--2nd Row of section-7-->
    
    <div class="row contact-dynamic" style="background-color: #11111180;" data-aos="fade-up" data-aos-delay="400">
        <div class="col-lg-8 full-table">
          <?php echo $alert; ?>
            <h3 class="h6" style="color: white;margin-bottom: 4%;">Send Us A Message</h3>

            <form action="" method="post" class="contact">
                <div>
                    <input class="full-width contact-fill" type="text" placeholder="Your Name" id="nameInputID" name="name" style="color: white; outline: none;">
                    <input class="full-width contact-fill" type="email" placeholder="Your Email" id="emailInputID" name="email" style="color: white; outline: none;">
                    <input class="full-width contact-fill" type="text" placeholder="Subject" id="subjectInputID" name="sub" style="color: white; outline: none;">
                </div>

                <textarea class="full-width contact-message" placeholder="Your message" id="messageInputID" name="msg" style="color: white; outline: none;"></textarea>

                <input type="submit" name="submit" class="btn-primary" value="Send">
            </form>


        </div>

        <div class="col-lg-4 tab-full d-none d-md-block" style="margin-bottom: 10%">

            <h3 class="h6" style="color: white; margin-bottom: 15%">CONTACT INFO</h3>

            <div class="cinfo">
                <h5 style="color: #fc4f02">Where to Find Us</h5>
                <p>
                  You can directly contact us or mail us from the contact section, 
                  if you have any queries then you can also call us on the number given below.
                </p>
            </div>

            <div class="cinfo">
                <h5 style="color: #fc4f02">Harshit Naman</h5>
                <p> President, Technical Club
                    <br>
                    <i class="fas fa-envelope"></i> <a href="mailto:bitptechnical@gmail.com">be15253.18@bitmesra.ac.in</a><br>
                    <i class="fa fa-phone-square " aria-hidden="true"></i><a href="tel:+91-62071-46108">
                        +91-62071-46108</a>
                </p>
            </div>

            <div class="cinfo">
                <h5 style="color: #fc4f02">Sachin Kumar Singh</h5>
                <p> Web-Master, Technical Club
                    <br>
                    <i class="fas fa-envelope"></i> <a href="mailto:be15196.18@bitmesra.ac.in">be15196.18@bitmesra.ac.in</a><br>
                    <i class="fa fa-phone-square " aria-hidden="true"></i><a href="tel:+91-77820-55110">
                        +91-77820-55110</a>
                </p>
            </div>

        </div>
    </div>


  </div>
  <!--Section-7 Contact ENDS here-->




  <!--Section-8 Footer-->
  <div class="footer">
    <div class="footer-content">

        <div class="footer-section about col-md-12 sm-12 xs-12 ">
            <h1 class="logo-text">TECHNICAL <span>CLUB</span></h1>
            <p >
              Our society aims at integrating expertise from multiple domains of engineering like Computer Science, Electronics, Electrical,
              Mechanical Technologies and so more to fabricate the innovation that makes rightful changes to the Universe.
            </p>
            <div class="footer-contact">
                <span><i class="fas fa-phone-square"></i><a href="tel:+91-62071-46108"> +91-62071-46108</a></span>
                <!--here you can add <br> in place of display : block; (in css) -->
                <span><i class="fas fa-envelope"></i><a href="mailto:bitptechnical@gmail.com"> bitptechnical@gmail.com</a></span>
            </div>
            <div class="social">
                <a href="https://www.facebook.com/bitptechnical"> <i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/bitptechnical/?hl=en"> <i class="fab fa-instagram"></i></a>
                <a href="#"> <i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/company/14748147/"> <i class="fab fa-linkedin"></i></a>
                
            </div>
        </div>
        
        <div class="footer-section links col-md-12 sm-12 xs-12 ">
            <h2>Quick Links</h2>
            <br>
            <ul>
                <a href="#About"><li>About</li></a>
                <a href="eventpage.html"><li>Events</li></a>
                <a href="team.html"><li>Team</li></a>
                <a href="gallery.html"><li>Gallery</li></a>
                <a href="#Contact"><li>Contact</li></a>
            </ul>
        </div>

        <div class="footer-section notification col-md-12 d-none d-lg-block ">
            <h2>Get Notification</h2>
            <br>
            <p>Stay Connected with us & help us with your suggestions</p>
            <br>
            <form action="index.html" method="post">
                <input class="text-input contact-input" type="email" placeholder="Your Email" id="emailInputID" style="color: white; outline: none;">
                <textarea class="text-input contact-input" placeholder="Your message" id="messageInputID" style="color: white; outline: none;"></textarea>
                <button id="contactSubmitButton1" class="btn-primary" style="outline: none;"><i class="fas fa-envelope"></i> Submit</button>
            </form>

            <!--Scrollbtn text-->
            <p id="topBtn-p">Back to Top</p>

        </div>
    </div>

    <div class="footer-bottom ">
        &copy; Made with <i class="fas fa-heart" style="color: rgb(252, 79, 2);"></i> | <a href="https://www.linkedin.com/in/sachin-kumar-singh-43447b152/" style="text-decoration: none; color: #686868;">Designed By Sachin Kumar Singh <i class="fab fa-linkedin"></i></a>
    </div>
    <div class="btr-float">
        ::before
        <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
  </div>
  </div>
  <!--Section-8 Footer ENDS here-->
  
  



  <!--JS files for Scroll to Top-->
  <script src="mainjs/scroll.js"></script>

  <!--AOS.js Script-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        //offset: 120, // offset (in px) from the original trigger point
        delay: 100, // values from 0 to 3000, with step 50ms
        duration: 900, // values from 0 to 3000, with step 50ms
        //easing: 'ease', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
    });
  </script>

  <!--JS files for Counting-up NUMBERS-->
   <script src="mainjs/count.js"></script>


  <!--Github link for Smoothscrool Link-->
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="mainjs/smoothscroll.js"></script>

  <!--Section-3 Slide Quotes-->
  <script src="SlideQuotes/quotes.js"></script>

   <!--JS files for Navbar Animations-->
   <script src="mainjs/navbar1.js"></script>

  <!--JS and jQuery Links-->
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
