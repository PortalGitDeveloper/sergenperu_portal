@extends('layouts.main') @section('content')

<!-- Banner -->
<section id="banner">
	<h2>SERGEN PER&Uacute;</h2>
	<p>
		Protecci&oacute;n y seguridad privada<br> 24 horas / 7 d&iacute;as a
		la semana / 365 d&iacute;as al a&ntilde;o
	</p>
	<ul class="actions">
		<li><a href="#meetus" class="button special">Con&oacute;cenos</a></li>
		<li><a href="#findus" class="button">Ub&iacute;canos</a></li>
	</ul>
</section>

<!-- Main -->
<section id="main" class="container">

	<section class="box special">
		<header class="major">
			<h2>Somos excelencia moral y alta productividad.</h2>
			<p>Trabajamos para ofrecer la mejor experiencia a nuestros clientes.
			</p>
		</header>
		<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
	</section>

	<section class="box special features">
		<a id="services"></a>
		<div class="features-row">
			<section>
				<span class="icon major fa-shield accent1"></span>
				<h3>Protecci&oacute;n y seguridad privada</h3>
				<p>Nuestros agentes de seguridad reciben una constante
					instrucci&oacute;n militar que nos posiciona como una oferta
					competente y comprometida con nuestros clientes.</p>
			</section>
			<section>
				<span class="icon major fa-bolt accent2"></span>
				<h3>Sistemas electr&oacute;nicos de seguridad</h3>
				<p>Contamos con dispositivos y t&eacute;cnicos especializados en el
					despliegue estrat&eacute;gico de sistemas electr&oacute;nicos
					orientados a la protecci&oacute;n, prevenci&oacute;n, y seguridad
					global.</p>
			</section>
		</div>
		<div class="features-row">
			<section>
				<span class="icon major fa-star accent3"></span>
				<h3>Operaciones especiales</h3>
				<p>Desplegamos operativos particulares, seguridad sobre medios de
					transporte, b&uacute;squedas dedicadas, y eventos particulares.</p>
			</section>
			<section>
				<span class="icon major fa-eye accent4"></span>
				<h3>Investigaci&oacute;n de antecedentes</h3>
				<p>Consulta con nuestros especialistas en validaci&oacute;n y
					obtenci&oacute;n de antecedentes de personas u organizaciones con
					la asesor&iacute;a legal del caso.</p>
			</section>
		</div>
		<div class="features-row">
			<section>
				<span class="icon major fa-align-justify accent5"></span>
				<h3>Instrucci&oacute;n y capacitaci&oacute;n</h3>
				<p>Contamos con instructores militares y especialistas en temas de
					prevenci&oacute;n, monitoreo, y control frente a situaciones de
					riesgo, accidentes, desastres naturales, e inseguridad.</p>
			</section>
			<section>
				<span class="icon major fa-area-chart accent6"></span>
				<h3>Administraci&oacute;n</h3>
				<p>Muchas veces, directivas y nuevas organizaciones requieren de
					asesor&iacute;a y direcci&oacute;n legal y contable que nuestros
					especialistas pueden gestionar con &oacute;ptimos resultados.</p>
			</section>
		</div>
		<div class="features-row">
			<section>
				<span class="icon major fa-wrench accent7"></span>
				<h3>Mantenimiento</h3>
				<p>Contamos con un excelente equipo de t&eacute;cnicos y
					especialistas en mantenimiento y monitoreo de infraestructuras,
					sistemas el&eacute;ctricos, potables, y log&iacute;stica.</p>
			</section>
			<section>
				<span class="icon major fa-tree accent8"></span>
				<h3>Jardiner&iacute;a</h3>
				<p>Nuestro equipo de jardiner&iacute;a ornamental y mantenimiento de
					&aacute;reas verdes cuenta con experiencia en viviendas,
					urbanizaciones, distritos, y organizaciones.</p>
			</section>
		</div>
		<div class="features-row">
			<section>
				<span class="icon major fa-envelope accent9"></span>
				<h3>Mensajer&iacute;a</h3>
				<p>Transportamos correspondencias, equipos, u otros activos mediante
					sistemas de seguimiento y monitoreo de manera confiable, segura, y
					puntual.</p>
			</section>
			<section>
				<span class="icon major fa-group accent10"></span>
				<h3>Asesoramiento</h3>
				<p>Resolvemos sus problemas estrat&eacute;gicas, de seguridad,
					legales, contables, y tributarios con nuestros especialistas y
					profesionales de experiencia.</p>
			</section>
		</div>
	</section>

	<div class="row">
	
		<div class="6u 12u(narrower)">
			<a id="meetus"></a>
			<section class="box special">
				<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
				<h3>Nuestro fundador y actual director</h3>
				<p>Miembro activo de las Fuerzas Armadas del Per&uacute; con
					m&aacute;s de 30 a&ntilde;os de experiencia y abogado de
					profesi&oacute;n.</p>
			</section>

		</div>

		<div class="6u 12u(narrower)">
			<a id="findus"></a>
			<section class="box special">
				<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
				<h3>Cada d&iacute;a somos m&aacute;s</h3>
				<p>Somos una gran familia con miembros excepcionales y una
					s&oacute;lida presencia en el mercado nacional.</p>
			</section>

		</div>
	</div>

</section>

<!-- CTA -->
<section id="cta">

	<h2>Cont&aacute;ctenos</h2>
	<p>Escr&iacute;banos, ll&aacute;menos, o vis&iacute;tenos. Ser&aacute;
		un placer conversar con usted.</p>

	<form>
		<div class="row uniform 50%">
			<div class="12u 12u(mobilep)">
				<input type="email" placeholder="info@sergenperu.com"
					disabled="disabled" />
			</div>
		</div>

		<div class="row uniform 50%">
			<div class="12u 12u(mobilep)">
				<input type="text"
					placeholder="(01) 797 1646 / RPC 984 799 588 / RPC 998 764 495"
					disabled="disabled" />
			</div>
		</div>

		<div class="row uniform 50%">
			<div class="12u 12u(mobilep)">
				<input type="text"
					placeholder="Jr. Lampa 1137, Of. 404, Lima Cercado, Lima, Per&uacute;"
					disabled="disabled" />
			</div>
		</div>
	</form>

</section>

@endsection
