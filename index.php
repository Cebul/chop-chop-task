<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chop-chop Task</title>
    <link rel="shortcut icon" type="image/png" href="styles/img/sample-pack.png">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
  </head>
  <body>
    <header>
      <!-- navigation -->
      <div class="topnav" id="myTopnav">
        <div class="nav-items" id="home"><a href="#home">Home</a></div>
        <div class="nav-items" id="products"><a href="#products">Products</a></div>
        <div id="logo"><img src="./styles/img/sample-pack.png" alt="Sample&Pack"></div>
        <div class="nav-items" id="about"><a href="#about">About us</a></div>
        <div class="nav-items" id="contact"><a href="#contact">Contact</a></div>
        <div id="ham-icon"><a href="javascript:void(0);" class="icon">&#9776;</a></div>
      </div>
    </header>

    <!-- this is just a sample page - main title -->
    <section class="main-title">
      <h1>This is just a sample page</h1>
      <button type="button"  id="main-button" name="push-the-button">push the button</button>
    </section>
    <!-- our products - main content -->
    <main class="products">
      <div class="products-container">
        <article class="text-block">
          <h1>A heading title</h1>
          <img src="./styles/img/text-column-img.png" alt="Code Picture">
          <p class="img-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in nisi vestibulum, eleifend sapien a, sollicitudin urna.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in nisi vestibulum, eleifend sapien a, sollicitudin urna. Vestibulum ullamcorper, dolor eu viverra imperdiet, orci tortor fermentum erat, in pharetra felis neque vitae ex.</p>
          <div class="toggle-text" id="toggle-text-1"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in nisi vestibulum, eleifend sapien a, sollicitudin urna. Vestibulum ullamcorper, dolor eu viverra imperdiet, orci tortor fermentum erat, in pharetra felis neque vitae ex.</p>
            <p>Vivamus nec magna ut nulla rutrum interdum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in nisi vestibulum, eleifend sapien a, sollicitudin urna.</p>
            <p>Vivamus nec magna ut nulla rutrum interdum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in nisi vestibulum, eleifend sapien a, sollicitudin urna.</p>
          </div>
          <span class="read-more"><a href="javascript:void(0)" id="read-more-btn-1" class="read-more-btn">&mdash; read more</a></span>
        </article>

        <article class="text-block">
          <h1>A much longer heading title</h1>
          <img src="./styles/img/text-column-img.png" alt="Code Picture">
          <p class="img-text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in nisi vestibulum, eleifend sapien a, sollicitudin urna.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in nisi vestibulum, eleifend sapien a, sollicitudin urna.Vivamus.</p>
          <div class="toggle-text" id="toggle-text-2"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in nisi vestibulum, eleifend sapien a, sollicitudin urna. Vestibulum ullamcorper, dolor eu viverra imperdiet, orci tortor fermentum erat, in pharetra felis neque vitae ex.</p><p>Vivamus nec magna ut nulla rutrum interdum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in nisi vestibulum, eleifend sapien a, sollicitudin urna.</p></div>
          <span class="read-more"><a href="javascript:void(0)" id="read-more-btn-2" class="read-more-btn">&mdash; read more</a></span>
        </article>

        <article class="text-block">
          <h1>A heading title</h1>
          <img src="./styles/img/text-column-img.png" alt="Code Picture">
          <p class="img-text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in nisi vestibulum, eleifend sapien a, sollicitudin urna.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in nisi vestibulum, eleifend sapien a, sollicitudin urna. Vestibulum ullamcorper, dolor eu viverra imperdiet, orci tortor fermentum erat, in pharetra felis neque vitae ex.</p>
          <div class="toggle-text" id="toggle-text-3"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in nisi vestibulum, eleifend sapien a, sollicitudin urna. Vestibulum ullamcorper, dolor eu viverra imperdiet, orci tortor fermentum erat, in pharetra felis neque vitae ex.</p><p>Vivamus nec magna ut nulla rutrum interdum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in nisi vestibulum, eleifend sapien a, sollicitudin urna.</p></div>
          <span class="read-more"><a href="javascript:void(0)" id="read-more-btn-3" class="read-more-btn">&mdash; read more</a></span>
        </article>
      </div>
    </main>
    <!-- contact us form -->
    <section class="contact-us">
      <form class="contact-us-form" action="index.php" method="POST">
        <h1>Contact us</h1>
        <div class="contact-all-inpts">
          <div class="contact-inpts">
            <input  class="contact-inp" type="text" name="name" placeholder="name" onfocus="this.placeholder=''" onblur="this.placeholder='name'" required>
            <input class="contact-inp" type="email" name="e-mail" placeholder="e-mail" onfocus="this.placeholder=''" onblur="this.placeholder='e-mail'" required>
            <input class="contact-inp" type="number" name="phone" placeholder="phone" onfocus="this.placeholder=''" onblur="this.placeholder='phone'" required>
          </div>
          <textarea placeholder="your message" name="name" onfocus="this.placeholder=''" onblur="this.placeholder='your message'" required></textarea>
          <div class="contact-btn">
            <input type="submit" name="" value="send message">
            <!-- <button type="button" name="button">send message</button> -->
          </div>
        </div>
      </form>
    </section>
    <!-- back to top button -->
    <div class="back-top-btn">
      <button id="back-top-btn" type="button" name="button">back to top</button>
    </div>
    <!-- footer -->
    <footer>
      <div class="table">
        <div class="table-row" href="/mylink">
            <a href="#"><div class="table-cell">&mdash; home</div></a>
            <a href="#products"><div class="table-cell">&mdash; products</div></a>
        </div>
        <div class="table-row" href="/mylink">
            <a href="#contact-us"><div class="table-cell">&mdash; about us</div></a>
            <a href="#"><div class="table-cell">&mdash; contact</div></a>
        </div>
      </div>
      <div class="social-media-container">
        <a href="https://twitter.com/KamilCebula2" target="_blank">
          <i class="fa fa-twitter twitter" aria-hidden="true"></i>
        </a>
        <a href="https://www.facebook.com/kamil.cebula.37" target="_blank">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
      </div>
      <div class="copyright">
        Copyright &copy 2010 Sample & Pack, Inc.
      </div>
    </footer>
  <!-- scripts -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="./js/index.js"></script>
  </body>
</html>
