window.onload=function(){
var data=new FormData();
var Value= document.getElementById('scode').value;
data.append('code',Value);

  var xhttp=new this.XMLHttpRequest();
  //var value;
  xhttp.onreadystatechange=function() {
  
      if(this.readyState==4 && this.status==200){
  
          document.getElementById("tbody").innerHTML=this.responseText;
         
      }

    
      
  };
  
  xhttp.open("POST","../../loadsettings.php",true);
  xhttp.send(data);
  
  }


// Get the button that opens the modal
var btn = document.getElementById("addsettingsbtn");


// When the user clicks the button, open the modal 
btn.onclick = function() {
  var table =document.getElementById("tbody");
  var row = table.insertRow();
  var cell1=row.insertCell(0);
 // cell1.innerHTML="<input type='text'/>"
  var cell2=row.insertCell(1);
  var cell3=row.insertCell(2);
  var cell4=row.insertCell(3);
  cell3.innerHTML="<input type='text', name='engdesctext'/>";  
  
  cell4.innerHTML="<input type='text', name='arabicdesctext'/>";
  
}



