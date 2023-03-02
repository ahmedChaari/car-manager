@section('style')
    <style>
        .el__small--image button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
        }
        .el__small--image:hover button {
            display: block;
        }
    </style>
@endsection

<div>
    {{-- Fromulaire --}}
    <form class="dropzone {{ count($images) < $max_file ? 'block' : 'hidden' }}" id="dropzone" enctype="multipart/form-data"
    method="POST" action="{{ route('complet-car-information.store-image', ['id' => $car->id]) }}">
        @csrf
    </form>

    {{-- Listing --}}
    @if ( count($images))
        <div class="gallery__images flex-col md:flex-row flex relative items-center justify-between mt-6">
            <div class="small__images  grid  grid-cols-3 sm:grid-cols-5  gap-x-2  xl:gap-x-4  gap-y-2 xl:gap-y-3">
                @foreach ($images as $image)
                    <div class="el__small--image">
                        <img src="{{ @asset('img/image.png') }}" alt="image">
                        <button wire:click="deleteImage('{{ $image->id }}')"><img src="{{ @asset('img/remove.svg') }}" alt="loadimage"></button>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>

@section('script')
    <script type="text/javascript">
        Dropzone.options.dropzone =
        {
            maxFilesize: 20,
            maxFiles: '{{ $max_file }}',
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+'-'+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png",
            addRemoveLinks: false,
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
                    }
                });
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            success: function(file, response)
            {
                // console.log(response);
                Livewire.emit('updateImageListing');
            },
            error: function(file, response)
            {
                return false;
            }
        };
    </script>
@endsection
