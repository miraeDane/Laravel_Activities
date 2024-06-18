@extends('layouts.app')

<h3>All Colleges</h3>

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
                    <th>College ID</th>
                    <th>College Full Name</th>
                    <th>College Short Name</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($college as $colleges)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $colleges->collid }}</td>
                        <td>{{ $colleges->collfullname }}</td>
                        <td>{{ $colleges->collshortname }}</td>
                    </tr>
                @empty
                    <td colspan="6">
                        <span class="text-danger">
                            <strong>No College Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>

            </table>

            {{ $college->links() }}

            @endsection