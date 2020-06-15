$(document).ready(function(){
   $('#valider').click(function(){

    const nom = $('#nom').val();
    const prenom = $('#prenom').val();
    const login = $('#login').val();
    const password = $('#password').val();
    const cpassword = $('#cpassword').val();
   // const photo = $('#photo').val();
    
    if (nom=="" || prenom=="" || login=="" || password==""|| cpassword=="" || photo=="") {
        alert('tous les champs sont obligatoires');
        return false;
        
    }
    if(password!=cpassword){
        alert('mot de passe non identique');
    }
        $.ajax({
            type: "POST",
            url: "../data/saveAdmin.php",
            data:{nom:nom,prenom:prenom,login:login,password:password,photo:photo},
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                alert('enregistrement admin effectué')
               if(data){
                   $('#table').load('pages/liste-joueur.php'); 
               }else{
                   alert('echec')
               }
            }
        });

    })
})
    var loadFile = function(event) {
        var avatar = document.getElementById('avatar');
        avatar.src = URL.createObjectURL(event.target.files[0]);
        avatar.onload = function() {
          URL.revokeObjectURL(avatar.src) 
        }
    };