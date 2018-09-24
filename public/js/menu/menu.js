// Dropdown lateral menu
var showUsers = $('#showUsers')
var showRoles = $('#showRoles')
var showProviders = $('#showProviders')
var showUserTypes = $('#showUserTypes')
var showPeople = $('#showPeople')

var hideUsers = $('#hideUsers')
var hideRoles = $('#hideRoles')
var hideProviders = $('#hideProviders')
var hideUserTypes = $('#hideUserTypes')
var hidePeople = $('#hidePeople')

var menuUsers = $('#menuUsers')
var menuRoles = $('#menuRoles')
var menuProviders = $('#menuProviders')
var menuUserTypes = $('#menuUserTypes')
var menuPeople = $('#menuPeople')

showUsers.click(function(){
    menuUsers.css('display', 'inline')
    //menuRoles.css('display', 'none')
    //menuProviders.css('display', 'none')
    showUsers.css('display', 'none')
    hideUsers.css('display', 'inline')
})
hideUsers.click(function(){
    menuUsers.css('display', 'none')
    showUsers.css('display', 'inline')
    hideUsers.css('display', 'none')
})

showRoles.click(function(){
    //menuUsers.css('display', 'none')
    menuRoles.css('display', 'inline')
    //menuProviders.css('display', 'none')
    showRoles.css('display', 'none')
    hideRoles.css('display', 'inline')
})
hideRoles.click(function(){
    menuRoles.css('display', 'none')
    showRoles.css('display', 'inline')
    hideRoles.css('display', 'none')
})

showUserTypes.click(function(){
    //menuUsers.css('display', 'none')
    menuUserTypes.css('display', 'inline')
    //menuProviders.css('display', 'none')
    showUserTypes.css('display', 'none')
    hideUserTypes.css('display', 'inline')
})
hideUserTypes.click(function(){
    menuUserTypes.css('display', 'none')
    showUserTypes.css('display', 'inline')
    hideUserTypes.css('display', 'none')
})

showProviders.click(function(){
    //menuUsers.css('display', 'none')
    //menuRoles.css('display', 'none')
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
    //menuRoles.css('display', 'none')
    //menuProviders.css('display', 'none')
    showPeople.css('display', 'none')
    hidePeople.css('display', 'inline')
})
hidePeople.click(function(){
    menuPeople.css('display', 'none')
    showPeople.css('display', 'inline')
    hidePeople.css('display', 'none')
})