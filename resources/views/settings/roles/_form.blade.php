<div class="card-body border-top p-9">
    <div class="row mb-6">
        {{ Form::label('name', 'Name', ['class' => 'col-lg-4 col-form-label fw-bold fs-6']) }}
        <div class="col-lg-8 fv-row">

            {{ Form::text('name', null, ['class' => 'form-control form-control-lg form-control-solid','placeholder' => 'Enter Permission Name','required']) }}
            @error('name')
                <span class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-6">
        {{ Form::label('guard_name', 'Guard Name', ['class' => 'col-lg-4 col-form-label fw-bold fs-6']) }}
        <div class="col-lg-8 fv-row">

            {{ Form::text('guard_name', 'web', ['class' => 'form-control form-control-lg form-control-solid','placeholder' => 'Guard Name Default web','required']) }}
            @error('guard_name')
                <span class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            @if(!empty($permissions))
            <h6> Assign Permission to Roles Select
                All</h6>

            <table class="table table-striped mb-0" id="dataTable-1">
                <thead>
                    <tr>
                        <th> Module </th>
                        <th> Permissions
                            <span class="selectallBtn selectAll"> Select All</span>
                            <span class="selectallBtn unselectAll"> Unselect All</span>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $modules=[
                    'dashboard',
                    'delivery_hub',
                    'registered_shipper',
                    'consignment',
                    'track',
                    'hub_operation',
                    'delivery',
                    'return_collection',
                    'shipment_bag',
                    'settings.account',
                    'settings.role'
                    ];
                    if(Auth::user()->type == 'super_admin'){
                    $modules[] = 'settings.permission';
                    $modules[] = 'settings.global';
                    }
                    @endphp
                    @foreach($modules as $module)
                    <tr>
                        <?php ?>
                        <td style="text-transform: capitalize;">
                            {{ ucfirst(str_replace('.', ' - ', str_replace('_', ' ', $module))) }}</td>
                        <td>
                            <div class="row">
                                {{-- index --}}
                                @if(in_array($module.'.index',(array) $permissions))
                                @if($key = array_search($module.'.index', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Index',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif

                                {{-- show --}}
                                @if(in_array($module.'.show',(array) $permissions))
                                @if($key = array_search($module.'.show', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Show',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- create --}}
                                @if(in_array($module.'.create',(array) $permissions))
                                @if($key = array_search($module.'.create', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Create',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- Edit --}}
                                @if(in_array($module.'.edit',(array) $permissions))
                                @if($key = array_search($module.'.edit', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Edit',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- Delete --}}
                                @if(in_array($module.'.delete',(array) $permissions))
                                @if($key = array_search($module.'.delete', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Delete',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif






                                {{-- Non CRUD view - for example in global setting view permission --}}
                                @if(in_array($module.'.view',(array) $permissions))
                                @if($key = array_search($module.'.view', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'View',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- Non CRUD modify - --}}
                                @if(in_array($module.'.modify',(array) $permissions))
                                @if($key = array_search($module.'.modify', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Modify',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif




                                {{-- Non CRUD Change password  --}}
                                @if(in_array($module.'.change_password',(array) $permissions))
                                @if($key = array_search($module.'.change_password', $permissions))
                                <div class="col-md-4 custom-control custom-checkbox" style="margin-top: 15px">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Change Password',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                @if(in_array($module.'.chart_bag',(array) $permissions))
                                @if($key = array_search($module.'.chart_bag', $permissions))
                                <div class="col-md-4 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Chart Shipment Bag',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                @if(in_array($module.'.open',(array) $permissions))
                                @if($key = array_search($module.'.open', $permissions))
                                <div class="col-md-4 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Open Charted Bag',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif



                                {{-- Report --}}
                                @if(in_array($module.'.report',(array) $permissions))
                                @if($key = array_search($module.'.report', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Report',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- Export --}}
                                @if(in_array($module.'.export',(array) $permissions))
                                @if($key = array_search($module.'.export', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Export',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif



                                {{-- Status update --}}
                                @if(in_array($module.'.status_update',(array) $permissions))
                                @if($key = array_search($module.'.status_update', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox" style="margin-top: 15px">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Location Update',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- Assing --}}
                                @if(in_array($module.'.assign_delivery',(array) $permissions))
                                @if($key = array_search($module.'.assign_delivery', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Assign Delivery',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif



                                {{-- Revert --}}
                                @if(in_array($module.'.revert_assignment',(array) $permissions))
                                @if($key = array_search($module.'.revert_assignment', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox" style="margin-top: 15px">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Revert Assignment',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- Accept Revert Request --}}
                                @if(in_array($module.'.accept_restock',(array) $permissions))
                                @if($key = array_search($module.'.accept_restock', $permissions))
                                <div class="col-md-4 custom-control custom-checkbox" style="margin-top: 15px">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Accept Undelivery re-stock',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- App Delivery--}}
                                @if(in_array($module.'.app_delivery',(array) $permissions))
                                @if($key = array_search($module.'.app_delivery', $permissions))
                                <div class="col-md-3 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'App Delivery',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif

                                {{-- App Collection--}}
                                @if(in_array($module.'.app_collection',(array) $permissions))
                                @if($key = array_search($module.'.app_collection', $permissions))
                                <div class="col-md-3 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'App Collection',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif

                                {{-- pending_verification new added --}}
                                @if(in_array($module.'.pending_verification',(array) $permissions))
                                @if($key = array_search($module.'.pending_verification', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox" style="margin-top: 15px">
                                    {{Form::checkbox('permissions[]',$key, false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Pending Verfication',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif

                                {{-- show_verification new added --}}
                                @if(in_array($module.'.show_verification',(array) $permissions))
                                @if($key = array_search($module.'.show_verification', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox" style="margin-top: 15px">
                                    {{Form::checkbox('permissions[]',$key, false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Show Verfication',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- show_verification new added --}}
                                @if(in_array($module.'.approve_photo',(array) $permissions))
                                @if($key = array_search($module.'.approve_photo', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox" style="margin-top: 15px">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Approve Photo',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- show_verification new added --}}
                                @if(in_array($module.'.approve_document',(array) $permissions))
                                @if($key = array_search($module.'.approve_document', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox" style="margin-top: 15px">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Approve Documents',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- show_verification new added --}}
                                @if(in_array($module.'.in',(array) $permissions))
                                @if($key = array_search($module.'.in', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'In Item',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- show_verification new added --}}
                                @if(in_array($module.'.out',(array) $permissions))
                                @if($key = array_search($module.'.out', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Out Item',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- show_verification new added --}}
                                @if(in_array($module.'.status',(array) $permissions))
                                @if($key = array_search($module.'.status', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Status Item',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- show_verification new added --}}
                                @if(in_array($module.'.current_stock',(array) $permissions))
                                @if($key = array_search($module.'.current_stock', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Current Stock',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- show_verification new added --}}
                                @if(in_array($module.'.scan_to_ready',(array) $permissions))
                                @if($key = array_search($module.'.scan_to_ready', $permissions))
                                <div class="col-md-2 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key,false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Scan to Ready',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif

                                {{-- show_verification new added --}}
                                @if(in_array($module.'.ready_for_delivery_index',(array) $permissions))
                                @if($key = array_search($module.'.ready_for_delivery_index', $permissions))
                                <div class="col-md-4 custom-control custom-checkbox">
                                    {{Form::checkbox('permissions[]',$key, false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Ready for Delivery Index',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif

                                {{-- show_verification new added --}}
                                @if(in_array($module.'.restock_request_list',(array) $permissions))
                                @if($key = array_search($module.'.restock_request_list', $permissions))
                                <div class="col-md-4 custom-control custom-checkbox" style="margin-top: 15px">
                                    {{Form::checkbox('permissions[]',$key, false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Restock Request List',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif


                                {{-- show_verification new added --}}
                                @if(in_array($module.'.restock_approval',(array) $permissions))
                                @if($key = array_search($module.'.restock_approval', $permissions))
                                <div class="col-md-4 custom-control custom-checkbox" style="margin-top: 15px">
                                    {{Form::checkbox('permissions[]',$key, false, ['class'=>'custom-control-input','id' =>'permission'.$key])}}
                                    {{Form::label('permission'.$key,'Restock Request Approval',['class'=>'custom-control-label'])}}<br>
                                </div>
                                @endif
                                @endif



                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
    <div class="col-md-12">
        @error('permissions')
        <span class="invalid-name" role="alert">
            <strong class="text-danger">{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-12 text-right">

        {{Form::submit('Update',array('class'=>'btn btn-primary'))}}
    </div>
</div>

<div class="card-footer d-flex justify-content-end py-6 px-9">
    <button type="reset"
        class="btn btn-white btn-active-light-primary me-2">{{ __('Discard') }}</button>

    <button type="submit" name="save_and_add" value="1" class="btn btn-primary me-2"
        id="kt_account_profile_details_submit">
        @include('partials.general._button-indicator', [
            'label' => __( ((isset($permission)) ? 'Update' : 'Save') . ' & Create'),
        ])
    </button>

    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
        @include('partials.general._button-indicator', [
            'label' => __( ((isset($permission)) ? 'Update' : 'Save').''),
        ])
    </button>
</div>
