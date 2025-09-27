<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Content-Language" content="en">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- ========================= CSS here ========================= -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap-5.0.0-alpha.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/LineIcons.2.0.css') }}">
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!-- Data table -->
        <link rel="stylesheet" href="{{ asset("DataTables/datatables.css") }}">
        @livewireStyles
    </head>
    <body>
        <div class="container vh-100 py-4">
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
        </div>


		<!-- ========================= JS here ========================= -->
		<script src="{{ asset('js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>
        <script src="{{ asset('js/count-up.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
        <!-- Data Table JS -->
        <script src="{{ asset("DataTables/datatables.min.js") }}"></script>

        <script>
            $(document).ready(function () {
            // Initialize DataTable
            $('#services-table').DataTable({
                paging: true,          // Enable pagination
                searching: true,       // Enable search functionality
                ordering: false,       // Disable column sorting
                lengthMenu: [5, 10, 25, 50],
                // Set default number of rows per page
                language: {
                    search: "Search:", // Customize the search label
                }
            });
        });
        </script>
        @livewireScripts
    </body>
</html>
