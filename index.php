<!DOCTYPE html>
<html lang="es">
<head>
<style>
/* --- ESTILOS EJECUTIVOS 2025 (NUEVO DISEÑO) --- */
:root {
    --bac-navy: #0a192f;       /* Azul Marino Profundo */
    --bac-gold: #c5a059;       /* Dorado/Ocre */
    --bac-gray: #f4f4f4;       /* Gris Fondo */
    --bac-text: #333333;       
}

/* Ajustes Generales */
body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: var(--bac-text); }
h1, h2, h3 { color: var(--bac-navy); font-weight: 700; }

/* Formulario Flotante Moderno */
.getaquote-form {
    background: #ffffff !important;
    padding: 30px !important;
    border-radius: 8px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    border-top: 4px solid var(--bac-gold);
    margin-top: -50px; /* Flota sobre el slider */
    position: relative;
    z-index: 10;
}
.getaquote-form h3 { color: var(--bac-navy) !important; background: none !important; padding: 0 !important; margin-bottom: 20px; font-size: 1.5rem; }
.form-control { background: #f8f9fa !important; border: 1px solid #ddd !important; height: 45px !important; }
.btn-primary { background: var(--bac-gold) !important; border: none !important; font-weight: bold; transition: 0.3s; }
.btn-primary:hover { background: var(--bac-navy) !important; }

/* Servicios (Iconos) */
.services { background: #fff; padding: 25px; border: 1px solid #eee; transition: 0.3s; height: 100%; border-radius: 6px; }
.services:hover { transform: translateY(-5px); border-color: var(--bac-gold); box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
.services .icon span { color: var(--bac-gold); font-size: 40px; }
.services h3 { font-size: 18px; text-transform: uppercase; margin-top: 15px; }

/* Clientes (Logos en Carrusel) */
.user-img {
    filter: grayscale(100%);
    opacity: 0.6;
    transition: 0.4s;
    background-size: contain !important;
    border-radius: 0 !important; /* Cuadrado para logos */
}
.testimony-wrap:hover .user-img { filter: grayscale(0%); opacity: 1; transform: scale(1.05); }
.line { border-left: 3px solid var(--bac-gold); padding-left: 10px !important; font-weight: bold; color: var(--bac-navy); text-transform: uppercase; font-size: 0.9rem; }

/* Contadores y Fondos */
.bg-primary { background-color: var(--bac-navy) !important; }
.step span { color: var(--bac-gold); font-weight: 900; font-size: 3rem; }
.step h3 { color: white; font-size: 1.1rem; }

/* RESPONSIVE */
@media (max-width: 768px) {
    .home-slider.js-fullheight, .slider-item.js-fullheight { height: 600px !important; }
    .sld { top: 50% !important; left: 50% !important; transform: translate(-50%, -50%) !important; width: 90% !important; text-align: center !important; }
    .getaquote-form { margin-top: 20px; }
}
</style>
</head>

<?php include("header.php");?>

    <section class="slider_ctn"> 
    <section class="home-slider js-fullheight owl-carousel">
      
      <div class="slider-item js-fullheight" style="background-image:url(images/slider1.jpg);">
      	<div class="overlay" style="background: linear-gradient(to bottom, rgba(10,25,47,0.4), rgba(10,25,47,0.8));"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 text ftco-animate sld sldtext" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Excelencia Legal en BAC</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="font-size: 1.2rem; color:#f0f0f0;">
                Nos preocupamos por estar siempre capacitados para cumplir con las expectativas de servicio que nuestros clientes esperan.
            </p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(images/slider2.jpeg);">
      	<div class="overlay" style="background: linear-gradient(to bottom, rgba(10,25,47,0.4), rgba(10,25,47,0.8));"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 text ftco-animate sld"  data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                Honestidad • Lealtad<br>Profesionalismo • Perseverancia
            </h1>
          </div>
        </div>
        </div>
      </div>

       <div class="slider-item js-fullheight" style="background-image:url(images/slider3.jpeg);">
      	<div class="overlay" style="background: linear-gradient(to bottom, rgba(10,25,47,0.4), rgba(10,25,47,0.8));"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 text ftco-animate sld" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Experiencia Comprobada</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Un despacho Jurídico con más de 18 años de experiencia brindando servicios en Villahermosa, Tabasco</p>
          </div>
        </div>
        </div>
      </div>

       <div class="slider-item js-fullheight" style="background-image:url(images/slider4.jpg);">
      	<div class="overlay" style="background: linear-gradient(to bottom, rgba(10,25,47,0.4), rgba(10,25,47,0.8));"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 text ftco-animate sld" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Villahermosa, Tabasco</h1>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(images/slider5.jpg);">
      	<div class="overlay" style="background: linear-gradient(to bottom, rgba(10,25,47,0.4), rgba(10,25,47,0.8));"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 text ftco-animate sld" data-scrollax=" properties: { translateY: '70%' }">
          </div>
        </div>
        </div>
      </div>

    </section>
	</section>

    <section class="ftco-section ftco-services" style="background-color: #f8f9fa;">
			<div class="container">
				<div class="row" >
					
                    <div class="col-md-5 col-lg-4" >
						<form action="send_email" method="POST" class="getaquote-form">
							<?php 
								if(isset($_GET['sendmsm'])){
									echo"
									<div class='alert alert-info alert-dismissible fade show' role='alert'>
							            Gracias por contactar a <strong>BAC Abogados</strong>. Su mensaje ha sido enviado exitosamente. 
							            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							                <span aria-hidden='true'>×</span>
							            </button>
									</div>";
								}
							?>

							<h3>Solicitar Asesoría</h3>
							<div class="wrap">
	              <div class="form-group">
	              	<input type="hidden" name="page" value="./">
	                <input type="text" class="form-control" name="nombre" placeholder="Nombre Completo" required>
	              </div>
	              <div class="form-group">
	                <input type="email" class="form-control" name="correo" placeholder="Correo Electrónico" required>
	              </div>
	              <div class="form-group">
	                <input type="number" class="form-control" name="telefono" placeholder="Teléfono" required>
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control" name="direccion" placeholder="Dirección / Empresa" required>
	              </div>
	              <div class="form-group">
	                <textarea name="mensaje_f" id="" cols="30" rows="4" class="form-control"  placeholder="Mensaje" required></textarea>
	              </div>
	              <div class="form-group">
	                <input type="submit" value="Enviar Solicitud" class="btn btn-primary py-3 px-5 btn-block">
	              </div>
              </div>
            </form>
		</div>

        <div class="col-md-7 col-lg-8" style="padding-top: 40px;">
			<div class="row pl-md-4">
		          <div class="col-lg-6 d-flex align-self-stretch ftco-animate mb-4">
		            <div class="media block-6 services d-flex">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<a href="servicios"><span class="icon icon-balance-scale"></span></a>
		              </div>
		              <div class="media-body pl-4">
		               <a href="servicios"> <h3 class="heading">MATERIA LITIGIOSA</h3></a>
		               <p style="color:#666; font-size:0.9rem;">Resolución de conflictos civiles y mercantiles.</p>
		              </div>
		            </div>      
		          </div>

		          <div class="col-lg-6 d-flex align-self-stretch ftco-animate mb-4">
		            <div class="media block-6 services d-flex">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<a href="servicios"><span class="flaticon-prison"></span></a>
		              </div>
		              <div class="media-body pl-4">
		              <a href="servicios">  <h3 class="heading">MATERIA PENAL</h3></a>
		              <p style="color:#666; font-size:0.9rem;">Defensa de la libertad y patrimonio.</p>
		              </div>
		            </div>    
		          </div>
		          <div class="col-lg-6 d-flex align-self-stretch ftco-animate mb-4">
		            <div class="media block-6 services d-flex">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<a href="servicios"><span class="icon icon-group"></span></a>
		              </div>
		              <div class="media-body pl-4">
		               <a href="servicios"> <h3 class="heading">MATERIA LABORAL</h3></a>
		               <p style="color:#666; font-size:0.9rem;">Asesoría preventiva y defensa patronal.</p>
		              </div>
		            </div>      
		          </div>
		          <div class="col-lg-6 d-flex align-self-stretch ftco-animate mb-4">
		            <div class="media block-6 services d-flex">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<a href="servicios"><span class="flaticon-bar-chart"></span></a>
		              </div>
		              <div class="media-body pl-4">
		                <a href="servicios"><h3 class="heading">MATERIA CORPORATIVA</h3></a>
		                <p style="color:#666; font-size:0.9rem;">Blindaje legal para empresas y contratos.</p>
		              </div>
		            </div>      
		          </div>
		        </div>
	        </div>
        </div>
			</div>
		</section>

        <section class="ftco-section ftc-no-pb" style="background:white;">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/bg_10.jpg); border-radius:8px;">
					</div>
					<div class="col-md-7 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section mb-5 pl-md-5">
	          	<div class="pl-md-5 ml-md-5">
		          	<span class="subheading" style="color:var(--bac-gold); font-weight:bold; letter-spacing:2px;">SOBRE NOSOTROS</span>
		            <h2 class="mb-4">BAC: Bufete de Asesores Corporativos S.C.</h2>
	            </div>
	          </div>
	          <div class="pl-md-5 ml-md-5 mb-5">
				<p style="line-height:1.8;">Somos una empresa socialmente responsable comprometidos con la conservación del medio ambiente. Así mismo contamos con Políticas y procesos internos que garantizan un servicio profesional y confiable para nuestros clientes.<br></p>
				<p><a href="nosotros" class="btn btn-primary px-4 py-3">Ver Más <span class="ion-ios-arrow-forward"></span></a></p>
			  </div>
			</div>
		</div>
	</div>
</section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg); position:relative;" data-stellar-background-ratio="0.5">
        <div class="overlay" style="background: rgba(10,25,47,0.85);"></div>    
        <div class="container">
    		<div class="row d-md-flex align-items-center">
    			<div class="col-lg-4">
    				<div class="heading-section pl-md-5 heading-section-white">
	          	<div class="ftco-animate">
		          	<span class="subheading" style="color:var(--bac-gold);">NUESTRA TRAYECTORIA</span>
		            <h2 class="mb-4">Resultados Reales</h2>
	            </div>
	          </div>
    			</div>
    			<div class="col-lg-8">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="600" style="color:var(--bac-gold);">0</strong>
		                <span>Clientes</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1000" style="color:var(--bac-gold);">0</strong>
		                <span>Demandas</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="980" style="color:var(--bac-gold);">0</strong>
		                <span>Casos de Éxito</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="600" style="color:var(--bac-gold);">0</strong>
		                <span>Reconocimientos</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section testimony-section" style="background:#fcfcfc;">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading" style="color:var(--bac-gold);">CONFIANZA EMPRESARIAL</span>
            <h2 class="mb-4">Principales Clientes</h2>
            <p>Infraestructura legal sólida para empresas líderes.</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
	
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/c4.jpg?v=2);"></div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">GRUAS Y AUTOTRANSPORTES MONARCAS S.A.</p> 
                  </div>
                </div>
              </div>

             <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/c6.jpg?v=2);"></div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">DISTRIBUIDORA DE EQUIPOS AZTECA (JCB)</p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/c7.png);"></div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">DISTRIBUIDORA DE CABLES DEL GOLFO</p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
					<div class="user-img mb-5" style="background-image: url(images/c8.png);"></div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">CERACOM TABASCO</p>
                  </div>
                </div>
              </div>

             <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/c9.png);"></div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">SERVICIOS INTEGRALES DE INGENIERÍA</p>
                  </div>
                </div>
              </div>

               <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/c14.jpg)"></div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">GRÚAS VELÁZQUEZ S.A. DE C.V.</p>
                  </div>
                </div>
              </div>
           
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/c1.jpg)"></div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">GRUPO FINANCIERO BANORTE</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
		
    <section class="ftco-section bg-primary">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading" style="color:var(--bac-gold);">NUESTRO MÉTODO</span>
            <h2 class="mb-4" style="color:white;">ANÁLISIS DEL CASO</h2>
            <p style="color:rgba(255,255,255,0.7);">En BAC nuestro proceso de trabajo es altamente estricto.</p>
          </div>
        </div>	
				<div class="row steps d-flex">
					<div class="col-md-4 d-flex ftco-animate">
						<div class="step d-flex align-self-stretch">
							<span>01.</span>
							<h3>REVISIÓN DE HECHOS</h3>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="step d-flex align-self-stretch">
							<span>02.</span>
							<h3>IDENTIFICACIÓN DE RIESGOS</h3>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="step d-flex align-self-stretch">
							<span>03.</span>
							<h3>ESTRATEGIA DE DEFENSA</h3>
						</div>
					</div>
				</div>
			</div>
		</section>

	<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          </div>
      </div>
  </div>
