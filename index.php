<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Inicio</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./assets/css/main.css" />
		<link rel="stylesheet" href="./assets/css/sidebar.css" />
		<link rel="stylesheet" href="./assets/css/slider.css" />
		<link rel="stylesheet" href="./assets/css/responsive/respo.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="assets/js/custom.js"></script>

		<!-- Swiper CSS-->
		<link rel="stylesheet" href="assets/css/swiper-bundle.min.css"/>
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">
						<!-- Nav -->
						<nav id="nav">
                            <a href="./index.php">
                                <div id="div-logo">
                                    <img src="assets/imagens/logo-gaming.webp" alt="" id="logo-side">
                                </div>
                            </a>
                            <!-- Logo -->
                            <ul>
                                <li><a href="./product.php">Loja</a></li>
                                <li><a href="./promotion.php">Promoção</a></li>
                                <li><a href="./contact.php">Contato</a></li>
                                <li>
                                        <a href="{{ route('login"><i class="fa-solid fa-circle-user" style="position: relative; font-size: 16px; top: 2%; color: #fff;"></i>&nbsp; Entrar
                                        <ul>
                                            <li>
                                                    <a href="{{ route('register"><i class="fa-solid fa-user-pen" style="position: relative; font-size: 16px; top: 4%;"></i>&nbsp; Cadastro</a>
                                            </li>
                                        </ul>
                                        </a>
                                    <a href="#"><i class="fa-solid fa-circle-user" style="position: relative; font-size: 16px; top: 1%; color: #fff;"></i>&nbsp; user
                                        <ul>
                                            <li>
                                            <a href="{{ route('logout" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="fa-solid fa-right-from-bracket" position: relative; font-size: 16px; top: 4%;></i>&nbsp;Sair
                                            </a>

                                            <form id="logout-form" action="{{ route('logout" method="POST" class="d-none">
                                            </li>
                                        </ul>
                                    </a>
                                </li>
                                <li style="position: relative; top: -0.5em; white-space: nowrap;">
                                    <a href="" id="open-carrinho" style="text-decoration: none; background: none;">
                                        <img src="assets/imagens/carrinho.png" alt="Carrinho de compras" id="carrinho" style="text-decoration: none; background: none;" onclick="openNav()">
                                        <span id="carrinho-num-prod" onclick="openNav()" style="text-decoration: none; background: none;">1</span>
                                    </a>

                                    <div id="mySidebar" class="sidebar">
                                        <span id="carrinho-produtos" href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="text-decoration: none; background: none;">X<span style="text-decoration: none; background: none;">Carrinho</span></span>
                                        <hr id="hr1">
										
                                            <div id="produto-carrinho">
                                                <div><img src="" alt="" width="100px" height="84px"></div>
                                                <div id="info-card-pro">
                                                    <h1>Nome</h1>
                                                    <p style="bottom: 1rem; font-size: 18px;">R$ 100</p>
                                                    <div style="width: 12px;">
                                                        <div id="Input_Number" id="posi-input">
                                                            <span id="input_plus" type="button" onclick="maisItem('')" class="arrow-up chargeQuantity"><i class="fas fa-caret-up"></i></span>
                                                            <span id="input_minus" type="button" onclick="menosItem('')" class="arrow-down chargeQuantity"><i class="fas fa-caret-down"></i></span>
                                                            <input value="" min="0" readonly="readonly" class="qty-input" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="subtotal_cart">
                                                <h2>Subtotal</h2>
                                                <p>R$ 100</p>
                                            </div>
                                            
                                        
                                        <hr id="hr2">
                                        <button id="entrar_card" class="button_card"><a id="a-link" href="">Ver carrinho</a></button>
                                    </div>
                                </li>
                            </ul>
                        </nav>
					</header>
				</div>
                <div id="img-rw">

				</div>

				<!-- Banner -->
					<div id="banner-wrapper">
						<div id="banner" class="">
							<div class="row" id="subir">
								<div class="row" id="abs-info">
									<div id="card-info" class="col-2 col-12-medium">
										<h4>Produto</h4>
										<h2>CYBER KID INFINITE</h2>
										<p>Tenha o melhor desempenho nos jogos com essa funcionalidade incrivel</p>
										<a href="#" id="produto-prin"><span id="now-buy">Compre agora</span></a>
									</div>
									<div class="col-2 col-12-medium" id="img-slide">
										<img src="assets/imagens/Cyber_copy.webp" alt="" id="card-img">
									</div>
								</div>
							</div>
						</div>
					</div>

			<!-- Features -->
				<!-- <div id="features-wrapper">
					<div class="container" id="features-up"> -->
						<div id="top-produ">
							<div id="position">
								<h2 id="produtos">OS MELHORES</h2><a href=""><button id="buttom-produtos">VER TODOS</button></a>
							</div>
							<div class="slide-container swiper">
                                <div class="slide-content">
                                    <div class="card-wrapper swiper-wrapper">
										    <div class="card swiper-slide">
											<div class="image-content">
												<span class="overlay"></span>
												<a href=""><div class="card-image zoom">
													<img src="./assets/imagens/cadeira2.webp" alt="" class="card-img">
												</div></a>
											</div>
											<div class="card-content">
											    <a href=""><h2 class="name">Nome</h2></a>
												<p class="description">R$&nbsp;100</p>
												<a href=""><button class="button">Adicionar</button></a>
											</div>
										</div>
                                        
									</div>
								</div>
								<div class="swiper-button-next swiper-navBtn"></div>
								<div class="swiper-button-prev swiper-navBtn"></div>
								<div class="swiper-pagination"></div>
							</div>
						</div>
					<!-- </div>
				</div> -->

			<!-- Main -->
			<section id="categoriaa">
					<div id="categori-titulo">
						<h1 id="titulo-cat">Categorias</h1>
					</div>
					<div class="container" id="pso">
						<div class="categorias">
							
							<div class="img">
								<a class="zoom" href="">
									<img src="./assets/imagens/console5.webp">
								</a>
								<h2 class="categoria-nome">Controle</h2>
							</div>
							
						</div>
					</div>
			</section>

			<section id="destaque">
				<div id="sobrepo">
				    <div class="container" id="info-2-destaque">
				    	<div id="card-info-2" class="">
				    		<h4>Semana de promoção</h4>
				    		<h2>10% em todos os jogos</h2>
				    		<a href="#" id="produto-prin-2"><span class="now-buy">Comprar agora</span></a>
				    	</div>
				    </div>
					<div class="prime">
						<a href=""><img src="assets/imagens/Kira.webp" alt="" class="card-info-2" id="prime"></a>
					</div>
					<div class="segu">
						<a href=""><img src="assets/imagens/Dead at Last.webp" class="card-info-2" id="segu"></a>
					</div>
					<div class="terce">
						<a href=""><img src="assets/imagens/Chronosplit.webp" class="card-info-2" id="terce"></a>
					</div>
				</div>
			</section>


			<!-- SLIDE DOS PRODUTOS -->
			<section>
				<div id="top-produ-3">
					<div id="position-3">
						<h2 id="produtos-3">ATUALIZE SEU EQUIPAMENTO</h2><a href=""><button id="buttom-produtos-3">VER TODOS</button></a>
					</div>
					<div class="slide-container swiper">
						<div class="slide-content">
							<div class="card-wrapper swiper-wrapper">
								<div class="card swiper-slide">
									<div class="image-content">
										<span class="overlay"></span>
										<a href=""><div class="card-image zoom">
											<img src="./assets/imagens/cadeira2.webp" alt="" class="card-img">
										</div></a>
									</div>
									<div class="card-content">
										<a href=""><h2 class="name">Nome</h2></a>
										<p class="description">R$&nbsp;100</p>
										<a href=""><button class="button">Comprar agora</button></a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-button-next swiper-navBtn"></div>
						<div class="swiper-button-prev swiper-navBtn"></div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</section>

			<section id="promo-fundo">
				<div class="container-image" id="img-cort">
					<img src="assets/imagens/acessorios-art.webp" class="centralize-image" alt="" id="acessorios-full">
				</div>
				<div class="container" id="infos-promo">
					<h2>GASTE E ECONOMIZE</h2>
					<p>Economize 20% ao gastar mais de R$ 125,00</p>
					<button id="buttom-produtos-4">Comprar agora</button>
				</div>
			</section>



			<section class="newsletter">
				<div class="container-image1" id="img-cort1">
					<div>
						<h2 class="info-news">NEWSLETTER</h2>
						<p id="info-news-p">Inscreva-se para receber atualizações sobre novos produtos e ofertas especiais</p>
					</div>
					<form action="">
						<label id="label-news" for="email">E-mail</label>
						<input type="email" name="email" id="email-news">
						<button id="button-news" type="submit">Me escrever</button>
					</form>
				</div>
					<div id="img-div-2">
						<img src="assets/imagens/Games stack copy.webp" id="listgames" alt="">
					</div>
				<div class="container-image2" id="img-div-3">
					
				</div>
			</section>

			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3 class="h3-style">Páginas Principais</h3>
										<ul class="style2">
											<li><a href="#">Cheats para CS:GO</a></li>
											<li><a href="#">Cheats para Free Fire</a></li>
											<li><a href="#">Cheats para Outros Jogos</a></li>
											<li><a href="#">Crie sua conta</a></li>
											<li><a href="#">Entre em contato</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3 class="h3-style">Links úteis</h3>
										<ul class="style2">
											<li><a href="#">Dúvidas Frequentes</a></li>
											<li><a href="#">Tutoriais das Versões</a></li>
											<li><a href="#">Status das Versões</a></li>
											<li><a href="#">Termos e Condições de Uso</a></li>
											<li><a href="#">Política de Reembolso</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3 class="h3-style">Novidades</h3>
										<ul class="style2">
											<li><a href="#">Triggerbot para Valorant</a></li>
											<li><a href="#">Boost de FPS para CS:GO</a></li>
											<li><a href="#">Macro para Free Fire</a></li>
											<li><a href="#">Auxílio de Granadas</a></li>
											<li><a href="#">Auxílio de Granadas</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Contact -->
									<section class="widget contact last">
										<h3 class="h3-style">Nossos contatos</h3>
										<ul>
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
										</ul>
										<p>1234 Fictional Road<br />
										Nashville, TN 00000<br />
										(800) 555-0000</p>
									</section>

							</div>
						</div>
							<div class="col-12">
								<div id="copyright">
									<h1>Todos os direitos reservados</h1>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/sidebar.js"></script>
			<script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>

			<!-- Swiper Js-->
			<script src="assets/js/swiper-bundle.min.js"></script>
			<script src="assets/js/swiper.js"></script>
	</body>
</html>
