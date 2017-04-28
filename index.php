<?php
  include("php/LinkToDatabase.php");
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Personal Site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="image/cl2.jpg" alt="Cathedral of Learning" width="1200" height="500">
        </div>
        <div class="item">
          <img src="image/coop.jpg" alt="Coop" width="1200" height="500">
        </div>
        <div class="item">
          <img src="image/downtown.jpg" alt="Downtown" width="1200" height="500">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true">
        </span>
        <span class="sr-only">Next</span>
      </a>
    </div>



    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <!-- <button type="button" name="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> -->
          <a class="navbar-brand personal" href="#">Ningqian's Homepage</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">About</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#experience">Work Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="about" class="container">
      <h3 class="personal text-center">About Me</h3><hr>
      <div class="row">
        <div class="col-sm-3">
          <img src="image/image.jpg" class="img-thumbnail" alt="" width="250" height="250">
        </div>
        <div class="col-sm-9">
          <p class="personal">Hi! My name is Ningqian Zhang. I am currently an undergraduate student at the University of Pittsburgh. I major in both Computer Science and Statistics. I am passionate about data science, machine learning, and Natural Language Processing. Dealing with data is great fun! I plan to either further my study in these fields, or find a job that does things using these knowledge.</p>
          <br>
          <p class="personal">In my spare time, I like watching movies, listening to music, and watching Japanese anime. Sometimes I go to concert or museums with my friends. I play the piano, and some guitar.</p>
          <br><br>
          <a href="https://github.com/nizz10">
            <i class="fa fa-github fa-2x" aria-hidden="true"></i>
            <!-- <span class="social social-github"></span> -->
          </a>
          <a href="https://www.linkedin.com/in/ningqian-zhang-1b097881/">
            <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
          </a>
          <a href="mailto:ningqianz10@gmail.com">
            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
          </a>
          <br><br>
          <a href="file/NingqianZhang.Resume.201702.pdf" target="_blank" class="btn btn-primary">Resume</a>
        </div>
      </div>
    </div>

    <div id="education" class="container">
      <h3 class="text-center">Education</h3><hr>
      <div class="row">
        <div class="col-sm-3">
          <img src="image/cl.jpg" class="img-thumbnail" alt="" width="250" height="250">
        </div>
        <div class="col-sm-9">
          <div class="col-sm-3">
            <h4>University</h4>
            <br><br><br><br><br><hr>
            <h4>Relevant Courses</h4>
          </div>
          <div class="col-sm-9">
            <h4>University of Pittsburgh, Pittsburgh, PA</h4>
            <ul>
              <li>Bachelor of Science in Computer Science</li>
              <li>Bachelor of Science in Statistics</li>
              <li>umulative GPA  3.833/4.0</li>
              <li>Dean’s List: Spring 2016, Fall 2015, Spring 2015, Fall 2014, Spring 2014</li>
            </ul>
            <hr>
            <ul>
              <li>Machine Learning</li>
              <li>Data Science</li>
              <li>Intro to Natural Language Processin</li>
              <li>Algorithm Implementation</li>
              <li>Intro to System Software</li>
              <li>Applied Time Series</li>
              <li>Applied Nonparametric Statistics</li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div id="experience" class="container">
      <h3 class="text-center">Work Experience</h3><hr>
      <div class="row">
        <div class="col-sm-3">
          <img src="image/coop.jpg" class="img-thumbnail" alt="Cinque Terre" width="350" height="350">
        </div>
        <div class="col-sm-9">
          <div class="col-sm-3">
            <h5>September 2016 - December 2016</h5>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h5>July 2015</h5>
          </div>
          <div class="col-sm-9">
            <h4>M*Modal, Pittsburgh, PA</h4>
            <h5>Co-op</h5>
            <ul>
              <li>Wrote a project that could gather the runtime and memory usage information of the Markup Processor engines, do statistical analysis to the data, and plot the data. To accomplish this project, I need to write programs in several programming languages like Java, YAML and some XML, use version control software like Mercurial, and set up the environment on the servers I used.</li>
              <li>Wrote a Python script to automatically set up tenants that used to store medical documents. Steps for setting up included creating users groups, creating users, setting password, creating layouts and content modules, etc. I was provided with cULR commands that would do these jobs, then I needed to turn these command into an integrated Python script.</li>
            </ul>
            <hr>
            <h4>KPMG China, Guangzhou, China</h4>
            <h5>Auditing Trainee</h5>
            <ul>
              <li>Collected client’s bank account information and obtained confirmation from related banks by filling out and sending out confirmation requests.</li>
              <li>Worked in one of the auditing teams responsible for a specific company and audited the company’s account by extracting the payment vouchers, transfer vouchers and tax receipts.</li>
              <li>Recorded bank account information that were confirmed by related banks and input relevant data into computer using Excel.</li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div id="projects" class="container text-center">
      <h3 class="text-center">Project</h3><hr>
      <!-- <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-9"> -->
          <br>
          <a href="https://github.com/nizz10/IntroNLP-Assignment1" class="btn btn-primary">n-gram language models</a>
          <!-- <button type="button"  onclick="location.href ='www.google.com';"></button> -->
          <h4>This is an implementation of the unigram and trigram language model.</h4>
          <br>
          <a href="https://github.com/nizz10/IntroNLP-CourseProject" class="btn btn-primary">Fake News Challenge</a>
          <h4>This is an implementation of the Fake News Challenge (still working on it...).</h4>
          <br>
          <a href="https://github.com/nizz10/DataScience_Project2" class="btn btn-primary">Association Rule Mining</a>
          <h4>This is an implementation of the A-Priori association rule mining algorithm.</h4>

        <!-- </div> -->
      </div>
    </div>

    <div id="contact" class="container contact">
      <h3 class="text-center">Contact</h3><hr>
      <div class="row">
        <div class="col-sm-3">
          <h4>Please leave your information here.</h4>
          <br>
          <h4>
            <a href="mailto:ningqianz10@gmail.com">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </a>
            Or send me an email directly</h4>

        </div>
        <div class="col-sm-9">
          <form name="registerForm">
            <fieldset>
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="comment">Message:</label>
                <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
              </div>
              <button type="button" class="btn btn-default" onclick="storeData();">Submit</button>
            </fieldset>
          </form>
          <br>
          <p class="result"></p>
        </div>
      </div>
    </div>
    <footer class="text-center container">
      <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a><br><br>
      <a href="https://github.com/nizz10">
        <i class="fa fa-github fa-2x" aria-hidden="true"></i>
        <!-- <span class="social social-github"></span> -->
      </a>
      <a href="https://www.linkedin.com/in/ningqian-zhang-1b097881/">
        <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
      </a>
      <a href="mailto:ningqianz10@gmail.com">
        <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
      </a>
    </footer>
    <?php
      $servername = 'localhost';
      $username = '';
      $password = '';
      $dbname = '';

      $newLink = new LinkToDatabase($servername, $username, $password, $dbname);
     ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
