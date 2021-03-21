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
        loadpagesettings("1",loadnationality);
        loadpagesettings("2",loadreligion);
        loadpagesettings("3",loadhomecountry);
        loadpagesettings("4",loadposition);
        loadpagesettings("5",loadfunction);
        loadpagesettings("6",loadsection);
        loadpagesettings("7",loadlocation);
        
  
        
          
      });

      function loadpagesettings(codetype,loadfunction){
        var Rcodetype;
        $.ajax({
          type: "POST",
          url: "loademployeesettings.php",
          data: {"data":codetype},
          success:   function (response) {
            loadfunction(response);
             
          }
          
      });
      }

      function loadnationality(data){
      
        $("#Nationality").html(data);

      }
      function loadhomecountry(data){
      
        $("#HomeCountry").html(data);

      }
      function loadreligion(data){
      
        $("#Religion").html(data);

      }
      function loadposition(data){
      
        $("#Position").html(data);

      }
      function loadfunction(data){
      
        $("#Function").html(data);

      }
      function loadsection(data){
      
        $("#Section").html(data);

      }
      function loadlocation(data){
      
        $("#Location").html(data);

      }