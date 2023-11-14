@extends('master')
@section('hospital_management_pages')



<div class="pcoded-main-container">
    <div class="pcoded-wrapper">

        <div class="pcoded-content">

            <div class="page-header card">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="feather icon-home bg-c-blue"></i>
                            <div class="d-inline">
                                <h5>Dashboard CRM</h5>
                                <span>Welcomne to dashboard of helthcare management system</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="../index-2.html"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard CRM</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="page-body">

                            <div class="row">

                                <div class="col-xl-3 col-md-6">
                                    <div class="card prod-p-card card-red">
                                        <div class="card-body">
                                            <div class="row align-items-center m-b-30">
                                                <div class="col">
                                                    <h6 class="m-b-5 text-white">Total Profit</h6>
                                                    <h3 class="m-b-0 f-w-700 text-white">$1,783</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                                                </div>
                                            </div>
                                            <p class="m-b-0 text-white"><span
                                                    class="label label-danger m-r-10">+11%</span>From
                                                Previous Month</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <div class="card prod-p-card card-blue">
                                        <div class="card-body">
                                            <div class="row align-items-center m-b-30">
                                                <div class="col">
                                                    <h6 class="m-b-5 text-white">Total Orders</h6>
                                                    <h3 class="m-b-0 f-w-700 text-white">15,830</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-database text-c-blue f-18"></i>
                                                </div>
                                            </div>
                                            <p class="m-b-0 text-white"><span
                                                    class="label label-primary m-r-10">+12%</span>From
                                                Previous Month</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <div class="card prod-p-card card-green">
                                        <div class="card-body">
                                            <div class="row align-items-center m-b-30">
                                                <div class="col">
                                                    <h6 class="m-b-5 text-white">Average Price</h6>
                                                    <h3 class="m-b-0 f-w-700 text-white">$6,780</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-dollar-sign text-c-green f-18"></i>
                                                </div>
                                            </div>
                                            <p class="m-b-0 text-white"><span
                                                    class="label label-success m-r-10">+52%</span>From
                                                Previous Month</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <div class="card prod-p-card card-yellow">
                                        <div class="card-body">
                                            <div class="row align-items-center m-b-30">
                                                <div class="col">
                                                    <h6 class="m-b-5 text-white">Product Sold</h6>
                                                    <h3 class="m-b-0 f-w-700 text-white">6,784</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-tags text-c-yellow f-18"></i>
                                                </div>
                                            </div>
                                            <p class="m-b-0 text-white"><span
                                                    class="label label-warning m-r-10">+52%</span>From
                                                Previous Month</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-6 col-md-12">
                                    <div class="card latest-update-card">
                                        <div class="card-header">
                                            <h5>What’s New</h5>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li class="first-opt"><i
                                                            class="feather icon-chevron-left open-card-option"></i>
                                                    </li>
                                                    <li><i class="feather icon-maximize full-card"></i></li>
                                                    <li><i class="feather icon-minus minimize-card"></i>
                                                    </li>
                                                    <li><i class="feather icon-refresh-cw reload-card"></i>
                                                    </li>
                                                    <li><i class="feather icon-trash close-card"></i></li>
                                                    <li><i
                                                            class="feather icon-chevron-left open-card-option"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="latest-update-box">
                                                <div class="row p-t-20 p-b-30">
                                                    <div class="col-auto text-right update-meta p-r-0">
                                                        <img src="backend/files/assets/images/avatar-4.jpg"
                                                            alt="user image"
                                                            class="img-radius img-40 align-top m-r-15 update-icon">
                                                    </div>
                                                    <div class="col p-l-5">
                                                        <a href="#!">
                                                            <h6>Your Manager Posted.</h6>
                                                        </a>
                                                        <p class="text-muted m-b-0">Jonny michel</p>
                                                    </div>
                                                </div>
                                                <div class="row p-b-30">
                                                    <div class="col-auto text-right update-meta p-r-0">
                                                        <i
                                                            class="feather icon-briefcase bg-c-red update-icon"></i>
                                                    </div>
                                                    <div class="col p-l-5">
                                                        <a href="#!">
                                                            <h6>You have 3 pending Task.</h6>
                                                        </a>
                                                        <p class="text-muted m-b-0">Hemilton</p>
                                                    </div>
                                                </div>
                                                <div class="row p-b-30">
                                                    <div class="col-auto text-right update-meta p-r-0">
                                                        <i
                                                            class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                    </div>
                                                    <div class="col p-l-5">
                                                        <a href="#!">
                                                            <h6>New Order Received.</h6>
                                                        </a>
                                                        <p class="text-muted m-b-0">Hemilton</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-auto text-right update-meta p-r-0">
                                                        <img src="{{asset('backend/files/assets/images/avatar-4.jpg')}}"
                                                            alt="user image"
                                                            class="img-radius img-40 align-top m-r-15 update-icon">
                                                    </div>
                                                    <div class="col p-l-5">
                                                        <a href="#!">
                                                            <h6>Your Manager Posted.</h6>
                                                        </a>
                                                        <p class="text-muted m-b-0">Jonny michel</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-12">
                                    <div class="card new-cust-card">
                                        <div class="card-header">
                                            <h5>New Customers</h5>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li class="first-opt"><i
                                                            class="feather icon-chevron-left open-card-option"></i>
                                                    </li>
                                                    <li><i class="feather icon-maximize full-card"></i></li>
                                                    <li><i class="feather icon-minus minimize-card"></i>
                                                    </li>
                                                    <li><i class="feather icon-refresh-cw reload-card"></i>
                                                    </li>
                                                    <li><i class="feather icon-trash close-card"></i></li>
                                                    <li><i
                                                            class="feather icon-chevron-left open-card-option"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="align-middle m-b-35">
                                                <img src="{{asset('backend/files/assets/images/avatar-2.jpg')}}"
                                                    alt="user image"
                                                    class="img-radius img-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <a href="#!">
                                                        <h6>Alex Thompson</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Cheers!</p>
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-35">
                                                <img src="{{asset('backend/files/assets/images/avatar-3.jpg')}}"
                                                    alt="user image"
                                                    class="img-radius img-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <a href="#!">
                                                        <h6>John Doue</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">stay hungry stay foolish!
                                                    </p>
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-35">
                                                <img src="{{asset('backend/files/assets/images/avatar-3.jpg')}}"
                                                    alt="user image"
                                                    class="img-radius img-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <a href="#!">
                                                        <h6>Alex Thompson</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Cheers!</p>
                                                    <span class="status deactive text-mute"><i
                                                            class="far fa-clock m-r-10"></i>30 min
                                                        ago</span>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-0">
                                                <img src="{{asset('backend/files/assets/images/avatar-2.jpg')}}"
                                                    alt="user image"
                                                    class="img-radius img-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <a href="#!">
                                                        <h6>Alex Thompson</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Cheers!</p>
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-4 col-md-12">
                                    <div class="card comp-card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-b-25">Impressions</h6>
                                                    <h3 class="f-w-700 text-c-blue">1,563</h3>
                                                    <p class="m-b-0">May 23 - June 01 (2017)</p>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-eye bg-c-blue"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="card comp-card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-b-25">Goal</h6>
                                                    <h3 class="f-w-700 text-c-green">30,564</h3>
                                                    <p class="m-b-0">May 23 - June 01 (2017)</p>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-bullseye bg-c-green"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="card comp-card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-b-25">Impact</h6>
                                                    <h3 class="f-w-700 text-c-yellow">42.6%</h3>
                                                    <p class="m-b-0">May 23 - June 01 (2017)</p>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-hand-paper bg-c-yellow"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="styleSelector">
        </div>

    </div>
</div>

@endsection