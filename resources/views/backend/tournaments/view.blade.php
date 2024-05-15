@extends('backend.layouts.app')
@section('pagetitle', 'Tournament Details')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h3>Tournament Details</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <td>
                                    <input type="text" class="form-control" readonly value=" {{ $tournament->tournament_id }}">
                                </td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>
                                    <input type="text" class="form-control" value="{{ $tournament->name }}">
                                </td>
                            </tr>
                            <tr>
                                <th>Starts</th>
                                <td>
                                    <input type="date" class="form-control" value="{{ $tournament->starts }}">
                                </td>
                            </tr>
                            <tr>
                                <th>Ends</th>
                                <td>
                                    <input type="date" class="form-control" value="{{ $tournament->ends }}">
                                </td>
                            </tr>
                            <tr>
                                <th>Created</th>
                                <td>{{ $tournament->created_at }}</td>
                            </tr>
                            <tfoot>
                                <tr >
                                    <th colspan="2">
                                        <button class="btn btn-primary float-end">Save Changes</button>
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h3>Tournament Settings</h3>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h3>Tournament Officials</h3>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-actions float-end">
                        <div class="dropdown position-relative">
                            <a href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"
                                class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#centeredModalPrimary">Register New Team</a>
                                <a class="dropdown-item" href="#">Remove Selected</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title">Registered Teams</h5>

                    <div class="modal fade" id="centeredModalPrimary" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog " role="document">
                            <div class="modal-content">
                                <form action="{{ route('tournament.register') }}" method="post">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ $tournament->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body m-3">
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <label class="form-label">Team/Club</label>
                                                <input type="hidden" value="{{ $tournament->id }}" name="tournament_id">
                                                <select name="club_id" id="" class="form-control">
                                                    @foreach ($clubs as $club)
                                                        <option value="{{ $club->id }}">{{ $club->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- <h6 class="card-subtitle text-muted">Nam pretium turpis et arcu. Duis arcu.</h6> --}}
                </div>

                <div class="card-body">

                    <div id="tasks-backlog" style="min-height:50px;">

                        {{-- <div class="card mb-3 bg-light  border">
                        <div class="card-body p-3">
                            <div class="float-end me-n2">
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" checked="">
                                    <span class="form-check-label d-none">Checkbox</span>
                                </label>
                            </div>
                            <div class="mt-n1">
                                <img src="img/avatars/avatar-2.jpg" width="32" height="32" class="rounded-circle" alt="Avatar">
                            </div>
                            <p>ClubFC</p>
                            <div class="float-end">
                                <a class="btn btn-primary btn-sm" href="#">View</a>
                                <a class="btn btn-secondary btn-sm" href="#">Remove</a>
                            </div>
                        </div>
                    </div> --}}
                        @if (count($tournament->clubs) == 0)
                            <div class="card mb-3 bg-light border">
                                <div class="card-body d-flex justify-content-center align-items-center ">
                                    <p>No Teams Registered</p>
                                </div>
                            </div>
                        @else
                            @foreach ($tournament->clubs as $club)
                                <div class="card mb-3 bg-light border">
                                    <div class="card-body p-3">
                                        <div class="float-end me-n2">
                                            <label class="form-check">
                                                <input type="checkbox" class="form-check-input" checked="">
                                                <span class="form-check-label d-none">Checkbox</span>
                                            </label>
                                        </div>

                                        <div class=" mt-n1">
                                            <img src="img/avatars/avatar-2.jpg" width="32" height="32" class="rounded-circle" alt="Avatar">
                                        </div>
                                        <p>{{ $club->club->name }}</p>
                                        <a class="btn btn-primary btn-sm float-end" href="#">View</a>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
