@section('content')
    @extends('site.layout.app')
    <main>
        <!-- ============abt-01 Section  Start============ -->

        <section class="abt-01">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-wrapper">
                            <h3>Blog</h3>
                            <ol>
                                <li><a class="text-white" href="{{ route('displayIndex') }}">Home</a><i
                                        class="far fa-angle-double-right"></i></li>
                                <li><a class="text-white" href="{{ route('displayBlog') }}">Blogs</a></li>
                            </ol>
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
                    @foreach ($blogs as $blog )
                        <article class="blog-sub">
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
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
@stop
