@php
    $nav = array(
        array('title' => 'Overview', 'view' => 'students/'. $student->Student_ID),
        array('title' => 'Class Report', 'view' => 'students/'. $student->Student_ID .'/class'),
        array('title' => 'Documents', 'view' => 'students/'. $student->Student_ID .'/documents'),
        array('title' => 'Progress Card', 'view' => 'students/'. $student->Student_ID .'/progress_card'),
        array('title' => 'Activity', 'view' => 'students/'. $student->Student_ID .'/activity'),
        array('title' => 'Settings', 'view' => 'students/'. $student->Student_ID .'/settings'),
        // array('title' => 'Security', 'view' => ''),
    );
@endphp

<!--begin::Navbar-->
<div class="card {{ $class }}">
    <div class="card-body pt-9 pb-0">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
            <!--begin: Pic-->
            <div class="me-7 mb-4">
                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                    <img src="{{ theme()->getStudentImage($student->Student_ID) }}" alt="image"/>
                    <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
                </div>
            </div>
            <!--end::Pic-->

            <!--begin::Info-->
            <div class="flex-grow-1">
                <!--begin::Title-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-2">
                            <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-1">{{ $student->Student_Name }} <span> {{$student->Student_Name_AR}} </span>
                            </a>
                            {{-- <a href="#">
                                {!! theme()->getSvgIcon("icons/duotune/general/gen026.svg", "svg-icon-1 svg-icon-primary") !!}
                            </a> --}}

                            <a href="#" class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">{{ __('Upgrade to Pro') }}</a>
                        </div>
                        <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                @if (theme()->isGenderMale($student->Gender))
                                <i class="bi bi-gender-male fs-3"></i> &nbsp; {{__('Gender:')}} Male
                                @else
                                <i class="bi bi-gender-female fs-3"></i> &nbsp; {{__('Gender:')}}  Female
                                @endif

                            </a>
                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                <i class="bi bi-calendar-check"></i>  &nbsp; {{__('DOB:')}} {{ theme()->dob($student->birthdate) }}

                            </a>
                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                <i class="bi bi-geo-alt fs-3"></i>  &nbsp; {{__('Nationality:')}} {{ $student->Nationality }}
                            </a>
                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                <i class="bi bi-envelope fs-3"></i>  &nbsp; {{__('Email:')}}
                                @foreach (theme()->splitStringToArray($student->Email) as  $key => $email)
                                {{ $email }}

                                @if ($key < count(theme()->splitStringToArray($student->Email)) - 1)
                                {{','}}
                                @endif

                                @endforeach
                            </a>
                        </div>
                    </div>
                    <div class="d-flex my-4">
                        {{-- <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-trigger="hover" title="Coming soon">Hire Me</a> --}}
                        <div class="me-0">
                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="bi bi-three-dots fs-3"></i>
                            </button>
                            {{ theme()->getView('partials/menus/_menu-3') }}
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap flex-stack">
                    <div class="d-flex flex-column flex-grow-1 pe-8">
                        <div class="d-flex flex-wrap">
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <div class="fw-bold fs-6 text-gray-400">{{ __('Student ID') }}</div>
                                <div class="d-flex align-items-center">
                                    <div class="fs-2 fw-bolder" data-kt-countup="false"> {{$student->Student_ID}} </div>
                                </div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <div class="fw-bold fs-6 text-gray-400">{{ __('PP NO') }}</div>
                                <div class="d-flex align-items-center">
                                    <div class="fs-2 fw-bolder" data-kt-countup="false"> {{$student->PP_No}} </div>
                                </div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <div class="fw-bold fs-6 text-gray-400">{{ __('Emirates ID') }}</div>
                                <div class="d-flex align-items-center">
                                    <div class="fs-2 fw-bolder" data-kt-countup="false"> {{$student->Emirates_ID}} </div>
                                </div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <div class="d-flex align-items-center">
                                    {!! theme()->getSvgIcon("icons/duotune/arrows/arr066.svg", "svg-icon-3 svg-icon-success me-2") !!}
                                    <div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
                                </div>
                                <div class="fw-bold fs-6 text-gray-400">{{ __('Progress') }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                            <span class="fw-bold fs-6 text-gray-400">{{ __('Course Compleation') }}</span>
                            <span class="fw-bolder fs-6">60%</span>
                        </div>
                        <div class="h-5px mx-3 w-100 bg-light mb-3">
                            <div class="bg-success rounded h-5px" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex overflow-auto h-55px">
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
                @foreach($nav as $each)
                    <li class="nav-item">
                        <a class="nav-link text-active-primary me-6 {{ theme()->getPagePath() === $each['view'] ? 'active' : '' }}" href="{{ $each['view'] ? theme()->getPageUrl($each['view']) : '#' }}">
                            {{ $each['title'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
