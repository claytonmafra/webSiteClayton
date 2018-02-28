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
    <link rel='stylesheet' href='./css/flags.css'/>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="./js/jquery-2.1.0.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/blocs.js"></script>
    <script src='./js/jqBootstrapValidation.js'></script>
    <script src='./js/formHandler.js'></script>
    <title>Clayton Mafra - Estudante de Engenharia da Computação</title>
</head>
<body>
<!-- Conteúdo da Página -->
<div class="page-container">
    
<!-- Bloco de Navegação -->
<div class="bloc bgc-mountain-meadow d-bloc sticky-nav b-parallax" id="nav-bloc">
	<div class="container bloc-sm">
		<nav class="navbar nav-center row">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo" width="60" height="60" />Clayton Mafra</a>
				<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Alternar Navegação</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-1">
				<ul class="site-navigation nav navbar-nav">
					<li>
						<a class="ltc-white" id="pl-undefined" onclick="scrollToTarget('1')">Home</a>
					</li>
					<li>
						<a class="ltc-white" id="pl-undefined" onclick="scrollToTarget('#sobre')">Quem Sou?</a>
					</li>
					<li>
						<a class="ltc-white" id="pl-undefined" onclick="scrollToTarget('#competencias')">Competências</a>
					</li>
					<li>
						<a class="ltc-white" id="pl-undefined" onclick="scrollToTarget('#projetos')">Projetos</a>
					</li>
					<li>
						<a class="ltc-white" id="pl-undefined" onclick="scrollToTarget('#experiencia')">Experiência</a>
					</li>
					<li>
						<a class="ltc-white" id="pl-undefined" onclick="scrollToTarget('#contato')">Contato</a>
					</li>
					<li>
						<div class="dropdown">
							<a id="pl-253" class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Idioma<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="english.php" class="a-btn a-block ltc-white"><span class="flag flag-us"></span>English</a>
								</li>
								<li>
									<a href="#" class="a-btn a-block ltc-white"><span class="flag flag-br"></span>Português</a>
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
					Engenheiro da Computação
				</h3>
				<h3 class="mg-md text-center glow-t tc-banana-yellow">
					Onde o planejamento e a criatividade andam juntos
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
					Aqui Vamos Nós ...
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
					Sobre o Clayton
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
					</div><a class="left carousel-control" href="#slider-clayton" role="button" data-slide="prev"><span class="fa fa-chevron-left"></span><span class="sr-only">Anterior</span></a><a class="right carousel-control" href="#slider-clayton" role="button" data-slide="next"><span class="fa fa-chevron-right"></span><span class="sr-only">Próximo</span></a>
				</div>
			</div>
			<div class="col-sm-6">
				<h1 class="mg-lg text-center animDelay02 rubberBand tc-white animated">
					Clayton Mafra
				</h1>
				<h3 class="mg-sm text-center tc-white">
					Seguindo e acreditando sempre nos seus sonhos
				</h3>
				<blockquote>
					<p class="text-center ">
						<span>Atualmente morando e trabalhando em São Paulo, é um grande fã de futebol e aproveita seu tempo livre buscando sempre aprimorar seus conhecimentos.<br /><br />Vindo de uma família humilde, procura sempre ser diplomático e amável com os outros. Com uma característica orientadora¹, tenta passar seus conhecimentos aos seus colegas de trabalho e de estudos.</span>
					</p>
				</blockquote>
				<p>
					<span>¹ Segundo Perfil Vagas <a href="http://www.e-talent.com.br/VagasETalent/B2C_V3/RelatorioParcial.aspx?IP=CK200n22BCvHfS9Dwxekgw%3d%3d&amp;IC=NXjZqBUz00EB8PW9Fs37nw%3d%3d&amp;cn=2" class="a-btn l">E-Talent</a></span>
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
					Construindo um futuro e se tornando uma grande pessoa!
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
					Vida Acadêmica
				</h2>
			</div>
		</div>
		<div class="row voffset-lg">
			<div class="col-sm-3">
				<img class="img-rd-lg center-block" src="img/389135-970x600-1.jpeg" width="270" height="189" alt="Paróquia Nossa Senhora da Paz" />
				<h3 class="mg-md text-center tc-white">
					<span class="ion ion-happy"></span> Paróquia Nossa Senhora da Paz
				</h3>
				<p class="text-center ">
					O começo de tudo! Foi aqui que iniciei meus estudos, nesta escolinha primária nos fundos desta igreja. Lá aprendi a ler, escrever e desenvolver um pensamento crítico.
				</p>
			</div>
			<div class="col-sm-3">
				<img class="img-rd-lg center-block" src="img/saopaulo.jpg" width="270" height="189" alt="Escola Estadual São Paulo" />
				<h3 class="mg-md text-center tc-white">
					<span class="fa fa-child"></span> E. E. de São Paulo
				</h3>
				<p class="text-center ">
					Aqui, onde antes uma bela e conceituada instituição de ensino, foi onde fiz meu ensino fundamental e médio, passando grande parte da minha vida. Lá tive a felicidade, ou melhor, o merecimento de estar no grupo do CDT (Centro de Desenvolvimento de Talentos), um grupo que reunia os alunos com as melhores notas da escola.
				</p>
			</div>
			<div class="col-sm-3">
				<img class="img-rd-lg center-block" src="img/logoFIAP.jpg" width="270" height="189" alt="FIAP" />
				<h3 class="mg-md text-center tc-white">
					<span class="fa fa-gears"></span> FIAP
				</h3>
				<p class="text-center ">
					Foi na FIAP que realizei meu curso Técnico de Informática, mais um grande passo na minha vida e mais uma grande etapa de aprendizado.
				</p>
			</div>
			<div class="col-sm-3">
				<img class="img-rd-lg center-block" src="img/usjt.png" width="270" height="189" alt="Universidade São Judas" />
				<h3 class="mg-md text-center tc-white">
					<span class="fa fa-graduation-cap"></span> Universidade São Judas Tadeu - USJT
				</h3>
				<p class="text-center ">
					Em 2012 iniciei minha graduação de 5 anos em Engenharia da Computação. Um desafio que vou superando e que está prestes a ser concluído.
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
					Para fazer é preciso saber!
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
					Competências e Habilidades
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
						Conhecimentos em HTML 5, colocados em prática principalmente durante o curso técnico.
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
						Conhecimentos em CSS 3, colocados em prática principalmente durante o curso técnico.
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
						Conhecimentos em Javascript, colocados em prática principalmente durante o curso técnico.
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
						Conhecimento em Python adquiridos em curso realizado online pela Rice University e University of Michigan.
					</p>
				</div>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-sm-6">
				<div class="col-sm-9">
					<h3 class="mg-md text-center tc-white">
						Banco de Dados
					</h3>
					<p class="text-center ">
						Conhecimentos em SQL. Utilizando SGBD MySQL Workbench e PHPMyAdmin via XAMPP.
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
						Entre outros.
					</h3>
					<p class="text-center ">
						Uma lista com outras competências e habilidades você pode encontrar em meu perfil no LinkedIn.
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
					Projetos e Atividades<br />
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
					</div><a class="left carousel-control" href="#slideprojetos" role="button" data-slide="prev"><span class="fa fa-chevron-left"></span><span class="sr-only">Anterior</span></a><a class="right carousel-control" href="#slideprojetos" role="button" data-slide="next"><span class="fa fa-chevron-right"></span><span class="sr-only">Próximo</span></a>
				</div>
				<h3 class="mg-md text-center tc-white">
					Mão na Massa
				</h3>
				<p>
					Estes foram alguns dos meus projetos entre faculdade e curso técnico. Na universidade, realizei junto a alguns colegas de classe, um projeto de:<br /><br />- Simulação de Sistema de Alarme:<br />Sistema que utiliza um microcontrolador Intel 8051 e uma programação feita em Assembly.<br /><br />- Gerador de Sinais:<br />Circuito eletrônico para geração e reprodução de formas de onda em um osciloscópio, utilizando componentes como memória EPROM, conversor D/A, amplificador operacional e contadores.<br /><br />- Pong Game:<br />O famoso jogo Pong, construído em uma placa Altera FPGA DE2-70, utilizando a linguagem de programação VHDL.<br /><br />- Universal Asynchronous Receiver/Transmitter(UART):<br />Conversão de dados entre as formas seriais e paralelas.<br /><br />- Cubo de LED:<br />Sistema de display com leds, para formar imagens não planas, com movimento utilizando placa programável em VHDL (Altera FPGA).<br /><br />No curso técnico, por ser um curso relativamente curto, tive a oportunidade de realizar apenas um projeto (Projeto Integrador de final de curso):<br /><br />- Portal ESC:<br />Site para controle de estoque online, de fácil manuseio e rápido acesso. Voltado para qualquer empresa ou pessoa física que necessite de controle de produtos. Site: http://www.grupoesc.esy.es/
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
					Quando não bastar apenas falar, prove!
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
					Alguns Certificados
				</h2>
			</div>
		</div>
		<div class="row voffset-lg">
			<div class="col-sm-3">
				<img src="img/jh.png" class="img-responsive img-circle center-block" />
				<h3 class="text-center mg-md tc-white">
					Programação R
				</h3>
				<p class="text-center ">
					<span>Johns Hopkings University</span>
				</p>
			</div>
			<div class="col-sm-3">
				<img src="img/rice.png" class="img-responsive img-circle center-block" />
				<h3 class="text-center mg-md tc-white">
					Programação Interativa em Python
				</h3>
				<p class="text-center ">
					<span>Rice University</span>
				</p>
			</div>
			<div class="col-sm-3">
				<img src="img/michiganlogo.png" class="img-responsive img-circle center-block" />
				<h3 class="text-center mg-md tc-white">
					Programação em Python
				</h3>
				<p class="text-center ">
					<span>University of Michigan</span>
				</p>
			</div>
			<div class="col-sm-3">
				<img src="img/certificate.png" class="img-responsive img-circle center-block" />
				<h3 class="text-center mg-md tc-white">
					Outros ...
				</h3>
				<p class="text-center ">
					<span>Estão por vir.. Mais detalhes em meu perfil do Linkedin</span>
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
					Experiências Profissionais
				</h3>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-sm-4">
				<img src="img/audaces.png" class="img-responsive center-block img-rd-lg" />
				<h3 class="mg-md text-center tc-mountain-meadow">
					Operador de CAD (Audaces)
				</h3>
				<p class="text-center ">
					Empresa: CAD Luz &amp; cia<br /><br />Atividades: Realizava a criação e desenvolvimento, bem como a melhor utilização dos moldes na produção das peças para a empresa.
				</p>
			</div>
			<div class="col-sm-4">
				<img src="img/mpt.png" class="img-responsive center-block img-rd-lg" />
				<h3 class="mg-md text-center tc-mountain-meadow">
					Estagiário
				</h3>
				<p class="text-center ">
					Empresa: Procuradoria Regional do Trabalho 2ª Região - Ministério Público do Trabalho<br /><br />Atividades: Atendimento ao Usuário, Administração de Redes, Montagem e Manutenção de Equipamentos, entre outros.
				</p>
			</div>
			<div class="col-sm-4">
				<img src="img/tempoassist.png" class="img-responsive center-block img-rd-lg" />
				<h3 class="mg-md text-center tc-mountain-meadow">
					Estagiário
				</h3>
				<p class="text-center ">
					Empresa: Tempo Assist<br /><br />Atividades: Ainda estou na fase de integração ao grupo.
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
					Agora que já me conhece, entre em contato
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
					Contato
				</h2>
				<p class="text-center ">
					Preencha o formulário abaixo e logo entrarei em contato
				</p>
			</div>
		</div>
		<div class="row voffset">
			<div class="col-sm-7">
				<form id="formulario" novalidate>
					<div class="form-group">
						<label>
							Nome
						</label>
						<input id="nome" class="form-control" data-validation-required-message="Campo Obrigatório." required placeholder="Digite seu nome aqui" maxlength="150" />
					</div>
					<div class="form-group">
						<label>
							Email
						</label>
						<input id="email" class="form-control" type="email" required placeholder="Ex: seuemail@servidor.com" maxlength="100" />
					</div>
					<div class="form-group">
						<label>
							Assunto
						</label>
						<input class="form-control" id="assunto" data-validation-required-message="Campo Obrigatório." required placeholder="Assunto" maxlength="100" />
					</div>
					<div class="form-group">
						<label>
							Mensagem
						</label><textarea id="mensagem" class="form-control" rows="4" cols="50" required data-validation-required-message="Campo Obrigatório." placeholder="Digite aqui sua mensagem" maxlength="500"></textarea>
					</div> 
					<button class="bloc-button btn btn-lg btn-block btn-clean btn-banana-yellow animated zoomIn animDelay02" type="submit" data-placement="bottom" data-toggle="tooltip">
						<span class="fa fa-send-o icon-spacer"></span>Enviar
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
					Mais sobre o Clayton
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
					<span>Visite também meu perfil online no Linkedin</span>
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
					<span>Um pouco sobre minha vida pessoal no Instagram.</span>
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
					<span>Alguns projetos distribuídos a comunidade Github</span>
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
					Não deixe de entrar em contato
				</h3>
			</div>
			<div class="col-sm-2">
				<div class="text-center">
					<a class="btn  btn-glossy btn-lg btn-banana-yellow animated lightSpeedIn" onclick="scrollToTarget('#contato')" data-placement="bottom" data-toggle="tooltip" title="Contato"><span class="li_megaphone icon-spacer"></span>Clique aqui</a>
				</div>
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
							Sobre
						</h3>
						<div class="text-center">
							<a class="a-btn ltc-white" onclick="scrollToTarget('#sobre')">Clayton Mafra</a>
						</div>
						<div class="text-center">
							<a class="a-btn ltc-white" onclick="scrollToTarget('#contato')">Entre em contato</a>
						</div>
					</div>
					<div class="col-sm-4">
						<h3 class="mg-md text-center ">
							Redes Sociais
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
							Administração
						</h3>
						<div class="text-center">
							<a href="http://webmail1.hostinger.com.br/roundcube/?_task=mail" class="a-btn ltc-white" target="_blank">Caixa de Entrada</a>
						</div>
					</div>
				</div>
				<div class="row voffset">
					<div class="col-sm-12">
						<p class="text-center ">
							<span>Copyright © 2015 - www.claytonmafra.xyz, TODOS OS DIREITOS RESERVADOS.</span>
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