document.getElementById("items").maxLength;

function checkItems(items){
  if(items == null || items == ""){
    document.getElementById("mySubmit").disabled = true;
  }else{
    document.getElementById("mySubmit").disabled = false;
  }
}
