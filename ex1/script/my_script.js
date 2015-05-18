$(document).ready(function () {

    $.getJSON("fetch.php", function (data) {
        $("article").empty();

        $.each(data.result, function () {

            /*$("article").append("<strong> "+this['title']+"</strong><br><em> "+this['date']+"</em><p>Description: "+this['description']+"</p><p>image: "+this['image']+ "</p><br />"); */
            /*<p>image: "+this['image']+ "</p>* HAS BEEN DELETED FROM THIS COMING LINE */
            $("article").append("<strong> " + this['title'] + "</strong><br><time> " + this['date'] + "</time><p> " + this['description'] +"</p><a href='readmore.php?' id='$id'>read more</a><br />");

        });

    });

});