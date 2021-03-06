<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="shortcut icon" href="img/poker.svg" type="image/x-icon">
    <title>ACE</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark p-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="game.html">Game</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="tarot.html">Tarot</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="design.html">Design</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="shop.html">Shop</a>
            </li>
            <div class="btn-group" role="group" aria-label="Basic outlined example">
              <a href="auth.html"><button type="button" class="btn btn-outline-primary">entry</button></a>
            </div>
          </ul>
        </div>
      </nav>
    </header>

    <section class="auth">
        <div class="container overflow-hidden">
            <h2 class="h2-123 d-flex justify-content-center">???????????????????? ????????????</h2>
            <form class="form-product d-flex justify-content-center" action="php/add.php" method="POST">
            <input type="text" class="task" name="task" id="task" placeholder="?????????????? ??????????">
            <button type="submit" name="sendTask" class="btn btn-success bg-dark">????????????????</button>
            </form>
            <?php

            require 'configDB.php';

            echo '<ul class="ul123">';
            $query = $pdo->query('SELECT * FROM `tasks`');
            while($row = $query->fetch(pdo::FETCH_OBJ)){
              echo '<li class="li123"><b class="b123">'.$row->task.'</b><a href="php/delete.php?id='.$row->id.'"><button class="btn-product2">??????????????</button></a></li>';
            }
            echo '</ul>';

            ?>
        </div>
    </section>

    <footer class="footer">
      <div class="container">
        <hr class="hr-footer">
        <h2 class="logo-footer">ACE</h2>
        <div class="ctn">
        <ul class="footer-ul">
          <h4 class="text-footer">tarot</h4>
          <a href="#"><li class="li-footer">TAROT VISA</li></a>
          <a href="#"><li class="li-footer">TAROT BARATO</li></a>
          <a href="#"><li class="li-footer">TAROT Y VIDENCIA</li></a>
          <a href="#"><li class="li-footer">TAROT CLARAVISI??N</li></a>
        </ul>
        <div class="ctn2">
        <ul class="footer-ul-2">
          <h4 class="text-footer">design</h4>
          <a href="#"><li class="li-footer">RED KNIGHTS</li></a>
          <a href="#"><li class="li-footer">JURASSIC PARK</li></a>
          <a href="#"><li class="li-footer">BICYCLE GUARDIANS</li></a>
          <a href="#"><li class="li-footer">AXIS PLAYING CARDS</li></a>
        </ul>
        <div class="ctn3">
        <ul class="footer-ul-3">
          <h4 class="text-footer">game</h4>
          <a href="#"><li class="li-footer">BICYCLE WPT</li></a>
          <a href="#"><li class="li-footer">1001 ALADDIN</li></a>
          <a href="#"><li class="li-footer">BICYCLE BRIDGE SIZE</li></a>
          <a href="#"><li class="li-footer">SUPERIOR BRAND BLACK</li></a>
        </ul>
        <hr class="hr-footer-2"> 
        <div class="row rews">
          <div class="col-sm col-1 p-4">
            &copy 2021 ACE	
          </div>
          <div class="col-sm col-2 p-4">
            POWERED BY dubrovinne
          </div>
          <div class="col-sm col-3 p-4">
            give feedback
          </div>
        </div>
        </div>
        </div>
        </div>
      </div>
        </div>
    </footer>
    
      
       
      





   
    

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script> 
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7 /js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <div id="particles-js"></div>
    <script type="text/javascript" src="js/particles.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
  
  </body>
</html>
