

@php
    $count=0;
@endphp

<section class="slider_part">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach($sliders as $key => $slider)
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$key }}" class="@if($count==0){ active }@endif" aria-current="true" aria-label="Slide 1"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach($sliders as $slider)
                    <div class="carousel-item @if($count==0){ active }@endif">
                        <img src="{{asset('public/upload/slider_images/'.$slider->image)}}" class="d-block w-100" alt=""style="width: 100%">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 style="background-color: #5e37a6">{{$slider->h_name}}</h3>
                            <p style="background-color: black">{{$slider->p_name}}</p>
                        </div>
                    </div>
                    @php
                        $count++
                    @endphp
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>




</section>





