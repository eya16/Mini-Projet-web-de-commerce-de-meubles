<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="csss/util.css">
	<link rel="stylesheet" type="text/css" href="csss/main.css">
<!--===============================================================================================-->
<style >
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>
</head>
<body >
<div>
	





	<div class="contact1"  >
		<div class="container-contact1" >
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>
			<div  style="float: left; margin-right: 20px;  width: -100px;">
			<a href="index.html"><img src="wapi_final.png"alt=""/> </a>
		</div>

			<form class="contact1-form validate-form" method="post" action="../core/ajoutreclamation.php">
				<span class="contact1-form-title">
					reclamez  vous
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" id ="name" required name="name" placeholder="nom">
					<span class="shadow-input1"></span>
					<span id='nom'></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text"  id ="email"required name="email" placeholder="Email">
					<span class="shadow-input1"></span>
					<span id='mail'></span>
				
				</div>
				<label class="container">Reclamation
  <input type="radio" checked="checked" name="choix" value="Reclamation">
  <span class="checkmark"></span>
</label>
<label class="container">Suggestion
  <input type="radio" name="choix" value="sugg">
  <span class="checkmark"></span>
</label>


                   
				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text"  required name="subject" placeholder="Sujet">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" required placeholder="Message"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button  id="submit"<button id="submit"  style=" background-color:black; border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;" 
					 class="contact1-form-btn" type="submit" > 
						<span>
							envoyer
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
 <script>
            var formValid = document.getElementById('submit');
           
             
             var email= document.getElementById('email');
            var miss_mail = document.getElementById('mail');
            var user= document.getElementById('name');
            var miss_user = document.getElementById('nom');
            var usernameValid=/^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
            var emailValid= /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i; 
            formValid.addEventListener('click', validation);
            

            function validation(event){
      
             


                 if ((user.validity.valueMissing==false && usernameValid.test(user.value) == false) ){
                    event.preventDefault();
                    miss_user.textContent = 'user name  invalid';
                    miss_user.style.color = 'orange';
                }
                else { miss_user.textContent = '';  }
                 if ((email.validity.valueMissing==false && emailValid.test(email.value) == false) ){
                    event.preventDefault();
                    miss_mail.textContent = 'email  invalid';
                    miss_mail.style.color = 'orange';
                }
                else { miss_mail.textContent = '';  }
                
         
}
</script>
<!--===============================================================================================-->
	

</body>
</html>
