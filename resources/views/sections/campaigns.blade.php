@extends('layouts.main')
@section('content')


    <div class="page">

        <!--APP-CONTENT START-->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-2 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Campaigns</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <div class="btn-group">
                                <a href="{{route('create_campaign')}}"> <button type="button" class="btn btn-primary btn-sm btn-wave">Add Campaign</button></a>

                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->

                @foreach($campaigns as $campaign)
                <!-- Start::row-1 -->
                <div class="row justify-content-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-xm-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body p-0">
                                <div class="py-5 px-3 bg-primary rounded-bottom">
                                    <div class="col-xxl-6 col-xl-6">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-9 col-xl-9 col-lg-10 col-md-8 col-sm-10 col-12">
                                                <div class="p-3 text-start mb-4">
                                                    <h6 class="fw-semibold text-fixed-white pb-4">
                                                        <span class="about-heading-white">{{$campaign -> campaign_name}}</span>
                                                    </h6>

                                                    <p class="fs-16 mb-5 text-fixed-white op-7">
                                                        {{$campaign -> description}}
                                                    </p>
                                                    <a href="{{route('show_single_campaign',$campaign->id)}}" ><button class="btn btn-secondary btn-wave">View Campaign</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                    <div class="col-xxl-8 col-xl-8 col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card custom-card contactus-form overflow-hidden">

                                    <div class="card-body">
                                        <h6 class="fw-semibold text-fixed-white pb-4">
                                            <span class="text-dark fs-15 fw-semibold mb-2">Total Donations</span>
                                        </h6>
                                        <span class="badge bg-outline-danger custom-badge fs-15 me-5 m-2"><i class="ti ti-flame me-1"></i>KES. 100000</span>
                                        <span class="badge bg-outline-dark custom-badge fs-15 me-5 m-2"><i class="ti ti-flame me-1"></i>USD. 100000</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card custom-card contactus-form overflow-hidden">
                                    <div class="card-body">
                                        <h6 class="fw-semibold text-fixed-white pb-4">
                                            <span class="text-dark fs-15 fw-semibold mb-2">Actions</span>
                                        </h6>
                                        <div class="text-center">
                                            <a href="{{route('edit_campaign', $campaign->id)}}">
                                                <button class="btn btn-secondary-light btn-wave">Edit</button>
                                            </a>

                                            <button class="btn btn-primary-light btn-wave">End</button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!--End::row-1 -->
                @endforeach


            </div>
        </div>
        <!--APP-CONTENT CLOSE-->
    </div>



@endsection

