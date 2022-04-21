<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Publications</title>
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
            color: blue;
            font-size: 13px;
            font-family: Raleway, sans-serif;
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

    <div class="directory">
        <p><a href="https://fsktm.um.edu.my/" style="color: white; text-decoration: none;">FSKTM</a> > <a href="https://fsktm.um.edu.my/department-of-software-engineering" style="color: white; text-decoration: none;">Department of Software Engineering</a> > <a href="Home" style="color: white; text-decoration: none;">Malaysia Special Interest Group in Software Resilience, Quality & Automation</a> > Publications</p>
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
        <button class="accordion">IR4.0</button>
        <div class="panel">
            <h3>2020</h3>
            <p>Ibrahim, F. I., Nasir, M. H. N. M., Ab Hamid, S. H., Ahmad, R. W., & Iqbal, J. (2020). FSI DRIVENERGY: Mitigating Smartphone Energy Consumption using Fuzzy Inference. Malaysian Journal of Computer Science, 33(3), 188-201. (WoS)</p>
            <p>Tahaei, H., Afifi, F., Asemi, A., Zaki, F., Anuar, N. B. (2020). The rise of traffic classification in IoT networks: A survey. Journal of Network and Computer Applications, 154, 20. </p>
            
            <br>
            <h3>2021</h3>
            <p>Haseeb-Ur-Rehman, R. M. A., Liaqat, M., Aman, A. H. M., Ab Hamid, S. H., Ali, R. L., Shuja, J., & Khan, M. K. (2021). Sensor Cloud Frameworks: State-of-the-Art, Taxonomy, and Research Issues. IEEE Sensors Journal, 21(20), 22347-22370.</p>
            <p>Asemi, A; Ko, A; Asemi, A (2021). Infoecology of the deep learning and smart manufacturing: thematic and concept interactions, LIBRARY HI TECH. (), .</p>
            
            <br>
            <h3>2022</h3>
            <p>Asemi, A., Asemi, A., Ko, A., Alibeigi, A. (2021). An integrated model for evaluation of big data challenges and analytical methods in recommender systems. Journal of Big Data, 9(1), 13</p>
        </div>

        <br>

        <button class="accordion">SDG</button>
        <div class="panel">
            <h3>2020</h3>
            <p>Rahman, Md & Peeri, Noah & Shrestha, Nistha & Zaki, Rafdzah & Haque, Ubydul & Ab Hamid, S.H. (2020). Defending against the Novel Coronavirus (COVID-19) Outbreak: How Can the Internet of Things (IoT) help to save the World?. Health Policy and Technology. 10.1016/j.hlpt.2020.04.005. (WoS)</p>
            <p>Khowaja, K., Salim, S. S., Asemi, A., Ghulamani, S., & Shah, A. (2020). A systematic review of modalities in computer-based interventions (CBIs) for language comprehension and decoding skills of children with autism spectrum disorder (ASD). Universal Access in the Information Society, 1-31. (WoS)</p>
            
            <br>
            <h3>2021</h3>
            <p>Bassan Ali Al-Qatab, Mumtaz Begum Mustafa, Siti Salwah Salim Salim, Asmiza Abdul Sani. 2021. Determining the adaptation data saturation of ASR systems for dysarthric speakers. International Journal Speech Technology.</p>
        </div>

        <br>

        <button class="accordion">Software Automation</button>
        <div class="panel">
          <h3>2018</h3>
          <p>Hazrina, S., Sharef, N. M., Ibrahim, H., Murad, M. A. A., & Noah, S. A. M. (2018). Linguistic-Based SPARQL Translation Model for Semantic Question Answering System. Advanced Science Letters, 24(2), 1375-1381. (WoS)</p>
            
            <br>
            <h3>2021</h3>
            <p>Razak, C. S. A., Ab Hamid, S. H., Meon, H., Subramaniam, H. A. P., & Anuar, N. B. (2021). TWO-STEP MODEL FOR EMOTION DETECTION ON TWITTER USERS: A COVID-19 CASE STUDY IN MALAYSIA. Malaysian Journal of Computer Science, 34(4), 374-388.</p>
            
            <br>
            <h3>2022</h3>
            <p>Cherukuru, P; Mustafa, MB; Subramaniam, H (2022). The Performance of Wearable Speech Enhancement System Under Noisy Environment: An Experimental Study, IEEE ACCESS. 10(), 5647-5659.</p>
            <p>Asemi, A., Asemi, A. A judgment-based model for usability evaluating of interactive systems using fuzzy Multi Factors Evaluation (MFE). Applied Soft Computing, 117, 108411.</p>
        </div>

        <br>

        <button class="accordion">Software Quality</button>
        <div class="panel">
            <h3>2017</h3>
            <p>Aneesa Saeed, Siti Hafizah Ab Hamid, and Asmiza Abdul Sani. 2017. Cost and Effectiveness of Search-Based Techniques for Model-Based Testing: An Empirical Analysis. International Journal of Software Engineering and Knowledge Engineering 27:04, 601-622 (WoS)</p>
            
            <br>
            <h3>2019</h3>
            <p>Zohreh Champiri, Adeleh Asemi, Siti Salwah Salim, Meta-analysis of evaluation methods and metrics used in context-aware scholarly recommender systems, January 2019, Knowledge and Information Systems, DOI: 10.1007/s10115-018-1324-5 (WoS)</p>
            <p>Asemi, A., Salim, S.S.B., Shahamiri, S.R. et al. Adaptive neuro-fuzzy inference system for evaluating dysarthric automatic speech recognition (ASR) systems: a case study on MVML-based ASR. Soft Comput 23, 3529 3544 (2019).</p>

            <br>
            <h3>2021</h3>
            <p>Yasin, H. N., Ab Hamid, S. H., & Yusof, R. J. R. (2021). DroidbotX: Test Case Generation Tool for Android Applications Using Q-Learning. Symmetry-Basel, 13(2), 30.</p>
            
            <br>
            <h3>2022</h3>
            <p>Saadoon, M., Hamid, S. H. A., Sofian, H., Altarturi, H. H., Azizul, Z. H., & Nasuha, N. (2022). Fault tolerance in big data storage and processing systems: A review on challenges and solutions. Ain Shams Engineering Journal.</p>
        </div>

        <br>

        <button class="accordion">Software Resilience</button>
        <div class="panel">
            <h3>2021</h3>
            <p>Saadoon, M., Ab Hamid, S. H., Sofian, H., Altarturi, H., Nasuha, N., Azizul, Z. H., . . . Asemi, A. (2021). Experimental Analysis in Hadoop MapReduce: A Closer Look at Fault Detection and Recovery Techniques. Sensors, 21(11), 18. </p>
            <!--
            <br>
            <h3>2022</h3>
            <p>Saadoon, M., Hamid, S. H. A., Sofian, H., Altarturi, H. H., Azizul, Z. H., & Nasuha, N. (2022). Fault tolerance in big data storage and processing systems: A review on challenges and solutions. Ain Shams Engineering Journal.</p>-->
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