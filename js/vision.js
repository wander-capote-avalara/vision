VISION = new Object();

toastr.options = {
    "closeButton" : true,
    "debug" : false,
    "newestOnTop" : false,
    "progressBar" : false,
    "positionClass" : "toast-top-right",
    "preventDuplicates" : false,
    "onclick" : null,
    "showDuration" : "300",
    "hideDuration" : "1000",
    "timeOut" : "5000",
    "extendedTimeOut" : "1000",
    "showEasing" : "swing",
    "hideEasing" : "linear",
    "showMethod" : "fadeIn",
    "hideMethod" : "fadeOut"
}

VISION.ToastrShow = function(msg, type){
    Command: toastr[type](msg, VISION.ToastrType(type));  
}

VISION.ToastrType = function(title){
    switch(title){
        case "error":
        return "Erro!";
        case "warning":
        return "Atenção!";
        default:
        return "Sucesso!";
    }
}

$("#inputTimes").on("change", function(){
    if (this.value == 2)
        $("#parcels").removeAttr("disabled");
    else
        $("#parcels").attr("disabled", "disabled");              

})

$(".clicker").click(function(){
    if ($(this).parent().find(".list").css('display') == 'none' ) 
        $(this).parent().find(".list").show("slow");
    else
       $(this).parent().find(".list").hide("slow"); 

})