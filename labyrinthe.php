    <HTML>
    <HEAD>
        <TITLE>Labyrinthe</TITLE>
        <SCRIPT language="javascript">
        positionFin = "14,14"
        function départ(){
            window.status = "Création des murs"
            créemur()
            window.status = "Initiation de la case de départ"
            document.getElementById("0,0").style.backgroundColor = "ff0000"
            document.getElementById("f0,0").color="ff0000"
            document.form.positionX.value = 0
            document.form.positionY.value = 0
            window.status = "Initiation de la case de la fin"
            document.getElementById(positionFin).style.backgroundColor = "00ff00"
            document.getElementById("f"+positionFin).color = "00ff00"
            window.status = ""
        }

        function move(e){
        y = document.form.positionY.value*1
        x = document.form.positionX.value*1
            if (e == 50 && check(y+1,x)){
                afficher(y+1,x)
            }
            if (e == 54 && check(y,x+1)){
                afficher(y,x+1)
            }
            if (e == 56 && check(y-1,x)){
                afficher(y-1,x)
            }
            if (e == 52 && check(y,x-1)){
                afficher(y,x-1)
            }
        }

        function check(Y,X){
            if (document.getElementById(Y+","+X)) return true
            else return false
        }

        function afficher(Y,X){
            effacer(document.form.positionY.value,document.form.positionX.value)
            document.getElementById(Y+","+X).style.backgroundColor = "ff0000"
            document.getElementById("f"+Y+","+X).color="ff0000"
            document.form.positionX.value = X
            document.form.positionY.value = Y
            vérifier()
        }

        function effacer(Y,X){
        document.getElementById(Y+","+X).style.backgroundColor = "FFFFFF"
        document.getElementById("f"+Y+","+X).color = "FFFFFF"
        }

        function créemur(){
        position = new Array("1,1","2,2","0,1","2,1","4,0","4,2","5,2","4,3","2,3","2,4","6,2","6,1","8,1","8,2","8,3","8,4","7,4","6,4","2,6","3,6","4,6","5,6","6,6","7,6","4,5","6,7","8,5","8,6","0,3","0,4","0,5","0,6","0,7","0,8","1,8","2,8","3,8","4,8","6,9","7,9","8,9","8,8","9,8","4,9","4,10","4,11","5,11","6,11","6,0","9,3","10,3","10,4","10,5","10,6","11,6","11,7","11,8","11,9","11,10","10,10","10,11","9,11","8,11","10,0","10,1","11,1","12,1","12,3","12,4","13,4","13,5","14,1","14,2","14,3","14,4","13,7","13,8","13,9","13,10","13,11","13,12","12,12","14,7","4,13","5,13","6,13","7,13","8,13","9,13","10,13","13,13","14,13","10,14","11,14","1,10","2,10","2,11","2,12","2,13","3,13","0,12","0,14","5,14")
        pos = position
        for (i=0;i<position.length;i++){
            pos[i] = pos[i].split(",")
                if (check(pos[i][0],pos[i][1])){
                    document.getElementById(position[i]).style.backgroundColor = "000000"
                    document.getElementById("f"+position[i]).color = "000000"
                    document.getElementById(position[i]).id = ""
                    }
                }
        }
        function vérifier(){
            if (document.form.positionY.value+","+document.form.positionX.value == positionFin){
                alert("Vous avez gagné !")
            }
        }
        </SCRIPT>
    </HEAD>
    <BODY onload="départ()" onkeypress="move(event.keyCode)">
        <FORM name="form">
            <INPUT type="hidden" name="hauteur">
            <INPUT type="hidden" name="largeur">
            <INPUT type="hidden" name="positionX">
            <INPUT type="hidden" name="positionY">
        </FORM>
        <SCRIPT>
            hauteur = 15
            largeur = 15
            backgcolor = "FFFFFF"
            code ="<TABLE border='0'><TR>"

            for (i=0;i<largeur+2;i++){
                code+="<TD bgcolor='000000'></TD>"
            }

            code+="</TR>"
            for (i=0;i<hauteur;i++){
                code +="<TR><TD bgcolor='000000'></TD>"
                for (x=0;x<largeur;x++){
                    code += "<TD id='"+i+","+x+"' bgcolor='"+backgcolor+"'><FONT color='"+backgcolor+"' id='f"+i+","+x+"'>---</FONT></TD>"
            }
            code+="<TD bgcolor='000000'></TD></TR>"
            }
            code+="<TR>"
            for (i=0;i<largeur+2;i++)
            {
            code+="<TD bgcolor='000000'></TD>"
            }
            code+="</TR>"
            code+="</TABLE>"
            document.write(code)
            document.form.hauteur.value = hauteur
            document.form.largeur.value = largeur
        </SCRIPT>
        <span>Vous devez vous rendre à la case verte.</span>
        <FORM>           
            <INPUT type="button" value="Haut" onclick="move(56)" style="margin-left: 46px;"><BR>
            <INPUT type="button" value="Gauche" onclick="move(52)">
            <INPUT type="button" value="Droite" onclick="move(54)"><BR>            
            <INPUT type="button" value="Bas" onclick="move(50)"style="margin-left: 46px;"><BR><BR>
            <INPUT type="button" value="Recommencer" onclick="window.location.reload();">
        </FORM>
        
    </BODY>
</HTML>