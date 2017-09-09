<?php

// This is the file needed to edit basic content
// about the site such as heading, social links,
// images and introductory text.
include_once("php_include/page/design.php");

echo("<!DOCTYPE HTML>
<html>

<head>
  <title>The best theme Lorem Ipsum</title>
  <meta charset='utf-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no' />
  <link rel='stylesheet' href='assets/css/main.css' />
  <noscript><link rel='stylesheet' href='assets/css/noscript.css' /></noscript>
</head>

<body class='is-loading'>

  <!-- Wrapper -->
  <div id='wrapper' class='fade-in'>

    <!-- Intro -->
    <div id='intro'>
      <h1>" . $title1 . "</h1>
      <p>" . $title2 . "</p>
      <ul class='actions'>
        <li><a href='#header' class='button icon solo fa-arrow-down scrolly'>Continue</a></li>
      </ul>
    </div>

    <!-- Header -->
    <header id='header'>
      <a href='http://www.vivus.events' class='logo'>Checkmate Vivus</a>
    </header>

    <!-- Nav -->
    <nav id='nav'>
      <ul class='links'>
        <li class='active'>Arab Society by <a href='https://www.vivus.events'>
							Checkmate Vivus</a>
        </li>

      </ul>
      <ul class='icons'>
      <li><a href='" . $TwitterLink . "' class='icon fa-twitter'><span class='label'>Twitter</span></a></li>
      <li><a href='" . $facebookLink . "' class='icon fa-facebook'><span class='label'>Facebook</span></a></li>
      <li><a href='" . $InstagramLink . "' class='icon fa-instagram'><span class='label'>Instagram</span></a></li>
      <li><a href='" . $GitbhubLink . "' class='icon fa-github'><span class='label'>GitHub</span></a></li>

      </ul>
    </nav>

    <!-- Main -->
    <div id='main'>

      <!-- Featured Post -->
      <article class='post featured'>
        <header class='major'>
          <span class='date'>" . date("Y") . "</span>
          <h2>" . $title3 . "</h2>
          <p>" . $title4 . "</p>
        </header>
        <a href='#' class='image main'>
          <img src='$imglink1' alt='' /></a>
        <ul class='actions'>
          <li><a href='https://www.checkmateconcevoir.com/vivus/interface/profile?u=ArabicSociety' class='button big'>Full Story</a></li>
        </ul>
      </article>

      <!-- Posts -->");

// This contains the latest version of the Checkmate Vivus API
// To help developers easily integrate the vivus system. More
// information can be foud at the README.md or www.vivus.events.
// You can also read up on the API herehttps://github.com/checkmateconcevoir/vivus/blob/master/README.md						
include_once("php_include/page/eventlist.php");

// The vivus API also provides galleries for previous images, more
// information can be found on the link previously provided.
include_once("php_include/page/eventgallery.php");
						
echo("
</div>

<!-- Footer -->
<footer id='footer'>
  <section>
    <form method='post' action='#'>
      <div class='field'>
        <label for='name'>Name</label>
        <input type='text' name='name' id='name' />
      </div>
      <div class='field'>
        <label for='email'>Email</label>
        <input type='text' name='email' id='email' />
      </div>
      <div class='field'>
        <label for='message'>Message</label>
        <textarea name='message' id='message' rows='3'></textarea>
      </div>
      <ul class='actions'>
        <li><input type='submit' value='Send Message' /></li>
      </ul>
    </form>
  </section>
  <section class='split contact'>
    <section class='alt'>
      <h3>Address</h3>
      <p>" . $address . "</p>
    </section>
    <section>
      <h3>Phone</h3>
      <p><a href='#'> " . $number . "</a></p>
    </section>
    <section>
      <h3>Email</h3>
      <p><a href='#'>" . $email . "</a></p>
    </section>
    <section>
      <h3>Social</h3>
      <ul class='icons alt'>

        <li><a href='" . $TwitterLink . "' class='icon alt fa-twitter'><span class='label'>Twitter</span></a></li>
      <li><a href='" . $facebookLink . "' class='icon alt fa-facebook'><span class='label'>Facebook</span></a></li>
      <li><a href='" . $InstagramLink . "' class='icon alt fa-instagram'><span class='label'>Instagram</span></a></li>
      <li><a href='" . $GitbhubLink . "' class='icon alt fa-github'><span class='label'>GitHub</span></a></li>

      </ul>
    </section>
  </section>
</footer>

<!-- Copyright -->
<div id='copyright'>
  <ul>
    <li>&copy; Checkmate Concevoir 2015 - " . date(Y) . "</li>
    <li>Design: <a href='https://www.vivus.events'>Checkmate Vivus</a></li>
  </ul>
</div>

</div>

<!-- Scripts -->
<script src='assets/js/jquery.min.js'></script>
<script src='assets/js/jquery.scrollex.min.js'></script>
<script src='assets/js/jquery.scrolly.min.js'></script>
<script src='assets/js/skel.min.js'></script>
<script src='assets/js/util.js'></script>
<script src='assets/js/main.js'></script>

</body>

</html>	
<!-- This file was developed edited using the html5up themes, more information about the theme can be found here (unsplash.com). -->						
");

?>