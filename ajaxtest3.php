

<html>
    <head>
        <script>
            
            function opslaanTekst(){
                var invoerveld = document.getElementById('invoerveld');
                var xhttp = new XMLHttpRequest(); //Object xhttp wordt gemaakt uit XMLHttpRequest
                
                xhttp.open("GET", "invoerentekst.php?invoertekst=" + invoerveld.value, true); //pakt de tekst uit ajaxtest2.php
                xhttp.send(); 
                xhttp.onreadystatechange = function() { //Anonieme functie verbinden aan xhttp.onreadystatechange
                    if (this.readyState == 4 && this.status == 200) { 
                       document.getElementById("demo").innerHTML = xhttp.responseText;
                    }
                };
        
            }
            function toonTekst(){
                var xhttp = new XMLHttpRequest(); //Object xhttp wordt gemaakt uit XMLHttpRequest
                
                xhttp.open("GET", "terughalentekst.php", true); 
                xhttp.send(); 
                xhttp.onreadystatechange = function() { //Anonieme functie verbinden aan xhttp.onreadystatechange
                    if (this.readyState == 4 && this.status == 200) { 
                       document.getElementById("chat").innerHTML = xhttp.responseText;
                    }
                };
            }
    
        </script>
    </head>
    <body>
    
         <input type ="text" id="invoerveld" placeholder = "Voer je tekst in">
         <input type = "button" onclick="opslaanTekst()" value = "Sla tekst op >">
         <input type = "button" onclick="toonTekst()" value = "Toon tekst >">
         
         <div id="demo"> </div>
         
         <br><br><br>
         
         <div id="chat"> </div>

    </body>
</html>