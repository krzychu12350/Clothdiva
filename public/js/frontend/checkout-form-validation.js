$(function() {

  $("form[name='checkout']").validate({
 
    rules: {
   
      fname: "required",
      lame: "required",
      phone: "required",
      email: {
        required: true,
        email: true
      },
      state: "required",
      street: "required",
      apartment_number: "required",
      postcode: "required",
      city: "required",
      country: "required",
  
    },
    
    messages: {
      fname: "Please enter your first name",
      lname: "Please enter your last name",
      phone: "Please enter your mobile phone",
      email: "Please enter your email",
      state: "Please enter your state",
      street: "Please enter your street",
      apartment_number: "Please enter your apartment number",
      postcode: "Please enter your post code",
      city: "Please enter your city",
      country: "Please enter your country",
    },
  
    submitHandler: function(form) {
      form.submit();
    }
  });
});

$(function() {
    $("form[name='login']").validate({
 
      rules: {
            email: {
                required: true,
             
                email: true,
                minlength: 5
            },
            password: {
                required: true,
                minlength: 3
            }
      },
    
      messages: {

        email: "Please enter your email",
        password: "Please enter your password",

      },
  
      submitHandler: function(form) {
        form.submit();
      }
    });
  });


  $(function() {
    $("form[name='register']").validate({
 
      rules: {

        name: {
            required: true,
            minlength: 5
        },
        surname: {
            required: true,
            minlength: 5
        },
        mobile:{
            required: true,
            minlength: 9
        },
        login:{
            required: true,
            minlength: 4
        },
        email:{
            required: true,
            minlength: 4
        },
        password:{
            required: true,
            minlength: 8
        },
        password_confirm:{
            required: true,
            minlength: 8
        },

      },
    
      messages: {
          
        name: "Please enter your name",
        surname: "Please enter your surname",
        mobile: "Please enter your mobile",
        login: "Please enter your login",
        email: "Please enter your email",
        password: "Please enter your password",
        password_confirm: "Please enter password once again"

      },
  
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
