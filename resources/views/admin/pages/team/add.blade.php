@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'teams'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Add Team</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="d-flex justify-content-end manageBtn">
                                <a class="btn btn-primary btn-sm " href="{{ route('manageTeam') }}" role="button">Manage Team</a>
                            </div>
                            <form method="POST" action="{{ route('storeTeam') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Name</label>
                                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                                @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Post</label>
                                                <input type="text" name="post" class="form-control" value="{{ old('post') }}">
                                                @error('post')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">E-mail address</label>
                                                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                                @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Facebook Url</label>
                                                <input type="url" name="facebook" class="form-control" value="{{ old('facebook') }}">
                                                @error('facebook')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Instagram Url</label>
                                                <input type="url" name="instagram" class="form-control" value="{{ old('instagram') }}">
                                                @error('instagram')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">WhatsApp Url</label>
                                                <input type="url" name="whatsapp" class="form-control" value="{{ old('whatsapp') }}">
                                                @error('whatsapp')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="border: 1px solid #ccc; padding: 20px;">
                                                <label class="form-control-label">Photo</label>
                                                <input type="file" name="photo" id="photoInput" class="form-control-file">
                                                <img src="" id="photoPreview" alt="team Photo" style="width: 70px; height: 75px; object-fit: cover;">
                                                @error('photo')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-primary mt-4">{{ __('Save') }}</button>
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
