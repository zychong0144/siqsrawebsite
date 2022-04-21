<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Malaysia Special Interest Group in Software Resilience, Quality & Automation</title>
</head>
<body>
    <style>
        .directory {
            display: flex;
            flex-direction: row;
            background-color: #A179C8;
            padding:  0.2px;
            margin:  -9px;
            height: 30px;
            color: white;
            font-size: 10px;
            font-weight: bold;
            text-align: justify;
            font-family: monospace;
        }

        header {
            displaay: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }

        header .picture {
            flex: 30%;
            width: 200px;
            height: auto;
            margin-left: 40px;
        }

        header .title {
            font-size: 15px;
            margin-left: 320px;
            justify-content: center;
            margin-top: -120px;
        }

        .SelectionBar {
            display:  flex;
            justify-content: space-evenly;
            font-family: sans-serif;
        }

        #Home:hover {
            color: #A179C8;
            font-weight: bold;
            text-decoration: underline;
            text-decoration-thickness: 2px;
            text-underline-offset: 3px;
        }

        #Members:hover {
            color: #A179C8;
            font-weight: bold;
            text-decoration: underline;
            text-decoration-thickness: 2px;
            text-underline-offset: 3px;
        }

        #Publications:hover {
            color: #A179C8;
            font-weight: bold;
            text-decoration: underline;
            text-decoration-thickness: 2px;
            text-underline-offset: 3px;
        }

        #TeachingProfile:hover {
            color: #A179C8;
            font-weight: bold;
            text-decoration: underline;
            text-decoration-thickness: 2px;
            text-underline-offset: 3px;
        }

        #Photo:hover {
            color: #A179C8;
            font-weight: bold;
            text-decoration: underline;
            text-decoration-thickness: 2px;
            text-underline-offset: 3px;
        }

        #Activities:hover {
            color: #A179C8;
            font-weight: bold;
            text-decoration: underline;
            text-decoration-thickness: 2px;
            text-underline-offset: 3px;
        }

        #ResearchStudents:hover {
            color: #A179C8;
            font-weight: bold;
            text-decoration: underline;
            text-decoration-thickness: 2px;
            text-underline-offset: 3px;
        }

        .NewsBox {
            display: flex;
            height: 400px;
            background-color: grey;
            justify-content: center;
            justify-items: center;
            align-items: center;
        }

        /*image slider*/
        #slider {
          position: relative;
          height: 500px;
         
          overflow: hidden;
          box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
        }
        #slider ul {
          position: relative;
          list-style: none;
          height: 100%;
          width: 10000%;
          padding: 0;
          margin: 0;
          transition: all 750ms ease;
          left: 0;
        }
        #slider ul li {
          position: relative;
          height: 100%;
         
          float: left;
        }
        #slider ul li img{
          height: 500px;
        }
         
        #slider #prev, #slider #next {
          width: 50px;
          line-height: 50px;
          border-radius: 50%;
          font-size: 2rem;
          text-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
          text-align: center;
          color: white;
          text-decoration: none;
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          transition: all 150ms ease;
        }
        #slider #prev:hover, #slider #next:hover {
          background-color: rgba(0, 0, 0, 0.5);
          text-shadow: 0;
        }
        #slider #prev {
          left: 10px;
        }
        #slider #next {
          right: 10px;
        }
        
        #sliderphoto {
            width:  auto;
            object-fit:    cover;
        }

        .SearchBox {
            display: flex;
            height: 40px;
            width: 60%;
            color: rgba(0, 0, 0, 0.4);
            justify-content: center;
            margin: auto;
            justify-items: center;
            align-items: center;
            border-style: solid;
            border-color: black;
            border-width: medium;
            border-radius: 90px;
        }

        #searchicon {
            position: absolute;
            height: 22px;
            float: right;
            margin-left: 300px;

        }

        .content {
            height: auto;
            width: 80%;
            justify-content: center;
            margin: auto;
            font-size: 16px;
        }

        #line {
            width: 88%;
            justify-content: center;
            margin: auto;
        }


        li {
            padding-bottom: 5px;
        }

        h3 {
            font-size: 35px;
            font-weight: bold;
        }

        #description {
            font-family: 'Arvo', serif;
            color: rgba(0, 0, 0, 0.7);
        }

        footer {
            display: grid;
            background-color: #A179C8;
            height: 330px;
            grid-template-columns: 1fr 1fr 1fr;
            font-size: 13px;
        }

        h5 {
            color: white;
            font-size: 17px;

        }

        .footer1 {
            display: grid;
            grid-template-rows: 10% auto-fit;

        }

        #footer1-text {

            margin-left: 50px;
        }

        #footer1-img {
            position: relative;
            height: 180px;
            justify-self: center;
            margin-bottom: 50px;
        }


        .footer2 {
            color: #000F95;
            line-height: 15px;
        }

        .footer3 {
            color:  rgba(0, 0, 0, 0.6);
            line-height: 6px;
            font-size: 14px;
        }

        #icon {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            width: 200px;
        }
    </style>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital@1&family=Raleway&display=swap" rel="stylesheet">

    <div class="directory">
        <p><a href="https://fsktm.um.edu.my/" style="color: white; text-decoration: none;">FSKTM</a> > <a href="https://fsktm.um.edu.my/department-of-software-engineering" style="color: white; text-decoration: none;">Department of Software Engineering</a> > Malaysia Special Interest Group in Software Resilience, Quality & Automation > Home</p>
    </div>
    <br><br>

    <header>
    <div>
        <a href="https://fsktm.um.edu.my/"><img class="picture" src="{{ asset('img/fsktm logo.png') }}" alt="FSKTM Logo"></a>
    </div>
    <div class="title">
        <h1>Malaysia Special Interest Group in Software Resilience, Quality & Automation</h1></header>
    </div>
    </header>

    <br>

    <div class="SelectionBar">
        <a href="Home" style="color: black; text-decoration: none;"><p id="Home">Home</p></a>
        <a href="Members" style="color: black; text-decoration: none;"><p id="Members">Members</p></a>
        <a href="Publications" style="color: black; text-decoration: none;"><p id="Publications">Publications</p></a>
        <a href="TeachingProfile" style="color: black; text-decoration: none;"><p id="TeachingProfile">Teaching Profile</p></a>
        <a href="Photo" style="color: black; text-decoration: none;"><p id="Photo">Photo</p></a>
        <a href="Activities" style="color: black; text-decoration: none;"><p id="Activities">Activities</p></a>
        <a href="ResearchStudents" style="color: black; text-decoration: none;"><p id="ResearchStudents">Research Students</p></a>
    </div>

    <br>

    <div id="slider">
        <ul id="slideWrap"> 
            <li><img id="sliderphoto" src="{{ asset('img/fsktmimg03.jpg') }}" alt=""></li>
            <li><img id="sliderphoto" src="{{ asset('img/banner2.jpg') }}" alt=""></li>
            <!--<li><img id="sliderphoto" src="https://scontent-kut2-1.cdninstagram.com/v/t51.2885-15/275209528_297675792452337_5072514180557440729_n.webp?stp=dst-jpg_e35&_nc_ht=scontent-kut2-1.cdninstagram.com&_nc_cat=109&_nc_ohc=9pOlpD52erUAX9STEpi&edm=ALQROFkBAAAA&ccb=7-4&ig_cache_key=Mjc4NzAxNTYxMTYxNDMyODUzMw%3D%3D.2-ccb7-4&oh=00_AT8GltpCAC0LsIa5Ja8WlD4XT4cc4CJmHQ5hjfN-eHcVCw&oe=62426CDA&_nc_sid=30a2ef" alt=""></li>-->
        </ul>
        <a id="prev" href="#">&#8810;</a>
        <a id="next" href="#">&#8811;</a>
    </div>
