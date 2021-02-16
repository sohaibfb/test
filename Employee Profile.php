<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>

 <head>

   <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="style.css">
   <link rel="html" href="index.html">
   <title>Employees Information</title>
 </head>

 <body>



  <div>
     <input id="myBtn" name="Image1" type="image" height="47" src="images/download (1).jpg" width="52" />
  </div><br>
 
  <div style="padding:0 16px">

  <div name="ShowEmployeeData" id="data"></div>
  <div id="myModal" class="modal" name="Iframe1" > 
  
   <div class="modal-content"> 
    <span class="close">&times;</span>
    <div ><br><br>
    <form class="form-style-3" action="addEmployees.php" method="post">
    
    
     <!--Personal Information-->
    <fieldset name="Personal Information">
				<legend>Personal Information</legend>
				
				
				<!--ID-->
				<label for=""><span>ID:<span class="required">*</span></span><input name="EID" type="text" /></label>	
				
			  <!--Name-->
				<label for=""><span>Name :<span class="required">*</span></span><input name="FirstName" type="text" placeholder="First Name"  />
				<input name="SecondName" type="text" placeholder="Second Name" />
				<input name="ThirdName" type="text" placeholder="Third Name"/>
				<input name="FamilyName" type="text" placeholder="Family Name" /></label>
				
				<!--nationality-->
				 <label for=""><span>Nationality :</span><select name="Nationality">
				 <option value="0" selected>Choose</option>
                 <option value="1">Jordan</option>
                 <option value="2">Lebanon</option>
                 <option value="3">Saudi</option>
                  </select></label>


      	<!--Home Country-->
				 <label for=""><span>Home Country:</span><select name="HomeCountry">
				 <option value="0" selected>Choose</option>
                 <option value="1">Jordan</option>
                 <option value="2">Lebanon</option>
                 <option value="3">Saudi</option>
                  </select></label>

                 <!--Gender-->
                 <label for=""><span>Gender :</span><select name="Gender">
                 <option value="0" selected>Choose</option>
                 <option value="1">male</option>
                 <option value="2">Female</option>
                 </select></label>


                 <!--Religin-->
                 <label for=""><span>Religion :</span><select name="Religion">
                 <option value="0" selected>Choose</option>
                 <option value="1">Muslim</option>
                 <option value="2">not muslim</option>
                 </select></label>
                 
                  <!--Marital Status-->
                 <label for=""><span>Marital Status :</span><select name="MaritalSatus">
                 <option value="0" selected>Choose</option>
                 <option value="1">Single</option>
                 <option value="2">Married</option>
                 <option value="3">Divorced</option>
                 </select></label>
  
                 
                 <!--birthday Date-->
                 <label for=""><span>Birthday Date:<span class="required">*</span></span><input name="BirthdayDate" type="date" /></label>

                 <!--Mobile-->
                 <label for=""><span>Mobile:<span class="required">*</span></span><input name="Mobile" type="tel" placeholder="Mobile" />
			</fieldset>
	


		
			 <!--Employement Information-->
		<fieldset name="Employment Information">
				<legend>Employement Information</legend>
				
				<!--Location-->
				<label for=""><span>Location<span class="required">*</span></span><select name="Location">
				 <option value="0" selected>Choose</option>
				 <option value="1">Western</option>
                 <option value="2">Eastern</option>
                 <option value="3">North</option>
                 <option value="4">South</option></select></label>	
				
			    <!--Department-->
				<label for=""><span>Department<span class="required">*</span></span><select name="Department">
				<option value="0" selected>Choose</option>
                 <option value="1">HR</option>
                 <option value="2">Finance</option>
                 <option value="3">IT</option></select></label>
				
				<!--Section-->
				 <label for=""><span>Section:</span><select name="Section">
                 <option value="0" selected>Choose</option>
                 <option value="1">Applications</option>
                 <option value="2">Training and development</option>
                  </select></label>
                  
                  

                 <!--Position-->
                 <label for=""><span>Position</span><select name="Position">
                 <option value="0" selected>Choose</option>
                 <option value="1">HR Manager</option>
                 <option value="2">Finance Manager</option>
                 <option value="3">IT Officer</option>
                 </select></label>
                 
                 
                 
                  <!--hiring Date-->
                 <label for=""><span>Hiring Date<span class="required">*</span></span><input name="HiringDate" type="date" /></label>	
				

                   <!--Email-->
                 <label for=""><span>Email<span class="required">*</span></span><input name="Email" type="email" /></label>	
				





				
				
			</fieldset>
			
			
	  <fieldset name="Financial Information">
				<legend>Financial Information</legend>
				
				<!--Basic Salary-->
				<label for=""><span>basic Salary<span class="required">*</span></span><input name="BasicSalary" type="number" /></label>	<br><br>
				
                 <!--Benefits-->			
                <div id="benefitTable">
                <table id="benefits" class="table">
					
					
					<tr>
						<th bgcolor="#EEEEEE">Benefit Name</th>
						<th bgcolor="#EEEEEE">Benefit Date</th>
						<th bgcolor="#EEEEEE">Benefit Amount</th>
						<th><div id="addBenefit"><img src="images/download.jpg" height="20" width="30" alt=""></div></th>
						<th><div><img src="images/save.jpg" height="20" width="30" alt="" /></div></th>
					</tr>
				</table>
                
                
                </div>
               

			   
			</fieldset>
			

      <input name="submit" type="submit" value="submit" />
    
    </form>
    
        
    </div>
  
  
  </div> 
    


  </div>
  

 


  </div>
 <script type="text/javascript" src="java.js"></script>
 <script type="text/javascript" src="update.js"></script>

  </body>

</html>
