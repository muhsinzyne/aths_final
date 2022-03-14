const modal = $('#kt_modal_update_details');
const closeIcon = $(".modal-close");
const editForm = $("#kt_modal_update_user_form");
const editSubmit = $("#edit-submit");

class UserUpdateDetails {

    static init() {
        //alert(modal);
        //alert("go mathematics");

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
                success: function(data) {
                    console.log(data);
                    if (data.status == 200) {
                        //toastr.success(data.message);
                        //modal.modal('hide');
                        // setTimeout(function() {
                        //     location.reload();
                        // }, 1000);
                    } else {
                        //toastr.error(data.message);
                    }
                },
                error: function(error) {
                    //toastr.error(data.message);
                    console.log(error);
                }
            });
            alert("ajax compelted");
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
                    closeModal.modal('hide');
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
