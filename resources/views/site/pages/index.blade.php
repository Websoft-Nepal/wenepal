  <!-- ======================Main started====================== -->
  @section('content')
      @extends('site.layout.app')
      <main>
          <!-- ======================Banner started====================== -->


          <section class="banner" style="background-image: url({{ asset('img/1.jpeg') }});">
              <div class="container">
                  <div class="row">
                      <div class="col-12">
                          <div class="wrapper">
                              {{-- <h1>YOU CAN HELP WITH THE POOR CHILDREN</h1> --}}
                              {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur adipisci quasi,
                                  blanditiis, quidem
                                  distinctio suscipit sunt ducimus illo veritatis corporis quas! Ipsa obcaecati beatae, aut
                                  saepe aliquam
                                  corrupti fugit. Cupiditate.</p> --}}
                              {{-- <ol>
                                  <li><a href="{{ route("displayVolunteer") }}">Join With Us</a></li>
                                  <li><a href="{{ route("displaySponsor") }}">Donate Now</a></li>
                              </ol> --}}
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
                                                  <p>Are you looking to make a donation, or would you like to know more
                                                      about how to request donations for a cause or organization?</p>
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
                                                  <p>Fundraising can be an exciting endeavor! Are you looking for tips on
                                                      how to start a fundraising campaign, or do you have a specific</p>
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
                                                  <p>Becoming a volunteer is a wonderful way to make a positive impact on
                                                      your community or a cause you care about.</p>
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
                          <div class="glide" id="glide_1">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    @foreach ($causes as $cause)
                                        <li class="glide__slide">
                                                <div class="wrapper">
                                                    <figure class="img-holder">
                                                        <img class="causes-img" src="{{ asset('site/uploads/cause/' . $cause->photo) }}">
                                                    </figure>
                                                    <div class="bs">
                                                        <div>
                                                            <h3 class="truncate-title line-clamp-2">{{ $cause->title }}</h3>
                                                            <h6 class="truncate-details py-1" style="font-weight: 300">{!! $cause->details !!}
                                                            </h6>
                                                        </div>
                                                        <div class="d-flex justify-content-center align-item-center mt-2">
                                                            <a href="{{ route('displayCauseDetails', $cause->slug) }}" class="btn btn-primary"
                                                                style="background: #fd580b; border:#fd580b">Read more</a>
                                                        </div>
                                                    </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="glide__arrows nav_btn" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--left left-btn" data-glide-dir="<"><i
                                        class="fa fa-arrow-left" aria-hidden="true"></i></button>
                                <button class="glide__arrow glide__arrow--right right-btn" data-glide-dir=">"><i
                                        class="fa fa-arrow-right" aria-hidden="true"></i></button>
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
                              <h2>OUR SERVICES</h2>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="glide" id="glide_2">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                @foreach ($services as $service)
                                        <li class="glide__slide">
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
                                        </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="glide__arrows nav_btn" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left left-btn" data-glide-dir="<"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i></button>
                            <button class="glide__arrow glide__arrow--right right-btn" data-glide-dir=">"><i
                                    class="fa fa-arrow-right" aria-hidden="true"></i></button>
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
                        <div class="glide" id="glide_4">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    @foreach ($teams as $team)
                                        <li class="glide__slide team-setup">
                                                <div class="team-items">
                                                    <div class="team-user">
                                                        <img class="team-photo" src="{{ asset('site/uploads/team/' . $team->photo) }}">
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
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="glide__arrows nav_btn" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--left left-btn" data-glide-dir="<"><i
                                        class="fa fa-arrow-left" aria-hidden="true"></i></button>
                                <button class="glide__arrow glide__arrow--right right-btn" data-glide-dir=">"><i
                                        class="fa fa-arrow-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
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
                    <div class="glide" id="glide_3">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                @foreach ($blogs as $blog )
                                    <li class="glide__slide blog-sub">
                                            <div class="blog-content">
                                                <img src="{{ asset('site/uploads/blog/'.$blog->photo) }}">
                                            </div>
                                            <div class="blog-content-section">
                                                <div class="blog-content-title">
                                                    <h4 class="truncate-title line-clamp-2">{{ $blog->title }}</h4>
                                                    <h6 class="truncate-details text-justify py-1" style="font-weight: 300">{!! $blog->details !!}</h6>
                                                </div>

                                                <div>
                                                    <div class="d-flex justify-content-center align-item-center mt-3 mb-3">
                                                        <a href="{{ route("displayBlogDetails",$blog->slug) }}" class="btn btn-primary" style="background: #fd580b; border:#fd580b">Read more</a>
                                                    </div>
                                                    <div class="blog-admin">
                                                        <ol>
                                                            <li><i class="fal fa-user-tie"></i> By Wellness & Ecogaurd Nepal</li>
                                                            <li><i class="fal fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('j F Y') }}                                        </li>
                                                        </ol>
                                                    </div>
                                                </div>

                                            </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="glide__arrows nav_btn" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left left-btn" data-glide-dir="<"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i></button>
                            <button class="glide__arrow glide__arrow--right right-btn" data-glide-dir=">"><i
                                    class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
              </div>
          </section>

      </main>
      <!-- ======================Main ended====================== -->
  @stop
