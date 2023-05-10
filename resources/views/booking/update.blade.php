@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container mt-5">
        <div class="col-12">
            <div class="card mt-3">
                <form action="{{ route('update', [$booking->id]) }}" class="p-2 mt-3" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control mb-3" value="{{ $booking->name }}">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control mb-3" value="{{ $booking->email }}">
                    <label for="">Start Date</label>
                    <input type="datetime-local" id="start_date" class="form-control" name="start_date"
                        value="{{ $booking->start_date }}">

                    <label for="">End Date</label>
                    <input type="datetime-local" id="end_date" class="form-control" name="end_date"
                        value="{{ $booking->end_date }}">
                    <input type="submit" class="btn btn-dark float-end my-2" value="submit">
                </form>
            </div>
        </div>
    </div>
@endsection
