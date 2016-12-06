document.getElementById("items").maxLength;

function checkItems(items){
  if(items == null || items == ""){
    document.getElementById("submit").disabled = true;
  }else{
    document.getElementById("submit").disabled = false;
  }
}
