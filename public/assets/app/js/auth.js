//Jquery
$(document).ready(function () {
  //Password visibility
  $(".passwordVisibilityBtn").click(function () {
    const getParentEl = $(this).parent().closest(".password_area");
    const getInputEl = getParentEl.find(".input_field");

    if (getInputEl.attr("type") === "password") {
      $(getInputEl).attr("type", "text");
      $(getParentEl).addClass("password_active");
    } else {
      $(getInputEl).attr("type", "password");
      $(getParentEl).removeClass("password_active");
    }
  });

  //Otp input
  $("#otpInput").otpdesigner({
    length: 6,
    onlyNumbers: true,
    // onchange:null,
    // executed when the user click on Enter key
    // enterClicked:null,

    //Callback function when otp input will be completed
    typingDone: function (code) {
      console.log("Entered OTP code: " + code);
    },
  });

  // clear values
  // $('#otpInput').otpdesigner('clear');

   //Pin input
   $("#pinInput").otpdesigner({
    length: 4,
    onlyNumbers: true,
    // onchange:null,
    // executed when the user click on Enter key
    // enterClicked:null,

    //Callback function when otp input will be completed
    typingDone: function (code) {
      console.log("Entered OTP code: " + code);
    },
  });

  // clear values
  // $('#pinInput').otpdesigner('clear');
});
