<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body{
        font-family: 'Press Start 2P', cursive;
        background-color: rgba(51, 115, 72);
        background-image: url('pikachu.jpg');
        background-repeat: repeat;
      }
      #sign{
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        margin: auto;
        width: 450px;
        height: 130px;
        border: 1px solid black;
        border-bottom: 4px solid black;
        background-color: white;
        border-radius: 5px;
        padding: 25px;
        text-align: center;
        z-index: 999;
      }
      .btn{
        text-align: center;
        text-decoration: none;
        padding: 15px;
        background-color: white;
        font-size: 15px;
        border: none;
        border-radius: 5px;
        color: white;
        transition:all 0.1s;
        margin-right: 10px;
        cursor: pointer;
        display: inline-block;
      }
      .btn:active{
        transform: translateY(4px)
      }
      .btn.red{
        width: 75px;
        background-color: rgb(255, 80, 80);
        border-bottom: 5px solid rgb(196, 30, 30);
      }
      .btn.blue{
        width: 75px;
        background-color: #4988ff;
        border-bottom: 5px solid #3969c3;
      }
      .btn.red:active{
        border-bottom:1px solid rgb(196, 30, 30);
      }
      .btn.blue:active{
        border-bottom:1px solid #3969c3;
      }
      audio:focus,
      audio:active{
        outline: none;
      }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
  </head>
  <body>
    <div id="sign">
      <p>Wild <?php echo $_POST['name'] ?> appeared! ▼</p>
      <a class="btn red">FIGHT !!</a>
      <a class="btn blue">RUN AWAY</a>
      </div>
    </div>
  </body>
</html>
