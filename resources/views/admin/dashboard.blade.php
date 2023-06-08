@extends('layouts.admin.layout')
@section('title', 'Dashboard | Hostess')

@section('content')
<h1>Dashboard</h1>
<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
	<div class="col-md-6 col-lg-4 col-xl-3">
		<!--begin::Card-->
		<div class="card h-100">
			<!--begin::Card body-->
			<div class="card-body d-flex justify-content-center text-center flex-column p-8">
				<!--begin::Name-->
				<a href="{{route('admin.users')}}" class="text-gray-800 text-hover-primary d-flex flex-column">
					<!--begin::Image-->
					<div class="symbol symbol-60px mb-5">
						<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
								<linearGradient id="jlYSOtDdslgAGokS0kAUha" x1="18.573" x2="29.735" y1="7.573"
									y2="18.735" gradientUnits="userSpaceOnUse">
									<stop offset="0" stop-color="#32bdef" />
									<stop offset="1" stop-color="#1ea2e4" />
								</linearGradient>
								<circle cx="24" cy="13" r="8" fill="url(#jlYSOtDdslgAGokS0kAUha)" />
								<linearGradient id="jlYSOtDdslgAGokS0kAUhb" x1="14.593" x2="33.266" y1="27.608"
									y2="46.281" gradientUnits="userSpaceOnUse">
									<stop offset="0" stop-color="#32bdef" />
									<stop offset="1" stop-color="#1ea2e4" />
								</linearGradient>
								<path fill="url(#jlYSOtDdslgAGokS0kAUhb)"
									d="M24,24c-7.732,0-14,6.268-14,14v3c0,1.105,0.895,2,2,2h24c1.105,0,2-0.895,2-2v-3	C38,30.268,31.732,24,24,24z" />
							</svg>
						</span>
					</div>
					<div class="fs-5 fw-bolder mb-2">{{ @$users }}</div>
				</a>
				<div class="fs-7 fw-bold text-gray-400">Users</div>
			</div>
			<!--end::Card body-->
		</div>
		<!--end::Card-->
	</div>
	
	<div class="col-md-6 col-lg-4 col-xl-3">
		<!--begin::Card-->
		<div class="card h-100">
			<!--begin::Card body-->
			<div class="card-body d-flex justify-content-center text-center flex-column p-8">
				<!--begin::Name-->
				<a href="{{route('admin.hostessList')}}" class="text-gray-800 text-hover-primary d-flex flex-column">
					<!--begin::Image-->
					<div class="symbol symbol-60px mb-5">
						<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path opacity="0.3"
									d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
									fill="black"></path>
								<path
									d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
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
	
	<div class="col-md-6 col-lg-4 col-xl-3">
		<!--begin::Card-->
		<div class="card h-100">
			<!--begin::Card body-->
			<div class="card-body d-flex justify-content-center text-center flex-column p-8">
				<!--begin::Name-->
				<a href="{{route('admin.transactions')}}" class="text-gray-800 text-hover-primary d-flex flex-column">
					<!--begin::Image-->
					<div class="symbol symbol-60px mb-5">
						<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path opacity="0.3"
									d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
									fill="black"></path>
								<path
									d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
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

	<div class="col-md-6 col-lg-4 col-xl-3">
		<!--begin::Card-->
		<div class="card h-100">
			<!--begin::Card body-->
			<div class="card-body d-flex justify-content-center text-center flex-column p-8">
				<!--begin::Name-->
				<a href="{{route('admin.gallery')}}" class="text-gray-800 text-hover-primary d-flex flex-column">
					<!--begin::Image-->
					<div class="symbol symbol-60px mb-5">
						<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path
									d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
									fill="black"></path>
								<path
									d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
									fill="black"></path>
								<path opacity="0.3"
									d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
									fill="black"></path>
								<path opacity="0.3"
									d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
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

	<div class="col-md-6 col-lg-4 col-xl-3">
		<!--begin::Card-->
		<div class="card h-100">
			<!--begin::Card body-->
			<div class="card-body d-flex justify-content-center text-center flex-column p-8">
				<!--begin::Name-->
				<a href="{{route('admin.mobilePrefix')}}" class="text-gray-800 text-hover-primary d-flex flex-column">
					<!--begin::Image-->
					<div class="symbol symbol-60px mb-5">
						<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
								<path opacity="0.3"
									d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
									fill="black"></path>
								<path
									d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
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