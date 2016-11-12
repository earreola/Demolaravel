<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pag Principal</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    {!!Html::style('css/style.css')!!}
    <script>
        $(document).ready(function(e){
            $('#menu1').on('click',function(){
                $('#mostrardatos').load('usuario/mostrar');

            });
             $('#menu2').on('click',function(){
                $('#mostrardatos').load('usuario/create');

            });
              $('#menu3').click(function(){
                $('#mostrardatos').load('usuario/mensaje');

            });
        });


      
    </script>
</head>
<body>
<style>
          
    *{
        margin: 0px;
        padding: 0px;
        font-weight: lighter;
    }
    nav{
        position: fixed;
        width: 230px;
        height: 100%;
        background-color: #2d2d2d
    }
    ul{
         margin-top: 70px;
         list-style: none;
         display: block;
    }
    li{
        width: 100%;
        height:50px;
        border-bottom: 1px solid #323232;
        overflow: hidden;

    }
    p.menu{
        position: relative;
        padding: 16px;
        padding-right: 25px;
        float:right;
        color:white;
        opacity: .6;
        font-size: 1.2em;

    }
    
    div.barra{
        position: absolute;
        height: 50px;
        width: 0px;
        background-color: #aaa;
        opacity: .1;
        -webkit-transition:width .2s;

    }
   
    li:hover div.barra{
        width: 230px;
    }

    .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
                background-: black;
            }

    .content {
        text-align: center;
        display: inline-block;
        width: 19em;

    }
    #mostrardatos{
        margin-left: 350px;
        margin-top: 70px;
        
        display: inline-block;
    }



}
</style>
  <nav>
      <ul>

            
              <li>
                <div class="barra"></div>
                  <p class="menu" id="menu1">Usuarios</p>
                  </div>
              </li>
            
          
              <li>
                  <div class="barra"></div>
                  <p class="menu" id="menu2">Agregar Usuarios</p>
             </li>
                
      </ul>
  </nav>

  <div id="mostrardatos"></div>



 
</body>
</html>