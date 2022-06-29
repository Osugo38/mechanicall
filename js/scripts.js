
$(document).ready(function(){
$("#submit").click(function(){
  /*******Collecting Vehicle Model Details*****/
  var model = document.getElementById("cars");
  document.getElementById("model").innerHTML =
  (model.options[model.selectedIndex].text).toUpperCase();

  var  y = model.options[model.selectedIndex].text;

  /*******Collecting Location Details*****/
  var location = document.getElementById("locationSelection");
  document.getElementById("loc").innerHTML =
  (location.options[location.selectedIndex].text).toUpperCase();

var  x = location.options[location.selectedIndex].text;

  if(x =="Ngong Road"){
    $("#jane, #adams, #ken, #bill, #caka, #faith, #eduwin, #sheila, #mwangi, #yussuf, #mwanza, #mercy").hide();
    $("#oscar").show();
    $("#john").show();
    $("#ser").hide();
    return;
  }else if(x=="Thika Road"){
    $("#oscar, #ken, #bill, #caka, #faith, #eduwin, #sheila, #mwangi, #yussuf, #mwanza, #mercy").hide();
    $("#jane").show();
    $("#adams").show();
    $("#ser").hide();
    return;
  }else if(x=="Kiambu Road"){
    $("#oscar, #john, #jane, #adams, #caka, #faith, #eduwin, #sheila, #mwangi, #yussuf, #mwanza, #mercy").hide();
    $("#ken").show();
    $("#bill").show();
    $("#ser").hide();
    return;
  }else if(x=="Eastlands"){
    $("#oscar, #john, #jane, #adams, #ken, #bill, #eduwin, #sheila, #mwangi, #yussuf, #mwanza, #mercy").hide();
    $("#caka").show();
    $("#faith").show();
    $("#ser").hide();
    return;
  }else if(x=="Westlands") {
    $("#oscar, #john, #jane, #adams, #ken, #bill, #caka, #faith, #eduwin, #mwangi, #yussuf, #mwanza, #mercy").hide();
    $("#eduwin").show();
    $("#sheila").show();
    $("#ser").hide();
    return;
  }else if(x=="Jogoo Road") {
    $("#oscar, #john, #jane, #adams, #ken, #bill, #caka, #faith, #eduwin, #sheila, #mwanza, #mercy").hide();
    $("#mwangi").show();
    $("#yussuf").show();
    $("#ser").hide();
    return;
    return;
  }else if(x=="Nairobi CBD") {
    $("#oscar, #john, #jane, #adams, #ken, #bill, #caka, #faith, #eduwin, #sheila").hide();
    $("#mwanza").show();
    $("#mercy").show();
    $("#ser").hide();
    return;
  }else if(y=="--Select Your Car Model--" || x=="--Select Your Location--"){
    $("#oscar, #john, #jane, #adams, #ken, #bill, #caka, #faith, #eduwin, #sheila, #mwangi, #yussuf, #mwanza, #mercy").hide();
    document.getElementById("ser").innerHTML = "Please Enter your Car model and location to Find our Mechanics !";
    return;
  }
})

$("#display").click(function(){
  $("#oscar, #john, #jane, #adams, #ken, #bill, #caka, #faith, #eduwin, #sheila, #mwangi, #yussuf, #mwanza, #mercy").toggle();
});

/******Displaying Contact Detils**********/
$(".flip-card-back button").click(function(){
  $(".cont1, .cont2, .cont3, .cont4, .cont5, .cont6, .cont7, .cont8, .cont9, .cont10, .cont11, .cont12, .cont13, .cont14").toggle();
  $(".flip-card-back button").hide();
});
  $(".cont1, .cont2, .cont3, .cont4, .cont5, .cont6, .cont7, .cont8, .cont9, .cont10, .cont11, .cont12, .cont13, .cont14").click(function(){
  $(".flip-card-back button").toggle();
  $(".cont1, .cont2, .cont3, .cont4, .cont5, .cont6, .cont7, .cont8, .cont9, .cont10, .cont11, .cont12, .cont13, .cont14").hide();
});

/***********Collect users Message******/
$("#message").click(function(){
  var names = ($("#name").val()).toUpperCase();
  var emails = $("#mail").val();
  var comment = $("#comments").val();

  if(names== "" ){
    document.getElementById("conta").innerHTML = "Please enter your name !";
    return;
  }else if(emails==""){
    document.getElementById("conta").innerHTML = "Please enter your email !";
    return;
  }else if(comment=="") {
    document.getElementById("conta").innerHTML = "Please enter your message !";
    return;
  }else{
    document.getElementById("con").innerHTML = names + " we have received your message. Thank you for reaching out to us.";
    $("#conta").hide();
    return;
  }
});
});
