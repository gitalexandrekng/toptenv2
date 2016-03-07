<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page 404</title>
    <style>
    @import url(https://fonts.googleapis.com/css?family=Fjalla+One);

    html{
      height:100%;
      width:100%;
    }
    body{
          height:100%;
        background: -webkit-linear-gradient(#dadada, #bebebe);
        background: -o-linear-gradient(#dadada, #bebebe);
        background: linear-gradient(#dadada, #bebebe);
        overflow:hidden;
        }

    #test {
      margin-top:auto;
      margin-left:auto;
      margin-right:auto;
      margin-bottom:-700px;
      width: 1000px;
      height: 1030px;
      background-image:url(ville.png);
      background-size:contain;
    }

    @media screen and (max-width:1024px){
      #test{
        width: 800px;
        height:824px;
        margin-bottom: -534px;
      }
    }

    @media screen and (max-width:640px){
      #test{
        width:600px;
        height:618px;
        margin-bottom:-420px;
      }
    }

    @-webkit-keyframes rotating {
        from{
            -webkit-transform: rotate(0deg);
        }
        to{
            -webkit-transform: rotate(360deg);
        }
    }

    .rotating {
        -webkit-animation: rotating 10s linear infinite;
    }

    .full{
      display:flex;
      width:100%;
      height:100%;
    }

    #quatre{
      font-size:136px;
      font-family:"Fjalla One", sans-serif;
      position:absolute;
      top:100px;
      width:100%;
      text-align:center;
    }
    </style>
  </head>
  <body>
    <div class="full">
      <div id="test" class="rotating"></div>
    </div>
    <div id="quatre">
      404
    </div>
  </body>
</html>
