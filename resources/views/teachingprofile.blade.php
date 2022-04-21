<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teaching Profile</title>
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
            <h3>Courses Thought</h3>
            <p>Software Testing, Software Modelling</p>
            <br>
            <h3>Skills</h3>
            <p>Testing approaches and techniques. Unified Modeling Language</p>
            <br>
            <h3>Long Term Goals</h3>
            <p>Bring fun to fundamentals</p>
            <br>
            <h3>Achievement – certifications, workshop conducted, grant related to teaching & learning</h3>
            <p>Certificate of Award (Trainer for Trainer of Computational Thinking for Teachers), Certificate of Participant (Trainer for Trainer of Software Testing Foundation), Project Management </p>
            <br>
            <h3>Testimonial from former students</h3>
            <br>
            <h3>Teaching approaches – PBL, Computational thinking, strategies during pandemic, etc - explain</h3>
            <p>Computational Thinking, Case Based Learning</p>
            <br>
        </div>
            
        <br>

        <button class="accordion">Dr. Asmiza Abdul Sani</button>
        <div class="panel">
            <h3>Courses Thought</h3>
            <p>Algorithm Design & Analysis, Real Time Systems, Framework-based Web Development, Software Modelling, Fundamental of Programming, Software Architecture, Formal Specification.</p>
            <br>
            <h3>Skills</h3>
            <p>Software development, software design, formal software verification</p>
            <br>
            <h3>Long Term Goals</h3>
            <p>Establishing fundamental knowlage towards creating future-ready technology.</p>
            <br>
            <h3>Achievement – certifications, workshop conducted, grant related to teaching & learning</h3>
            <p>Silver Award. Pertandingan Amalan Inovasi Pengajaran dan Pembelajaran, Karnival Inovasi@Umt 2020: Cakna Inovasi Pemangkin Generasi Lestari, Seksyen Pembangunan Kompetensi Pusat Pembangunan Bakat dan Inovasi Universiti Malaysia Terengganu, 2020 (COMPETITION)</p>
            <p>Modules for Mobility programs - Drone programming and Framework-Based Web Development</p>
            <br>
            <h3>Testimonial from former students</h3>
            <br>
            <h3>Teaching approaches – PBL, Computational thinking, strategies during pandemic, etc - explain</h3>
            <p>Active Learning, Design Thinking, as well as, Simulation and remote access for teaching and learning real-time systems and drone programming.</p>
            <br>
            <h3>Picture</h3>
            <img id="footer1-img" src="{{ asset('img/white um logo.png') }}" alt="UM's Logo" id="umlogo">
            <img id="footer1-img" src="{{ asset('img/white um logo.png') }}" alt="UM's Logo" id="umlogo">
            <img id="footer1-img" src="{{ asset('img/white um logo.png') }}" alt="UM's Logo" id="umlogo">
        </div>

        <br>

        <button class="accordion">Dr. Hazrina Sofian</button>
        <div class="panel">
            <h3>Courses Thought</h3>
            <p>ALGORITHM DESIGN AND ANALYSIS, INFORMATION TECHNOLOGY PROJECT MANAGEMENT, SOFTWARE MODELLING, SYSTEMS MODELLING, SOFTWARE REQUIREMENTS ENGINEERING</p>
            <br>
            <h3>Skills</h3>
            <p>Requirements Engineering, Semantic Web, and Intelligence Computing.</p>
            <br>
            <h3>Long Term Goals</h3>
            
            <p><strong>Long term goal 1:</strong> Software engineering provides step by step to develop software. IR 4.0 requires AI software to be developed. There is a huge gap between software engineering and AI. With the knowledge that Ihave, and good collaboration with other lecturers in the faculty of computer science, Insya Allah, we can reduce this gap by:</p>
            <ul>
                <li>formulating software engineering process model for AI system, which means the step by step to develop an AI system.</li>
                <li>applying artificial intelligent techniques to automate some of the Requirements Engineering (RE) processes. For almost decades, researchers have been adding more and more processes to increase the accuracy on the requirements in RE processes.</li>
            </ul>


            <p><strong>Long term goal 2: </strong> Due to the lengthy processes in RE, most software development industries in Malaysia refuse to adopt the solutions by academician. My long-term goal is to make the software development industry to accept software engineering techniques. For a start, I have one student under Master of Software Engineering that focused on tailoring the requirements negotiation process model to meet software industry needs in Malaysia. </p>
