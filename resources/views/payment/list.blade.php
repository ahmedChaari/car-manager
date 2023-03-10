@extends('layouts.admin')
@section('content')


<div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
				<div class="payment__head flex flex-col md:flex-row items-center justify-between mb-4 lg:mb-7">
					<p class="m-0  text-base lg:text-lg font-medium text-center md:text-left">Charger des crédits</p>
					<!-- <p class="m-0  text-base lg:text-lg font-medium text-center md:text-right flex flex-col md:block">les credits actuels comptent : <span class="active__color">12000 Dh</span></p> -->
				</div>
				<div class="payment__box bg-white">
					<form 
						action="{{ route('payment.create')  }}"
						method="post"
						class="w-full flex-col md:flex-row flex justify-between">
						@csrf
						<div class="payment__picker pt-4 md:pt-5  pl-4 md:pl-6 mb-4 md:pb-8 pr-4 md:pr-6 xl:pr-10">
							<p class="mb-3 md:mb-9 text-base xl:text-lg font-medium">Choisissez unspan <span class="active__color">forfait</span></p>
							<div class="picker__grid grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-5  gap-y-3 sm:gap-y-5">
								<input type="hidden" name="somme" value="200">
								<a href="#" class="inline-flex items-center justify-center  picker__el" data-value="200">
									<p class="text-base md:text-lg xl:text-xl active__color" name=''><span class="font-bold">200</span> DH</p>
								</a>
								<input type="hidden" name="somme" value="300">
								<a href="#" class="inline-flex items-center justify-center  picker__el active__picker" data-value="300">
									<p class="text-base md:text-lg xl:text-xl active__color" name=''><span class="font-bold">300</span> DH</p>
								</a>
								<input type="hidden" name="somme" value="500">
								<a href="#" class="inline-flex items-center justify-center  picker__el" data-value="500">
									<p class="text-base md:text-lg xl:text-xl active__color" name=''><span class="font-bold">500</span> DH</p>
								</a>
								<input type="hidden" name="somme" value="1000">
								<a href="#" class="inline-flex items-center justify-center  picker__el" data-value="1000">
									<p class="text-base md:text-lg xl:text-xl active__color" name=''><span class="font-bold">1000</span> DH</p>
								</a>
								<input type="hidden" name="somme" value="2000">
								<a href="#" class="inline-flex items-center justify-center  picker__el" data-value="2000">
									<p class="text-base md:text-lg xl:text-xl active__color" name=''><span class="font-bold">2000</span> DH</p>
								</a>
								<input type="hidden" name="somme" value="5000">
								<a href="#" class="inline-flex items-center justify-center  picker__el" data-value="5000">
									<p class="text-base md:text-lg xl:text-xl active__color" name=''><span class="font-bold">5000</span> DH</p>
								</a>
							</div>
							<div class="custom__payment mt-6">


							
							<!-- user list -->
								<p class="mb-2 text-base xl:text-lg font-medium">Choisissez utilisateur que vous avez besoin</p>
								<div class="group__input w-full relative flex items-center">
									<select name="user_id" class="text-base px-4 w-full bg-white h-11" value='user_id'
									style="border: 1px solid #D0D5DD;box-shadow: 0px 1px 2px rgb(16 24 40 / 5%); border-radius: 8px;">
										<option value="" disabled>PROPRIÉTAIRE</option>
											@foreach($users as $user)
											<option value="{{ $user->id }}" >{{ $user->first_name }}  {{ $user->last_name }}</option>
											@endforeach					
									</select>
									<button type="submit" class="btn btn-outline-primary ml-4">Charger</button>
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
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">code</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">PROPRIÉTAIRE</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">facture</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Montant</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">date</th>
								
								<th class="text-xs uppercase  tracking-wider text-center font-medium px-6 py-3">statut</th>
							</tr>
							@foreach($orders as $order)
								<tr class="bg-white">
									<td  class="px-6 py-3">
										<p class="text-sm light__grey">{{ $order->code }}</p>
									</td>
									<td  class="px-6 py-3">
										<p class="text-sm light__grey">{{$order->user->first_name }} {{$order->user->last_name }}</p>
									</td>
									<td class="px-6 py-3">
										<p class="dmsans text-sm font-medium dark__grey">{{ $order->somme_passe }} Dh  - {{ \Carbon\Carbon::parse($order->created_at)->format('M j Y') }}</p>
									</td>
									<td  class="px-6 py-3">
										<p class="text-sm light__grey">{{ number_format($order->somme , 2) }} Dh</p>
									</td>
									<td  class="px-6 py-3">
										<p class="text-sm light__grey">{{ $order->created_at->format('Y-m-d') }}</p>
									</td>
									
									<td   class="px-6 py-3 text-center">										
										<div class="payment__status flex items-center justify-center">
											@if ($order->status == 1)
											<p class="confirmed text-xs font-medium">Confirmed</p>
											
											@else($order->status == 0)
											<p class="waiting text-xs font-medium">Waiting</p>
											@endif
										</div>
									</td>
									
								</tr>
							@endforeach	
							

						</table>


						{{ $orders->links() }}
					</div>
				
			</div>

@endsection
