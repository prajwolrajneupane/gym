<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steel Titans Fitness Center</title>
    <link rel="icon" href="logo.png" type="image/png" >
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <style>

    a:hover{
color:black;
transition: 0.3s;   
}

    </style>


        <!-- href wala lai hover garda blue dekhayera jhyau vayo tesaile yetai change garna lai css lekhya -->
    <div class="nav ">
        <img src="logo.png" alt="">
        <div class="text" >
            
            
            <h4 >
                <a href="#page1">


                    
                    Home
                </a>
            
        </h4>
                <h4>

<a  href="#page2" >

About

</a>
                    
                
                </h4>
                <h4>
                    
                <a href="#page3">

                Classes
                </a>
                </h4>

                <a href="gallery.html">

                    <h4>Gallery</h4>
                </a>

            </div>
            <div class="join-us" style="display: flex; gap: 2rem;">
                <button style="background: transparent; display: flex; border: 1px solid white; cursor: pointer; padding: 10px; border-radius: 5px; " >Contact Us</button>
                

<!-- php -->

        
<?php
session_start();

if(isset($_SESSION['auth'])){  
   ?>
 <span class="join" style="background: linear-gradient(to right, #f97316, #9a3412); border: none ; padding: 11.5px; border-radius: 5px; cursor: pointer;"> <a href="logout.php"> Log Out</a> </span>


   <?php
}

else{ //yedi user logged in xaina vaney chai we show this
  ?>
 <span class="join" style="background: linear-gradient(to right, #f97316, #9a3412); border: none ; padding: 11.5px; border-radius: 5px; cursor: pointer;"> <a href="register.php"> Join Now</a> </span>

<?php
}

?>

              
                
            </div>
      
       
        </div>
        


        

<div class="cursor"></div>




<video autoplay="" loop="" muted="" src="gym.mp4"></video>
<div class="main">


    
    <div class="page1" id="page1">

        
        <h1 class="page1_text" style="font-size: 6vw; text-align: center; font-weight: 500;">
            <p class="p1">
                Unleash Your Power and
            </p>
            <p class="p2">
                become
                <span class="mighty" style=" color: transparent; background-image:linear-gradient(to right, #f97316,#991b1b); background-clip: text;"> MIGHTY</span>
            </p>
        </h1>


     




        


 



        <div class="join_now">

        
                <span class="join" style="background: linear-gradient(to right, #f97316, #9a3412); border: none ; padding: 11.5px; border-radius: 5px; cursor: pointer;">
            <a href="buyproducts.html">

                Buy Products

            </a>        
            </span>
                <button
           
                 >
                 
                 <form action="authcode.php" method="POST">


               
             <button type="submit" 
             
             type="submit" class="contact" 
             name="get_membership" 
             >Get Membership</button>
            </form>
                
            <!-- hehe khas ma esko naam paila contact thyo tesaile class is contact, let it be that way -->
                </div>
        </div>
        

  






        
        <div class="page2" id="page2" style="overflow-x:hidden ;">
            <h1  class="about" >
                ABOUT
            </h1>
            
            
            <div class="content">
                <div class="about_text">
                    
                    
                    <h2 style="font-size: 1.7vw; margin-bottom: 10px;">
                        A Serious Gym for Serious Workouts
                    </h2>
                    <p class="desc">
                        
                        At steel titan gym, we're more than just a gym, we're your partner in achieving your wellness goals. We offer a welcoming and inclusive environment for people of all fitness levels. Whether you're a seasoned athlete or just starting your journey, we have the tools and support you need. Our state-of-the-art equipment caters to a variety of workout styles, while our diverse group fitness classes keep things exciting and motivating. But fitness isn't just about the physical; we believe in fostering a supportive community where you can connect with like-minded individuals and feel empowered on your path to a healthier you.
                    </p>
                </div>


                <div class="images">

                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="gym2.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="gym1.jpg" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="gym3.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                
                      </div>
                    
                    
                </div>
