@section('content')
    @extends('site.layout.app')
    <main>


        <section class="abt-01">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-wrapper">
                            <h3>Volunteers</h3>
                            <ol>
                                <li><a class="text-white" href="{{ route('displayIndex') }}">Home</a><i
                                        class="far fa-angle-double-right"></i></li>
                                <li><a class="text-white" href="{{ route('displayVolunteer') }}">Volunteers</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-04">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2>Meet Our volunteers</h2>
                        </div>
                    </div>

                    <div class="main-team-card d-flex">
                        @foreach ($volunteers as $volunteer)
                            <div class="team-setup">
                                <div class="team-items">
                                    <div class="team-user">
                                        <img src="{{ asset('site/uploads/volunteer/' . $volunteer->photo) }}">
                                    </div>
                                    <div class="team-user-social">
                                        <ol class="text-white">
                                            {{ $volunteer->designation }}
                                        </ol>
                                    </div>
                                    <div class="team-name">
                                        <h2>{{ $volunteer->name }}</h2>
                                        <b>{!! $volunteer->description !!}</b>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
    @stop
