function removeSize(id){
    $('#modalRemoveSize').modal()
    $("#btnRemoveSize").click(function(){
        $.ajax({
            type: 'POST',
            url: '/roles/eliminar/',
            data:{
                id: id,
                _token: $('input[name=_token]').val(), 
            }
        })
    })
}