function showNotifation(title, msg) {
    var Stacks = {
        stack_top_right: {
            "dir1": "down",
            "dir2": "left",
            "push": "top",
            "spacing1": 10,
            "spacing2": 10
        },
    }
    // var noteStyle = $(this).data('note-style');
    var noteStyle = "danger";
    var noteShadow = true;
    // Create new Notification
    new PNotify({
        title: title,
        text: msg,
        shadow: noteShadow,
        opacity: '1',
        type: noteStyle,
        width: '400px',
        delay: 1400,
        
    });
}