function removeUserType(id){
    $('#modalRemoveType').modal()
    $("#btnRemoveUserType").click(function(){
        $.ajax({
            type: 'POST',
            url: '/tipo_usuario/eliminar/',
            data:{
                id: id,
                _token: $('input[name=_token]').val(), 
            }
        })
    })
}