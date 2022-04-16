<!DOCTYPE HTML>
<html>
<head>
	<title>Asos Altınkum Motel</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<h1><a href="https://www.facebook.com/asosaltinkummotel/">Daha fazla bilgi için facebook sayfamızı ziyaret edin.</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="/" class="icon fa-home">Motelimiz</a></li>
						<li><a href="/fotograflar" class="icon fa-image">Fotoğraflar</a></li>
						<li><a href="/mesajlar" class="icon fa-comment-o">Misafirlerimizden Mesajlar</a></li>
						<li><a href="/ulasim" class="icon fa-map-signs">Ulaşım</a></li>
						<li><a href="/rezervasyon" class="button">Yerinizi ayırtın</a></li>
					</ul>
				</nav>
			</header>

			<!-- Main -->
				<section id="main" class="container" style="margin-top:100px">

					<div class="row">
						<div class="12u">

							<!-- Form -->
							<section class="box">
								<h3>Rezervasyon Formu</h3>
								<form method="post" action="#" class="uk-form">
									<div class="row uniform 50%">
										<div class="6u 12u(mobilep)">
											<input type="text" name="name" id="name" value="" placeholder="İsim Soyisim" />
										</div>
										<div class="6u 12u(mobilep)">
											<input type="text" name="phone" id="email" value="" placeholder="Telefon" />
										</div>
									</div>
									<div class="row uniform 50%">
										<div class="12u">
											<div class="select-wrapper">
												<select name="room" id="category">
													<option value="">- Oda Tercihinizi Seçin -</option>
													<option value="Çatı Katı, Vantilatörlü">Çatı Katı, Vantilatörlü</option>
													<option value="Diğer Katlar, Klimalı">Diğer Katlar, Klimalı</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row uniform 50%">
                                        <div class="6u 12u(mobilep)">
                                            <input type="text" name="departing" placeholder="Geleceğiniz Tarih" id="departing">
                                        </div>
                                        <div class="6u 12u(mobilep)">
                                            <input type="text" name="returning" placeholder="Ayrılacağınız Tarih" id="returning">
                                        </div>
									</div>
									<div class="row uniform 50%">
										<div class="12u">
											<textarea name="message" id="message" placeholder="Size en iyi hizmeti verebilmemiz için kaç kişi geleceğinizi ve varsa bize özel notunuzu buraya yazabilirsiniz." rows="6"></textarea>
										</div>
									</div>
									<div class="row uniform">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" value="Rezervasyonu Onayla" /></li>
											</ul>
										</div>
									</div>
                                    {{ csrf_field() }}
								</form>

							</section>

						</div>
					</div>

				</section>

		</div>
	</body>
</html>
