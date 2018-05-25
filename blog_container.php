<?php
    include 'DBConnector.php';

    $connection= new DBConnector;
    $con=$connection->conn;

    $prev_title=null;
    $prev_address=null;
    $next_title=null;
    $next_address=null;
     
    if (!isset($_GET['id'])) {
        header('location: blog.php');
    }
    else{
        $blog_id=(int)$_GET['id'];
        $query="SELECT blog_id, title, body_text, cover_photo, blog.category_id, date_published, date_updated,blog_category.category_name FROM blog,blog_category WHERE blog_id=$blog_id AND blog.category_id=blog_category.category_id";
        $result_blog=mysqli_query($con,$query);
        $blog_details=mysqli_fetch_object($result_blog);

        $query_images="SELECT * FROM images WHERE blog_id=$blog_id";
        $blog_images=mysqli_query($con,$query_images);

        $follow=$blog_id+1;
        $prev=$blog_id-1;

        $blog_before=mysqli_fetch_object(mysqli_query($con,"SELECT * FROM blog WHERE blog_id=$prev"));
        $blog_after=mysqli_fetch_object(mysqli_query($con,"SELECT * FROM blog WHERE blog_id=$follow"));

        if($blog_before==NULL){
            $prev_title="No previous blog";
            $prev_address="blog_container.php?id=".$blog_id;
        }else{
            $prev_title=$blog_before->title;
            $prev_address="blog_container.php?id=".$blog_before->blog_id;
            
        }
        if($blog_after==NULL){
            $next_title="No next blog";
            $next_address="blog_container.php?id=".$blog_id;
        }else{
            $next_title=$blog_after->title;
            $next_address="blog_container.php?id=".$blog_after->blog_id;
        }
        
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
    		<div class="blog-content-header">
                <h1 style:"color: tomato;"><?php echo $blog_details->title;
                $detail="Posted on: ".$blog_details->date_published."  by: Admin in category:".$blog_details->category_name;?></h1>
                <p><?php echo $detail ?></p>
    		</div>
    		<div class="blog-content-body">
    			<div class="blog-content-text">
    				<p style="margin-bottom:60px"><?php echo $blog_details->body_text; ?></p>
    			</div>
    			<div class="blog-content-carousel">
                    <?php foreach ($blog_images as $image) { ?>
                        <div>
                            <h1></h1>
                        </div>
                        <div>
                            <h1></h1>
                        </div>  
                        <div>
                            <h1></h1>
                        </div>  
                        <div>
                            <h1></h1>
                        </div>  
                        <div>
                            <h1></h1>
                        </div>     
                    <?php } ?>
    			</div>
    		</div>
    	</div>
    	<div class="blog-container-footer">
            <div class="blog-container-link">
        		<div class="blog-container-link-left">
        			<h3 >Previous Blog:</h3>
        			<p><a href="<?php echo $prev_address; ?>"><?php echo $prev_title;?></a></p>
        		</div>
        		<div class="blog-container-link-right">
        			<h3>Next Blog:</h3>
        			<p><a href="<?php echo $next_address; ?>"><?php echo $next_title;?></a></p>
        		</div>
            </div>
    		<div class="blog-container-footer-category">
    			
    		</div>
    	</div>
    </div>
</body>
</html>