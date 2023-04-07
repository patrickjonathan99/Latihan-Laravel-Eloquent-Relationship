@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center">Web Programming Assignment - Laravel Eloquent Relationship</h3>
                <h5 class="text-center my-4">List of Employees Bank Account</h5>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Bank Name</th>
                            <th>Account Number</th>
                            <th>Balance (IDR)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($accounts as $acc)
                            <tr>
                                <td>{{ $acc->employee->name }}</td>
                                <td>{{ $acc->bankType->bankname }}</td>
                                <td>{{ $acc->accountnumber }}</td>
                                <td>{{ $acc->balance }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
