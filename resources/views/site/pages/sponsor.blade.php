@section('content')
    @extends('site.layout.app')
    <main>

        <section class="abt-01">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-wrapper">
                            <h3>Sponsor</h3>
                            <ol>
                                <li><a class="text-white" href="{{ route('displayIndex') }}">Home</a><i
                                        class="far fa-angle-double-right"></i></li>
                                <li><a class="text-white" href="{{ route('displaySponsor') }}">Sponsor</a></li>
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
                            <h2>Sponsors</h2>
                            <p>Here are our Sponsor for the activities we did recently.</p>
                        </div>
                    </div>

                    @foreach ($sponsors as $sponsor)
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="wrapper">
                                <figure class="img-holder
                                ">
                                    <img class="causes-img
                                    " src="{{ asset('site/uploads/sponsor/' . $sponsor->photo) }}">
                                </figure>
                                <div class="bs">
                                    <h3>{{ $sponsor->name }}</h3>
                                    {!! $sponsor->description !!}
                                    <ol>
                                        <li><i class="fal fa-thumbs-up"></i>Donated: {{ $sponsor->donation }}</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>



    </main>
@stop
