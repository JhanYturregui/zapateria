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

        case 'brand':
            $('#menuBrands').css('display', 'inline')
            $('#showBrands').css('display', 'none')
            $('#hideBrands').css('display', 'inline')
            $('#tabBrands').removeClass('tabs')
            $('#tabBrands').addClass('tab-active')
            break

        case 'model':
            $('#menuModels').css('display', 'inline')
            $('#showModels').css('display', 'none')
            $('#hideModels').css('display', 'inline')
            $('#tabModels').removeClass('tabs')
            $('#tabModels').addClass('tab-active')
            break    

        case 'color':
            $('#menuColors').css('display', 'inline')
            $('#showColors').css('display', 'none')
            $('#hideColors').css('display', 'inline')
            $('#tabColors').removeClass('tabs')
            $('#tabColors').addClass('tab-active')
            break

        case 'line':
            $('#menuLines').css('display', 'inline')
            $('#showLines').css('display', 'none')
            $('#hideLines').css('display', 'inline')
            $('#tabLines').removeClass('tabs')
            $('#tabLines').addClass('tab-active')
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

        case 'indexBrand':
            $('#indexBrand').removeClass('options')
            $('#indexBrand').addClass('opt-active')
            break

        case 'createBrand':
            $('#createBrand').removeClass('options')
            $('#createBrand').addClass('opt-active')
            break

        case 'indexModel':
            $('#indexModel').removeClass('options')
            $('#indexModel').addClass('opt-active')
            break

        case 'createModel':
            $('#createModel').removeClass('options')
            $('#createModel').addClass('opt-active')
            break

        case 'indexColor':
            $('#indexColor').removeClass('options')
            $('#indexColor').addClass('opt-active')
            break

        case 'createColor':
            $('#createColor').removeClass('options')
            $('#createColor').addClass('opt-active')
            break

        case 'indexLine':
            $('#indexLine').removeClass('options')
            $('#indexLine').addClass('opt-active')
            break

        case 'createLine':
            $('#createLine').removeClass('options')
            $('#createLine').addClass('opt-active')
            break    

        default:
            break
    }

}