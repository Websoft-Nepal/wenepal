  <!-- ======================Main started====================== -->
  @section('content')
      @extends('site.layout.app')
      <main>
          <!-- ======================Banner started====================== -->


          <section class="banner">
              <div class="container">
                  <div class="row">
                      <div class="col-12">
                          <div class="wrapper">
                              <h1>YOU CAN HELP WITH THE POOR CHILDREN</h1>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur adipisci quasi,
                                  blanditiis, quidem
                                  distinctio suscipit sunt ducimus illo veritatis corporis quas! Ipsa obcaecati beatae, aut
                                  saepe aliquam
                                  corrupti fugit. Cupiditate.</p>
                              <ol>
                                  <li><a href="#">Join With Us</a></li>
                                  <li><a href="#">Donate Now</a></li>
                              </ol>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <!-- ======================Bg-01 started====================== -->

          <section class="bg-01">
              <div class="container">
                  <div class="row">
                      <div class="col-12">
                          <div class="wrapper">
                              <div class="row">
                                  <div class="col-lg-4 col-md-4 col-sm-6">
                                      <div class="content">
                                          <ol>
                                              <li class="dashed">
                                                  <i class="fal fa-hands-usd"></i>
                                                  <h3>Make Donation</h3>
                                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                      industry.</p>
                                              </li>
                                          </ol>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-4 col-sm-6">
                                      <div class="content">
                                          <ol>
                                              <li class="dashed">
                                                  <i class="fal fa-funnel-dollar"></i>
                                                  <h3>Fundraising</h3>
                                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                      industry.</p>
                                              </li>
                                          </ol>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-md-4 col-sm-6">
                                      <div class="content">
                                          <ol>
                                              <li>
                                                  <i class="fal fa-person-sign"></i>
                                                  <h3>Become A Volunteer</h3>
                                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                      industry.</p>
                                              </li>
                                          </ol>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <!-- ======================Bg-02 started====================== -->

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
                                      <h3>{{ $cause->title }}</h3>
                                      {!! $cause->details !!}
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
          </section>

          <!-- ======================Bg-02 started====================== -->

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
                                    <h3>{{ $service->title }}</h3>
                                    {!! $service->details !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
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

          <!-- ======================Bg-05 started====================== -->

          <section class="bg-05">
            <div class="container">
                <div class="col-12">
                    <div class="heading">
                        <h2>Latest News</h2>
                    </div>
                </div>

                <div class="blog-main-card d-flex">
                    @foreach ($blogs as $blog )
                        <article class="blog-sub">
                            <div class="blog-content">
                                <img src="{{ asset('site/uploads/blog/'.$blog->photo) }}">
                            </div>
                            <div class="blog-content-section">
                                <div class="blo-content-title">
                                    <h4>{{ $blog->title }}</h4>
                                    {!! $blog->details !!}
                                </div>
                                <div class="blog-admin">
                                    <ol>
                                        <li><i class="fal fa-user-tie"></i> By Wellness & Ecogaurd Nepal</li>
                                        <li><i class="fal fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('j F Y') }}                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

      </main>
      <!-- ======================Main ended====================== -->
  @stop
