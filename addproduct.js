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
        var price = $('#price').val();
        var size = $('#size').val();
        var weight = $('#weight').val();
        var height = $('#height').val();
        var witdh = $('#witdh').val();
        var length = $('#length').val();
        var typeSelectedValue = $('#productType :selected').val();
        if(isNaN(parseFloat(price))) {
            alert('Please, provide the data of indicated type');
            return false;
        } else {
            $('#product_form').attr('action', 'processInsertProduct.php');
        }
        if(typeSelectedValue == 'DVD' && isNaN(parseFloat(size))) {
            alert('Please, provide the data of indicated type');
            return false;
        } else {
            $('#product_form').attr('action', 'processInsertProduct.php');
        }
        if(typeSelectedValue == 'Book' && isNaN(parseFloat(weight))) {
            alert('Please, provide the data of indicated type');
            return false;
        } else {
            $('#product_form').attr('action', 'processInsertProduct.php');
        }
        if(typeSelectedValue == 'Furniture' && (isNaN(parseFloat(height)) || isNaN(parseFloat(witdh)) || isNaN(parseFloat(length))) ) {
            alert('Please, provide the data of indicated type');
            return false;
        } else {
            $('#product_form').attr('action', 'processInsertProduct.php');
        }
    });
});