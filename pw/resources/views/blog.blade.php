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
    <link rel="stylesheet" type="text/css" media="screen" href="/css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/blog_styles.css" />

    <!--link to jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <!-- link to material icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	@include('templates.solidHeader')

	<div class="blog-parent">
		<div class="blog-main">
            <h1 style="color: salmon; text-align: center">Blog</h1>
            
            @foreach ($blogs as $blog)
                <div class="blog-card">
                <div class="blog-card-image" style="background-image: url('{{asset('images/blog-coverphotos/')}}{{"/".$blog->cover_photo}}');">
                    </div>
                    <div class="blog-card-desc">
						<h3 style="margin: 2px; padding: 0px;"><a href="blog/{{$blog->id}}">{{$blog->title}}</a></h3>
                        <div class="blog-card-desc-text">
                            <p>Created on: {{$blog->created_at}}</p>
                            <p>{{str_limit($blog->body_text,$limit=100,' ...')}}</p>
                        </div>
                    </div>
			    </div>
            @endforeach
		</div>

		<div class="aside">
			<div class="aside-title">
				<h3 style="color: lightsalmon">Categories</h3>
			</div>
			<div class="aside-content">
				<div class="aside-content-inner">
					@foreach ($categories as $category)
	
					<div class="mini-card">
						<img src="{{asset('images/category-photo/')}}{{"/".$category->category_photo}}">

						<div class="mini-card-back">
							<div class="mini-card-text">
								<h2>{{$category->category_name}}</h2>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
    </div>
</body>
</html>