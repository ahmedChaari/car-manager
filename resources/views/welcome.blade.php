<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ config('app.name') }}</title>
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .log-style{
            margin-right: 13px;
            font-weight: bold;
        }
    </style>
	<script src="https://cdn.tailwindcss.com"></script>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider.min.css') }}">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container__wrapper mx-auto px-4">
			<div class="outer__header  py-2  lg:py-3 flex items-center justify-between">
				<div class="header__left flex items-center justify-start">
					<a href="#" class="inline-flex items-center justify-center"><img src="img/smallheader.svg" alt="smallheader"></a>
					<div class="header__menu">
						<ul class="flex items-center justify-start">
							<li class="py-2 lg:py-3"><a href="#" class="font-semibold text-base inline-flex items-center justify-center">Home</a></li>
							<li class="dropdown__menu relative py-2 lg:py-3" >
								<a href="#" class="font-semibold text-base inline-flex items-center justify-center">Finance <span class="inline-flex items-center ml-2"><img src="img/headerarrow.svg" alt="headerarrow"></span></a>
								<div class="dropdown__box" style="display:none;">
									<ul class="px-2 py-2">
										<li class="flex items-center justify-start w-full"><a href="#" class="text-sm lg:text-base flex items-center justify-start w-full px-2 py-1 lg:py-2 rounded-md">1</a></li>
										<li class="flex items-center justify-start w-full"><a href="#" class="text-sm lg:text-base flex items-center justify-start w-full px-2 py-1 lg:py-2 rounded-md">2</a></li>
										<li class="flex items-center justify-start w-full"><a href="#" class="text-sm lg:text-base flex items-center justify-start w-full px-2 py-1 lg:py-2 rounded-md">3</a></li>
										<li class="flex items-center justify-start w-full"><a href="#" class="text-sm lg:text-base flex items-center justify-start w-full px-2 py-1 lg:py-2 rounded-md">4</a></li>
									</ul>
								</div>
							</li>
							<li class="py-2 lg:py-3"><a href="#" class="font-semibold text-base inline-flex items-center justify-center">About</a></li>
							<li class="py-2 lg:py-3"><a href="#" class="font-semibold text-base inline-flex items-center justify-center">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="header__right flex items-center justify-end">
                    <a href="{{ route('login') }}"  class="whitespace-nowrap log-style">Log in</a>
					<a href="{{ route('sellers.create') }}" class="regular-btn h-12 py-3 px-5 text-white font-semibold rounded-md whitespace-nowrap inline-flex">Sign up</a>
					<div class="menu__button--header inline-flex ml-3 lg:hidden">
						<a href="#" class="inline-flex flex-col justify-center items-center">
							<span></span>
							<span></span>
							<span></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="home__wrapper">
		<div class="container__wrapper mx-auto px-4">
			<div class="outer__home">
				<div class="home__box">
					<a href="{{ route('sellers.create') }}">

						<h1 class="text-2xl sm:text-3xl xl:text-6xl mb-3 sm:mb-6 font-semibold epilogue hyperlink">Vendre une voiture n'a jamais <span class="vector__wrapper">été aussi</span> facile.</h1>
					</a> 
					<p class="text-base sm:text-lg xl:text-xl">Remplissez les informations de votre voiture en quelques secondes et vous serez contacté en moins de 24 heures.</p>
					<div class="home__form w-full">
						<form action="" class="w-full">
							<div class="group__wrapper flex items-center w-full mt-4 sm:mt-8 xl:mt-12">
								<div class="group__input group__dropdown relative w-full flex items-center mr-4">
									<input type="hidden">
									<a href="#" class="h-12 inline-flex items-center  justify-start relative w-full"><span class="text-sm not__active">Marque de ma voiture</span> <img src="img/arrowdown.svg" alt="arrowdown" class="arrow"></a>
									<div class="dropdown__box">
										<ul class="px-2 py-2">
											<li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">1</a></li>
											<li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">2</a></li>
											<li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">3</a></li>
											<li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">4</a></li>
											<li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">5</a></li>
											<li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">6</a></li>
											<li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">7</a></li>
											<li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">8</a></li>
											<li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">9</a></li>
											<li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">10</a></li>
											<li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">11</a></li>
											<li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">12</a></li>
										</ul>
									</div>
								</div>
								<div class="group__submit">
									<button type="submit" class="regular-btn h-12 py-3 px-5 text-white font-semibold rounded-md whitespace-nowrap">Vendre ma voiture</button>
								</div>
							</div>
							<p class="text-sm mt-1">En savoir plus sur notre <a href="#">politique de confidentialité</a>.</p>
						</form>
					</div>
					<div class="list__home mt-4 sm:mt-8 xl:mt-12">
						<ul>
							<li class="flex items-center justify-start mb-3 md:mb-5 text-sm sm:text-base md:text-lg"><span class="inline-flex items-center justify-center mr-3 "><img src="img/checkhero.svg" alt="checkhero"></span> Formulaire facile à remplir.</li>
							<li class="flex items-center justify-start mb-3 md:mb-5 text-sm sm:text-base md:text-lg"><span class="inline-flex items-center justify-center mr-3 "><img src="img/checkhero.svg" alt="checkhero"></span> Recevez des prix raisonnables.</li>
							<li class="flex items-center justify-start text-sm sm:text-base md:text-lg"><span class="inline-flex items-center justify-center mr-3 "><img src="img/checkhero.svg" alt="checkhero"></span> Vendez votre voiture sur place.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="offers__wrapper pt-10 lg:pt-16">
		<div class="container__wrapper mx-auto px-4">
			<div class="outer__offers">
				<div class="offers__top mb-8 lg:mb-16 pl-0 lg:pl-5">
					<span class="block mb-3 font-semibold">Now Advantage</span>
					<h6 class="mb-3 lg:mb-5 font-semibold  text-xl md:text-2xl lg:text-4xl">Nous reprenons votre voiture, au meilleur prix de reprise garanti !</h6>
					<p class="text-lg lg:text-xl">Texte pour lister nos avantages</p>
				</div>
				<div class="offers__main flex flex-col-reverse lg:flex-row items-center justify-between">
					<div class="offers__list mt-4 lg:mt-0 mr-0 lg:mr-12 w-full">
						<div class="el__offer py-4 pr-4">
							<h6 class=" mb-2 font-semibold  text-lg lg:text-xl">Une estimation gratuite et sans engagement</h6>
							<p class="text-base mb-5">CarCash vous propose un tarif pour la reprise de votre voiture par un professionnel de l'automobile sans obligation d'achat d'un véhicule neuf.</p>
							<div class="offer__button flex items-center justify-start">
								<a href="#" class="inline-flex items-center  text-sm lg:text-base font-semibold">Apprendre encore plus <span class="inline-flex ml-2"><img src="img/offerarrow.svg" alt="offer"></span></a>
							</div>
						</div>
						<div class="el__offer py-4 pr-4">
							<h6 class=" mb-2 font-semibold  text-lg lg:text-xl">Un prix de rachat fiable</h6>
							<p class="text-base mb-5">L'estimation du prix de rachat VoitureCash tient compte de l'âge de votre voiture.</p>
							<div class="offer__button flex items-center justify-start">
								<a href="#" class="inline-flex items-center  text-sm lg:text-base font-semibold">Apprendre encore plus <span class="inline-flex ml-2"><img src="img/offerarrow.svg" alt="offer"></span></a>
							</div>
						</div>
						<div class="el__offer py-4 pr-4">
							<h6 class=" mb-2 font-semibold  text-lg lg:text-xl">Une vente rapide et un paiement garanti</h6>
							<p class="text-base mb-5">Des professionnels, sélectionnés par VoitureCash pour leur sérieux, s'engagent à racheter votre véhicule immédiatement.</p>
							<div class="offer__button flex items-center justify-start">
								<a href="#" class="inline-flex items-center  text-sm lg:text-base font-semibold">Apprendre encore plus <span class="inline-flex ml-2"><img src="img/offerarrow.svg" alt="offer"></span></a>
							</div>
						</div>
					</div>
					<div class="offers__image inline-flex">
						<img src="img/offerimage.webp" alt="offerimage">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="quote__wrapper">
		<div class="container__wrapper mx-auto px-4">
			<div class="outer__quote">
				<div class="quote__elem mx-auto bg-white px-6 py-8 text-center">
					<div class="quote__top mb-7">
						<span class="font-semibold font-base text-sm sm:text-base">Mr. Idrissi</span>
						<p class="text-sm sm:text-base">Directeur General</p>
					</div>
					<div class="quote__bottom">
						<p class="text-base sm:text-lg lg:text-xl  font-medium">“If your vehicle is between 3 and 7 years old, in good condition, small sedan or large city car, we are buyers”</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="newsletter__wrapper">
		<div class="container__wrapper mx-auto px-4">
			<div class="outer__newsletter flex-col lg:flex-row flex items-start justify-between">
				<div class="newsletter__desc mb-5 lg:mb-0">
					<p class=" mb-3 lg:mb-5 text-white font-semibold text-2xl lg:text-4xl">Inscrivez-vous a la newsletter</p>
					<span class="text-base sm:text-lg lg:text-xl">Soyer les premier a recoivre les nouveautés sur voiturecash.ma</span>
				</div>
				<div class="newsletter__form w-full ml-0 lg:ml-4">
					<form action="" class="w-full">
						<div class="group__wrapper flex-col sm:flex-row flex items-center justify-end w-full">
							<div class="group__input w-full">
								<input type="text" placeholder="Enter your email" class="dmsans  w-full bg-white h-12 male pl-4 text-base pr-4">
							</div>
							<div class="group__submit w-full sm:w-auto  ml-0 sm:ml-4 mt-2 sm:mt-0">
								<button type="submit" class="w-full sm:w-auto py-3 px-5 text-white text-base font-semibold">Inscription</button>
							</div>
						</div>
						<p class="text-sm mt-1">Informez vous sur notre politique de confidentialité.</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer class="long__footer bg-white pt-8  md:pt-16 pb-6 md:pb-12">
		<div class="container__wrapper mx-auto px-4">
			<div class="outer__footer grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-x-8 mx-auto gap-y-12">
				<div class="footer__elem">
					<p class="text-sm mb-4  light__grey font-semibold">Product</p>
					<ul>
						<li class="mb-3  flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Overview</a></li>
						<li class="mb-3  flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Features</a></li>
						<li class="mb-3  flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Solutions <span class="new">New</span></a></li>
						<li class="mb-3  flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Tutorials</a></li>
						<li class="mb-3  flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Pricing</a></li>
						<li class="flex items-center  justify-start"><a href="#" class="font-semibold text-sm md:text-base">Releases</a></li>
					</ul>
				</div>

				<div class="footer__elem">
					<p class="text-sm mb-4  light__grey font-semibold">Company</p>
					<ul>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">About us</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Careers</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Press</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">News</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Media kit</a></li>
						<li class="flex items-center  justify-start"><a href="#" class="font-semibold text-sm md:text-base">Contact</a></li>
					</ul>
				</div>

				<div class="footer__elem">
					<p class="text-sm mb-4  light__grey font-semibold">Resources</p>
					<ul>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Blog</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Newsletter</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Events</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Help centre</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Tutorials</a></li>
						<li class="flex items-center  justify-start"><a href="#" class="font-semibold text-sm md:text-base">Support</a></li>
					</ul>
				</div>

				<div class="footer__elem">
					<p class="text-sm mb-4  light__grey font-semibold">Use cases</p>
					<ul>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Startups</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Enterprise</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Government</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">SaaS centre</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Marketplaces</a></li>
						<li class="flex items-center  justify-start"><a href="#" class="font-semibold text-sm md:text-base">Ecommerce</a></li>
					</ul>
				</div>

				<div class="footer__elem">
					<p class="text-sm mb-4  light__grey font-semibold">Social</p>
					<ul>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Twitter</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">LinkedIn</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Facebook</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">GitHub</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">AngelList</a></li>
						<li class="flex items-center  justify-start"><a href="#" class="font-semibold text-sm md:text-base">Dribbble</a></li>
					</ul>
				</div>

				<div class="footer__elem">
					<p class="text-sm mb-4  light__grey font-semibold">Legal</p>
					<ul>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Terms</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Privacy</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Cookies</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Licenses</a></li>
						<li class="mb-3 flex items-center justify-start"><a href="#" class="font-semibold text-sm md:text-base">Settings</a></li>
						<li class="flex items-center justify-start"><a href="#" class="font-semibold text-base">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="footer__bottom pt-4 md:pt-8 mt-8 md:mt-16">
				<p class="text-sm md:text-base text-center light__grey">© 2022 voiturecash.ma All rights reserved.</p>
			</div>
		</div>
	</footer>
	<script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>
	<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>