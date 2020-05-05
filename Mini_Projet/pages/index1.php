<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css<?php echo "?".rand(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <title>Quiz</title>
</head>
<?php
   include_once("header.php");
   $data = file_get_contents('../json/users.json');
   $users = json_decode($data, true);
   $joueurs = [];
   $admin = [];
   $nom = [];
   $score = [];
   for($i=0; $i <= count($users); $i++){
       if($users[$i]['profil'] === 'joueur'){ 
           $joueurs[] = $users;
        }else{
                $admin[] = $users;
        }
    }
    $players=[];
    foreach($users as $key=>$value){
        if($value['profil']==="joueur"){
            $players[]=$value;
        }
    }
$colonne=array_column($players, 'score');
array_multisort($colonne, SORT_DESC, $players);
       for($i=0; $i < 5; $i++){
           $nom[$i] = strtoupper($players[$i]['nom']);
           $score[$i] = $players[$i]['score'] .pts;
        //    echo strtoupper($players[$i]['nom']);
        //        echo"&nbsp;&nbsp";
        //    echo ucfirst($players[$i]['prenom']);
        //        echo"&nbsp;&nbsp";
        //    echo $players[$i]['score'] .pts;
        //    echo"<br>";
       }
?>
<?php
   $data = file_get_contents('../json/questions.json');
   $questions = json_decode($data, true);
   $text = [];
   $simple = [];
   $multiple = [];
   
   foreach($questions as $key=>$value){
        if($value['type'] == 'TEXT'){
            $text[] = $value;
        }elseif($value['type'] == 'SIMPLE'){
            $simple []= $value;
        
        }else{
            $multiple []= $value ;
        }
   }

?>
<body>
<form method="get" action="connexion.php" id="dashboard">
    <div class="container">
       <div class="contenu">
            <div class="profil">
               <a href="index1.php"> <img class="avatar" src="../Images/avatar/<?php echo $_SESSION['profil']?>" alt=""/></a><br>
               <div class="div">
               <label class="label_identy"><?php echo strtoupper( $_SESSION['nom']) ?></label>
                <label class="label_identy"><?php echo strtoupper($_SESSION['prenom'])?></label>
        </div>
    <div class="menu1">
        <nav class="menu" style="font-family: Josefin sans;">
                <ul>
                    <li class="option"><a href="./index1.php"> Dashbord
                    <img class="icon-menu2" src="../Images/Icônes/interface.png">
                    </a></li>
                    <li class="option"> <a href="index1.php?p=liste_questions" >Liste Questions
                    <img class="icon-menu"src="../Images/Icônes/ic-liste.png">
                    </a></li>
                    <li class="option"><a href="index1.php?p=creer_admin" >Creer Admin
                    <img class="icon-menu1"src="../Images/Icônes/ic-ajout.png">
                    </a></li>
                    <li class="option"><a href="index1.php?p=liste_joueurs">Liste Joueurs
                    <img class="icon-menu1"src="../Images/Icônes/ic-liste.png">
                    </a></li>
                    <li class="option"><a href="index1.php?p=creer_questions"  >Creer Questions
                    <img class="icon-menu3"src="../Images/Icônes/ic-ajout.png">
                    </a></li> 
                </ul>
            </nav>
        </div>
    </div>
    <div class="dashbord">
        <div class="dash_question">
        <canvas id="questions"></canvas>
        </div>
        <div class="dash_users">
        <canvas id="users"></canvas>
        </div>
        <div class="dash_joueur">
        <canvas id="joueur"></canvas>
    </div>
    <script>
            Chart.defaults.global.title.display = true;
            Chart.defaults.global.title.text = "";
    </script>
       <script>
                var ctx = document.getElementById('questions').getContext('2d');
                var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'pie',

                // The data for our dataset
                data: {
                    labels: ['TEXT', 'SIMPLE', 'MULTIPLE'],
                    datasets: [{
                        label: 'Questions',
                        backgroundColor: ['rgb(255, 99, 132)','blue','skyblue'],
                        borderColor: '#00fff',
                        data: [<?php echo count($text) ?>, <?php echo count($simple) ?>, <?php echo count($multiple) ?>]
                    }]
                },
                // Configuration options go here
                options: {
                    title : {
                        text: "Nombre Total des Questions par Type"
                    }
                }
                });
       </script>
       <script>
                var ctx = document.getElementById('joueur').getContext('2d');
                var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'bar',

                // The data for our dataset
                data: {
                    labels: [/*'January', 'February', 'March', 'April', 'May', 'June', 'July'*/ <?php echo $nom ?>],
                        datasets: [{
                            label: 'Joueur',
                            backgroundColor: 'skyblue',
                            borderColor: '#00fff' ,
                            data: [/*0, 10, 5, 2, 20, 30, 45*/ <?php echo $score ?>]
                    }]
                },
                // Configuration options go here
                options: {
                    title : {
                        text: "Top 5 des Meilleurs Joueurs par Scores"
                    }
                }
                });
       </script>
        <script>
           var ctx = document.getElementById('users').getContext('2d');
                var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'pie',

                // The data for our dataset
                data: {
                    labels: ['Admin', 'joueurs'],
                    datasets: [{
                        label: 'Questions',
                        backgroundColor: ['rgb(135, 128, 238)','skyblue'],
                        borderColor: '#00fff',
                        data: [<?php echo count($admin) ?>, <?php echo count($joueurs) ?>]
                    }]
                },
                // Configuration options go here
                options: {
                    title : {
                        text: "Nombre Total Des Utilisateurs"
                    }
                }
                });
    </script>
       </div>
    </div>
</form>
    <?php
        if(isset($_GET['p'])){
            $m=$_GET['p'];
            if($m=="liste_questions"){
                include_once("../pages/listequestion.php");
            }elseif($m=="creer_admin"){
                include_once("../pages/creeradmin.php");
            }elseif($m=="liste_joueurs"){
                include_once("../pages/listejoueur.php");
            }elseif($m=="creer_questions"){
                include_once("../pages/creerquestion.php");
            }
        }
    ?>
</body>

</html>