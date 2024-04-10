@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'Volunteers'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Volunteers/view</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="d-flex justify-content-end  addBtn">
                                <a class="btn btn-primary btn-sm" href="{{ route('addVolunteer') }}" role="button">Add Volunteer</a>
                            </div>
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Photo</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Designation</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Description</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($volunteers as $volunteer)
                                        <tr>
                                                <td style="">
                                                    <a href="{{ asset('site/Uploads/volunteer/'.$volunteer->photo) }}"><img src="{{ asset('site/Uploads/volunteer/'.$volunteer->photo) }}" style="width: 60px; height: 60px; object-fit: cover;"></a>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1" >
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm"><b style="font-weight:900; font-size:17px">{{ $volunteer->name }}</b></h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1" >
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm"><b style="font-weight:900; font-size:17px">{{ $volunteer->designation }}</b></h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1 wrap-text">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm truncate-details">{!! $volunteer->description !!}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $volunteer->id }}"><i class="far fa-eye"></i></button>
                                                    <a href="{{ route('editVolunteer', $volunteer->slug) }}"class="btn btn-info"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                    <form class="d-inline-block" action="{{ route('deleteVolunteer',$volunteer->slug) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-primary" style="border:none;"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                    </form>
                                                </td>
                                                <div class="modal fade" id="exampleModal-{{ $volunteer->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">{{ $volunteer->name }}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times fa-lg" style="color: red;"></i></button>
                                                        </div>
                                                        <h6 class= "px-2 mb-0 text-sm text-justify">{!! $volunteer->description !!}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $volunteers->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.footers.auth.footer')
    </div>
@endsection
