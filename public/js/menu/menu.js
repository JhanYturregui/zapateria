// Dropdown lateral menu
var showUsers = $('#showUsers')
var showRoles = $('#showRoles')
var showProviders = $('#showProviders')
var showUserTypes = $('#showUserTypes')
var showPeople = $('#showPeople')
var showSizes = $('#showSizes')
var showBrands = $('#showBrands')

var hideUsers = $('#hideUsers')
var hideRoles = $('#hideRoles')
var hideProviders = $('#hideProviders')
var hideUserTypes = $('#hideUserTypes')
var hidePeople = $('#hidePeople')
var hideSizes = $('#hideSizes')
var hideBrands = $('#hideBrands')

var menuUsers = $('#menuUsers')
var menuRoles = $('#menuRoles')
var menuProviders = $('#menuProviders')
var menuUserTypes = $('#menuUserTypes')
var menuPeople = $('#menuPeople')
var menuSizes = $('#menuSizes')
var menuBrands = $('#menuBrands')

showUsers.click(function(){
    menuUsers.css('display', 'inline')
    showUsers.css('display', 'none')
    hideUsers.css('display', 'inline')
})
hideUsers.click(function(){
    menuUsers.css('display', 'none')
    showUsers.css('display', 'inline')
    hideUsers.css('display', 'none')
})

showRoles.click(function(){
    menuRoles.css('display', 'inline')
    showRoles.css('display', 'none')
    hideRoles.css('display', 'inline')
})
hideRoles.click(function(){
    menuRoles.css('display', 'none')
    showRoles.css('display', 'inline')
    hideRoles.css('display', 'none')
})

showUserTypes.click(function(){
    menuUserTypes.css('display', 'inline')
    showUserTypes.css('display', 'none')
    hideUserTypes.css('display', 'inline')
})
hideUserTypes.click(function(){
    menuUserTypes.css('display', 'none')
    showUserTypes.css('display', 'inline')
    hideUserTypes.css('display', 'none')
})

showProviders.click(function(){
    menuProviders.css('display', 'inline')
    showProviders.css('display', 'none')
    hideProviders.css('display', 'inline')
})
hideProviders.click(function(){
    menuProviders.css('display', 'none')
    showProviders.css('display', 'inline')
    hideProviders.css('display', 'none')
})

showPeople.click(function(){
    menuPeople.css('display', 'inline')
    showPeople.css('display', 'none')
    hidePeople.css('display', 'inline')
})
hidePeople.click(function(){
    menuPeople.css('display', 'none')
    showPeople.css('display', 'inline')
    hidePeople.css('display', 'none')
})

showSizes.click(function(){
    menuSizes.css('display', 'inline')
    showSizes.css('display', 'none')
    hideSizes.css('display', 'inline')
})
hideSizes.click(function(){
    menuSizes.css('display', 'none')
    showSizes.css('display', 'inline')
    hideSizes.css('display', 'none')
})

showBrands.click(function(){
    menuBrands.css('display', 'inline')
    showBrands.css('display', 'none')
    hideBrands.css('display', 'inline')
})
hideBrands.click(function(){
    menuBrands.css('display', 'none')
    showBrands.css('display', 'inline')
    hideBrands.css('display', 'none')
})