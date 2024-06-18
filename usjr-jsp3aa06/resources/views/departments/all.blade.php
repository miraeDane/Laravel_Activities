@extends('layouts.app')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">
        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession
        

        <h3>All Department</h3>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Department ID</th>
                    <th>Department Full Name</th>
                    <th>Department Short Name</th>
                    <th>College ID</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($department as $departments)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $departments->deptid }}</td>
                        <td>{{ $departments->deptfullname }}</td>
                        <td>{{ $departments->deptshortname }}</td>
                        <td>{{ $departments->deptcollid }}</td>
                    </tr>
                @empty
                    <td colspan="6">
                        <span class="text-danger">
                            <strong>No Department Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>

            </table>

            {{ $department->links() }}

            @endsection