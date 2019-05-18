
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
<DIV class="col-sm-9">
<DIV class="content">
<DIV class="page-header">
              <div class="tab-pane fade in active" id="home">
              <span>Você Está na Àrea de Gerador de GG </span>
  </div></DIV>
<DIV class="row">
<DIV class="col-md-6">
<DIV class="well card profile">
<font color="white" face="Bedini" size="4">Dados do Cartão:</font></b>
<div class="col-xs-5">
<form name="InpForm" onsubmit="return validateInput(this);">
<input type="TEXT" name="nomor" placeholder="4342564995890000">
<input type="TEXT" name="exp" placeholder="06;2020">
<input type="TEXT" name="cvv" placeholder="000">
<input type="TEXT" name="delim" value=";" size="1"><br><br>
<p><textarea name="hasil" cols="60" rows="10"></textarea>
</p><div id="jumlah" style="display: none;"></div><br></form>
<button type="button" name="buat" onclick="findN(InpForm)" class="btn btn-primary">Gerar</button></br>
  </div></b></center>
              

<FORM role="form">

</FORM></DIV></DIV>

<DIV class="col-md-6">
<DIV class="well card subscription status-recurring premium ">

<span>Preencha os dados da matriz</span>
 </DIV></DIV></DIV>

<DIV class="container"><NAV class="row">
<DIV class="col-xs-12 col-md-2">
<DIV class="col-xs-6 col-sm-4 col-md-2">
</DIV></DIV></NAV></DIV></use></svg></SPAN></H3></DIV></DIV></DIV></DIV></DIV></use></svg></A></LI></use></svg></A></LI></use></svg></A></LI></use></svg></A></LI></use></svg></A></LI></use></svg></A></LI></use></svg></A></LI></use></svg></A></LI></use></svg></A></LI></use></svg></A>

</FOOTER>
<SCRIPT src="js/spweb-site-9df3f8fafc.min.js"></SCRIPT>
      <font color="white"><center>SUPREMECHK 2016 - 2017 Todos direitos Reservados</font></center>
<SCRIPT src="js/account-9a76946596.js"></SCRIPT>
   
<SCRIPT></SCRIPT>

<br/>
<script type="text/javascript">
  
function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }


</script>
   
<script>
window.onload = function(){
    var button = document.getElementById('baba');
        button.click();
      // this will make it click again every 1000 miliseconds
};
</script>
<SCRIPT LANGUAGE="JavaScript1.2">
document.onkeypress = verificaBotao;
document.onkeydown = verificaBotao;
document.oncontextmenu = alerta;
</script>
<script language="JavaScript" type="text/javascript">

function trimSpaces(s){
        var res;
        var i;
        res = "";
        for (i = 0; i < s.length; i++){
                if ((s.charAt(i) != " ") && (s.charAt(i) != "-"))
                        res += s.charAt(i);
        }
        return res;
}

//mengembalikan benar jika input yang diberikan benar (semuanya angka)
//string dianggap telah dilewatkan ke trimSpaces
function isValidInput(s){
        for (i = 0; i < s.length; i++){
                var i;
                if ((s.charAt(i) < "0") || (s.charAt(i) > "9"))
                        return false;
        }
        return true;
}

//membatasi angka agar tidak lebih dari 9
function fix(num){
        if (num <= 9) return num; else return (num - 9);
}

//untuk mengecek kebenaran dengan >> luhn check digit algorithm <<
function check(number){
        var i;
        var ganjil;
        var genap;
        var tanda;

        genap = 0;
        ganjil = 0;
        //tanda = 1 artinya jumlah digitnya ganjil
        if (number.length % 2) tanda = 0; else tanda = 1;
        for (i = 0; i < number.length; i++) {
                if ((i + tanda) % 2) //ganjil
                        ganjil += fix(2 * (number.charAt(i)));
                else
                        genap += parseInt(number.charAt(i), 10);
        }
        return (((ganjil + genap) % 10) == 0);
}

//fungsi utama
function validateInput(inp){
        var tmp;
        var Msg;
        var Msg2;
        tmp = trimSpaces(inp.nomor.value)
        if ((tmp == "") || (!isValidInput(tmp))){
                alert("Preencha os campos!");
                return false;
        }
        Msg = "4LV3S";
        Msg2 = "";
        if (check(tmp))
                alert(Msg + "\n\nVALID!!\n\n" + Msg2);
        else
                alert(Msg + "\n\nTIDAK VALID!!\nPreencha os campos.\n\n" + Msg2);
        return false;
}

//mencari beberapa angka valid yang dekat dengan nomor yang diberikan
function findN(formName){
        var start;
        var startn;
        var res;
        var i;
  var exp;
  var cvv;
  var delim;

        expH = trimSpaces(formName.exp.value);
        cvvH = trimSpaces(formName.cvv.value);
        delimH = trimSpaces(formName.delim.value);
        start = trimSpaces(formName.nomor.value);
        if ((start == "") || (!isValidInput(start))){
                alert("Preencha os campos!");
                return;
        }
        res = "";
        startn = parseInt(start,10);
        for (i=-50; i<9000; i++)  {
                num = "" + (parseInt(start,10)+i);
                if (check(num)) {
                        res += (startn + i) + delimH + expH + delimH + cvvH + "\n";
                }
        }
        formName.hasil.value = res;
}
//
//akhir skrip di sini
//
//------------------------------------------------------->

   
</script>
<SCRIPT src="js/bon-32c3a6a7e1.js"></SCRIPT>
       </BODY><!-- This page was rendered using Twig --></HTML>
