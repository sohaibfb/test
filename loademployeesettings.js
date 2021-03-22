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
        
        loadpagesettings("1",0,loadnationality);
        loadpagesettings("2",0,loadreligion);
        loadpagesettings("3",0,loadhomecountry);
        loadpagesettings("4",0,loadposition);
        loadpagesettings("5",0,loadfunction);
        //loadpagesettings("0",0,loadsection);
        loadpagesettings("7",0,loadlocation);
        $("#Function").change(function (e) {
          loadpagesettings("6",$("#Function").val(),loadsection); 
          e.preventDefault();
          
          
        });
        
  
        
          
      });

      function loadpagesettings(codetype,code,loadfunction){
        $.ajax({
          type: "POST",
          url: "loademployeesettings.php",
          data: {"data":codetype,"code":code},
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