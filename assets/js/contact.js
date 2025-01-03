 /*----------------------------------------------------------------------------------------------
* Template Name      :  Kayden - Personal Bootstrap 5 HTML Portfolio Template                   |
* Author             :  themesuccess                                                            |
* Version            :  1.0.0                                                                   |
* Created            :  May 2021                                                                |
* Updated            :  May 2021                                                                |
* File Description   :  Contact Us Script file for template                                     |
*-----------------------------------------------------------------------------------------------
*/

//Disable Form function
function contact_state(state) {
    if (state == "disable") {
      $("#contact-btn").removeClass("btn-loading");
      $("#contact-btn").removeClass("active");
      $("#contact-btn").addClass("disabled");
  
      $("#contact-form .form-control").each(function () {
        $(this).addClass("disabled");
      });
    }
  
    if (state == "loading") {
      $("#contact-btn").addClass("btn-loading");
    }
}
  
$(function () {
    this.sended = false;
    var that = this;
  
    var form = $("#contact-form"),
        successMessage = "Mensaje Enviado",
        warningMessage = "¡Algo paso! Por favor, inténtalo más tarde.";
  
    form.on("submit", function (event) {
      /*Change URL address if you need*/
  
      contact_state("loading");
  
      if (!that.sended) {
        $.ajax({
          url: "php/form.php",
          type: "POST",
          data: form.serialize(),
          success: function (response) {
            var d = JSON.parse(response);
            if (d.status == "success") {
              custom_alert(successMessage, "success");
              contact_state("disable");
            } else {
              custom_alert(warningMessage, "error");
              contact_state("disable");
            }
          },
          error: function (response) {
            custom_alert(warningMessage, "error");
            contact_state("disable");
          },
        });
  
        that.sended = true;
      }
  
      event.preventDefault();
    });
  });
  