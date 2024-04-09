@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Services'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Services/view</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="d-flex justify-content-end  manageBtn">
                                <a class="btn btn-primary btn-sm" href="{{ route('manageService') }}" role="button">manage service</a>
                            </div>
                            <form method="POST" action="{{ route('storeService') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 english">
                                            <div class="form-group">
                                                <label class="form-control-label">Title</label>
                                                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                                                @error('title')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="border: 1px solid #ccc; padding: 20px;">
                                                <label class="form-control-label">Photo</label>
                                                <input type="file" name="photo" id="photoInput" class="form-control-file">
                                                <img src="" id="photoPreview" alt="service Photo" style="width: 70px; height: 75px; object-fit: cover;">
                                                @error('photo')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 english">
                                            <div class="form-group">
                                                <label class="form-control-label">Details </label>
                                                <textarea name="details" id="editor" class="form-control" rows="4">{{ old('details') }}</textarea>
                                                @error('details')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
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
        <script>
            CKEDITOR.replace('editor');
        </script>
        @include('admin.layouts.footers.auth.footer')
    </div>
@endsection
