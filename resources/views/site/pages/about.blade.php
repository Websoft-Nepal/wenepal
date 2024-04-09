@section('content')
    @extends('site.layout.app')
    <main>
        <!-- ============abt-01 Section  Start============ -->

        <section class="abt-01">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-wrapper">
                            <h3>About Us</h3>
                            <ol>
                                <li><a class="text-white" href="{{ route('displayIndex') }}">Home</a><i
                                        class="far fa-angle-double-right"></i></li>
                                <li><a class="text-white" href="{{ route('displayAbout') }}">About Us</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-001">
            <div class="container">
                <div class="row">
                    <div class="text-part col-md-6">
                        <h2>{{ $about->title }}</h2>
                        {!! $about->details !!}
                    </div>
                    <div class="image-part col-md-6">
                        <div class="about-quick-box row">
                            <div class="about-img">
                                <img src="{{ asset('site/uploads/about/' . $about->photo) }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="image-part col-md-6 pt-4">
                        <div class="about-quick-box row">
                            <div class="col-md-6" style="padding-right:0px">
                                <div class="about-qcard">
                                    <i class="fas fa-user"></i>
                                    <p>Become a Volunteer</p>
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-right:0px">
                                <div class="about-qcard ">
                                    <i class="fas fa-search-dollar red"></i>
                                    <p>Quick Fundraise</p>
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-right:0px">
                                <div class="about-qcard ">
                                    <i class="fas fa-donate yell"></i>
                                    <p>Give Donation</p>
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-right:0px">
                                <div class="about-qcard ">
                                    <i class="fas fa-hands-helping blu"></i>
                                    <p>Help Someone</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-part col-md-6 pl-5">
                        <nav class="my-4 d-flex justify-content-between">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="healthcare-services-tab" data-toggle="tab"
                                    data-target="#healthcare-services" type="button" role="tab"
                                    aria-controls="healthcare-services"
                                    aria-selected="true">{{ $about->subTitle1 }}</button>
                                <button class="nav-link" id="environmental-conservation-tab" data-toggle="tab"
                                    data-target="#environmental-conservation" type="button" role="tab"
                                    aria-controls="environmental-conservation" aria-selected="false">Environmental
                                    Conservation</button>
                                <button class="nav-link" id="objectives-tab" data-toggle="tab" data-target="#objectives"
                                    type="button" role="tab" aria-controls="objectives"
                                    aria-selected="false">Objectives</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="healthcare-services" role="tabpanel"
                                aria-labelledby="healthcare-services-tab">
                                {!! $about->subDetails1 !!}
                            </div>
                            <div class="tab-pane fade" id="environmental-conservation" role="tabpanel"
                                aria-labelledby="environmental-conservation-tab">
                                {!! $about->subDetails2 !!}
                            </div>
                            <div class="tab-pane fade" id="objectives" role="tabpanel" aria-labelledby="objectives-tab">
                                {!! $about->subDetails3 !!}
                            </div>
                        </div>
                        <script>
                            $('#myTab button').on('click', function(event) {
                                event.preventDefault()
                                $(this).tab('show')
                            })
                        </script>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- ======================Bg-04 started====================== -->

        <section class="bg-04">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2>Meet Our Team</h2>
                        </div>
                    </div>

                    <div class="main-team-card d-flex">
                        @foreach ($teams as $team)
                            <div class="team-setup">
                                <div class="team-items">
                                    <div class="team-user">
                                        <img src="{{ asset('site/uploads/team/' . $team->photo) }}">
                                    </div>
                                    <div class="team-user-social">
                                        <ol>
                                            @if ($team->facebook)
                                                <li><a href="{{ $team->facebook }}"><i
                                                            class="fab text-white fa-facebook-f"></i></a></li>
                                            @endif
                                            @if ($team->twitter)
                                                <li><a href="{{ $team->twitter }}"><i
                                                            class="fab text-white fa-twitter"></i></a></li>
                                            @endif
                                            @if ($team->linkedin)
                                                <li><a href="{{ $team->linkedin }}"><i
                                                            class="fab text-white fa-linkedin-in"></i></a></li>
                                            @endif
                                            @if ($team->instagram)
                                                <li><a href="{{ $team->instagram }}"><i
                                                            class="fab text-white fa-instagram"></i></a></li>
                                            @endif
                                        </ol>
                                    </div>
                                    <div class="team-name">
                                        <h2>{{ $team->name }}</h2>
                                        <b>{{ $team->post }}</b>
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
