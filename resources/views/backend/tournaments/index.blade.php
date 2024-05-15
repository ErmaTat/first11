@extends('backend.layouts.app')
@section('content')
@section('pagetitle', 'Tournaments')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#centeredModalPrimary">New
                    Tournament</button>
                <div class="modal fade" id="centeredModalPrimary" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog " role="document">
                        <div class="modal-content">
                            <form action="{{ route('tournaments.store') }}" method="post">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title">New Tournament</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body m-3">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Tournament Name</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Tournament Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Start Date</label>
                                            <input type="date" name="starts" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">End Date</label>
                                            <input type="date" name="ends" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Tournament_id</th>
                                <th>Tournament</th>
                                <th>Starts</th>
                                <th>Ends</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tournaments as $tournament)
                                <tr>
                                    <td>{{ $tournament->tournament_id }}</td>
                                    <td>{{ $tournament->name }}</td>
                                    <td>{{ $tournament->starts }}</td>
                                    <td>{{ $tournament->ends }}</td>
                                    <td>
                                        <a href="{{route('tournaments.show',$tournament->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-arrow-right align-middle me-2">
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                                <polyline points="12 5 19 12 12 19"></polyline>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('assets/js/datatables.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Datatables Responsive
        $("#datatables-reponsive").DataTable({
            responsive: true
        });
    });
</script>
@endsection
