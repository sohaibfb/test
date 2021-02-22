<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../../../style.css">

</head>
<body>
<div class="subsettingsheader">
  <form class="form-style-3" action="addsettings.php" method="post" >
    
            
        <div class="actionbar"  ><image id="addnationalitysettingsbtn"  height="35" src="../../../images/images.png" width="52" />

        <input id='addsetttingbtn' name="submit" type="submit" value="save"  height="35"  width="52"  /></div>
        <input name='scode' type="hidden" value="2">
            

        
     
     
       
     

     

       <table id='nationalitysettings' >
    <tr>
     <th>del</th>
     <th>code</th>
     <th>English Description</th>
     <th>Arabic Description</th>
    </tr>
    <tbody id='tbody1'>
    <tr>
     <td>del</td>
     <td>code</td>
     <td>English Description</td>
     <td>Arabic Description</td>
    </tr>
    </tbody>
    
   </table>
 
 <div name="ShowEmployeeData" id="data"></div>

</form>
</div>

<script type="text/javascript" src="addsettingsrecord.js"></script>
</body>
</html>