<!-- Hero End -->
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1>New Books</h1>
                                <h2>100% Responsive Design</h2>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('assets')}}/images/home/pricing.png"  class="pricing" alt="" />
                            </div>
                        </div>
                        @foreach($sliderdata as $rs)
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1>{{$rs->Title}}</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>{!! $rs->detail !!} </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{Storage::url($rs->image)}}" class="girl img-responsive" style="width:300px;" />
                                    <img src="{{asset('assets')}}/images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>
                        @endforeach



                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->


