<!-- HEADER -->
    <header class="solid-header">

        <div class="content">

            <!-- website logo -->
            <img class="website-logo" src="/images/website-logo.png" />

            <!-- site links -->
            <div class="site-links-box">

                <div class="desktop-view">
                    <a href="/">
                        <p>Home</p>
                    </a>
                    <a href="/services">
                        <p>Our Services</p>
                    </a>
                    <a href="/gallery">
                        <p>Gallery</p>
                    </a>
                    <a href="/blog">
                        <p>Blog</p>
                    </a>
                    <a href="/contact">
                        <p id="contact-header-link">Contact</p>
                    </a>
                </div>

                <!-- compact view menu icon -->
                <img class="menu-icon" onclick="openNav()" src="/icons/menu-icon.svg" />

            </div>

        </div>

    </header>

    <!--home menu-->
    <div id="home-menu" class="home-menu">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/">Home</a>
        <a href="/services">Our Services</a>
        <a href="/gallery">Gallery</a>
        <a href="/blog">Blog</a>
        <a href="/contact">Contact</a>
    </div>


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

    </script>