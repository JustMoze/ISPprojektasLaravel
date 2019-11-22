require('./bootstrap');



for (var i = 0; i < document.querySelectorAll(".checked").length; i++) {

  document.querySelectorAll(".checked")[i].addEventListener("click", function() {
  var item = this.id;
  var count  = this.id[0];
  var subid = item.substring(1);
  for (var i = 0;i<5; i++){
    if(i<count){

      document.getElementById((i+1)+subid).style.color = "#ed6663";
    }
    else{
      document.getElementById((i+1)+subid).style.color = "black";
    }
  }
  document.querySelector("#rating").value = count;
});
}

for (var i = 0; i < document.querySelectorAll(".ivetinta").length; i++){
  if(i<4){

    document.getElementById((i+1)+"one").style.color = "#ed6663";
  }
  else{
    document.getElementById((i+1)+"one").style.color = "black";
  }
}
