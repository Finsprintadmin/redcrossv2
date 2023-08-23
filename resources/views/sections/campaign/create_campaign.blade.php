@extends('layouts.main')
@section('content')

    <!--APP-CONTENT START-->
    <div class="main-content app-content">
        <div class="container-fluid">
    <!-- Start:: row-6 -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Create Campaign
                    </div>

                </div>
                <div class="card-body">
                    <form class="row g-3 mt-0" method="post" action="{{route('save_campaign')}}">
                        @csrf
                        <div class="col-md-12">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="campaign_name" placeholder="Campaign Name">
                        </div>

                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" 
                                   placeholder="Description">
                        </div>

                        <div class="col-md-6">
                            <label for="input-date" class="form-label">Start Date</label>
                            <input type="date" name="start_date" class="form-control" id="input-date">
                        </div>
                        <div class="col-md-6">
                            <label for="input-date" class="form-label">End Date</label>
                            <input type="date" name="end_date" class="form-control" id="input-date">
                        </div>
                        <div class="col-md-6">
                            <label for="input-file" class="form-label">Upload Image</label>
                            <input class="form-control" type="file" name="image" id="input-file">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer d-none border-top-0">

                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-6 -->

        </div>
    </div>
    <!--APP-CONTENT CLOSE-->

@endsection
