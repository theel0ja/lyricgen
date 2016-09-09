<!--
<?php
$referrer = "https://eliasojala.me/sovellukset/lyricgen/";

if($_POST["nimi"] == "") {
    header("Location: ".$referrer);
}

if($_POST["sivua"] == "") {
    header("Location: ".$referrer);
}
if($_POST["sivub"] == "") {
    header("Location: ".$referrer);
}
if($_POST["sivuc"] == "") {
    header("Location: ".$referrer);
}

$nimi = htmlspecialchars($_POST["nimi"]);

$sivu = array();
$sivu[1] = htmlspecialchars($_POST["sivua"]);
$sivu[2] = htmlspecialchars($_POST["sivub"]);
$sivu[3] = htmlspecialchars($_POST["sivuc"]);
?>
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- vain mobiilisivut -->
        
        <link rel="stylesheet" href="https://theel0ja.github.io/w3-css/css/w3.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    </head>
    <body>
        <br />
        <br />
        
        <center id="sivua">
            <div class="w3-container w3-card-8 w3-center" style="width: 50%;">
                <h1><?php echo $nimi; ?></h1>
                <?php echo $sivu[1]; ?>
            </div>
        </center>
        
        <center id="sivub">
            <div class="w3-container w3-card-8 w3-center" style="width: 50%;">
                <h1><?php echo $nimi; ?></h1>
                <?php echo $sivu[2]; ?>
            </div>
        </center>
        
        <center id="sivuc">
            <div class="w3-container w3-card-8 w3-center" style="width: 50%;">
                <h1><?php echo $nimi; ?></h1>
                <?php echo $sivu[3]; ?>
            </div>
        </center>
        
        <script>
            function SivuA() {
                $( "#sivua" ).show();
                $( "#sivub" ).hide();
                $( "#sivuc" ).hide();
            } 
            
            function SivuB() {
                $( "#sivua" ).hide();
                $( "#sivub" ).show();
                $( "#sivuc" ).hide();
            }
            
            function SivuC() {
                $( "#sivua" ).hide();
                $( "#sivub" ).hide();
                $( "#sivuc" ).show();
            }
            
            SivuA();
            
            $(document).keydown(function(e){
            if (e.keyCode == 37) { 
                    if ( $("#sivuc").css('display') == 'none' ){
                        // element is hidden
                        SivuA();
                    }
                    else {
                        SivuB();
                    }
                
                    console.log("Vasen");
                    return false;
                }
            });
            
            $(document).keydown(function(e){
            if (e.keyCode == 39) { 
                    if ( $("#sivua").css('display') == 'none' ){
                        // element is hidden
                        SivuC();
                    }
                    else {
                        SivuB();
                    }
                
                    console.log("Oikea");
                    return false;
                }
            });
        </script>
    </body>
</html>