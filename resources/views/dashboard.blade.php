@extends('layouts.admin')
@section('content')
<div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
				<div class="head__filter  flex items-center md:items-center justify-between mb-4 md:mb-7">
					<h6 class="font-medium m-0  text-base lg:text-lg dark__grey">Tableau de bord</h6>
					<div class="more__info relative inline-flex items-center justify-center">
						<a href="#" class="inline-flex items-center justify-center"><img src="img/moredots.svg" alt="moredots"></a>
					</div>
				</div>
				
				<div class="double__table grid grid-cols-1 md:grid-cols-2 gap-x-7 gap-y-7">
					<div class="user__registration px-4 py-4 bg-white">
						<p class="mb-3 md:mb-5 font-medium text-base md:text-lg">Les utilisateurs s'inscrivent</p>
						<div class="switcher__wrapper bar__switcher  mb-3">
							<ul class="flex items-center justify-start">
								<li class="mr-8  active__switcher"><a href="#" data-filter="bar1" class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Jour</a></li>
								<li class="mr-8"><a href="#"  data-filter="bar2" class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Semaine</a></li>
								<li><a href="#"  data-filter="bar3" class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Mois</a></li>
							</ul>
						</div>
						<div class="registration__bars flex items-end justify-between bar1">
							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:65%"></div>
								</div>
								<p>1 PM</p>
							</div>

							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:35%"></div>
								</div>
								<p>2 PM</p>
							</div>

							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:15%"></div>
								</div>
								<p>3 PM</p>
							</div>

							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container biggest flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:95%"></div>
								</div>
								<p>4 PM</p>
							</div>
							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:60%"></div>
								</div>
								<p>5 PM</p>
							</div>
							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:45%"></div>
								</div>
								<p>6 PM</p>
							</div>
							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:25%"></div>
								</div>
								<p>7 PM</p>
							</div>

							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:43%"></div>
								</div>
								<p>8 PM</p>
							</div>
						</div>

						<div class="registration__bars flex items-end justify-between bar2" style="display:none;">
							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:65%"></div>
								</div>
								<p>1 PM</p>
							</div>

							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:35%"></div>
								</div>
								<p>2 PM</p>
							</div>

							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:15%"></div>
								</div>
								<p>3 PM</p>
							</div>

							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container biggest flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:95%"></div>
								</div>
								<p>4 PM</p>
							</div>
							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:60%"></div>
								</div>
								<p>5 PM</p>
							</div>
							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:45%"></div>
								</div>
								<p>6 PM</p>
							</div>
							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:25%"></div>
								</div>
								<p>7 PM</p>
							</div>

							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:43%"></div>
								</div>
								<p>8 PM</p>
							</div>
						</div>


						<div class="registration__bars flex items-end justify-between bar3" style="display:none;">
							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:65%"></div>
								</div>
								<p>1 PM</p>
							</div>

							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:35%"></div>
								</div>
								<p>2 PM</p>
							</div>

							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:15%"></div>
								</div>
								<p>3 PM</p>
							</div>

							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container biggest flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:95%"></div>
								</div>
								<p>4 PM</p>
							</div>
							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:60%"></div>
								</div>
								<p>5 PM</p>
							</div>
							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:45%"></div>
								</div>
								<p>6 PM</p>
							</div>
							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:25%"></div>
								</div>
								<p>7 PM</p>
							</div>

							<div class="elem__bar flex flex-col justify-center items-center w-full">
								<div class="bar__container flex items-end  mb-2 justify-center">
									<div class="active__bar" style="height:43%"></div>
								</div>
								<p>8 PM</p>
							</div>
						</div>
					</div>
					<div class="auction__wrapper px-4 py-4 pb-0 bg-white">
						<p class="mb-3 md:mb-5 font-medium text-base md:text-lg">Enchères</p>
						<div class="switcher__wrapper auction__switcher  mb-5">
							<ul class="flex items-center justify-start">
								<li class="mr-8  active__switcher"><a href="#" data-filter="container1" class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Jour</a></li>
								<li class="mr-8"><a href="#"  data-filter="container2" class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Semaine</a></li>
								<li><a href="#"  data-filter="container3" class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Mois</a></li>
							</ul>
						</div>
						<div class="auction__container container1">
							<div class="auction__elem flex-col-reverse xl:flex-row mb-3 px-4 py-4 bg-white flex items-start justify-between">
								<div class="auction__left">
									<p class="m-0 mb-2 font-semibold text-sm md:text-base">Dacia Sandero Stepaway</p>
									<ul class="mb-2">
										<li class="flex items-center justify-start mb-2 text-sm md:text-base"><span class="inline-flex items-center mr-2"><img src="img/l1.svg" alt="l1"></span> MAD 150,000</li>
										<li class="flex items-center justify-start text-sm md:text-base"><span class="inline-flex items-center mr-2"><img src="img/l2.svg" alt="l1"></span> Last bid on January 7, 2020</li>
									</ul>
									<div class="user__list flex items-center justify-start">
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us1.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us2.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us3.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<span>+4</span>
										</div>
									</div>
								</div>
								<div class="auction__right ml-auto mb-2 xl:mb-0 inline-flex items-center justify-center">
									<img src="img/smalllogo.svg" alt="smalllogo">
								</div>
							</div>
							<div class="auction__elem flex-col-reverse xl:flex-row mb-3 px-4 py-4 bg-white flex items-start justify-between">
								<div class="auction__left">
									<p class="m-0 mb-2 font-semibold text-sm md:text-base">Dacia Sandero Stepaway</p>
									<ul class="mb-2">
										<li class="flex items-center justify-start mb-2 text-sm md:text-base"><span class="inline-flex items-center mr-2"><img src="img/l1.svg" alt="l1"></span> MAD 150,000</li>
										<li class="flex items-center justify-start text-sm md:text-base"><span class="inline-flex items-center mr-2"><img src="img/l2.svg" alt="l1"></span> Last bid on January 7, 2020</li>
									</ul>
									<div class="user__list flex items-center justify-start">
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us1.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us2.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us3.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<span>+4</span>
										</div>
									</div>
								</div>
								<div class="auction__right ml-auto mb-2 xl:mb-0 inline-flex items-center justify-center">
									<img src="img/smalllogo.svg" alt="smalllogo">
								</div>
							</div>
						</div>

						<div class="auction__container container2" style="display:none;">
							<div class="auction__elem flex-col-reverse xl:flex-row mb-3 px-4 py-4 bg-white flex items-start justify-between">
								<div class="auction__left">
									<p class="m-0 mb-2 font-semibold text-sm md:text-base">Dacia Sandero Stepaway</p>
									<ul class="mb-2">
										<li class="flex items-center justify-start mb-2 text-sm md:text-base"><span class="inline-flex items-center mr-2"><img src="img/l1.svg" alt="l1"></span> MAD 150,000</li>
										<li class="flex items-center justify-start text-sm md:text-base"><span class="inline-flex items-center mr-2"><img src="img/l2.svg" alt="l1"></span> Last bid on January 7, 2020</li>
									</ul>
									<div class="user__list flex items-center justify-start">
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us1.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us2.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us3.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<span>+4</span>
										</div>
									</div>
								</div>
								<div class="auction__right ml-auto mb-2 xl:mb-0 inline-flex items-center justify-center">
									<img src="img/smalllogo.svg" alt="smalllogo">
								</div>
							</div>
							<div class="auction__elem flex-col-reverse xl:flex-row mb-3 px-4 py-4 bg-white flex items-start justify-between">
								<div class="auction__left">
									<p class="m-0 mb-2 font-semibold text-sm md:text-base">Dacia Sandero Stepaway</p>
									<ul class="mb-2">
										<li class="flex items-center justify-start mb-2 text-sm md:text-base"><span class="inline-flex items-center mr-2"><img src="img/l1.svg" alt="l1"></span> MAD 150,000</li>
										<li class="flex items-center justify-start text-sm md:text-base"><span class="inline-flex items-center mr-2"><img src="img/l2.svg" alt="l1"></span> Last bid on January 7, 2020</li>
									</ul>
									<div class="user__list flex items-center justify-start">
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us1.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us2.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us3.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<span>+4</span>
										</div>
									</div>
								</div>
								<div class="auction__right ml-auto mb-2 xl:mb-0 inline-flex items-center justify-center">
									<img src="img/smalllogo.svg" alt="smalllogo">
								</div>
							</div>
						</div>


						<div class="auction__container container3" style="display:none;">
							<div class="auction__elem flex-col-reverse xl:flex-row mb-3 px-4 py-4 bg-white flex items-start justify-between">
								<div class="auction__left">
									<p class="m-0 mb-2 font-semibold text-sm md:text-base">Dacia Sandero Stepaway</p>
									<ul class="mb-2">
										<li class="flex items-center justify-start mb-2 text-sm md:text-base"><span class="inline-flex items-center mr-2"><img src="img/l1.svg" alt="l1"></span> MAD 150,000</li>
										<li class="flex items-center justify-start text-sm md:text-base"><span class="inline-flex items-center mr-2"><img src="img/l2.svg" alt="l1"></span> Last bid on January 7, 2020</li>
									</ul>
									<div class="user__list flex items-center justify-start">
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us1.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us2.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us3.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<span>+4</span>
										</div>
									</div>
								</div>
								<div class="auction__right ml-auto mb-2 xl:mb-0 inline-flex items-center justify-center">
									<img src="img/smalllogo.svg" alt="smalllogo">
								</div>
							</div>
							<div class="auction__elem flex-col-reverse xl:flex-row mb-3 px-4 py-4 bg-white flex items-start justify-between">
								<div class="auction__left">
									<p class="m-0 mb-2 font-semibold text-sm md:text-base">Dacia Sandero Stepaway</p>
									<ul class="mb-2">
										<li class="flex items-center justify-start mb-2 text-sm md:text-base"><span class="inline-flex items-center mr-2"><img src="img/l1.svg" alt="l1"></span> MAD 150,000</li>
										<li class="flex items-center justify-start text-sm md:text-base"><span class="inline-flex items-center mr-2"><img src="img/l2.svg" alt="l1"></span> Last bid on January 7, 2020</li>
									</ul>
									<div class="user__list flex items-center justify-start">
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us1.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us2.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<img src="img/us3.png" alt="us">
										</div>
										<div class="el__user inline-flex items-center justify-center">
											<span>+4</span>
										</div>
									</div>
								</div>
								<div class="auction__right ml-auto mb-2 xl:mb-0 inline-flex items-center justify-center">
									<img src="img/smalllogo.svg" alt="smalllogo">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="users__signup py-5 px-4 bg-white mt-7">
					<p class="mb-3 md:mb-5 font-medium text-base md:text-lg">Users sign up</p>
					<div class="switcher__wrapper graph__switcher mb-5">
						<ul class="flex items-center justify-start">
							<li class="mr-8  active__switcher"><a href="#" data-filter="filter1" class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Jour</a></li>
							<li class="mr-8"><a href="#"  data-filter="filter2" class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Semaine</a></li>
							<li><a href="#"  data-filter="filter3" class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Mois</a></li>
						</ul>
					</div>
					<div class="graph__wrapper">
						<div class="elem__graph px-2 py-2 md:px-4  md:py-4 filter1">
							<canvas id="chart1"></canvas>
						</div>
						<div class="elem__graph px-2 py-2 md:px-4  md:py-4 filter2" style="display:none;">
							<canvas id="chart2"></canvas>
						</div>
						<div class="elem__graph px-2 py-2 md:px-4  md:py-4 filter3" style="display:none;">
							<canvas id="chart3"></canvas>
						</div>
					</div>
				</div>
				<div class="container__table py-5 px-4 bg-white mt-7">
					<p class="mb-3 md:mb-5 font-medium text-base md:text-lg">New cars</p>
					<div class="table__wrapper w-full ">
						<table class="regular-table w-full">
							<tr>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">utilisateurs</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">fabricant</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">maquette</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">An</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">le prix</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Vérifier  <br>
								exclusives</th>
							</tr>
							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">Tarik farah</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dodge</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Charger SXT AWD</p>
								</td>
								<td   class="px-6 py-3">
									<p class="text-sm light__grey">2010</p>
								</td>
								<td  class="px-6 py-3 text-center">
									<p class="text-sm light__grey">320,000DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm validated">Vérifier</p>
								</td>
							</tr>


							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">osama</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Lexus</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">CT</p>
								</td>
								<td   class="px-6 py-3">
									<p class="text-sm light__grey">1990</p>
								</td>
								<td  class="px-6 py-3 text-center">
									<p class="text-sm light__grey">730,000DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm validated">Vérifier</p>
								</td>
							</tr>
							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">Tarik farah</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dodge</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Charger SXT AWD</p>
								</td>
								<td   class="px-6 py-3">
									<p class="text-sm light__grey">2010</p>
								</td>
								<td  class="px-6 py-3 text-center">
									<p class="text-sm light__grey">320,000DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm validated">Vérifier</p>
								</td>
							</tr>


							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">osama</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Lexus</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">CT</p>
								</td>
								<td   class="px-6 py-3">
									<p class="text-sm light__grey">1990</p>
								</td>
								<td  class="px-6 py-3 text-center">
									<p class="text-sm light__grey">730,000DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm validated">Vérifier</p>
								</td>
							</tr>
							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">Tarik farah</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dodge</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Charger SXT AWD</p>
								</td>
								<td   class="px-6 py-3">
									<p class="text-sm light__grey">2010</p>
								</td>
								<td  class="px-6 py-3 text-center">
									<p class="text-sm light__grey">320,000DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm validated">Vérifier</p>
								</td>
							</tr>


							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">osama</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Lexus</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">CT</p>
								</td>
								<td   class="px-6 py-3">
									<p class="text-sm light__grey">1990</p>
								</td>
								<td  class="px-6 py-3 text-center">
									<p class="text-sm light__grey">730,000DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm validated">Vérifier</p>
								</td>
							</tr>
							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">Tarik farah</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dodge</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Charger SXT AWD</p>
								</td>
								<td   class="px-6 py-3">
									<p class="text-sm light__grey">2010</p>
								</td>
								<td  class="px-6 py-3 text-center">
									<p class="text-sm light__grey">320,000DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm validated">Vérifier</p>
								</td>
							</tr>


							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">osama</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Lexus</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">CT</p>
								</td>
								<td   class="px-6 py-3">
									<p class="text-sm light__grey">1990</p>
								</td>
								<td  class="px-6 py-3 text-center">
									<p class="text-sm light__grey">730,000DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm validated">Vérifier</p>
								</td>
							</tr>
							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">Tarik farah</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dodge</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Charger SXT AWD</p>
								</td>
								<td   class="px-6 py-3">
									<p class="text-sm light__grey">2010</p>
								</td>
								<td  class="px-6 py-3 text-center">
									<p class="text-sm light__grey">320,000DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm validated">Vérifier</p>
								</td>
							</tr>


							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">osama</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Lexus</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">CT</p>
								</td>
								<td   class="px-6 py-3">
									<p class="text-sm light__grey">1990</p>
								</td>
								<td  class="px-6 py-3 text-center">
									<p class="text-sm light__grey">730,000DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm validated">Vérifier</p>
								</td>
							</tr>
							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">Tarik farah</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Dodge</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Charger SXT AWD</p>
								</td>
								<td   class="px-6 py-3">
									<p class="text-sm light__grey">2010</p>
								</td>
								<td  class="px-6 py-3 text-center">
									<p class="text-sm light__grey">320,000DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm validated">Vérifier</p>
								</td>
							</tr>


							<tr class="bg-white">
								<td class="px-6 py-3">
									<p class="dmsans text-sm font-medium dark__grey">osama</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">Lexus</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm light__grey">CT</p>
								</td>
								<td   class="px-6 py-3">
									<p class="text-sm light__grey">1990</p>
								</td>
								<td  class="px-6 py-3 text-center">
									<p class="text-sm light__grey">730,000DH</p>
								</td>
								<td  class="px-6 py-3">
									<p class="text-sm validated">Vérifier</p>
								</td>
							</tr>

							
						</table>
					</div>
				</div>
				<div class="pagination flex items-center justify-between flex-col  lg:flex-row px-6 mt-3">
					<p class="m-0 mr-0 mb-2 lg:mb-0 lg:mr-3 text-xs sm:text-sm text-center lg:text-left">Affichage de 1 à 10 sur 97 résultats</p>
					<ul class="flex items-center justify-end rounded-md  ">
						<li class="inline-flex items-center  justify-center"><a href="#" class=" bg-white inline-flex items-center justify-center w-full  h-full  font-medium text-sm relative"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 5.29289C13.0976 5.68342 13.0976 6.31658 12.7071 6.70711L9.41421 10L12.7071 13.2929C13.0976 13.6834 13.0976 14.3166 12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L7.29289 10.7071C6.90237 10.3166 6.90237 9.68342 7.29289 9.29289L11.2929 5.29289C11.6834 4.90237 12.3166 4.90237 12.7071 5.29289Z" fill="#6B7280"/>
						</svg>
						</a></li>
						<li class="inline-flex items-center  justify-center"><a href="#" class=" bg-white inline-flex items-center justify-center w-full  h-full  font-medium text-xs sm:text-sm relative">1</a></li>
						<li class="inline-flex items-center  justify-center"><a href="#" class=" bg-white inline-flex items-center justify-center w-full  h-full  font-medium text-xs sm:text-sm relative">2</a></li>
						<li class="inline-flex items-center  justify-center"><a href="#" class=" bg-white inline-flex items-center justify-center w-full  h-full  font-medium text-xs sm:text-sm relative">3</a></li>
						<li class="inline-flex items-center  justify-center bg-white dots">...</li>
					 	<li class="inline-flex items-center  justify-center"><a href="#" class=" bg-white inline-flex items-center justify-center w-full  h-full  font-medium text-xs sm:text-sm relative">8</a></li>
						<li class="inline-flex items-center  justify-center"><a href="#" class=" bg-white inline-flex items-center justify-center w-full  h-full  font-medium text-xs sm:text-sm relative">9</a></li>
						<li class="inline-flex items-center  justify-center"><a href="#" class=" bg-white inline-flex items-center justify-center w-full  h-full  font-medium text-xs sm:text-sm relative">10</a></li>
						<li class="inline-flex items-center  justify-center"><a href="#" class=" bg-white inline-flex items-center justify-center w-full  h-full font-medium text-sm relative"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M7.29289 14.7071C6.90237 14.3166 6.90237 13.6834 7.29289 13.2929L10.5858 10L7.29289 6.70711C6.90237 6.31658 6.90237 5.68342 7.29289 5.29289C7.68342 4.90237 8.31658 4.90237 8.70711 5.29289L12.7071 9.29289C13.0976 9.68342 13.0976 10.3166 12.7071 10.7071L8.70711 14.7071C8.31658 15.0976 7.68342 15.0976 7.29289 14.7071Z" fill="#6B7280"/>
						</svg>
						</a></li>
					</ul>
				</div>
			</div>

@endsection