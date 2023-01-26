$(function () {
    let fx = {
        "initmodal": function () {
            if ($(".modal-window").length == 0) {
                $("<div>").attr("id", "overlate").appendTo("body");
                return $("<div>").addClass("modal-window").appendTo("body");
            } else {
                return $(".modal-window");
            }
        }
    };

    $(".model").click(function () {
        let id = $(this).attr("data-id");
        let modal = fx.initmodal();
        $("<a>").attr("href", "#").addClass("model-close").html("&times;").click(function () {
            modal.remove();
            $("#overlate").remove();
        }).appendTo(modal);
        $.ajax({
            type: "post",
            url: "/ajax",
            data: "id=" + id,
            success: function (data) {
                modal.append(data);
            }
        })
    });
});
