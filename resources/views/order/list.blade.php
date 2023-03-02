@extends('layouts.admin')
@section('content')

	<div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
		<div class="head__filter flex-col md:flex-row flex items-start md:items-center justify-between mb-4 md:mb-7">
			<h6 class="font-medium m-0  text-base lg:text-lg dark__grey">Paiements</h6>
			<div class="controls__tab flex items-center justify-end mt-3 md:mt-0 ml-0 md:ml-4">
				
				
				
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
		<div class="table__wrapper w-full mt-4 md:mt-7">
				<table class="regular-table w-full">
					<tr>
						<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Revendeur</th>
						<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">date d'adhésion</th>
						<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">montant <br>
							du paiement</th>
						<th class="text-xs uppercase  tracking-wider text-center font-medium px-6 py-3">statut de <br>
							 paiement</th>
						<th class="text-xs uppercase  tracking-wider text-center font-medium px-6 py-3">Éditer</th>
						<th class="text-xs uppercase  tracking-wider text-center font-medium px-6 py-3">effacer</th>
					</tr>
					@if($payments->count() > 0 )
					@foreach($payments as $payment)

					<tr class="bg-white">
						<td class="px-6 py-3">
							<p class="font-medium text-sm dark__grey">{{ $payment->user->first_name }} {{ $payment->user->last_name }}</p>
						</td>
						
						<td  class="px-6 py-3">
							<p class="text-sm light__grey">{{ $payment->created_at->format('Y-m-d') }}</p>
						</td>
						<td   class="px-6 py-3">
							<p class="text-sm light__grey">{{ number_format($payment->somme, 2) }} DH</p>
						</td>
						<td  class="px-6 py-3 text-center">
							<div class="payment__status flex items-center justify-center">
								@if ($payment->status == 1)
								<p class="confirmed text-xs font-medium">Confirmed</p>
								@elseif($payment->status == 0)
								<p class="canceled text-xs font-medium">Annulé</p>
								@else($payment->status == null)
								<p class="waiting text-xs font-medium">Waiting</p>
								@endif
							</div>
						</td>
						<td  class="px-6 py-3 text-center" title="Mise à jour">
							<div class="edit__button flex items-center justify-center">
								<a href="#" 
								data-bs-toggle="modal" data-bs-target="#overlapping-modal-preview_{{ $payment->id }}" data-bs-whatever="@mdo"
								
								title="Mise à jour" ><img src="img/editor.svg" alt="edit"></a>
							</div>
						</td>
						<td  class="px-6 py-3 text-center">
							<div class="remove__button flex items-center justify-center" >
								<a href="{{ route('payment.delete', $payment->id) }}"
									class="delete-confirm"  title="supprimer">
									<img src="img/remove.svg"  alt="remove"></a>
							</div>
						</td>
					</tr>
					
					<!-- model for update-->
					<div class="modal fade" id="overlapping-modal-preview_{{ $payment->id }}"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Revendeur :
									</h5>
									<span class="style-popup-user">
									{{ $payment->user->first_name }} {{ $payment->user->last_name }}
									</span>	
							</div>
							<div class="modal-body">
								<form>
									<div class="mb-3">
										<label for="message-text" class="col-form-label">Date du paiement :
											<span class="style-popup-user">	 {{ $payment->created_at->format('Y-m-d') }}
											</span>	
											</label>
									</div>
									<div class="mb-3">
										<label for="recipient-name" class="col-form-label"> Montant du Paiement :</label>
										<input type="number" value="{{ number_format($payment->somme, 2) }}" class="form-control" id="recipient-name">
									</div>
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" 
										name="status" value="{{ $payment->status == true ? 'checked' : ''}}"
										id="" >
										<label class="form-check-label" for="flexSwitchCheckChecked">Valider le paiement</label>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Annuler</button>
								<button type="button" class="btn btn-outline-primary">Mise à jour</button>
							</div>
							</div>
						</div>
					</div>
					<!--End model for update-->
					@endforeach
					@else
					<h3 class="text-center mt-5 mb-5">Pas encore du Paiements</h3>
					@endif
				</table>
			</div>
			{{ $payments->links() }}
	</div>
@endsection



