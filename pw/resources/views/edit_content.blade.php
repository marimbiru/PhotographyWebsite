<!DOCTYPE html>
<html>

<head>

    <title>Muchiri Frames - Admin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- main font plugin -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--website pattaya font plugin-->
    <link href="https://fonts.googleapis.com/css?family=Pattaya" rel="stylesheet">
    <!--W3 animations-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!--MAIN.CSS-->
    <link rel="stylesheet" type="text/css" href="/css/admin.css">

</head>

<body>
    
    <!--header-->
    <header class="admin-header w3-animate-top">

        <div class="content">
            
            <a href="/admin"><img class="return-button" src="/icons/back-arrow.svg" /></a>

            <h3 class="edit-image-title">{{ $gallery_item->text }}</h3>

        </div>

    </header>

    <div class="content">

        <!--register container-->
        <div class="edit-container">

            <form method="POST" action="/admin/gallery/edit/{{ $gallery_item->id }}" enctype="multipart/form-data">
            {{csrf_field()}}

                <img src="{{ asset('images/'.$gallery_item->category.'/'.$gallery_item->text) }}" />

                <div>
                    <p>New or change image</p>
                    <input type="file" name="image">
                </div>

                <div>
                    <p>Store in category</p>
                    <Select name="category">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </Select><br>
                    <input class="input" type="text" placeholder="Create new category" name="new-category">
                </div>
                <br>

                <button class="submit-button" type="submit">UPDATE</button>

            </form>

        </div>

    </div>




    <!--JAVASCRIPT-->

    <script>
    </script>

</body>

</html>
