@extends('layouts.main')
@section('content')


    <div class="page">

        <!--APP-CONTENT START-->
        <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-2 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Transactions</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <div class="btn-group">
                                <button class="btn btn-info dropdown-toggle" type="button"
                                        id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside" aria-expanded="false">
                                    EXPORT
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Pdf</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Excel</a></li>

                                </ul>
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
                                    <div class="col-sm-3">
                                        <label class="visually-hidden"
                                               for="specificSizeInputName">Name</label>
                                        <input type="text" class="form-control" id="specificSizeInputName"
                                               placeholder="Jane Doe">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="visually-hidden"
                                               for="specificSizeInputGroupUsername">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-text">@</div>
                                            <input type="text" class="form-control"
                                                   id="specificSizeInputGroupUsername" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="visually-hidden"
                                               for="specificSizeSelect">Preference</label>
                                        <select class="form-select" id="specificSizeSelect">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
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

                <!-- Start:: row-11 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col"><input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."></th>
                                            <th scope="col">Team Head</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Gmail</th>
                                            <th scope="col">Team</th>
                                            <th scope="col">Work Progress</th>
                                            <th scope="col">Revenue</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="..."></th>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/3.jpg" alt="img">
                                                        </span>Mayor Kelly
                                                </div>
                                            </td>
                                            <td>Manufacturer</td>
                                            <td><span class="badge bg-primary-transparent">Team Lead</span></td>
                                            <td>mayorkrlly@gmail.com</td>
                                            <td>
                                                <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/8.jpg" alt="img">
                                                        </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="img">
                                                        </span>
                                                    <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);">
                                                        +4
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$10,984.29</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                                            class="ri-download-2-line"></i></a>
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                            class="ri-edit-line"></i></a>
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="..."></th>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/12.jpg" alt="img">
                                                        </span>Andrew Garfield
                                                </div>
                                            </td>
                                            <td>Managing Director</td>
                                            <td><span class="badge bg-warning-transparent">Director</span></td>
                                            <td>andrewgarfield@gmail.com</td>
                                            <td>
                                                <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/1.jpg" alt="img">
                                                        </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/5.jpg" alt="img">
                                                        </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/11.jpg" alt="img">
                                                        </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/15.jpg" alt="img">
                                                        </span>
                                                    <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);">
                                                        +4
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$1.4billion</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                                            class="ri-download-2-line"></i></a>
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                            class="ri-edit-line"></i></a>
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="..."></th>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/14.jpg" alt="img">
                                                        </span>Simon Cowel
                                                </div>
                                            </td>
                                            <td>Service Manager</td>
                                            <td><span class="badge bg-success-transparent">Manager</span></td>
                                            <td>simoncowel234@gmail.com</td>
                                            <td>
                                                <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/6.jpg" alt="img">
                                                        </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/16.jpg" alt="img">
                                                        </span>
                                                    <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);">
                                                        +10
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$7,123.21</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                                            class="ri-download-2-line"></i></a>
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                            class="ri-edit-line"></i></a>
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel13" value="" aria-label="..."></th>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                            <img src="../assets/images/faces/5.jpg" alt="img">
                                                        </span>Mirinda Hers
                                                </div>
                                            </td>
                                            <td>Recruiter</td>
                                            <td><span class="badge bg-danger-transparent">Employee</span></td>
                                            <td>mirindahers@gmail.com</td>
                                            <td>
                                                <div class="avatar-list-stacked">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/3.jpg" alt="img">
                                                        </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/10.jpg" alt="img">
                                                        </span>
                                                    <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/14.jpg" alt="img">
                                                        </span>
                                                    <a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded" href="javascript:void(0);">
                                                        +6
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 21%" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$2,325.45</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-icon btn-sm btn-success-transparent rounded-pill"><i
                                                            class="ri-download-2-line"></i></a>
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                                            class="ri-edit-line"></i></a>
                                                    <a href="javascript:void(0);"
                                                       class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-11 -->


            </div>
        </div>
        <!--APP-CONTENT CLOSE-->
    </div>

@endsection

