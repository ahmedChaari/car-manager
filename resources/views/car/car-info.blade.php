@extends('layouts.admin')
@section('content')
<div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
					<div class="head__filter flex-col md:flex-row flex items-start md:items-center justify-between mb-4 md:mb-7">
						<h6 class="font-medium m-0  text-base lg:text-lg dark__grey">Enchères en direct</h6>
					</div>
					
				<div class="product__wrapper bg-white flex-col md:flex-row  flex justify-between py-4 px-3 pr-3 md:pr-8">
					<div class="product__gallery mb-5 md:mb-0 w-full  mr-0 md:mr-6 lg:mr-12 xl:mr-20">
						<div class="main__image w-full">
							<img src="{{ asset('img/mainimage.webp') }}" alt="mainimage">
						</div>
						<div class="main__switcher grid grid-cols-5">
							<div class="elem__switch current__switch cursor-pointer inline-flex items-center justify-center" data-switch="{{ asset('img/mainimage.webp') }}">
								<img src="{{ asset('img/mainimage.webp') }}" alt="mainimage">
							</div>
							<div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="{{ asset('assets/img/mainimage2.webp') }}">
								<img src="{{ asset('img/mainimage2.webp') }}" alt="mainimage">
							</div>
							<div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="{{ asset('img/mainimage3.webp') }}">
								<img src="{{ asset('img/mainimage3.webp') }}" alt="mainimage">
							</div>
							<div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="{{ asset('img/mainimage.webp') }}">
								<img src="{{ asset('img/mainimage.webp') }}" alt="mainimage">
							</div>
							<div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="{{ asset('img/mainimage2.webp') }}">
								<img src="{{ asset('img/mainimage2.webp') }}" alt="mainimage">
							</div>
							<div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="{{ asset('img/mainimage3.webp') }}">
								<img src="{{ asset('img/mainimage3.webp') }}" alt="mainimage">
							</div>
							<div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="{{ asset('img/mainimage.webp') }}">
								<img src="{{ asset('img/mainimage.webp') }}" alt="mainimage">
							</div>
							<div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="{{ asset('img/mainimage2.webp') }}">
								<img src="{{ asset('img/mainimage2.webp') }}" alt="mainimage">
							</div>
							<div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="{{ asset('img/mainimage3.webp') }}">
								<img src="{{ asset('img/mainimage3.webp') }}" alt="mainimage">
							</div>
							<div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="{{ asset('img/mainimage3.webp') }}">
								<img src="{{ asset('img/mainimage3.webp') }}" alt="mainimage">
							</div>
						</div>
					</div>
					<div class="product__description w-full">
						<div class="head__description mb-5">
							<p class="font-semibold dark__grey text-xl md:text-2xl">{{ $car->brand }} {{ $car->model }}</p>
							<span class="font-medium text-base md:text-lg">Price : <span class="font-semibold">{{ number_format($car->price , 2) }} DH</span></span>
						</div>
						<div class="content__description mb-4">
							<p class="text-xs light__grey">La Dodge Charger SXT AWD est une bête. Je l'ai depuis près de six ans maintenant, et je l'ai conduite sur les routes de montagne, en ville et même à la mort une fois. C'est une excellente voiture polyvalente qui peut gérer tout ce que vous lui lancez.</p>
						</div>
						<div class="grid__description grid grid-cols-2 gap-x-10">
							<div class="row__wrapper">
								<div class="column__description flex items-center justify-between mb-2">
									<p class="m-0 text-sm font-medium dark__grey text-left mr-2">Boîte de vitesses</p>
									<span class="text-sm light__grey text-right"> {{ $car->gearbox }}</span>
								</div>
								<div class="column__description flex items-center justify-between mb-2">
									<p class="m-0 text-sm font-medium dark__grey text-left mr-2">Date ajoutée</p>
									<span class="text-sm light__grey text-right">{{ \Carbon\Carbon::parse($car->created_at)->format('M Y') }}</span>
								</div>
								<div class="column__description flex items-center justify-between mb-2">
									<p class="m-0 text-sm font-medium dark__grey text-left mr-2">Kilométrage</p>
									<span class="text-sm light__grey text-right">{{ $car->mileage }} Km</span>
								</div>
								
								<div class="column__description flex items-center justify-between">
									<p class="m-0 text-sm font-medium dark__grey text-left mr-2">Origine</p>
									<span class="text-sm light__grey text-right">{{ $car->origin }}</span>
								</div>
							</div>

							<div class="row__wrapper">
								<div class="column__description flex items-center justify-between mb-2">
									<p class="m-0 text-sm font-medium dark__grey text-left mr-2">Première main</p>
									<span class="text-sm light__grey text-right">{{ $car->first_hand }}</span>
								</div>
								<div class="column__description flex items-center justify-between mb-2">
									<p class="m-0 text-sm font-medium dark__grey text-left mr-2">Carburant</p>
									<span class="text-sm light__grey text-right">{{ $car->fuel }}</span>
								</div>
								<div class="column__description flex items-center justify-between mb-2">
									<p class="m-0 text-sm font-medium dark__grey text-left mr-2">Ville</p>
									<span class="text-sm light__grey text-right">{{ $car->city }}</span>
								</div>
								<div class="column__description flex items-center justify-between mb-2">
									<p class="m-0 text-sm font-medium dark__grey text-left mr-2">État de la voiture</p>
									<span class="text-sm light__grey text-right">{{ $car->condition_car }}</span>
								</div>
								<div class="column__description flex items-center justify-between">
									<p class="m-0 text-sm font-medium dark__grey text-left mr-2">année de fabrication</p>
									<span class="text-sm light__grey text-right">{{ \Carbon\Carbon::parse($car->date_car)->format('Y') }}</span>
								</div>
							</div>
						</div>
						<form action="" class="mt-7 w-full">
							<div class="bid__buttons w-full grid grid-cols-1 gap-y-3 sm:grid-cols-2 gap-x-3 xl:gap-x-7">
								<a href="#" class="outline-btn inline-flex items-center justify-center font-medium text-sm">{{ number_format($car->price , 2) }} DH</a>
								<a href="#" class="regular-btn inline-flex items-center justify-center font-medium text-white text-sm">{{ number_format($car->price , 2) }} DH</a>
							</div>
						</form>
					</div>
				</div>
				<div class="product__grid grid  grid-cols-1 gap-y-3 xl:grid-cols-3 gap-x-6 mt-6">
					<div class="elem__product pl-3 md:pl-6 pr-3 py-4 bg-white flex items-center justify-start">
						<span class="inline-flex items-center justify-center  mr-4"><img src="{{ asset('img/icon1.svg')}}" alt="icon"></span>
						<div class="product__info">
							<p class="light__grey text-sm font-medium">Se ferme dans</p>
							<div class="product__timer flex items-center justify-start">
								<div class="el__time text-center mr-9">
									<p class="text-lg sm:text-xl md:text-2xl font-semibold">13</p>
									<span class="font-semibold text-sm">Days</span>
								</div>
								<div class="el__time text-center mr-9">
									<p class="text-lg sm:text-xl md:text-2xl font-semibold">05</p>
									<span class="font-semibold text-sm">Hours</span>
								</div>
								<div class="el__time text-center ">
									<p class="text-lg sm:text-xl md:text-2xl font-semibold">25</p>
									<span class="font-semibold text-sm">Minutes</span>
								</div>
							</div>
						</div>
					</div>

					<div class="elem__product pl-3 md:pl-6 pr-3 py-4 bg-white flex items-center justify-start">
						<span class="inline-flex items-center justify-center  mr-4"><img src="{{ asset('img/icon2.svg')}}" alt="icon"></span>
						<div class="product__info">
							<p class="light__grey text-sm font-medium">enchères partagées restantes</p>
							<h6 class="font-semibold text-lg sm:text-xl md:text-2xl">156,000 <span class="text-sm font-semibold">DH</span></h6>
						</div>
					</div>

					<div class="elem__product pl-3 md:pl-6 pr-3 py-4 bg-white flex items-center justify-start">
						<span class="inline-flex items-center justify-center  mr-4"><img src="{{ asset('img/icon3.svg')}}" alt="icon"></span>
						<div class="product__info">
							<p class="light__grey text-sm font-medium">nombre de vues</p>
							<div class="product__double flex-wrap flex items-start sm:items-center justify-start">
								<div class="el__double">
									<p class="font-semibold text-lg sm:text-xl md:text-2xl ">{{ $car->number_view }} <span class="text-sm font-semibold">views</span></p>
								</div>
								<span  class="mx-2">/</span>
								<div class="el__double">
									<p class="font-semibold text-lg sm:text-xl md:text-2xl ">{{ $car->number_click }} <span class="text-sm font-semibold">Clicks</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

@endsection