<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="portfolio.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <title>Portfolio Website</title>
</head>
<body>

    <nav class="navbar">
      <ul class="nav-links">
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>

        <div class="menu">
          <li><a href="#home">HOME</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#projects">PROJECTS</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </div>
      </ul>
   </nav>

   <section class="home" id="home">
      <div class="row">
              <div class="name-text">
                  <h2 class="nametitle">Dorothy Fae Dugay</h2>
                  <p class="nameinfo">Future Web Designer</p>
              </div>
            </div>
        </div>
  </section>


  <section class="about" id="about">
      <h1 class="heading">ABOUT <span>ME</span></h1>
      <div class="row">
        <div class="image">
          <img src="images/df.jpg" alt="Girl" />
        </div>
        <div class="content">
          <h3>Design . Build . Improve</h3>
          <p>
            I am highly organized and motivated, with a strong ability to collaborate effectively with others and bring a creative touch to my work. I have the confidence to make decisions and take on challenges in order to achieve my goals and objectives. 
          </p>
          <p>
           I am also committed to using the latest and most effective technologies to create exceptional user experiences.
          </p>
          <div class="icons-container">
            <div class="icons">
              <img src="images/is.png" alt="Innovative Solutions">
              <span>Innovative Solutions</span>
            </div>
            <div class="icons">
              <img src="images/strategy.png" alt="Strategic Thinking">
              <span>Strategic Thinking</span>
            </div>
            <div class="icons">
              <img src="images/dedicated.png" alt="Dedicated">
              <span>Dedicated 24/7</span>
            </div>
          </div>
        </div>
      </div>
    </section>

  <section class="projects" id="projects">
      <h1 class="heading"><span>PROJECTS</span></h1>
       
       <div class="row">
        <div class="col">
           <img src="images/oceanp.png" onclick="openLightbox();toSlide(1)" class="hover-shadow preview" alt="Ocean" />
           <div class="overlay-text">
             <p>Classroom Management System is made with php. <br>It is a system that can manage the grades of all the students and calculate the average of it.</p>
           </div>
        </div>
        <div class="col">
           <img src="images/mr.jpg" onclick="openLightbox();toSlide(2)" class="hover-shadow preview" alt="Movie Review" />
           <div class="overlay-text">
             <p>This Movie Review System is made with php. It is designed using the css, javascript, and jquery. This system let the user to put reviews and comments to the movies.</p>
           </div>
        </div>
        <div class="col">
           <img src="images/mt.jpg" onclick="openLightbox();toSlide(3)" class="hover-shadow preview" alt="Movie Ticket" />
           <div class="overlay-text">
             <p>EKD Cinema is a movie ticket system that is with php and html. It is designed using css, javascript, and jquery. This system allows the user to buy a ticket of a movie.</p>
           </div>
        </div>
      </div>
      
      <div id="Lightbox" class="modal">
      
        <span class="close pointer" onclick="closeLightbox()">&times;</span>
        <div class="modal-content">
          <div class="slide">
            <img src="images/oceanp.png" class="image-slide" alt="Ocean" />
          </div>
          <div class="slide">
            <img src="images/mr.jpg" class="image-slide" alt="Movie Review" />
          </div>    
          <div class="slide">
            <img src="images/mt.jpg" class="image-slide" alt="Movie Ticket" />
          </div>
        
          <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
          <a class="next" onclick="changeSlide(1)">&#10095;</a>
              
          <div class="dots">
            <div class="col">
              
              <img src="images/oceanp.png" class="modal-preview hover-shadow" onclick="toSlide(1)" alt="Ocean" />
             
            </div>
            <div class="col">
              <img src="images/mr.jpg" class="modal-preview hover-shadow" onclick="toSlide(2)" alt="Movie Review" />
            </div>
            <div class="col">
              <img src="images/mt.jpg" class="modal-preview hover-shadow" onclick="toSlide(3)" alt="Movie Ticket" />
            </div>
          </div>
        </div> 
      </div>
  </section>

  <section class="contact" id="contact">
      <h1 class="heading"> <span>CONTACT</span> ME </h1>
    <div class="row">

          <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122892.32572413808!2d120.83403818051424!3d15.73075002809206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3390d606a70b853d%3A0xd617eb36132a8921!2sScience%20City%20of%20Mu%C3%B1oz%2C%20Nueva%20Ecija!5e0!3m2!1sen!2sph!4v1670546915835!5m2!1sen!2sph" allowfullscreen="" loading="lazy"></iframe>

          <form action="">
              <h3>GET IN TOUCH</h3>
              <div class="inputBox">
                  <span class="fas fa-user"></span>
                  <input type="text" placeholder="Name">
              </div>
              
              <div class="inputBox">
                  <span class="fas fa-envelope"></span>
                  <input type="email" placeholder="Email">
              </div>
              
              <div class="inputBox">
                  <span class="fas fa-phone"></span>
                  <input type="text" placeholder="Number">
              </div>
              <a href="mailto:dugay.dorothy@clsu2.edu.ph" class="btn">Send Message</a>

          </form>
      </div>
  </section>

  <footer class="footer">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>QUICK LINKS</h4>
          <ul>
            <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h4>CONTACT INFO</h4>
          <ul>
            <li>dugay.dorothy@clsu2.edu.ph</li>
            <li>09568174460</li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>ADDRESS</h4>
          <ul>
            <li>Science City Of Munoz,<br> Nueva Ecija</li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>SOCIAL MEDIA</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/dorothyfae.dugay/" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>

            <a href="https://www.instagram.com/dfaeeeeee/" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
     </div>
  </footer>

<script>
// Get the nav bar element
var navbar = document.querySelector('.navbar');

// Listen for the scroll event on the page
window.addEventListener('scroll', function() {
  // Get the current scroll position
  var scrollPos = window.scrollY;

  // If the scroll position is greater than the height of the nav bar, add the .scrolled class to the nav bar element
  if (scrollPos > navbar.offsetHeight) {
    navbar.classList.add('scrolled');
  } else {
    // Otherwise, remove the .scrolled class
    navbar.classList.remove('scrolled');
  }
});

 let slideIndex = 1;
    showSlide(slideIndex);
    
    function openLightbox() {
      document.getElementById('Lightbox').style.display = 'block';
    };
    
    function closeLightbox() {
      document.getElementById('Lightbox').style.display = 'none';
    };
    
    function changeSlide(n) {
      showSlide(slideIndex += n);
    };
    
    function toSlide(n) {
      showSlide(slideIndex = n);
    };
    
    function showSlide(n) {
      const slides = document.getElementsByClassName('slide');
      let modalPreviews = document.getElementsByClassName('modal-preview');
    
      if (n > slides.length) {
        slideIndex = 1; 
      };
      
      if (n < 1) {
        slideIndex = slides.length;
      };
    
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      };
      
      for (let i = 0; i < modalPreviews.length; i++) {
        modalPreviews[i].className = modalPreviews[i].className.replace(' active', '');
      };
      
      slides[slideIndex - 1].style.display = 'block';
      modalPreviews[slideIndex - 1].className += ' active';
    };
</script>
</body>
</html>