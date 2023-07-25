@extends('layouts.main')
@section('content')

    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="file-manager-container p-2 gap-2 d-sm-flex">
                <div class="file-manager-navigation">
                    <div class="d-flex align-items-center justify-content-between w-100 p-3 border-bottom">
                        <div>
                            <h6 class="fw-semibold mb-0">File Manager</h6>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-settings-3-line"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Hidden Files</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-3 border-bottom">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0" placeholder="Search Files" aria-describedby="button-addon2">
                            <button class="btn btn-light" type="button" id="button-addon2"><i class="ri-search-line text-muted"></i></button>
                        </div>
                    </div>
                    <div>
                        <ul class="list-unstyled files-main-nav" id="files-main-nav">

                        </ul>
                    </div>
                </div>
                <div class="file-manager-folders">
                    <div class="d-flex p-3 flex-wrap gap-2 align-items-center justify-content-between border-bottom">
                        <div>
                            <h6 class="fw-semibold mb-0">Kilifi Floods Rescue Campaign</h6>
                        </div>
                        <div class="d-flex gap-2">
                            <button id="folders-close-btn" class="d-sm-none d-block btn btn-icon btn-sm btn-danger-light">
                                <i class="ri-close-fill"></i>
                            </button>
                            <button class="btn btn-sm btn-primary d-flex align-items-center justify-content-center btn-wave waves-light"
                                    data-bs-toggle="modal" data-bs-target="#create-folder">
                                <i class="ri-add-circle-line align-middle me-1"></i>Create Folder
                            </button>
                            <div class="modal fade" id="create-folder" tabindex="-1"
                                 aria-labelledby="create-folder" data-bs-keyboard="false"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="staticBackdropLabel">Create Folder
                                            </h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="create-folder1" class="form-label">Folder Name</label>
                                            <input type="text" class="form-control" id="create-folder1" placeholder="Folder Name">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-icon btn-light"
                                                    data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                            <button type="button" class="btn btn-sm btn-success">Create</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-outline-secondary d-flex align-items-center justify-content-center btn-wave waves-light"
                                    data-bs-toggle="modal" data-bs-target="#create-file">
                                <i class="ri-add-circle-line align-middle me-1"></i>Create File
                            </button>
                            <div class="modal fade" id="create-file" tabindex="-1"
                                 aria-labelledby="create-file" data-bs-keyboard="false"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="staticBackdropLabel1">Create File
                                            </h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="create-file1" class="form-label">File Name</label>
                                            <input type="text" class="form-control" id="create-file1" placeholder="File Name">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-icon btn-light"
                                                    data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                            <button type="button" class="btn btn-sm btn-success">Create</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 file-folders-container" id="file-folders-container">

                        <div class="row mb-3">
                            <div class="p-3 file-folders-container" id="file-folders-container">

                                <!-- Start::row-3 -->
                                <div class="row">
                                    <div class="col-xxl-4 col-sm-8">
                                        <div class="card-body bg-primary-transparent card custom-card">
                                            <div class="card-body p-0">
                                                <div class="d-flex align-items-top justify-content-between mb-4">
                                                    <div class="flex-fill d-flex align-items-top">

                                                        <div class="flex-fill">
                                                            <p class="fw-semibold fs-14 mb-0">Today`s Donations</p>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center mb-0">
                                                    <p class="mb-0 fs-20 fw-semibold">USD. 2,460</p>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-fill">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 14%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-12 text-muted">14% Target</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-0">
                                                    <p class="mb-0 fs-20 fw-semibold">KES. 12,460</p>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-fill">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 54%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-12 text-muted">54% Target</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-sm-8">
                                        <div class="card-body bg-primary-transparent card custom-card">
                                            <div class="card-body p-0">
                                                <div class="d-flex align-items-top justify-content-between mb-4">
                                                    <div class="flex-fill d-flex align-items-top">

                                                        <div class="flex-fill">
                                                            <p class="fw-semibold fs-14 mb-0">This Week`s Donations</p>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center mb-0">
                                                    <p class="mb-0 fs-20 fw-semibold">USD. 2,460</p>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-fill">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 14%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-12 text-muted">14% Target</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-0">
                                                    <p class="mb-0 fs-20 fw-semibold">KES. 12,460</p>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-fill">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 54%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-12 text-muted">54% Target</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-sm-8">
                                        <div class="card-body bg-primary-transparent card custom-card">
                                            <div class="card-body p-0">
                                                <div class="d-flex align-items-top justify-content-between mb-4">
                                                    <div class="flex-fill d-flex align-items-top">

                                                        <div class="flex-fill">
                                                            <p class="fw-semibold fs-14 mb-0">This Month`s Donations</p>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center mb-0">
                                                    <p class="mb-0 fs-20 fw-semibold">USD. 2,460</p>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-fill">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 14%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-12 text-muted">14% Target</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-0">
                                                    <p class="mb-0 fs-20 fw-semibold">KES. 12,460</p>

                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-fill">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 54%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="fs-12 text-muted">54% Target</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End::row-3 -->

                                <!-- Start::row-3 -->
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card custom-card">
                                            <div class="card-header">
                                                <div class="card-title">Recent Applicants</div>
                                            </div>
                                            <div class="card-body">
                                                <div id="views"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- End::row-3 -->


                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="table-responsive border border-bottom-0">
                                            <table class="table text-nowrap table-hover">
                                                <thead>
                                                <tr>
                                                    <th scope="col">File Name</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Size</th>
                                                    <th scope="col">Date Modified</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody class="files-list">
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                    <span class="avatar avatar-xs">
                                                                        <img src="../assets/images/media/file-manager/1.png" alt="">
                                                                    </span>
                                                            </div>
                                                            <div>
                                                                VID-00292312-SPK823.mp4
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Videos</td>
                                                    <td>87MB</td>
                                                    <td>22,Nov 2022</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                    <span class="avatar avatar-xs">
                                                                        <img src="../assets/images/media/file-manager/1.png" alt="">
                                                                    </span>
                                                            </div>
                                                            <div>
                                                                IMG-09123878-SPK734.jpeg
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Images</td>
                                                    <td>1.35MB</td>
                                                    <td>25,Nov 2022</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="table-active">
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                    <span class="avatar avatar-xs">
                                                                        <img src="../assets/images/media/file-manager/1.png" alt="">
                                                                    </span>
                                                            </div>
                                                            <div>
                                                                AMB-2012.zip
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Archives</td>
                                                    <td>422KB</td>
                                                    <td>23,Nov 2022</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                    <span class="avatar avatar-xs">
                                                                        <img src="../assets/images/media/file-manager/1.png" alt="">
                                                                    </span>
                                                            </div>
                                                            <div>
                                                                AUD-1002-2012.mp3
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Archives</td>
                                                    <td>422KB</td>
                                                    <td>23,Nov 2022</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                    <span class="avatar avatar-xs">
                                                                        <img src="../assets/images/media/file-manager/1.png" alt="">
                                                                    </span>
                                                            </div>
                                                            <div>
                                                                Document-02.pdf
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Documents</td>
                                                    <td>1.69MB</td>
                                                    <td>2,Dec 2022</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td colspan="5">
                                                        <nav aria-label="Page navigation">
                                                            <ul class="pagination justify-content-end mb-0">
                                                                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                            </ul>
                                                        </nav>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="selected-file-details">
                    <div class="d-flex p-3 align-items-center justify-content-between border-bottom">
                        <div>
                            <h6 class="fw-semibold mb-0">File Details</h6>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="dropdown me-1">
                                <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-light waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-fill"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                    <li><a class="dropdown-item" href="#">Copy</a></li>
                                    <li><a class="dropdown-item" href="#">Move</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                    <li><a class="dropdown-item" href="#">Raname</a></li>
                                </ul>
                            </div>
                            <button id="file-close-btn" class="btn btn-icon btn-sm btn-danger-light d-xl-none d-block">
                                <i class="ri-close-fill"></i>
                            </button>
                        </div>
                    </div>
                    <div class="filemanager-file-details" id="filemanager-file-details">
                        <div class="p-3 text-center border-bottom border-block-end-dashed">
                            <div class="file-details mb-3">
                                <img src="../assets/images/media/file-manager/3.png" alt="">
                            </div>
                            <div>
                                <p class="mb-0 fw-semibold fs-16">AMB-2012.zip</p>
                                <p class="mb-0 text-muted fs-10">422KB | 23,Nov 2022</p>
                            </div>
                        </div>
                        <div class="p-3 border-bottom border-block-end-dashed">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div>
                                        <span class="fw-semibold">File Format : </span><span class="fs-12 text-muted">zip</span>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div>
                                        <p class="fw-semibold mb-0">File Description : </p>
                                        <span class="fs-12 text-muted">This file contains 3 folder ynex.main & ynex.premium & ynex.featured and 42 images and layout styles are added in this update.</span>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <p class="fw-semibold mb-0">File Location : </p>
                                    <span class="fs-12 text-muted">Device/Storage/Archives/AMB-2012.zip</span>
                                </li>
                            </ul>
                        </div>
                        <div class="p-3 border-bottom border-block-end-dashed">
                            <p class="mb-1 fw-semibold fs-14">Downloaded from :</p>
                            <a class="text-primary fw-semibold text-break" href="https://themeforest.net/user/spruko/portfolio" target="_blank">
                                <u>https://themeforest.net/user/spruko/portfolio</u>
                            </a>
                        </div>
                        <div class="p-3">
                            <p class="mb-2 fw-semibold fs-14">Shared With :</p>
                            <div class="d-flex align-items-center p-2 mb-1">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="../assets/images/faces/1.jpg" alt="">
                                        </span>
                                <span class="fw-semibold flex-fill">Akira Susan</span>
                                <span class="badge bg-success-transparent fw-normal">28,Nov 2022</span>
                            </div>
                            <div class="d-flex align-items-center p-2 mb-1">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="../assets/images/faces/15.jpg" alt="">
                                        </span>
                                <span class="fw-semibold flex-fill">Khalid Ahmad</span>
                                <span class="badge bg-success-transparent fw-normal">16,Oct 2022</span>
                            </div>
                            <div class="d-flex align-items-center p-2 mb-1">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="../assets/images/faces/8.jpg" alt="">
                                        </span>
                                <span class="fw-semibold flex-fill">Jeremiah Jackson</span>
                                <span class="badge bg-success-transparent fw-normal">05,Dec 2022</span>
                            </div>
                            <div class="d-flex align-items-center p-2">
                                        <span class="avatar avatar-sm me-2">
                                            <img src="../assets/images/faces/13.jpg" alt="">
                                        </span>
                                <span class="fw-semibold flex-fill">Brigo Jhonson</span>
                                <span class="badge bg-success-transparent fw-normal">13,Nov 2022</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::app-content -->


@endsection
