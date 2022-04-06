

<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="row g-6 g-xl-9">
            <div class="col-lg-6 col-xxl-4">
                <div class="card card-flush h-md-50 mb-xl-10">
                    <div class="card-header pt-5">
                        <div class="card-title d-flex flex-column">
                            <span class="fs-2hx fw-bolder text-dark me-2 lh-1"> {{ theme()->numberShort($school->students->count(), 2)  }} </span>
                            <span class="text-gray-400 pt-1 fw-bold fs-6"> {{__('Total Students') }} </span>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-end pe-0">
                        <i class="bi bi-display"></i>

                        <div class="symbol-group symbol-hover flex-nowrap">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                <span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                <span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                <span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                            </div>
                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                <span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
                            </a>
                        </div>
                        <!--end::Users group-->
                    </div>
                    <!--end::Card body-->
                </div>

                <div class="card h-100">
                    <div class="card-body p-9">
                        <div class="fs-2hx fw-bolder">237</div>
                        <div class="fs-4 fw-bold text-gray-400 mb-7">Current Projects</div>
                        <div class="d-flex flex-wrap">
                            <div class="d-flex flex-center h-100px w-100px me-9 mb-5">
                                <canvas id="kt_project_list_chart"></canvas>
                            </div>
                            <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                    <div class="bullet bg-primary me-3"></div>
                                    <div class="text-gray-400">Active</div>
                                    <div class="ms-auto fw-bolder text-gray-700">30</div>
                                </div>
                                <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                    <div class="bullet bg-success me-3"></div>
                                    <div class="text-gray-400">Completed</div>
                                    <div class="ms-auto fw-bolder text-gray-700">45</div>
                                </div>
                                <div class="d-flex fs-6 fw-bold align-items-center">
                                    <div class="bullet bg-gray-300 me-3"></div>
                                    <div class="text-gray-400">Yet to start</div>
                                    <div class="ms-auto fw-bolder text-gray-700">25</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-6 col-xxl-4">
                <div class="card h-100">
                    <div class="card-body p-9">
                        <div class="fs-2hx fw-bolder">$3,290.00</div>
                        <div class="fs-4 fw-bold text-gray-400 mb-7">Project Finance</div>
                        <div class="fs-6 d-flex justify-content-between mb-4">
                            <div class="fw-bold">Avg. Project Budget</div>
                            <div class="d-flex fw-bolder">
                                <span class="svg-icon svg-icon-3 me-1 svg-icon-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M13.4 10L5.3 18.1C4.9 18.5 4.9 19.1 5.3 19.5C5.7 19.9 6.29999 19.9 6.69999 19.5L14.8 11.4L13.4 10Z"
                                            fill="black" />
                                        <path opacity="0.3" d="M19.8 16.3L8.5 5H18.8C19.4 5 19.8 5.4 19.8 6V16.3Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                $6,570
                            </div>
                        </div>
                        <div class="separator separator-dashed"></div>
                        <div class="fs-6 d-flex justify-content-between my-4">
                            <div class="fw-bold">Lowest Project Check</div>
                            <div class="d-flex fw-bolder">
                                <span class="svg-icon svg-icon-3 me-1 svg-icon-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M13.4 14.8L5.3 6.69999C4.9 6.29999 4.9 5.7 5.3 5.3C5.7 4.9 6.29999 4.9 6.69999 5.3L14.8 13.4L13.4 14.8Z"
                                            fill="black" />
                                        <path opacity="0.3"
                                            d="M19.8 8.5L8.5 19.8H18.8C19.4 19.8 19.8 19.4 19.8 18.8V8.5Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                $408
                            </div>
                        </div>
                        <div class="separator separator-dashed"></div>
                        <div class="fs-6 d-flex justify-content-between mt-4">
                            <div class="fw-bold">Ambassador Page</div>
                            <div class="d-flex fw-bolder">
                                <span class="svg-icon svg-icon-3 me-1 svg-icon-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M13.4 10L5.3 18.1C4.9 18.5 4.9 19.1 5.3 19.5C5.7 19.9 6.29999 19.9 6.69999 19.5L14.8 11.4L13.4 10Z"
                                            fill="black" />
                                        <path opacity="0.3" d="M19.8 16.3L8.5 5H18.8C19.4 5 19.8 5.4 19.8 6V16.3Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                $920
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4">
                <div class="card h-100">
                    <div class="card-body p-9">
                        <div class="fs-2hx fw-bolder">49</div>
                        <div class="fs-4 fw-bold text-gray-400 mb-7">Our Clients</div>
                        <div class="symbol-group symbol-hover mb-9">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                <span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Michael Eberon">
                                <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Michelle Swanston">
                                <img alt="Pic" src="assets/media/avatars/300-7.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Francis Mitcham">
                                <img alt="Pic" src="assets/media/avatars/300-20.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Susan Redwood">
                                <span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Perry Matthew">
                                <span class="symbol-label bg-info text-inverse-info fw-bolder">P</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                            </div>
                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_view_users">
                                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bolder">+42</span>
                            </a>
                        </div>
                        <div class="d-flex">
                            <a href="#" class="btn btn-primary btn-sm me-3" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_view_users">All Clients</a>
                            <a href="#" class="btn btn-light btn-sm" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_users_search">Invite New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-wrap flex-stack my-5">
            <h2 class="fs-2 fw-bold my-2">Projects
                <span class="fs-6 text-gray-400 ms-1">by Status</span>
            </h2>
            <div class="d-flex flex-wrap my-1">
                <div class="m-0">
                    <select name="status" data-control="select2" data-hide-search="true"
                        class="form-select form-select-sm bg-body border-body fw-bolder w-125px">
                        <option value="Active" selected="selected">Active</option>
                        <option value="Approved">In Progress</option>
                        <option value="Declined">To Do</option>
                        <option value="In Progress">Completed</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row g-6 g-xl-9">
            <div class="col-md-6 col-xl-4">
                <a href="../../demo1/dist/apps/projects/project.html" class="card border-hover-primary">
                    <div class="card-header border-0 pt-9">
                        <div class="card-title m-0">
                            <div class="symbol symbol-50px w-50px bg-light">
                                <img src="assets/media/svg/brand-logos/plurk.svg" alt="image" class="p-3" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">In Progress</span>
                        </div>
                    </div>
                    <div class="card-body p-9">
                        <div class="fs-3 fw-bolder text-dark">Fitnes App</div>
                        <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
                        <div class="d-flex flex-wrap mb-5">
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">Sep 22, 2022</div>
                                <div class="fw-bold text-gray-400">Due Date</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">$284,900.00</div>
                                <div class="fw-bold text-gray-400">Budget</div>
                            </div>
                        </div>
                        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip"
                            title="This project 50% completed">
                            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 50%"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="symbol-group symbol-hover">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Emma Smith">
                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Rudy Stone">
                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Susan Redwood">
                                <span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a href="../../demo1/dist/apps/projects/project.html" class="card border-hover-primary">
                    <div class="card-header border-0 pt-9">
                        <div class="card-title m-0">
                            <div class="symbol symbol-50px w-50px bg-light">
                                <img src="assets/media/svg/brand-logos/disqus.svg" alt="image"
                                    class="p-3" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <span class="badge badge-light fw-bolder me-auto px-4 py-3">Pending</span>
                        </div>
                    </div>
                    <div class="card-body p-9">
                        <div class="fs-3 fw-bolder text-dark">Leaf CRM</div>
                        <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
                        <div class="d-flex flex-wrap mb-5">
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">May 10, 2021</div>
                                <div class="fw-bold text-gray-400">Due Date</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">$36,400.00</div>
                                <div class="fw-bold text-gray-400">Budget</div>
                            </div>
                        </div>
                        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip"
                            title="This project 30% completed">
                            <div class="bg-info rounded h-4px" role="progressbar" style="width: 30%" aria-valuenow="30"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="symbol-group symbol-hover">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                <span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Brian Cox">
                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a href="../../demo1/dist/apps/projects/project.html" class="card border-hover-primary">
                    <div class="card-header border-0 pt-9">
                        <div class="card-title m-0">
                            <div class="symbol symbol-50px w-50px bg-light">
                                <img src="assets/media/svg/brand-logos/figma-1.svg" alt="image"
                                    class="p-3" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <span class="badge badge-light-success fw-bolder me-auto px-4 py-3">Completed</span>
                        </div>
                    </div>

                    <div class="card-body p-9">
                        <div class="fs-3 fw-bolder text-dark">Atica Banking</div>
                        <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
                        <div class="d-flex flex-wrap mb-5">
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">Mar 14, 2021</div>
                                <div class="fw-bold text-gray-400">Due Date</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">$605,100.00</div>
                                <div class="fw-bold text-gray-400">Budget</div>
                            </div>
                        </div>
                        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip"
                            title="This project 100% completed">
                            <div class="bg-success rounded h-4px" role="progressbar" style="width: 100%"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="symbol-group symbol-hover">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Mad Macy">
                                <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Cris Willson">
                                <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Mike Garcie">
                                <span class="symbol-label bg-info text-inverse-info fw-bolder">M</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a href="../../demo1/dist/apps/projects/project.html" class="card border-hover-primary">
                    <div class="card-header border-0 pt-9">
                        <div class="card-title m-0">
                            <div class="symbol symbol-50px w-50px bg-light">
                                <img src="assets/media/svg/brand-logos/sentry-3.svg" alt="image"
                                    class="p-3" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <span class="badge badge-light fw-bolder me-auto px-4 py-3">Pending</span>
                        </div>
                    </div>
                    <div class="card-body p-9">
                        <div class="fs-3 fw-bolder text-dark">Finance Dispatch</div>
                        <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
                        <div class="d-flex flex-wrap mb-5">
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">Mar 10, 2022</div>
                                <div class="fw-bold text-gray-400">Due Date</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">$284,900.00</div>
                                <div class="fw-bold text-gray-400">Budget</div>
                            </div>
                        </div>
                        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip"
                            title="This project 60% completed">
                            <div class="bg-info rounded h-4px" role="progressbar" style="width: 60%" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="symbol-group symbol-hover">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Nich Warden">
                                <span class="symbol-label bg-warning text-inverse-warning fw-bolder">N</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Rob Otto">
                                <span class="symbol-label bg-success text-inverse-success fw-bolder">R</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a href="../../demo1/dist/apps/projects/project.html" class="card border-hover-primary">
                    <div class="card-header border-0 pt-9">
                        <div class="card-title m-0">
                            <div class="symbol symbol-50px w-50px bg-light">
                                <img src="assets/media/svg/brand-logos/xing-icon.svg" alt="image"
                                    class="p-3" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">In Progress</span>
                        </div>
                    </div>
                    <div class="card-body p-9">
                        <div class="fs-3 fw-bolder text-dark">9 Degree</div>
                        <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
                        <div class="d-flex flex-wrap mb-5">
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">Jun 24, 2022</div>
                                <div class="fw-bold text-gray-400">Due Date</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">$284,900.00</div>
                                <div class="fw-bold text-gray-400">Budget</div>
                            </div>
                        </div>
                        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip"
                            title="This project 40% completed">
                            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 40%"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="symbol-group symbol-hover">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Francis Mitcham">
                                <img alt="Pic" src="assets/media/avatars/300-20.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Michelle Swanston">
                                <img alt="Pic" src="assets/media/avatars/300-7.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Susan Redwood">
                                <span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-4">
                <a href="../../demo1/dist/apps/projects/project.html" class="card border-hover-primary">
                    <div class="card-header border-0 pt-9">
                        <div class="card-title m-0">
                            <div class="symbol symbol-50px w-50px bg-light">
                                <img src="assets/media/svg/brand-logos/tvit.svg" alt="image" class="p-3" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">In Progress</span>
                        </div>
                    </div>
                    <div class="card-body p-9">
                        <div class="fs-3 fw-bolder text-dark">GoPro App</div>
                        <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
                        <div class="d-flex flex-wrap mb-5">
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">Aug 19, 2022</div>
                                <div class="fw-bold text-gray-400">Due Date</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">$284,900.00</div>
                                <div class="fw-bold text-gray-400">Budget</div>
                            </div>
                        </div>
                        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip"
                            title="This project 70% completed">
                            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 70%"
                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="symbol-group symbol-hover">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Robin Watterman">
                                <span class="symbol-label bg-success text-inverse-success fw-bolder">R</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a href="../../demo1/dist/apps/projects/project.html" class="card border-hover-primary">
                    <div class="card-header border-0 pt-9">
                        <div class="card-title m-0">
                            <div class="symbol symbol-50px w-50px bg-light">
                                <img src="assets/media/svg/brand-logos/aven.svg" alt="image" class="p-3" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">In Progress</span>
                        </div>
                    </div>
                    <div class="card-body p-9">
                        <div class="fs-3 fw-bolder text-dark">Buldozer CRM</div>
                        <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
                        <div class="d-flex flex-wrap mb-5">
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">Apr 15, 2022</div>
                                <div class="fw-bold text-gray-400">Due Date</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">$284,900.00</div>
                                <div class="fw-bold text-gray-400">Budget</div>
                            </div>
                        </div>
                        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip"
                            title="This project 70% completed">
                            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 70%"
                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="symbol-group symbol-hover">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="John Mixin">
                                <img alt="Pic" src="assets/media/avatars/300-14.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Emma Smith">
                                <span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a href="../../demo1/dist/apps/projects/project.html" class="card border-hover-primary">
                    <div class="card-header border-0 pt-9">
                        <div class="card-title m-0">
                            <div class="symbol symbol-50px w-50px bg-light">
                                <img src="assets/media/svg/brand-logos/treva.svg" alt="image" class="p-3" />
                            </div>
                        </div>

                        <div class="card-toolbar">
                            <span class="badge badge-light-danger fw-bolder me-auto px-4 py-3">Overdue</span>
                        </div>
                    </div>
                    <div class="card-body p-9">
                        <div class="fs-3 fw-bolder text-dark">Aviasales App</div>
                        <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
                        <div class="d-flex flex-wrap mb-5">
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">Sep 22, 2022</div>
                                <div class="fw-bold text-gray-400">Due Date</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">$284,900.00</div>
                                <div class="fw-bold text-gray-400">Budget</div>
                            </div>
                        </div>
                        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip"
                            title="This project 10% completed">
                            <div class="bg-danger rounded h-4px" role="progressbar" style="width: 10%"
                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="symbol-group symbol-hover">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                <span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Brian Cox">
                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a href="../../demo1/dist/apps/projects/project.html" class="card border-hover-primary">
                    <div class="card-header border-0 pt-9">
                        <div class="card-title m-0">
                            <div class="symbol symbol-50px w-50px bg-light">
                                <img src="assets/media/svg/brand-logos/kanba.svg" alt="image" class="p-3" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <span class="badge badge-light-success fw-bolder me-auto px-4 py-3">Completed</span>
                        </div>
                    </div>
                    <div class="card-body p-9">
                        <div class="fs-3 fw-bolder text-dark">Oppo CRM</div>
                        <p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
                        <div class="d-flex flex-wrap mb-5">
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">Jul 25, 2022</div>
                                <div class="fw-bold text-gray-400">Due Date</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">$284,900.00</div>
                                <div class="fw-bold text-gray-400">Budget</div>
                            </div>
                        </div>
                        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip"
                            title="This project 100% completed">
                            <div class="bg-success rounded h-4px" role="progressbar" style="width: 100%"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="symbol-group symbol-hover">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Nick Macy">
                                <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Sean Paul">
                                <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Mike Collin">
                                <span class="symbol-label bg-info text-inverse-info fw-bolder">M</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="d-flex flex-stack flex-wrap pt-10">
            <div class="fs-6 fw-bold text-gray-700">Showing 1 to 10 of 50 entries</div>
            <ul class="pagination">
                <li class="page-item previous">
                    <a href="#" class="page-link">
                        <i class="previous"></i>
                    </a>
                </li>
                <li class="page-item active">
                    <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">4</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">5</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">6</a>
                </li>
                <li class="page-item next">
                    <a href="#" class="page-link">
                        <i class="next"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog mw-650px">
                <div class="modal-content">
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                        <div class="text-center mb-13">
                            <h1 class="mb-3">Browse Users</h1>
                            <div class="text-muted fw-bold fs-5">If you need more info, please check out our
                                <a href="#" class="link-primary fw-bolder">Users Directory</a>.
                            </div>
                        </div>

                        <div class="mb-15">
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                        </div>
                                        <div class="ms-6">
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma
                                                Smith
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Art
                                                    Director</span></a>

                                            <div class="fw-bold text-muted">smith@kpmg.com</div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                        </div>

                                        <div class="ms-6">
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Melody
                                                Macy
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Marketing
                                                    Analytic</span></a>

                                            <div class="fw-bold text-muted">melody@altbox.com</div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$50,500</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <div class="ms-6">
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Max
                                                Smith
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Software
                                                    Enginer</span></a>
                                            <div class="fw-bold text-muted">max@kt.com</div>
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$75,900</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                        </div>

                                        <div class="ms-6">

                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Sean
                                                Bean
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Web
                                                    Developer</span></a>

                                            <div class="fw-bold text-muted">sean@dellito.com</div>

                                        </div>

                                    </div>

                                    <div class="d-flex">

                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$10,500</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>

                                    </div>

                                </div>

                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

                                    <div class="d-flex align-items-center">

                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                        </div>

                                        <div class="ms-6">

                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Brian
                                                Cox
                                                <span class="badge badge-light fs-8 fw-bold ms-2">UI/UX
                                                    Designer</span></a>

                                            <div class="fw-bold text-muted">brian@exchange.com</div>

                                        </div>

                                    </div>

                                    <div class="d-flex">

                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$20,000</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>

                                    </div>

                                </div>

                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

                                    <div class="d-flex align-items-center">

                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                        </div>

                                        <div class="ms-6">

                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Mikaela
                                                Collins
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Head Of
                                                    Marketing</span></a>

                                            <div class="fw-bold text-muted">mik@pex.com</div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$9,300</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                        </div>
                                        <div class="ms-6">
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Francis
                                                Mitcham
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Software
                                                    Arcitect</span></a>
                                            <div class="fw-bold text-muted">f.mit@kpmg.com</div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$15,000</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

                                    <div class="d-flex align-items-center">

                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                        </div>

                                        <div class="ms-6">

                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Olivia
                                                Wild
                                                <span class="badge badge-light fs-8 fw-bold ms-2">System
                                                    Admin</span></a>

                                            <div class="fw-bold text-muted">olivia@corpmail.com</div>

                                        </div>

                                    </div>

                                    <div class="d-flex">

                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>

                                    </div>

                                </div>

                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                        </div>

                                        <div class="ms-6">

                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Neil
                                                Owen
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Account
                                                    Manager</span></a>

                                            <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$45,800</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

                                    <div class="d-flex align-items-center">

                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                        </div>

                                        <div class="ms-6">

                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Dan
                                                Wilson
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Web
                                                    Desinger</span></a>

                                            <div class="fw-bold text-muted">dam@consilting.com</div>

                                        </div>

                                    </div>

                                    <div class="d-flex">

                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$90,500</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>

                                    </div>

                                </div>

                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

                                    <div class="d-flex align-items-center">

                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                        </div>

                                        <div class="ms-6">

                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma
                                                Bold
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Corporate
                                                    Finance</span></a>

                                            <div class="fw-bold text-muted">emma@intenso.com</div>

                                        </div>

                                    </div>

                                    <div class="d-flex">

                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$5,000</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>

                                    </div>

                                </div>

                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                        </div>
                                        <div class="ms-6">
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Ana
                                                Crown
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Customer
                                                    Relationship</span></a>
                                            <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$70,000</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-stack py-5">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                        </div>
                                        <div class="ms-6">
                                            <a href="#"
                                                class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Robert
                                                Doe
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Marketing
                                                    Executive</span></a>
                                            <div class="fw-bold text-muted">robert@benko.com</div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$45,500</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="fw-bold">
                                <label class="fs-6">Adding Users by Team Members</label>
                                <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                            </div>
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" checked="checked" />
                                <span class="form-check-label fw-bold text-muted">Allowed</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <div class="modal-content">
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                        <div class="text-center mb-13">
                            <h1 class="mb-3">Search Users</h1>
                            <div class="text-muted fw-bold fs-5">Invite Collaborators To Your Project</div>
                        </div>
                        <div id="kt_modal_users_search_handler" data-kt-search-keypress="true"
                            data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                            <form data-kt-search-element="form" class="w-100 position-relative mb-5"
                                autocomplete="off">
                                <input type="hidden" />
                                <span
                                    class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                            transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                    name="search" value="" placeholder="Search by username, full name or email..."
                                    data-kt-search-element="input" />

                                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                    data-kt-search-element="spinner">
                                    <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                                </span>
                                <span
                                    class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                    data-kt-search-element="clear">
                                    <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                transform="rotate(-45 6 17.3137)" fill="black" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                transform="rotate(45 7.41422 6)" fill="black" />
                                        </svg>
                                    </span>
                                </span>
                            </form>
                            <div class="py-5">
                                <div data-kt-search-element="suggestions">
                                    <h3 class="fw-bold mb-5">Recently searched:</h3>
                                    <div class="mh-375px scroll-y me-n7 pe-7">
                                        <a href="#"
                                            class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                            </div>
                                            <div class="fw-bold">
                                                <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                                <span class="badge badge-light">Art Director</span>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                            </div>
                                            <div class="fw-bold">
                                                <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                                <span class="badge badge-light">Marketing Analytic</span>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                            </div>
                                            <div class="fw-bold">
                                                <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                                <span class="badge badge-light">Software Enginer</span>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                            </div>
                                            <div class="fw-bold">
                                                <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                                <span class="badge badge-light">Web Developer</span>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                            </div>
                                            <div class="fw-bold">
                                                <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                                <span class="badge badge-light">UI/UX Designer</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div data-kt-search-element="results" class="d-none">
                                    <div class="mh-375px scroll-y me-n7 pe-7">
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                        value="0" />
                                                </label>
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                </div>
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                        Smith</a>
                                                    <div class="fw-bold text-muted">smith@kpmg.com</div>
                                                </div>
                                            </div>
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2" selected="selected">Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                        value="1" />
                                                </label>
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span
                                                        class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                </div>
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
                                                        Macy</a>
                                                    <div class="fw-bold text-muted">melody@altbox.com</div>
                                                </div>
                                            </div>
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1" selected="selected">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                        value="2" />
                                                </label>
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                                </div>
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
                                                        Smith</a>
                                                    <div class="fw-bold text-muted">max@kt.com</div>
                                                </div>
                                            </div>
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3" selected="selected">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                        value="3" />
                                                </label>
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                </div>
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
                                                        Bean</a>
                                                    <div class="fw-bold text-muted">sean@dellito.com</div>
                                                </div>
                                            </div>
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2" selected="selected">Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                        value="4" />
                                                </label>
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                                </div>
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
                                                        Cox</a>
                                                    <div class="fw-bold text-muted">brian@exchange.com</div>
                                                </div>
                                            </div>
                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3" selected="selected">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                            <div class="d-flex align-items-center">

                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                        value="5" />
                                                </label>

                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span
                                                        class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                                </div>
                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
                                                        Collins</a>
                                                    <div class="fw-bold text-muted">mik@pex.com</div>
                                                </div>
                                            </div>

                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2" selected="selected">Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                        value="6" />
                                                </label>

                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                                </div>

                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
                                                        Mitcham</a>
                                                    <div class="fw-bold text-muted">f.mit@kpmg.com</div>
                                                </div>
                                            </div>

                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3" selected="selected">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                        value="7" />
                                                </label>

                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span
                                                        class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                </div>

                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
                                                        Wild</a>
                                                    <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                                </div>
                                            </div>

                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2" selected="selected">Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                        value="8" />
                                                </label>

                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span
                                                        class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                </div>

                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
                                                        Owen</a>
                                                    <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                                </div>
                                            </div>

                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1" selected="selected">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                        value="9" />
                                                </label>

                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                                </div>

                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
                                                        Wilson</a>
                                                    <div class="fw-bold text-muted">dam@consilting.com</div>
                                                </div>
                                            </div>

                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3" selected="selected">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                        value="10" />
                                                </label>

                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span
                                                        class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                                </div>

                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                        Bold</a>
                                                    <div class="fw-bold text-muted">emma@intenso.com</div>
                                                </div>
                                            </div>

                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2" selected="selected">Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                        value="11" />
                                                </label>

                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                                </div>

                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
                                                        Crown</a>
                                                    <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                                </div>
                                            </div>

                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1" selected="selected">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                        value="12" />
                                                </label>

                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                                </div>

                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
                                                        Doe</a>
                                                    <div class="fw-bold text-muted">robert@benko.com</div>
                                                </div>
                                            </div>

                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3" selected="selected">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                        value="13" />
                                                </label>

                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                </div>

                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
                                                        Miller</a>
                                                    <div class="fw-bold text-muted">miller@mapple.com</div>
                                                </div>
                                            </div>

                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3" selected="selected">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                        value="14" />
                                                </label>
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span
                                                        class="symbol-label bg-light-success text-success fw-bold">L</span>
                                                </div>

                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
                                                        Kunic</a>
                                                    <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                                </div>
                                            </div>

                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2" selected="selected">Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                        value="15" />
                                                </label>

                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                                </div>

                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
                                                        Wilder</a>
                                                    <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                                </div>
                                            </div>

                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1" selected="selected">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="border-bottom border-gray-300 border-bottom-dashed"></div>

                                        <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" name="users"
                                                        data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                        value="16" />
                                                </label>

                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                                </div>

                                                <div class="ms-5">
                                                    <a href="#"
                                                        class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
                                                        Cox</a>
                                                    <div class="fw-bold text-muted">brian@exchange.com</div>
                                                </div>
                                            </div>

                                            <div class="ms-2 w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                    <option value="1">Guest</option>
                                                    <option value="2">Owner</option>
                                                    <option value="3" selected="selected">Can Edit</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-center mt-15">
                                        <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
                                            class="btn btn-active-light me-3">Cancel</button>
                                        <button type="submit" id="kt_modal_users_search_submit"
                                            class="btn btn-primary">Add Selected Users</button>
                                    </div>
                                </div>

                                <div data-kt-search-element="empty" class="text-center d-none">
                                    <div class="fw-bold py-10">
                                        <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                        <div class="text-muted fs-6">Try to search by username, full name or email...
                                        </div>
                                    </div>

                                    <div class="text-center px-5">
                                        <img src="assets/media/illustrations/sketchy-1/1.png" alt=""
                                            class="w-100 h-200px h-sm-325px" />
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
