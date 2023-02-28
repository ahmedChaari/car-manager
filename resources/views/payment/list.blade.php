@extends('layouts.admin')
@section('content')


<div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
				<div class="payment__head flex flex-col md:flex-row items-center justify-between mb-4 lg:mb-7">
					<p class="m-0  text-base lg:text-lg font-medium text-center md:text-left">acheter des crédits</p>
					<p class="m-0  text-base lg:text-lg font-medium text-center md:text-right flex flex-col md:block">les credits actuels comptent : <span class="active__color">12000 Dh</span></p>
				</div>
				<div class="payment__box bg-white">
					<form action="" class="w-full flex-col md:flex-row flex justify-between">
						<div class="payment__picker pt-4 md:pt-5  pl-4 md:pl-6 mb-4 md:pb-8 pr-4 md:pr-6 xl:pr-10">
							<p class="mb-3 md:mb-9 text-base xl:text-lg font-medium">Choisissez unspan <span class="active__color">forfait</span></p>
							<div class="picker__grid grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-5  gap-y-3 sm:gap-y-5">
								<a href="#" class="inline-flex items-center justify-center  picker__el" data-value="200">
									<p class="text-base md:text-lg xl:text-xl active__color"><span class="font-bold">200</span> DH</p>
								</a>
								<a href="#" class="inline-flex items-center justify-center  picker__el active__picker" data-value="300">
									<p class="text-base md:text-lg xl:text-xl active__color"><span class="font-bold">300</span> DH</p>
								</a>
								<a href="#" class="inline-flex items-center justify-center  picker__el" data-value="500">
									<p class="text-base md:text-lg xl:text-xl active__color"><span class="font-bold">500</span> DH</p>
								</a>
								<a href="#" class="inline-flex items-center justify-center  picker__el" data-value="1000">
									<p class="text-base md:text-lg xl:text-xl active__color"><span class="font-bold">1000</span> DH</p>
								</a>
								<a href="#" class="inline-flex items-center justify-center  picker__el" data-value="2000">
									<p class="text-base md:text-lg xl:text-xl active__color"><span class="font-bold">2000</span> DH</p>
								</a>
								<a href="#" class="inline-flex items-center justify-center  picker__el" data-value="5000">
									<p class="text-base md:text-lg xl:text-xl active__color"><span class="font-bold">5000</span> DH</p>
								</a>
							</div>
							<div class="custom__payment mt-6">
								<p class="mb-2 text-base xl:text-lg font-medium">Saisissez le montant de crédits dont vous avez besoin</p>
								<div class="group__input w-full relative flex items-center">
									<input type="text" class="numeric w-full pl-3 pr-12" placeholder="1520">
									<span class="text-base md:text-lg">DH</span>
								</div>
							</div>
						</div>
						<div class="payment__result py-10 flex items-center justify-center">
							<div class="inner__result mx-auto w-full px-4">
								<div class="paym__grid mb-2">
									<div class="el__paym py-1  flex items-center justify-between">
										<p class="font-medium text-lg text-white">Total </p><span  class="ml-2 text-lg text-white total__value">300DH</span>
									</div>
								</div>
								<div class="paym__amount  flex items-center justify-center mb-6">
									<p class="mr-3 font-extrabold text-white text-3xl sm:text-5xl">300</p><span  class="text-lg  sm:text-xl font-medium">DH</span>
								</div>
								<div class="button__card w-full  mb-3 sm:mb-6">
									<a href="#" class="w-full flex items-center  justify-between py-3 px-3 sm:px-5  text-white  text-sm sm:text-base font-medium rounded-md">Payer avec carte <span><img src="img/card.svg" alt="card"></span></a>
								</div>
								<div class="button__cash w-full">
									<a href="#" class="w-full flex items-center  justify-between py-3 px-3 sm:px-5    text-sm sm:text-base font-medium rounded-md">Payer avec Wafacash <span><img src="img/cash.svg" alt="cash"></span></a>
								</div>
							</div>
						</div>
					</form>
					
				</div>
				<div class="table__wrapper w-full mt-7">
						<table class="regular-table w-full">
							<tr>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">facture</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Montant</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">date</th>
								<th class="text-xs uppercase  tracking-wider text-center font-medium px-6 py-3">statut</th>
							</tr>
							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">200DH - dec 2022</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">3,604DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dec, 1, 2022</p>
								</td>
								<td   class="px-6 py-3 text-center">
									<p class="status__payment confirmed text-xs font-medium">Conformed</p>
								</td>
								
							</tr>

							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">200DH - dec 2022</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">3,604DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dec, 1, 2022</p>
								</td>
								<td   class="px-6 py-3 text-center">
									<p class="status__payment waiting text-xs font-medium">Waiting</p>
								</td>
								
							</tr>

							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">200DH - dec 2022</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">3,604DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dec, 1, 2022</p>
								</td>
								<td   class="px-6 py-3 text-center">
									<p class="status__payment canceled text-xs font-medium">Canceled</p>
								</td>
								
							</tr>
							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">200DH - dec 2022</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">3,604DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dec, 1, 2022</p>
								</td>
								<td   class="px-6 py-3 text-center">
									<p class="status__payment confirmed text-xs font-medium">Conformed</p>
								</td>
								
							</tr>

							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">200DH - dec 2022</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">3,604DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dec, 1, 2022</p>
								</td>
								<td   class="px-6 py-3 text-center">
									<p class="status__payment waiting text-xs font-medium">Waiting</p>
								</td>
								
							</tr>

							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">200DH - dec 2022</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">3,604DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dec, 1, 2022</p>
								</td>
								<td   class="px-6 py-3 text-center">
									<p class="status__payment canceled text-xs font-medium">Canceled</p>
								</td>
								
							</tr>
							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">200DH - dec 2022</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">3,604DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dec, 1, 2022</p>
								</td>
								<td   class="px-6 py-3 text-center">
									<p class="status__payment confirmed text-xs font-medium">Conformed</p>
								</td>
								
							</tr>

							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">200DH - dec 2022</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">3,604DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dec, 1, 2022</p>
								</td>
								<td   class="px-6 py-3 text-center">
									<p class="status__payment waiting text-xs font-medium">Waiting</p>
								</td>
								
							</tr>

							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">200DH - dec 2022</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">3,604DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dec, 1, 2022</p>
								</td>
								<td   class="px-6 py-3 text-center">
									<p class="status__payment canceled text-xs font-medium">Canceled</p>
								</td>
								
							</tr>
							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">200DH - dec 2022</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">3,604DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dec, 1, 2022</p>
								</td>
								<td   class="px-6 py-3 text-center">
									<p class="status__payment confirmed text-xs font-medium">Conformed</p>
								</td>
								
							</tr>

							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">200DH - dec 2022</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">3,604DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dec, 1, 2022</p>
								</td>
								<td   class="px-6 py-3 text-center">
									<p class="status__payment waiting text-xs font-medium">Waiting</p>
								</td>
								
							</tr>

							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">200DH - dec 2022</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">3,604DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dec, 1, 2022</p>
								</td>
								<td   class="px-6 py-3 text-center">
									<p class="status__payment canceled text-xs font-medium">Canceled</p>
								</td>
								
							</tr>

						</table>
					</div>
				<div class="pagination flex items-center justify-between flex-col  lg:flex-row px-6 mt-3">
					<p class="m-0 mr-0 mb-2 lg:mb-0 lg:mr-3 text-xs sm:text-sm text-center lg:text-left">Affichage de 1 à 10 sur 97 résultats</p>
					<ul class="flex items-center justify-end rounded-md  ">
						<li class="inline-flex items-center  justify-center"><a href="#" class=" bg-white inline-flex items-center justify-center w-full  h-full  font-medium text-sm relative"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 5.29289C13.0976 5.68342 13.0976 6.31658 12.7071 6.70711L9.41421 10L12.7071 13.2929C13.0976 13.6834 13.0976 14.3166 12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L7.29289 10.7071C6.90237 10.3166 6.90237 9.68342 7.29289 9.29289L11.2929 5.29289C11.6834 4.90237 12.3166 4.90237 12.7071 5.29289Z" fill="#6B7280"/>
						</svg>
						</a></li>
						<li class="inline-flex items-center  justify-center"><a href="#" class="  inline-flex items-center justify-center w-full  h-full  font-medium text-xs sm:text-sm relative">1</a></li>
						<li class="inline-flex items-center  justify-center"><a href="#" class="  inline-flex items-center justify-center w-full  h-full  font-medium text-xs sm:text-sm relative">2</a></li>
						<li class="inline-flex items-center  justify-center"><a href="#" class="  inline-flex items-center justify-center w-full  h-full  font-medium text-xs sm:text-sm relative">3</a></li>
						<li class="inline-flex items-center  justify-center dots">...</li>
					 	<li class="inline-flex items-center  justify-center"><a href="#" class="  inline-flex items-center justify-center w-full  h-full  font-medium text-xs sm:text-sm relative">8</a></li>
						<li class="inline-flex items-center  justify-center"><a href="#" class="  inline-flex items-center justify-center w-full  h-full  font-medium text-xs sm:text-sm relative">9</a></li>
						<li class="inline-flex items-center  justify-center"><a href="#" class="  inline-flex items-center justify-center w-full  h-full  font-medium text-xs sm:text-sm relative">10</a></li>
						<li class="inline-flex items-center  justify-center"><a href="#" class="  inline-flex items-center justify-center w-full  h-full font-medium text-sm relative"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M7.29289 14.7071C6.90237 14.3166 6.90237 13.6834 7.29289 13.2929L10.5858 10L7.29289 6.70711C6.90237 6.31658 6.90237 5.68342 7.29289 5.29289C7.68342 4.90237 8.31658 4.90237 8.70711 5.29289L12.7071 9.29289C13.0976 9.68342 13.0976 10.3166 12.7071 10.7071L8.70711 14.7071C8.31658 15.0976 7.68342 15.0976 7.29289 14.7071Z" fill="#6B7280"/>
						</svg>
						</a></li>
					</ul>
				</div>
			</div>

@endsection
