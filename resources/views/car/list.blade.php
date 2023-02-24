@extends('layouts.admin')
@section('content')


<div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
				
	<div class="head__filter flex-col xl:flex-row flex items-start xl:items-center justify-between mb-4 md:mb-7">
		<h6 class="font-medium m-0  text-base lg:text-lg dark__grey">Les voitures</h6>
		<div class="controls__tab flex-wrap w-full md:w-auto  flex items-center justify-start md:justify-end ml-0  mt-3 xl:mt-0 xl:ml-4">
			<div class="button__wrapper mb-2 md:mb-0 md:mr-3 inline-flex items-center justify-center w-full md:w-auto">
				<a href="#" class="w-full outline-btn dark__grey font-medium px-3  text-sm inline-flex items-center justify-center">Mes enchères exclusives</a>
			</div>
			<div class="button__wrapper mb-2 md:mb-0 md:mr-3 inline-flex items-center justify-center w-full md:w-auto">
				<a href="#" class="w-full outline-btn dark__grey font-medium px-3  text-sm inline-flex items-center justify-center">Mes enchères partagées</a>
			</div>
			<a href="#" class='inline-flex items-center justify-center rounded-md bg-white mr-3'>
				<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M13.125 11.25C12.7859 11.25 12.3067 11.2969 11.8079 11.3652C11.5748 11.3971 11.3971 11.5748 11.3652 11.8079C11.2969 12.3067 11.25 12.7859 11.25 13.125C11.25 13.4641 11.2969 13.9433 11.3652 14.4421C11.3971 14.6752 11.5748 14.8529 11.8079 14.8848C12.3067 14.9531 12.7859 15 13.125 15C13.4641 15 13.9433 14.9531 14.4421 14.8848C14.6752 14.8529 14.8529 14.6752 14.8848 14.4421C14.9531 13.9433 15 13.4641 15 13.125C15 12.7859 14.9531 12.3067 14.8848 11.8079C14.8529 11.5748 14.6752 11.3971 14.4421 11.3652C13.9433 11.2969 13.4641 11.25 13.125 11.25ZM11.6043 9.87907C10.7044 10.0023 10.0023 10.7044 9.87907 11.6043C9.80838 12.1205 9.75 12.6811 9.75 13.125C9.75 13.5689 9.80838 14.1295 9.87907 14.6457C10.0023 15.5456 10.7044 16.2477 11.6043 16.3709C12.1205 16.4416 12.6811 16.5 13.125 16.5C13.5689 16.5 14.1295 16.4416 14.6457 16.3709C15.5456 16.2477 16.2477 15.5456 16.3709 14.6457C16.4416 14.1295 16.5 13.5689 16.5 13.125C16.5 12.6811 16.4416 12.1205 16.3709 11.6043C16.2477 10.7044 15.5456 10.0023 14.6457 9.87907C14.1295 9.80838 13.5689 9.75 13.125 9.75C12.6811 9.75 12.1205 9.80838 11.6043 9.87907Z" fill="#374151"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M4.875 11.25C4.53586 11.25 4.05669 11.2969 3.55786 11.3652C3.32481 11.3971 3.14711 11.5748 3.1152 11.8079C3.04688 12.3067 3 12.7859 3 13.125C3 13.4641 3.04688 13.9433 3.1152 14.4421C3.14711 14.6752 3.32481 14.8529 3.55786 14.8848C4.05669 14.9531 4.53586 15 4.875 15C5.21414 15 5.69331 14.9531 6.19214 14.8848C6.42519 14.8529 6.60289 14.6752 6.6348 14.4421C6.70312 13.9433 6.75 13.4641 6.75 13.125C6.75 12.7859 6.70312 12.3067 6.6348 11.8079C6.60289 11.5748 6.42519 11.3971 6.19214 11.3652C5.69331 11.2969 5.21414 11.25 4.875 11.25ZM3.35433 9.87907C2.4544 10.0023 1.75232 10.7044 1.62907 11.6043C1.55838 12.1205 1.5 12.6811 1.5 13.125C1.5 13.5689 1.55838 14.1295 1.62907 14.6457C1.75232 15.5456 2.4544 16.2477 3.35433 16.3709C3.87048 16.4416 4.43112 16.5 4.875 16.5C5.31888 16.5 5.87952 16.4416 6.39567 16.3709C7.2956 16.2477 7.99768 15.5456 8.12093 14.6457C8.19162 14.1295 8.25 13.5689 8.25 13.125C8.25 12.6811 8.19162 12.1205 8.12093 11.6043C7.99768 10.7044 7.2956 10.0023 6.39567 9.87907C5.87952 9.80838 5.31888 9.75 4.875 9.75C4.43112 9.75 3.87048 9.80838 3.35433 9.87907Z" fill="#374151"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M13.125 3C12.7859 3 12.3067 3.04688 11.8079 3.1152C11.5748 3.14711 11.3971 3.32481 11.3652 3.55786C11.2969 4.05669 11.25 4.53586 11.25 4.875C11.25 5.21414 11.2969 5.69331 11.3652 6.19214C11.3971 6.42519 11.5748 6.60289 11.8079 6.6348C12.3067 6.70312 12.7859 6.75 13.125 6.75C13.4641 6.75 13.9433 6.70312 14.4421 6.6348C14.6752 6.60289 14.8529 6.42519 14.8848 6.19214C14.9531 5.69331 15 5.21414 15 4.875C15 4.53586 14.9531 4.05669 14.8848 3.55786C14.8529 3.32481 14.6752 3.14711 14.4421 3.1152C13.9433 3.04688 13.4641 3 13.125 3ZM11.6043 1.62907C10.7044 1.75232 10.0023 2.4544 9.87907 3.35433C9.80838 3.87048 9.75 4.43112 9.75 4.875C9.75 5.31888 9.80838 5.87952 9.87907 6.39567C10.0023 7.2956 10.7044 7.99768 11.6043 8.12093C12.1205 8.19162 12.6811 8.25 13.125 8.25C13.5689 8.25 14.1295 8.19162 14.6457 8.12093C15.5456 7.99768 16.2477 7.2956 16.3709 6.39567C16.4416 5.87952 16.5 5.31888 16.5 4.875C16.5 4.43112 16.4416 3.87048 16.3709 3.35433C16.2477 2.4544 15.5456 1.75232 14.6457 1.62907C14.1295 1.55838 13.5689 1.5 13.125 1.5C12.6811 1.5 12.1205 1.55838 11.6043 1.62907Z" fill="#374151"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M4.875 3C4.53586 3 4.05669 3.04688 3.55786 3.1152C3.32481 3.14711 3.14711 3.32481 3.1152 3.55786C3.04688 4.05669 3 4.53586 3 4.875C3 5.21414 3.04688 5.69331 3.1152 6.19214C3.14711 6.42519 3.32481 6.60289 3.55786 6.6348C4.05669 6.70312 4.53586 6.75 4.875 6.75C5.21414 6.75 5.69331 6.70312 6.19214 6.6348C6.42519 6.60289 6.60289 6.42519 6.6348 6.19214C6.70312 5.69331 6.75 5.21414 6.75 4.875C6.75 4.53586 6.70312 4.05669 6.6348 3.55786C6.60289 3.32481 6.42519 3.14711 6.19214 3.1152C5.69331 3.04688 5.21414 3 4.875 3ZM3.35433 1.62907C2.4544 1.75232 1.75232 2.4544 1.62907 3.35433C1.55838 3.87048 1.5 4.43112 1.5 4.875C1.5 5.31888 1.55838 5.87952 1.62907 6.39567C1.75232 7.2956 2.4544 7.99768 3.35433 8.12093C3.87048 8.19162 4.43112 8.25 4.875 8.25C5.31888 8.25 5.87952 8.19162 6.39567 8.12093C7.2956 7.99768 7.99768 7.2956 8.12093 6.39567C8.19162 5.87952 8.25 5.31888 8.25 4.875C8.25 4.43112 8.19162 3.87048 8.12093 3.35433C7.99768 2.4544 7.2956 1.75232 6.39567 1.62907C5.87952 1.55838 5.31888 1.5 4.875 1.5C4.43112 1.5 3.87048 1.55838 3.35433 1.62907Z" fill="#374151"/>
				</svg>
			</a>
			<div class="button__wrapper">
				<a href="#" class="regular-btn px-4 rounded-md text-white inline-flex items-center justify-center text-sm font-medium"><span class="inline-flex mr-2"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M2 6H17" stroke="white" stroke-width="2" stroke-linecap="round"/>
				<path d="M2 10H11" stroke="white" stroke-width="2" stroke-linecap="round"/>
				<path d="M2 14H7" stroke="white" stroke-width="2" stroke-linecap="round"/>
				</svg>
				</span> Trier par</a>
			</div>
		</div>
	</div>
	<div class="filter__container px-3 md:px-6 pt-5 md:pt-6 pb-5 md:pb-10 bg-white rounded-md">
		<form class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-4  gap-y-3 sm:gap-y-4 md:gap-y-8"
		action="{{ route('car.search') }}" method="POST" role="search">
			@csrf
			

			<!-- all brand list -->
				<div class="group__input group__dropdown relative">
					<p class="font-semibold mb-1 text-sm"> Fabricant</p>
					<select  name="brand" aria-label="Default select example"
						style="padding-left: 12px; background-color: white;"
						class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers">
						<option value="" selected disabled>--------</option>
							@foreach($brands ?? '' as $brand)
								<option value="{{ $brand->brand }}">{{ $brand->brand }}</option>
							@endforeach
					</select>
				</div>
			<!-- end all brand list -->
			<div class="group__input group__dropdown relative">
				<p class="font-semibold mb-1 text-sm"> Model</p>
				<input type="text" style="padding-left: 12px;" name="model" id="model"
				class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers">	
			</div>
			<!-- list city  -->
			<div class="group__input group__dropdown relative">
				<p class="font-semibold mb-1 text-sm"> Ville</p>
				<select  name="city" aria-label="Default select example"
				style="padding-left: 12px; background-color: white;"
				class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers">
						<option value="" selected disabled>--------</option>
							@foreach($cities ?? '' as $city)
								<option value="{{ $city->ville }}">{{ $city->ville }}</option>
							@endforeach
					</select>
			</div>



			<!-- end list city -->
			<div class="group__input group__dropdown relative">
				<p class="font-semibold mb-1 text-sm"> Date d'ajout</p>
				<input type="date" style="padding-left: 12px;" name="created_at" id="created_at"
				class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers">	
			</div>

			<div class="group__input relative">
				<p  class="font-semibold mb-1 text-sm">Première main</p>
				<div class="radio__wrapper flex items-center justify-start  flex-wrap">
					<div class="elem__radio my-1 mr-3">
						<label class="container__input cursor-pointer  flex items-center justify-start text-sm">All
							
							<input class="form-check-input" type="checkbox" name="first_hand" value="" id="">
							<span class="checkmark ml-1"></span>
						</label>

						
					</div>
					<div class="elem__radio my-1 mr-3">
						<label class="container__input  cursor-pointer flex items-center justify-start text-sm">oui
						
							<input class="form-check-input" type="checkbox" name="first_hand" value="1" id="">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
					<div class="elem__radio my-1">
						<label class="container__input cursor-pointer  flex items-center justify-start text-sm">no
							
							<input class="form-check-input" type="checkbox" name="first_hand" value="0" id="">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
				</div>
			</div>


			<div class="group__input relative">
				<p  class="font-semibold mb-1 text-sm">Gearbox</p>
				<div class="radio__wrapper flex items-center justify-start  flex-wrap">
					<div class="elem__radio my-1 mr-3">
						<label class="container__input cursor-pointer  flex items-center justify-start text-sm">All
							
							<input class="form-check-input" type="checkbox" name="all" value="all" id="">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
					<div class="elem__radio my-1 mr-3">
						<label class="container__input  cursor-pointer flex items-center justify-start text-sm">Automatique
							
							<input class="form-check-input" type="checkbox" name="automatique" value="automatique" id="">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
					<div class="elem__radio my-1">
						<label class="container__input cursor-pointer  flex items-center justify-start text-sm">Manuel
							
							<input class="form-check-input" type="checkbox" name="manual" value="manual" id="">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
				</div>
			</div>


			

			


			<div class="group__input group__dropdown relative">
				<p class="font-semibold mb-1 text-sm">origine</p>
				<input type="text" style="padding-left: 12px;" name="origine" id="origine"
				class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers">	
			</div>

			<div class="group__input relative">
				<p  class="font-semibold mb-1 text-sm">Car Condition</p>
				<div class="radio__wrapper flex items-center justify-start  flex-wrap">
					<div class="elem__checkbox my-1 mr-3">
						<label class="container__input cursor-pointer  flex items-center justify-start text-sm">Excellent
							
							<input class="form-check-input" type="checkbox" name="condition_car" value="excellent" id="excellent">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
					<div class="elem__checkbox my-1 mr-3">
						<label class="container__input  cursor-pointer flex items-center justify-start text-sm">Very good
						
							<input class="form-check-input" type="checkbox" name="very_Good" value="very_Good" id="very_Good">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
					<div class="elem__checkbox my-1 mr-3">
						<label class="container__input cursor-pointer  flex items-center justify-start text-sm">Good
							
							<input class="form-check-input" type="checkbox" name="good" value="good" id="good">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
					<div class="elem__checkbox my-1 mr-3">
						<label class="container__input cursor-pointer  flex items-center justify-start text-sm">Damaged
							
							<input class="form-check-input" type="checkbox" name="damaged" value="damaged" id="damaged">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
					<div class="elem__checkbox my-1 mr-3" >
						<label class="container__input cursor-pointer  flex items-center justify-start text-sm">For pieces
							
							<input class="form-check-input" type="checkbox" name="pieces" value="pieces" id="pieces">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
					<div class="elem__checkbox my-1">
						<label class="container__input cursor-pointer  flex items-center justify-start text-sm">Correct
							<input class="form-check-input" type="checkbox" name="correct" value="correct" id="correct">

							<span class="checkmark ml-1"></span>
						</label>
					</div>
				</div>
			</div>



			<div class="group__input relative">
				<p  class="font-semibold mb-1 text-sm">Fuel</p>
				<div class="radio__wrapper flex items-center justify-start  flex-wrap">
					<div class="elem__radio my-1 mr-3">
						<label class="container__input cursor-pointer  flex items-center justify-start text-sm">All
							<input type="checkbox" name="fuel" value="all">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
					<div class="elem__radio my-1 mr-3">
						<label class="container__input  cursor-pointer flex items-center justify-start text-sm">Diesel
							<input type="checkbox" name="fuel" value="diasel">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
					<div class="elem__radio my-1 mr-3">
						<label class="container__input cursor-pointer  flex items-center justify-start text-sm">Essence
							<input type="checkbox" name="fuel" value="essence">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
					<div class="elem__radio my-1 mr-3">
						<label class="container__input cursor-pointer  flex items-center justify-start text-sm">Electric
							<input type="checkbox" name="fuel" value="electric">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
					<div class="elem__radio my-1 mr-3">
						<label class="container__input cursor-pointer  flex items-center justify-start text-sm">LPG
							<input type="checkbox" name="fuel" value="lpg">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
					<div class="elem__radio my-1">
						<label class="container__input cursor-pointer  flex items-center justify-start text-sm">Hybrid
							<input type="checkbox" name="fuel" value="hybrid">
							<span class="checkmark ml-1"></span>
						</label>
					</div>
				</div>
			</div>
			<div class="group__input relative range__group">
				<p  class="font-semibold mb-1 text-sm">Kilométrage</p>
				<div class="values__range flex items-center justify-between">
					<p class="text-sm font-medium" id='' name=''>0</p>
					<p class="text-sm font-medium">790,000+</p>
				</div>
				<div class="info__range flex items-center justify-between">
					<p class="m-0 text-sm dark__grey">Le minimum</p>
					<p class="m-0 text-sm dark__grey">Max</p>
				</div>
				<div class="range__input ">
					<input type="text" id="range__km">
				</div>
			</div>
			<div class="group__input relative range__group">
				<p  class="font-semibold mb-1 text-sm">An</p>
				<div class="values__range flex items-center justify-between">
					<p class="text-sm font-medium" >1980</p>
					<p class="text-sm font-medium">{{ date('Y') }}</p>
				</div>
				<div class="info__range flex items-center justify-between">
					<p class="m-0 text-sm dark__grey">Le minimum</p>
					<p class="m-0 text-sm dark__grey">Max</p>
				</div>
				<div class="range__input">
					<input type="text" id="range__an">
				</div>
			</div>
			<div class="group__input relative range__group">
				<p  class="font-semibold mb-1 text-sm">Prix</p>
				<div class="values__range flex items-center justify-between">
					<p class="text-sm font-medium" >5000</p>
					<p class="text-sm font-medium">500,000</p>
				</div>
				<div class="info__range flex items-center justify-between">
					<p class="m-0 text-sm dark__grey">Le minimum</p>
					<p class="m-0 text-sm dark__grey">Max</p>
				</div>
				<div class="range__input">
					<input type="text" id="range__prix">
				</div>
				
				<div class="group__input relative mt-3">
					<button type="submit" class="regular-btn px-4 
					rounded-md text-white inline-flex items-center 
					justify-center text-sm font-medium"
					style="float: right;">
					<span class="inline-flex mr-2">
						<img src="  {{ asset('assets/img/searchbutton.svg') }}" alt="">
						</span> Recherche
					</button>
				</div>
			</div>
		</form>
	</div>
				<!-- end search -->
	<div class="gallery__wrapper mt-6 grid grid-cols-2 md:grid-cols-3 gap-x-4 gap-y-5">
		<a href="#" class="elem__gallery bg-white">
			<div class="image__gallery flex items-center justify-center relative">
				<span class="views inline-flex items-center justify-center px-2 py-1 font-medium"><img src="img/views.svg" class="mr-1" alt="views"> 153</span>
				<img src="img/gallery1.webp" alt="gallery">
			</div>
			<div class="gallery__desc px-3 pt-2 pb-3">
				<p class="mb-2 text-sm font-medium dark__grey">Land Rover Range Evoque</p>
				<ul class="flex items-center justify-start flex-wrap">
					<li  class="text-sm  mr-3 light__grey">Date Limite: <span class="dark__grey font-semibold">1 jour</span></li>
					<li  class="text-sm  mr-3 light__grey">Montant de l'enchère: <span class="dark__grey font-semibold">123</span></li>
				</ul>
			</div>
		</a>

		<a href="#" class="elem__gallery bg-white">
			<div class="image__gallery flex items-center justify-center relative">
				<span class="views inline-flex items-center justify-center px-2 py-1 font-medium"><img src="img/views.svg" class="mr-1" alt="views"> 153</span>
				<img src="img/gallery2.webp" alt="gallery">
			</div>
			<div class="gallery__desc px-3 pt-2 pb-3">
				<p class="mb-2 text-sm font-medium dark__grey">Toyota Tundra</p>
				<ul class="flex items-center justify-start flex-wrap">
					<li  class="text-sm  mr-3 light__grey">Date Limite: <span class="dark__grey font-semibold">1 jour</span></li>
					<li  class="text-sm  mr-3 light__grey">Montant de l'enchère: <span class="dark__grey font-semibold">123</span></li>
				</ul>
			</div>
		</a>

		<a href="#" class="elem__gallery bg-white">
			<div class="image__gallery no__image--gallery flex items-center justify-center relative">
				<span class="no__image font-medium text-xs">No images</span>
				<span class="views inline-flex items-center justify-center px-2 py-1 font-medium"><img src="img/views.svg" class="mr-1" alt="views"> 153</span>
				<img src="img/logo1.png" alt="gallery" style="max-height: 20px;">
			</div>
			<div class="gallery__desc px-3 pt-2 pb-3">
				<p class="mb-2 text-sm font-medium dark__grey">Duster</p>
				<ul class="flex items-center justify-start flex-wrap">
					<li  class="text-sm  mr-3 light__grey">Date Limite: <span class="dark__grey font-semibold">1 jour</span></li>
					<li  class="text-sm  mr-3 light__grey">Montant de l'enchère: <span class="dark__grey font-semibold">123</span></li>
				</ul>
			</div>
		</a>

		<a href="#" class="elem__gallery bg-white">
			<div class="image__gallery no__image--gallery flex items-center justify-center relative">
				<span class="no__image font-medium text-xs">No images</span>
				<span class="views inline-flex items-center justify-center px-2 py-1 font-medium"><img src="img/views.svg" class="mr-1" alt="views"> 153</span>
				<img src="img/logo2.png" alt="gallery" style="max-height: 110px;">
			</div>
			<div class="gallery__desc px-3 pt-2 pb-3">
				<p class="mb-2 text-sm font-medium dark__grey">1 Series (F52)</p>
				<ul class="flex items-center justify-start flex-wrap">
					<li  class="text-sm  mr-3 light__grey">Date Limite: <span class="dark__grey font-semibold">1 jour</span></li>
					<li  class="text-sm  mr-3 light__grey">Montant de l'enchère: <span class="dark__grey font-semibold">123</span></li>
				</ul>
			</div>
		</a>

		<a href="#" class="elem__gallery bg-white">
			<div class="image__gallery flex items-center justify-center relative">
				<span class="views inline-flex items-center justify-center px-2 py-1 font-medium"><img src="img/views.svg" class="mr-1" alt="views"> 153</span>
				<img src="img/gallery3.webp" alt="gallery" >
			</div>
			<div class="gallery__desc px-3 pt-2 pb-3">
				<p class="mb-2 text-sm font-medium dark__grey">VW T-Roc</p>
				<ul class="flex items-center justify-start flex-wrap">
					<li  class="text-sm  mr-3 light__grey">Date Limite: <span class="dark__grey font-semibold">1 jour</span></li>
					<li  class="text-sm  mr-3 light__grey">Montant de l'enchère: <span class="dark__grey font-semibold">123</span></li>
				</ul>
			</div>
		</a>

		<a href="#" class="elem__gallery bg-white">
			<div class="image__gallery flex items-center justify-center relative">
				<span class="views inline-flex items-center justify-center px-2 py-1 font-medium"><img src="img/views.svg" class="mr-1" alt="views"> 153</span>
				<img src="img/gallery4.webp" alt="gallery">
			</div>
			<div class="gallery__desc px-3 pt-2 pb-3">
				<p class="mb-2 text-sm font-medium dark__grey">Chevrolet Silverado</p>
				<ul class="flex items-center justify-start flex-wrap">
					<li  class="text-sm  mr-3 light__grey">Date Limite: <span class="dark__grey font-semibold">1 jour</span></li>
					<li  class="text-sm  mr-3 light__grey">Montant de l'enchère: <span class="dark__grey font-semibold">123</span></li>
				</ul>
			</div>
		</a>

		<a href="#" class="elem__gallery bg-white">
			<div class="image__gallery flex items-center justify-center relative">
				<span class="views inline-flex items-center justify-center px-2 py-1 font-medium"><img src="img/views.svg" class="mr-1" alt="views"> 153</span>
				<img src="img/gallery5.webp" alt="gallery">
			</div>
			<div class="gallery__desc px-3 pt-2 pb-3">
				<p>A1</p>
				<ul class="flex items-center justify-start flex-wrap">
					<li  class="text-sm  mr-3 light__grey">Date Limite: <span class="dark__grey font-semibold">1 jour</span></li>
					<li  class="text-sm  mr-3 light__grey">Montant de l'enchère: <span class="dark__grey font-semibold">123</span></li>
				</ul>
			</div>
		</a>

		<a href="#" class="elem__gallery bg-white">
			<div class="image__gallery no__image--gallery flex items-center justify-center relative">
				<span class="no__image font-medium text-xs">No images</span>
				<span class="views inline-flex items-center justify-center px-2 py-1 font-medium"><img src="img/views.svg" class="mr-1" alt="views"> 153</span>
				<img src="img/logo3.png" alt="gallery" style="max-height: 27px;">
			</div>
			<div class="gallery__desc px-3 pt-2 pb-3">
				<p>1 Series (F52)</p>
				<ul class="flex items-center justify-start flex-wrap">
					<li  class="text-sm  mr-3 light__grey">Date Limite: <span class="dark__grey font-semibold">1 jour</span></li>
					<li  class="text-sm  mr-3 light__grey">Montant de l'enchère: <span class="dark__grey font-semibold">123</span></li>
				</ul>
			</div>
		</a>


		<a href="#" class="elem__gallery bg-white">
			<div class="image__gallery flex items-center justify-center relative">
				<span class="views inline-flex items-center justify-center px-2 py-1 font-medium"><img src="img/views.svg" class="mr-1" alt="views"> 153</span>
				<img src="img/gallery6.webp" alt="gallery">
			</div>
			<div class="gallery__desc px-3 pt-2 pb-3">
				<p>Acura RDX</p>
				<ul class="flex items-center justify-start flex-wrap">
					<li  class="text-sm  mr-3 light__grey">Date Limite: <span class="dark__grey font-semibold">1 jour</span></li>
					<li  class="text-sm  mr-3 light__grey">Montant de l'enchère: <span class="dark__grey font-semibold">123</span></li>
				</ul>
			</div>
		</a>
	</div>

	<div class="table__wrapper w-full mt-7">
				<table class="regular-table w-full">
					<tr>
						<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">auto</th>
						<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Propriétaire</th>
						<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">prix</th>
						<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Date Added</th>
						<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Date de clôture  <br>
						des enchères</th>
						<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">visite  
						</th>
					</tr>
					@if($cars->count() > 0 )
					@foreach($cars as $car)
					<tr class="bg-white">
						<td class="px-6 py-3">
							<p class="dmsans text-sm font-medium dark__grey">{{ $car->brand }}</p>
						</td>
						<td  class="px-6 py-3">
							<p class="text-sm light__grey">{{ $car->user->first_name }} {{ $car->user->last_name }}</p>
						</td>
						<td  class="px-6 py-3">
							<p class="text-sm light__grey">{{ $car->price }} Dh</p>
						</td>
						<td   class="px-6 py-3">
							<p class="text-sm light__grey">{{ \Carbon\Carbon::parse($car->created_at)->format('M j Y') }}</p>
						</td>
						<td  class="px-6 py-3 ">
							<p class="text-sm light__grey">Jan. 31, 2008</p>
						</td>
						
						
						<td class="px-6 py-3">
							<a href="#" class="details__button text-sm">visite</a>
						</td>
					</tr>
					@endforeach
					@else
					<h3 class="text-center mt-5 mb-5">Pas encore du voitures</h3>
					@endif
				</table>
			</div>
			{{ $cars->links() }}
	</div>

@endsection