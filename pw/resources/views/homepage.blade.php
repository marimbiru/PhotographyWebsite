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
    @include('templates.gradientHeader')

    <!-- landing page -->
    <div id="top-page" class="page">

        <!--top bg image-->
        <div class="bg-image">
            <img class="landing-image" src="/images/landing-page-image.jpg" />
            <div class="shader"></div>
        </div>

        <div class="content">

            <div class="content-container">
                <h3 class="title">Best photography in Kenya</h3>
                <hr class="title-line">

                <p class="body-text">Muchiri Frames Kenya offers unique memory capturing and keeping services which are tied to cinematography,
                    photography, branding and printing services. Muchiri Frames Kenya comprises of highly qualified professionals
                    that uphold creativity and quality services.

                </p>

                <button class="btn-contact-trigger"> work with us</button>

                <div class="down-arrow-box">
                    <p>what we do</p>
                    <img class="down-arrow bounce" src="/icons/down-arrow.svg" />
                </div>

            </div>

        </div>
        <!--end of content-->


    </div>


    <!-- 'what we do' page -->
    <div class="page what-we-do-section">

        <div class="content">

            <h3 class="title">What We Do</h3>
            <hr class="title-line">

            <!-- cards box -->
            <div class="cards-box">

                <!-- corporate card -->
                <div class="card">

                    <!--bg image-->
                    <img src="/images/corporate-image.jpg" />

                    <div class="foreground-content">
                        <h3 class="title">Corporates</h3>
                        <a href="/gallery/corporate"><button class="btn-view">View Gallery</button></a>
                    </div>

                </div>


                <!-- cinematography card -->
                <div class="card">

                    <!--bg image-->
                    <img src="/images/cinematography-image.jpg" />

                    <div class="foreground-content">
                        <h3 class="title">Cinematography</h3>
                        <a href="/gallery/cinematography"><button class="btn-view">View Gallery</button></a>
                    </div>

                </div>


                <!-- doumentary card -->
                <div class="card">

                    <!--bg image-->
                    <img src="/images/documentary-image.jpg" />

                    <div class="foreground-content">
                        <h3 class="title">Documentaries</h3>
                        <a href="/gallery/documentary"><button class="btn-view">View Gallery</button></a>
                    </div>

                </div>


                <!-- weddings/engagement card -->
                <div class="card">

                    <!--bg image-->
                    <img src="/images/wedding-image.jpg" />

                    <div class="foreground-content">
                        <h3 class="title">Weddings and
                            <br> Engagement</h3>
                        <a href="/gallery/wedding"><button class="btn-view">View Gallery</button></a>
                    </div>

                </div>


                <!-- products/brands card -->
                <div class="card">

                    <!--bg image-->
                    <img src="/images/product-image.jpg" />

                    <div class="foreground-content">
                        <h3 class="title">Products and
                            <br> Brands</h3>
                        <a href="/gallery/product"><button class="btn-view">View Gallery</button></a>
                    </div>

                </div>


            </div>

        </div>
        <!--end of content-->

    </div>
    <!--end of 'what we do'-->


    <!-- skills page -->
    <div class="partial-page skill-section">


        <div class="content">

            <h3 class="title">Skills in Photo & Video</h3>
            <hr class="title-line">

            <p>Weddings and Engagements</p>
            <div class="skill-container">
                <div id="wedding" class="skills wedding">{{ $skills[0]->percentage  }}%</div>
            </div>

            <p>Corporate</p>
            <div class="skill-container">
                <div id="corporate" class="skills corporate">{{ $skills[1]->percentage  }}%</div>
            </div>

            <p>Products and Brands</p>
            <div class="skill-container">
                <div id="product" class="skills products">{{ $skills[2]->percentage  }}%</div>
            </div>

            <p>Documentary</p>
            <div class="skill-container">
                <div id="documentary" class="skills documentary">{{ $skills[3]->percentage  }}%</div>
            </div>

            <p>cinematography</p>
            <div class="skill-container">
                <div id="cinematography" class="skills cinematography">{{ $skills[4]->percentage  }}%</div>
            </div>

        </div>
        <!--end of content-->

    </div>
    <!--end of skills page-->


    <!-- 'our clients' page -->
    <div class="partial-page clients-page">

        <div class="content">

            <h3 class="title">Our Clients</h3>
            <hr class="title-line">

            <div class="clients-box">

                <!-- client logo image -->
                @foreach($client_logos as $client_logo)
                <img class="client-logo" src="{{ asset('storage/reference/'.$client_logo->image_name) }}" />
                @endforeach

            </div>

        </div>
        <!--end of content-->

    </div>


    <!-- 'work with us' page -->
    <div class="partial-page work-with-section">

        <!-- bg image -->
        <img src="/images/work-with-us-image.jpg" />

        <button class="btn-contact-trigger"> work with us</button>

    </div>


    <!--header template-->
    @include('templates.footer')


    <!--JAVASCRIPT-->

    <script>

        //assign values to skills view
        var wedding = document.getElementById('wedding');
        wedding.style.width = "{{ $skills[0]->percentage  }}";

        var corporate = document.getElementById('corporate');
        corporate.style.width = "{{ $skills[1]->percentage  }}";

        var product = document.getElementById('product');
        product.style.width = "{{ $skills[2]->percentage  }}";

        var documentary = document.getElementById('documentary');
        documentary.style.width = "{{ $skills[3]->percentage  }}";
        
        var cinematography = document.getElementById('cinematography');
        cinematography.style.width = "{{ $skills[4]->percentage  }}";

    </script>

</body>

</html>