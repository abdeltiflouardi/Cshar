$(document).ready(function(){
    var login=$('#login');
    var password=$('#password');
    var email=$('#email');
    login.blur(validateLogin);
    function validateLogin(){
        if(login.val().length<5){
            alert('au moin 5 caractére');
        }


    }

});