<!--
    <br><br><br>

    <div class="SearchBox">
        <img id="searchicon" src="{{ asset('img/search.svg') }}">
    </div>
-->
    <br><br><br><br>

    
    <div class="content">
        <h3>Our Vision</h3>
        <p id="description" style="padding-left: 22px;">A leading global research group impacting the software</p>
    </div>
    <div id="line"><br><hr><br></div>
    <div class="content">
        <h3>Our Mission</h3>
        <ol id="description">
            <li>Leading the frontier knowledge on software quality and software resilience</li>
            <li>Reshaping the software automation towards democratization and humanization</li>
            <li>Providing state of the art solutions with socio-economics impacts </li>
        </ol>
    </div>
    <div id="line"><br><hr><br></div>
    <div class="content">
        <h3>Our Core Goals</h3>
        <ol id="description">
            <li>To build a research network worldwide through a collaboration with community, government, and industry</li>
            <li>To conduct high impact research in software quality, resilience and automation on IR 4.0 with Sustainable Development Goals</li>
            <li>To enrich the environment, community and policy-makers with information, knowledge and transferrable skills</li>
        </ol>
    </div>

    <br><br><br><br><br>

    <footer>
        <div class="footer1">
            <h5 id="footer1-text" style="color: white;">Part of</h5>
            <img id="footer1-img" src="{{ asset('img/white um logo.png') }}" alt="UM's Logo" id="umlogo">
        </div>
        <div class="footer2">
            <h5>Information for</h5>
            <p><a href="https://international.um.edu.my/visit-request-form" target="__blank" style="text-decoration: none; color: #000F95; font-size: 15px;">Visitors</a></p>
            <p><a href="https://www.um.edu.my/history" target="__blank" style="text-decoration: none; color: #000F95; font-size: 15px;">History</a></p>
            <p><a href="https://study.um.edu.my/" target="__blank" style="text-decoration: none; color: #000F95; font-size: 15px;">Students</a></p>
            <p><a href="https://umresearch.um.edu.my/?msclkid=06b8a950b28611ecad5f510f852c6271" target="__blank" style="text-decoration: none; color: #000F95; font-size: 15px;">Researchers</a></p>
            <p><a href="https://www.um.edu.my/vacancies" target="__blank" style="text-decoration: none; color: #000F95; font-size: 15px;">Careers</a></p>
            <p><a href="https://www.um.edu.my/office-directory-academic" target="__blank" style="text-decoration: none; color: #000F95; font-size: 15px;">Office Directory</a></p>
            <p><a href="https://www.um.edu.my/um-services" target="__blank" style="text-decoration: none; color: #000F95; font-size: 15px;">Services</a></p>
        </div>
        <div class="footer3">
            <h5>Contact Us</h5>
            <p>Phone: <span style="color: #000F95;">03-7967 6300</span></p>
            <br>
            <p>Universiti Malaya</p>
            <p>50603 Kuala Lumpur,</p>
            <p>Federal Territory of Kuala Lumpur</p>
            <br>
            <p style="color: #000F95;"><a href="https://www.google.com/maps?ll=3.120905,101.653841&z=16&t=m&hl=en-US&gl=SG&mapclient=embed&cid=2199423230241396289" target="__blank " style="text-decoration: none; color: #000F95;"><u>Get Directions</u></a></p>
            <br>

            <h5>Connect With Us</h5>
            <div id="icon">
                <a href="https://www.facebook.com/fsktm.um.edu.my" target="__blank "><img src="{{ asset('img/facebooklogo.svg') }}" alt="Facebook's logo" style="height: 25px;"></a>
                <a href="https://www.instagram.com/fsktm_um" target="__blank"><img src="{{ asset('img/instagramlogo.svg') }}" alt="Instagram's logo" style="height: 27px;"></a>
                <a href="https://twitter.com/fsktmum" target="__blank   "><img src="{{ asset('img/twitterlogo.svg') }}" alt="Twitter's logo" style="height: 27px; padding-left:   3px;"></a>
                <a href="https://www.youtube.com/channel/UChykDzXlo6wYxXvydPBntlg" target="__blank  "><img src="{{ asset('img/linkedinlogo.svg') }}" alt="Linkdedin's logo" style="height: 27px; padding-left:   7px;"></a>
            </div>
        </div>

    </footer>

    <script>
        var responsiveSlider = function() {

        var slider = document.getElementById("slider");
        var sliderWidth = slider.offsetWidth;
        var slideList = document.getElementById("slideWrap");
        var count = 1;
        var items = slideList.querySelectorAll("li").length;
        var prev = document.getElementById("prev");
        var next = document.getElementById("next");

        window.addEventListener('resize', function() {
          sliderWidth = slider.offsetWidth;
        });

        var prevSlide = function() {
          if(count > 1) {
            count = count - 2;
            slideList.style.left = "-" + count * sliderWidth + "px";
            count++;
          }
          else if(count = 1) {
            count = items - 1;
            slideList.style.left = "-" + count * sliderWidth + "px";
            count++;
          }
        };

        var nextSlide = function() {
          if(count < items) {
            slideList.style.left = "-" + count * sliderWidth + "px";
            count++;
          }
          else if(count = items) {
            slideList.style.left = "0px";
            count = 1;
          }
        };

        next.addEventListener("click", function() {
          nextSlide();
        });

        prev.addEventListener("click", function() {
          prevSlide();
        });

        setInterval(function() {
          nextSlide()
        }, 5000);

        };

        window.onload = function() {
            responsiveSlider();  
        }


  </script>

</body>
</html>


