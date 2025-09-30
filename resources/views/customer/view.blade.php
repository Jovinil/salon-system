@extends('layouts.empty')


@section('content')

            <div class="row justify-content-center align-items-center h-100 ">
                <div class="col-12 col-lg-5">
                    <div class="card card-dark card-outline mb-4 w-100 w-lg-50"> <!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">My Appointments</div>
                        </div> <!--end::Header--> <!--begin::Form-->
                        <div class="card-body">
                            <div class="app-content-header">
                                <!-- Display success message -->
                                @if(session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <!-- Display error message -->
                                @if(session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                <!-- Display validation errors -->
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
                            <table id="services-table" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Service Availed</th>
                                        <th>Date</th>
                                        <th>Controls</th>
                                    </tr>
                                </thead>
                                @livewire('appointments')
                            </table>
                            </div>
                        </div> <!--end::Body--> <!--begin::Footer-->
                    </div>
                </div>
            </div>
@endsection