</div>



</div>


<div class="page3" id="page3" style="overflow-x:hidden ;">
    <h1 class="classes"  >
        CLASSES
    </h1>
    

    <div id="cards-container">
        <div class="card" id="card1">
            <div class="overlay">
                <h4>Zumba</h4>
                <p style=>
                    Zumba is a dynamic and energetic fitness program that combines elements of dance and aerobic exercises. It was created in the mid-1990s by Colombian dancer and choreographer Alberto "Beto" Pérez. The unique aspect of Zumba lies in its incorporation of various dance styles, including salsa, merengue, cumbia, reggaeton, hip-hop, and even Bollywood, to create a fun and effective workout experience.
                </p>
            </div>
        </div>
        <div class="card" id="card2">
            <div class="overlay">
                <h4>Boxing</h4>
                <p>
                    Boxing's origins can be traced back to ancient civilizations. The earliest evidence of boxing dates back to Egypt around 3000 BC.Boxing is a combat sport where two participants, usually wearing protective gloves and other protective gear such as mouthguards and hand wraps, engage in a contest of strength, speed, reflexes, endurance, and strategy.
                </p>
            </div>
        </div>
        <div class="card" id="card3">
            <div class="overlay">
                <h4>Calisthenics</h4>
                <p>
                    Calisthenics is a form of exercise that involves using one's own body weight for resistance, focusing on a variety of movements that can improve strength, flexibility, endurance, and coordination. The term "calisthenics" comes from the Greek words "kallos" (beauty) and "sthenos" (strength), reflecting the aesthetic and strength-building aspects of this fitness approach.
                </p>
            </div>
        </div>
    </div>
    


</div>


<div class="page4">
<h1 class="reviews"  >
        REVIEWS
    </h1>

<div class="container">
    <div class="board">

        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="flex">
                    <div class="comments">
                       AAEE!! Sathi harko lagi yo hatt salam ho ra dusman harko lagi yo hatt falam ho. Ra mero hatt lai falam jasto majboot banauna ma Steel Titans Fitness center janxu
                    </div>
                    <div class="profile">
                        <img src="https://i.pinimg.com/280x280_RS/e7/08/0c/e7080c2fc5e637926d9da2c0b17a830d.jpg" alt="">
                        <a href="#">Rajesh Dai</a>
                        <span>you know who</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
             <div class="flex">
                    <div class="comments">
                     Ma khas ma gym garnu vanda ni rajesh dai herna aauni ho so better not interview for your website. mero dhyan gym ko equipment ma vanda rajesh dai ma hunxa hehe
                     </div>
                    <div class="profile">
                        <img src="data:image/jpeg;base64,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" alt="">
                        <a href="#">Karishma dd</a>
                        <span>actress </span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
            <div class="flex">
                    <div class="comments">
                We have made this gym with our hard work and determination. This is the  agruably the best gym in nepal. So if you ever wanted to get in shape and stop being the fat piece of thing you are, remember us😊
                    </div>
                    <div class="profile">
                        <img src="data:image/jpeg;base64,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" alt="">
                        <a href="#">Shyam bahadur guragai</a>
                        <span>Founder & CEO</span>
                    </div>
                </div>
            </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
    
        </div>

    </div>
</div>




</div>

</div>

