@extends('master')
@section('content')
<div class="main-content-container overflow-hidden">
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4" style="padding-bottom: 0 !important;">
                    <div class="mb-3 mb-lg-4">
                        <h3 class="mb-0">Projects Overview</h3>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-sm-6">
                            <div class="card bg-primary bg-opacity-10 border-primary border-opacity-10 rounded-3 mb-4 stats-box style-three">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-19">
                                        <div class="flex-shrink-0">
                                            <i class="material-symbols-outlined fs-40 text-primary">folder_open</i>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <span>Total Projects</span>
                                            <h3 class="fs-20 mt-1 mb-0">1235</h3>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between flex-wrap gap-2 align-items-center">
                                        <span class="fs-12">Projects this month</span>
                                        <span class="count up fw-medium ms-0">+10%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-sm-6">
                            <div class="card bg-danger bg-opacity-10 border-danger border-opacity-10 rounded-3 mb-4 stats-box style-three">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-19">
                                        <div class="flex-shrink-0">
                                            <i class="material-symbols-outlined fs-40 text-danger">stacks</i>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <span>Active Projects</span>
                                            <h3 class="fs-20 mt-1 mb-0">425</h3>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between flex-wrap gap-2 align-items-center">
                                        <span class="fs-12">Projects this month</span>
                                        <span class="count up fw-medium ms-0">+5.75%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-sm-6">
                            <div class="card bg-success bg-opacity-10 border-success border-opacity-10 rounded-3 mb-4 stats-box style-three">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-19">
                                        <div class="flex-shrink-0">
                                            <i class="material-symbols-outlined fs-40 text-success">assignment_turned_in</i>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <span>Finished Projects</span>
                                            <h3 class="fs-20 mt-1 mb-0">135</h3>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between flex-wrap gap-2 align-items-center">
                                        <span class="fs-12">Projects this month</span>
                                        <span class="count down fw-medium ms-0">-15%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-sm-6">
                            <div class="card bg-primary-div bg-opacity-10 border-primary-div border-opacity-10 rounded-3 mb-4 stats-box style-three">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0">
                                            <i class="material-symbols-outlined fs-40 text-primary-div">group</i>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            <span>Team Members</span>
                                            <h3 class="fs-20 mt-1 mb-0">65+</h3>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between flex-wrap gap-2 align-items-center">
                                        <span class="fs-12">Hard Worker</span>
                                        <ul class="ps-0 mb-0 list-unstyled d-flex align-items-center">
                                            <li>
                                                <a href="my-profile.html">
                                                    <img src="assets/images/user-16.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                                </a>
                                            </li>
                                            <li class="ms-m-15">
                                                <a href="my-profile.html">
                                                    <img src="assets/images/user-17.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                                </a>
                                            </li>
                                            <li class="ms-m-15">
                                                <a href="my-profile.html">
                                                    <img src="assets/images/user-18.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                                </a>
                                            </li>
                                            <li class="ms-m-15">
                                                <a href="my-profile.html">
                                                    <img src="assets/images/user-19.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                                </a>
                                            </li>
                                            <li class="ms-m-15">
                                                <a href="user-list.html" class="wh-34 lh-34 rounded-circle bg-primary d-block text-center text-decoration-none text-white fs-12 fw-medium border border-1 border-color-white">+55</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3 mb-lg-4">
                        <h3 class="mb-0">Projects Roadmap</h3>
                        <select class="form-select month-select form-control p-0 h-auto border-0 w-90" style="background-position: right 0 center;" aria-label="Default select example">
                            <option selected>This Week</option>
                            <option value="1">This Month</option>
                            <option value="2">This Year</option>
                        </select>
                    </div>

                    <div style="margin-top: -25px; margin-left: -10px; margin-bottom: -25px;">
                        <div id="projects_roadmap"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <div class="card bg-white border-0 rounded-3 mb-4">
        <div class="card-body p-0">
            <div class="p-4">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                    <h3 class="mb-0">All Projects</h3>
                    <select class="form-select month-select form-control p-0 h-auto border-0 w-90" style="background-position: right 0 center;" aria-label="Default select example">
                        <option selected>This Week</option>
                        <option value="1">This Month</option>
                        <option value="2">This Year</option>
                    </select>
                </div>
            </div>

            <div class="default-table-area style-two all-projects">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Client</th>
                                <th scope="col">Assignees</th>
                                <th scope="col">Budget</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-body">#854</td>
                                <td>
                                    <a href="project-overview.html">Project CyberSphere</a>
                                </td>
                                <td>NovaTech Solutions</td>
                                <td>
                                    <ul class="ps-0 mb-0 list-unstyled d-flex align-items-center">
                                        <li>
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-16.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-17.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-18.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-19.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="user-list.html" class="wh-34 lh-34 rounded-circle bg-primary d-block text-center text-decoration-none text-white fs-12 fw-medium border border-1 border-color-white">+10</a>
                                        </li>
                                    </ul>
                                </td>
                                <td class="text-body">$4,500</td>
                                <td class="text-body">25 Mar 2024</td>
                                <td class="text-body">25 Apr 2024</td>
                                <td>
                                    <span class="badge bg-success bg-opacity-10 text-success p-2 fs-12 fw-normal">Finished</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                        </button>
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                        </button>
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                        </button>
                                    </div>
                                </td> 
                            </tr>
                            <tr>
                                <td class="text-body">#855</td>
                                <td>
                                    <a href="project-overview.html">Digital Oasis Initiative</a>
                                </td>
                                <td>AlphaWave Innovations</td>
                                <td>
                                    <ul class="ps-0 mb-0 list-unstyled d-flex align-items-center">
                                        <li>
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-16.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-17.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-18.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="user-list.html" class="wh-34 lh-34 rounded-circle bg-primary d-block text-center text-decoration-none text-white fs-12 fw-medium border border-1 border-color-white">+04</a>
                                        </li>
                                    </ul>
                                </td>
                                <td class="text-body">$6,800</td>
                                <td class="text-body">20 Mar 2024</td>
                                <td class="text-body">20 Apr 2024</td>
                                <td>
                                    <span class="badge bg-danger bg-opacity-10 text-danger p-2 fs-12 fw-normal">In Progress</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                        </button>
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                        </button>
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                        </button>
                                    </div>
                                </td> 
                            </tr>
                            <tr>
                                <td class="text-body">#856</td>
                                <td>
                                    <a href="project-overview.html">CloudScape Evolution</a>
                                </td>
                                <td>InnovateIQ Inc.</td>
                                <td>
                                    <ul class="ps-0 mb-0 list-unstyled d-flex align-items-center">
                                        <li>
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-16.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-17.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="user-list.html" class="wh-34 lh-34 rounded-circle bg-primary d-block text-center text-decoration-none text-white fs-12 fw-medium border border-1 border-color-white">+07</a>
                                        </li>
                                    </ul>
                                </td>
                                <td class="text-body">$2,500</td>
                                <td class="text-body">15 Mar 2024</td>
                                <td class="text-body">15 Apr 2024</td>
                                <td>
                                    <span class="badge bg-primary-div bg-opacity-10 text-primary-div p-2 fs-12 fw-normal">Pending</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                        </button>
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                        </button>
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                        </button>
                                    </div>
                                </td> 
                            </tr>
                            <tr>
                                <td class="text-body">#857</td>
                                <td>
                                    <a href="project-overview.html">Data Dynamo Drive</a>
                                </td>
                                <td>BlueSky Technologies</td>
                                <td>
                                    <ul class="ps-0 mb-0 list-unstyled d-flex align-items-center">
                                        <li>
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-16.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-17.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-18.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-19.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="user-list.html" class="wh-34 lh-34 rounded-circle bg-primary d-block text-center text-decoration-none text-white fs-12 fw-medium border border-1 border-color-white">+15</a>
                                        </li>
                                    </ul>
                                </td>
                                <td class="text-body">$7,500</td>
                                <td class="text-body">10 Mar 2024</td>
                                <td class="text-body">10 Apr 2024</td>
                                <td>
                                    <span class="badge bg-danger bg-opacity-10 text-danger p-2 fs-12 fw-normal">In Progress</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                        </button>
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                        </button>
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                        </button>
                                    </div>
                                </td> 
                            </tr>
                            <tr>
                                <td class="text-body">#858</td>
                                <td>
                                    <a href="project-overview.html">QuantumLeap Quest</a>
                                </td>
                                <td>NexGen Systems</td>
                                <td>
                                    <ul class="ps-0 mb-0 list-unstyled d-flex align-items-center">
                                        <li>
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-16.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-17.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="my-profile.html">
                                                <img src="assets/images/user-18.jpg" class="wh-34 lh-34 rounded-circle border border-1 border-color-white" alt="user">
                                            </a>
                                        </li>
                                        <li class="ms-m-15">
                                            <a href="user-list.html" class="wh-34 lh-34 rounded-circle bg-primary d-block text-center text-decoration-none text-white fs-12 fw-medium border border-1 border-color-white">+03</a>
                                        </li>
                                    </ul>
                                </td>
                                <td class="text-body">$3,400</td>
                                <td class="text-body">05 Mar 2024</td>
                                <td class="text-body">05 Apr 2024</td>
                                <td>
                                    <span class="badge bg-success bg-opacity-10 text-success p-2 fs-12 fw-normal">Finished</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                        </button>
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                        </button>
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                        </button>
                                    </div>
                                </td> 
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="p-4 pt-lg-4">
                    <div class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap">
                        <span class="fs-12 fw-medium">Showing 5 of 30 Results</span>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-0 justify-content-center">
                                <li class="page-item">
                                    <a class="page-link icon" href="project-management.html" aria-label="Previous">
                                        <i class="material-symbols-outlined">keyboard_arrow_left</i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="project-management.html">1</a></li>
                                <li class="page-item"><a class="page-link" href="project-management.html">2</a></li>
                                <li class="page-item"><a class="page-link" href="project-management.html">3</a></li>
                                <li class="page-item"><a class="page-link" href="project-management.html">4</a></li>
                                <li class="page-item">
                                    <a class="page-link icon" href="project-management.html" aria-label="Next">
                                        <i class="material-symbols-outlined">keyboard_arrow_right</i>
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
@endsection