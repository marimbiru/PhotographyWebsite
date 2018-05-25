<?php 
	include 'DBConnector.php';

	$connection= new DBConnector;
	$con=$connection->conn;
	$categ_id=null;
	$result_categ=null;

	if(isset($_GET['id'])){
		$categ_id=(int)$_GET['id'];
		$query="SELECT * FROM blog WHERE category_id=$categ_id";
		$result_categ=mysqli_query($con,"SELECT category_name FROM blog_cateory WHERE category_id=$categ_id");
	}
	else{
		$query="SELECT * FROM blog";
	}

	;
	$result_blogs=mysqli_query($con,$query);
	
	//$blogs_array=mysqli_fetch_assoc($result_blogs);

	
	$query2="SELECT blog_category.category_id,blog_category.category_name,COUNT(blog.blog_id),blog_category.category_photo FROM blog_category,blog WHERE blog_category.category_id=blog.category_id GROUP BY blog_category.category_id";
	$result_categories=mysqli_query($con,$query2); 
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Muchiri Frames - Blog</title>
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
                        <p>Our Services</p>
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


	<div class="blog-parent">
		<div class="blog-main">
			<h1 style="color: salmon; text-align: center">Blog</h1>
			<?php
				if($result_categ!=null){
					?><p>Filtered by : <?php echo $result_categ ?> category</p>
					<a href="blog.php">remove filter</a><?php
				}
			?>
			<?php foreach ($result_blogs as $blog) {
				$link="blog_container.php/?id=".$blog['blog_id'];
				$src="assets/images/".$blog['cover_photo'];?>
				<div class="blog-card" style="font-size:13px;">
					<div class="blog-card-image" style="background-image: url('<?php echo $src;?>');">
					</div>
				<div class="blog-card-desc" style="font-size:13px;padding-top:10px; ">
					<a style="color:white;text-decoration: none;" href="<?php echo($link) ?>"><h3 style="margin: 2px; padding: 0px;"><?php echo $blog['title'] ?></h3></a>
						<div class="blog-card-desc-text">
							<pre style="color:white">Published on:<?php echo $blog['date_published']."<br><br>Published by author<br><br>";
								// $sample=substr($blog['body_text'], 0, 20)."...";
								// echo $sample; ?>
							</pre>
							
						</div>
				</div>
				</div>
			<?php } ?>
		</div>

		<div class="aside">
			<div class="aside-title">
				<h3 style="color: lightsalmon">Categories</h3>
			</div>
			<div class="aside-content">
				<div class="aside-content-inner">
					<?php foreach ($result_categories as $categ) {
						$link="blog.php/?id=".$categ['category_id'];
						$src="assets/images/".$categ['category_photo'];?>
						<div class="mini-card">
								<img src="<?php echo $src; ?>">
							<div class="mini-card-back">
								<div class="mini-card-text">
									<a style="color:white;text-decoration: none;" href="<?php echo($link); ?>"><h2><?php echo $categ['category_name']; ?></h2></a>
								</div>
							</div>
						</div>
					<?php } ?>
					
					<div class="mini-card">
						<img src="assets/images/harusi.jpg">

						<div class="mini-card-back">
							<div class="mini-card-text">
								<h2>Uncategorised</h2>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</body>
</html>