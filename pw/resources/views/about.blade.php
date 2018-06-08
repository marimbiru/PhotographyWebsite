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

<body style="background: linear-gradient(110deg, #F7FAF6 90%, #A3A3A3 60%);">

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

    <br><br><br><br><br><br>

    <!--body content middle-->
    <div align='center' class="content page" >

        <h1 class="title">About us</h1>
        <hr class="title-line"><br><br>
        
        <p>Muchiri Frames Kenya is a leading service providing company established in the year 2014 and duly registered under Business Registration Number BN/2014/319030 pursuant to and in accordance with provisions of the Registration of Business in Kenya. We offer unique Memory Capturing and Keeping services which are tied to Cinematography, Photography, Branding and Printing services. Muchiri Frames Kenya comprise of highly qualified professionals that upholds creativity and quality services.</p>
        <br>
        <p><strong>Our Vision:</strong> To be A World Class Event Photography and Cinematography Service Provider</p>
        <p><strong>Our Mission:</strong> A leading moments and events Kenyan photographer and videographer</p>
        <p><strong>Core Values:</strong> Creativity, Customer Focused, Integrity, Professionalism</p>

    </div>
    <br><br><br>
    <div align='center' class="content page">

        <h1 class="title">Rich History</h1>
        <hr class="title-line"><br><br>
        
        <p>Muchiri Frames Kenya was established and registered in Kenya in the year 2014 as a photography and cinematography company.</p>
        <p>The company was born from the unmatched photography passion of Mr. Muchiri Johnson, a trained Public Relations and Journalism practitioner. Through practice and a lot of research and trainings, Mr. Muchiri developed adequate skills necessary in the industry. As wine gets better with Age and so has his deliverables. He has then impacted in the lives of so many in the society and with minimal marketing, his business is booming from referrals and return business. He is also keen to nurture potential photographers and videographers interested in the career field.</p>
        <p>The services offered are tailored to the dynamic customer needs and at the same time flexible enough to accommodate their various financial capacities. We cover small and big sized events all over Kenya and beyond.</p>


    </div>

    <br><br><br>
    <div align='center' class="content page">

        <h1 class="title">Why our Services?</h1>
        <hr class="title-line"><br><br>

        <p>Our company’s strength is creativity, unique feel and fun at work backed up by experience, reputation and high affiliation from other players in the industry. We offer our services under the auspices of trust to build long-term relations with our clients. Our Brand positioning is<br />
        <strong>'Services with a difference through creativity to ensure value for money and quality of the final product'.</strong></p>
        <p>Think about your best day or moment in your life. Yes! The moment when you poured tears of joy, that moment when your child opened its eyes, that moment when your parent met his grandchild, among many such memorable moments. If only it had been captured for future reference, those would be some of the most treasured photographs. There is so much effort that goes on planning, marketing, organizing and operating an event. More often, there is so<br />
        much joy when all this is successful recorded. It does not stop there, we walk with the customer by advising them to align our services to your event.</p>

    </div>
    <!--end of body content middle-->
    
    <br><br><br><br>
    <!--header template-->
    @include('templates.footer')

</body>

</html>
<style type="text/css">hr { background-color: red; height: 1px; border: 0; }</style>
