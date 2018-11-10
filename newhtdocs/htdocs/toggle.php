<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .tabContainer{
        width:100%;
        height:350px;
      }
      .tabContainer .buttonContainer{
        height:15%;
      }
      .tabContainer .buttonContainer button{
        width:25%;
        height:100%;
        float:left;
        border:none;
        outline:none;
        padding:10px;
        font-family:sans-serif;
        font-size:18px;
        background-color: #eee;
      }
      .tabContainer .buttonContainer button:hover{
        background-color: #d7d4d4;
      }
      .tabContainer .tabpanel{
        height: 85%;
        background-color: gray;
        color: white;
        text-align: center;
        padding-top: 105px;
        box-sizing: border-box;
        font-family: sans-serif;
        font-size: 22px;
        display:none;


      }

    </style>
  </head>
  <body>
    <div class="tabContainer">
       <div class="buttonContainer">
          <button>Tab1</button>
          <button>Tab2</button>
          <button>Tab3</button>
          <button>Tab4</button>
       </div>
       <div class="tabpanel">Tab1:Content</div>
       <div class="tabpanel">Tab2:Content</div>
       <div class="tabpanel">Tab3:Content</div>
       <div class="tabpanel">Tab4:Content</div>
    </div>
  </body>
</html>
