
<html>

<title>&copy #vChecker</title>
     <meta charset="utf-8" />

    <link rel="icon" href="path/images/favicon.ico" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="path/js/custom.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link href="path/css/bootstrap.css" rel='stylesheet' type='text/css'>
    <link href="path/css/animate.css" rel='stylesheet' type='text/css'>
    <link href='path/css/vchecker.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="path/css/font-awesome.min.css">
<body>
      <style>
      body{
        background-color: #494b54;
      }
         textarea.form-control {
         font-family: sans-serif;
         text-align: center;
         background-color: #ffd9b3;
         }
         div.cc {
         font-family: sans-serif;
         }
         div.polaroid {
         width: 250px;
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
         text-align: center;
         }
         div.container {
         padding: 10px;
         }
      </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head><br>
<center>#CHK FULL - Checker <br>
    <p>


        <strong>FORMATO: 44444444444444;06;2020;123</strong>
    </p>

	<script>

	</script>
<br>

        <center><textarea name="lista" id="lista" class="form-control" rows="10"  placeholder="" style="width: 600px;"></textarea></center>
            <br>
             <i id="demo">Status: <font color="white">Parado!</font></i> | Total: <i id='testado' style="color:white;">0</i> | Carregadas: <i id='carregada' style="color:white;">0</i> | Aprovadas: <i id='CLIVE' style="color:green;">0</i> | Reprovadas: <i id='CDIE' style="color:red;">0</i> <br> Em fila: <i id="nCheckTM" style="color: white;">N/A</i><br>          Progresso: <i id="progress_total" style="color:red;">N/A</i><br>
<input type="button" class="btn btn-danger" style="width: 400px;" id="startc" value="INICIAR CHK"  onClick="startParams()">
<!-- Button trigger modal -->
<button type="button" id="gerargc" class="btn btn-primary" onclick="gerar()">
  Gerar Lista
</button>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Gerar lista para pegar cvv</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

     


       

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
window.onload = function(){
    var button = document.getElementById('nbv');
        button.click();
};
</script>
<script>
    function gerar(){
   $("#gerargc").prop("disabled", true);
(function($)
{
    $(document).ready(function()
    {
        $.ajaxSetup(
        {
            cache: false,
            beforeSend: function() {
                $('#content').hide();
                $('#content').show();
            },
            complete: function() {
                $('#loading').hide();
                $('#content').show();
            },
            success: function() {
                $('#loading').hide();
                $('#content').show();
            }
        });
        var $container = $("#lista");

     var postData = "lista=" + document.getElementById("lista").value;
      $.ajax({
            type: "post",
            url: "gerar.php",
            data: postData,
            contentType: "application/x-www-form-urlencoded",
            success: function(responseData, textStatus, jqXHR) {
                $('#lista').val(responseData);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        })


        
        var refreshId = setInterval(function()
        {
            //$container.load('rss-feed-data.php');
        }, 9000);
    });
})(jQuery);




    }
</script>

<br>
<br>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" id="btnger" onclick="gerar()" name="btnger" class="btn btn-primary">Gerar Lista</button>
      </div>
    </div>
  </div>
</div>
<br><br><br>
</div></div>
           
          <br>


  <button class="btn btn-success" id="nbv" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
    Mostrar Lives
  </button>
</p>
<div class="collapse" id="collapseExample2">
  <div class="card card-body">
                                      <div id="ALLLIVE" onclick="SelectAll('ALLLIVE');"></div></div><br>

  </div>
</div>
 
  <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Mostrar Deads
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
                                         <div id="ALLDIE" onclick="SelectAll('ALLDIE');"></div></div><br>

  </div>
</div>





          <br>


          <br>
            <br>


        <div id="pgstr"></div>
            <br><br>


                </div>
          </div>



                      <br><br>
                            <i id="nLive" style="display:none;"></i><div id="emLIVE" style="display:none;">

                       <br><br>
                            <i id="nDie" style="display:none;"></i><div id="emDIE" style="display:none;">


            <script>
     function notifyMe() {
  // Let's check if the browser supports notifications
  if (!("Notification" in window)) {
    alert("This browser does not support desktop notification");
  }

  // Let's check if the user is okay to get some notification
  else if (Notification.permission === "granted") {
    // If it's okay let's create a notification
  var options = {
              body: "Transação autorizada.",
              icon: "img/logo.png",
              dir : "ltr"
          };
        var notification = new Notification("[#vChecker] Você tem mais 1 info aprovada.",options);
        audio2.play();
    }

  // Otherwise, we need to ask the user for permission
  // Note, Chrome does not implement the permission static property
  // So we have to check for NOT 'denied' instead of 'default'
  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {
      // Whatever the user answers, we make sure we store the information
      if (!('permission' in Notification)) {
        Notification.permission = permission;
      }

      // If the user is okay, let's create a notification
      if (permission === "granted") {
          var options = {
              body: "Transação autorizada .",
              icon: "img/logo.png",
              dir : "ltr"
 
          };
        var notification = new Notification("[#vChecker] Você tem mais 1 info aprovada.",options);
     
        }
    });
  }

}
            //  
        var audio = new Audio('sound/blop.mp3');
        var audio2 = new Audio('sound/bot.mp3');
            //