</section>

		<section class="ftco-section ftc-no-pb ftc-no-pt bg-light">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5" id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d948.678808110014!2d-92.93530117085074!3d17.99198099923244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTfCsDU5JzMxLjEiTiA5MsKwNTYnMDUuMSJX!5e0!3m2!1ses-419!2smx!4v1556639792065!5m2!1ses-419!2smx" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-7 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section mb-md-5 pl-md-5 mt-5 pt-3">
	          	<div class="pl-md-5 ml-md-5">
		          	<span class="subheading" style="color:var(--bac-gold);">CONTACTO</span>
		            <h2 class="mb-4">Hablemos de su Caso</h2>
	            </div>
	          </div>

	          <div class="pl-md-5 ml-md-5">
	          	<div class="info-contact mb-5">
	          		<p><span>Oficina:</span> <span><a href="tel:9933125003" style="color:var(--bac-navy); font-weight:bold;">(993) 312 5003</a></span></p>         		
	          		<p><span>Móvil:</span> <span><a href="tel:9933153171" style="color:var(--bac-navy); font-weight:bold;">(993) 315 3171</a></span></p>
	          		<p><span>WhatsApp Directo:</span>
		          	 <a target="_blank" href="https://api.whatsapp.com/send?phone=529934012539&text=Hola, necesito información legal." class="btn btn-primary px-3 py-1" style="border-radius:20px; font-size:0.8rem;">
	                     <img style="width: 18px; filter: brightness(0) invert(1); margin-right:5px;" src="images/wh2.png"> INICIAR CHAT
	                  </a>
	          		</p>
	          		<br><p><span>Email:</span> <span><a href="mailto:contacto@bacsc.com.mx" style="color:var(--bac-navy);">contacto@bacsc.com.mx</a></span></p>
	          	</div>
	          	<div class="info-contact mb-5">
	          		<h3>Ubicación</h3>
	          		<p><span></span> <span><a href="https://www.google.com/maps/place/Bufete+de+Asesores+Corporativos+S.C./@17.991541,-92.9356954,17.78z/data=!4m5!3m4!1s0x85edd82632734bb1:0x4c2e015333feb04e!8m2!3d17.9911539!4d-92.9349005" target="_blank" style="color:#666;">Cda. De Ernesto Malda 118 Col. José N. Rovirosa C.P. 86050, Villahermosa Tabasco.</a></span></p>
	          	</div>
						</div>
					</div>
				</div>
			</div>
		</section>

      <?php include("footer.php");?>
	  
</html>
