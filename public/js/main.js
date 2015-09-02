$(document).ready(function(){

    var lang = $.cookie('lang');
    $('#def_lang').val(lang == undefined ? 'en' : lang);
    $('#def_lang').change(function(){
        $.cookie('lang', $(this).val(), {path: '/'});
        window.location.reload();
    });

    $('input[name="organization_user_identifier"]').blur(function(){
        $('input[name="username"]').val($(this).val() + '_admin');
    });

    $('.checkAll').click(function(event) {  //on click
        if(this.checked) { // check select status
            $('.field1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"
            });
        }else{
            $('.field1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"
            });
        }
    });

});