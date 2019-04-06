<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->css(['about/style.css', 'about/bootstrap.min.css', 'about/all.min.css']) ?>
	<title>Kamer Jobs -  About</title>
</head>
<body>
	<header class="bg-white container-fluid">
		<div class="cover">
			<div class="container-fluid" style="padding-top: 10px">
				<!--div class="row">
					<div class="col-md-2"></div>
				    <div class="logo mx-auto"></div>
				    <div class="col-md-2">
				    	<a href="https://github.com/madaaka">
				    		<div class="git float-right"></div>
				    	</a>
				    </div>
				</div-->
			</div>

			<div class="labels">
				<span>JOBS</span>
				<span>FOR</span>
				<span>ALL</span>
			</div>
			<div class="row" style="max-width: 100%">
				<div class="col-md-6"></div>
				<div class="col-md-6 flot-right delivered-block bg-danger-transparent text-light">
					<span>and <b>much more</b> Experience</span>
				</div>
			</div>
		</div>
	</header>
	<main>
		<div class="container-fluid bg-light custom-block">
			<div class="container">
				<div class="row vertical-align">
					<div class="col-md-4" style="align-items: baseline;top:-50px">
						<?= $this->Html->image('../img/about/info2.png', ['class' => 'img-fluid']) ?>
					</div>
					<div class="col-md-8">
						<span class="custom-text text-dark">
							<h1>Was machen wir?</h1>
							"KamerJob" ist ein kleines Startup- Unternehmen, das als Jobvermittler entwickelt wurde. Bei Kamerjob stehen Jobsuchende an erster Stelle: Sie können also kostenlos nach Stellenanzeigen suchen, Ihre Unterlagen hochladen und erhalten Informationen zu Unternehmen. Diese Webseite sollte dabei helfen, Menschen ihren Traumjob zu finden.  
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-light custom-block">
			<div class="container">
				<div class="row vertical-align">
					<div class="col-md-8">
						<span class="custom-text text-dark">
							<h1>Für wen machen wir?</h1>
							Es orientiert sich vor allem auf <b>Menschen</b>, die in der Suche sind, neue Arbeitsplaetze zu finden. Oder Menschen, die Arbeitlos sind. Die andere Seite in dem Prozess der Bewerbung ist, dass die Person, die Stellen sucht dabei auch Informationen über die Unternehmen, die bereits existieren, erhalten kann. Die Stellen sind nach Regionen und Kategorien aufgelistet und erleichtet somit den Prozess der Bewerbung. 
						</span>
					</div>
					<div class="col-md-4">
						<?= $this->Html->image('../img/about/how2.png', ['class' => 'height-20']) ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid custom-block bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center text-white">
						<h1>Wer ist dabei?</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<?= $this->Html->image('../img/about/who2.png', ['class' => 'img-fluid']) ?>
					</div>
				</div>
			</div>
		</div>		
	</main>
	<footer class="container-fluid bg-dark text-light">
		<div class="container-fluid text-left">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12 text-secondary">
							<h1 style="margin-left: 40px">Team</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-left" style="font-weight: 100">
							<ul>
								<li>
									<a class="text-white" href="https://github.com/madaaka/">Danielle Mada'a Kamta</a>
								</li>
								<li>
									<a class="text-white" href="#">Sah Versheri</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12 text-secondary">
							<h1 style="margin-left: 40px">Links</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<ul class="text-left" style="font-weight: 100">
								<li>
									<a class="text-white" href="#">Terms</a>
								</li>
								<li>
									<a class="text-white" href="#">Privacy</a>
								</li>
								<li>
									<a class="text-white" href="#">Contact</a>
								</li>
								<li>
									<a class="text-white" href="#">Blog</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12 text-secondary">
							<h1>Social</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<a class="text-white" href="#"><i class="fab fa-2x fa-facebook-square" style="padding: 4px"></i></a>
						
							<a class="text-white" href="#"><i class="fab fa-2x fa-github-square" style="padding: 4px"></i></a>
						
							<a class="text-white" href="#"><i class="fab fa-2x fa-twitter-square" style="padding: 4px"></i></a>
								
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 margin-top-15">
							<b class="text-secondary">Author: </b> <span style="font-weight: 100">madaaka@th-brandenburg.de</span>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="row">
						<div class="col-md-12">
							<a class="im_start" href="../index.php">
							<img src="/img/web_hi_res_512.png" alt="Kamer Jobs Logo" height="150" width="150" class="im_start">    </a>
						</div>
					</div>
					<div class="row" style="margin-top: 15px">
						<div class="col-md-12">
							<?= $this->Html->image('../img/about/thb.png', ['class' => 'img-fluid', 'style' => 'filter: brightness(100);']) ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
