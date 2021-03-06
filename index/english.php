<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Clayton Mafra, estágio profissional, engenharia da computação">
    <meta name="description" content="Curriculum virtual, exemplificando minhas competências, experiências e informações adicionais.">
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" id="ppstyle" type="text/css" href="style.css">
    <link rel='stylesheet' href='./css/animate.css' />
    <link rel='stylesheet' href='./css/font-awesome.min.css'/>
    <link rel='stylesheet' href='./css/ionicons.min.css'/>
    <link rel='stylesheet' href='./css/linecons.min.css'/>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="./js/jquery-2.1.0.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/blocs.js"></script>
    <script src='./js/jqBootstrapValidation.js'></script>
    <script src='./js/formHandler.js'></script>
    <title>Clayton Mafra - Computer Engineering Student</title>
</head>
<body>
<!-- Conteúdo da Página -->
<div class="page-container">
    
<!-- Bloco de Navegação -->
<div class="bloc bgc-mountain-meadow d-bloc sticky-nav b-parallax" id="nav-bloc">
	<div class="container bloc-sm">
		<nav class="navbar nav-center row">
			<div class="navbar-header">
				<a class="navbar-brand" href="english.php"><img src="img/logo.png" alt="logo" width="60" height="60" />Clayton Mafra</a>
				<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-1">
				<ul class="site-navigation nav navbar-nav">
					<li>
						<a class="ltc-white" id="pl-undefined" onclick="scrollToTarget('1')">Home</a>
					</li>
					<li>
						<a class="ltc-white" id="pl-undefined" onclick="scrollToTarget('#sobre')">About Me</a>
					</li>
					<li>
						<a class="ltc-white" id="pl-undefined" onclick="scrollToTarget('#competencias')">Skills</a>
					</li>
					<li>
						<a class="ltc-white" id="pl-undefined" onclick="scrollToTarget('#projetos')">Projects</a>
					</li>
					<li>
						<a class="ltc-white" id="pl-undefined" onclick="scrollToTarget('#experiencia')">Experience</a>
					</li>
					<li>
						<a class="ltc-white" id="pl-undefined" onclick="scrollToTarget('#contato')">Contact</a>
					</li>
					<li>
						<div class="dropdown">
							<a id="pl-253" class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Language<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="#" class="a-btn a-block ltc-white">English</a>
								</li>
								<li>
									<a href="index.php" class="a-btn a-block ltc-white">Português</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>
<!-- FIM Bloco de Navegação -->

<!-- HERO -->
<div class="bloc bgc-onyx bg-path d-bloc b-parallax" id="hero">
	<div class="container bloc-xl">
		<div class="row">
			<div class="col-sm-12">
				<img src="img/LogoSombra.png" class="center-block animated animDelay04 zoomInDown" width="200" height="250" />
				<h1 class="mg-md text-center tc-mountain-meadow lg-shadow animated bounce">
					Clayton Mafra
				</h1>
				<h3 class="mg-md text-center glow-t tc-banana-yellow">
					Computer Engineer
				</h3>
				<h3 class="mg-md text-center glow-t tc-banana-yellow">
					Where planning and creativity go together
				</h3>
			</div>
		</div>
	</div>
</div>
<!-- FIM HERO -->

<!-- aquivamosnos -->
<div class="bloc bgc-mountain-meadow bg-city d-bloc b-parallax" id="aquivamosnos">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="mg-md text-center">
					Here we go ...
				</h2>
			</div>
		</div>
	</div>
</div>
<!-- FIM aquivamosnos -->

<!-- sobre -->
<div class="bloc bgc-onyx d-bloc tc-white" id="sobre">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="mg-lg text-center tc-white">
					About Clayton
				</h2>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-sm-6">
				<div id="slider-clayton" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-clayton" data-slide-to="0" class="active">
						</li>
						<li data-target="#slider-clayton" data-slide-to="1">
						</li>
						<li data-target="#slider-clayton" data-slide-to="2">
						</li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="img/claytinho.jpg" />
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item">
							<img src="img/clayton1.png" />
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item">
							<img src="img/clayton2.png" />
							<div class="carousel-caption">
							</div>
						</div>
					</div><a class="left carousel-control" href="#slider-clayton" role="button" data-slide="prev"><span class="fa fa-chevron-left"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#slider-clayton" role="button" data-slide="next"><span class="fa fa-chevron-right"></span><span class="sr-only">Next</span></a>
				</div>
			</div>
			<div class="col-sm-6">
				<h1 class="mg-lg text-center animDelay02 rubberBand tc-white animated">
					Clayton Mafra
				</h1>
				<h3 class="mg-sm text-center tc-white">
					Following and always believing in your dreams
				</h3>
				<blockquote>
					<p class="text-center ">
						<span>Currently living and working in São Paulo, is a big fan of football and enjoy your free time always seeking to improve their knowledge.<br /><br />Coming from a humble family, always tries to be diplomatic and kind to others. With a guiding feature¹, try to pass their knowledge to their colleagues at work and studies.</span>
					</p>
				</blockquote>
				<p>
					<span>¹ According Profile Vagas <a href="http://www.e-talent.com.br/VagasETalent/B2C_V3/RelatorioParcial.aspx?IP=CK200n22BCvHfS9Dwxekgw%3d%3d&amp;IC=NXjZqBUz00EB8PW9Fs37nw%3d%3d&amp;cn=2" class="a-btn l">E-Talent</a></span>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- FIM sobre -->

