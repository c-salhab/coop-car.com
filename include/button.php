<!DOCTYPE html>
<html>
<head>
<style type="text/css">

        .dark_mode_toggle_container {
            transform: scale(0.7);
            margin-left: 30px;
        }
        
        .checkbox {
            opacity: 0;
            position: absolute;
        }
        
        .label {
            box-sizing: border-box;
            background-color: #c7c7c7;
            border-radius: 50px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            padding: 4px;
            width: 54px;
            height: 26px;
            transform: scale(1.5);
        }
        
        .label.dark {
            background-color: #d0c5a6;
        }
        
        .label .ball {
            background-color: #ededed;
            border-radius: 50%;
            position: absolute;
            height: 22px;
            width: 22px;
            margin: -1px;
            transform: translateX(0px);
            transition: transform 0.2s linear;
        }
        
        .label .ball.dark {
            background-color:#c7c7c7;
        }
        
        .checkbox:checked + .label .ball {
            transform: translateX(26px);
        }
        
        .dark-mode {
          background-color:#979899;
        }
        
        .dark-mode-footer{
        background-color:	#696969;
        }

</style>
</head>

<body>

      <div class="dark_mode_toggle_container" style="padding-top:25px;padding-right:20px;padding-left:0px;">
      <input type="checkbox" class="checkbox" id="chk" />
      
      <label class="label" for="chk" onclick="myFunction()">
      <div  class="ball"></div>
      </label>
      </div>

      <script type="text/javascript">
      function myFunction() {
      var element_1= document.body;
      var element_3= document.getElementById("navbar");
      var element_2= document.getElementById("footer");
      
      element_1.classList.toggle("dark-mode");
      element_2.classList.toggle("dark-mode-footer");
      element_3.classList.toggle("dark-mode-footer");
      
      }	
      </script>

</body>
</html>