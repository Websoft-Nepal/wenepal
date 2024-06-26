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
                                    <div>

                                        <h3 class="truncate-title line-clamp-2">{{ $service->title }}</h3>
                                        <h6 class="truncate-details py-1" style="font-weight: 300">{!! $service->details !!}
                                        </h6>
                                    </div>
                                    <div class="d-flex justify-content-center align-item-center mt-2">
                                        <a href="{{ route('displayServiceDetails', $service->slug) }}"
                                            class="btn btn-primary" style="background: #fd580b; border:#fd580b">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center my-5">{{ $services->links() }}</div>
            </div>
        </section>


    </main>
@stop
