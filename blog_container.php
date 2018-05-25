<?php
    include 'DBConnector.php';

    $connection= new DBConnector;
    $con=$connection->conn;
     
    if (!isset($_GET['id'])) {
        header('location: blog.php');
    }
    else{
        $blog_id=$_GET['id'];
        $query="SELECT * FROM blog WHERE blog_id='$blog_id'";
        $result_blog=mysqli_query($con,$query);
        $blog_details=mysqli_fetch_assoc($result_blog);
    }

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--link to font repository - google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Quicksand" rel="stylesheet">

    <!--link to css file-->
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/blog_styles.css" />

    <!--link to jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <!-- link to material icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
	<!-- link to slick css-->    
    <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>

	<title>Blog-Blog Name</title>
</head>
<body>
	<header class="solid-header">
        <div class="content">
            <!-- website logo -->
            <img class="website-logo" src="assets/images/website-logo.png" />

            <!-- site links -->
            <div class="site-links-box">

                <div class="desktop-view">
                    <a href="index.html">
                        <p>Home</p>
                    </a>
                    <a href="#">
                        <p>Our products</p>
                    </a>
                    <a href="gallery.html">
                        <p>Gallery</p>
                    </a>
                    <a href="#">
                        <p>Blog</p>
                    </a>
                    <a href="#">
                        <p id="contact-header-link">Contact</p>
                    </a>
                </div>
                <!-- compact view menu icon -->
                <img class="menu-icon" onclick="openNav()" src="assets/icons/menu-icon.svg" />
            </div>
        </div>
    </header>
    <div class="blog-container-main">
    	<div class="blog-container-content">
    		<div class="blog-content-header" style="text-decoration-color: salmon;">
    			<h1>Blog Title:</h1>
                <p>Posted on:_______  by:_________  in category:_________</p>
    		</div>
    		<div class="blog-content-body">
    			<div class="blog-content-text">
    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus scelerisque mattis tortor posuere imperdiet. Nunc pretium sagittis est, quis finibus velit viverra at. Nullam auctor interdum blandit. Nam consequat metus quis ultricies vestibulum. Vivamus scelerisque elit eget aliquet ornare. Phasellus sed hendrerit quam. Morbi et nisi at tortor ultrices aliquam. Sed viverra neque vel commodo tempus. Donec in metus efficitur, pulvinar nulla sit amet, commodo elit. Etiam tempus dui vitae lacus placerat, et semper dolor tempus. Nulla facilisi. Nulla facilisis cursus sapien ac lacinia. In eget dictum neque. Curabitur tincidunt tellus et mi maximus aliquet.</p>
    			</div>
    			<div class="blog-content-carousel">
    				<div><img src="assets/images/harusi.jpg"></div>
    				<div><img src="assets/images/cinematography-image.jpg"></div>
    				<div><img src="assets/images/harusi.jpg"></div>
    				<div><img src="assets/images/wedding-image.jpg"></div>
    				<div><img src="assets/images/cinematography-image.jpg"></div>
    			</div>

                <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
                  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                  <script type="text/javascript" src="assets/slick/slick.min.js"></script>
                    <script type="text/javascript">
                        $(document).ready(function(){
                          $('.blog-content-carousel').slick({
                            arrows: true,
                            accesibility: true,
                            dots: true,
                            infinite: true,
                            speed: 500,
                            fade: true,
                            cssEase: 'linear',
                            variableWidth: true
                          });
                        });
                    </script>
    		</div>
    	</div>
    	<div class="blog-container-footer">
            <div class="blog-container-link">
        		<div class="blog-container-link-left">
        			<h3>Previous:</h3>
        			<p><a href="">Link to last Blog</a></p>
        		</div>
        		<div class="blog-container-link-right">
        			<h3>Next:</h3>
        			<p><a href="">Link to next Blog</a></p>
        		</div>
            </div>
    		<div class="blog-container-footer-category">
    			
    		</div>
    	</div>
    </div>
</body>
</html>