@extends('layouts.admin.layout')
@section('title', 'Dashboard | Hostess')

@section('content')
<h1>Dashboard</h1>
<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="symbol symbol-60px mb-5">
														<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
                                                                <linearGradient id="jlYSOtDdslgAGokS0kAUha" x1="18.573" x2="29.735" y1="7.573" y2="18.735"
                                                                    gradientUnits="userSpaceOnUse">
                                                                    <stop offset="0" stop-color="#32bdef" />
                                                                    <stop offset="1" stop-color="#1ea2e4" />
                                                                </linearGradient>
                                                                <circle cx="24" cy="13" r="8" fill="url(#jlYSOtDdslgAGokS0kAUha)" />
                                                                <linearGradient id="jlYSOtDdslgAGokS0kAUhb" x1="14.593" x2="33.266" y1="27.608" y2="46.281"
                                                                    gradientUnits="userSpaceOnUse">
                                                                    <stop offset="0" stop-color="#32bdef" />
                                                                    <stop offset="1" stop-color="#1ea2e4" />
                                                                </linearGradient>
                                                                <path fill="url(#jlYSOtDdslgAGokS0kAUhb)"
                                                                    d="M24,24c-7.732,0-14,6.268-14,14v3c0,1.105,0.895,2,2,2h24c1.105,0,2-0.895,2-2v-3	C38,30.268,31.732,24,24,24z" />
                                                            </svg>
                                                        </span>
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2">{{ @$users }}</div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400">Users</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="symbol symbol-60px mb-5">
														<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                                    fill="black"></path>
                                                                <path opacity="0.3"
                                                                    d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2">{{ @$hostess }}</div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400">Hostess</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="symbol symbol-60px mb-5">
														<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                                    fill="black"></path>
                                                                <path opacity="0.3"
                                                                    d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2">{{@$transactions}}</div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400">Transactions</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="symbol symbol-60px mb-5">
														<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                                    fill="black"></path>
                                                                <path opacity="0.3"
                                                                    d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2">{{ @$gallery }}</div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400">Gallery</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 col-lg-4 col-xl-3">
										<!--begin::Card-->
										<div class="card h-100">
											<!--begin::Card body-->
											<div class="card-body d-flex justify-content-center text-center flex-column p-8">
												<!--begin::Name-->
												<a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
													<!--begin::Image-->
													<div class="symbol symbol-60px mb-5">
														<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                                    fill="black"></path>
                                                                <path opacity="0.3"
                                                                    d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
													</div>
													<!--end::Image-->
													<!--begin::Title-->
													<div class="fs-5 fw-bolder mb-2">{{@$prefix}}</div>
													<!--end::Title-->
												</a>
												<!--end::Name-->
												<!--begin::Description-->
												<div class="fs-7 fw-bold text-gray-400">Mobile Prefix</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
								</div>
@endsection