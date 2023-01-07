
$(document).ready(function () {
    let commentsCount = 2;
    $("#comments").load("load-comments.php", {
        commentsNewCount: commentsCount
    });
    $("#btn").click(function () {
        commentsCount += 2;
        $("#comments").load("load-comments.php", {
            commentsNewCount: commentsCount
        });
    });
});

