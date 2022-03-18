$(function() {
    $('#productType').change(function(){
        $('.divSelected').hide();
        $('#' + $(this).val()).show();
        if($(this).val() == 'DVD'){
            $("#size").prop('required', true)
        } else {
            $("#size").prop('required', false);
        }
        if($(this).val() == 'Book'){
            $("#weight").prop('required', true);
        } else {
            $("#weight").prop('required', false);
        }
        if($(this).val() == 'Furniture'){
            $("#height").prop('required', true);
            $("#witdh").prop('required', true);
            $("#length").prop('required', true);
        } else {
            $("#height").prop('required', false);
            $("#witdh").prop('required', false);
            $("#length").prop('required', false);
        }
    });
});

$(document).ready(function () {
    $("input:visible").each(function () {
        $(this).prop("required", true);
    });
    $("#saveBtn").on("click", function () {
        $('#product_form').find('input').each(function () {
            if ($(this).prop('required') && $("#"+this.id).val()=='') {
                alert('Please, submit required data');
                return false;
            }
        });
    });
});
