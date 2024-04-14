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

        <section class="">
            <div class="container" style="height: 100%">
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">
                            <h2>{{ $cause->title }}</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="wrapper my-4" >
                            <figure class="text-center" ><img class="causes-detail-img" style="height:480px;" src="{{ asset('site/uploads/cause/' . $cause->photo) }}"></figure>
                        <div class="mt-4 text-justify">{!! $cause->details !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop
