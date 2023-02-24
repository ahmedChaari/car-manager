@extends('layouts.admin')
@section('content')

<div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
				<div class="validate__user">
					<h6 class="font-medium m-0  mb-3 lg:mb-6 text-base lg:text-lg dark__grey">Choose a user to validate</h6>
					<div class="table__wrapper w-full">
						<table class="regular-table w-full">
							<tr>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">informations utilisateur</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">fabricant et modèle</th>
								<th class="text-xs uppercase  tracking-wider text-center font-medium px-6 py-3">Kilométrage</th>
								<th class="text-xs uppercase  tracking-wider text-center font-medium px-6 py-3">an</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Prix</th>
								<th class="text-xs uppercase  tracking-wider text-center font-medium px-6 py-3">validate</th>
							</tr>
                            @if($cars->count() > 0 )
							@foreach($cars as $car)
							<tr class="bg-white">
								<td class="px-6 py-3">
									<div class="user__info flex items-center justify-start">
                                    <span class="inline-flex items-center justify-center mr-4"><img src="{{ asset('assets/img/user1.png') }}" alt="user"></span>
										<div class="user__details flex flex-col items-start">
											<p class="m-0 font-medium text-sm dark__grey">{{ $car->user->first_name }} {{ $car->user->last_name }}</p>
											<span class="m-0 text-sm light__grey">{{ $car->user->email }} - {{ $car->user->tel }}</span>
										</div>
									</div>
								</td>
								<td  class="px-6 py-3">
									<div class="double__desc flex flex-col items-start">
										<p class="text-sm dark__grey">{{ $car->brand }}</p>
										<span class="text-sm light__grey">{{ $car->model }}</span>
									</div>
								</td>
								<td  class="px-6 py-3">
									<div class="km text-center">
										<p class="text-xs light__grey">{{ $car->mileage }} Km</p>
									</div>
								</td>
								<td   class="px-6 py-3">
									<div class="an text-center">
										<p class="text-xs light__grey">{{ \Carbon\Carbon::parse($car->date_car)->format('Y') }}</p>
										
									</div>
								</td>
								<td  class="px-6 py-3">
									<div class="prix text-left">
										<p class="text-sm light__grey">{{ $car->price }} DH</p>
									</div>
								</td>
								<td  class="px-6 py-3">
									<div class="status">
										<p class="text-center validated text-sm">valider</p>
									</div>
								</td>
							</tr>
                            @endforeach
                            @else
                            <h3 class="text-center mt-5 mb-5">Pas encore des cars valides</h3>
                            @endif
							
						</table>
                        
					</div>
                    {{ $cars->links() }}
				</div>
				
			</div>

@endsection