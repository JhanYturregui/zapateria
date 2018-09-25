function removeBrand(id){
    $('#modalRemoveBrand').modal()
    $("#btnRemoveBrand").click(function(){
        $.ajax({
            type: 'DELETE',
            url: '/marcas/'+id+'/eliminar',
            data:{
                id: id,
                _token: $('input[name=_token]').val(), 
            },
            success: function(a){
                location.reload('')
            }
        })
    })
}