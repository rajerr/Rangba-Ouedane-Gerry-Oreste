$('#submit').click(function(e){
    //e.preventDefault()
    let login = $('#login').val();
    let password = $('#password').val();
    if(login == '' || password ==''){
        return false;
    }
    $.ajax({
            type: "POST",
            url: "data/getUserConnexion.php",
            data: {'login':login,'password':password},
            success: function (data) {
                
                if (data=="echec") {
                    alert("Votre login ou mot de passe est incorrect !");
                }
                if (data=="admin"){
                    document.location.replace('pages/admin.php');
                }
                if (data=="joueur"){
                    document.location.replace('pages/jeux.php');
                }
            }
        });
})