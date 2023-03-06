@extends('layouts.admin')
@section('content')
<div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
    <div class="bidding__wrapper">
        <div class="head__filter flex-col md:flex-row flex items-start md:items-center justify-between mb-4 md:mb-7">
            <h6 class="font-medium m-0  text-base lg:text-lg dark__grey">Liste des vendeurs</h6>
            <div class="controls__tab flex items-center justify-end mt-3 md:mt-0 ml-0 md:ml-4">

                <!-- <div class="group__input relative mt-3">
                    <button type="submit" class="regular-btn px-4 
					rounded-md text-white inline-flex items-center 
					justify-center text-sm font-medium" style="float: right;">
                        <span class="inline-flex mr-2">
                            <img src="  {{ asset('assets/img/searchbutton.svg') }}" alt="">
                        </span> Recherche
                    </button>
                </div> -->
            </div>
        </div>
        <div class="filter__container px-3 md:px-6 pt-5 md:pt-6 pb-5 md:pb-10 bg-white rounded-md">
			<form class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-4  gap-y-3 sm:gap-y-4 md:gap-y-8"
					action="{{ route('user.search') }}" method="POST" role="search">
					@csrf

                <div class="group__input group__dropdown relative">
                    <p class="font-semibold mb-1 text-sm"> Nom</p>
                    <input type="text" style="padding-left: 12px; background-color: white;" 
					name="first_name" value="{{ old('first_name') }}" id="first_name"
                        class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers">
                </div>
                <div class="group__input group__dropdown relative">
                    <p class="font-semibold mb-1 text-sm"> Prénom</p>
                    <input type="text" style="padding-left: 12px; background-color: white;"
					name="last_name" value="{{ old('last_name') }}" id="last_name"
                        class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers">
                </div>
                <div class="group__input group__dropdown relative">
                    <p class="font-semibold mb-1 text-sm"> Type Vendeur</p>
                    <select name="type_vendeur" aria-label="Default select example"
                        style="padding-left: 12px; background-color: white;" class="h-10 inline-flex items-center
										 justify-start relative w-full select-type-sellers">
                        <option value="" selected disabled>Type Vendeur</option>
                        <option value=" {{ old('particular') }}">Partuculier</option>
                        <option value="{{ old('professional') }} ">Proffesionel</option>
                    </select>
                </div>

                <div class="group__input relative ">

                </div>
                <div class="group__input relative ">

                </div>
                <div class="group__input relative ">
                    <button type="submit" class="regular-btn px-4 float-right
					rounded-md text-white inline-flex items-center 
					justify-center text-sm font-medium" type="submit">
                        <span class="inline-flex mr-2">
                            <img src="  {{ asset('assets/img/searchbutton.svg') }}" alt="">
                        </span> Recherche
                    </button>
                </div>

            </form>
        </div>
    </div>
    <div class="table__wrapper w-full mt-7">
        <table class="regular-table w-full">
            <tr>
                <th class="text-xs uppercase  tracking-wider text-left font-medium px-2 py-3">utilisateurs</th>
                <th class="text-xs uppercase  tracking-wider text-left font-medium px-2 py-3">date <br> d'arrivée</th>
                <th class="text-xs uppercase  tracking-wider text-left font-medium px-2 py-3">dernière <br> connexion
                </th>
                <th class="text-xs uppercase  tracking-wider text-left font-medium px-2 py-3">E-mail <br> Téléphone</th>
                <!-- <th class="text-xs uppercase  tracking-wider text-left font-medium px-2 py-3">Tel</th> -->
                <th class="text-xs uppercase  tracking-wider text-left font-medium px-2 py-3"> Supprimer</th>
                <th class="text-xs uppercase  tracking-wider text-left font-medium px-2 py-3"> Afficher</th>

            </tr>
            @if($users->count() > 0 )
            @foreach($users as $user)
            <tr class="bg-white">
                <td class="px-2 py-3">
                    <div class="person__wrapper flex items-center justify-start">
                        <span class="inline-flex items-center justify-center mr-4"><img
                                src="{{ asset('assets/img/user1.png') }}" alt="user"></span>
                        <p class="font-medium text-sm dark__grey">{{ $user->first_name }}
                            {{ $user->last_name }}</p>
                    </div>
                </td>
                <td class="px-2 py-3">
                    <p class="text-sm light__grey">{{ \Carbon\Carbon::parse($user->created_at)->format('M j Y') }}</p>
                </td>
                <td class="px-2 py-3">
                    <p class="text-sm light__grey">{{ \Carbon\Carbon::parse($user->update_at)->format('M j Y') }}</p>
                </td>
                <td class="px-2 py-3">
                    <div class="double__desc flex flex-col items-start">
                        <p class="text-sm dark__grey">{{ $user->email }}</p>
                        <span class="text-sm light__grey">{{ $user->tel }}</span>
                    </div>

                </td>

                <!-- <td  class="px-2 py-3 text-center">
										<p class="text-sm light__grey">{{ $user->number_click }}</p>
									</td> -->


                <td class="px-6 py-3 text-center">
                    <div class="remove__button flex items-center justify-center">
                        <a href="{{ route('user.delete', $user->id) }}" class="delete-confirm" title="supprimer">
                            <img src="{{ asset('img/remove.svg')}}" alt="remove"></a>
                    </div>
                </td>
                <td>
                    <div class="remove__button flex items-center justify-center">
                        <a data-bs-toggle="modal" data-bs-target="#overlapping-modal-preview_{{ $user->id }}"
                            data-bs-whatever="@mdo" title="Mise à jour"><img src="{{asset('assets/img/editor.svg')}}"
                                alt="edit"></a>
                    </div>
                </td>
            </tr>




            <!-- model for show -->
            <div class="modal fade" id="overlapping-modal-preview_{{ $user->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Vendeur :
                            </h5>
                            <span class="style-popup-user">
                                {{ $user->first_name }} {{ $user->last_name }}
                            </span>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">E-mail :
                                    </label>
                                    <span class="style-popup-user" style="float: right;"> {{ $user->email }}</span>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label"> Telephone :</label>
                                    <span class="style-popup-user" style="float: right;"> {{ $user->tel }} </span>

                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label"> Date d'inscription :</label>
                                    <span class="style-popup-user" style="float: right;">
                                        {{ \Carbon\Carbon::parse($user->date_car)->format('M, j Y') }}</span>
                                </div>
                                <div class="mb-3">

                                    @foreach($user->cars as $car)
                                    <span class="style-popup-user"> {{ $car->brand }} - {{ $car->model }} -
                                        {{ $car->price }} DH</span> <br>
                                    @endforeach
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger"
                                data-bs-dismiss="modal">Annuler</button>
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