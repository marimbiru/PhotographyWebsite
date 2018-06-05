<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Muchiri Frames - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--link to font repository - google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Quicksand" rel="stylesheet">

    <!--link to css file-->
    <link rel="stylesheet" type="text/css" media="screen" href="/css/main.css" />

    <!--link to jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

</head>

<body>

    <!--header template-->
    @include('templates.solidHeader')

    <!--compact gallery menu for small screens-->
    <select class="compact-gallery-menu" name="category">
        <option value="#" disabled id="first-select-option">Select category</option>
        <option value="#">Corporates</option>
        <option value="#">Cinematography</option>
        <option value="#">Documentary</option>
        <option value="#">Weddings and Engagement</option>
        <option value="#">Products and Brands</option>
    </select>


    <!--body content middle-->
    <div class="content">

        <!--our services title-->
        <h1 class="box-title">our services</h1>

        <!--box containing service boxes-->
        <div class="services">

            <!--documentaries service box-->
            <div class="service-box">
                <img src="/icons/documentary.svg" />
                <h3>documentaries</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa voluptate vitae, voluptatem ut, in saepe ad
                    beatae quas vero non accusantium neque doloremque dolor tempore voluptas iusto hic quo reprehenderit.</p>
            </div>

            <!--news reel service box-->
            <div class="service-box">
                <img src="/icons/news-reel.svg" />
                <h3>news reel</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa voluptate vitae, voluptatem ut, in saepe ad
                    beatae quas vero non accusantium neque doloremque dolor tempore voluptas iusto hic quo reprehenderit.</p>
            </div>

            <!--music videos service box-->
            <div class="service-box">
                <img src="/icons/music-video.svg" />
                <h3>music videos</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa voluptate vitae, voluptatem ut, in saepe ad
                    beatae quas vero non accusantium neque doloremque dolor tempore voluptas iusto hic quo reprehenderit.</p>
            </div>

            <!--video promotion service box-->
            <div class="service-box">
                <img src="/icons/video-promotion.svg" />
                <h3>video promotion</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa voluptate vitae, voluptatem ut, in saepe ad
                    beatae quas vero non accusantium neque doloremque dolor tempore voluptas iusto hic quo reprehenderit.</p>
            </div>

            <!--tv commercial service box-->
            <div class="service-box">
                <img src="/icons/tv-commercial.svg" />
                <h3>tv commercial</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa voluptate vitae, voluptatem ut, in saepe ad
                    beatae quas vero non accusantium neque doloremque dolor tempore voluptas iusto hic quo reprehenderit.</p>
            </div>

            <!--events coverage service box-->
            <div class="service-box">
                <img src="/icons/events-coverage.svg" />
                <h3>events coverage</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa voluptate vitae, voluptatem ut, in saepe ad
                    beatae quas vero non accusantium neque doloremque dolor tempore voluptas iusto hic quo reprehenderit.</p>
            </div>


        </div>
        <!--end of box containing service boxes-->

        <!---->
        <h1 class="box-title" style="margin-top: 2em;">what our customers say</h1>

        <div class="slideshow-container">

            @for($i = 0; $i < count($client_quotes); $i++)
            <div class="mySlides">            
                <q>{{ $client_quotes[$i]->quote }}</q>
                <p class="author">- {{ $client_quotes[$i]->name }}, {{ $client_quotes[$i]->position }}</p>            
            </div>
            @endfor

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>

        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

    </div>
    <!--end of body content middle-->
    

    <!--header template-->
    @include('templates.footer')


    <!--JAVASCRIPT-->


    <script>
        //'what our customers say' component
        //quotes slideshow
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

</body>

</html>