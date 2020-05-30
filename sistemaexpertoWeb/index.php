

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema Experto Medico</title>
	
	 <!-- css -->
	 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	>
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	

	
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	
	<link id="t-colors" href="color/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="" width="150" height="40" />
                </a>
            </div>

        
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#intro">Home</a></li>
				<li><a href="services.php">Resultado</a></li>
			  </ul>
            </div>
           
        </div>
      
    </nav>
	

	
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">Sistema Médico</h2>
					</div>
					
						<div class="well well-trans">
						<div class="wow fadeInRight" data-wow-delay="0.1s">

						<ul class="lead-list" >
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Verifica que</strong></span><br><strong>enfermedad padeces</strong></span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Tratamiento a seguir </strong><br /></span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong> Tipo de Especialista  </strong><br /></span></li>
						</ul>

						</div>
						</div>


					</div>
					<div class="col-lg-9">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Sintomas <small>(selecccione los sintomas que padece.)</small></h3>
									</div>
									<div class="panel-body">
									<form role="form" class="lead" action="services.php" method="POST">
										<div class="row">
											<div class="col-xs-4 col-sm-4 col-md-4">
												<div class="form-group"><strong>Diarrea:</strong><br>
													<label class="radio-inline">
														<input type="radio" required name="s1" value="si"> Si
													  </label>
													  <label class="radio-inline">
														<input type="radio" required name="s1"value="no"> No
													  </label>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4">
												<div class="form-group"><strong>Tos:</strong><br>
													<label class="radio-inline">
														<input type="radio" required name="s2" value="si"> Si
													  </label>
													  <label class="radio-inline">
														<input type="radio" required name="s2"value="no"> No
													  </label>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4">
												<div class="form-group"><strong>Cansancio:</strong><br>
													<label class="radio-inline">
														<input type="radio" required name="s3" value="si"> Si
													  </label>
													  <label class="radio-inline">
														<input type="radio" required name="s3"value="no"> No
													  </label>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-4 col-sm-4 col-md-4">
												<div class="form-group"><strong>Fiebre:</strong><br>
													<label class="radio-inline">
														<input type="radio" required name="s4" value="si"> Si
													  </label>
													  <label class="radio-inline">
														<input type="radio" required name="s4"value="no"> No
													  </label>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4">
												<div class="form-group"><strong>Dolor de cabeza:</strong><br>
													<label class="radio-inline">
														<input type="radio" required name="s5" value="si"> Si
													  </label>
													  <label class="radio-inline">
														<input type="radio" required name="s5"value="no"> No
													  </label>
												</div>
											</div>
										
										<div class="col-xs-4 col-sm-4 col-md-4">
											<div class="form-group"><strong>Nauseas:</strong><br>
												<label class="radio-inline">
													<input type="radio" required name="s6" value="si"> Si
												  </label>
												  <label class="radio-inline">
													<input type="radio" required name="s6"value="no"> No
												  </label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-4 col-sm-4 col-md-4">
											<div class="form-group"><strong>Ictericia:</strong><br>
												<label class="radio-inline">
													<input type="radio" required name="s7" value="si"> Si
												  </label>
												  <label class="radio-inline">
													<input type="radio" required name="s7"value="no"> No
												  </label>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4">
											<div class="form-group"><strong>Apatia:</strong><br>
												<label class="radio-inline">
													<input type="radio" required name="s8" value="si"> Si
												  </label>
												  <label class="radio-inline">
													<input type="radio" required name="s8"value="no"> No
												  </label>
											</div>
										</div>

										<div class="col-xs-4 col-sm-4 col-md-4">
											<div class="form-group"><strong>Escalofrios:</strong><br>
												<label class="radio-inline">
													<input type="radio" required name="s9" value="si"> Si
												  </label>
												  <label class="radio-inline">
													<input type="radio" required name="s9"value="no"> No
												  </label>
											</div>
										</div>


									</div>

									<div class="row">
										<div class="col-xs-4 col-sm-4 col-md-4">
											<div class="form-group"><strong>Jaqueca:</strong><br>
												<label class="radio-inline">
													<input type="radio" required name="s10" value="si"> Si
												  </label>
												  <label class="radio-inline">
													<input type="radio" required name="s10"value="no"> No
												  </label>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4">
											<div class="form-group"><strong>Secrecion:</strong><br>
												<label class="radio-inline">
													<input type="radio" required name="s11" value="si"> Si
												  </label>
												  <label class="radio-inline">
													<input type="radio" required name="s11"value="no"> No
												  </label>
											</div>
										</div>

									</div>
										
										<input type="submit" value="Evaluar" class="btn btn-skin btn-block btn-lg">
										
										<p class="lead-footer">* Sistema basado en  enfermedades comúnes. </p>
									
									</form>
								</div>
							</div>				
						
						</div>
						</div>
					</div>					
				</div>		
			</div>
		</div>		
    </section>
	
	
	

	<!-- /Section: services -->
	

	

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	
    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>

	

	
	
  

</body>

</html>
