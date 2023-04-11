$(document).ready(function () {
  $("#registration-form").validate({
    rules: {
      year_level: {
        required: true,
        digits: true,
      },
      course: {
        required: true,
      },
      student_classification: {
        required: true,
      },
      student_status: {
        required: true,
      },
      last_name: {
        required: true,
      },
      first_name: {
        required: true,
      },
      middle_name: {
        required: true,
      },
      gender: {
        required: true,
      },
      age: {
        required: true,
        digits: true,
      },
      contact_number: {
        required: true,
        digits: true,
      },
      religion: {
        required: true,
      },
      birthdate: {
        required: true,
        date: true,
      },
      place_of_birth: {
        required: true,
      },
      home_address: {
        required: true,
      },
      street: {
        required: true,
      },
      block: {
        required: true,
      },
      provincial_city: {
        required: true,
      },
      zip_code: {
        required: true,
        digits: true,
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 6,
      },
      confirm_email: {
        required: true,
        equalTo: "#email",
      },
      confirm_password: {
        required: true,
        equalTo: "#password",
      },
      em_name: {
        required: true,
      },
      em_contact: {
        required: true,
        digits: true,
      },
      em_address: {
        required: true,
      },
      father_name: {
        required: true,
      },
      mother_name: {
        required: true,
      },
      father_occupation: {
        required: true,
      },
      mother_occupation: {
        required: true,
      },
      father_status: {
        required: true,
      },
      mother_status: {
        required: true,
      },
      marriage_status: {
        required: true,
      },
    },
    messages: {
      year_level: {
        required: "Please enter your year level",
        digits: "Please enter a valid year level",
      },
      course: {
        required: "Please enter your course",
      },
      student_classification: {
        required: "Please select your student classification",
      },
      student_status: {
        required: "Please select your student status",
      },
      last_name: {
        required: "Please enter your last name",
      },
      first_name: {
        required: "Please enter your first name",
      },
      middle_name: {
        required: "Please enter your middle name",
      },
      gender: {
        required: "Please select your gender",
      },
      age: {
        required: "Please enter your age",
        digits: "Please enter a valid age",
      },
      contact_number: {
        required: "Please enter your contact number",
        digits: "Please enter a valid contact number",
      },
      religion: {
        required: "Please enter your religion",
      },
      birthdate: {
        required: "Please enter your birthdate",
        date: "Please enter a valid date",
      },
      place_of_birth: {
        required: "Please enter your place of birth",
      },
      home_address: {
        required: "Please enter your home address",
      },
      street: {
        required: "Please enter your street",
      },
      block: {
        required: "Please enter your block",
      },
      provincial_city: {
        required: "Please enter your provincial/city",
      },
      zip_code: {
        required: "Please enter your zip code",
        digits: "Please enter a valid zip code",
      },
      email: {
        required: "Please enter your email",
        email: "Please enter a valid email",
      },
      password: {
        required: "Please enter your password",
        minlength: "Your password must be at least 6 characters long",
      },
      confirm_email: {
        required: "Please confirm your email",
        equalTo: "Your email addresses do not match",
      },
      confirm_password: {
        required: "Please confirm your password",
        equalTo: "Your passwords do not match",
      },
      em_name: {
        required: "Please enter the name of your emergency contact",
      },
      em_contact: {
        required: "Please enter the contact number of your emergency contact",
        digits: "Please enter a valid contact number",
      },
      em_address: {
        required: "Please enter the address of your emergency contact",
      },
      father_name: {
        required: "Please enter the name of your father",
      },
      mother_name: {
        required: "Please enter the name of your mother",
      },
      father_occupation: {
        required: "Please enter the occupation of your father",
      },
      mother_occupation: {
        required: "Please enter the occupation of your mother",
      },
      father_status: {
        required: "Please select the status of your father",
      },
      mother_status: {
        required: "Please select the status of your mother",
      },
      marriage_status: {
        required: "Please select your marriage status",
      },
    },
    errorElement: "span",
    errorClass: "text-red-800 text-xs",
    highlight: function (element, errorClass) {
      $(element).addClass(errorClass);
    },
    unhighlight: function (element, errorClass) {
      $(element).removeClass(errorClass);
    },
    submitHandler: function (form) {
      // Your code to submit the form goes here
      form.submit();
    },
  });
});
