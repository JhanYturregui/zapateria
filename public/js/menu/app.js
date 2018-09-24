window.onload = function(){
    // Data current user
    var docNumber = $('#txtDoc').val()
    $.ajax({
        type: 'GET',
        url: '/personas/'+docNumber+'/ver',
        data:{
            _token: $('input[name=_token]').val(), 
        },
        dataType: 'json',
        success: function(a){
            var name = a.name
            var lastname = a.lastname

            var aux = name.split("")
            var clName = aux[0]
            var aux2 = lastname.split("")
            var clLastname = aux2[0]

            var x = name.split(" ")
            var firstName = x[0];
            var y = lastname.split(" ")
            var firstLastname = y[0]

            var aux3 = clName+""+clLastname
            var textMessage = "Hola "+firstName+" "+firstLastname+"!"
            
            $('#capitalLetter').text(aux3)
            $('#txtMessageName').text(textMessage)
            
        }
    })

    var currentTab = $('#currentTab').val()
    var optionTab = $('#optionTab').val()

    $('i').css('padding-right', '10px')

    switch (currentTab) {
        case 'person':
            $('#menuPeople').css('display', 'inline')
            $('#showPeople').css('display', 'none')
            $('#hidePeople').css('display', 'inline')
            $('#tabPeople').removeClass('tabs')
            $('#tabPeople').addClass('tab-active')
            break

        case 'user':
            $('#menuUsers').css('display', 'inline')
            $('#showUsers').css('display', 'none')
            $('#hideUsers').css('display', 'inline')
            $('#tabUsers').removeClass('tabs')
            $('#tabUsers').addClass('tab-active')
            break    

        case 'role':
            $('#menuRoles').css('display', 'inline')
            $('#showRoles').css('display', 'none')
            $('#hideRoles').css('display', 'inline')
            $('#tabRoles').removeClass('tabs')
            $('#tabRoles').addClass('tab-active')
            break    

        case 'userType':
            $('#menuUserTypes').css('display', 'inline')
            $('#showUserTypes').css('display', 'none')
            $('#hideUserTypes').css('display', 'inline')
            $('#tabUserTypes').removeClass('tabs')
            $('#tabUserTypes').addClass('tab-active')
            break    

        case 'size':
            $('#menuSizes').css('display', 'inline')
            $('#showSizes').css('display', 'none')
            $('#hideSizes').css('display', 'inline')
            $('#tabUserSizes').removeClass('tabs')
            $('#tabUserSizes').addClass('tab-active')
            break    
    
        default:
            break
    }

    switch (optionTab) {
        case 'indexPerson':
            $('#indexPerson').removeClass('options')
            $('#indexPerson').addClass('opt-active')
            break

        case 'createPerson':
            $('#createPerson').removeClass('options')
            $('#createPerson').addClass('opt-active')
            break

        case 'indexUser':
            $('#indexUser').removeClass('options')
            $('#indexUser').addClass('opt-active')
            break

        case 'createUser':
            $('#createUser').removeClass('options')
            $('#createUser').addClass('opt-active')
            break    

        case 'indexRole':
            $('#indexRole').removeClass('options')
            $('#indexRole').addClass('opt-active')
            break

        case 'createRole':
            $('#createRole').removeClass('options')
            $('#createRole').addClass('opt-active')
            break    

        case 'indexUserType':
            $('#indexUserType').removeClass('options')
            $('#indexUserType').addClass('opt-active')
            break

        case 'createUserType':
            $('#createUserType').removeClass('options')
            $('#createUserType').addClass('opt-active')
            break

        case 'indexSize':
            $('#indexSize').removeClass('options')
            $('#indexSize').addClass('opt-active')
            break

        case 'createSize':
            $('#createSize').removeClass('options')
            $('#createSize').addClass('opt-active')
            break    

        default:
            break
    }

    /*if(tabPerson == "person"){
        $('#menuPeople').css('display', 'inline')
        $('#showPeople').css('display', 'none')
        $('#hidePeople').css('display', 'inline')
        $('#tabPeople').removeClass('tabs')
        $('#tabPeople').addClass('tab-active')
    }

    if(optionPerson == "index"){
        $('#indexPerson').removeClass('options')
        $('#indexPerson').addClass('opt-active')
    }*/

}