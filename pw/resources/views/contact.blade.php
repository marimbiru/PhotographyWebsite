<!DOCTYPE html>
<html>
<?php $notification=null; ?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Muchiri Frames - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--link to font repository - google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Quicksand" rel="stylesheet">

    <!--link to css file-->
    <link rel="stylesheet" type="text/css" media="screen" href="/css/main.css" />
    <link rel="stylesheet" type="text/css" href="/css/admin.css">

    <!--link to jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

</head>

<body style="background: linear-gradient(10deg, #F7FAF6 calc(50% - 1px), #B9B9B9);">
    <br><br><br><br><br><br><br>
    <!--header template-->
    @include('templates.solidHeader')

    <div class="content-middle">

        <!--content box-->
        <div class="content-box" style="width: 700px;">

            <!--login box-->
            <div align="center" id="login-box" class="w3-animate-bottom hey-box">

                <h1>Send us a message</h1>
                <hr class="title-line"><br>
                    @if (session('status'))
                    <div class="submit-button">
                        {{ session('status') }}
                    </div><br>
                    @endif

                <form method="POST" action="/contact/message" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="input-box login-input-box" style="display: inline-flex;">
                        <p style="width: 20%;">Name</p>
                        <input style="width: 80%;float: right;" class="input" type="text" name="name" required>
                    </div>

                    <div class="input-box login-input-box" style="display: inline-flex;">
                        <p style="width: 20%;">Email</p>
                        <input style="width: 80%;float: right;" class="input" type="email" name="email" required>
                    </div>

                    <div class="input-box login-input-box" style="display: inline-flex;">
                        <p style="width: 20%;">Message</p>
                        <textarea style="width: 80%;float: right;" name="message" cols="100"></textarea>
                    </div>

                    <button class="submit-button" type="submit" name="id" value="login-form"><p><strong>Submit Form</strong></p></button>

                </form>

            </div>

        </div>
        <br><br><br>

    </div>
    <!--footer template-->
    @include('templates.footer')
</body>

</html>