$(document).ready(function() {
    $("#loginForm").validate({
      rules: {
        email: {
          required: true,
          email: true
        },
        password: {
          required: true
        }
      },
      messages: {
        email: {
          required: "Please enter your email address",
          email: "Please enter a valid email address"
        },
        password: {
          required: "Please enter your password"
        }
      },
      errorElement: "div",
      errorClass: "error-message text-red-800",
      highlight: function(element, errorClass) {
        $(element).addClass(errorClass);
      },
      unhighlight: function(element, errorClass) {
        $(element).removeClass(errorClass);
      },
      submitHandler: function(form) {
        // Submit the form using AJAX
        $.ajax({
          url: form.action,
          method: form.method,
          data: $(form).serialize(),
          success: function(response) {
            // Redirect the user to main.php
            window.location.href = "src/main.php";
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.error(errorThrown);
          }
        });
      }      
    });
  });
  