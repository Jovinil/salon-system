@extends('layouts.empty')


@section('content')


<div class="card text-center">
    <div class="card-header">
        Signup
    </div>
    <div class="card-body">
        <form action="{{ route('customer.signup') }}" method="POST" class="h-100 d-flex align-items-center">
            @csrf
            <div class="modal-body py-3 mt-1">
                <div class="container">
                    <div class="row">
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="full_name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Dela Cruz, Juan P" required  aria-describedby="fullNameHelp">
                                {{-- <div id="fullNameHelp" class="form-text">Dela Cruz, Juan P</div> --}}
                            </div>
                            <div class="mb-3">
                                <label for="contact_number" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="09123456789" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required placeholder="johndoe@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3 d-none">
                                <label for="role" class="form-label">role</label>
                                <input hidden type="text" class="form-control" id="role" name="role" value="1">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Signup</button>
                            </div>
                            <p class="text-center mt-3">
                            Already have an account? <a class="btn btn-link" href="{{ route('login') }}">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



@endsection
