<!DOCTYPE html>
<html>
<head>
	<title>World</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    
	<link rel="stylesheet" type="text/css" href="../css/time.css">
	<script defer="true" src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
<!-- 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i"
        rel="stylesheet">
 --></head>

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
        Home</a> / 2018 / World Articles</p></div>
            
            <h1 id="title">2018&#160;
          World News Articles</h1>
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
                      $query = "SELECT * FROM world";

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
                      }
                  }
                  catch(PDOException $error)
                  {
                      $error->getMessage();
                  }
              ?>

          </div>
            
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