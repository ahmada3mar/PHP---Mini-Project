<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="vv.css" />
    <link rel="stylesheet" href="./fontawesome/css/all.min.css" />
    <script
      src="https://kit.fontawesome.com/c20e40a942.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
   
      <nav>
        <div class="nav__logo">
        </div>
        <div class="nav__mid">
          <div><a href="index.php">Home</a></div>
          <div><a href="dashboard.php">Dashboard</a></div>
          <div><a href="gallery.html">Gallery</a></div>

        </div>
      </nav>
      <main>
        <div class="window">
     
          <div class="window__main">


          <?php include 'data.php';
       
                for($i=0;$i<count($data);$i++){
                  $image=array($data[$i]['image']);
                  $name=array($data[$i]['name']);
                  $birthday=array($data[$i]['birthday']);
                  echo '<div class="card">';
                
                foreach($image  as $k  => $v){
                  echo '<img class="card-img-top" src="'.$v.'" alt="Sample Title">';
                }
                foreach($name  as $k  => $v){
                  echo '<h4>'.$v.'</h4>';
                }  
                foreach($birthday as $k  => $v){
                  echo '<a href="trainee.php?id='.$i.'" class="card__btn">Profile </a></button';
                  echo '</div></div>';
                } 
                }
         ?>





          </div>
        </div>
      </main>
    </div>
  </body>
</html>
