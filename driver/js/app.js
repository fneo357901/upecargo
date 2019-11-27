var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider,$locationProvider) {
$routeProvider
.when("/driver", {
templateUrl : "driver/iniciar-sesion.html"
})
.otherwise({
redirectTo: "/driver"
});
$locationProvider.html5Mode(true);
});

$(document).ready(function() {
  $.ajaxSetup({ cache: false });
});


$.ajax({
    type: "GET",
    url: "/backend/session_conductor_start.php",
    data: { 
    command: 'verify',
    _: new Date().getTime(),
    }, 
   cache: false,
    
    success: function(sucessed){
            if(sucessed !== "error") {
            var obj = JSON.parse(sucessed);
            window.location.href = "/driver/dashboard/";
        }
    }
});

function start_session(){
    var login = new Array();
    login["username"] = $('#username').val();
    login["password"] = $('#password').val();
    $.ajax({
        type: "POST",
        url: "/backend/login_conductor.php",
        data: { 
        username: login.username.valueOf(),
        password: login.password.valueOf(),
        }, 
        cache: false,
    
        success: function(sucessed){
            if(sucessed == "success") {
    
                $.ajax({
                    type: "GET",
                    url: "/backend/session_conductor_start.php",
                    data: { 
                    command: 'start_session',
                    username: login.username.valueOf(),
                    }, 
                    cache: false,
                
                    success: function(sucessed){
                        if(sucessed !== "error") {
                        window.location.href = "/driver/dashboard/";
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