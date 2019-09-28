var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider,$locationProvider) {
$routeProvider
.when("/", {
templateUrl : "main.html"
})
.when("/login", {
templateUrl : "iniciar-sesion.html"
})
.when("/register", {
templateUrl : "registro.html"
})
.when("/recover", {
templateUrl : "recover.html"
})
.when("/select_type", {
templateUrl : "select_type.html"
})
.when("/carrier", {
templateUrl : "carrier.html"
})
.when("/carrier/phone", {
templateUrl : "carrier_phone.html"
})
.when("/carrier/register", {
templateUrl : "carrier_thanks.html"
})
.when("/carrier/verify/email", {
templateUrl : "carrier_verify_email.html"
})
.when("/carrier/register/complete", {
templateUrl : "carrier_finish_step.html"
})
.when("/shipper", {
templateUrl : "shipper.html"
})
.when("/shipper/company", {
templateUrl : "shipper_company.html"
})
.when("/shipper/register", {
templateUrl : "shipper_thanks.html"
})
.otherwise({
redirectTo: "/"
});
$locationProvider.html5Mode(true);
});

$(document).ready(function() {
  $.ajaxSetup({ cache: false });
});


$.ajax({
    type: "GET",
    url: "/backend/session_start.php",
    data: { 
    command: 'verify',
    _: new Date().getTime(),
    }, 
    cache: false,
    
    success: function(sucessed){
            if(sucessed !== "error") {
            var obj = JSON.parse(sucessed);
            window.location.href = "/dashboard/?t="+obj.tipo;
        }
    }
});



var cliente = new Array();

function record_data(){
cliente["firstname"] = $('#firstname').val();
cliente["lastname"] = $('#lastname').val();
cliente["email"] = $('#email').val();
cliente["password"] = $('#password').val();
}

function carrier_record_phone(){
cliente["phone"] = $('#carrier_phone').val();
}

function shipper_record_phone(){
cliente["phone"] = $('#shipper_phone').val();
}

function shipper_record_company(){
cliente["company"] = $('#shipper_company').val();
}

function nuevo_shipper(){
$.ajax({
    type: "POST",
    url: "/backend/registro_usuario.php",
    data: { 
    firstname: cliente.firstname.valueOf(),
    lastname: cliente.lastname.valueOf(),
    password: cliente.password.valueOf(),
    email: cliente.email.valueOf(),
    phone: cliente.phone.valueOf(),
    type: cliente.type.valueOf(),
    company: cliente.company.valueOf(),
    }, 
    cache: false,

    success: function(sucessed){
        if(sucessed == "success") {
            alert("A sido registrado satisfactoriamente");
            setTimeout(() => {
                window.location.href = "/login";
            }, 7000);
        }f
        if(sucessed == "error") {
            alert("Ocurrio un error durante su registro, vuelva a intentarlo.");
        }
    }
});  
}

function nuevo_carrier(){
$.ajax({
    type: "POST",
    url: "/backend/registro_usuario.php",
    data: { 
    firstname: cliente.firstname.valueOf(),
    lastname: cliente.lastname.valueOf(),
    password: cliente.password.valueOf(),
    email: cliente.email.valueOf(),
    phone: cliente.phone.valueOf(),
    type: cliente.type.valueOf(),
    subtype: cliente.subtype.valueOf(),
    }, 
    cache: false,

    success: function(sucessed){
        if(sucessed == "success") {
            alert("A sido registrado satisfactoriamente");
            setTimeout(() => {
                window.location.href = "/login";
            }, 7000);
        }
        if(sucessed == "error") {
            alert("Ocurrio un error durante su registro, vuelva a intentarlo.");
        }    
    }
});  
}

function recover_password(){
var recover = new Array();
recover["email"] = $('#recoverpassword').val();
$.ajax({
    type: "POST",
    url: "/backend/reestablecer.php",
    data: { 
    username: recover.email.valueOf(),
    }, 
    cache: false,

    success: function(sucessed){
        if(sucessed == "success") {
            alert("Se le a enviado un correo electronico con las instrucciones para reestablecer su contraseña.");
            window.location.href = "/login";
        }
        if(sucessed == "error") {
            alert("Disculpe no se encuentra su correo electronico entre nuestra lista de usuarios.");
        }    }
});  
}

function start_session(){
var login = new Array();
login["username"] = $('#username').val();
login["password"] = $('#password').val();
$.ajax({
    type: "POST",
    url: "/backend/login.php",
    data: { 
    username: login.username.valueOf(),
    password: login.password.valueOf(),
    }, 
    cache: false,

    success: function(sucessed){
        if(sucessed == "success") {

            $.ajax({
                type: "GET",
                url: "/backend/session_start.php",
                data: { 
                command: 'start_session',
                username: login.username.valueOf(),
                }, 
                cache: false,
            
                success: function(sucessed){
                    if(sucessed !== "error") {
                    window.location.href = "/dashboard/?t="+sucessed;
                }
                if(sucessed == "error") {
                    alert("No se puede iniciar sesion, vuelva a intentarlo.");
                }
                }
            }); 
    }
    if(sucessed == "error_password") {
        alert("Su usuario o contraseña es incorrecto.");
    }
    }
});  
}


function type_step(variable) {
    if(variable=='shipper') {
    cliente["type"] = 'shipper';
    }
    if(variable=='carrier') {
    cliente["type"] = 'carrier';
    }
}

function sub_type_step(variable) {
if(variable=='propietario') {
    cliente["subtype"] = 'owner';
    }
    if(variable=='conductor') {
    cliente["subtype"] = 'driver';
    }
    if(variable=='empresa') {
    cliente["subtype"] = 'company';
    }
}