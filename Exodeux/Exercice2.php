<DOCTYPE html>
<html lang="en">
    <head>
            <title >PHP</title>
             <meta charset="utf-8">
             <link rel="stylesheet" type="" href="css/style.css" />
    </head>
    <body class="body">
          <div class="exe">
                <h4>Exercice 2 </h4>
                <form action="" method="POST">
                <select name="choix" id="choix" style="font-size: 15px">
                            <option value="sel">Selectionnez une langue</option>
                            <option value="anglais">Anglais</option>
                            <option value="français">Français</option>
                    </select><br><br>
                <input type="submit" value="afficher" name="afficher">
                </form>
        </div><br><br><br><br><br><br><br><br>      

                <?php
       $tab = array(
        '1' => ["Janvier",    "January"],
        '2' => ["Fevrier",    "February"],
        '3' => ["Mars",       "March"],
        '4' => ["Avril",      "April"],
        '5' => ["Mai",        "May"],
        '6' => ["Juin",       "June"],
        '7' => ["Juillet",    "July"],
        '8' => ["Aout",       "August"],
        '9' => ["Septembre", "September"],
        '10' =>["Octobre",    "October"],
        '11' =>["Novembre",   "November"],
        '12' => ["Decembre", "December"],
    );

        if(isset($_POST['afficher'])){
                if($_POST['choix']=="anglais"){
        ?>
                    <table>
            <?php
                        for($i=1; $i<=12; $i+=3){ ?>
                            <tr>
                <?php            for($j=$i;$j<=$i+2;$j++){ ?>
                                <td><?php echo "$j"; ?></td>
                                <td> <?php echo $tab [$j][1];?></td>
                <?php } ?>
                            </tr>
        <?php } ?>
                    </table>
<?php }elseif($_POST['choix']=="français"){
        ?>
                    <table style="margin-left:35%">
            <?php
                        for($i=1; $i<=12; $i+=3){ ?>
                            <tr>
                <?php            for($j=$i;$j<=$i+2;$j++){ ?>
                                <td><?php echo "$j"; ?></td>
                                <td> <?php echo $tab [$j][0];?></td>
                <?php } ?>
                            </tr>
        <?php } ?>
                    </table>

<?php }} ?>
    </body>
</html>