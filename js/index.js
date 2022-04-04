/// <reference path="../typings/index.d.ts" />
//method="post" action="../function/add_product.php"
var data=[];
function change(x) {
    if (x == '1') {
        $('.DVD-disc').removeClass("visually-hidden");
        $('.Book').addClass("visually-hidden");
        $('.Furniture').addClass("visually-hidden");
        $('#Weight').removeAttr("required");
        $('#Size').setAttribute("required");
        $('#Height').removeAttr("required");
        $('#Width').removeAttr("required");
        $('#Length').removeAttr("required");
    }
    else if (x == '2') {
        $('.Book').removeClass("visually-hidden");
        $('.DVD-disc').addClass("visually-hidden");
        $('.Furniture').addClass("visually-hidden");
        $('#Size').removeAttr("required");
        $('#Weight').setAttribute("required");
        $('#Height').removeAttr("required");
        $('#Width').removeAttr("required");
        $('#Length').removeAttr("required");
    }
    else if (x == '3') {
        $('.Furniture').removeClass("visually-hidden");
        $('.Book').addClass("visually-hidden");
        $('.DVD-disc').addClass("visually-hidden");
        $('#Size').removeAttr("required");
        $('#Weight').removeAttr("required");
        $('#Height').setAttribute("required");
        $('#Width').setAttribute("required");
        $('#Length').setAttribute("required");
    }

}
