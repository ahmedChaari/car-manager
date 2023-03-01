@extends('layouts.admin')
@section('content')
<div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
				<div class="bidding__wrapper">
					<div class="head__filter flex-col md:flex-row flex items-start md:items-center justify-between mb-4 md:mb-7">
						<h6 class="font-medium m-0  text-base lg:text-lg dark__grey">Liste des vendeurs</h6>
						<div class="controls__tab flex items-center justify-end mt-3 md:mt-0 ml-0 md:ml-4">
							
							<div class="button__wrapper">
								<a href="#" class="regular-btn px-4 rounded-md text-white inline-flex items-center justify-center text-sm font-medium">
									<span class="inline-flex mr-2"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2 6H17" stroke="white" stroke-width="2" stroke-linecap="round"/>
								<path d="M2 10H11" stroke="white" stroke-width="2" stroke-linecap="round"/>
								<path d="M2 14H7" stroke="white" stroke-width="2" stroke-linecap="round"/>
								</svg>
								</span> Trier par</a>
							</div>
						</div>
					</div>
					<div class="filter__container px-3 md:px-6 pt-5 md:pt-6 pb-5 md:pb-10 bg-white rounded-md">
						<form action="" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-4  gap-y-3 sm:gap-y-4 md:gap-y-8">
							

							<div class="group__input group__dropdown relative">
								<p class="font-semibold mb-1 text-sm"> Nom</p>
								<input type="text"  style="padding-left: 12px; background-color: white;"
								class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers"> 
							</div>
							<div class="group__input group__dropdown relative">
								<p class="font-semibold mb-1 text-sm"> Prénom</p>
								<input type="text"  style="padding-left: 12px; background-color: white;"
								class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers"> 
							</div>
							

							<div class="group__input group__dropdown relative">
									<p class="font-semibold mb-1 text-sm"> Type Vendeur</p>
									<select  name="brand" aria-label="Default select example"

									
									
										style="padding-left: 12px; background-color: white;"
										class="h-10 inline-flex items-center
										 justify-start relative w-full select-type-sellers">
										<option value="" selected disabled>Type Vendeur</option>
										<option value="">Partuculier</option>
										<option value="">Proffesionel</option>
									</select>
								</div>


							
							
						</form>
					</div>
				</div>
				<div class="table__wrapper w-full mt-7">
						<table class="regular-table w-full">
							<tr>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-2 py-3">utilisateurs</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-2 py-3">date d'arrivée</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-2 py-3">dernière connexion</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-2 py-3">offres exclusives</th>
								<th class="text-xs uppercase  tracking-wider text-center font-medium px-2 py-3">enchères partagées</th>
								<th class="text-xs uppercase  tracking-wider text-center font-medium px-2 py-3"> Supprimer</th>
								<th class="text-xs uppercase  tracking-wider text-center font-medium px-2 py-3"> Afficher</th>
						
							</tr>
							@if($users->count() > 0 )
							@foreach($users as $user)
								<tr class="bg-white">
									<td class="px-2 py-3">
										<div class="person__wrapper flex items-center justify-start">
											<span class="inline-flex items-center justify-center mr-4"><img src="{{ asset('assets/img/user1.png') }}" alt="user"></span>
											<p class="font-medium text-sm dark__grey">{{ $user->user->first_name }} {{ $user->user->last_name }}</p>
										</div>
									</td>
									<td  class="px-2 py-3">
										<p class="text-sm light__grey">{{ \Carbon\Carbon::parse($user->created_at)->format('M j Y') }}</p>
									</td>
									<td  class="px-2 py-3">
										<p class="text-sm light__grey">{{ \Carbon\Carbon::parse($user->date_car)->format('M j Y') }}</p>
									</td>
									<td   class="px-2 py-3">
										<p class="text-sm light__grey">{{ $user->price }} DH</p>
									</td>
									<td  class="px-2 py-3 text-center">
										<p class="text-sm light__grey">{{ $user->number_click }}</p>
									</td>
									<td>
										<div class="remove__button flex items-center justify-center delete-confirm" >
											<a href="{{ route('user.delete', $user->id) }}"
												class="delete-confirm"  title="supprimer">
												<img src="img/remove.svg"  alt="remove"></a>	
										</div>
									</td>
									<td>	
										<div class="remove__button flex items-center justify-center" >
											<a  data-bs-toggle="modal" 
											data-bs-target="#overlapping-modal-preview_{{ $user->id }}" data-bs-whatever="@mdo"
											title="Mise à jour" ><img src="{{asset('assets/img/editor.svg')}}" alt="edit"></a>
										</div>
									</td>
								</tr>




											<!-- model for show -->
					<div class="modal fade" id="overlapping-modal-preview_{{ $user->id }}"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Vendeur :
									</h5>
									<span class="style-popup-user">
									{{ $user->user->first_name }} {{ $user->user->last_name }}
									</span>	
							</div>
							<div class="modal-body">
								<form>
									<div class="mb-3">
										<label for="message-text" class="col-form-label">voiture :
											</label>
											<span class="style-popup-user">	 {{ $user->brand }} {{ $user->model }}</span>
									</div>
									<div class="mb-3">
										<label for="recipient-name" class="col-form-label"> Prix de vente :</label>
										<span class="style-popup-user">	 {{ $user->price }} DH</span>	
									</div>
									<div class="mb-3">
										<label for="recipient-name" class="col-form-label"> Date de creation :</label>
										<span class="style-popup-user">	{{ \Carbon\Carbon::parse($user->date_car)->format('M j Y') }}</span>	
									</div>
									
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Annuler</button>
							</div>
							</div>
						</div>
					</div>
					<!--End model for update-->
							@endforeach
                    @else
                    <h3 class="text-center mt-5 mb-5">Pas encore du utilisateurs</h3>
                    @endif
							
							
						</table>
						{{ $users->links() }}
					</div>
				
			</div>



@endsection


@section('scripts')

@endsection