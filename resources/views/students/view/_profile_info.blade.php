<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <div class="card-header cursor-pointer">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0"> {{ __('Profile Details') }} </h3>
        </div>
        <a href="{{ route('settings.profile.edit') }}" class="btn btn-primary align-self-center">
            {{ __('Edit Profile ') }} </a>
    </div>
    <div class="card-body p-9">
        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('Student ID') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800"> {{ $student->Student_ID }} </span>
            </div>
        </div>

        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('School ID') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800"> {{ $student->School_ID }} </span>
            </div>
        </div>

        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('Student Name') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800"> {{ $student->Student_Name }} </span>
            </div>
        </div>

        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('Student Arabic') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800"> {{ $student->Student_Name_AR }} </span>
            </div>
        </div>

        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('Birth Date') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800"> {{ theme()->dob($student->birthdate) }} </span>
            </div>
        </div>




        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('Gender') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800">
                    @if (theme()->isGenderMale($student->Gender))
                        {{ 'Male' }}
                    @else
                        {{ 'Female' }}
                    @endif
                </span>
            </div>
        </div>


        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('PP NO') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800"> {{ $student->Student_Name_AR }} </span>
            </div>
        </div>


        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('Emirates ID') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800"> {{ $student->Emirates_ID }} </span>
            </div>
        </div>

        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('Nationality') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800"> {{ $student->Nationality }} </span>
            </div>
        </div>


        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('Emirites Nationality Status') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800"> {{ $student->Emirates_Nationality_Status }} </span>
            </div>
        </div>


        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('Address') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800"> {{ $student->Address }} </span>
            </div>
        </div>


        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('PO Box') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800"> {{ $student->PO_Box }} </span>
            </div>
        </div>


        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('City') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800"> {{ $student->City }} </span>
            </div>
        </div>


        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('Emirate') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800"> {{ $student->Emirate }} </span>
            </div>
        </div>

        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('Place of Birth') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800"> {{ $student->Place_Of_Birth_EN }} ,
                    {{ $student->Place_Of_Birth_AR }} </span>
            </div>
        </div>


        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('Mobile No') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800">

                    @foreach (theme()->splitStringToArray($student->mobile_number) as $number)
                        <a href="tel:{{ $number }}"> <span class="badge badge-light-success"> <i
                                    class="bi bi-telephone"></i> {{ $number }} </span> </a>
                    @endforeach

            </div>
        </div>



        @if ($student->phone_number != null)
            <div class="row mb-7">
                <label class="col-lg-4 fw-bold text-muted"> {{ __('Phone No') }} </label>
                <div class="col-lg-8">
                    <span class="fw-bolder fs-6 text-gray-800">
                        <a href="tel:{{ $student->phone_number }}"> <span class="badge badge-light-success"> <i
                                    class="bi bi-telephone"></i> {{ $student->phone_number }} </span> </a>


                </div>
            </div>
        @endif


        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{ __('Email') }} </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800">

                    @foreach (theme()->splitStringToArray($student->mobile_number) as $number)
                        <a href="tel:{{ $number }}"> <span class="badge badge-light-success"> <i
                                    class="bi bi-telephone"></i> {{ $number }} </span> </a>
                    @endforeach

            </div>
        </div>


        {{-- <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">{{__('Account Type')}}</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-bold text-gray-800 fs-6">{{theme()->readableString($user->type)}}</span>
            </div>
        </div>

        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{__('Email')}}
            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
            <div class="col-lg-8 d-flex align-items-center">
                <span class="fw-bolder fs-6 text-gray-800 me-2"> {{$user->email}} </span>
                <span class="badge badge-success">Verified</span>
            </div>
        </div>

        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted"> {{__('Contact Phone')}}
            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
            <div class="col-lg-8 d-flex align-items-center">
                <span class="fw-bolder fs-6 text-gray-800 me-2"> {{$user->info->phone}} </span>
                <span class="badge badge-success">Verified</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Company Site</label>
            <div class="col-lg-8">
                <a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">keenthemes.com</a>
            </div>
        </div> --}}
        {{-- <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Country
            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i></label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800">Germany</span>
            </div>
            <!--end::Col-->
        </div> --}}
        <!--end::Input group-->
        <!--begin::Input group-->
        {{-- <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Communication</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800">Email, Phone</span>
            </div>
            <!--end::Col-->
        </div> --}}
        <!--end::Input group-->
        <!--begin::Input group-->
        {{-- <div class="row mb-10">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Allow Changes</label>
            <!--begin::Label-->
            <!--begin::Label-->
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">Yes</span>
            </div>
            <!--begin::Label-->
        </div> --}}
        <!--end::Input group-->
        <!--begin::Notice-->
        {{-- <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
            <!--begin::Icon-->
            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                    <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
                    <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->
            <!--end::Icon-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack flex-grow-1">
                <!--begin::Content-->
                <div class="fw-bold">
                    <h4 class="text-gray-900 fw-bolder">We need your attention!</h4>
                    <div class="fs-6 text-gray-700">Your payment was declined. To start using tools, please
                    <a class="fw-bolder" href="../../demo1/dist/account/billing.html">Add Payment Method</a>.</div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div> --}}
        <!--end::Notice-->
    </div>
    <!--end::Card body-->
</div>
