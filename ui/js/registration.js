$(document).ready(function () {

    // var name = $(".name").val();
    // var mobile = $(".mobile").val();
    // var email = $(".email").val();
    // var password = $(".passwd").val();
    // var confirmpasswd = $(".cpasswd").val();

    // if(name == "" && name == undefined){
    //     alert("Please enter the name feild!!!");
        
    // }
    
    $("#submitbtn").click(function () { 
        // e.preventDefault();
        
        Save();
        
    });
});





function Save(){

    const registrationData = {
        "Name" : "",
        "Mobile" : "",
        "Email" : "",
        "Password" : "",
        "ConfirmPasswd" : ""
    }

    var name = $("#name").val();
    var mobile = $("#mobile").val();
    var email = $("#email").val();
    var password = $("#passwd").val();
    var confirmpasswd = $("#cpasswd").val();

    registrationData.Name = name;
    registrationData.Mobile= mobile ;
    registrationData.Email  = email   ;
    registrationData.Password  = password;
    registrationData.ConfirmPasswd= confirmpasswd;

    $.ajax({
        type: "method",
        url: "../../controller/ctlregistration.php",
        data: registrationData,
        success: function (result) {
            console.log(result);
        }
    });


}