"
            <br>
            <h3>Achievement – certifications, workshop conducted, grant related to teaching & learning</h3>
            <p>Certified Professional for Requirements Engineering (Cpre), Foundation Level, , Malaysian Software Testing Board, 2019 (EDUCATION)</p>
            <p>Gold Award, International Summit on Innovation and Design Exposition 2020 (InSIDE2020), 2020 (COMPETITION)</p>
            <p>Silver Award. Pertandingan Amalan Inovasi Pengajaran dan Pembelajaran, Karnival Inovasi@Umt 2020: Cakna Inovasi Pemangkin Generasi Lestari, Seksyen Pembangunan Kompetensi Pusat Pembangunan Bakat dan Inovasi Universiti Malaysia Terengganu, 2020 (COMPETITION)</p>
            <p>Modules for Mobility programs - Drone programming and Framework-Based Web Development</p>
            <br>
            <h3>Testimonial from former students</h3>
            <br>
            <h3>Teaching approaches – PBL, Computational thinking, strategies during pandemic, etc - explain</h3>
            <p>Active learning and design thinking.</p>
            <br>
            <h3>Picture</h3>
            <img id="footer1-img" src="{{ asset('img/white um logo.png') }}" alt="UM's Logo" id="umlogo">
            <img id="footer1-img" src="{{ asset('img/white um logo.png') }}" alt="UM's Logo" id="umlogo">
            <img id="footer1-img" src="{{ asset('img/white um logo.png') }}" alt="UM's Logo" id="umlogo">
        </div>

        <br>

        <button class="accordion">Dr. Adeleh Asemi Zavareh</button>
        <div class="panel">
            <h3>Courses Thought</h3>
            <p>Advanced Internet of Things, Intelligent Multi-Agents, Software Architecture, Software Modeling, Big Data Management, Big Data Analysis and Applications, Data Structure, Algorithm Analysis ans Design </p>
            <br>
            <h3>Skills</h3>
            <p>Implementation of evaluator, predictor, and controller to simulate human decision-making. ii) Data Analysis and Modeling through smart PLS, AMOS, and SPSS.</p>
            <br>
            <h3>Long Term Goals</h3>
            <p>Automation of software engineering through multiple intelligent agents</p>
            <br>
            <h3>Achievement – certifications, workshop conducted, grant related to teaching & learning</h3>
            <p>Workshops on simulation of human decision-making.</p>
            <p>Best paper Awarded. 2022 Second International Conference on Distributed Computing and High-Performance Computing (DCHPC). IEEE proceeding. 2nd-3rd March 2022, Qom, Iran. pp. 104-116, doi: 10.1109/DCHPC55044.2022.9732125</p>
            <br>
            <h3>Testimonial from former students</h3>
            <br>
            <h3>Teaching approaches – PBL, Computational thinking, strategies during pandemic, etc - explain</h3>
            <p>I am always concerned about what motivates adults to find time for their learning in their busy schedules? Mostly intrinsic motivators; self-esteem, self-confidence, desire for a better quality of life, curiosity, self-development, and recognition are only a few factors that motivate adult learners to learn. Needless to say, intrinsic incentives are much more powerful than extrinsic ones, and thus adult learners, more often than not, are more satisfied with the learning process, more focused, more persistent, and more eager to apply their knowledge more frequently and successfully than younger learners. On the other hand, children and teenagers are mostly motivated by extrinsic factors, such as getting good grades or other perks or avoiding the consequences of failure.
            <br>
            <p>It is clear that andragogy can be highly motivational, as adult learners are more goal-oriented than younger learners; this is why offering them meaningful learning experiences can make a real difference in achieving learning outcomes.</p>
            <br>
            <h3>Picture</h3>
            <img id="footer1-img" src="{{ asset('img/white um logo.png') }}" alt="UM's Logo" id="umlogo">
            <img id="footer1-img" src="{{ asset('img/white um logo.png') }}" alt="UM's Logo" id="umlogo">
            <img id="footer1-img" src="{{ asset('img/white um logo.png') }}" alt="UM's Logo" id="umlogo">
        </div>

        <br>

        <button class="accordion">Dr. Hema Subramaniam</button>
        <div class="panel">
            <h3>Courses Thought</h3>
            <ol>
                <li>Software project management</li>
                <li>Architecting software systems</li>
                <li>Research methodology</li>
                <li>Data analytics</li>
            </ol>
            <br>
            <h3>Skills</h3>
            <ul>
                <li>web based application development</li>
                <li>experimentation in software engineering</li>
                <li>Software Project Management</li>
                <li>Computing for Human Well-being</li>
            </ul>
            <br>
            <h3>Long Term Goals</h3>
            <p>Able to educate and advance in Human well-being via software engineering body fo knowledge</p>
            <br>
            <h3>Achievement – certifications, workshop conducted, grant related to teaching & learning</h3>
            <p>Certification Tester Foundation Level (CTFL) from Malaysia Software Testing Board (MSTB) since 2010</p>
            <p>Graduate Technologist from Malaysia Board of Technologist</p>
            <br>
            <h3>Testimonial from former students</h3>
            <br>
            <h3>Teaching approaches – PBL, Computational thinking, strategies during pandemic, etc - explain</h3>
            <p>Problem based learning</p>
            <br>
            <h3>Picture</h3>
            <img id="footer1-img" src="{{ asset('img/white um logo.png') }}" alt="UM's Logo" id="umlogo">
            <img id="footer1-img" src="{{ asset('img/white um logo.png') }}" alt="UM's Logo" id="umlogo">
            <img id="footer1-img" src="{{ asset('img/white um logo.png') }}" alt="UM's Logo" id="umlogo">
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