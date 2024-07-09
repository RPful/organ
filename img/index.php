<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
isLogged($sid); ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Painel Conecta4G - gerencie seu app sem complexibilidade e aproveite todas as funções que ele lhe proporciona">
<meta name="author" content="Aproveite e entre no nosso grupo - https://t.me/+pOQ4lnQZlfkxNjdh">
<script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="/static/css/styles.css">
<link rel="stylesheet" href="/static/css/bootstrap.css">
<link rel="stylesheet" href="/static/css/sidebar.css">
</head>
<style>

body{
  margin:0;
  padding:0;
  font-family: 'Tomorrow', sans-serif;
  height:100vh;
background-image: linear-gradient(to top, #2e1753, #1f1746, #131537, #0d1028, #050819);
  display:flex;
  justify-content:center;
  align-items:center;
  overflow:hidden;
}
.text{
  position:absolute;
  top:10%;
  color:#fff;
  text-align:center;
  font-size:50px;
}
h1{
  font-size:100px;
}
.star{
  position:absolute;
  width:2px;
  height:2px;
  background:#fff;
  right:0;
  animation:starTwinkle 3s infinite linear;
}
.astronaut img{
  width:100px;
  position:absolute;
  top:55%;
  animation:astronautFly 6s infinite linear;
}
@keyframes astronautFly{
  0%{
    left:-100px;
  }
  25%{
    top:50%;
    transform:rotate(30deg);
  }
  50%{
    transform:rotate(45deg);
    top:55%;
  }
  75%{
    top:60%;
    transform:rotate(30deg);
  }
  100%{
    left:110%;
    transform:rotate(45deg);
  }
}
@keyframes starTwinkle{
  0%{
     background:rgba(255,255,255,0.4);
  }
  25%{
    background:rgba(255,255,255,0.8);
  }
  50%{
   background:rgba(255,255,255,1);
  }
  75%{
    background:rgba(255,255,255,0.8);
  }
  100%{
    background:rgba(255,255,255,0.4);
  }
}

</style>
<body>


    <div class="text">
        <div>⚠️</div>
        <hr>
        <div><h2>OPS ERROR 404 - Arquivo não encontrado </h2></div>
        <hr>
        <p><h5> Pode ser que arquivo foi deletado pelo proprietário do site ou você 🫵 está tentando acessar arquivos não autorizados </h5></p>
      </div>
 
      <div class="astronaut">
        <img src="https://images.vexels.com/media/users/3/152639/isolated/preview/506b575739e90613428cdb399175e2c8-space-astronaut-cartoon-by-vexels.png" alt="" class="src">
      </div>


  <script>
     document.addEventListener("DOMContentLoaded",function(){
  
  var body=document.body;
   setInterval(createStar,100);
   function createStar(){
     var right=Math.random()*500;
     var top=Math.random()*screen.height;
     var star=document.createElement("div");
  star.classList.add("star")
   body.appendChild(star);
   setInterval(runStar,10);
     star.style.top=top+"px";
   function runStar(){
     if(right>=screen.width){
       star.remove();
     }
     right+=3;
     star.style.right=right+"px";
   }
   } 
 })

  </script>

  </body>
  </html>
