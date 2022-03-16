const modal = $('#kt_modal_update_details');
const closeIcon = $(".modal-close");
const editForm = $("#kt_modal_update_user_form");
const editSubmit = $("#edit-submit");


const selectAll = $("#kt_roles_select_all");
const allCheckbox = $(":checkbox");

class UserUpdateDetails {

    static init() {

        selectAll.on('change', function() {
            var isChecked = $(this).is(":checked");
            if (isChecked) {
                $('input:checkbox').each(function() {
                    $(this).prop('checked', true);
                });
            } else {
                $('input:checkbox').each(function() {
                    $(this).prop('checked', false);
                });
            }

        });
    }
}


KTUtil.onDOMContentLoaded(function() {
    UserUpdateDetails.init();
});