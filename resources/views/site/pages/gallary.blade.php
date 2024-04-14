@section('content')
    @extends('site.layout.app')
        <section class="abt-01">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-wrapper">
                            <h3>Gallery</h3>
                            <ol>
                                <li><a class="text-white" href="{{ route('displayIndex') }}">Home</a><i
                                        class="far fa-angle-double-right"></i></li>
                                <li><a class="text-white" href="{{ route('displayGallery') }}">Gallery</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery-01 my-5">
            <div class="container">
                <div class="row">
                    @foreach($galleries as $gallery)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 my-5">
                        <div class="gallary-title">
                            <h3 class="text-center" style="font-size:19px;">{{ $gallery->title }}</h3>
                        </div>
                        <div class="gallery-content">
                            <a href="{{ asset('site/uploads/gallary/'.$gallery->photos->first()->photo) }}" data-fslightbox="gallery">
                                <img src="{{ asset('site/uploads/gallary/'.$gallery->photos->first()->photo) }}" alt="gallery"
                                    class="img-fluid" style="height:250px;width:480px;object-fit:cover">
                            </a>
                            <div class="hide">
                                @foreach($gallery->photos as $photo)
                                <a href="{{ asset('site/uploads/gallary/'.$photo->photo) }}" data-fslightbox="gallery"></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
@stop
