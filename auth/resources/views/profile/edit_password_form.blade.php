@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Change Password</h1>

        <form action="{{ route('profile.update_password') }}" method="POST">
            @method('PUT')
            @csrf

            @if($errors->count())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            <div class="form-group">
                <label for="">New password</label>
                <input type="password" name="new_password" class="form-control" placeholder="Enter your new password">
            </div>

            <div class="form-group">
                <label for="">New password again</label>
                <input type="password" name="new_password_confirmation" class="form-control" placeholder="Confirm your new password">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
