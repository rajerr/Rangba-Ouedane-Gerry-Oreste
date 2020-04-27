<?php
session_start();
            $users = file_get_contents('../json/users.json');
            $users = json_decode($users, true);
?>
        <div class="div-score"><br>
            <label>Mon meilleur score :  </label>
            <?php echo $_SESSION['score']?>
        </div>
