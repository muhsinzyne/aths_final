
@if (in_array($module . $actionKey, (array) $permissions))
@if ($key = array_search($module . $actionKey, $permissions))
    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
        <input class="form-check-input" type="checkbox" value="{{$key}}" name="permissions[]" id="permissions{{$key}}"   {{in_array($key, $cPermissionIds) ? 'checked': ''}}/>
        <span class="form-check-label{{$key}}"> &nbsp; {{__($actionName)}} </span>
    </label>
@endif
@endif
