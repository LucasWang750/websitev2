<?php get_header();?>
	
<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">Lucas Wang</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#page-top">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#about">About</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#experience">Experience</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#portfolio">Projects</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#academics">Academics</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Contact</a>
      </li>
    </ul>
  </nav>

  <!-- Header -->
  <div id="particles-js"></div> 
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">Lucas Wang</h1>
      <h3 class="mb-5">
        <em>Full Stack Developer</em>
      </h3>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- About -->
  <section class="content-section bg-light" id="about">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2 class="mb-2">About Me</h2>
          <p class="lead mb-5">Hello! I am Lucas Wang, a high school junior at <a href="https://dbhs.org">Diamond Bar High School</a> I am looking to major in Computer Science, Electrical Engineer, Applied Mathematics, or Applied Physics in College. In the future I hope to solve big problems such as full immersion virtual reality.</p>
          <a class="btn btn-dark btn-xl js-scroll-trigger" href="#experience">Technical Experiences</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="content-section bg-primary text-white text-center" id="experience">
    <div class="container">
      <div class="content-section-heading">
        <h3 class="text-secondary mb-0"></h3>
        <h2 class="mb-5">Experience</h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-graduation"></i>
          </span>
          <h4>
            <strong>Code Coach</strong>
          </h4>
          <p class="text-faded mb-0">Teach kids 9-14 how to program in Scratch, HTML/CSS, Python</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-screen-smartphone"></i>
          </span>
          <h4>
            <strong>Tech Help</strong>
          </h4>
          <p class="text-faded mb-0">Help local seniors solve difficulties with their electronic devices</p>
        </div>
        <div class="col-lg-3 col-md-6">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-screen-desktop"></i>
          </span>
          <h4>
            <strong>Hackathon</strong>
          </h4>
          <p class="text-faded mb-0">CodeDay, TitanHacks, WinHack</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-like"></i>
          </span>
          <h4>
            <strong>City Volunteer</strong>
          </h4>
          <p class="text-faded mb-0">Organize and volunteer in city-wide events</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Portfolio</h3>
        <h2 class="mb-5">Recent Projects</h2>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item" href="https://github.com/lucaswang750/coronalytics" target="_blank">
            <span class="caption" data-aos="">
              <span class="caption-content">
                <h2>Coronalytics</h2>
                <p class="mb-0">Using python libraries tweepy and dash, and Twitter API, I made a real-time graph that shows the amount of tweeets at each hour of the day. There are 2 bars: light blue for tweets from today and dark blue for average tweets everyday. This graph helps understand the trend of coronavirus on social media such as twitter.</p>
              </span>
            </span>
            <img class="img-fluid" src="http://lucas-wang.com/wp-content/themes/website2.0/img/coronalytics.png" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="https://lucaswang750.itch.io/cardioid" target="_blank">
            <span class="caption" data-aos="">
              <span class="caption-content">
                <h2>Cardioid</h2>
                <p class="mb-0">My team and I developed this game at CodeDay LA. It is a full functioning game that you can download from itch.io. The premise is that you are the sole boy of a math class study group and both girls in the group are very cute. Over the course of 3 days, you get to make choices that will ultimately determine which girl you end up with. This game was made on the backbones of Ren'Py</p>
              </span>
            </span>
            <img class="img-fluid" src="http://lucas-wang.com/wp-content/themes/website2.0/img/Cardioid.png" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#" target="_blank">
            <span class="caption" data-aos="">
              <span class="caption-content">
                <h2>Starship Game</h2>
                <p class="mb-0">This is the first game I have ever developed on a computer. It uses the Code.org development environment. Due to limited coding knowledge and tools, the starships used are online images set as sprites. We didn't know how to run multiple threads at once so the only 1 actual bullet is being shot out from each starship. This is written in javascript for the AP CSP create design challenge.</p>
              </span>
            </span>
            <img class="img-fluid" src="http://lucas-wang.com/wp-content/themes/website2.0/img/portfolio-2.png" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="https://github.com/Milotrince/you-are-tank" target="_blank">
            <span class="caption" data-aos="">
              <span class="caption-content">
                <h2>You Are Tank</h2>
                <p class="mb-0">This is a game that my team and I developed at a hackathon hosted by CodeDay LA. This game is developed using Unity in C++. The objective of the game is to survive and collect resources in a barren wasteland and upgrade your tank as you go along by adding parts to it.</p>
              </span>
            </span>
            <img class="img-fluid" src="http://lucas-wang.com/wp-content/themes/website2.0/img/you-are-tank.png" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="https://github.com/LucasWang750/VisualNovel" target="_blank">
            <span class="caption" data-aos="">
              <span class="caption-content">
                <h2>Visual Novel Game Engine</h2>
                <p class="mb-0">This is a game engine that I wrote using Java JFrame designed for building Visual Novels. I made this during CodeDay LA 2020 while inspired by the main game that our group made, Cardioid the Visual Novel with the Ren'Py engine. I took the game one step further and built a game engine for it so that we do not have to rely on Ren'Py's easy to use syntax.</p>
              </span>
            </span>
            <img class="img-fluid" src="http://lucas-wang.com/wp-content/themes/website2.0/img/portfolio-1.png" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="https://github.com/LucasWang750/algorithms/blob/master/TicTacToe.java" target="_blank">
            <span class="caption" data-aos="">
              <span class="caption-content">
                <h2>Tic Tac Toe</h2>
                <p class="mb-0">This is the classic Tic Tac Toe game reimagined in the console using Java. You play against an AI that just randomly mark their move. The game is straight forward. However, making this game was a lot harder than I thought it would be. Making the logic behind the moves and making sure that moves did not overlap took longer than expected. Overall, this game was a good start to programming.</p>
              </span>
            </span>
            <img class="img-fluid" src="http://lucas-wang.com/wp-content/themes/website2.0/img/portfolio-5.png" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="https://github.com/LucasWang750/algorithms/blob/master/Pong1.py" target="_blank">
            <span class="caption" data-aos="">
              <span class="caption-content">
                <h2>Pong</h2>
                <p class="mb-0">This is actually an airhockey game that you would find in an arcade. Two players battle it out in this python-based airhockey* game. Player 1 uses wasd and Player 2 uses arrow keys. The hardest part about making this game was trying to make a parent window that allows you to choose levels. However, I do not understand how to combine Tkinter and Turtle modules for python just yet.</p>
              </span>
            </span>
            <img class="img-fluid" src="http://lucas-wang.com/wp-content/themes/website2.0/img/portfolio-6.png" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="https://github.com/LucasWang750/SubHunter" target="_blank">
            <span class="caption" data-aos="">
              <span class="caption-content">
                <h2>Sub Hunter</h2>
                <p class="mb-0">This game is developed in Android Studios using Java. My first ever Android game. The objective is to find the hidden "submarine" (it really is just a point in the graph) by hitting different blocks. The game will calculate the distance between your last shot and the hidden submarine. </p>
              </span>
            </span>
            <img class="img-fluid" src="http://lucas-wang.com/wp-content/themes/website2.0/img/portfolio-7.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
