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

                                <button type="button" class="btn btn-primary btn-sm btn-wave" data-bs-toggle="modal" data-bs-target="#create-folder">Add Campaign</button>

                                <div class="modal fade" id="create-folder" tabindex="-1"
                                 aria-labelledby="create-folder" data-bs-keyboard="false"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="mail-ComposeLabel">Create Campaign</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="{{route('save_campaign')}}">
                                                @csrf
                                        <div class="modal-body px-4">

                                            <div class="row gy-2">
                                                <div class="col-xl-12">
                                                    <label for="task-name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="campaign_name" placeholder="Campaign Name">
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="task-name" class="form-label">Description</label>
                                                    <input type="text" class="form-control" name="description" placeholder="Campaign Description">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">Donor Type</label>
                                                    <select class="form-control" data-trigger name="donor_type" id="choices-single-default">
                                                        <option value="">Select</option>
                                                        <option value="Critical">Individual</option>
                                                        <option value="High">Organisation</option>

                                                    </select>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">Target Amount</label>
                                                    <input type="text" class="form-control" name= "target_amount" placeholder="Enter the Target Amount">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">Currency</label>
                                                    <select class="form-control blog-tags" name="currency" multiple>
                                                        <option value="Choice 1" selected>KES</option>
                                                        <option value="Choice 2">USD</option>
                                                    </select>

                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">Amount Suggestions</label>
                                                    <select class="form-control blog-tags2" name="amount_suggestions_usd" multiple>
                                                        <option value="Choice 1" selected>$100</option>
                                                        <option value="Choice 2">$50</option>
                                                    </select>
                                                </div>

                                                <div class="col-xl-6">
                                                    <label class="form-label">Start Date</label>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                            <input type="text" class="form-control" name="start_date" id="humanfrienndlydate" placeholder="From">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label class="form-label">End Date</label>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                            <input type="text" class="form-control" name="end_date" id="humanfrienndlydate" placeholder="To">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="task-name" class="form-label">Campaign Image</label>
                                                    <input class="form-control" type="file" name="image" id="input-file">
                                                </div>

                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

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
                                        <span class="badge bg-outline-danger custom-badge fs-15 me-5 m-2"><i class="ti ti-flame me-1"></i>KES. {{$campaign->total_kes}}</span>
                                        <span class="badge bg-outline-dark custom-badge fs-15 me-5 m-2"><i class="ti ti-flame me-1"></i>USD.{{$campaign->total_usd}}</span>
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
                                                <button class="btn btn-secondary-light btn-wave" data-bs-toggle="modal" data-bs-target="#create-folder">Edit</button>
{{--                                                <div class="modal fade" id="create-folder" tabindex="-1"--}}
{{--                                                 aria-labelledby="create-folder" data-bs-keyboard="false"--}}
{{--                                                 aria-hidden="true">--}}
{{--                                                <div class="modal-dialog modal-dialog-centered">--}}
{{--                                                    <div class="modal-content">--}}
{{--                                                        <div class="modal-header">--}}
{{--                                                            <h6 class="modal-title" id="mail-ComposeLabel">Edit Campaign</h6>--}}
{{--                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"--}}
{{--                                                                    aria-label="Close"></button>--}}
{{--                                                        </div>--}}
{{--                                                        <form method="post" action="{{route('update_campaign',$campaign->id)}}">--}}
{{--                                                            @csrf--}}
{{--                                                            <div class="modal-body px-4">--}}

{{--                                                                <div class="row gy-2">--}}
{{--                                                                    <div class="col-xl-12">--}}
{{--                                                                        <label for="task-name" class="form-label">Name</label>--}}
{{--                                                                        <input type="text" class="form-control" name="campaign_name" value="{{$campaign['campaign_name']}}">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-xl-12">--}}
{{--                                                                        <label for="task-name" class="form-label">Description</label>--}}
{{--                                                                        <input type="text" class="form-control" name="description" value="{{$campaign -> description}}">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-xl-6">--}}
{{--                                                                        <label class="form-label">Donor Type</label>--}}
{{--                                                                        <select class="form-control" data-trigger name="donor_type" id="choices-single-default">--}}
{{--                                                                            <option value="">Select</option>--}}
{{--                                                                            <option value="Critical">Individual</option>--}}
{{--                                                                            <option value="High">Organisation</option>--}}

{{--                                                                        </select>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-xl-6">--}}
{{--                                                                        <label class="form-label">Target Amount</label>--}}
{{--                                                                        <input type="text" class="form-control" name= "target_amount" placeholder="Enter the Target Amount">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-xl-6">--}}
{{--                                                                        <label class="form-label">Currency</label>--}}
{{--                                                                        <select class="form-control blog-tags" name="currency" multiple>--}}
{{--                                                                            <option value="Choice 1" selected>KES</option>--}}
{{--                                                                            <option value="Choice 2">USD</option>--}}
{{--                                                                        </select>--}}

{{--                                                                    </div>--}}
{{--                                                                    <div class="col-xl-6">--}}
{{--                                                                        <label class="form-label">Amount Suggestions</label>--}}
{{--                                                                        <select class="form-control blog-tags2" name="amount_suggestions_usd" value="{{$campaign -> amount_suggestions_usd}}" multiple>--}}
{{--                                                                            <option value="Choice 1" selected>$100</option>--}}
{{--                                                                            <option value="Choice 2">$50</option>--}}
{{--                                                                        </select>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div class="col-xl-6">--}}
{{--                                                                        <label class="form-label">Start Date</label>--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <div class="input-group">--}}
{{--                                                                                <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>--}}
{{--                                                                                <input type="text" class="form-control" name="start_date" id="humanfrienndlydate" value="{{$campaign -> start_date}}">--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-xl-6">--}}
{{--                                                                        <label class="form-label">End Date</label>--}}
{{--                                                                        <div class="form-group">--}}
{{--                                                                            <div class="input-group">--}}
{{--                                                                                <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>--}}
{{--                                                                                <input type="text" class="form-control" name="end_date" id="humanfrienndlydate" value="{{$campaign -> end_date}}">--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-xl-12">--}}
{{--                                                                        <label for="task-name" class="form-label">Campaign Image</label>--}}
{{--                                                                        <input class="form-control" type="file" name="image" id="input-file" value="{{$campaign -> image}}">--}}
{{--                                                                    </div>--}}

{{--                                                                </div>--}}

{{--                                                            </div>--}}
{{--                                                            <div class="modal-footer">--}}
{{--                                                                <button type="button" class="btn btn-light"--}}
{{--                                                                        data-bs-dismiss="modal">Cancel</button>--}}
{{--                                                                <button type="submit" class="btn btn-primary">Update</button>--}}
{{--                                                            </div>--}}
{{--                                                        </form>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}


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

