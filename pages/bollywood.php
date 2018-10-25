<?php
  date_default_timezone_set('Asia/Calcutta');
  include '../php/bollycmnt.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bollywood</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    
	<link rel="stylesheet" type="text/css" href="../css/time.css">
  <link rel="stylesheet" type="text/css" href="../css/cmntstyle.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script defer="true" src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

        /*function myfunction(){
          $.ajax({url:"bollycmnt.php", success:function(result)
          {
            $("form").(result);
          }
        })
        }*/
    </script>

    <style>

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 90%;
        padding: 12px 20px;
        margin: 8px 26px;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      font-size:16px;
    }

    /* Set a style for all buttons */
    #btn1 {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 26px;
        border: none;
        cursor: pointer;
        width: 90%;
      font-size:20px;
    }
    button:hover {
        opacity: 0.8;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }
    /* The Modal (background) */
    .modal {
      display:none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
    }

    /* Modal Content Box */
    .modal-content {
        background-color: #fefefe;
        margin: 4% auto 15% auto;
        border: 1px solid #888;
        width: 40%; 
      padding-bottom: 30px;
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }
    .close:hover,.close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        animation: zoom 0.6s
    }
    @keyframes zoom {
        from {transform: scale(0)} 
        to {transform: scale(1)}
    }
    </style>

</head>

<body class="left-column dept news">

  <ul id="access-links">
    <li><a href="#main">Skip to main content</a></li>
    <li><a href="#mainNav">Skip to primary navigation</a></li>
  </ul>



  <div id="wrap">
    <div id="container">
      <div id="content">

<div class="site-header" role="banner">

    <div class="page-top">
      <div class="row">

        <div class="page-top-left">
        	<a href="../index.html" style="font-family: Georgia;color:#fff; font-size: 25px;">Times Now</a>
        </div>

        <div class="page-top-right">
          <ul id="topNav">
			<li><a href="../index.html" title="About">About</a></li>
			<li><a href="#" title="Services">Services</a></li>
			<li><a href="#">Explore</a></li>
			<li><a href="#" title="A to Z index of NewsCenter websites">A-Z Index</a></li>
		</ul>
          <div class="search" role="search">
		 <form action="/search/" id="cse-search-box-site">
		<div><input name="ie" type="hidden" value="UTF-8"/> <label class="hide" for="search-site">Search</label> <input class="query" id="search-site" name="q" placeholder="Search news" type="text"/> <input class="srchBtn" type="submit" value="Search"/></div>
		</form>
          </div>
        </div>

      </div>
    </div>

    <div class="main-header">

      <div class="row names">
        <div class="secondary-name">
          <h1><a href="../index.html">Newscenter</a></h1>
          <a class="mobile-menu" href="#mainNav"></a>
        </div>
      </div>

      <div class="row main-navigation" role="navigation">
        <ul class="hasqsg" id="mainNav">
			<li class="first" style="z-index: 0;"><a href="../index.html">Categories</a></li>
		
			<li><a href="#subs">Subscribe</a></li>
			<li style="z-index: 0;"><a href="#subs">Contact Us</a></li>
			<li class="last qsg"><span>Helpful Links</span> 
			<ul>
			<li><a href="#">News by topic</a></li>
			<li><a href="#">News archives</a></li>
			<li><a href="#">E-Newsletter</a></li>
			<li><a href="#">Tuesday Newsday</a></li>
			<li><a href="#">RSS feeds</a></li>
			<li><a href="#">Review Newspaper</a></li>
		
			</ul>
			</li>
			</ul>
			      </div>

			    </div>
			    
