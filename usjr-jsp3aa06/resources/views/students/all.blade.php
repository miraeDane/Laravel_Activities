@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">
        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession
        

        <h3>All Students</h3>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Student First Name</th>
                    <th>Student Last Name</th>
                    <th>Student Middle Name</th>
                    <th>Program ID</th>
                    <th>College ID</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($student as $students)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $students->studid }}</td>
                        <td>{{ $students->studfirstname }}</td>
                        <td>{{ $students->studlastname }}</td>
                        <td>{{ $students->studmidname }}</td>
                        <td>{{ $students->studprogid }}</td>
                        <td>{{ $students->studcollid }}</td>
                        <td>{{ $students->studyear }}</td>
                    </tr>
                @empty
                    <td colspan="6">
                        <span class="text-danger">
                            <strong>No Student Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>

            </table>

            {{ $student->links() }}


            @endsection