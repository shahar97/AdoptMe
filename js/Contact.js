$(document).ready(function(){
    $("#gif").hide();
  });


  
function ValidateContactForm()
{
    let name = document.Form.name;
    let email = document.Form.email;
    let phone = document.Form.phone;
    
    

    if (name.value === "")
    {
        window.alert("Please enter your name.");
        name.focus();
        return false;
    }
    
    if (email.value === "")
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (email.value.indexOf("@", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (email.value.indexOf(".", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    
    if (phone.value === "")
    {
        window.alert("Please enter your mobile number.");
        phone.focus();
        return false;
    }
    window.alert("Your details have been successfully sent");
    $("#gif").show();
    $("form input, form select, form textarea").prop("disabled", true);
    document.getElementById("reset").onclick=function(){
        $("#gif").hide();
    }
    return false;
    
    

    
}




function showNextQuestion() {
    document.getElementById("nextQuestion").style.display = "block";
}
function hideNextQuestion() {
    document.getElementById("nextQuestion").style.display = "none";
}



if(typeof jQuery=="undefined")
    alert("jQuery is undefinde");
