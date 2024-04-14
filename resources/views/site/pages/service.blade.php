@section('content')
    @extends('site.layout.app')
    <main>

        <!-- ============abt-01 Section  Start============ -->

        <section class="abt-01">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-wrapper">
                            <h3>Services</h3>
                            <ol>
                                <li><a class="text-white" href="{{ route('displayIndex') }}">Home</a><i
                                        class="far fa-angle-double-right"></i></li>
                                <li><a class="text-white" href="{{ route('displayService') }}">Services</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======================Bg-03 started====================== -->
        <section class="bg-02">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2>Recent Causes</h2>
                            <p>Here are some of the recent activities we did recently.</p>
                        </div>
                    </div>

                    @foreach ($causes as $cause)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="wrapper">
                            <figure class="img-holder">
                                <img class="causes-img" src="{{ asset('site/uploads/cause/' . $cause->photo) }}">
                            </figure>
                            <div class="bs">
                                <h3 class="truncate-title">{{ $cause->title }}</h3>
                                <h6 class="truncate-details text-justify">{!! $cause->details !!}</h6>
                                <div class="d-flex justify-content-center align-item-center mt-2">
                                    <a href="{{ route("displayCauseDetails",$cause->slug) }}" class="btn btn-primary" style="background: #fd580b; border:#fd580b">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>

        <section class="bg-02">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2>OUR SERVICES</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="wrapper">
                                <figure class="img-holder">
                                    <img class="causes-img" src="{{ asset('site/uploads/service/' . $service->photo) }}">
                                </figure>
                                <div class="bs">
                                    <h3 class="truncate-title">{{ $service->title }}</h3>
                                    <h6 class="truncate-details text-justify">{!! $service->details !!}</h6>
                                    <div class="d-flex justify-content-center align-item-center mt-2">
                                        <a href="{{ route("displayServiceDetails",$service->slug) }}" class="btn btn-primary" style="background: #fd580b; border:#fd580b">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


    </main>
@stop
