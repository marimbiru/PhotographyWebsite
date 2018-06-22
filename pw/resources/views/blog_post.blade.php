<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--link to font repository - google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Quicksand" rel="stylesheet">

    <!--link to css file-->
    <link rel="stylesheet" type="text/css" media="screen" href="/css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/blog_styles.css" />

    <!--link to jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <!-- link to material icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
	<!-- link to slick css-->    
    <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>

    <title>Blog-{{$blog->title}}</title>
</head>
<body>
	@include('templates/solidheader');
    <div class="blog-container-main">
    	<div class="blog-container-content">
            <div class="banner-image">
                <img class="content-middle" src="{{ asset('storage/blog-coverphotos/'.$blog->cover_photo) }}" alt="">
            </div>
    		<div class="blog-content-header" style="text-decoration-color: salmon;">
                <h1 class="blog-title">{{$blog->title}}</h1>
                <p>Posted on: {{$blog->created_at}} in category:<b> {{$category}}</b></p>
    		</div>
    		<div class="blog-content-body">
    			<div class="blog-content-text">
                    <p>{{$blog->body_text}}</p>
    			</div>
    		</div>
    	</div>
    	<div class="blog-container-footer">
            <div class="blog-container-link">
        		<div class="blog-container-link-left">
                    <h3>Previous:</h3>
                    <p><a href="/blog/{{$prev_id}}"> {{$prev_title}}</a></p>
        		</div>
        		<div class="blog-container-link-right">
        			<h3>Next:</h3>
                    <p><a href="/blog/{{$next_id}}"> {{$next_title}} </a></p>
        		</div>
            </div>
    		<div class="blog-container-footer-category">
    			
    		</div>
    	</div>
    </div>
</body>
</html>