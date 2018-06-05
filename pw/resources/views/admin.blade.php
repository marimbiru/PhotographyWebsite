<!DOCTYPE html>
<html>

<head>

    <title>Muchiri Frames - Admin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--link to font repository - google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Quicksand" rel="stylesheet">

    <!--MAIN.CSS-->
    <link rel="stylesheet" type="text/css" href="/css/admin.css">

</head>

<body>

    <!--header-->
    <header class="admin-header">

        <div class="content">

            <h3 class="website-title">muchiri frames</h3>

            <a href="/login">
                <img id="more-button" class="more-button" src="/icons/logout-icon.svg" />
            </a>

            <!-- Tab links -->
            <div class="tab">
                <button id="defaultOpen" class="tablinks" onclick="openTab(event, 'upload-to-gallery')">Upload to Gallery</button>
                <button class="tablinks" onclick="openTab(event, 'gallery')">Gallery</button>
                <button class="tablinks" onclick="openTab(event, 'upload-to-blog')">Upload to Blog</button>
                <button class="tablinks" onclick="openTab(event, 'blog')">Blog</button>
                <button class="tablinks" onclick="openTab(event, 'contacts')">Contacts</button>
                <button class="tablinks" onclick="openTab(event, 'skills')">Skills</button>
                <button class="tablinks" onclick="openTab(event, 'quotes')">Quotes</button>
                <button class="tablinks" onclick="openTab(event, 'reference')">Reference</button>
            </div>

        </div>

    </header>


    <div class="content">


        <!--UPLOAD TO GALLERY-->

        <div id="upload-to-gallery" class="tabcontent">

            <form method="post" action="/admin/gallery" enctype="multipart/form-data">
            {{csrf_field()}}

                <div class="input-box">
                    <p>Image</p>
                    <input type="file" name="gallery-image">
                </div>

                <div class="input-box">
                    <p>To which gallery category?</p>                    
                    <Select name="skill-category">
                        @foreach($all_skills as $particular_skill)
                        <option value="{{ $particular_skill->type }}">{{ $particular_skill->type }}</option>
                        @endforeach
                    </Select><br>                    
                    <input class="input" type="text" placeholder="Create new category" name="new-skill-category">
                </div>

                <button class="submit-button" type="submit" name="id" value="content_form">POST</button>

            </form>

        </div>


        <!--GALLERY-->

        <div id="gallery" class="tabcontent">

            <table>

                <tr>
                    <th style="text-align: center;">Image</th>
                    <th colspan="3">info</th>
                </tr>

                @foreach($gallery as $gallery_item)
                <tr>
                    <td><img src="{{ asset('storage/'.$gallery_item->category.'/'.$gallery_item->text) }}"/></td>
                    <td class="info">
                        <h3 class="portfolio-title"></h3>
                        <p class="portfolio-description">{{ $gallery_item->text }}<br><span class="portfolio-date">{{ $gallery_item->created_at }}</span></p>
                        <div>
                            <a href="/admin/gallery/edit/{{ $gallery_item->id }}"><button class="submit-button">Edit</button></a>
                            <a href="/admin/gallery/delete/{{ $gallery_item->id }}"><button class="submit-button">Delete</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach

            </table>

        </div>



        <!--UPLOAD TO BLOG-->

        <div id="upload-to-blog" class="tabcontent">

            <form method="post" action="/admin" enctype="multipart/form-data">
            {{csrf_field()}}

                <div class="input-box">
                    <p>Blog image</p>
                    <input type="file" name="content_image">
                </div>

                <div class="input-box">
                    <p>Blog category</p>
                    <Select name="category">
                        <option value=/""></option>
                    </Select><br>
                    <input class="input" type="text" placeholder="Create new category" name="new_category">
                </div>

                <div class="input-box">
                    <p>Title</p>
                    <input class="input" type="text" name="title">
                </div>

                <div class="input-box">
                    <p>Body</p>
                    <textarea name="description"></textarea><br>
                </div>

                <button class="submit-button" type="submit" name="id" value="content_form">POST</button>

            </form>

        </div>



        <!-- BLOG -->

        <div id="blog" class="tabcontent">

            <table>

                <tr>
                    <th style="text-align: center;">Image</th>
                    <th colspan="3">info</th>
                </tr>

                <tr>
                    <td><img src="" /></td>
                    <td class="info">
                        <h3 class="portfolio-title"></h3>
                        <p class="portfolio-description"><br><span class="portfolio-date"></span></p>
                        <div>
                            <form method="#" action="#">
                                <button class="submit-button" type="submit">Edit</button>
                                <button class="submit-button" type="submit">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>

            </table>

        </div>



        <!--SKILLS-->

        <div id="skills" class="tabcontent">

            <form method="post" action="/admin/skills" enctype="multipart/form-data">
            {{csrf_field()}}

                <h3>OUR EXPERIENCE THUS FAR</h3> 
                <hr>               

                <div class="input-box">
                    <p>Corporate</p>
                    <input class="input" type="number" name="corporate" placeholder="{{ $corporate_skills['percentage'] }}">
                </div>

                <div class="input-box">
                    <p>Cinematography</p>
                    <input class="input" type="number" name="cinematography" placeholder="{{ $cinematography_skills['percentage'] }}">
                </div>

                <div class="input-box">
                    <p>Documentary</p>
                    <input class="input" type="number" name="documentary" placeholder="{{ $documentary_skills['percentage'] }}">
                </div>

                <div class="input-box">
                    <p>Wedding</p>
                    <input class="input" type="number" name="wedding" placeholder="{{ $wedding_skills['percentage'] }}">
                </div>

                <div class="input-box">
                    <p>Product</p>
                    <input class="input" type="number" name="product" placeholder="{{ $product_skills['percentage'] }}">
                </div>

                <button class="submit-button" type="submit" name="id" value="skills_form">POST</button>

            </form>

        </div>


        <!--QUOTES-->

        <div id="quotes" class="tabcontent">

            <h3>NEW QUOTE</h3>
            <hr>

            <form method="POST" action="/admin/quotes" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="input-box">
                    <p>Client name</p>
                    <input class="input" type="text" name="client-name">
                </div>

                <div class="input-box">
                    <p>Client position</p>
                    <input class="input" type="text" name="client-position">
                </div>
    
                <div class="input-box">
                    <p>Quote</p>
                    <textarea name="client-quote"></textarea><br>
                </div>
    
                <button class="submit-button" type="submit" name="id" value="quotes_form">POST</button>
                
            </form>

            <h3>ALL QUOTES</h3>
            <hr>

            <!--posted quotes-->
            @foreach($quotes as $quote)
            <div class="quote-box">
                <p class="quote">{{ $quote->quote }}</p>
                <div>
                    <p class="quoted-person">{{ $quote->name }}</p>
                    <p class="quoted-person">{{ $quote->position }}</p>
                    <a href="/admin/quotes/remove/{{ $quote->id }}"><p class="remove-quote">Remove</p></a>
                </div>
            </div>
            @endforeach

        </div>



        <!--REFERENCES-->

        <div id="reference" class="tabcontent">

            <h3>NEW REFERENCE</h3>
            <hr>

            <form method="POST" action="/admin/reference" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="input-box">
                        <p>Company logo</p>
                        <input type="file" name="company-logo">
                    </div>
    
                    <div class="input-box">
                        <p>Company name</p>
                        <input class="input" type="text" name="company-name">
                    </div>
    
                    <button class="submit-button" type="submit" name="id" value="reference_form">POST</button>
                
            </form>

            <h3>ALL REFERENCES</h3>
            <hr>

            <table>

                    <tr>
                        <th style="text-align: center;">Company Logo</th>
                        <th colspan="3">Company name</th>
                    </tr>
    
                    @foreach($references as $reference)
                    <tr>
                        <td><img src="{{asset('storage/reference/'.$reference->image_name)}}"/></td>
                        <td class="info">
                            <h3 class="portfolio-title">{{ $reference->company_name }}</h3>
                            <a href="/admin/reference/remove/{{ $reference->image_name }}"><button class="submit-button">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
    
                </table>

        </div>



        

    </div>
    <!--end of content container-->


    <!--BOTTOMSHEET-->
    <div id="bottomsheet" class="bottomsheet w3-animate-bottom">

        <div class="content">

            <div class="bottomsheet-item w3-animate-bottom">
                <img src="/icons/power.png" />
                <h4>Log out from admin account</h4>
            </div>

        </div>

    </div>




    <!--JAVASCRIPT-->

    <script>
        function openTab(evt, tabName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        
        
        //toggle bottomsheet
        var moreButton = document.getElementById("more-button");
        
        moreButton.onclick = function (){
            var bottomsheet = document.getElementById("bottomsheet");
            
            if (bottomsheet.style.display == "none"){
                bottomsheet.style.display = "block";
            }else{
                bottomsheet.style.display = "none";
            }            
        };
        
    </script>

</body>

</html>
