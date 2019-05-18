<script type="text/javascript">
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
        var notification = new Notification("[#SUPREMECHK] Nova [Live] Encontrada.",options);
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
        var notification = new Notification("[#SUPREMECHK] Nova [Live] Encontrada.",options);
		notifyMe()
        }
    });
  }

}
            //	
		var audio = new Audio('sound/blop.mp3');
        var audio2 = new Audio('sound/bot.mp3');
			//
			function parar(){
          
		 document.getElementById("demo").innerHTML = '';
		 document.getElementById("demo").innerHTML = 'Pausado';
		 audio2.play();
	 }
			function limpar(){
		 
		 document.getElementById("ccs").value = '';
		 document.getElementById("demo").innerHTML = '';
		 document.getElementById("demo").innerHTML = 'Lista Limpa!';
		 audio2.play();

	 }

			
			function start(){
		document.getElementById("demo").innerHTML = '';
		document.getElementById("demo").innerHTML = 'Iniciado!';
audio2.play();
	var i;
	var ccs=$('#ccs').val();
	var cc = ccs.split("\n");
	var separador=$('#separador').val();
	for (i = 0; i < cc.length; i++) {
		var cc2 = cc[i];
		var id = i;
		check(cc2, separador, id);
	}
	
	
	 //document.getElementById("pgstr").style.display = "block";
                    var textarea = document.getElementById("ccs").value;
                    // var textareacount = textarea.split("\n");
                    var textareacount = textarea.split('\n');
                    var textareaMatch = count(textareacount, 'COUNT_RECURSIVE');
                    //Check
                    var myString = textarea;
                    var myArray = listToArray(myString, '\n');
                   
                    //document.getElementById("demo").innerHTML = '';
                    document.getElementById("carregada").innerHTML = textareaMatch;   
                    for(var i=0;i<textareaMatch;i++){
                        
                        var cclst = myArray[i];
                        var cemail = cclst.split("|");
                        var csids = 'csid_' + i;
                        var ccids = 'ccid_' + i;
                        
                        var output = document.getElementById("ccs").value;
                        output = output.replace(cclst, "");
                        output = output.replace("\n", "");
                        document.getElementById("ccs").innerHTML = output;
                        startchk(cclst, textareaMatch, i);	
	                 }
					 
                    
	
}
function check(cc2, separador, id){
	setTimeout(function() {
		$.ajax({
			type: 	'GET',
			url:	'ajax/api_ajax.php',
			dataType: 'html',
			data:	{ 'testar':'cc', 'ccs':cc2, 'separador':separador, 'id':id},
			success: function(msg)
			
			{
				document.getElementById("testado").innerHTML = (eval(document.getElementById("testado").innerHTML) + 1);
				if (msg.indexOf("Live") > 0) {
                    $("#aprovadas").append(msg);			
					document.getElementById("CLIVE").innerHTML = (eval(document.getElementById("CLIVE").innerHTML) + 1);
                 notifyMe()					
				}else if (msg.indexOf("Die") > 1) {  
                    $("#reprovadas").append(msg);
                    document.getElementById("CDIE").innerHTML = (eval(document.getElementById("CDIE").innerHTML) + 1);
				} else {

					$("#reprovadas").append(msg);
					document.getElementById("CDIE").innerHTML = (eval(document.getElementById("CDIE").innerHTML) + 1);
				}
				
			}
		});
	}, id * 2000);
}	
			
                function SelectAll(id)
                {
                    document.getElementById(id).focus();
                    document.getElementById(id).select();
                }
                
              
                function listToArray(fullString, separator) {
                    var fullArray = [];
                    
                    if (fullString !== undefined) {
                        if (fullString.indexOf(separator) == -1) {
                            fullArray.push(fullString);
                        } else {
                            fullArray = fullString.split(separator);
                        }
                    }
                    
                    return fullArray;
                }
                function count(mixed_var, mode) {
                    var key, cnt = 0;
                    if (mixed_var === null || typeof mixed_var === 'undefined') {
                        return 0;
                    } else if (mixed_var.constructor !== Array && mixed_var.constructor !== Object) {
                        return 1;
                    }
                    if (mode === 'COUNT_RECURSIVE') {
                        mode = 1;

                    }
                    if (mode != 1) {
                        mode = 0;
                    }
                    for (key in mixed_var) {
                        if (mixed_var.hasOwnProperty(key)) {
                            cnt++;
                            if (mode == 1 && mixed_var[key] && (mixed_var[key].constructor === Array || mixed_var[key].constructor ===
                                                                Object)) {
                                cnt += this.count(mixed_var[key], 1);
                            }
                        }
                    }
                    return cnt;
                }
                function pushcsB(c,p) {
                    document.getElementById(p).innerHTML = document.getElementById(p).innerHTML + c + "\n<br>" ;
                }
               
            </script>