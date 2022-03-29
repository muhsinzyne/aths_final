function pageActionPusher() {
    var target = $('.actionBlock');
    var destination = $('#actionBlock');
    try {
        if (target.html() != null) {
            console.log(target.html());
            destination.html(target.html());
            target.html('');
        }
    } catch (e) {
        console.log("action block not avilable in this page");
    }

}
pageActionPusher();