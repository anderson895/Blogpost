$('#show-register').click(function(e) {
  e.preventDefault(); // Prevent the default link behavior
  $('#login-section').addClass('d-none'); // Hide the login section
  $('#register-section').removeClass('d-none'); // Show the registration section
});

// When "Already have an account?" link is clicked
$('#show-login').click(function(e) {
  e.preventDefault(); // Prevent the default link behavior
  $('#register-section').addClass('d-none'); // Hide the registration section
  $('#login-section').removeClass('d-none'); // Show the login section
});

$("#frmLogin").submit(function (e) {
  e.preventDefault();
  
  $('#btnLogin').prop('disabled', true); // Disable the login button

  var formData = $(this).serializeArray(); 
  formData.push({ name: 'requestType', value: 'Login' });
  var serializedData = $.param(formData);

  // Perform the AJAX request
  $.ajax({
    type: "POST",
    url: "backend/endpoints/controller.php",
    data: serializedData,
    dataType: 'json',
    success: function (response) {

      console.log(response);

      if (response.status === "success") {
        alertify.success('Login Successful');

        setTimeout(function () {
          window.location.href = "customer/index.php"; 
        }, 1000);

      } else {
        $('#btnLogin').prop('disabled', false); // Enable the login button
        alertify.error(response.message);
      }
    },
    error: function(jqXHR, textStatus, errorThrown) {
      $('#btnLogin').prop('disabled', false); // Enable the login button
      alertify.error('An error occurred: ' + errorThrown);
    }
  });
});

$("#frmRegister").submit(function (e) {
  e.preventDefault();
  
  $('#btnRegister').prop('disabled', true); // Disable the register button

  var formData = $(this).serializeArray(); 
  formData.push({ name: 'requestType', value: 'Registration' });
  var serializedData = $.param(formData);

  // Perform the AJAX request
  $.ajax({
    type: "POST",
    url: "backend/endpoints/controller.php",
    data: serializedData,
    dataType: 'json',
    success: function (response) {

      console.log(response);

      if (response.status === "success") {
        alertify.success('Registration Successful');

        setTimeout(function () {
          window.location.href = "index.html"; 
        }, 1000);

      } else {
        $('#btnRegister').prop('disabled', false); // Enable the register button
        alertify.error(response.message);
      }
    },
    error: function(jqXHR, textStatus, errorThrown) {
      $('#btnRegister').prop('disabled', false); // Enable the register button
      alertify.error('An error occurred: ' + errorThrown);
    }
  });
});
