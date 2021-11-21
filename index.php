<?php

// server side validation
    $phpError = "";
    $error = "";
    $successMessage = "";
if($_POST) {
    
    if (!$_POST['name']) {
        $error .= "Your name is required. <br>";
    }
        if (!$_POST['email']) {
        $error .= "Your email address is required. <br>";
    }
          if (!$_POST['message']) {
        $error .= "Your content is required. <br>";
    }
    
    if($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        $error .= "The email address is invalid. <br>";
    }
    
    if ($error != "") {
        $phpError = $error;
    } else {
        $emailTo = "dylanjiawei@gmail.com";
        $subject = "Portfolio Email";
        $content = $_POST['message'] . ". From: " . $_POST['name'] ;
        $headers = "FROM: ". $_POST['email'];
        
        if(mail($emailTo, $subject, $content, $headers)) {
            $successMessage =  "Your message was sent! I'll get back to you ASAP!";
        } else {
            $phpError = "Your message couldnt be sent - please try again later.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <link href="tailwind.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@1,700&family=Lato&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="src/style.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
  <body>
    <nav class="navbar">
            <a href="#" class="nav-logo"><img class="logo-image" src="img/logo.png" alt="logo"></a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    <div class="flex h-screen bg-black">
      <div class="w-1/2 flex flex-col justify-center px-8">
        <div style="max-width: 500px;" class="mx-auto">
        <p class="text-gray-400 mb-8">HI THERE!</p>
        <h1 class="text-white text-4xl mb-8 leading-tight-none">I'm Dylan Tan</h1>
        <p class="text-gray-400 mb-8">I'm a junior web designer & front-end developer focused on crafting clean & user-friendly experiences, I an passsionate about building excellent software that improves the lives of those around me.</p>
        <div>
        <a href="" class="text-white bg-green-600 inline-block px-8 py-4 rounded-full font-lato">Learn More</a>
      </div>
      </div>
      </div>
      <div class="w-1/2" id="canvasContainer">
      <canvas></canvas>
      </div>
    </div>
    <script type="module" src="./src/main.js"></script>
    <main>
      <br>
      <a id="about"></a>
      <div class="main-body-container">
        <section id="about-container">
          <div class="about">
          <div class="section-title">
          <h2>About</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.          </p>
        </div>
        <div class="row">
          <div class="col-lg-4 profile-photo">
            <img src="img/dylan-photo.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content aos-init aos-animate" data-aos="fade-left">
            <h3>UI/UX Designer &amp; Web Developer.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class="row">
              <div class="col-lg-6 about-content">
                <ul>
                  <li><strong>Phone:</strong> <span>+61 0491103933</span></li>
                  <li><strong>City:</strong> <span>Perth, Western Australia</span></li>
                </ul>
              </div>
              <div class="col-lg-6 about-content">
                <ul>
                  <li><strong>Email:</strong> <span>dylanjiawei@gmail.com</span></li>
                  <li><strong>Degree:</strong> <span>Study</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        </div>
        <br>
        <div id="skill">
        <div class="section-title">
          <h2>Skills</h2>
        </div>
            <div class="iner-wrapper">
              <div class="progress-bar-center">
              <div class="col-lg-5 skills-content-left">
              <div class="skill-bar">
                <div class="info"><span>HTML -  100%</span></div>
                <div class="progress-bar html"><span></span></div>
              </div>
              <div class="skill-bar">
                <div class="info"><span>CSS - 90%</span></div>
                <div class="progress-bar css"><span></span></div>
              </div>
              <div class="skill-bar">
                <div class="info"><span>JavaScript - 65%</span></div>
                <div class="progress-bar javascript"><span></span></div>
              </div>
              </div>
              <div class="col-lg-6 skills-content-right">
              <div class="skill-bar">
                <div class="info"><span>Bootstrap - 65%</span></div>
                <div class="progress-bar bootstrap"><span></span></div>
              </div>
              <div class="skill-bar">
                <div class="info"><span>PHP - 65%</span></div>
                <div class="progress-bar php"><span></span></div>
              </div>
              <div class="skill-bar">
                <div class="info"><span>Wordpress - 75%</span></div>
                <div class="progress-bar wordpress"><span></span></div>
              </div>
              </div>
              </div>
        </div>
        </div>
        </section>
        <a id="projects"></a>
        <section class="projects">
          <div class="project-content">
            <div class="section-title">
              <h2>Projects</h2>
            </div>
            <div class="site-container">
              <div class="article-container">
              <article class="article-card">
                <figure class="article-image">
                  <img src="img/lego.png" alt="LEGO website"/>
                </figure>
                <div class="article-content">
                  <a href="#" class="card-category">LEGO</a>
                  <h3 class="card-title">LEGO Website for the client</h3>
                  <p class="card-excerpt">Our client is a LEGO lover and this is his very first website and it is also our first real life client project that we did as a team through out the year.</p>
                </div>
              </article>
              <article class="article-card">
                <figure class="article-image">
                  <img src="img/wordpress.png" alt="Wordpress website"/>
                </figure>
                <div class="article-content">
                  <a href="#" class="card-category">Wordpress</a>
                  <h3 class="card-title">Replicated from official website</h3>
                  <p class="card-excerpt">This is a project that I did last semester as a replicate website by using my own codes to style it to make it looks similar to the official website.</p>
                </div>
              </article>
              <article class="article-card">
                <figure class="article-image">
                  <img src="img/silverstripe.png" alt="SilverStripe"/>
                </figure>
                <div class="article-content">
                  <a href="my-project/public/index.php" class="card-category">SilverStripe</a>
                  <h3 class="card-title">In class project from semester 1</h3>
                  <p class="card-excerpt">This project was very challenging at the beginning as it was new project with PHP and CMS, but with some help I eventually overcome the problems.</p>
                </div>
              </article>
              </div>
            </div>
          </div>
        </section>
        <footer>
          <a id="contact"></a>
          <section class="mbr-section form1 cid-qyvf9K0GGo" id="form1-4" data-rv-view="791">
           <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-12 col-lg-8">
                        <h2 class="mbr-section-title">CONTACT ME</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="media-container-column col-lg-8" data-form-type="formoid">
                            <div data-form-alert="" hidden="">
                                Thanks for filling out the form!
                            </div>
                    
                            <form class="mbr-form" action="" method="post" data-form-title=""><input type="hidden" data-form-email="true" value="R46ImfT8lRYLhZq6vpVE63L0V35bOdmwHjgn18Tp/HdDujD3JfWe/8bm7YjE2vjZZ7JFQMRNRIinYQUh3aNa2qi1GshxArFhHAffNuiFsZiNLfMCF8KElmS7V7lbqBIL">
                                <div class="row row-sm-offset">
                                    <div class="col-md-5 multi-horizontal" data-for="name">
                                        <div class="form-group">
                                            <label class="form-control-label mbr-fonts-style display-7" for="name-form1-4">Name<span class="red-star">*</span></label>
                                            <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-4">
                                        </div>
                                    </div>
                                    <div class="col-md-7 multi-horizontal" data-for="email">
                                        <div class="form-group">
                                            <label class="form-control-label mbr-fonts-style display-7" for="email-form1-4">Email<span class="red-star">*</span></label>
                                            <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-4">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" data-for="message">
                                    <label class="form-control-label mbr-fonts-style display-7" for="message-form1-4">Message</label>
                                    <textarea class="form-control" name="message" rows="7" data-form-field="Message" id="message-form1-4"></textarea>
                                </div>
                    
                                <span class="input-group-btn"><button type="submit" class="btn btn-form btn-black-outline display-4">SUBMIT</button></span>
                            </form>
                    </div>
                </div>
            </div>
        </section>
        </footer>
        </div>
    </main>
    <script src="src/js/nav.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $("form").submit(function(e){
            var error = "";
            
            if($("#name").val() == "") {
                error+= "<p> Please enter your name. </p>";
            }
            
             if($("#email").val() == "") {
                error+= "<p> Please enter your email address so I can get back to you. </p>";
            }
             
            if($("#emailContent").val() == "") {
                error+= "<p> Please let me know what you need. The content field is required. </p>";
            }
            
            if(error != "") {
            $('#error').html(error);
            
            return false;
            } else {
              return true;
            }
        });
    </script>
  </body>
</html>
