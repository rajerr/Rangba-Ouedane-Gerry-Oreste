
function fileContentLoader(target, fileName, data){
    target.load(`./${fileName}`,data,function(response, status,detail){        
         if(status === 'error'){
            $("#table").html(`<p class="text-center alert alert-danger col mt-5">Le contenu demandé est introuvable!</p>`);
        }
    });
}
//Events

$(document).ready(function(){
    const formAdmin =$('#formAdmin');
    const formJoueur =$('#formJoueur');
    const table =$('#table');
    const formQuestion =$('#formQuestion');
    const listeQuestion=$('#listeQuestion');
    const topJoueur=$('#topJoueur');
    
    fileContentLoader(formAdmin,'creation.php',true);
    fileContentLoader(formJoueur,'inscription.php',true);
    fileContentLoader(table,'liste_joueur.php', false);
    fileContentLoader(listeQuestion,'liste_questions.php',false );
    fileContentLoader(formQuestion,'questions.php',true);
    fileContentLoader(topJoueur,'top_joueur.php',false);

})

//Link
$('.dropdown-item').click(function(e){
    const formQuestion =$('#formQuestion');
    const listeQuestion =$('#listeQuestion');
    const formAdmin =$('#formAdmin');
    const table =$('#table');

    if(e.target.id === 'users'){
        fileContentLoader(formAdmin,'creation.php',true);
        fileContentLoader(table,'liste_joueur.php', false);
    }else if(e.target.id === 'question'){
        fileContentLoader(listeQuestion,'liste_questions.php',false);
        fileContentLoader(formQuestion,'questions.php',true);
    }
});
