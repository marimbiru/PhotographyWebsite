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


    <!--body content-->
    <div class="content" style="height: 100%;">

        <!--gallery box-->
        <div class="gallery-box">

            <!--gallery menu-->
            <div class="gallery-menu">

                <p id="gallery-menu-title">Category</p>
                <a href="/gallery/corporate">
                    <p>Corporates</p>
                </a>
                <a href="/gallery/cinematography">
                    <p>Cinematography</p>
                </a>
                <a href="/gallery/documentary">
                    <p>Documentary</p>
                </a>
                <a href="/gallery/wedding">
                    <p>Weddings and Engagement</p>
                </a>
                <a href="/gallery/product">
                    <p>Products and Brands</p>
                </a>

            </div>

            <!--gallery-->
            <div class="gallery">

                <!--the modal-->
                <div id="modal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="image-on-modal">
                </div>

                @foreach($gallery_images as $gallery_image)
                    <img id="gallery-image-{{$gallery_image->id}}" class="gallery-image" src="{{ asset('storage/'.$gallery_image->category.'/'.$gallery_image->text) }}" />
                @endforeach
            </div>


        </div>

    </div>


    <!--header template-->
    @include('templates.footer')


    <!--JAVASCRIPT-->

    <!--link to jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <script>
        /* Set the width of the side navigation to full width */
        function openNav() {
            document.getElementById("home-menu").style.width = "100%";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("home-menu").style.width = "0";
        }

        //////////////////////

        // Get the modal
        var modal = document.getElementById('modal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementsByClassName('gallery-image');

        for(var i = 0; i < img.length; i++){
            var modalImg = document.getElementById("image-on-modal");
            img[i].addEventListener('click', function () {
                modal.style.display = "block";
                modalImg.src = this.src;
            });
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
        
        // When the user clicks on modal overlay, close the modal
        modal.onclick = function () {
            modal.style.display = "none";
        }

        ///////////////////////
    </script>

</body>

</html>