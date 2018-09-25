function removeLine(id){
    $('#modalRemoveLine').modal()
    $("#btnRemoveLine").click(function(){
        $.ajax({
            type: 'DELETE',
            url: '/lineas/'+id+'/eliminar',
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