<!doctype html>
<html dir="ltr">
	
<!-- Header -->
<?php include_once("includes/header.php"); ?>

<body>
	<main class="main" id="top">
		
		<!-- Navigation bar -->
		<?php include_once("includes/nav.php"); ?>
		
        <section class="py-0" id="home">
            <div class="bg-holder d-none d-md-block" style="background-image:url(assets/img/illustrations/conexao-maddis.png);background-position:right bottom;background-size:contain;margin-top:-2.25rem;">
            </div>
            <div class="container">
                <div class="row align-items-center min-vh-md-75 mt-5">
                    <div class="col-md-8 col-lg-7 py-7 text-sm-start text-center">
                        <h1 class="mt-6 mb-sm-4 display-4 fw-light lh-sm fs-4 fs-lg-4 fs-xxl-5">
							Bem-vindo(a)!
						</h1>
                        <p class="mb-5 fs-1 lh-lg">
							A <strong>MADDIs-EF &ndash; Materiais Didáticos Digitais e Interativos para a Educação Física</strong> é uma rede de pesquisa e desenvolvimento tecnológico que reúne pesquisadores de 11 instituições brasileiras e estrangeiras para desenvolver estudos e propor soluções tecnológicas voltadas para o ensino de Educação Física na Educação Básica.
						</p>
                        <a class="btn btn-lg btn-primary hover-top" href="#">Saiba mais</a>
                        <div class="mt-xl-5">
                            <ul class="list-unstyled list-inline mb-0"> 
								<li class="list-inline-item me-3">
									<a href="https://www.instagram.com/redemaddis/" target="_blank">
										<i class="fab fa-instagram fa-2x"></i>
									</a>
                                </li>
								<li class="list-inline-item me-3">
                                    <a href="https://www.youtube.com/channel/UCH7uJVByn91CCjVCTeIP46Q" target="_blank">
										<i class="fab fa-youtube fa-2x"></i>
									</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		<!-- Universities -->
        <section class="bg-100 py-5">
			<div class="container">
				<div class="row">
					<div class="col-12 mx-auto align-items-center text-center">
						<h6 class="mb-4 text-uppercase fw-light fs-1 mb-6">Instituições Envolvidas</h6>
						<div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active" data-bs-interval="5000">
									<div class="row h-100 justify-content-center">
										<div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/logos/ufrn.png" alt="universities" /></div>
                                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start mt-1"><img class="mb-4" src="assets/img/logos/uern.png" width="80%" alt="universities" /></div>
										<div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/logos/ufc.png" width="90%" alt="universities" /></div>
										<div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/logos/ifce.png" width="90%" alt="universities" /></div>
									</div>
								</div>
								<div class="carousel-item" data-bs-interval="5000">
									<div class="row h-100 justify-content-center">
										<div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/logos/ufrpe.png" alt="universities" /></div>
                                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/logos/ufg.png" alt="universities" /></div>
										<div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/logos/uem.png" alt="universities" /></div>
										<div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/logos/ufrgs.png" alt="universities" /></div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row h-100 justify-content-center">
										<div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/logos/uffs.png" alt="universities" /></div>
										<div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/logos/ucm.png" alt="universities" /></div>
										<div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="mb-4" src="assets/img/logos/uv.png" alt="universities" /></div>
									</div>
								</div>
							</div>
							<div class="row mt-5 flex-center">
								<div class="col-auto position-relative z-index-2">
									<ol class="carousel-indicators">
										<li class="active mx-2" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
										<li class="mx-2" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
										<li class="mx-2" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Footer -->
		<?php include_once("includes/footer.php"); ?>
	</main>
	
	<!-- JavaScripts -->
	<?php include_once("includes/end-scripts.php"); ?>
</body>
</html>
