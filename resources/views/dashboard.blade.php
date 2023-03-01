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
                    <li class="mr-8  active__switcher"><a href="#" data-filter="bar1"
                            class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Jour</a>
                    </li>
                    <li class="mr-8"><a href="#" data-filter="bar2"
                            class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Semaine</a>
                    </li>
                    <li><a href="#" data-filter="bar3"
                            class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Mois</a>
                    </li>
                </ul>
            </div>
            <div class="registration__bars flex items-end justify-between bar1">
                @foreach ($dates as $date => $count)
                <div class="elem__bar flex flex-col justify-center items-center w-full">
                    <div class="bar__container biggest flex items-end  mb-2 justify-center">
                        <div class="active__bar" style="height:<?= $count ?>%" title="<?= $count ?>"></div>
                    </div>
                    <p class="mt-4" style="transform: rotate(320deg);">  {{ \Carbon\Carbon::parse($date)->format('M j') }}</p>
                </div>
                @endforeach
            </div>
            <div class="registration__bars flex items-end justify-between bar2" style="display:none;">
                @foreach ($weeks as $date => $count)
                <div class="elem__bar flex flex-col justify-center items-center w-full">
                    <div class="bar__container biggest flex items-end  mb-2 justify-center">
                        <div class="active__bar" style="height:<?= $count ?>%" title="<?= $count ?>"></div>
                    </div>
                    <p class="mt-4" style="transform: rotate(320deg);"> {{ \Carbon\Carbon::parse($date)->format('M d') }} </p>
                </div>
                @endforeach
            </div>
            <div class="registration__bars flex items-end justify-between bar3" style="display:none;">
                @foreach ($months as $date => $count)

                <div class="elem__bar biggest flex flex-col justify-center items-center w-full">
                    <div class="bar__container biggest flex items-end  mb-2 justify-center">
                        <div class="active__bar" style="height:<?= $count ?>%" title="<?= $count ?>"></div>
                    </div>
                    <p class="mt-4" style="transform: rotate(320deg);"> {{ \Carbon\Carbon::parse($date)->format('M Y') }} </p>
                </div>
                @endforeach
            </div>


        </div>
        <div class="auction__wrapper px-4 py-4 pb-0 bg-white">
            <p class="mb-3 md:mb-5 font-medium text-base md:text-lg">Voitures</p>
            <div class="switcher__wrapper auction__switcher  mb-5">
                <ul class="flex items-center justify-start">
                    <li class="mr-8  active__switcher"><a href="#" data-filter="container1"
                            class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Jour</a>
                    </li>
                    <li class="mr-8"><a href="#" data-filter="container2"
                            class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Semaine</a>
                    </li>
                    <li><a href="#" data-filter="container3"
                            class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Mois</a>
                    </li>
                </ul>
            </div>
            <div class="auction__container container1">
                @foreach($carList as $car)
                <div
                    class="auction__elem flex-col-reverse xl:flex-row mb-3 px-4 py-4 bg-white flex items-start justify-between">
                    <div class="auction__left">
                        <p class="m-0 mb-2 font-semibold text-sm md:text-base">{{ $car->brand }} {{ $car->model }}</p>
                        <ul class="mb-2">
                            <li class="flex items-center justify-start mb-2 text-sm md:text-base">
                                <span class="inline-flex items-center mr-2">
                                    <img src="{{  asset('img/l1.svg') }}" alt="l1"></span> MAD {{ $car->price }}
                            </li>
                            <li class="flex items-center justify-start text-sm md:text-base">
                                <span class="inline-flex items-center mr-2">
                                    <img src="{{  asset('assets/img/l2.svg') }}" alt="l1"></span> Dernière enchère le :

                                {{ \Carbon\Carbon::parse($car->created_at)->format('M j Y') }}
                            </li>
                        </ul>
                        <div class="user__list flex items-center justify-start">
                            <div class="el__user inline-flex items-center justify-center">
                                <img src="{{  asset('assets/img/us1.png') }}" alt="us">
                            </div>
                            <div class="el__user inline-flex items-center justify-center">
                                <img src="{{  asset('assets/img/us2.png') }}" alt="us">
                            </div>
                            <div class="el__user inline-flex items-center justify-center">
                                <img src="{{  asset('img/us3.png') }}" alt="us">
                            </div>
                            <div class="el__user inline-flex items-center justify-center">
                                <span>+{{ $car->number_view }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="auction__right ml-auto mb-2 xl:mb-0 inline-flex items-center justify-center">
                        <img src="img/smalllogo.svg" alt="smalllogo">
                    </div>
                </div>
                @endforeach
            </div>


            <div class="auction__container container2" style="display:none;">
                @foreach($carList as $car)
                <div
                    class="auction__elem flex-col-reverse xl:flex-row mb-3 px-4 py-4 bg-white flex items-start justify-between">
                    <div class="auction__left">
                        <p class="m-0 mb-2 font-semibold text-sm md:text-base">{{ $car->brand }} {{ $car->model }}</p>
                        <ul class="mb-2">
                            <li class="flex items-center justify-start mb-2 text-sm md:text-base">
                                <span class="inline-flex items-center mr-2">
                                    <img src="{{  asset('img/l1.svg') }}" alt="l1"></span> MAD {{ $car->price }}
                            </li>
                            <li class="flex items-center justify-start text-sm md:text-base">
                                <span class="inline-flex items-center mr-2">
                                    <img src="{{  asset('assets/img/l2.svg') }}" alt="l1"></span> Dernière enchère le :

                                {{ \Carbon\Carbon::parse($car->created_at)->format('M j Y') }}
                            </li>
                        </ul>
                        <div class="user__list flex items-center justify-start">
                            <div class="el__user inline-flex items-center justify-center">
                                <img src="{{  asset('assets/img/us1.png') }}" alt="us">
                            </div>
                            <div class="el__user inline-flex items-center justify-center">
                                <img src="{{  asset('assets/img/us2.png') }}" alt="us">
                            </div>
                            <div class="el__user inline-flex items-center justify-center">
                                <img src="{{  asset('img/us3.png') }}" alt="us">
                            </div>
                            <div class="el__user inline-flex items-center justify-center">
                                <span>+{{ $car->number_view }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="auction__right ml-auto mb-2 xl:mb-0 inline-flex items-center justify-center">
                        <img src="{{  asset('img/smalllogo.svg') }}" alt="smalllogo">
                    </div>
                </div>
                @endforeach
            </div>
            <div class="auction__container container3" style="display:none;">
                @foreach($carList as $car)
                <div
                    class="auction__elem flex-col-reverse xl:flex-row mb-3 px-4 py-4 bg-white flex items-start justify-between">
                    <div class="auction__left">
                        <p class="m-0 mb-2 font-semibold text-sm md:text-base">{{ $car->brand }} {{ $car->model }}</p>
                        <ul class="mb-2">
                            <li class="flex items-center justify-start mb-2 text-sm md:text-base">
                                <span class="inline-flex items-center mr-2">
                                    <img src="{{  asset('img/l1.svg') }}" alt="l1"></span> MAD {{ $car->price }}
                            </li>
                            <li class="flex items-center justify-start text-sm md:text-base">
                                <span class="inline-flex items-center mr-2">
                                    <img src="{{  asset('assets/img/l2.svg') }}" alt="l1"></span> Dernière enchère le :

                                {{ \Carbon\Carbon::parse($car->created_at)->format('M j Y') }}
                            </li>
                        </ul>
                        <div class="user__list flex items-center justify-start">
                            <div class="el__user inline-flex items-center justify-center">
                                <img src="{{  asset('assets/img/us1.png') }}" alt="us">
                            </div>
                            <div class="el__user inline-flex items-center justify-center">
                                <img src="{{  asset('assets/img/us2.png') }}" alt="us">
                            </div>
                            <div class="el__user inline-flex items-center justify-center">
                                <img src="{{  asset('img/us3.png') }}" alt="us">
                            </div>
                            <div class="el__user inline-flex items-center justify-center">
                                <span>+{{ $car->number_view }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="auction__right ml-auto mb-2 xl:mb-0 inline-flex items-center justify-center">
                        <img src="{{  asset('img/smalllogo.svg') }}" alt="smalllogo">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="users__signup py-5 px-4 bg-white mt-7">
        <p class="mb-3 md:mb-5 font-medium text-base md:text-lg">Les utilisateurs s'inscrivent</p>
        <div class="switcher__wrapper graph__switcher mb-5">
            <ul class="flex items-center justify-start">
                <li class="mr-8  active__switcher"><a href="#" data-filter="filter1"
                        class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Jour</a>
                </li>
                <li class="mr-8"><a href="#" data-filter="filter2"
                        class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Semaine</a>
                </li>
                <li><a href="#" data-filter="filter3"
                        class="px-1 font-medium text-sm pb-4 inline-flex items-center justify-center relative">Mois</a>
                </li>
            </ul>
        </div>
        <div class="graph__wrapper">
            <div class="elem__graph px-2 py-2 md:px-4  md:py-4 filter1">
                <canvas id="pie-chart"></canvas>
            </div>

            <!-- 
						<div class="chart-container">
    <div class="pie-chart-container">
      <canvas id="pie-chart"></canvas>
    </div>
  </div> -->
            <!-- <div class="elem__graph px-2 py-2 md:px-4  md:py-4 filter2" style="display:none;">
							<canvas id="chart2"></canvas>
						</div>
						<div class="elem__graph px-2 py-2 md:px-4  md:py-4 filter3" style="display:none;">
							<canvas id="chart3"></canvas>
						</div> -->
        </div>
    </div>
    <!-- list car with user -->

    <div class="container__table py-5 px-4 bg-white mt-7">
        <p class="mb-3 md:mb-5 font-medium text-base md:text-lg">Nouvelles Voitures</p>
        <div class="table__wrapper w-full ">
            <table class="regular-table w-full">
                <tr>
                    <th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Propriétaire</th>
                    <th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">auto</th>
                    <th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Model</th>
                    <th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">prix</th>
                    <th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Date Added</th>
                    <th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Date de clôture <br>
                        des enchères</th>
                    <th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Status</th>
                </tr>
                @if($cars->count() > 0 )
                @foreach($cars as $car)
                <tr class="bg-white">
                    <td class="px-6 py-3">
                        <p class="dmsans text-sm font-medium dark__grey">{{ $car->user->first_name }}
                            {{ $car->user->last_name }}</p>
                    </td>
                    <td class="px-6 py-3">
                        <p class="dmsans text-sm font-medium dark__grey">{{ $car->brand }}</p>
                    </td>
                    <td class="px-6 py-3">
                        <p class="text-sm light__grey">{{ $car->model }}</p>
                    </td>
                    <td class="px-6 py-3">
                        <p class="text-sm light__grey">{{ $car->price }} Dh</p>
                    </td>
                    <td class="px-6 py-3">
                        <p class="text-sm light__grey">{{ \Carbon\Carbon::parse($car->created_at)->format('M j Y') }}
                        </p>
                    </td>
                    <td class="px-6 py-3 ">
                        <p class="text-sm light__grey">Jan. 31, 2008</p>
                    </td>
                    <!-- <td>
									<p class="text-sm light__grey">{{ $car->user->role->name }}</p>
								</td> -->

                    <td class="px-6 py-3 text-center">
                        <div class="payment__status flex items-center justify-center">
                            @if ($car->published === 1)
                            <p class="confirmed text-xs font-medium">PUBLIER</p>
							@elseif($car->visibility === 0 )
                            <p class="waiting text-xs font-medium">EN CORBEIL</p>
                            @elseif($car->published === 0 || $car->published === 1 )
                            <p class="canceled text-xs font-medium">NON PUBLIER</p>
                            
                            @endif
                        </div>
                    </td>

                </tr>
                @endforeach
                @else
                <h3 class="text-center mt-5 mb-5">Pas encore du voitures</h3>
                @endif
            </table>
        </div>
        <div class="mt-4">

            {{ $cars->links() }}
        </div>


        <!-- end list users -->
    </div>
</div>
</div>

</div>

@endsection

@section('scripts')

<script>
$(function() {
    //get the pie chart canvas
    var cData = JSON.parse(`<?php echo $chart_data; ?>`);
    var ctx = $("#pie-chart");

    //pie chart data
    var data = {
        labels: cData.label,

        datasets: [{
            label: "utilisateurs Count",
            data: cData.data,
            borderColor: 'rgb(75, 192, 192)',

            tension: 0.1
        }]
    };

    //options
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Last Week Registered Users -  Day Wise Count",
            fontSize: 18,
            fontColor: "#ffc107"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#ffc107",
                fontSize: 16
            }
        }
    };

    //create Pie Chart class object
    var chart1 = new Chart(ctx, {
        type: 'line',
        data: data,
        options: options
    });

});
</script>

@endsection