var _$_6db9=["\x56\x43\x44","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x56\x43\x4C","\x66\x6F\x63\x75\x73","\x73\x65\x6C\x65\x63\x74","\x63\x68\x65\x63\x6B\x65\x64","\x64\x69\x73\x70\x6C\x61\x79","\x73\x74\x79\x6C\x65","\x65\x6D\x44\x49\x45","\x6E\x6F\x6E\x65","\x6E\x44\x69\x65","\x62\x6C\x6F\x63\x6B","\x65\x6D\x4C\x49\x56\x45","\x6E\x4C\x69\x76\x65","\x58\x4D\x4C\x48\x74\x74\x70\x52\x65\x71\x75\x65\x73\x74","\x4D\x69\x63\x72\x6F\x73\x6F\x66\x74\x2E\x58\x4D\x4C\x48\x54\x54\x50","\x6F\x6E\x72\x65\x61\x64\x79\x73\x74\x61\x74\x65\x63\x68\x61\x6E\x67\x65","\x72\x65\x61\x64\x79\x53\x74\x61\x74\x65","\x73\x74\x61\x74\x75\x73","\x72\x65\x73\x70\x6F\x6E\x73\x65\x54\x65\x78\x74","\x74\x65\x73\x74\x61\x64\x6F","\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C","\x43\x4C\x49\x56\x45","\x43\x44\x49\x45","\x66\x6C\x6F\x6F\x72","\x6E\x43\x68\x65\x63\x6B\x54\x4D","\x3C\x66\x6F\x6E\x74\x20\x63\x6F\x6C\x6F\x72\x3D\x27\x62\x6C\x75\x65\x27\x3E","\x3C\x2F\x66\x6F\x6E\x74\x3E","\x70\x72\x6F\x67\x72\x65\x73\x73\x5F\x74\x6F\x74\x61\x6C","\x3C\x66\x6F\x6E\x74\x20\x73\x74\x79\x6C\x65\x3D\x27\x63\x6F\x6C\x6F\x72\x3A\x20\x72\x65\x64\x3B\x27\x3E","\x25\x3C\x2F\x66\x6F\x6E\x74\x3E","\x74\x69\x74\x6C\x65","\x5B\x50\x72\x6F\x67\x72\x65\x73\x73\x6F\x3A\x20","\x25","\x5D","\x6D\x61\x74\x63\x68","\x41\x4C\x4C\x4C\x49\x56\x45","\x20\x0A","\x41\x4C\x4C\x44\x49\x45","\x0A","\x47\x45\x54","\x61\x6A\x61\x78\x2E\x70\x68\x70\x3F\x74\x65\x73\x74\x61\x72\x3D\x63\x63\x26\x63\x63\x73\x3D","\x26\x73\x65\x70\x61\x72\x61\x64\x6F\x72\x3D\x3B\x26\x69\x64\x3D\x30","\x6F\x70\x65\x6E","\x73\x65\x6E\x64","\x69\x6E\x64\x65\x78\x4F\x66","\x70\x75\x73\x68","\x73\x70\x6C\x69\x74","\x75\x6E\x64\x65\x66\x69\x6E\x65\x64","\x63\x6F\x6E\x73\x74\x72\x75\x63\x74\x6F\x72","\x43\x4F\x55\x4E\x54\x5F\x52\x45\x43\x55\x52\x53\x49\x56\x45","\x68\x61\x73\x4F\x77\x6E\x50\x72\x6F\x70\x65\x72\x74\x79","\x63\x6F\x75\x6E\x74","\x0A\x3C\x62\x72\x3E","\x70\x67\x73\x74\x72","\x76\x61\x6C\x75\x65","\x6C\x69\x73\x74\x61","\x64\x65\x6D\x6F","","\x63\x61\x72\x72\x65\x67\x61\x64\x61","\x7C","\x63\x73\x69\x64\x5F","\x63\x63\x69\x64\x5F","\x72\x65\x70\x6C\x61\x63\x65","\x53\x74\x61\x74\x75\x73\x3A\x20\x3C\x69\x20\x73\x74\x79\x6C\x65\x3D\x22\x63\x6F\x6C\x6F\x72\x3A\x67\x72\x65\x65\x6E\x3B\x22\x3E\x49\x6E\x69\x63\x69\x61\x64\x6F\x21\x3C\x2F\x69\x3E"]
var cdie=document[_$_6db9[1]](_$_6db9[0]);//2
var clive=document[_$_6db9[1]](_$_6db9[2]);//3
function SelectAll(j)
{
    document[_$_6db9[1]](j)[_$_6db9[3]]();//8
    document[_$_6db9[1]](j)[_$_6db9[4]]()
}
function cvcd()
{
    if(cdie[_$_6db9[5]]== false)
    {
        document[_$_6db9[1]](_$_6db9[8])[_$_6db9[7]][_$_6db9[6]]= _$_6db9[9];//14
        document[_$_6db9[1]](_$_6db9[10])[_$_6db9[7]][_$_6db9[6]]= _$_6db9[9]
    }
    else
    {
        if(cdie[_$_6db9[5]]== true)
        {
            document[_$_6db9[1]](_$_6db9[8])[_$_6db9[7]][_$_6db9[6]]= _$_6db9[11];//17
            document[_$_6db9[1]](_$_6db9[10])[_$_6db9[7]][_$_6db9[6]]= _$_6db9[11]
        }

    }

}
function cvcl()
{
    if(clive[_$_6db9[5]]== false)
    {
        document[_$_6db9[1]](_$_6db9[12])[_$_6db9[7]][_$_6db9[6]]= _$_6db9[9];//23
        document[_$_6db9[1]](_$_6db9[13])[_$_6db9[7]][_$_6db9[6]]= _$_6db9[9]
    }
    else
    {
        if(clive[_$_6db9[5]]== true)
        {
            document[_$_6db9[1]](_$_6db9[12])[_$_6db9[7]][_$_6db9[6]]= _$_6db9[11];//26
            document[_$_6db9[1]](_$_6db9[13])[_$_6db9[7]][_$_6db9[6]]= _$_6db9[11]
        }

    }

}
function startchk(m,k,l)
{
    var n;//32
     $("#startc").attr("disabled", "disabled");
    if(window[_$_6db9[14]])
    {
        n =  new XMLHttpRequest()
    }
    else
    {
        n =  new ActiveXObject(_$_6db9[15])
    }
    //33
    n[_$_6db9[16]]= function()
    {
        if(n[_$_6db9[17]]== 4&& n[_$_6db9[18]]== 200)
        {
            var x=n[_$_6db9[19]];//45
            var w=document[_$_6db9[1]](_$_6db9[20]);//46
            var t=w[_$_6db9[21]]= (eval(w[_$_6db9[21]])+ 1);//47
            var u=(eval(document[_$_6db9[1]](_$_6db9[20])[_$_6db9[21]])+ 1);//48
            var q=(eval(document[_$_6db9[1]](_$_6db9[22])[_$_6db9[21]])+ 1);//49
            var r=(eval(document[_$_6db9[1]](_$_6db9[23])[_$_6db9[21]])+ 1);//50
            var v=Math[_$_6db9[24]]((t/ k)* 100);//51
            var o=Math[_$_6db9[24]]((q/ k)* 100);//52
            var s=Math[_$_6db9[24]]((r/ k)* 100);//53
            document[_$_6db9[1]](_$_6db9[25])[_$_6db9[21]]= _$_6db9[26]+ m+ _$_6db9[27];//54
            document[_$_6db9[1]](_$_6db9[28])[_$_6db9[21]]= _$_6db9[29]+ v+ _$_6db9[30];//55
            document[_$_6db9[31]]= _$_6db9[32]+ v+ _$_6db9[33]+ _$_6db9[34];//56
            if(x[_$_6db9[35]](/APROVADA/g))
            {
                notifyMe()
                document[_$_6db9[1]](_$_6db9[22])[_$_6db9[21]]= q;//58
                document[_$_6db9[1]](_$_6db9[36])[_$_6db9[21]]= document[_$_6db9[1]](_$_6db9[36])[_$_6db9[21]]+ x+ _$_6db9[37];//59
                
                 
            }
            else
            {
                if(x[_$_6db9[35]](/REPROVADA/g))


                {
                    document[_$_6db9[1]](_$_6db9[23])[_$_6db9[21]]= r;//65
                    document[_$_6db9[1]](_$_6db9[38])[_$_6db9[21]]= document[_$_6db9[1]](_$_6db9[38])[_$_6db9[21]]+ x+ _$_6db9[39]
                }

            }

        }

    }
    ;//41
    n[_$_6db9[43]](_$_6db9[40],_$_6db9[41]+ m+ _$_6db9[42],true);//73
    n[_$_6db9[44]]()
}
function listToArray(f,g)
{
    var e=[];//78
    if(f!== undefined)
    {
        if(f[_$_6db9[45]](g)==  -0)
        {
            fullAray[_$_6db9[46]](f)
        }
        else
        {
            e= f[_$_6db9[47]](g)
        }

    }
    //80
    return e
}
function count(c,d)
{
    var b,a=0;//91
    if(c=== null||  typeof c=== _$_6db9[48])
    {
        return 0
    }
    else
    {
        if(c[_$_6db9[49]]!== Array&& c[_$_6db9[49]]!== Object)
        {
            return 1
        }

    }
    //92
    if(d=== _$_6db9[50])
    {
        d= 1
    }
    //97
    if(d!= 1)
    {
        d= 0
    }
    //100
    for(b in c)
    {
        if(c[_$_6db9[51]](b))
        {
            a++;//105
            if(d== 1&& c[b]&& (c[b][_$_6db9[49]]=== Array|| c[b][_$_6db9[49]]=== Object))
            {
                a+= this[_$_6db9[52]](c[b],1)
            }

        }

    }
    //103
    return a
}
function pushcsB(h,i)
{
    document[_$_6db9[1]](i)[_$_6db9[21]]= document[_$_6db9[1]](i)[_$_6db9[21]]+ h+ _$_6db9[53]
}
function startParams()