<!-- construindo -->
<div class="bloc b-parallax bgc-black bg-map d-bloc" id="construindo">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="mg-md text-center tc-white">
					Building a future and becoming a great person!
				</h2>
			</div>
		</div>
	</div>
</div>
<!-- FIM construindo -->

<!-- vidaacademica -->
<div class="bloc bgc-mountain-meadow d-bloc tc-white" id="vidaacademica">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center mg-sm tc-white">
					Academic Life
				</h2>
			</div>
		</div>
		<div class="row voffset-lg">
			<div class="col-sm-3">
				<img class="img-rd-lg center-block" src="img/389135-970x600-1.jpeg" width="270" height="189" alt="Paróquia Nossa Senhora da Paz" />
				<h3 class="mg-md text-center tc-white">
					<span class="ion ion-happy"></span> Paróquia Nossa Senhora da Paz (Parish of Our Lady of Peace)
				</h3>
				<p class="text-center ">
					The beginning of everything! It was here that I began my studies, this little school in primary funds of this church. There I learned to read, write and develop critical thinking.
				</p>
			</div>
			<div class="col-sm-3">
				<img class="img-rd-lg center-block" src="img/saopaulo.jpg" width="270" height="189" alt="Escola Estadual São Paulo" />
				<h3 class="mg-md text-center tc-white">
					<span class="fa fa-child"></span> E. E. de São Paulo (State School of Sao Paulo)
				</h3>
				<p class="text-center ">
                    Here, where once a beautiful and prestigious educational institution, was where I did my primary and secondary education, spending most of my life. There I was fortunate, or rather the merit of being in the "CDT group (Talent Development Centre), a group which brought together students with the best school grades.
				</p>
			</div>
			<div class="col-sm-3">
				<img class="img-rd-lg center-block" src="img/logoFIAP.jpg" width="270" height="189" alt="FIAP" />
				<h3 class="mg-md text-center tc-white">
					<span class="fa fa-gears"></span> FIAP
				</h3>
				<p class="text-center ">
					It was the FIAP I conducted my Computer Technician course, another big step in my life and another great learning step.
				</p>
			</div>
			<div class="col-sm-3">
				<img class="img-rd-lg center-block" src="img/usjt.png" width="270" height="189" alt="Universidade São Judas" />
				<h3 class="mg-md text-center tc-white">
					<span class="fa fa-graduation-cap"></span> São Judas Tadeu University - "USJT"
				</h3>
				<p class="text-center ">
					In 2012 I began my undergraduate 5 years in Computer Engineering. A challenge that I will overcome and that is about to be completed.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- FIM vidaacademica -->

<!-- parafazer -->
<div class="bloc b-parallax bg-world bgc-black d-bloc" id="parafazer">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="mg-md text-center">
					To do you need to know!
				</h2>
			</div>
		</div>
	</div>
</div>
<!-- FIM parafazer -->

