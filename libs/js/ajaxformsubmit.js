$('#form_user').submit(function(e){
    e.preventDefault();
    
    var me = $(this);
    
    $.ajax({
        url: me.attr('action'),
        type: 'post',
        data: me.serialize(),
        datatype: 'json',
        success: function(response){
            var response = JSON.parse(response);
            if(response.ok == true){
                $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Warning!</strong> ' + response.messages +'</div>');
                me[0].reset();
                $('.text-danger').remove();
                $('.form-group').removeClass('has-error').removeClass('has-success');
                //alert(response.messages);
            }else{
                $.each(response.messages, function(key, value){
                    var element = $('#' + key);
                    element.closest('div.form-group')
                            .removeClass('has-error')
                            .addClass(value.length > 0 ? 'has-error' : 'has-success')
                            .find('.text-danger').remove();
                    element.after(value);
                });
            }
        }
    });
});