@extends('backend.layouts.app')
@section('pagetitle', 'Team Details')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h3>Team Details</h3>
                    </div>
                    <div class="card-body">

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
                </div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
@endsection
