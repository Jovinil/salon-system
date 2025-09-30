@extends('layouts.empty')


@section('content')

    <div class="row justify-content-center align-items-center h-100 ">
        <div class="col-12 col-lg-5">
            <div class="card card-dark card-outline mb-4 w-100 w-lg-50"> <!--begin::Header-->
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 mt-2">
                            <div class="card-title">Set an Appointment</div>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <a href="{{ route('view.booking') }}" target="_blank" class="btn btn-outline-secondary ms-auto">See Appointments</a>
                        </div>
                    </div>

                </div> <!--end::Header--> <!--begin::Form-->
                <form action="{{ route('create.booking', ['id' => Auth::id()]) }}" method="POST"><!--begin::Body-->
                    @csrf
                    <div class="card-body">
                        <div class="app-content-header">
                            @if(session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>


                        <div class="form-group">
                            <label for="date">Set Date and Time:</label>
                            <input type="datetime-local" name="date" id="date" class="form-control">
                        </div>

                            <table id="services-table" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Services</th>
                                    </tr>
                                </thead>
                                @livewire('service-options')
                            </table>

                        <div class="container-fluid p-0 mt-2 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </div>
                    </div> <!--end::Body--> <!--begin::Footer-->
                </form> <!--end::Form-->
            </div>
        </div>
    </div>

@endsection