<!-- competencias -->
<div class="bloc feature-list bgc-onyx d-bloc tc-white" id="competencias">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center mg-md">
					Skills and Abilities
				</h2>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-sm-6">
				<div class="col-sm-9">
					<h3 class="mg-md text-center tc-white">
						HTML 5
					</h3>
					<p class="text-center ">
						Knowledge of HTML 5, put in place mainly during the technical course.
					</p>
				</div>
				<div class="col-sm-3">
					<div class="text-center">
						<span class="fa fa-html5 icon-round icon-md icon-white"></span>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-sm-3">
					<div class="text-center">
						<span class="ion ion-social-css3 icon-round icon-md icon-white"></span>
					</div>
				</div>
				<div class="col-sm-9">
					<h3 class="mg-md text-center tc-white">
						CSS 3
					</h3>
					<p class="text-center ">
						Knowledge of CSS 3, put in place mainly during the technical course.
					</p>
				</div>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-sm-6">
				<div class="col-sm-9">
					<h3 class="mg-md text-center tc-white">
						Javascript
					</h3>
					<p class="text-center ">
						Knowledge of Javascript, put in place mainly during the technical course.
					</p>
				</div>
				<div class="col-sm-3">
					<div class="text-center">
						<span class="ion ion-social-javascript icon-round icon-md icon-white"></span>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-sm-3">
					<div class="text-center">
						<span class="ion ion-social-python icon-round icon-md icon-white"></span>
					</div>
				</div>
				<div class="col-sm-9">
					<h3 class="mg-md text-center tc-white">
						Python
					</h3>
					<p class="text-center ">
						Python knowledge acquired in course conducted online by Rice University and University of Michigan.
					</p>
				</div>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-sm-6">
				<div class="col-sm-9">
					<h3 class="mg-md text-center tc-white">
						Database
					</h3>
					<p class="text-center ">
						Knowledge of SQL. Using DBMS MySQL Workbench and PHPMyAdmin through XAMPP.
					</p>
				</div>
				<div class="col-sm-3">
					<div class="text-center">
						<span class="fa fa-database icon-round icon-md icon-white"></span>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-sm-3">
					<div class="text-center">
						<span class="fa fa-language icon-round icon-md icon-white"></span>
					</div>
				</div>
				<div class="col-sm-9">
					<h3 class="mg-md text-center tc-white">
						Among others
					</h3>
					<p class="text-center ">
						A list of other skills and abilities you can find in my profile on LinkedIn.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- FIM competencias -->

<!-- projetos -->
<div class="bloc bgc-mountain-meadow d-bloc tc-white" id="projetos">
	<div class="container bloc-md">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center mg-sm tc-white">
					Projects and Activities<br />
				</h2>
				<div id="slideprojetos" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slideprojetos" data-slide-to="0">
						</li>
						<li data-target="#slideprojetos" data-slide-to="1">
						</li>
						<li data-target="#slideprojetos" data-slide-to="2">
						</li>
						<li data-target="#slideprojetos" data-slide-to="3">
						</li>
						<li data-target="#slideprojetos" data-slide-to="4">
						</li>
						<li data-target="#slideprojetos" data-slide-to="5" class="active">
						</li>
					</ol>
					<div class="carousel-inner">
						<div class="item">
							<img src="img/sisalarme.png" />
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item">
							<img src="img/signalgenerator.png" />
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item">
							<img src="img/pong.png" />
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item">
							<img src="img/fpgauart.png" />
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item active left">
							<img src="img/cubodeled.png" />
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item next left">
							<img src="img/escgrupo.png" />
							<div class="carousel-caption">
							</div>
						</div>
					</div><a class="left carousel-control" href="#slideprojetos" role="button" data-slide="prev"><span class="fa fa-chevron-left"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#slideprojetos" role="button" data-slide="next"><span class="fa fa-chevron-right"></span><span class="sr-only">Next</span></a>
				</div>
				<h3 class="mg-md text-center tc-white">
					To work
				</h3>
				<p>
                    These were some of my projects between college and technical course. In college, I performed together with some classmates, a project: <br /> <br /> - Alarm System Simulation:. <br /> System using an Intel 8051 microcontroller and made programming in Assembly <br /> <br /> - Signal Generator: <br /> Electronic circuit for generating and reproducing waveforms on an oscilloscope using components such as EPROM, D / A converter, operational amplifier, and accountants <br /> <br /> - Pong Game: <br /> The famous game Pong, built on an Altera FPGA DE2-70 board, using VHDL programming language <br /> <br /> - universal asynchronous receiver / transmitter (UART). : <br /> Data conversion between serial and parallel forms <br /> <br /> - LED Cube:. <br /> display system with LED, to form non-planar images with movement using programmable card in VHDL (Altera FPGA) <br /> <br /> On the technical course, because it is a relatively short course, I was able to accomplish only one project (Project Integrator of end of course):. <br /> <br /> - Portal ESC: <br /> website for online inventory control, easy to handle and quick access. Facing any company or individual that requires control products. Site: http://www.grupoesc.esy.es/
                </p>
			</div>
		</div>
	</div>
</div>
<!-- FIM projetos -->

<!-- prove -->
<div class="bloc bg-server b-parallax bgc-outer-space d-bloc" id="prove">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="mg-md text-center">
					When not enough just talk, prove!
				</h2>
			</div>
		</div>
	</div>
</div>
<!-- FIM prove -->

