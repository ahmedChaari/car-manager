@extends('layouts.seller')

<style>
/* .upload__box {
  padding: 40px;
} */
.upload__inputfile {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}
.upload__btn {
  cursor: pointer;
}
.upload__btn-box {
  margin-bottom: 10px;
}
.upload__img-wrap {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -10px;
}
.upload__img-box {
  width: 200px;
  padding: 0 10px;
  margin-bottom: 12px;
}
.upload__img-close {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-color: rgba(0, 0, 0, 0.5);
  position: absolute;
  top: 10px;
  right: 10px;
  text-align: center;
  line-height: 24px;
  z-index: 1;
  cursor: pointer;
}
.upload__img-close:after {
  content: "✖";
  font-size: 14px;
  color: white;
}

.img-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  padding-bottom: 100%;
}
</style>

@section('content')
<div class="overlay"></div>
<div class="dashboard__wrapper flex items-start justify-between">
    @include('partials.navbar')

    <div class="dashboard__main w-full">
        @include('partials.dashboard-header')
        <div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
            <div class="head__filter flex-col md:flex-row flex items-start md:items-center justify-between mb-4 md:mb-7">
                <h6 class="font-medium m-0  text-base lg:text-lg dark__grey">Completer le profile de voiture voiture</h6>
                {{-- <a href="#" class="mt-2 md:mt-0 regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm text-white font-medium"><span class="inline-flex items-center justify-center mr-2"><img src="{{ @asset('img/public.svg') }}" alt="public"></span>Publier</a> --}}
            </div>

            @livewire('update-car', ['car' => $car])

            {{-- Step 3 --}}
            <div class="images__loader py-4 lg:py-7 px-4 lg:px-8 bg-white">
                <div class="head__images mb-3">
                    <h2 class="text-xl font-semibold">Images de véhicules</h2>
                    <p class="text-sm light__grey">Téléchargez des photos de votre véhicule</p>
                </div>

                @livewire('car-images', ['car' => $car])
            </div>

            <div class="controls__wrapper flex items-center justify-end mt-4 md:mt-6">
                <span wire:click="stepBack" wire:loading.attr="disabled" class="outline-btn inline-flex items-center justify-center px-4 rounded-md mr-2 text-sm font-medium">Retour</span>
                <form class="m-0" method="POST" action="{{ route('complet-car-information.store-step3', ['id' => $car->id]) }}">
                    @csrf
                    <button type="submit" class="regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm font-medium text-white">Suivant</button>
                </form>
            </div>

            <div class="more__button flex items-center justify-end mt-7">
                <form method="POST" action="{{ route('complet-car-information.publish-or-draft', ['id' => $car->id]) }}">
                    @csrf
                    <input type="number" name="visibility" hidden value="0">
                    <button type="submit" class="outline-btn inline-flex items-center justify-center px-4 rounded-md  text-sm font-medium mr-1">Enregistrer dans le brouillon</button>
                </form>
                {{-- <a href="#" class="regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm text-white font-medium">Publier</a> --}}
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @section('script')
<script type="text/javascript">
    function convertToSlug(str) {
        str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
        str = str.replace(/^\s+|\s+$/gm, '');
        str = str.replace(/\s+/g, '-');
        return str;
    }
    var carBrand = '{{ $car->brand }}';
    carBrand = convertToSlug(carBrand);
    var carModel = '{{ $car->model }}';
    carModel = convertToSlug(carModel);
    Dropzone.options.dropzone =
     {
        maxFilesize: 12,
        maxFiles: 1,
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
            return time+'-'+carBrand+carModel+'-'+file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png",
        addRemoveLinks: true,
        timeout: 50000,
        removedfile: function(file)
        {
            var name = file.upload.filename;
            $.ajax({
                headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        },
                type: 'POST',
                url: '{{ url("complet-car-information/delete-image") }}',
                data: {filename: name},
                success: function (data){
                    // console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    // console.log(e);
                }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },

        success: function(file, response)
        {
            // console.log(response);
        },
        error: function(file, response)
        {
           return false;
        }
};
</script>
@endsection --}}
