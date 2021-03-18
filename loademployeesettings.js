//window.onload=function(){
    //var data=new FormData();
      //var xhttp=new this.XMLHttpRequest();
      
      //xhttp.onreadystatechange=function() {
      
          //if(this.readyState==4 && this.status==200){
      
              //document.getElementById("Nationality").innerHTML=this.responseText;
          //    $("#Nationality").html(this.responseText);
              
        //  }
    
        
          
      //};
      
      //xhttp.open("POST","loademployeesettings.php",true);
     // xhttp.send(data);
      
   //   }

      $(document).ready(function () {
         $.ajax({
             type: "POST",
             url: "loademployeesettings.php",
             data: "data",
             dataType: "text",
             success: function (response) {
                 $("#Nationality").html(response);
             }
         });
          
      });