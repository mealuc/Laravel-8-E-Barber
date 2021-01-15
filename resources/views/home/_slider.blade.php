<div class="parallax">
    <div id="full-width" class="owl-carousel owl-theme home-hero">
        <div class="text-center item slider-01 display-table overlay">
            @foreach($slider as $rs)
                <div class="display-table-cell">
                    <img src="{{Storage::url($rs->image)}}">
                    <div class="big-tagline text-center">
                        <h2><strong>{{$rs->title}}</strong><br></h2>
                        <h3>{{$rs->price}}</h3>
                    <!--<a href="#" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Contact US</a>-->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div><!-- end section -->


