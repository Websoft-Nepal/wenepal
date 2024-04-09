@extends('admin.layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('admin.layouts.navbars.auth.topnav', ['title' => 'team'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Teams/view</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="d-flex justify-content-end  addBtn ">
                                <a class="btn btn-primary btn-sm" href="{{ route('addTeam') }}" role="button">Add team</a>
                            </div>

                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Photo</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                            Post</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Social</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                            Action</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($teams as $team)
                                        <tr>
                                                <td class="text-center">
                                                    <img src="{{ asset('site/Uploads/team/'.$team->photo) }}" style="width: 60px; height: 65px; object-fit: cover;">
                                                </td>

                                                <td class="text-center">
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm
                                                                @if($team->is_exclusive == 1) text-primary h5 @endif" style="font-weight: bold; font-size:17px !important;">
                                                                {{ $team->name }}
                                                            </h6>
                                                        </div>
                                                    </div>


                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $team->post }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $team->id }}">view social link</button>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="exampleModal-{{ $team->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Social links</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times fa-lg" style="color: red;"></i></button>
                                                                </div>
                                                                <h6 class= "px-2 mb-0 text-sm text-justify overflow-scroll">
                                                                    @if ($team->facebook) <p class="text-sm text-justify"><i class="fa fa-facebook" aria-hidden="true"></i> : {{ $team->facebook }} </p>@endif
                                                                    @if ($team->instagram) <p class="text-sm text-justify"><i class="fa fa-instagram" aria-hidden="true"></i> : {{ $team->instagram }} </p>@endif
                                                                    @if ($team->twitter) <p class="text-sm text-justify"><i class="fa fa-twitter" aria-hidden="true"></i> : {{ $team->twitter }}</p>@endif
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a href="{{ route('editTeam', $team->slug) }}"class="btn btn-info"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                    <form class="d-inline-block" action="{{ route('deleteTeam',$team->slug) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-primary" style="border:none;"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                </tbody>
                            </table>
                            {{-- {{ $teams->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.footers.auth.footer')
    </div>
@endsection
