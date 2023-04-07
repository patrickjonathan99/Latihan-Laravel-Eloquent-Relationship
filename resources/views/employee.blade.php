@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center">Web Programming Assignment - Laravel Eloquent Relationship</h3>
                <h5 class="text-center my-4">List of Employees</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $emp)
                            <tr>
                                <td>{{ $emp->name }}</td>
                                <td>{{ $emp->address }}</td>
                                <td>{{ $emp->phone }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
