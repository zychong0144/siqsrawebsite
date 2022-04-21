<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photo</title>
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
/*
        .tp1 {
            display: flex;
            height: 40px;
            width: 60%;
            color: rgba(0, 0, 0, 0.4);
            justify-content: center;
            margin: auto;
            justify-items: center;
            align-items: center;
            padding-top: 100px;
            padding-bottom: 100px;
        }
*/

        .photo {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-column-gap: 10px;
            grid-row-gap: 50px;
            padding-left: 50px;
        }

        #rg {            
            width: 280px;
            padding: 10px;
            width: 290px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        }

        .rgcontainer {
            width:  300px;
        }
/*
        .rgcontainer {
            padding: 10px;
            width: 290px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
            align-content: center;
            justify-content: center;
            height: auto;
        }
*/
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
            font-size: 25px;
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
    
    <div class="directory">
        <p><a href="https://fsktm.um.edu.my/" style="color: white; text-decoration: none;">FSKTM</a> > <a href="https://fsktm.um.edu.my/department-of-software-engineering" style="color: white; text-decoration: none;">Department of Software Engineering</a> > <a href="Home" style="color: white; text-decoration: none;">Malaysia Special Interest Group in Software Resilience, Quality & Automation</a> > Photo</p>
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

    <div class="photo">
        <div class="rgcontainer"><img id="rg" src="{{ asset('img/rg/Classification of Fault tolerance approaches.png') }}" alt="Classification of Fault tolerance approaches"><p>Classification of Fault tolerance approaches</p></div>
        <div class="rgcontainer"><img id="rg" src="{{ asset('img/rg/Classification of fault tolerance challenges.png') }}" alt="Classification of fault tolerance challenges"><p>Classification of fault tolerance challenges</p></div>
        <div class="rgcontainer"><img id="rg" src="{{ asset('img/rg/DroidbotX..png') }}" alt="DroidbotX."><p>DroidbotX</p></div>
        <div class="rgcontainer"><img id="rg" src="{{ asset('img/rg/FSI Driving Evergy Saving Model.png') }}" alt="FSI Driving Evergy Saving Model"><p>FSI Driving Evergy Saving Model</p></div>
        <div class="rgcontainer"><img id="rg" src="{{ asset('img/rg/Integrated model for evaluation of big data (BD) challenges and analytical methods in recommender systems (RSs).png') }}" alt="Integrated model for evaluation of big data (BD) challenges and analytical methods in recommender systems (RSs)"><p>Integrated model for evaluation of big data (BD) challenges and analytical methods in recommender systems (RSs)</p></div>
        <div class="rgcontainer"><img id="rg" src="{{ asset('img/rg/Knowledge map of the concept interaction in Deep learning and Smart manufacturing.png') }}" alt="Knowledge map of the concept interaction in Deep learning and Smart manufacturing"><p>Knowledge map of the concept interaction in Deep learning and Smart manufacturing</p></div>
        <div class="rgcontainer"><img id="rg" src="{{ asset('img/rg/Multi-RAT based adaptive QOS management in WBAN.png') }}" alt="Multi-RAT based adaptive QOS management in WBAN"><p>Multi-RAT based adaptive QOS management in WBAN</p></div>
        <div class="rgcontainer"><img id="rg" src="{{ asset('img/rg/Sensor Cloud Issues.png') }}" alt="Sensor Cloud Issues"><p>Sensor Cloud Issues</p></div>
        <div class="rgcontainer"><img id="rg" src="{{ asset('img/rg/The model transformation approach architecture used for model-based testing.png') }}" alt="The model transformation approach architecture used for model-based testing"><p>The model transformation approach architecture used for model-based testing</p></div>
        <div class="rgcontainer"><img id="rg" src="{{ asset('img/rg/Usability Evaluation.png') }}" alt="Usability Evaluation"><p>Usability Evaluation</p></div>
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

</body>
</html>