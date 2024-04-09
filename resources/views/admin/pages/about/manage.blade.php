@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'AboutUs'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>AboutUs/add</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <form method="POST" action="{{ route('updateAbout') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Title</label>
                                                    <input type="text" name="title" class="form-control"
                                                        value="{{ $about->title }}">
                                                    @error('title')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-control-label">Photo</label>
                                                <div class="form-group" style="border: 1px solid #ccc; padding: 15px;">
                                                    <input type="file" name="photo" id="photoInput"
                                                        class="form-control-file">
                                                    <img id="photoPreview"
                                                        src="{{ asset('site/uploads/about/' . $about->photo) }}"
                                                        alt="Image preview"
                                                        style="width: 70px; height: 75px; object-fit: cover;"
                                                        class="photo-preview mt-4">
                                                    @error('photo')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Details</label>
                                                <textarea name="details" class="form-control" rows="4">{!! $about->details !!}</textarea>
                                                @error('details')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 group-detail">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">sub title 1</label>
                                                    <input type="text" name="subTitle1" class="form-control"
                                                        value="{{ $about->subTitle1 }}">
                                                    @error('title')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">sub Details 1</label>
                                                    <textarea name="subDetails1" class="form-control" rows="4">{!! $about->subDetails1 !!}</textarea>
                                                    @error('subDetails1')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 group-detail">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">sub title 2</label>
                                                    <input type="text" name="subTitle2" class="form-control"
                                                        value="{{ $about->subTitle2 }}">
                                                    @error('title')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">sub Details 2</label>
                                                    <textarea name="subDetails2" class="form-control" rows="4">{!! $about->subDetails2 !!}</textarea>
                                                    @error('subDetails2')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 group-detail">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">sub title 3</label>
                                                    <input type="text" name="subTitle3" class="form-control"
                                                        value="{{ $about->subTitle3 }}">
                                                    @error('title')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">sub Details 3</label>
                                                    <textarea name="subDetails3" class="form-control" rows="4">{!! $about->subDetails3 !!}</textarea>
                                                    @error('subDetails3')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-primary mt-4">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </form>
                            <script>
                                const photoInput = document.getElementById('photoInput');
                                const photoPreview = document.getElementById('photoPreview');

                                photoInput.addEventListener('change', () => {
                                    const file = photoInput.files[0];
                                    if (file) {
                                        const reader = new FileReader();
                                        reader.onload = () => {
                                            photoPreview.src = reader.result;
                                        }
                                        reader.readAsDataURL(file);
                                    }
                                });
                            </script>
                            <script>
                                CKEDITOR.replace('details');
                                CKEDITOR.replace('subDetails1');
                                CKEDITOR.replace('subDetails2');
                                CKEDITOR.replace('subDetails3');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.footers.auth.footer')
    </div>
@endsection
