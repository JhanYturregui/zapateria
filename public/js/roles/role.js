function removeRole(id){
    $('#modalRemoveRole').modal()
    $("#btnRemoveRole").click(function(){
        $.ajax({
            type: 'POST',
            url: '/roles/eliminar/',
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