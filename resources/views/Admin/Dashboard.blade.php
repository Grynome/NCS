@extends('Admin.Theme.header')
@section('content-admin')
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-xxl py-5">
            <div class="row gy-0 gx-10">
                <div class="col-xl-8">
                    <div class="card card-xl-stretch bg-body border-0 mb-5 mb-xl-0">
                        <div class="card-body d-flex flex-column flex-lg-row flex-stack p-lg-15">
                            <div
                                class="d-flex flex-column justify-content-center align-items-center align-items-lg-start me-10 text-center text-lg-start">
                                <h3 class="fs-2hx line-height-lg mb-5">
                                    <span class="fw-bold">Brilliant App Ideas</span>
                                    <br />
                                    <span class="fw-bolder">for Startups</span>
                                </h3>
                                <div class="fs-4 text-muted mb-7">Long before you sit down to put the pen
                                    <br />need to make sure you breathe
                                </div>
                                <a href='#' class="btn btn-success fw-bold px-6 py-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_create_app">Create an Store</a>
                            </div>
                            <img src="assets/media/illustrations/sketchy-1/11.png" alt=""
                                class="mw-200px mw-lg-350px mt-lg-n10" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card card-xl-stretch bg-body border-0">
                        <div class="card-body pt-5 mb-xl-9 position-relative">
                            <div class="d-flex flex-stack">
                                <h4 class="fw-bolder text-gray-800 m-0">User Base</h4>
                                <div class="me-1">
                                    <button class="btn btn-icon btn-color-gray-500 w-auto px-0 btn-active-color-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <span class="svg-icon svg-icon-1 me-n1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                    rx="4" fill="black" />
                                                <rect x="11" y="11" width="2.6" height="2.6" rx="1.3"
                                                    fill="black" />
                                                <rect x="15" y="11" width="2.6" height="2.6" rx="1.3"
                                                    fill="black" />
                                                <rect x="7" y="11" width="2.6" height="2.6" rx="1.3"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                        id="kt_menu_61484d2909041">
                                        <div class="px-7 py-5">
                                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                        </div>
                                        <div class="separator border-gray-200"></div>
                                        <div class="px-7 py-5">
                                            <div class="mb-10">
                                                <label class="form-label fw-bold">Status:</label>
                                                <div>
                                                    <select class="form-select form-select-solid" data-kt-select2="true"
                                                        data-placeholder="Select option"
                                                        data-dropdown-parent="#kt_menu_61484d2909041"
                                                        data-allow-clear="true">
                                                        <option></option>
                                                        <option value="1">Approved</option>
                                                        <option value="2">Pending</option>
                                                        <option value="2">In Process</option>
                                                        <option value="2">Rejected</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-10">
                                                <label class="form-label fw-bold">Member Type:</label>
                                                <div class="d-flex">
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                        <span class="form-check-label">Author</span>
                                                    </label>
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="2"
                                                            checked="checked" />
                                                        <span class="form-check-label">Customer</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mb-10">
                                                <label class="form-label fw-bold">Notifications:</label>
                                                <div
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        name="notifications" checked="checked" />
                                                    <label class="form-check-label">Enabled</label>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button type="reset"
                                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                    data-kt-menu-dismiss="true">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-primary"
                                                    data-kt-menu-dismiss="true">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-center mb-5 mb-xxl-0">
                                <div id="kt_charts_mixed_widget_16_chart" style="height: 260px"></div>
                            </div>
                            <div class="text-center position-absolute bottom-0 start-50 translate-middle-x w-100 mb-10">
                                <p class="fw-bold fs-4 text-gray-400 mb-7 px-5">Long before you sit down to put the
                                    <br />make sure you breathe
                                </p>
                                <div class="m-0">
                                    <a href='#' class="btn btn-success fw-bold" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_invite_friends">Invite Users</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="content flex-row-fluid" id="kt_content">
            <div class="row gy-0 gx-10">
                <div class="col-xl-8">
                    <div class="mb-10">
                        <ul class="nav row mb-10">
                            <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                    data-bs-toggle="tab" href="#kt_general_widget_1_1">
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                fill="black" />
                                            <path
                                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <span class="fs-6 fw-bold">SaaS
                                        <br />Application</span>
                                </a>
                            </li>
                            <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                    data-bs-toggle="tab" href="#kt_general_widget_1_2">
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <span class="fs-6 fw-bold">Main
                                        <br />Categories</span>
                                </a>
                            </li>
                            <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px active"
                                    data-bs-toggle="tab" href="#kt_general_widget_1_3">
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                fill="black" />
                                            <path
                                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <span class="fs-6 fw-bold">Order
                                        <br />Management</span>
                                </a>
                            </li>
                            <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                    data-bs-toggle="tab" href="#kt_general_widget_1_4">
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect x="8" y="9" width="3" height="10" rx="1.5"
                                                fill="black" />
                                            <rect opacity="0.5" x="13" y="5" width="3" height="14"
                                                rx="1.5" fill="black" />
                                            <rect x="18" y="11" width="3" height="8" rx="1.5"
                                                fill="black" />
                                            <rect x="3" y="13" width="3" height="6" rx="1.5"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <span class="fs-6 fw-bold">Sales
                                        <br />Statistics</span>
                                </a>
                            </li>
                            <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                    data-bs-toggle="tab" href="#kt_general_widget_1_5">
                                    <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                                fill="black" />
                                            <path
                                                d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <span class="fs-6 fw-bold">Access
                                        <br />Control</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="kt_general_widget_1_1">
                                <div class="card">
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">Latest Arrivals</span>
                                            <span class="text-muted mt-1 fw-bold fs-7">More than 100 new products</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5"
                                                                rx="1" fill="#000000" />
                                                            <rect x="14" y="5" width="5" height="5"
                                                                rx="1" fill="#000000" opacity="0.3" />
                                                            <rect x="5" y="14" width="5" height="5"
                                                                rx="1" fill="#000000" opacity="0.3" />
                                                            <rect x="14" y="14" width="5" height="5"
                                                                rx="1" fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                                data-kt-menu="true" id="kt_menu_61484d290a39d">
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                                </div>
                                                <div class="separator border-gray-200"></div>
                                                <div class="px-7 py-5">
                                                    <div class="mb-10">
                                                        <label class="form-label fw-bold">Status:</label>
                                                        <div>
                                                            <select class="form-select form-select-solid"
                                                                data-kt-select2="true" data-placeholder="Select option"
                                                                data-dropdown-parent="#kt_menu_61484d290a39d"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="1">Approved</option>
                                                                <option value="2">Pending</option>
                                                                <option value="2">In Process</option>
                                                                <option value="2">Rejected</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-10">
                                                        <label class="form-label fw-bold">Member Type:</label>
                                                        <div class="d-flex">
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1" />
                                                                <span class="form-check-label">Author</span>
                                                            </label>
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="2" checked="checked" />
                                                                <span class="form-check-label">Customer</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-10">
                                                        <label class="form-label fw-bold">Notifications:</label>
                                                        <div
                                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="notifications" checked="checked" />
                                                            <label class="form-check-label">Enabled</label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset"
                                                            class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-dismiss="true">Reset</button>
                                                        <button type="submit" class="btn btn-sm btn-primary"
                                                            data-kt-menu-dismiss="true">Apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-3">
                                        <div class="table-responsive">
                                            <table class="table align-middle gs-0 gy-5">
                                                <thead>
                                                    <tr>
                                                        <th class="p-0 w-50px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                        <th class="p-0 min-w-125px"></th>
                                                        <th class="p-0 min-w-40px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/brand-logos/plurk.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Top
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Successful
                                                                Fellas</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge badge-light-danger fw-bold me-1">Angular</span>
                                                            <span class="badge badge-light-info fw-bold me-1">PHP</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="text-muted fw-bold">4600 Users</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/brand-logos/telegram.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Most
                                                                Successful</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-danger fw-bold me-1">HTML</span>
                                                            <span class="badge badge-light-info fw-bold me-1">CSS</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="text-muted fw-bold">7200 Users</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/brand-logos/vimeo.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                Users</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Awesome
                                                                Users</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge badge-light-danger fw-bold me-1">React</span>
                                                            <span class="badge badge-light-info fw-bold me-1">SASS</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="text-muted fw-bold">890 Users</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/brand-logos/bebo.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                Customers</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Best
                                                                Customers</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="badge badge-light-danger fw-bold me-1">Java</span>
                                                            <span class="badge badge-light-info fw-bold me-1">PHP</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="text-muted fw-bold">6370 Users</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/brand-logos/kickstarter.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                                Theme</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Amazing
                                                                Templates</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span
                                                                class="badge badge-light-danger fw-bold me-1">Python</span>
                                                            <span class="badge badge-light-info fw-bold me-1">MySQL</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <span class="text-muted fw-bold">354 Users</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <rect opacity="0.5" x="18" y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_general_widget_1_2">
                                <div class="card">
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">Files</span>
                                            <span class="text-muted mt-1 fw-bold fs-7">Over 100 pending files</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5"
                                                                rx="1" fill="#000000" />
                                                            <rect x="14" y="5" width="5" height="5"
                                                                rx="1" fill="#000000" opacity="0.3" />
                                                            <rect x="5" y="14" width="5" height="5"
                                                                rx="1" fill="#000000" opacity="0.3" />
                                                            <rect x="14" y="14" width="5" height="5"
                                                                rx="1" fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                                data-kt-menu="true">
                                                <div class="menu-item px-3">
                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                        Payments</div>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Create Invoice</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Specify a target name for future usage and reference"></i></a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Generate Bill</a>
                                                </div>
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-end">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Subscription</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Plans</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Billing</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Statements</a>
                                                        </div>
                                                        <div class="separator my-2"></div>
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3">
                                                                <label
                                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                                    <input class="form-check-input w-30px h-20px"
                                                                        type="checkbox" value="1" checked="checked"
                                                                        name="notifications" />
                                                                    <span
                                                                        class="form-check-label text-muted fs-6">Recuring</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-item px-3 my-1">
                                                    <a href="#" class="menu-link px-3">Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-3">
                                        <div class="table-responsive">
                                            <table class="table align-middle gs-0 gy-3">
                                                <thead>
                                                    <tr>
                                                        <th class="p-0 w-50px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                        <th class="p-0 min-w-140px"></th>
                                                        <th class="p-0 min-w-120px"></th>
                                                        <th class="p-0 min-w-40px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label bg-light-success">
                                                                    <span class="svg-icon svg-icon-2x svg-icon-success">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path
                                                                                d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                                                fill="black" />
                                                                            <path opacity="0.3"
                                                                                d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                                                fill="black" />
                                                                            <path opacity="0.3"
                                                                                d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Top
                                                                Authors</a>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">ReactJs, HTML</td>
                                                        <td class="text-end text-muted fw-bold">4600 Users</td>
                                                        <td class="text-end text-dark fw-bolder fs-6 pe-0">5.4MB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label bg-light-danger">
                                                                    <span class="svg-icon svg-icon-2x svg-icon-danger">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="5" y="5" width="5"
                                                                                    height="5" rx="1"
                                                                                    fill="#000000" />
                                                                                <rect x="14" y="5" width="5"
                                                                                    height="5" rx="1"
                                                                                    fill="#000000" opacity="0.3" />
                                                                                <rect x="5" y="14" width="5"
                                                                                    height="5" rx="1"
                                                                                    fill="#000000" opacity="0.3" />
                                                                                <rect x="14" y="14" width="5"
                                                                                    height="5" rx="1"
                                                                                    fill="#000000" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                Authors</a>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                        <td class="text-end text-muted fw-bold">7200 Users</td>
                                                        <td class="text-end text-dark fw-bolder fs-6 pe-0">2.8MB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label bg-light-info">
                                                                    <span class="svg-icon svg-icon-2x svg-icon-info">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3"
                                                                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                Users</a>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">Laravel, Metronic</td>
                                                        <td class="text-end text-muted fw-bold">890 Users</td>
                                                        <td class="text-end text-dark fw-bolder fs-6 pe-0">1.5MB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label bg-light-warning">
                                                                    <span class="svg-icon svg-icon-2x svg-icon-warning">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3"
                                                                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                Customers</a>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                        <td class="text-end text-muted fw-bold">4600 Users</td>
                                                        <td class="text-end text-dark fw-bolder fs-6 pe-0">5.4MB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <span class="svg-icon svg-icon-2x svg-icon-primary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path
                                                                                d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z"
                                                                                fill="black" />
                                                                            <path opacity="0.3"
                                                                                d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                Customers</a>
                                                        </td>
                                                        <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                        <td class="text-end text-muted fw-bold">354 Users</td>
                                                        <td class="text-end text-dark fw-bolder fs-6 pe-0">500KB</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="kt_general_widget_1_3">
                                <div class="card">
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>
                                            <span class="text-muted mt-1 fw-bold fs-7">More than 400 new products</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <ul class="nav">
                                                <li class="nav-item">
                                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-dark active fw-bolder px-4 me-1"
                                                        data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-dark fw-bolder px-4 me-1"
                                                        data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-dark fw-bolder px-4"
                                                        data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body py-3">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                                <div class="table-responsive">
                                                    <table
                                                        class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                        <thead>
                                                            <tr class="border-0">
                                                                <th class="p-0 w-50px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-140px"></th>
                                                                <th class="p-0 min-w-110px"></th>
                                                                <th class="p-0 min-w-50px"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="assets/media/svg/brand-logos/plurk.svg"
                                                                                class="h-50 align-self-center"
                                                                                alt="" />
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                                        Simmons</a>
                                                                    <span class="text-muted fw-bold d-block">Movie
                                                                        Creator</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">React, HTML</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-success">Approved</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18" y="13"
                                                                                    width="13" height="2"
                                                                                    rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="assets/media/svg/brand-logos/telegram.svg"
                                                                                class="h-50 align-self-center"
                                                                                alt="" />
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                        Authors</a>
                                                                    <span class="text-muted fw-bold d-block">Most
                                                                        Successful</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-warning">In
                                                                        Progress</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18" y="13"
                                                                                    width="13" height="2"
                                                                                    rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="assets/media/svg/brand-logos/vimeo.svg"
                                                                                class="h-50 align-self-center"
                                                                                alt="" />
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                        Users</a>
                                                                    <span class="text-muted fw-bold d-block">Awesome
                                                                        Users</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">Laravel,Metronic
                                                                </td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-primary">Success</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18" y="13"
                                                                                    width="13" height="2"
                                                                                    rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="assets/media/svg/brand-logos/bebo.svg"
                                                                                class="h-50 align-self-center"
                                                                                alt="" />
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                        Customers</a>
                                                                    <span class="text-muted fw-bold d-block">Movie
                                                                        Creator</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-danger">Rejected</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18" y="13"
                                                                                    width="13" height="2"
                                                                                    rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="assets/media/svg/brand-logos/kickstarter.svg"
                                                                                class="h-50 align-self-center"
                                                                                alt="" />
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                                        Theme</a>
                                                                    <span class="text-muted fw-bold d-block">Best
                                                                        Customers</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-warning">In
                                                                        Progress</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18" y="13"
                                                                                    width="13" height="2"
                                                                                    rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                                <div class="table-responsive">
                                                    <table
                                                        class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                        <thead>
                                                            <tr class="border-0">
                                                                <th class="p-0 w-50px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-140px"></th>
                                                                <th class="p-0 min-w-110px"></th>
                                                                <th class="p-0 min-w-50px"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="assets/media/svg/brand-logos/plurk.svg"
                                                                                class="h-50 align-self-center"
                                                                                alt="" />
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                                        Simmons</a>
                                                                    <span class="text-muted fw-bold d-block">Movie
                                                                        Creator</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">React, HTML</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-success">Approved</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18" y="13"
                                                                                    width="13" height="2"
                                                                                    rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="assets/media/svg/brand-logos/telegram.svg"
                                                                                class="h-50 align-self-center"
                                                                                alt="" />
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                        Authors</a>
                                                                    <span class="text-muted fw-bold d-block">Most
                                                                        Successful</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-warning">In
                                                                        Progress</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18" y="13"
                                                                                    width="13" height="2"
                                                                                    rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="assets/media/svg/brand-logos/bebo.svg"
                                                                                class="h-50 align-self-center"
                                                                                alt="" />
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                        Customers</a>
                                                                    <span class="text-muted fw-bold d-block">Movie
                                                                        Creator</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-danger">Rejected</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18" y="13"
                                                                                    width="13" height="2"
                                                                                    rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                                                <div class="table-responsive">
                                                    <table
                                                        class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                        <thead>
                                                            <tr class="border-0">
                                                                <th class="p-0 w-50px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-140px"></th>
                                                                <th class="p-0 min-w-110px"></th>
                                                                <th class="p-0 min-w-50px"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="assets/media/svg/brand-logos/kickstarter.svg"
                                                                                class="h-50 align-self-center"
                                                                                alt="" />
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                                        Theme</a>
                                                                    <span class="text-muted fw-bold d-block">Best
                                                                        Customers</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-warning">In
                                                                        Progress</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18" y="13"
                                                                                    width="13" height="2"
                                                                                    rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="assets/media/svg/brand-logos/bebo.svg"
                                                                                class="h-50 align-self-center"
                                                                                alt="" />
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                        Customers</a>
                                                                    <span class="text-muted fw-bold d-block">Movie
                                                                        Creator</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-danger">Rejected</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18" y="13"
                                                                                    width="13" height="2"
                                                                                    rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="assets/media/svg/brand-logos/vimeo.svg"
                                                                                class="h-50 align-self-center"
                                                                                alt="" />
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                        Users</a>
                                                                    <span class="text-muted fw-bold d-block">Awesome
                                                                        Users</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">Laravel,Metronic
                                                                </td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-primary">Success</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18" y="13"
                                                                                    width="13" height="2"
                                                                                    rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-45px me-2">
                                                                        <span class="symbol-label">
                                                                            <img src="assets/media/svg/brand-logos/telegram.svg"
                                                                                class="h-50 align-self-center"
                                                                                alt="" />
                                                                        </span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                        Authors</a>
                                                                    <span class="text-muted fw-bold d-block">Most
                                                                        Successful</span>
                                                                </td>
                                                                <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                                <td class="text-end">
                                                                    <span class="badge badge-light-warning">In
                                                                        Progress</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                        <span class="svg-icon svg-icon-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18" y="13"
                                                                                    width="13" height="2"
                                                                                    rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black" />
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_general_widget_1_4">
                                <div class="card">
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">New Members</span>
                                            <span class="text-muted mt-1 fw-bold fs-7">More than 400 new members</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <ul class="nav">
                                                <li class="nav-item">
                                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bolder px-4 me-1"
                                                        data-bs-toggle="tab" href="#kt_table_widget_4_tab_1">Month</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4 me-1"
                                                        data-bs-toggle="tab" href="#kt_table_widget_4_tab_2">Week</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4"
                                                        data-bs-toggle="tab" href="#kt_table_widget_4_tab_3">Day</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body py-3">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="kt_table_widget_4_tab_1">
                                                <div class="table-responsive">
                                                    <table class="table align-middle gs-0 gy-3">
                                                        <thead>
                                                            <tr>
                                                                <th class="p-0 w-50px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-140px"></th>
                                                                <th class="p-0 min-w-120px"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="assets/media/avatars/150-11.jpg"
                                                                            alt="" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                                        Simmons</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">Movie
                                                                        Creator</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="assets/media/avatars/150-4.jpg"
                                                                            alt="" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie
                                                                        Clarcson</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">HTML,
                                                                        CSS Coding</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="assets/media/avatars/150-5.jpg"
                                                                            alt="" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Lebron
                                                                        Wayde</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">ReactJS
                                                                        Developer</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="assets/media/avatars/150-6.jpg"
                                                                            alt="" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali
                                                                        Trump</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">UI/UX
                                                                        Designer</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="assets/media/avatars/150-9.jpg"
                                                                            alt="" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Kevin
                                                                        Leonard</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">Art
                                                                        Director</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="kt_table_widget_4_tab_2">
                                                <div class="table-responsive">
                                                    <table class="table align-middle gs-0 gy-3">
                                                        <thead>
                                                            <tr>
                                                                <th class="p-0 w-50px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-140px"></th>
                                                                <th class="p-0 min-w-120px"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="assets/media/svg/avatars/043-boy-18.svg"
                                                                            alt="" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Kevin
                                                                        Leonard</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">Art
                                                                        Director</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="assets/media/svg/avatars/014-girl-7.svg"
                                                                            alt="" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali
                                                                        Trump</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">UI/UX
                                                                        Designer</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="assets/media/svg/avatars/018-girl-9.svg"
                                                                            alt="" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie
                                                                        Clarcson</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">HTML,
                                                                        CSS Coding</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="assets/media/svg/avatars/001-boy.svg"
                                                                            alt="" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                                        Simmons</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">Movie
                                                                        Creator</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="kt_table_widget_4_tab_3">
                                                <div class="table-responsive">
                                                    <table class="table align-middle gs-0 gy-3">
                                                        <thead>
                                                            <tr>
                                                                <th class="p-0 w-50px"></th>
                                                                <th class="p-0 min-w-150px"></th>
                                                                <th class="p-0 min-w-140px"></th>
                                                                <th class="p-0 min-w-120px"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="assets/media/svg/avatars/018-girl-9.svg"
                                                                            alt="" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie
                                                                        Clarcson</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">HTML,
                                                                        CSS Coding</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="assets/media/svg/avatars/047-girl-25.svg"
                                                                            alt="" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Lebron
                                                                        Wayde</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">ReactJS
                                                                        Developer</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="symbol symbol-50px">
                                                                        <img src="assets/media/svg/avatars/014-girl-7.svg"
                                                                            alt="" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#"
                                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali
                                                                        Trump</a>
                                                                    <span class="text-muted fw-bold d-block fs-7">UI/UX
                                                                        Designer</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-muted fw-bold d-block fs-7">Rating</span>
                                                                    <div class="rating">
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                        <div class="rating-label me-2 checked">
                                                                            <i class="bi bi-star-fill fs-5"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                                        <i class="bi bi-twitter fs-4"></i>
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-light-facebook btn-sm">
                                                                        <i class="bi bi-facebook fs-4"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_general_widget_1_5">
                                <div class="card">
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">Tasks Overview</span>
                                            <span class="text-muted fw-bold fs-7">Pending 10 tasks</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                        height="24px" viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5"
                                                                rx="1" fill="#000000" />
                                                            <rect x="14" y="5" width="5" height="5"
                                                                rx="1" fill="#000000" opacity="0.3" />
                                                            <rect x="5" y="14" width="5" height="5"
                                                                rx="1" fill="#000000" opacity="0.3" />
                                                            <rect x="14" y="14" width="5" height="5"
                                                                rx="1" fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                                data-kt-menu="true" id="kt_menu_61484d290c69d">
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                                </div>
                                                <div class="separator border-gray-200"></div>
                                                <div class="px-7 py-5">
                                                    <div class="mb-10">
                                                        <label class="form-label fw-bold">Status:</label>
                                                        <div>
                                                            <select class="form-select form-select-solid"
                                                                data-kt-select2="true" data-placeholder="Select option"
                                                                data-dropdown-parent="#kt_menu_61484d290c69d"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="1">Approved</option>
                                                                <option value="2">Pending</option>
                                                                <option value="2">In Process</option>
                                                                <option value="2">Rejected</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-10">
                                                        <label class="form-label fw-bold">Member Type:</label>
                                                        <div class="d-flex">
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1" />
                                                                <span class="form-check-label">Author</span>
                                                            </label>
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="2" checked="checked" />
                                                                <span class="form-check-label">Customer</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-10">
                                                        <label class="form-label fw-bold">Notifications:</label>
                                                        <div
                                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" name="notifications"
                                                                checked="checked" />
                                                            <label class="form-check-label">Enabled</label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset"
                                                            class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-dismiss="true">Reset</button>
                                                        <button type="submit" class="btn btn-sm btn-primary"
                                                            data-kt-menu-dismiss="true">Apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-3">
                                        <div class="table-responsive">
                                            <table class="table align-middle gs-0 gy-5">
                                                <thead>
                                                    <tr>
                                                        <th class="p-0 w-50px"></th>
                                                        <th class="p-0 min-w-200px"></th>
                                                        <th class="p-0 min-w-100px"></th>
                                                        <th class="p-0 min-w-40px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/brand-logos/plurk.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Top
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Successful
                                                                Fellas</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span class="text-muted me-2 fs-7 fw-bold">70%</span>
                                                                </div>
                                                                <div class="progress h-6px w-100">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 70%"
                                                                        aria-valuenow="70" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13"
                                                                            width="13" height="2"
                                                                            rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/brand-logos/telegram.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular
                                                                Authors</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Most
                                                                Successful</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span class="text-muted me-2 fs-7 fw-bold">50%</span>
                                                                </div>
                                                                <div class="progress h-6px w-100">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 50%"
                                                                        aria-valuenow="50" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13"
                                                                            width="13" height="2"
                                                                            rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/brand-logos/vimeo.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New
                                                                Users</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Awesome
                                                                Users</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span class="text-muted me-2 fs-7 fw-bold">80%</span>
                                                                </div>
                                                                <div class="progress h-6px w-100">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 80%"
                                                                        aria-valuenow="80" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13"
                                                                            width="13" height="2"
                                                                            rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/brand-logos/bebo.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active
                                                                Customers</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Best
                                                                Customers</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span class="text-muted me-2 fs-7 fw-bold">90%</span>
                                                                </div>
                                                                <div class="progress h-6px w-100">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 90%"
                                                                        aria-valuenow="90" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13"
                                                                            width="13" height="2"
                                                                            rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <div class="symbol symbol-50px me-2">
                                                                <span class="symbol-label">
                                                                    <img src="assets/media/svg/brand-logos/kickstarter.svg"
                                                                        class="h-50 align-self-center" alt="" />
                                                                </span>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller
                                                                Theme</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Amazing
                                                                Templates</span>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span class="text-muted me-2 fs-7 fw-bold">70%</span>
                                                                </div>
                                                                <div class="progress h-6px w-100">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 70%"
                                                                        aria-valuenow="70" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                <span class="svg-icon svg-icon-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18" y="13"
                                                                            width="13" height="2"
                                                                            rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black" />
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-10">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Recent Statistics</span>
                                <span class="text-muted fw-bold fs-7">More than 400 new members</span>
                            </h3>
                            <div class="card-toolbar">
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5" rx="1"
                                                    fill="#000000" />
                                                <rect x="14" y="5" width="5" height="5" rx="1"
                                                    fill="#000000" opacity="0.3" />
                                                <rect x="5" y="14" width="5" height="5" rx="1"
                                                    fill="#000000" opacity="0.3" />
                                                <rect x="14" y="14" width="5" height="5" rx="1"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                    </span>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    id="kt_menu_61484d290ceec">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                    </div>
                                    <div class="separator border-gray-200"></div>
                                    <div class="px-7 py-5">
                                        <div class="mb-10">
                                            <label class="form-label fw-bold">Status:</label>
                                            <div>
                                                <select class="form-select form-select-solid" data-kt-select2="true"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_61484d290ceec"
                                                    data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-10">
                                            <label class="form-label fw-bold">Member Type:</label>
                                            <div class="d-flex">
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        checked="checked" />
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-10">
                                            <label class="form-label fw-bold">Notifications:</label>
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="notifications" checked="checked" />
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="kt_charts_widget_1_chart" style="height: 350px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card mb-10">
                        <div class="card-header align-items-center border-0 mt-4">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="fw-bolder mb-2 text-dark">Activities</span>
                                <span class="text-muted fw-bold fs-7">890,344 Sales</span>
                            </h3>
                            <div class="card-toolbar">
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5" rx="1"
                                                    fill="#000000" />
                                                <rect x="14" y="5" width="5" height="5" rx="1"
                                                    fill="#000000" opacity="0.3" />
                                                <rect x="5" y="14" width="5" height="5" rx="1"
                                                    fill="#000000" opacity="0.3" />
                                                <rect x="14" y="14" width="5" height="5" rx="1"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                    </span>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    id="kt_menu_61484d290d295">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                    </div>
                                    <div class="separator border-gray-200"></div>
                                    <div class="px-7 py-5">
                                        <div class="mb-10">
                                            <label class="form-label fw-bold">Status:</label>
                                            <div>
                                                <select class="form-select form-select-solid" data-kt-select2="true"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_61484d290d295"
                                                    data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-10">
                                            <label class="form-label fw-bold">Member Type:</label>
                                            <div class="d-flex">
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        checked="checked" />
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-10">
                                            <label class="form-label fw-bold">Notifications:</label>
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="notifications" checked="checked" />
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="timeline-label">
                                <div class="timeline-item">
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-warning fs-1"></i>
                                    </div>
                                    <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And
                                        keep structure</div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-success fs-1"></i>
                                    </div>
                                    <div class="timeline-content d-flex">
                                        <span class="fw-bolder text-gray-800 ps-3">AEOL meeting</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <div class="timeline-content fw-bolder text-gray-800 ps-3">Make deposit
                                        <a href="#" class="text-primary">USD 700</a>. to ESL
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary fs-1"></i>
                                    </div>
                                    <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving
                                        and keep structure keep great</div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                                        <a href="#" class="text-primary">#XF-2356</a>.
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-primary fs-1"></i>
                                    </div>
                                    <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving
                                        and keep structure keep great</div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-danger fs-1"></i>
                                    </div>
                                    <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                                        <a href="#" class="text-primary">#XF-2356</a>.
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
                                    <div class="timeline-badge">
                                        <i class="fa fa-genderless text-success fs-1"></i>
                                    </div>
                                    <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch
                                        preparion meeting</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Trends</span>
                                <span class="text-muted mt-1 fw-bold fs-7">Latest tech trends</span>
                            </h3>
                            <div class="card-toolbar">
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5" rx="1"
                                                    fill="#000000" />
                                                <rect x="14" y="5" width="5" height="5" rx="1"
                                                    fill="#000000" opacity="0.3" />
                                                <rect x="5" y="14" width="5" height="5" rx="1"
                                                    fill="#000000" opacity="0.3" />
                                                <rect x="14" y="14" width="5" height="5" rx="1"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                    </span>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Specify a target name for future usage and reference"></i></a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <div class="separator my-2"></div>
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                            value="1" checked="checked" name="notifications" />
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="d-flex align-items-sm-center mb-7">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label">
                                        <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center"
                                            alt="" />
                                    </span>
                                </div>
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top
                                            Authors</a>
                                        <span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
                                    </div>
                                    <span class="badge badge-light fw-bolder my-2">+82$</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-sm-center mb-7">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label">
                                        <img src="assets/media/svg/brand-logos/telegram.svg"
                                            class="h-50 align-self-center" alt="" />
                                    </span>
                                </div>
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <div class="flex-grow-1 me-2">
                                        <a href="#"
                                            class="text-gray-800 text-hover-primary fs-6 fw-bolder">Popular Authors</a>
                                        <span class="text-muted fw-bold d-block fs-7">Randy, Steve, Mike</span>
                                    </div>
                                    <span class="badge badge-light fw-bolder my-2">+280$</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-sm-center mb-7">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label">
                                        <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center"
                                            alt="" />
                                    </span>
                                </div>
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">New
                                            Users</a>
                                        <span class="text-muted fw-bold d-block fs-7">John, Pat, Jimmy</span>
                                    </div>
                                    <span class="badge badge-light fw-bolder my-2">+4500$</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-sm-center mb-7">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label">
                                        <img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center"
                                            alt="" />
                                    </span>
                                </div>
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Active
                                            Customers</a>
                                        <span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
                                    </div>
                                    <span class="badge badge-light fw-bolder my-2">+686$</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-sm-center mb-7">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label">
                                        <img src="assets/media/svg/brand-logos/kickstarter.svg"
                                            class="h-50 align-self-center" alt="" />
                                    </span>
                                </div>
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <div class="flex-grow-1 me-2">
                                        <a href="#"
                                            class="text-gray-800 text-hover-primary fs-6 fw-bolder">Bestseller Theme</a>
                                        <span class="text-muted fw-bold d-block fs-7">Disco, Retro, Sports</span>
                                    </div>
                                    <span class="badge badge-light fw-bolder my-2">+726$</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-sm-center">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label">
                                        <img src="assets/media/svg/brand-logos/fox-hub.svg"
                                            class="h-50 align-self-center" alt="" />
                                    </span>
                                </div>
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Fox
                                            Broker App</a>
                                        <span class="text-muted fw-bold d-block fs-7">Finance, Corporate, Apps</span>
                                    </div>
                                    <span class="badge badge-light fw-bolder my-2">+145$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
