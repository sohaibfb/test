
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("addnationalitysettingsbtn");


// When the user clicks the button, open the modal 
btn.onclick = function() {
  var table =document.getElementById("nationalitysettings");
  var row = table.insertRow();
  var cell1=row.insertCell(0);
  var cell2=row.insertCell(1);
  var cell3=row.insertCell(2);
  cell3.innerHTML="<input type='text', name='engdecctext'/>";
  var cell4=row.insertCell(3);
  cell4.innerHTML="<input type='text',name='arabicdesctext'/>"
  
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}




