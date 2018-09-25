function removeSize(id){
    $('#modalRemoveSize').modal()
    $("#btnRemoveSize").click(function(){
        $.ajax({
            type: 'POST',
            url: '/tallas/eliminar/',
            data:{
                id: id,
                _token: $('input[name=_token]').val(), 
            },
            success: function(a){
                location.reload()
            }
        })
    })
}