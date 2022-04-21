<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Members</title>
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

		.members {
			display: grid;
			grid-template-rows: repeat(5, 1fr);
			grid-gap: 30px;
			justify-items: center;
			align-items: center;
			margin: auto;

		}

		#photoofdr {
			height: 240px;
		}

		.textbox {
			display: flex;
			flex-direction: row;
			box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
			height: 350px;
			width: 75%;
			background-color: rgba(0, 0, 0, 0.05);
			align-items: center;
		}

		.photo {
			display: flex;
			flex: 30%;
			margin-left: 50px;
		}

		.caption {
			margin-left: 50px;
			width: 100%;
		}

		span {
			background-color: rgba(0, 0, 0, 0.2);
			margin-right: 10px;
			border-radius: 5%;
			font-size: 11px;
			font-family: Raleway, sans-serif;
			font-weight: bold;
			height: 15px;
			width: auto;
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

		#learnmore {
			background-color: #f19e12;
			border: none;
			height: 30px;
			width: 100px;
			border-radius: 50px;
			font-weight: bold;
			color: white;
			cursor: pointer;
			box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
		}

		#learnmore:hover {
			background-color: #f4b954;
			color: white;
		}

		.btn{
		  	border: none;
		  	margin: 5px;
		  	padding: 10px;
		  	font-family: "montserrat",sans-serif;
		  	text-transform: uppercase;
		  	border-radius: 6px;
		  	cursor: pointer;
		  	color: #fff;
		  	background-size: 200%;
		  	transition: 0.6s;
			box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
			background-image: linear-gradient(to left,#12CBC4,#0652DD,#12CBC4);
			box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
		}

		.btn:hover{
		  background-position: right;
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
	<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->

	<div class="directory">
		<p><a href="https://fsktm.um.edu.my/" style="color: white; text-decoration: none;">FSKTM</a> > <a href="https://fsktm.um.edu.my/department-of-software-engineering" style="color: white; text-decoration: none;">Department of Software Engineering</a> > <a href="Home" style="color: white; text-decoration: none;">Malaysia Special Interest Group in Software Resilience, Quality & Automation</a> > Members</p>
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

	<div class="members">
		<div class="textbox">
			<div class="photo">
				<img id="photoofdr" src="{{ asset('img/drsiti.jpg') }}" alt="Photo of Associate Prof. Dr. Siti Hafizah binti Ab Hamid">
			</div>

			<div class="caption">
				<div id="part1"><h4>Associate Prof. Dr. Siti Hafizah binti Ab Hamid</h4></div>

				<div id="part2"><span style="background-color: #f8ff94;">Software Testing</span><span style="background-color: #cf9cff;">Autonomous Computing</span><span style="background-color: #adff9c;">Energy Efficient</span></div>
				<div id="part3"><span>Mental Health</span><span>Dengue</span><span>Gamification</span></div>
				<br>
				<div id="part4">
					<a href="https://umexpert.um.edu.my/sitihafizah.html" style="color: black; text-decoration: none;" target="__blank"><button id="umexpert" class="btn btn-primary">UM Expert</button></a>
					<a href="https://publons.com/researcher/1289833/siti-hafizah-ab-hamid/" style="color: black; text-decoration: none;" target="__blank"><button id="publons" class="btn btn-primary">Publons</button></a>
					<a href="https://www.scopus.com/authid/detail.uri?authorId=17433861000" style="color: black; text-decoration: none;" target="__blank"><button id="scopus" class="btn btn-primary">Scopus Link</button></a>
					<a href="https://scholar.google.com.my/citations?user=g5_KRQwAAAAJ&hl=en" style="color: black; text-decoration: none;" target="__blank"><button id="googlescholar" class="btn btn-primary">Google Scholar</button></a>
					<a href="https://my.linkedin.com/in/siti-hafizah-ab-hamid-45067553" style="color: black; text-decoration: none;" target="__blank"><button id="linkedin" class="btn btn-primary">Linkedin</button></a>
				</div>
				<br>
				<a href="https://umexpert.um.edu.my/sitihafizah" style="color: white; text-decoration: none;" target="__blank"><button id="learnmore">Learn More</button></a>
			</div>
		</div>

		<div class="textbox">
			<div class="photo">
				<img id="photoofdr" src="{{ asset('img/drasmiza.jpg') }}" alt="Photo of Dr. Asmiza binti Abdul Sani">
			</div>

			<div class="caption">
				<div id="part1"><h4>Dr. Asmiza binti Abdul Sani</h4></div>

				<div id="part2"><span style="background-color: #ff9cc2;">Model Driven Engineering</span><span style="background-color: #ffc49c;">Formal Specification</span><span style="background-color: #adff9c;">Energy Efficient</span></div>
				<div id="part3"><span>Real Time System</span></div>
				<br>
				<div id="part4">
					<a href="https://umexpert.um.edu.my/asmiza.html" style="color: black; text-decoration: none;" target="__blank"><button id="umexpert" class="btn btn-primary">UM Expert</button></a>
					<a href="https://publons.com/researcher/2841112/asmiza-abdul-sani/" style="color: black; text-decoration: none;" target="__blank"><button id="publons" class="btn btn-primary">Publons</button></a>
					<a href="http://www.scopus.com/authid/detail.url?authorId=55008373900" style="color: black; text-decoration: none;" target="__blank"><button id="scopus" class="btn btn-primary">Scopus Link</button></a>
					<button id="googlescholar" class="btn btn-primary">Googlescholar</button>
					<a href="https://my.linkedin.com/in/asmiza-sani-660498140" style="color: black; text-decoration: none;" target="__blank"><button id="linkedin" class="btn btn-primary">Linkedin</button></a>
				</div>
				<br>
				<a href="https://umexpert.um.edu.my/asmiza" style="color: white; text-decoration: none;" target="__blank"><button id="learnmore">Learn More</button></a>
			</div>
		</div>

		<div class="textbox">
			<div class="photo">
				<img id="photoofdr" src="{{ asset('img/drhazrina.jpg') }}" alt="Photo of Dr. Hazrina binti Sofian">
			</div>

			<div class="caption">
				<div id="part1"><h4>Dr. Hazrina binti Sofian</h4></div>

				<div id="part2">
					<span style="background-color: #9cb5ff;">Requirement Engineering</span>
					<span style="background-color: #ff9ce0;">Autonomous Computing</span>
				</div>
				<div id="part3"><span>Natural Language Processing</span></div>
				<br>
				<div id="part4">
					<a href="https://umexpert.um.edu.my/hazrina.html" style="color: black; text-decoration: none;" target="__blank"><button id="umexpert" class="btn btn-primary">UM Expert</button></a>
					<a href="https://publons.com/researcher/4291527/hazrina-sofian/" style="color: black; text-decoration: none;" target="__blank"><button id="publons" class="btn btn-primary">Publons</button></a>
					<a href="https://www.scopus.com/authid/detail.uri?authorId=56211266300" style="color: black; text-decoration: none;" target="__blank"><button id="scopus" class="btn btn-primary">Scopus Link</button></a>
					<a href="https://scholar.google.com/citations?hl=en&user=u7Klki4AAAAJ" style="color: black; text-decoration: none;" target="__blank"><button id="googlescholar" class="btn btn-primary">Google Scholar</button></a>
					<a href="https://my.linkedin.com/in/adeleh-asemi-62599245" style="color: black; text-decoration: none;" target="__blank"><button id="linkedin" class="btn btn-primary">Linkedin</button></a>
				</div>
				<br>
				<a href="https://umexpert.um.edu.my/hazrina" style="color: white; text-decoration: none;" target="__blank"><button id="learnmore">Learn More</button></a>
			</div>
		</div>

		<div class="textbox">
			<div class="photo">
				<img id="photoofdr" src="{{ asset('img/dradeleh.jpg') }}" alt="Photo of Dr. Adeleh Asemi Zavareh">
			</div>

			<div class="caption">
				<div id="part1"><h4>Dr. Adeleh Asemi Zavareh</h4></div>

				<div id="part2">
					<span style="background-color: #ffc79c;">Software Evaluation</span>
					<span style="background-color: #9c9fff;">Multi Criteria Decision Making</span>
					<span style="background-color: #ff9c9c;">Intelligence Decision</span>
				</div>
				<div id="part3"><span>Economy</span></div>
				<br>
				<div id="part4">
					<a href="https://umexpert.um.edu.my/adeleh.html" style="color: black; text-decoration: none;" target="__blank"><button id="umexpert" class="btn btn-primary">UM Expert</button></a>
					<a href="https://publons.com/researcher/888502/adeleh-asemi-zavareh/" style="color: black; text-decoration: none;" target="__blank"><button id="publons" class="btn btn-primary">Publons</button></a>
					<a href="https://www.scopus.com/authid/detail.uri?authorId=57201481591" style="color: black; text-decoration: none;" target="__blank"><button id="scopus" class="btn btn-primary">Scopus Link</button></a>
					<a href="https://scholar.google.com/citations?hl=en&user=u7Klki4AAAAJ" style="color: black; text-decoration: none;" target="__blank"><button id="googlescholar" class="btn btn-primary">Google Scholar</button></a>
					<a href="https://my.linkedin.com/in/adeleh-asemi-62599245" style="color: black; text-decoration: none;" target="__blank"><button id="linkedin" class="btn btn-primary">Linkedin</button></a>
				</div>
				<br>
				<a href="https://umexpert.um.edu.my/adeleh" style="color: white; text-decoration: none;" target="__blank"><button id="learnmore">Learn More</button></a>
			</div>
		</div>

		<div class="textbox">
			<div class="photo">
				<img id="photoofdr" src="{{ asset('img/drhema.jpg') }}" alt="Photo of Dr. Hema A/p Subramaniam">
			</div>

			<div class="caption">
				<div id="part1"><h4>Dr. Hema A/p Subramaniam</h4></div>

				<div id="part2">
					<span style="background-color: #a89cff;">Software Reusability</span>
					<span style="background-color: #fc9990;">Aspected Oriented Requirement Engineering</span>
				</div>
				<div id="part3"><span>Software / Computing for Human Wellbeing Analysis</span></div>
				<br>
				<div id="part4">
					<a href="https://umexpert.um.edu.my/hema.html" style="color: black; text-decoration: none;" target="__blank"><button id="umexpert" class="btn btn-primary">UM Expert</button></a>
					<a href="https://publons.com/researcher/3430209/hema-subramaniam/" style="color: black; text-decoration: none;" target="__blank"><button id="publons" class="btn btn-primary">Publons</button></a>
					<a href="http://www.scopus.com/authid/detail.url?authorId=37082135800" style="color: black; text-decoration: none;" target="__blank"><button id="scopus" class="btn btn-primary">Scopus Link</button></a>
					<a href="https://scholar.google.com/citations?user=JFphXI0AAAAJ&hl=en" style="color: black; text-decoration: none;" target="__blank"><button id="googlescholar" class="btn btn-primary">Google Scholar</button></a>
					<a href="https://my.linkedin.com/in/hema-subramaniam-19ba8255" style="color: black; text-decoration: none;" target="__blank"><button id="linkedin" class="btn btn-primary">Linkedin</button></a>
				</div>
				<br>
				<a href="https://umexpert.um.edu.my/hema" style="color: white; text-decoration: none;" target="__blank"><button id="learnmore">Learn More</button></a>
			</div>
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
            <p>Phone: <span style="color: #000F95; background-color: #A179C8;">03-7967 6300</span></p>
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