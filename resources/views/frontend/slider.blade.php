 @php
     $sliderImage = App\Models\SliderMultiImage::all();
 @endphp

 <div class="right-col">

    <div>
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                @foreach ($sliderImage as $key => $item)
                    <div class="carousel-item {{$key == 0 ? 'active' : ''}}" data-interval="10000">
                        <img src="{{asset($item->slider_image)}}" class="d-block w-100" alt="...">
                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleInterval"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleInterval"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>

</div>
