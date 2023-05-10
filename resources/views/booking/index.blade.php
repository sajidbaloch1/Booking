@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                    <a href=" {{ route('create') }}"> <button class="btn btn-success float-end">Add New</button> </a>
                </div>
                <div class="card-body">

                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th colspan="2" class="text-center">Action</th>
                        </tr>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $booking->id }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->email }}</td>
                                <td>{{ $booking->start_date }}</td>
                                <td>{{ $booking->end_date }}</td>
                                <td colspan="2" class="text-center">
                                    <a href="{{ route('edit', [$booking->id]) }}">
                                    <button class="btn btn-primary">Edit</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
