<?php 
        if(isset($_GET['message']) && !empty($_GET['message'])){
                echo '<h3>' . htmlspecialchars($_GET['message']) . '</h3>';				
        }
?>