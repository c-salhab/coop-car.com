<!DOCTYPE html>
<html>
    <?php $title = 'Forums'; include('include/head.php'); ?>
<style>
    h4, ol { font-size:28px;
    }
    ol { color : rgb(5 71 82);
    }
    
    a {
        text-decoration: none;
        color: black;
    }
    h1, h4, ol {
        margin: 0;
        font-size:22px;
    }

    .top-bar {
        background-color: skyblue;
        padding: 0 40px;
    }
    .main {
        background-color: #FFFFFF;
        padding-top:90px;
        padding-left:60px;
        padding-bottom:30px;
    }
    .row {
        padding: 5px 0;
    }
    .bottom {
        display: flex;
        color: grey;
        font-size: 12px;
    }
    .timestamp {
        padding-right: 10px;
    }
    
</style>

<body>
      <?php include('include/header.php'); ?>
      
      <div class="main"><ol>
      <?php include 'include/db.php';
      $q = 'SELECT theme, description, (SELECT COUNT(id) FROM discussions WHERE theme_forum=theme) AS nb_discussions FROM forums ORDER BY nb_discussions DESC;';
      $req = $bdd->query($q);
      $res = $req->fetchAll();
      foreach ($res as $i) {
              	echo '
               <li class="row"> <a href="discussions.php?theme=' .$i['theme']. '" onclick="myFunction()">
               <h4 class = "title">' .$i['theme']. '</h4></a>';
              echo '<p>' .$i['description']. '</p>';
              echo ' <div class="bottom">
              <br>
              <p class="comment-count">' .$i['nb_discussions']. ' discussions</p>';
      }
      ?>
      </div>
      </div>
      </div>      
      <?php include('include/footer.php');?>
      
</body>
</html>
