@extends('layouts.admin')
@section('content')
<div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
				<div class="bidding__wrapper">
					<div class="head__filter flex-col md:flex-row flex items-start md:items-center justify-between mb-4 md:mb-7">
						<h6 class="font-medium m-0  text-base lg:text-lg dark__grey">Liste des utilisateurs d'enchères</h6>
						<div class="controls__tab flex items-center justify-end mt-3 md:mt-0 ml-0 md:ml-4">
							<a href="#" class='inline-flex items-center justify-center rounded-md bg-white mr-3'>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13.125 11.25C12.7859 11.25 12.3067 11.2969 11.8079 11.3652C11.5748 11.3971 11.3971 11.5748 11.3652 11.8079C11.2969 12.3067 11.25 12.7859 11.25 13.125C11.25 13.4641 11.2969 13.9433 11.3652 14.4421C11.3971 14.6752 11.5748 14.8529 11.8079 14.8848C12.3067 14.9531 12.7859 15 13.125 15C13.4641 15 13.9433 14.9531 14.4421 14.8848C14.6752 14.8529 14.8529 14.6752 14.8848 14.4421C14.9531 13.9433 15 13.4641 15 13.125C15 12.7859 14.9531 12.3067 14.8848 11.8079C14.8529 11.5748 14.6752 11.3971 14.4421 11.3652C13.9433 11.2969 13.4641 11.25 13.125 11.25ZM11.6043 9.87907C10.7044 10.0023 10.0023 10.7044 9.87907 11.6043C9.80838 12.1205 9.75 12.6811 9.75 13.125C9.75 13.5689 9.80838 14.1295 9.87907 14.6457C10.0023 15.5456 10.7044 16.2477 11.6043 16.3709C12.1205 16.4416 12.6811 16.5 13.125 16.5C13.5689 16.5 14.1295 16.4416 14.6457 16.3709C15.5456 16.2477 16.2477 15.5456 16.3709 14.6457C16.4416 14.1295 16.5 13.5689 16.5 13.125C16.5 12.6811 16.4416 12.1205 16.3709 11.6043C16.2477 10.7044 15.5456 10.0023 14.6457 9.87907C14.1295 9.80838 13.5689 9.75 13.125 9.75C12.6811 9.75 12.1205 9.80838 11.6043 9.87907Z" fill="#374151"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M4.875 11.25C4.53586 11.25 4.05669 11.2969 3.55786 11.3652C3.32481 11.3971 3.14711 11.5748 3.1152 11.8079C3.04688 12.3067 3 12.7859 3 13.125C3 13.4641 3.04688 13.9433 3.1152 14.4421C3.14711 14.6752 3.32481 14.8529 3.55786 14.8848C4.05669 14.9531 4.53586 15 4.875 15C5.21414 15 5.69331 14.9531 6.19214 14.8848C6.42519 14.8529 6.60289 14.6752 6.6348 14.4421C6.70312 13.9433 6.75 13.4641 6.75 13.125C6.75 12.7859 6.70312 12.3067 6.6348 11.8079C6.60289 11.5748 6.42519 11.3971 6.19214 11.3652C5.69331 11.2969 5.21414 11.25 4.875 11.25ZM3.35433 9.87907C2.4544 10.0023 1.75232 10.7044 1.62907 11.6043C1.55838 12.1205 1.5 12.6811 1.5 13.125C1.5 13.5689 1.55838 14.1295 1.62907 14.6457C1.75232 15.5456 2.4544 16.2477 3.35433 16.3709C3.87048 16.4416 4.43112 16.5 4.875 16.5C5.31888 16.5 5.87952 16.4416 6.39567 16.3709C7.2956 16.2477 7.99768 15.5456 8.12093 14.6457C8.19162 14.1295 8.25 13.5689 8.25 13.125C8.25 12.6811 8.19162 12.1205 8.12093 11.6043C7.99768 10.7044 7.2956 10.0023 6.39567 9.87907C5.87952 9.80838 5.31888 9.75 4.875 9.75C4.43112 9.75 3.87048 9.80838 3.35433 9.87907Z" fill="#374151"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13.125 3C12.7859 3 12.3067 3.04688 11.8079 3.1152C11.5748 3.14711 11.3971 3.32481 11.3652 3.55786C11.2969 4.05669 11.25 4.53586 11.25 4.875C11.25 5.21414 11.2969 5.69331 11.3652 6.19214C11.3971 6.42519 11.5748 6.60289 11.8079 6.6348C12.3067 6.70312 12.7859 6.75 13.125 6.75C13.4641 6.75 13.9433 6.70312 14.4421 6.6348C14.6752 6.60289 14.8529 6.42519 14.8848 6.19214C14.9531 5.69331 15 5.21414 15 4.875C15 4.53586 14.9531 4.05669 14.8848 3.55786C14.8529 3.32481 14.6752 3.14711 14.4421 3.1152C13.9433 3.04688 13.4641 3 13.125 3ZM11.6043 1.62907C10.7044 1.75232 10.0023 2.4544 9.87907 3.35433C9.80838 3.87048 9.75 4.43112 9.75 4.875C9.75 5.31888 9.80838 5.87952 9.87907 6.39567C10.0023 7.2956 10.7044 7.99768 11.6043 8.12093C12.1205 8.19162 12.6811 8.25 13.125 8.25C13.5689 8.25 14.1295 8.19162 14.6457 8.12093C15.5456 7.99768 16.2477 7.2956 16.3709 6.39567C16.4416 5.87952 16.5 5.31888 16.5 4.875C16.5 4.43112 16.4416 3.87048 16.3709 3.35433C16.2477 2.4544 15.5456 1.75232 14.6457 1.62907C14.1295 1.55838 13.5689 1.5 13.125 1.5C12.6811 1.5 12.1205 1.55838 11.6043 1.62907Z" fill="#374151"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M4.875 3C4.53586 3 4.05669 3.04688 3.55786 3.1152C3.32481 3.14711 3.14711 3.32481 3.1152 3.55786C3.04688 4.05669 3 4.53586 3 4.875C3 5.21414 3.04688 5.69331 3.1152 6.19214C3.14711 6.42519 3.32481 6.60289 3.55786 6.6348C4.05669 6.70312 4.53586 6.75 4.875 6.75C5.21414 6.75 5.69331 6.70312 6.19214 6.6348C6.42519 6.60289 6.60289 6.42519 6.6348 6.19214C6.70312 5.69331 6.75 5.21414 6.75 4.875C6.75 4.53586 6.70312 4.05669 6.6348 3.55786C6.60289 3.32481 6.42519 3.14711 6.19214 3.1152C5.69331 3.04688 5.21414 3 4.875 3ZM3.35433 1.62907C2.4544 1.75232 1.75232 2.4544 1.62907 3.35433C1.55838 3.87048 1.5 4.43112 1.5 4.875C1.5 5.31888 1.55838 5.87952 1.62907 6.39567C1.75232 7.2956 2.4544 7.99768 3.35433 8.12093C3.87048 8.19162 4.43112 8.25 4.875 8.25C5.31888 8.25 5.87952 8.19162 6.39567 8.12093C7.2956 7.99768 7.99768 7.2956 8.12093 6.39567C8.19162 5.87952 8.25 5.31888 8.25 4.875C8.25 4.43112 8.19162 3.87048 8.12093 3.35433C7.99768 2.4544 7.2956 1.75232 6.39567 1.62907C5.87952 1.55838 5.31888 1.5 4.875 1.5C4.43112 1.5 3.87048 1.55838 3.35433 1.62907Z" fill="#374151"/>
								</svg>
							</a>
							<a href="#" class='inline-flex items-center justify-center rounded-md bg-white mr-3'><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_4_2186)">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M1.66634 13.3333C1.2061 13.3333 0.833008 13.7063 0.833008 14.1666C0.833008 14.6268 1.2061 14.9999 1.66634 14.9999H10.833C11.2932 14.9999 11.6663 14.6268 11.6663 14.1666C11.6663 13.7063 11.2932 13.3333 10.833 13.3333H1.66634ZM15.833 13.3333C15.3728 13.3333 14.9997 13.7063 14.9997 14.1666C14.9997 14.6268 15.3728 14.9999 15.833 14.9999H18.333C18.7932 14.9999 19.1663 14.6268 19.1663 14.1666C19.1663 13.7063 18.7932 13.3333 18.333 13.3333H15.833Z" fill="#374151"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M13.3333 15.8333C14.2538 15.8333 15 15.0871 15 14.1666C15 13.2461 14.2538 12.4999 13.3333 12.4999C12.4129 12.4999 11.6667 13.2461 11.6667 14.1666C11.6667 15.0871 12.4129 15.8333 13.3333 15.8333ZM13.3333 17.4999C15.1743 17.4999 16.6667 16.0075 16.6667 14.1666C16.6667 12.3256 15.1743 10.8333 13.3333 10.8333C11.4924 10.8333 10 12.3256 10 14.1666C10 16.0075 11.4924 17.4999 13.3333 17.4999Z" fill="#374151"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M1.66634 5C1.2061 5 0.833008 5.3731 0.833008 5.83333C0.833008 6.29357 1.2061 6.66667 1.66634 6.66667H4.16634C4.62658 6.66667 4.99967 6.29357 4.99967 5.83333C4.99967 5.3731 4.62658 5 4.16634 5H1.66634ZM9.16634 5C8.7061 5 8.33301 5.3731 8.33301 5.83333C8.33301 6.29357 8.7061 6.66667 9.16634 6.66667H18.333C18.7932 6.66667 19.1663 6.29357 19.1663 5.83333C19.1663 5.3731 18.7932 5 18.333 5H9.16634Z" fill="#374151"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M6.66634 7.5C7.58682 7.5 8.33301 6.75381 8.33301 5.83333C8.33301 4.91286 7.58682 4.16667 6.66634 4.16667C5.74587 4.16667 4.99967 4.91286 4.99967 5.83333C4.99967 6.75381 5.74587 7.5 6.66634 7.5ZM6.66634 9.16667C8.50729 9.16667 9.99967 7.67428 9.99967 5.83333C9.99967 3.99238 8.50729 2.5 6.66634 2.5C4.82539 2.5 3.33301 3.99238 3.33301 5.83333C3.33301 7.67428 4.82539 9.16667 6.66634 9.16667Z" fill="#374151"/>
							</g>
							<defs>
							<clipPath id="clip0_4_2186">
							<rect width="20" height="20" fill="white"/>
							</clipPath>
							</defs>
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
						<form action="" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-4  gap-y-3 sm:gap-y-4 md:gap-y-8">
							

							<div class="group__input group__dropdown relative">
								<p class="font-semibold mb-1 text-sm"> Nom</p>
								<input type="text"  style="padding-left: 12px; background-color: white;"
								class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers"> 
							</div>
							<div class="group__input group__dropdown relative">
								<p class="font-semibold mb-1 text-sm">Type Vendeur</p>
								<input type="text"  style="padding-left: 12px; background-color: white;"
								class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers"> 
							</div>
							

							<div class="group__input group__dropdown relative">
									<p class="font-semibold mb-1 text-sm"> Type Vendeur</p>
									<select  name="brand" aria-label="Default select example"
										style="padding-left: 12px; background-color: white;"
										class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers">
										<option value="" selected disabled>--------</option>
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
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">utilisateurs</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">date d'arrivée</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">dernière connexion</th>
								<th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">offres exclusives</th>
								<th class="text-xs uppercase  tracking-wider text-center font-medium px-6 py-3">enchères partagées</th>
						
							</tr>
							@if($users->count() > 0 )
							@foreach($users as $user)
								<tr class="bg-white">
									<td class="px-6 py-3">
										<div class="person__wrapper flex items-center justify-start">
											<span class="inline-flex items-center justify-center mr-4"><img src="{{ asset('assets/img/user1.png') }}" alt="user"></span>
											<p class="font-medium text-sm dark__grey">{{ $user->first_name }} {{ $user->last_name }}</p>
										</div>
									</td>
									<td  class="px-6 py-3">
										<p class="text-sm light__grey">{{ \Carbon\Carbon::parse($user->created_at)->format('M j Y') }}</p>
									</td>
									<td  class="px-6 py-3">
										<p class="text-sm light__grey">Jan. 31, 2008</p>
									</td>
									<td   class="px-6 py-3">
										<p class="text-sm light__grey">7,561DH</p>
									</td>
									<td  class="px-6 py-3 text-center">
										<p class="text-sm light__grey">2</p>
									</td>
								</tr>
							@endforeach
                    @else
                    <h3 class="text-center mt-5 mb-5">Pas encore du utilisateurs</h3>
                    @endif
							
							
						</table>
						{{ $users->links() }}
					</div>
				
			</div>



@endsection