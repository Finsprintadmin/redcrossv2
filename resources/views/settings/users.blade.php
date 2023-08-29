@extends('layouts.main')
@section('content')


    <div class="page">

        <!--APP-CONTENT START-->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-2 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Users</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <div class="btn-group">

                                <button type="button" class="btn btn-primary btn-sm btn-wave" data-bs-toggle="modal" data-bs-target="#create-folder">Create User</button>

                                <div class="modal fade" id="create-folder" tabindex="-1"
                                     aria-labelledby="create-folder" data-bs-keyboard="false"
                                     aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="mail-ComposeLabel">Create User</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <form method="post" action="{{route('create_user')}}">
                                                @csrf
                                                <div class="modal-body px-4">

                                                    <div class="row gy-2">
                                                        <div class="col-xl-12">
                                                            <label for="task-name" class="form-label">Name</label>
                                                            <input type="text" class="form-control" name="name" placeholder="Name">
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="task-name" class="form-label">Phone Number</label>
                                                            <input type="text" class="form-control" name="phone_no" placeholder="Phone no">
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="task-name" class="form-label">Email Address</label>
                                                            <input type="text" class="form-control" name="email" placeholder="Email">
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label class="form-label">Role</label>
                                                            <select class="form-control" data-trigger name="role" id="choices-single-default">
                                                                <option value="">Select</option>
                                                                <option value="Critical">Admin</option>
                                                                <option value="Critical">Finance</option>
                                                                <option value="High">Human Resource</option>
                                                                <option value="Critical">Partner</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="signup-password" class="form-label text-default">Password</label>
                                                            <div class="input-group">
                                                                <input type="password" class="form-control form-control-lg" name="password" placeholder="password">
                                                                <button class="btn btn-light" onclick="createpassword('signup-password',this)" type="button" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="signup-confirmpassword" class="form-label text-default">Confirm Password</label>
                                                            <div class="input-group">
                                                                <input type="password" name="password_confirmation"  class="form-control form-control-lg" id="signup-confirmpassword" placeholder="confirm password">
                                                                <button class="btn btn-light" onclick="createpassword('signup-confirmpassword',this)" type="button" id="button-addon21"><i class="ri-eye-off-line align-middle"></i></button>
                                                            </div>
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

                <!-- Start:: row-5 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between my-0">
                                <div class="card-title">
                                    Search
                                </div>

                            </div>
                            <div class="card-body">

                                <form class="row gx-3 gy-2 align-items-center mt-0">
                                    <div class="col-sm-2">
                                        <label class="visually-hidden"
                                               for="specificSizeInputName">Name</label>
                                        <input type="text" class="form-control" id="specificSizeInputName"
                                               placeholder="Type Here">
                                    </div>

                                    <div class="col-sm-1">
                                        <label class="visually-hidden"
                                               for="specificSizeSelect">By Country</label>
                                        <select class="form-select" id="specificSizeSelect">
                                            <option selected>Country...</option>
                                            <option value="1">Kenya</option>
                                            <option value="2">Tanzania</option>
                                            <option value="2">USA</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-1">
                                        <label class="visually-hidden"
                                               for="specificSizeSelect">By County</label>
                                        <select class="form-select" id="specificSizeSelect">
                                            <option selected>County...</option>
                                            <option value="1">Nairobi</option>
                                            <option value="2">Nakuru</option>
                                            <option value="3">Machakos</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                    <input type="text" class="form-control" id="humanfrienndlydate" placeholder="From">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                    <input type="text" class="form-control" id="humanfrienndlydate" placeholder="To">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">Reset</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End:: row-5 -->

                <!-- Start::row-3 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered">
                                        <thead class="bg-primary-transparent">
                                        <tr>
                                            <th scope="col">ID.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone No.</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Email Address</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>
                                                {{$user->id}}
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center lh-1">
                                                    <div>{{$user->name}}</div>
                                                </div>
                                            </td>
                                            <td>
                                                {{$user->phone_no}}
                                            </td>
                                            <td>
                                                {{$user->role}}
                                            </td>
                                            <td>
                                                {{$user->email}}
                                            </td>

                                            <td>
                                                <div class="hstack gap-2 fs-1">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="fe fe-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div>
                                        Showing 6 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                    </div>
                                    <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0);">
                                                        Prev
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link text-primary" href="javascript:void(0);">
                                                        next
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-3 -->


            </div>
        </div>
        <!--APP-CONTENT CLOSE-->
    </div>



@endsection
