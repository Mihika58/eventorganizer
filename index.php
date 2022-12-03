<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Planners</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
    body {
      background-image: url('images/bg.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-blend-mode: darken; 
      background-size: 100% 100%;
        backdrop-filter: blur(1 px); 
    }
    </style> 
<body>
    
<!-- header section starts  -->

<header class="header">
    <a href="#" class="logo">
        <img class="logoimg" src="images/new logo.jpeg" alt="I am logo">
        <span>Dream</span>Planners</a>

    <nav class="navbar">
  
        <a href="#home">home</a>
        <a href="#service">service</a>
        <a href="#about">about</a>
        <a href="#contact">Contact us</a>
        <a href="#gallery">Gallery</a>
        <a href="#price">Catering</a>
        <a href="#review">review</a>
        </div>
    </nav>

    <div id="menu-bars" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>its time to celebrate! the best <span> event organizers </span></h3>
        <a href="logineventpage.php" class="btn" style="margin: 10px;">Login</a>
        <a href="register.php" class="btn">Register</a>
    </div>

    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/slide-1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-6.jpg" alt=""></div>
        </div>
    </div>

</section>

<!-- home section ends -->

<!-- service section starts  -->

<section class="service" id="service">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">
        <a href="./wedding.php">
            <div class="box">
                <i class="fas fa-home"></i>
            
                <h3>Wedding Hall</h3>
                <p>Plan your wedding with dream planners with our highly affordable customisable packages.</p>
            </div>
        </a>
        

        <a href="./Birthday.php">
            <div class="box">
                <i class="fas fa-birthday-cake"></i>
                <h3>Birthday Party</h3>
                <p>Plan a Birthday party with dream planners with our highly affordable customisable packages.</p>
            </div>
        </a>

        <a href="./college.php">
            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <h3>College Events</h3>
                <p>Plan your college events with dream planners with our highly affordable customisable packages.</p>
            </div> 
        </a>

        <div class="box">
            <i class="fa fa-briefcase" aria-hidden="true""></i>
            <h3>Formal Party</h3>
            <p>Plan your office party with dream planners with our highly affordable customisable packages.</p>
        </div>

    </div>

</section>

<!-- service section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"><span>about</span> us </h1>

<div class="row">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>
    <div class="content">
        <h3>we will give a very special celebration for you</h3>
        <p> About Us
            Our philosophy.
            Dream Planner Ltd is an event logistics and marketing company. The company offers A-Z event planning services from a team of experienced and energetic event planners, suppliers, venues and more. One of the main reasons behind the success of Dream Planner is the fact that the team does not charge fees to its clients! With the number of events we organise, Dream Planner Ltd does not need to add exorbitant fees and mark-ups to make its profit margins. This ensures that our clients list, which is constantly growing, make regular use of our services.</p>
        
    </div>

</div>

</section>


<h1 id="contact" class="heading"><span>Contact</span> us </h1>
<section class="sec-5 sec-4">
    <img src="images/new logo.jpeg" alt="img">
    <div class="contact">
        <form action="" autocomplete="off" method="POST">
            <input type="text" name="name" value="" placeholder="Name">
            <input type="email" name="email" value="" placeholder="Email" required>
            <input type="text" name="phone" value="" placeholder="Phone">
            <input type="text" name="address" value="" placeholder="Address">
            <textarea name="textarea" cols="20" rows="10" placeholder="Your Queries, orders, etc..." style="margin-left:20px;"></textarea>
            <input class="submit" type="submit" name="submit" value="submit">
        </form>
    </div>
</section>


<!-- about section ends -->
<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">our <span>gallery</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <h3 class="title">DJ Party</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <h3 class="title">Formal PArty</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <h3 class="title">Holi Event</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <h3 class="title">Event</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <h3 class="title">Wedding</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <h3 class="title">Holi Event</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <h3 class="title">Freshers Party</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <h3 class="title">Wedding</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <h3 class="title">Birthday Party</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- price section starts  -->

<section class="price" id="price">

    <h1 class="heading"> Our <span>Catering</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3 class="title">Starters</h3>
            
            <ul>
               
            <li><i class="fas fa-check"></i>For all occasions</li>
                <li> <i class="fas fa-check"></i>Corparate party orders</li>
                <li> <i class="fas fa-check"></i> Lunch Orders</li>
                <li> <i class="fas fa-check"></i>Buffet Caterings </li>
                <li> <i class="fas fa-check"></i> With Dream Planners</li>
            </ul>
            <a href="./starter.php" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">Salads</h3>
            
            <ul>
               
              
            <li><i class="fas fa-check"></i>For all occasions</li>
                <li> <i class="fas fa-check"></i>Corparate party orders</li>
                <li> <i class="fas fa-check"></i> Lunch Orders</li>
                <li> <i class="fas fa-check"></i>Buffet Caterings </li>
                <li> <i class="fas fa-check"></i> With Dream Planners</li>
            </ul>
            <a href="./salad.php" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">Main Course</h3>
            
            <ul>
                    
            <li><i class="fas fa-check"></i>For all occasions</li>
                <li> <i class="fas fa-check"></i>Corparate party orders</li>
                <li> <i class="fas fa-check"></i> Lunch Orders</li>
                <li> <i class="fas fa-check"></i>Buffet Caterings </li>
                <li> <i class="fas fa-check"></i> With Dream Planners</li>
            </ul>
            <a href="MainCourse.php" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">Desserts</h3>
            
            <ul>
                
               
            <li><i class="fas fa-check"></i>For all occasions</li>
                <li> <i class="fas fa-check"></i>Corparate party orders</li>
                <li> <i class="fas fa-check"></i> Lunch Orders</li>
                <li> <i class="fas fa-check"></i>Buffet Caterings </li>
                <li> <i class="fas fa-check"></i> With Dream Planners</li>
            </ul>
            <a href="Dessert.php" class="btn">check out</a>
        </div>

    </div>


</section>

<!-- price section ends -->

<!-- review section starts  -->

<section class="reivew" id="review"> 
    
    <h1 class="heading">client's <span>review</span></h1>

    <div class="review-slider swiper-container">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="user-info">
                        <h3>Arjit Roy</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>Thank you so much For such a fun filled event and playing a big role in connecting our whole company together </p>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="user-info">
                        <h3>Priya Sharma</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>They are very good at working with your specific needs and budget in mind Best Event organizer.</p>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="user-info">
                        <h3>Vishal Shukla</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>The staff is fantastic the food is great and they always have a variety of creative options .</p> 
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="user-info">
                        <h3>Sadiya Mulla</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>our employee love the food entertainment,games and location</p>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->



<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> jogeshwari </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> goregaon </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> navi mumbai </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> andheri </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#service"> <i class="fas fa-arrow-right"></i> service </a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#gallery"> <i class="fas fa-arrow-right"></i> gallery </a>
            <a href="#price"> <i class="fas fa-arrow-right"></i> catering </a>
            <a href="#review"> <i class="fas fa-arrow-right"></i> reivew </a>
            <a href="#contact"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> sejal5@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> muhaiba@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> mihika5@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"> Dream<span>Planners</span> </div>
</section>

<!-- footer section ends -->



<!-- theme toggler  -->

<div class="theme-toggler toggle-btn">


</div>





<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js\script.js"></script>

</body>
</html>