<!-- certificados -->
<div class="bloc bgc-onyx d-bloc tc-white" id="certificados">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center mg-md tc-white">
					Some Certificates
				</h2>
			</div>
		</div>
		<div class="row voffset-lg">
			<div class="col-sm-3">
				<img src="img/jh.png" class="img-responsive img-circle center-block" />
				<h3 class="text-center mg-md tc-white">
					R Programming
				</h3>
				<p class="text-center ">
					<span>Johns Hopkings University</span>
				</p>
			</div>
			<div class="col-sm-3">
				<img src="img/rice.png" class="img-responsive img-circle center-block" />
				<h3 class="text-center mg-md tc-white">
					Interactive Programming in Python
				</h3>
				<p class="text-center ">
					<span>Rice University</span>
				</p>
			</div>
			<div class="col-sm-3">
				<img src="img/michiganlogo.png" class="img-responsive img-circle center-block" />
				<h3 class="text-center mg-md tc-white">
					Programming in Python
				</h3>
				<p class="text-center ">
					<span>University of Michigan</span>
				</p>
			</div>
			<div class="col-sm-3">
				<img src="img/certificate.png" class="img-responsive img-circle center-block" />
				<h3 class="text-center mg-md tc-white">
					Others ...
				</h3>
				<p class="text-center ">
					<span>Are coming .. More details on my Linkedin profile</span>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- FIM certificados -->

<!-- experiencia -->
<div class="bloc bgc-white l-bloc tc-mountain-meadow" id="experiencia">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="mg-md text-center tc-mountain-meadow">
					Professional Experiences
				</h3>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-sm-4">
				<img src="img/audaces.png" class="img-responsive center-block img-rd-lg" />
				<h3 class="mg-md text-center tc-mountain-meadow">
					CAD operator (Audaces)
				</h3>
				<p class="text-center ">
					Company: CAD Luz &amp; cia<br /><br />Activities: Performed the creation and development as well as the best use of molds in the production of parts for the company.
				</p>
			</div>
			<div class="col-sm-4">
				<img src="img/mpt.png" class="img-responsive center-block img-rd-lg" />
				<h3 class="mg-md text-center tc-mountain-meadow">
					Intern
				</h3>
				<p class="text-center ">
					Company: Procuradoria Regional do Trabalho 2ª Região - Ministério Público do Trabalho<br /><br />Activities: Customer Service User, Network Administration, Installation and Maintenance of Equipment, among others.
				</p>
			</div>
			<div class="col-sm-4">
				<img src="img/tempoassist.png" class="img-responsive center-block img-rd-lg" />
				<h3 class="mg-md text-center tc-mountain-meadow">
					Intern
				</h3>
				<p class="text-center ">
					Company: Tempo Assist<br /><br />Activities: I'm still in the integration phase to the group.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- FIM experiencia -->

<!-- agoraqueja -->
<div class="bloc b-parallax bg-entree bgc-mountain-meadow d-bloc" id="agoraqueja">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="mg-md text-center tc-white">
					Now that you know me, contact me
				</h2>
			</div>
		</div>
	</div>
</div>
<!-- FIM agoraqueja -->

<!-- contato -->
<div class="bloc b-parallax tc-banana-yellow bgc-black d-bloc" id="contato">
	<div class="video-bg-contianer">
		<video class="bloc-video" preload="auto" loop="loop" autoplay="autoplay">
			<source src="vid/video-placeholder.mp4" type="video/mp4" />
		</video>
	</div>
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="mg-md text-center tc-banana-yellow">
					Contact
				</h2>
				<p class="text-center ">
					Complete the form below
				</p>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-sm-7">
				<form id="formulario" novalidate>
					<div class="form-group">
						<label>
							Name
						</label>
						<input id="nome" class="form-control" data-validation-required-message="Required Field." required placeholder="Enter your name here" maxlength="150" />
					</div>
					<div class="form-group">
						<label>
							Email
						</label>
						<input id="email" class="form-control" type="email" required placeholder="Ex: youremail@emailserver.com" maxlength="100" />
					</div>
					<div class="form-group">
						<label>
							Subject
						</label>
						<input class="form-control" id="assunto" data-validation-required-message="Required Field" required placeholder="Subject" maxlength="100" />
					</div>
					<div class="form-group">
						<label>
							Message
						</label><textarea id="mensagem" class="form-control" rows="4" cols="50" required data-validation-required-message="Required Field" placeholder="Type your message here" maxlength="500"></textarea>
					</div> 
					<button class="bloc-button btn btn-lg btn-block btn-clean btn-banana-yellow animated zoomIn animDelay02" type="submit" data-placement="bottom" data-toggle="tooltip">
						<span class="fa fa-send-o icon-spacer"></span>Submit
					</button>
				</form>
			</div>
			<div class="col-sm-5">
				<img src="img/logo.png" class="img-circle center-block img-frame-rd-lg animated swing" width="300" height="350" alt="Clayton Mafra" data-placement="bottom" data-toggle="tooltip" title="Logo Clayton Mafra" />
			</div>
		</div>
	</div>
