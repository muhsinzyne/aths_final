<div class="modal fade" id="kt_modal_update_details" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            {{ Form::model($user, ['route' => ['settings.users.update', $user->id],'method' => 'PUT','id' => 'kt_modal_update_user_form','class' => 'form']) }}

            @method('PUT')
            <div class="modal-header" id="kt_modal_update_user_header">
                <h2 class="fw-bolder"> {{ __('Update User Details') }} </h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary modal-close"
                    data-modal-id="kt_modal_update_details">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body py-10 px-lg-17">
                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_user_scroll"
                    data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                    data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_user_header"
                    data-kt-scroll-wrappers="#kt_modal_update_user_scroll" data-kt-scroll-offset="300px">
                    <div class="fw-boldest fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                        href="#kt_modal_update_user_user_info" role="button" aria-expanded="false"
                        aria-controls="kt_modal_update_user_user_info"> {{ __('User Information') }}
                        <span class="ms-2 rotate-180">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </span>
                    </div>
                    <div id="kt_modal_update_user_user_info" class="collapse show">



                        <div class="row g-9 mb-7">
                            <div class="col-md-6 fv-row7">
                                {{ Form::label('first_name', 'First Name', ['class' => 'fs-6 fw-bold mb-2']) }}
                                {{ Form::text('first_name', null, ['class' => 'form-control form-control-solid','placeholder' => 'First Name','required']) }}
                                 @error('first_name')
                                    <span class="invalid-name" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 fv-row7">
                                {{ Form::label('last_name', 'Last Name', ['class' => 'fs-6 fw-bold mb-2']) }}
                                {{ Form::text('last_name', null, ['class' => 'form-control form-control-solid','placeholder' => 'Last Name','required']) }}
                                 @error('last_name')
                                    <span class="invalid-name" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row g-9 mb-7">
                             <div class="fv-row mb-7">
                            {{ Form::label('email', 'Email', ['class' => 'fs-6 fw-bold mb-2']) }}
                            {{ Form::text('email', null, ['class' => 'form-control form-control-solid','placeholder' => 'Email Address','required','disabled' => false]) }}
                            @error('email')
                                <span class="invalid-name" role="alert">
                                    <strong class="text-danger">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>

                        <div class="d-flex flex-column mb-7 fv-row">
                            <label class="fs-6 fw-bold mb-2">
                                <span>{{__('User Type')}}</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="{{__('User Type')}}"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="role" aria-label="{{__('Select Role')}}" data-control="select2" data-placeholder="{{__('Select a Type..')}}" class="form-select form-select-solid" data-dropdown-parent="#kt_modal_update_details">
                                <option value=""> {{__('Select a Type')}} </option>
                                @foreach (theme()->userTypeLit() as $key => $type)
                                    <option value="{{$key}}" {{$user->type === $key ? 'selected': ''}}>{{$type}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    {{-- <div class="fw-boldest fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                        href="#kt_modal_update_user_address" role="button" aria-expanded="false"
                        aria-controls="kt_modal_update_user_address">Address Details
                        <span class="ms-2 rotate-180">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </span>
                    </div> --}}

                </div>
            </div>
            <div class="modal-footer flex-center">
                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel"> {{__('Discard')}} </button>
                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit" id="edit-submit">
                    <span class="indicator-label">{{__('Submit')}} </span>
                    <span class="indicator-progress"> {{__('Please wait...')}}
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