<div class="contact-container">
       <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
        <div class="contact-left-titlt">
            <h2> Get in touch</h2>
            <hr>
        </div>
        <input type="hidden" name="access_key" value="7cc7d116-f28e-4a48-86a7-79aea7048e1b">
        <input type="text" name="name" placeholder="Enter Your Name" class="contact-inputs" required>
        <input type="email" name="email" placeholder=" Enter Your Email" class="contact-inputs" required>
        <textarea name="message" placeholder="Message"  class="contact-inputs" required></textarea> 
        <button type="submit"> Submit <img src="arrow1.png" alt=""></button>

       </form>
     </div>

     
     <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.contact-container{
    height: 100vh;
    display: flex;
    background:url('https://i.pinimg.com/736x/6e/7c/4d/6e7c4d311bfc2abecbb04866afac4f33.jpg');
    background-size: cover;
    background-repeat: no-repeat; 
    align-items: center;
    justify-content: space-evenly;
}
.contact-left{
    display: flex;
    flex-direction: column;
    align-items: start;
    gap: 20px;
}
.contact-left-title h2{
    font-weight: 600;
    color: #a363aa;
    font-size: 40px;
    margin-bottom: 5px;
}
.contact-left-title hr{
    border: none;
    width: 120px;
    height: 5px;
    background-color: #a363aa;
    border-radius: 5px;
    margin-bottom: 20px;
}
.contact-inputs{
    width: 400px;
    height: 50px;
    border: none;
    outline: none;
    padding-left: 25px;
    font-weight: 500px;
    color: #666;
    border-radius: 5px;
}
.contact-left textarea{
    height: 140px;
    padding-top: 15px;
    border-radius: 5px;
}
.contact-inputs:focus{
    border: 2px solid #ff994f;
}
.contact-inputs::placeholder{
    color: #a9a9a9;
}
.contact-left button{
    display: flex;
    align-items: center;
    padding: 15px 30px;
    font-size: 16px;
    color: #fff;
    gap: 10px;
    border: none;
    border-radius: 50px;
    background:linear-gradient(to right, #f97316,#991b1b);
    
    cursor: pointer;
    transition: 0.3s;
}
@media (max-width: 800px){
    .contact-inputs{
        width: 80vw;
    }
    .contact-right{
        display: none;
    }
}
.contact-left button:hover{

    background: linear-gradient(270deg, #ff994f, #fa6d86);
}

     </style>



<footer style="background-color: #222; color: #ccc; padding: 40px 0; font-family: Arial, sans-serif;">
    <div  style=" max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; flex-wrap: wrap;">
        
        <!-- Contact Us Section -->
        <div style="flex: 1; min-width: 200px; padding: 20px;">
            <h4 style="color: #fff; margin-bottom: 20px;">Get In Touch</h4>
            <p style="line-height: 1.8;">
                <strong>Address:</strong> kumaripati, kathamandu Nepal<br>
                <strong>Email:</strong> steeltitansfitness@gmail.com<br>
                <strong>Phone:</strong> 100
            </p>
        </div>
        
        <!-- Social Media Section -->
        <div style="flex: 1; min-width: 200px; padding: 20px;">
            <h4 style="color: #fff; margin-bottom: 20px;">Follow Us</h4>
            <div style="display: flex; gap: 15px;">
                <a href="https://www.facebook.com/prajwol.raj.neupane" target="_blank" style="color: #ccc;">
                    <i class="fa-brands fa-facebook"></i> 
                </a>
                <a href="https://www.instagram.com/_roshanchapai/" target="_blank" style="color: #ccc;">
                <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://github.com/prajwolrajneupane/gym" target="_blank" style="color: #ccc;">
                
                <i class="fa-brands fa-github"></i>
                </a>
                <a href="
                
                https://www.linkedin.com/feed/?trk=guest_homepage-basic_google-one-tap-submit
                " target="_blank" style="color: #ccc;">
                <i class="fa-brands fa-linkedin"></i>
                </a>

                   
                
            </div>
        </div>
    </div>
    
    <!--yo -->
    <div style="text-align: center; padding: 20px 0; border-top: 1px solid #444; margin-top: 40px;">
        <p style="margin: 0; color: #888;">&copy; 2024 Still Titans Fitness Center. All rights reserved. | <a href="/privacy-policy" style="color: #ccc; text-decoration: none;">Privacy Policy</a></p>
    </div>
</footer>
</body>


<!-- gsap: -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"
integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- bootstrap: -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- navbar ko lagi font ko link -->

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    

<!-- yo file ko js -->
<script src="index.js"></script>



<!-- reviews ko lagi script -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

</html>