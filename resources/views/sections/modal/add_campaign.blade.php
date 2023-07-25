@extends('layouts.main')
@section('content')

    <form action="" method="post" enctype="multipart/form-data" >

        <div class="col-xl-4">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Using the grid
                    </div>
                    <div class="prism-toggle">
                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollable5">
                        Launch demo modal
                    </button>
                    <div class="modal fade" id="exampleModalScrollable5" tabindex="-1"
                         aria-labelledby="exampleModalScrollable5" data-bs-keyboard="false"
                         aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="staticBackdropLabel5">Modal title
                                    </h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-4 bg-light border">.col-md-4</div>
                                            <div class="col-md-4 ms-auto bg-light border">.col-md-4
                                                .ms-auto</div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-3 ms-auto bg-light border">.col-md-3
                                                .ms-auto</div>
                                            <div class="col-md-2 ms-auto bg-light border">.col-md-2
                                                .ms-auto</div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6 ms-auto bg-light border">.col-md-6
                                                .ms-auto</div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-9 bg-light border">
                                                Level 1: .col-sm-9
                                                <div class="row">
                                                    <div class="col-8 col-sm-6 bg-light border">
                                                        Level 2: .col-8 .col-sm-6
                                                    </div>
                                                    <div class="col-4 col-sm-6 bg-light border">
                                                        Level 2: .col-4 .col-sm-6
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save
                                        Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-none border-top-0">

                </div>
            </div>
        </div>

    </form>

@endsection
