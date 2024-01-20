<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Text To  Voice Generator</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <header>
        <h2>Text To Voice Generator</h2>
    </header>
    <div class="container">
        <div class="textaread">
        <textarea onchange="checc()"  name="script" id="script" cols="50" rows="10" placeholder="Enter your script...."></textarea>
         
        <div class="setting">
            <div class="fside">

                <lable style="font-size:22px;font-family:verdana;" for="models">Voice Model: </lable><select style="font-size:22px;font-family:verdana;" name="models" id="models">&#9660;

            <option value="U270hxuVOGztqeqfXZom">Anil</option>
            <option value="21m00Tcm4TlvDq8ikWAM">Rachel</option>
            <option value="AZnzlk1XvdvUeBnXmlld">Domi</option>
            <option value="EXAVITQu4vr4xnSDxMaL">Bella</option>
            <option value="ErXwobaYiN019PkySvjV">Antoni</option>
            <option value="MF3mGyEYCl7XYWbV9V6O">Elli</option>
            <option value="TxGEqnHWrfWFTfGW9XjX">Josh</option>
            <option value="VR6AewLTigWG4xSOukaG">Arnold</option>
            <option value="pNInz6obpgDQGcFmaJgB">Adam</option>

        </select>

            </div>
            <div class="sside">
                <p id="ccounter">0/333</p>
            </div>
         </div>
         
        </div>
        <button id="genbutton" onclick="generateaudio()">Generate</button>
    </div>
    <br>
    <center>
        <div id="audioo">

        </div>
    </center>
    <script>
        function generateaudio(){
            var inp = $("#script").val();
            var modelss = $("#models").val();
            $.ajax({
                url : "lib.php",
                type : "POST",
                data : {script : inp,model : modelss},
                beforeSend: function(){
                    $("#genbutton").attr("disabled","disabled");
                    $("#genbutton").text("Loading...");
                },
                success: function(e){
                    $("#audioo").html('<audio controls><source src="'+e+'" type="audio/mp3"></audio><br><a style="text-decoration:none;" href="'+e+'" download="CreateByAshif.mp3"><button style="background: rgb(0, 84, 84);color: white;font-size: 30px;padding: 5px 15px;display: block;margin: auto auto;margin-top: 50px;border-radius: 10px;cursor: pointer;">Download</button></a>');
                    $("#genbutton").removeAttr("disabled");
                    $("#genbutton").text("Generate");

                }
            });
        }

        

    var inputText = document.getElementById('script');
    var characterCount = document.getElementById('ccounter');

    inputText.addEventListener('input', function() {
      var text = inputText.value;
      var count = countCharacters(text);
      characterCount.textContent =  count;
    });

    function countCharacters(text) {
      var cleanedText = text.replace(/\s/g, '');
      var characterCount = cleanedText.length;
      return characterCount;
    }
    </script>
</body>
</html>