<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body{
        font-family: 'Press Start 2P', cursive;
        background-color: rgba(51, 115, 72);
      }
      .close{
        border: none;
        background: rgb(0, 0, 0);
        padding: 8px 20px;
        border-radius: 10px;
        color: white;
        font-family: 'Press Start 2P', cursive;
        cursor: pointer;
      }
      .close:focus,
      .close:active{
        outline: none;
      }
      .name{
        font-family: 'Press Start 2P', Roboto;
        color: rgb(20, 62, 40);
        text-align: center;
        border: 2px solid black;
        border-radius: 5px;
        padding: 10px;
      }
      .name:focus,
      .name:active{
        outline: none;
      }
      input::placeholder{
        color: rgb(20, 62, 40);
        text-align: center;
      }
      .YALLNAME{
        margin-bottom: 10px;
      }
      .enter{
        text-align: center;
        background-color: white;
        padding: 25px;
        border: 1px solid black;
        border-bottom: 4px solid black;
        z-index: 100;
        border-radius: 8px;
      }
      .ALL{
        position: fixed;
        top: 0; left: 0; right: 0; bottom: 0;
        align-items: center;
        justify-content: center;
        display: flex;
      }
    </style>
    <?php
    // align-itmes: center; = Y축 가운데 정렬
    // justify-content: center; = X축 가운데 정렬
    // display: flex; 필수.
    ?>
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="ALL">
      <div class="enter">
        <p class="YALLNAME">Enter your name, please!</p>
        <form action="pokemon_2.php" method="post">
          <p><input type="text" class="name" name="name" placeholder="name"><p>
          <input type="submit" class="close" value="ENTER" onclick="location.href="pokemon_2.php"">
        </form>
      </div>
    </div>
  </body>
