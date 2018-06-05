<!DOCTYPE html>
<html>

<head>

    <title>Storyteller - Admin</title>

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

<body class="hey-page">

    <!--position content middle-->
    <div class="content-middle">

        <!--content box-->
        <div class="content-box">

            <!--login box-->
            <div id="login-box" class="w3-animate-bottom hey-box">

                <h3 class="hey-content-title">Log in, Mr Muchiri</h3>

                <form method="POST" action="/login" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="input-box login-input-box">
                        <p>Email</p>
                        <input class="input" type="email" name="login-email" required>
                    </div>

                    <div class="input-box login-input-box">
                        <p>Password</p>
                        <input class="input" type="password" name="login-password" required>
                    </div>

                    <button class="submit-button" type="submit" name="id" value="login-form">Continue..</button>

                </form>

                <!--<p id="to-new-account" class="toggle-boxes">Dont have an account?
                    <span>no problem</span>
                </p>-->

            </div>            

        </div>


    </div>
    <!--end of content middle-->


    <!--JAVASCRIPT-->


    <script>
    </script>

</body>

</html>