</div>
<!-- FIM contato -->

<!-- maissobre -->
<div class="bloc bgc-mountain-meadow d-bloc tc-white" id="maissobre">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="mg-md text-center tc-white">
					More about Clayton
				</h2>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-sm-4">
				<div class="text-center">
					<span class="fa fa-linkedin-square icon-round icon-md icon-white animated zoomIn"></span>
				</div>
				<h3 class="text-center mg-md tc-white">
					<a href="https://br.linkedin.com/in/claytonmafra" class="a-btn ltc-white">LinkedIn</a>
				</h3>
				<p class="text-center ">
					<span>Also visit my online profile on Linkedin</span>
				</p>
			</div>
			<div class="col-sm-4">
				<div class="text-center">
					<span class="fa fa-instagram icon-round icon-md icon-white animated zoomIn animDelay02"></span>
				</div>
				<h3 class="text-center mg-md tc-white">
					<a href="https://instagram.com/claytonmafraa" class="a-btn ltc-white">Instagram</a>
				</h3>
				<p class="text-center ">
					<span>A little about my personal life on Instagram</span>
				</p>
			</div>
			<div class="col-sm-4">
				<div class="text-center">
					<span class="fa fa-github icon-round icon-md icon-white animated zoomIn animDelay04"></span>
				</div>
				<h3 class="text-center mg-md tc-white">
					<a href="https://github.com/claytonmafra" class="a-btn ltc-white">GitHub</a>
				</h3>
				<p class="text-center ">
					<span>Some projects distributed to Github community</span>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- FIM maissobre -->

<!-- naodeixe -->
<div class="bloc bg-crosses-l-bg bg-repeat bgc-onyx d-bloc" id="naodeixe">
	<div class="container bloc-md">
		<div class="row">
			<div class="col-sm-10">
				<h3 class="mg-md text-center">
					Be sure to get in contact
				</h3>
			</div>
			<div class="col-sm-2">
				<a class="btn  btn-glossy btn-lg btn-banana-yellow animated lightSpeedIn text-center" onclick="scrollToTarget('#contato')" data-placement="bottom" data-toggle="tooltip" title="Contato"><span class="li_megaphone icon-spacer"></span>Click here</a>
			</div>
		</div>
	</div>
</div>
<!-- FIM naodeixe -->

<!-- Rodape -->
<div class="bloc bgc-mountain-meadow tc-white" id="rodape">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4">
						<h3 class="mg-md text-center ">
							About
						</h3>
						<div class="text-center">
							<a class="a-btn ltc-white" onclick="scrollToTarget('#sobre')">Clayton Mafra</a>
						</div>
						<div class="text-center">
							<a class="a-btn ltc-white" onclick="scrollToTarget('#contato')">Contact</a>
						</div>
					</div>
					<div class="col-sm-4">
						<h3 class="mg-md text-center ">
							Social Networks
						</h3>
						<div class="text-center">
							<a href="https://br.linkedin.com/in/claytonmafra" class="a-btn ltc-white">LinkedIn</a>
						</div>
						<div class="text-center">
							<a href="https://github.com/claytonmafra" class="a-btn ltc-white">GitHub</a>
						</div>
						<div class="text-center">
							<a href="https://instagram.com/claytonmafraa" class="a-btn ltc-white">Instagram</a>
						</div>
					</div>
					<div class="col-sm-4">
						<h3 class="mg-md  text-center">
							Management
						</h3>
						<div class="text-center">
							<a href="http://webmail1.hostinger.com.br/roundcube/?_task=mail" class="a-btn ltc-white" target="_blank">Inbox</a>
						</div>
					</div>
				</div>
				<div class="row voffset">
					<div class="col-sm-12">
						<p class="text-center ">
							<span>Copyright © 2015 - www.claytonmafra.xyz - All Rights Reserved.</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- FIM Rodapé -->

</div>
<!-- FIM Conteúdo da página -->


    
<!-- Google Analytics -->
<script>  
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-63219219-1', 'auto');  ga('send', 'pageview');
</script>
<!-- Google Analytics END -->

</body>

</html>
