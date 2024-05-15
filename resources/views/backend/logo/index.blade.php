@extends('backend.layouts.app')
@section('pagetitle','Logos')
@section('button')
<a href="#" class="btn btn-primary float-end mt-n1" data-bs-toggle="modal" data-bs-target="#centeredModalPrimary"><i class="fas fa-plus"></i> New Logo</a>
@endsection
@section('content')
<div class="row">
    @foreach ($logos as $logo )
    <div class="col-md-4">

        <div class="card d-flex align-items-center justify-content-center" >
            <div class="card-header">
                <button class="btn btn-danger">Delete</button>
            </div>
            <div class="card-body">
                <img src="{{asset('logos')}}/{{$logo->logo}}" alt="logo1" width="200px" height="200px" >
            </div>
        </div>

    </div>
    @endforeach
</div>

<div class="modal fade" id="centeredModalPrimary" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <form action="{{route('logo.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">New Logo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-3">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label class="form-label">Logo</label>
                        <input type="file" name="logo" class="form-control" >
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
