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
                            <form method="POST" action="{{ route('updatePolicy') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label">Privacy Policy</label>
                                                <textarea name="policy" class="form-control" rows="4">
                                                    @if ($policy)
                                                        {!! $policy->policy !!}
                                                    @endif
                                                </textarea>
                                                @error('policy')
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

                            <script>
                                CKEDITOR.replace('policy');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.footers.auth.footer')
    </div>
@endsection
