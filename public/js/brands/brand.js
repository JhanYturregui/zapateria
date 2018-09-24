function removeBrand(id){
    $('#modalRemoveBrand').modal()
    $("#btnRemoveBrand").click(function(){
        $.ajax({
            type: 'POST',
            url: '/marcas/eliminar/',
            data:{
                id: id,
                _token: $('input[name=_token]').val(), 
            }
        })
    })
}