function removeColor(id){
    $('#modalRemoveColor').modal()
    $("#btnRemoveColor").click(function(){
        $.ajax({
            type: 'DELETE',
            url: '/colores/'+id+'/eliminar',
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