{

    document[_$_6db9[1]](_$_6db9[54])[_$_6db9[7]][_$_6db9[6]]= _$_6db9[11];//118
    var G=document[_$_6db9[1]](_$_6db9[56])[_$_6db9[55]];//119
    var H=G[_$_6db9[47]](_$_6db9[39]);//121
    var I=count(H,_$_6db9[50]);//122
    var E=G;//124
    var D=listToArray(E,_$_6db9[39]);//125
    document[_$_6db9[1]](_$_6db9[57])[_$_6db9[21]]= _$_6db9[58];//127
    document[_$_6db9[1]](_$_6db9[59])[_$_6db9[21]]= I;//128
    for(var C=0;C< I;C++)
    {
        var z=D[C];//131
        var A=z[_$_6db9[47]](_$_6db9[60]);//132
        var B=_$_6db9[61]+ C;//133
        var y=_$_6db9[62]+ C;//134
        var F=document[_$_6db9[1]](_$_6db9[56])[_$_6db9[55]];//136
        F= F[_$_6db9[63]](z,_$_6db9[58]);//137
        F= F[_$_6db9[63]](_$_6db9[39],_$_6db9[58]);//138
        document[_$_6db9[1]](_$_6db9[56])[_$_6db9[21]]= F;//139
        startchk(z,I,C)
    }
    //129
    document[_$_6db9[1]](_$_6db9[57])[_$_6db9[21]]= _$_6db9[64]
}


            </script>



        </center>
    </body>
</html>
