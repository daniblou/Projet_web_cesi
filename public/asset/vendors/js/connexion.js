$('#formLogin').submit(function(e){
   /*e.preventDefault();*/
   var login = $.trim($("#login").val());    
   var password =$.trim($("#password").val());    
    
   if(login.length == "" || password == ""){
      Swal.fire({
          type:'warning',
          title:'Identifiant ou mot de passe incorrect',
      });
      return false; 
    }
    /*else{
        $.ajax({
           url:"bd/login.php",
           type:"POST",
           datatype: "json",
           data: {login:login, password:password}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                       title:'Identifiant ou mot de passe incorrect',
                   });
               }else{
                   Swal.fire({
                       type:'success',
                       title:'Connexion réussie',
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingresar'
                   }).then((result) => {
                       if(result.value){
                           //window.location.href = "vistas/pag_inicio.php";
                           window.location.href = "dashboard/index.php";
                       }
                   })
                   
               }
           }    
        });
    } */    
});
