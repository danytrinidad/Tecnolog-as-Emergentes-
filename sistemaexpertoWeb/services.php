<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema experto Medico.</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">
<style>
    #service{
        margin-top:50px;
    }
</style>

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
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="services.php">Service</a></li>
			  </ul>
            </div>
         
        </div>
       
    </nav>
	
<body>
    
	
    <section id="service" class="home-section nopadding paddingtop-60">
	<div class="container">
		<div class="row" >
			<div class="col-sm-6 col-md-6" >
				<div class="wow fadeInUp" data-wow-delay="0.2s">
					<img src="img/dummy/img-1.jpg" class="img-responsive" alt="" />
				</div>
			</div>

			<div class="col-sm-6 col-md-6">
				<div class="row">
					<div class="col-sm-6 col-md-6" >
						<div class="wow fadeInRight" data-wow-delay="0.1s">
							<div class="service-box">
								<div class="service-icon">
									<span class="fa fa-stethoscope fa-3x"></span> 
								</div>
								<div class="service-desc">
									<h5 class="h-light">Evaluación Médica</h5>
									<p>La evaluación médica fue la siguiente.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6" >	
						<div class="wow fadeInRight" data-wow-delay="0.3s">
							<div class="service-box">
								<div class="service-icon">
									<a href="index.php"><span class="fa fa-plus-square fa-3x"></span> </a>
								</div>
								<div class="service-desc">
									<h5 class="h-light">Realizar nueva evaluación</h5>
							
								</div>
							</div>
						</div>
					</div>
				</div>		
				<div class="row">
					<div class="col-md-12">
					<?php

if(!empty($_POST)){
$s1= $_POST["s1"];
$s2= $_POST["s2"];
$s3= $_POST["s3"];
$s4= $_POST["s4"];
$s5= $_POST["s5"];
$s6= $_POST["s6"];
$s7= $_POST["s7"];
$s8= $_POST["s8"];
$s9= $_POST["s9"];
$s10= $_POST["s10"];
$s11= $_POST["s11"];
$datos=[$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9,$s10,$s11];

//Base de conocimiento.
$malaria =["si","no","no","si","no","no","si","no","si","no","no"];
$gripe =["no","si","si","si","si","no","no","no","no","no","no"];
$rubeola =["no","no","no","si","no","no","no","no","si","si","si"];
$hepatitis =["si","no","no","no","no","si","si","no","no","no","no"];
$tuberculosis =["no","si","si","si","no","no","no","no","si","no","no"];
$anemia =["no","no","si","no","no","si","no","si","no","no","no"];
//reglas
if($datos === $malaria){
echo "<strong>Padece de Malaria</strong>";
echo "<br> <br> <i>El tratamiento para Malaria es :Vacuna </i><br><br>";
echo "<i>El especialista para tratar la enfermedad es: Endocrinologo y Medico Gral</i>";
} 
else if($datos === $gripe){

echo "<strong>Padece de Gripe</strong>";
echo "<br><br> <i>El tratamiento para Gripe es: Jarabe y Contrex</i> <br><br>";
echo "<i>El especialista para tratar la enfermedad es: Otorrino</i>";

}else if($datos === $rubeola){
echo "<strong>Padece de Rubeola</strong>";
echo "<br><br> <i>El tratamiento para Rubeola es: Vacuna y Paracetamol</i> <br><br>";
echo "<i>El especialista para tratar la enfermedad es: Endocrinólogo y Medico Gral.</i>";


}else if($datos === $hepatitis){
echo "<strong>Padece de Hepatitis</strong>";
echo "<br> <br><i>El tratamiento para Hepatitis es: Vacuna y Paracetamol</i> <br><br>";
echo "<i>El especialista para tratar la enfermedad es: Endocrinologo y Medico Gral.</i>";
}else if($datos === $tuberculosis){
echo "<strong>Padece de Tuberculosis</strong>";
echo "<br> <br><i>El tratamiento para Tuberculosis es: Paracetamol</i> <br><br>";
echo "<i>El especialista para tratar la enfermedad es:  Medico Gral.</i>";

}else if($datos === $anemia){
echo "<strong>Padece de Anemia</strong>";
echo "<br> <br><i>El tratamiento para Anemia es: Vitamina</i> <br><br>";
echo "<i>El especialista para tratar la enfermedad es: Nutriólogo</i>";
}

else {
echo "No se encontro alguna enfermedad relacionada con esos sintomas <br> <br>";
echo "<center><img  src='https://images.emojiterra.com/google/android-pie/512px/274c.png' width='100' height='90'></center>";


}

}else {
echo "<center><div>usted no ha llenado el formulario. </div></center> ";
}

?>
					</div>							
				</div>											
			</div>								
		</div>	
	</div>
</section>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>