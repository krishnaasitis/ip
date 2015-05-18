$("#sub").click(function () {

    $.post($("#myForm").attr("action"), $("#myForm :input").serializeArray(), function (news) {
        $("#result").html(news);
    });
});

$("myForm").submit(function () {
    return false;
});