<!--   <section class="content-section bg-primary text-white">
    <div class="container text-center">
      <h2 class="mb-4">The buttons below are impossible to resist...</h2>
      <a href="#" class="btn btn-xl btn-light mr-4">Click Me!</a>
      <a href="#" class="btn btn-xl btn-dark">Look at Me!</a>
    </div>
  </section> -->
  <!-- skills -->
  <section class="content-section bg-primary text-white text-center" id="academics">
    <div class="container">
      <div class="content-section-heading">
        <h3 class="text-secondary mb-0"></h3>
        <h2 class="mb-5">Academics</h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-screen-smartphone"></i>
          </span>
          <h4>
            <strong>Communication</strong>
          </h4>
          <p class="text-faded mb-0">Strong interpersonal and teamwork communication skills</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-pencil"></i>
          </span>
          <h4>
            <strong>Programming Languages</strong>
          </h4>
          <p class="text-faded mb-0">Python Javascript Java HTML CSS</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-pie-chart"></i>
          </span>
          <h4>
            <strong>Engineering</strong>
          </h4>
          <p class="text-faded mb-0">3-D Modeling Design Problem Solving</p>
        </div>
        <div class="col-lg-3 col-md-6">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-briefcase"></i>
          </span>
          <h4>
            <strong>Languages</strong>
          </h4>
          <p class="text-faded mb-0">English Chinese Spanish</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Map -->
<!--   <section id="contact" class="map">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.3913350323787!2d-117.8412772849873!3d33.98248072885114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c32b5d9259eb39%3A0xd2d870d3984172d3!2sDiamond%20Bar%20High%20School!5e0!3m2!1sen!2sus!4v1585203943889!5m2!1sen!2sus"></iframe>
    <br />
    <small>
      <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
    </small>
  </section> -->

<!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <form action="https://formspree.io/xzbvwezn" method="POST" />
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input name="name" class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input name="email" class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea name="message" class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>
<?php get_footer();?>