</div>

       
        <div class="row" id="sprflt">

          <div class="main-content" id="main" role="main">
            <div class="row breadcrumbs"><p><a href="../index.html">
        Home</a> / 2018 / Bollywood Articles</p></div>
            
            <h1 id="title">2018&#160;
          Bollywood News Articles</h1>
          <div>
             <?php

                  $host = "localhost";
                  $username = "root";
                  $password = "";
                  $database = "test";

                  try{
                      $connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);

                      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     // echo 'Databse conn';
                      //Fetch data
                      $query = "SELECT * FROM bollywood";

                      $data = $connect->query($query);

                      foreach($data as $row)
                      {
                        echo '<ul>
                                <li>
                                  <span class="date">'.$row["date"].'</span>
                                    <h3>
                                      <a href='.$row["link"].'>'.$row["title"].'</a>
                                    </h3>
                                    <p>'.$row["description"].'</p>
                                    
                                </li>
                              </ul>';
                        //echo '<button type="button">Review</button>';
                      }
                  }
                  catch(PDOException $error)
                  {
                      $error->getMessage();
                  }
              ?>

          <h4>Want to give reviews?</h4>
          <button onclick="document.getElementById('modal-wrapper').style.display='block'">Login</button>&nbsp;<button onclick="myfunction()">Anonymous</button>
          
        </div>
        <br>
        <?php
           echo "<form method='POST' action='".setBollyComments($conn)."'>
             <input type='hidden' name='uid' value='Anonymous'>
             <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
             <textarea name='message'></textarea><br>
             <button name='commentSubmit' type='submit' id='btn2'>Comment</button>
           </form>";
            getBollyComments($conn);
        ?>
        </div>

          
          <div id="modal-wrapper" class="modal">
          
          <form class="modal-content animate" action="/action_page.php">
                
            <div class="imgcontainer">
              <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
              <h1 style="text-align:center">LOG IN</h1>
            </div>

            <div class="container">
              <input type="text" placeholder="Enter Username" name="uid" CLASS="required"/>
              <input type="password" placeholder="Enter Password" name="pwd" CLASS="required"/>      
              <button type="submit" id="btn1" name="loginSubmit">Login</button>
              <input type="checkbox" style="margin:26px 30px;"> Remember me      
              <a href="#" style="text-decoration:none; float:right; margin-right:10px; margin-top:7px;">Forgot Password ?</a>
              <a href="#" style="text-decoration:none; float:right; margin-right:35px; margin-top:7px;">Register Now</a>
            </div>
                
          </form>
        </div>


          <div class="sidebar" id="subNav" role="navigation">
            
            <h3>Archive</h3><ul><li><a href="#">2018</a></li><li><a href="#">2017</a></li><li><a href="#">2016</a></li><li><a href="#">2015</a></li><li><a href="#">2014</a></li><li><a href="#">2013</a></li><li><a href="#">2012</a></li><li><a href="#">2011</a></li><li><a href="#">2010</a></li>
            
          </div>

        </div>
        
        <div class="main-footer">
          <div class="row">
              <div class="footer-left">
                  <img alt="University of Mumbai" class="seal" height="84" src="https://upload.wikimedia.org/wikipedia/en/thumb/7/7a/University_of_Mumbai_coat_of_arms.svg/1200px-University_of_Mumbai_coat_of_arms.svg.png" width="84"/>
				<div class="address home">
				<div class="location">DBIT-Mumbai</div>
				<div class="copyright">&#169;2018 University of Mumbai. All Rights Reserved.</div>
</div>
              </div>
              <div class="footer-right">
                  

<div class="social-media" id="subs">
        <a href="https://www.twitter.com/"><i aria-label="Follow us on Twitter" class="fab fa-twitter"></i></a> 
        <a href="https://www.instagram.com/"><i aria-label="Follow us on Instagram" class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/"><i aria-label="Follow us on Facebook" class="fab fa-facebook-f"></i></a>
        <a href="http://youtube.com/"><i aria-label="Follow us on YouTube" class="fab fa-youtube"></i></a>
        <a href="http://www.linkedin.com/"><i aria-label="Follow us on LinkedIn" class="fab fa-linkedin-in"></i></a>
    </div>
              </div>
          </div>
             
        </div>
        
      </div>
    </div>
  </div>


<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5RFHNC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5RFHNC');</script>
<script type="text/javascript">

(function() {
var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;
sz.src = '//siteimproveanalytics.com/js/siteanalyze_8343.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);
})();
/*]]>*/
</script>
</body>
</html>