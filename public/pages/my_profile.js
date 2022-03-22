const modal = $('#kt_modal_update_details');
const closeIcon = $(".modal-close");
const editForm = $("#kt_modal_update_user_form");
const editSubmit = $("#edit-submit");
const discard = $("#discard-button");

class UserUpdateDetails {

    static init() {



        editForm.on('submit', function(e) {
            e.preventDefault();
            var method = editForm.attr('method');
            var url = editForm.attr('action');
            var formData = $(this).serializeArray();
            editSubmit.attr('data-kt-indicator', 'on');
            $.ajax({
                method: method,
                url: url,
                data: formData,
                success: function(data, statusCode, xhr) {
                    if (xhr.status == 200) {
                        editSubmit.attr('data-kt-indicator', 'off');
                        Swal.fire(
                            'Updated',
                            'User details updated successfully',
                            'success'
                        );
                        modal.modal('hide');
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                            footer: data.message
                        });

                    }
                },
                error: function(error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        footer: error
                    });
                }
            });
        });


        closeIcon.on('click', function(e) {
            e.preventDefault();
            var closeModalId = $(this).attr('data-modal-id');
            var closeModal = $("#" + closeModalId);
            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function(result) {
                if (result.value) {
                    closeModal.modal('hide');
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });
    }
}


KTUtil.onDOMContentLoaded(function() {
    UserUpdateDetails.init();
});