jQuery(document).ready(function ($) {
    let posts_per_page = 1;
    let pageNumber = 1;


    function load_posts() {
        pageNumber++;
        let str = '&pageNumber=' + pageNumber + '&posts_per_page=' + posts_per_page + '&action=load_more';
        jQuery.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts.url,
            data: str,
            success: function (data) {
                var $data = $(data);
                if ($data.length) {
                    $("#ajax-posts").append($data);
                } else {
                    $("#more_posts").attr("disabled", true);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }

        });
        return false;
    }

    $("#more_posts").on("click", function () {
        load_posts();
        $(this).insertAfter('#ajax-posts');
    });
});