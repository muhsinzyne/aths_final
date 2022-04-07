const clickInjector = $(".clicktoinject");

class PushNotificationCreate {

    static init() {

        clickInjector.on('click', function(e) {
            e.preventDefault();
            var injector = $(this).attr('data-id');
            var code = $(this).attr('data-value');
            insertAtCaret(injector, code);
        });


    }
}


KTUtil.onDOMContentLoaded(function() {
    PushNotificationCreate.init();
});