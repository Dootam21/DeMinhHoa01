@extends('layouts.app')
@section('main-content')
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 style="text-align: center">Student Information</h1>
            <div class="row" style="width:600px">
                <form class="" action="{{ route('edit', ['id' => $student]) }}" method="post">
                    <div class="col-6 mb-3 w-100" >
                        <label for="inputId" class="form-label">ID</label>
                        <input type="text" class="form-control" value="{!! $student->id !!}" readonly>
                    </div>
                    <div class="col-6 mb-3 w-100">
                        <label for="inputFullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="fullname" placeholder="Enter Full name"
                            value="{!! $student->fullname !!}">
                    </div>
                    <div class="col-6 mb-3 w-100">
                        <label for="inputBirthday" class="form-label">Birthday</label>
                        <input type="date" class="form-control" name="birthday" placeholder=""
                            value="{!! $student->birthday !!}">
                    </div>
                    <div class="col-6 mb-3 w-100">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter Address"
                            value="{!! $student->address !!}">
                    </div>
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
