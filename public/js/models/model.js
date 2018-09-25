function removeModel(id){
    $('#modalRemoveModel').modal()
    $("#btnRemoveModel").click(function(){
        $.ajax({
            type: 'DELETE',
            url: '/modelos/'+id+'/eliminar',
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