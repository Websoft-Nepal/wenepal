@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Sponsors'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Sponsors/view</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="d-flex justify-content-end  manageBtn">
                                <a class="btn btn-primary btn-sm" href="{{ route('manageSponsor') }}" role="button">manage Sponsor</a>
                            </div>
                            <form method="POST" action="{{ route('updateSponsor',$sponsor->slug) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 english">
                                            <div class="form-group">
                                                <label class="form-control-label">Name</label>
                                                <input type="text" name="name" class="form-control" value="{{ $sponsor->name }}">
                                                @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 english">
                                            <div class="form-group">
                                                <label class="form-control-label">Donation</label>
                                                <input type="text" name="donation" class="form-control" value="{{ $sponsor->donation }}">
                                                @error('donation')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="border: 1px solid #ccc; padding: 20px;">
                                                <label class="form-control-label">Photo</label>
                                                <input type="file" name="photo" id="photoInput" class="form-control-file">
                                                <img src="{{ asset("site/uploads/sponsor/".$sponsor->photo) }}" id="photoPreview" alt="Sponsor Photo" style="width: 75px; height: 75px; object-fit: cover;">
                                                @error('photo')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 english">
                                            <div class="form-group">
                                                <label class="form-control-label">Description </label>
                                                <textarea name="description" id="editor" class="form-control" rows="4">{{ $sponsor->description }}</textarea>
                                                @error('description')
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
            CKEDITOR.replace('editor')
        </script>
        @include('admin.layouts.footers.auth.footer')
    </div>
@endsection
