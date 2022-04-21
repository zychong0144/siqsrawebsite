<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Research Students</title>
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

        .publications {
            display: grid;
        }

        .accordion {
          background-color: #eee;
          color: #444;
          cursor: pointer;
          padding: 18px;
          width: 100%;
          border: none;
          text-align: left;
          outline: none;
          font-size: 15px;
          transition: 0.4s;
          width: 90%;
          margin: auto;
          padding-bottom: 30px;
        }

        .active, .accordion:hover {
          background-color: #ccc;
        }

        .accordion:after {
          content: '\002B';
          color: #777;
          font-weight: bold;
          float: right;
          margin-left: 5px;
        }

        .active:after {
          content: "\2212";
        }

        .panel {
          padding: 0 18px;
          background-color: white;
          max-height: 0;
          overflow: hidden;
          transition: max-height 0.2s ease-out;
          font-size: 15px;
          width: 80%;
          margin: auto;
        }

        .photo {
            display: flex;
            flex: 30%;
            margin-left: 50px;
        }

        .caption {
            margin-left: 70px;
            width: 100%;
        }

        span {
            font-size: 13px;
            font-family: Raleway, sans-serif;
        }

        #completed {
            color: #00ff2d;
        }

        #ongoing {
            color: #1100ff;
        }

        #master {
            background-color: orange;
            margin-right: 10px;
            border-radius: 5%;
            font-size: 12px;
            font-family: 'Merriweather Sans', sans-serif;
            height: 15px;
            width: auto;
            color: rgba(0,0,0,0.6);
        }

        #phd {
            background-color: pink;
            margin-right: 10px;
            border-radius: 5%;
            font-size: 12px;
            font-family: 'Merriweather Sans', sans-serif;
            height: 15px;
            width: auto;
            color: rgba(0,0,0,0.6);
        }

        #author {
            color: grey;
        }

        #part1 {
            font-size: 20px;
            margin-bottom: -5px;
        }

        #part2 {
            margin-bottom: 10px;
            color:  rgba(0, 0, 0, 0.6);
        }

        #part3 {
            color:  rgba(0, 0, 0, 0.6);
        }

        #part4 {
            font-size: 13px;
            font-family: 'Roboto Mono', monospace;
        }

        button {
            background-color: #040978;
            height: 30px;
            width: 100px;
            border-radius: 50px;
            font-weight: bold;
            color: white;
        }

        button:hover {
            background-color: #5a7ab9;
            color: white;
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
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto+Mono:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital@1&family=Merriweather+Sans:wght@300&family=Raleway&display=swap" rel="stylesheet">

    <div class="directory">
        <p><a href="https://fsktm.um.edu.my/" style="color: white; text-decoration: none;">FSKTM</a> > <a href="https://fsktm.um.edu.my/department-of-software-engineering" style="color: white; text-decoration: none;">Department of Software Engineering</a> > <a href="Home" style="color: white; text-decoration: none;">Malaysia Special Interest Group in Software Resilience, Quality & Automation</a> > Research Students</p>
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

    <div class="publications">
        <button class="accordion">Associate Prof. Dr. Siti Hafizah Ab Hamid</button>
        <div class="panel">
            <p>Farid Iqbal b Ibrahim &emsp;<span id="master">Master by Research</span>&emsp; - &emsp;Context Awareness and Mobile Energy &emsp;<span id="completed">[Completed]</span></p>
            <p>Ejaz Ahmed &emsp;<span id="phd">Doctor of Philosophy (PhD)</span>&emsp; - &emsp;Seamless Mobile Cloud Computing and Formal Method &emsp;<span id="completed">[Completed]</span></p>
            <p>Husam Yas&emsp;<span id="phd">Doctor of Philosophy (PhD)</span>&emsp; - &emsp;Formal Verification on Big Data &emsp;<span id="completed">[Completed]</span></p>
            <p>Nur Nasuha binti Mohd Daud&emsp;<span id="phd">Doctor of Philosophy (PhD)</span>&emsp; - &emsp;Link Prediction in Social Network Analysis &emsp;<span id="ongoing">[Ongoing]</span></p>
        </div>

        <br>

        <button class="accordion">Dr. Asmiza Abdul Sani</button>
        <div class="panel">
            <p>Danendiranraj Nadaraj&emsp;<span id="master">Master Mix Mode</span>&emsp; - &emsp;Model-Driven Test Case Generator for Framework-Based Development.  &emsp;<span id="ongoing">[Ongoung]</span></p>
            <p>Haithm Ahmed Nasher Malek&emsp;<span id="master">Master Mix Mode</span>&emsp; - &emsp;Energy Efficiency in Blockchain Using D2D Communication Task Offloading In Edge Computing  &emsp;<span id="ongoing">[Ongoing]</span></p>
            <p>Thien Ee Sien&emsp;<span id="master">Master Mix Mode</span>&emsp; - &emsp;Model-Driven Code Generator for Framework-Based Development.  &emsp;<span id="ongoing">[Ongoing]</span></p>
            <p>Aneesa Ali Ali Saeed &emsp;<span id="phd">Doctor of Philosophy (PhD)</span>&emsp; - &emsp;Test Case Generation from State Machine with OCL Constraints Using Search-Based Techniques &emsp;<span id="completed">[Completed]</span></p>
        </div>

        <br>

        <button class="accordion">Dr. Hazrina Sofian</button>
        <div class="panel">
            <p>AHMED AMIN HASSAN ALI HASSAN&emsp;<span id="master">Master Coursework</span>&emsp; - &emsp;A DENTAL OFFICE MANAGEMENT PROCESS MODEL TO MANAGE INVENTORY AND TREATMENT RECORDS  &emsp;<span id="completed">[Completed]</span></p>
            <p>ISHAK RIDHWAN BIN CHE MD NAWI &emsp;<span id="master">Master Coursework</span>&emsp; - &emsp;An E-Attendance Process Model to Manage Absenteeism in Public Primary Schools  &emsp;<span id="completed">[Completed]</span></p>
            <p>Theyven &emsp;<span id="master">Master Coursework</span>&emsp; - &emsp;AN ONLINE RESERVATION PROCESS MODEL FOR COVID-19 SWAB TEST AND VACCINATIONS TO EASE HEALTHCARE INDUSTRY  &emsp;<span id="completed">[Completed]</span></p>
            <p>YONG EE TOANG &emsp;<span id="master">Master Coursework</span>&emsp; - &emsp;Process Model for Food And Beverage Industry to Ease Congestion  &emsp;<span id="completed">[Completed]</span></p>
            <p>ZAINAB BINTI A.BAKAR &emsp;<span id="master">Master Coursework</span>&emsp; - &emsp;Mobile Self-Service Framework to Uplift Customer Experience for Telecommunication Industries in Malaysia  &emsp;<span id="completed">[Completed]</span></p>

            <p>Lokesh Jain &emsp;<span id="master">Master Mix Mode</span>&emsp; - &emsp;A Framework for Natural Language Requirements Extraction on Unified Modeling Language Diagrams &emsp;<span id="ongoing">[Ongoing]</span></p>
            <p>MOHD HAZIQ ASYRAFF BIN RAZALI &emsp;<span id="master">Master Mix Mode</span>&emsp; - &emsp;SOFTWARE USABILITY TESTING ANALYSIS ON WEB-BASED SYSTEMS USING COLLABORATIVE FILTERING TECHNIQUE &emsp;<span id="ongoing">[Ongoing]</span></p>
            <p>OWAIS QURESHI &emsp;<span id="master">Master Mix Mode</span>&emsp; - &emsp;Algorithm for the Deaf Sign Language codes in Al-Quran &emsp;<span id="ongoing">[Ongoing]</span></p>
            <p>SHAHIN HASAN &emsp;<span id="master">Master Mix Mode</span>&emsp; - &emsp;Recommender Tool for identifying innovative personnels for Software Engineering project teams. &emsp;<span id="ongoing">[Ongoing]</span></p>
            <p>SHAMSU ABDULLAHI &emsp;<span id="master">Master Mix Mode</span>&emsp; - &emsp;Recommender Tool for identifying innovative personnels for Software Engineering project teams. &emsp;<span id="completed">[Completed]</span></p>
            <p>Usama Aslam &emsp;<span id="master">Master Mix Mode</span>&emsp; - &emsp;Determining the Safety Non-Functional Requirements through Requirements Engineering Artefacts Analysis &emsp;<span id="ongoing">[Ongoing]</span></p>
            <p>Yao Fung See &emsp;<span id="master">Master Mix Mode</span>&emsp; - &emsp;AN AUTOMATED MODEL PROCESS FOR DEVELOPING DEPENDABLE COMPONENT-BASED SOFTWARE &emsp;<span id="ongoing">[Ongoing]</span></p>

            <p>ABDUL AZIM BIN ABDUL SALAM &emsp;<span id="phd">Doctor of Philosophy (PhD)</span>&emsp; - &emsp;Prosthodontics s/w  &emsp;<span id="ongoing">[Ongoing]</span></p>
            <p>Aly Abdelkarim &emsp;<span id="phd">Doctor of Philosophy (PhD)</span>&emsp; - &emsp;Fault Tolerance  &emsp;<span id="ongoing">[Ongoing]</span></p>
            <p>Fouzia Alajeli Farj Abuwdn &emsp;<span id="phd">Doctor of Philosophy (PhD)</span>&emsp; - &emsp;Requirements Engineering  &emsp;<span id="ongoing">[Ongoing]</span></p>
            <p>Muntadher Saadoon Wadi&emsp;<span id="phd">Doctor of Philosophy (PhD)</span>&emsp; - &emsp;Fault Tolerance in Big Data  &emsp;<span id="ongoing">[Ongoing]</span></p>
        </div>

        <br>

        <button class="accordion">Dr. Adeleh Asemi Zavareh</button>
        <div class="panel">
            <p>Vahid Kishizadeh&emsp;- &emsp;Study and measurement of the information intelligence in confronting of pandemic cris: a case study COVID-19</p>
        </div>

        <br>

        <button class="accordion">Dr. Hema Subramaniam</button>
        <div class="panel">
            <p>Aishwarya Sundaram  &emsp;<span id="master">Master Mix Mode</span>&emsp; - &emsp;A Novel Technique to Prioritize Test Cases to Enhance code Maintainability&emsp;<span id="ongoing">[Ongoing]</span></p>
            <p>Jayarubini Samuel&emsp;<span id="master">Master Mix Mode</span>&emsp; - &emsp;Reusability Estimation Technique of Mobile Based Application using Architectural Components&emsp;<span id="ongoing">[Ongoing]</span></p>
        </div>
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
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        } 
      });
    }
</script>


</body>
</html>