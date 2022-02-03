<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        
        function Fname(value){
            var fn,ln;
            
            fn=document.getElementById('fname').value;
            ln=document.getElementById('lname').value;
            result=fn +" "+ ln;
            document.getElementById('lnameoutput').value= result;
        }
        
    </script>
</head>
<body>
        <style>
            body{
                margin: 0;
                font-family: sans-serif;
        
            }
            .outp{
                text-align: center;
                padding-top: 80px;
                font-family: sans-serif;
                font-size: 25px;
                font-weight: bold;
            }
            .inputf{
                display:flex;
                margin:130px 0 0 100px;
            }
            .inf{
                margin:60px 0 0 40px;
            }
        </style>
    <div class="inputf">
       <textarea class="outp" name="" id="lnameoutput" cols="30" rows="4"></textarea>
       <br><br>
        <div class="inf">
        <label for="">First Name:</label>
        <input type="text" name="fname" id="fname" onkeyup="Fname(this.value);">
        <br> <br>
        <label for="">Last Name:</label>
        <input type="text" name="lname" id="lname" onkeyup="Fname(this.value);">
        </div>
    </div>
    
    
    
</body>
</html>