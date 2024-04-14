@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@push('headerlink')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/fileinput.min.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/plugins/buffer.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/filetype.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/piexif.min.js') }}"></script>
    <script src="{{ asset('assets/js/fileinput.js') }}"></script>
@endpush
@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Gallerys'])

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Gallerys/edit</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="d-flex justify-content-end  manageBtn">
                                <a class="btn btn-primary btn-sm" href="{{ route('manageGallery') }}" role="button">manage
                                    Gallery</a>
                            </div>
                            <form method="POST" action="{{ route('updateGallery',$gallery->slug) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label">Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    value="{{ $gallery->title }}">
                                                @error('title')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="file-loading">
                                                <input id="kv-explorer" type="file" multiple>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-primary mt-4">save</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.footers.auth.footer')
    </div>
@endsection
@push('footerlink')
<script>
    $(document).ready(function() {
        $("#kv-explorer").fileinput({
            'theme': 'explorer-fa5',
            'uploadUrl': '#',
            overwriteInitial: false,
            initialPreviewAsData: true,
            initialPreview: [
                @foreach($gallery->photos as $photo)
                    "{{ asset('site/uploads/gallary/'.$photo->photo) }}",
                @endforeach
            ],
            initialPreviewConfig: [

            ]
        });
    });
</script>
@endpush
