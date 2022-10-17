@extends('layouts.app')
@section('main-content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 style="text-align: center">Student List</h1>
                <div class="text-left"><a href="student_edit" class="btn btn-outline-primary">Add new
                        student</a></div>

                <table class="table mt-3  text-left">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col" class="pr-5">Full Name</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Address</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $student)
                            <tr>
                                <td>{!! $student->id !!}</td>
                                <td class="pr-5 text-right">{!! $student->fullname !!}</td>
                                <td>{!! $student->birthday !!}</td>
                                <td>{!! $student->address !!}</td>
                                <td><a href="students/{!! $student->id !!}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3"></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    
@endsection
