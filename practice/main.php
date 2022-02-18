<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="flex-container">

<div class="header">     
       <?php include 'logo.inc.php' ?>         
       <?php include 'menu.inc.php' ?>	   
</div>       

<div class="about_me">
 
  <h1>  <?php  echo $p  ?> </h1>

    <div class="data">
        <div class="myImg">
            <?php
              echo '<img src="img/elefant.png"  width="300" height="200">';
              ?>                    
        </div>

        <div class="fullname">
            <p> Меня зовут 
            <?php echo $name, ' ', $surname . '<br>'; 
                  echo 'город', ' ', $city; ?>                                      
            </p> 
   
            <p> Мне
            <?php  echo $age;   ?>          
            год </p>
            <p> На курсе: Этичный хакер </p>
            <p> Мы изучили основы вэб-прагромирования </p>
            <p> Изучили основы языка программирования Python и написание скриптов </p>
        </div>
    </div>

    <div class="knowledge">
                           
            <?php  include 'knowledge.inc.php'; ?>
            <?php
            echo $a, ' ', $b, ' ', $c; 
            ?> <br>
                               
            <?php
                $a = 10;
                $b = 20;
                $c = $a + $b;
                echo $c;
            ?>   <br>                
             <?php
                echo $d;
            ?> 

    </div>

    <div class="article">
        <p class="text">
        Я работаю в крупной организации,  где одним из профильных подразделений является IT - центр.<br> 
        Всегда интересовался IT поэтому решил развить hard skills в данном направлении.<br>
        Учиться в SkillFactory для меня не просто, но интересно. 
        </p>
    </div>
</div>

    <?php include 'footer.inc.php' ?>

</div>

</body>
</html>