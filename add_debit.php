<!DOCTYPE html>
<html>
    <head>
	<title>Add Debit</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		body {
			font-family: 'Poppins', sans-serif; 
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background-color: #F0F8FF;
			position: relative; 
			overflow-y:scroll; 
		}
        form {
		width: 35%;
		max-width: 600px;
		margin: 0 auto;
		border: 2px solid #ccc;
		padding: 20px;
		display: block;
		border-radius: 10px;
		background-color: #DCDCDC;
		font-size: 16px;
	}

	h2 {
        position: absolute;
        top: 3%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        justify-content: center;  
        font-size: 30px;
		text-decoration: underline; 
		font-size: 32px; 
		text-align: center; 
		justify-content: center;
		color: #000080;
  		justify-content: center;
  		align-items: center;

}
	
/* this part to make the form and h2 suitable for small screens*/
/*from 320px to 376px screen size*/ 
@media (min-width: 320px) and (max-width: 376px) {
	form {
		width: 60%;
		max-width: 800px;
		max-height: 550px; 
		margin: 0 auto;
		border: 2px solid #ccc;
		padding: 20px;
		display: block;
		border-radius: 10px;
		background-color: #DCDCDC;
		font-size: 10px;
		padding-top: 40px; 
		justify-content: left;
	}

	h2 {
	position: absolute;
	top: 4%; 
	left: 50%;
	transform: translate(-50%, -50%);
	text-align: center;
	justify-content: center;
	font-size: 25px;
	text-decoration: underline;
	justify-content: center;
	align-items: center;
	padding-bottom: 40px;
}
}

/*from 414px screen size*/ 
@media (width: 414px){ 
	form {
		width: 60%;
		max-width: 800px;
		max-height: 550px; 
		margin: 0 auto;
		border: 2px solid #ccc;
		padding: 20px;
		display: block;
		border-radius: 10px;
		background-color: #DCDCDC;
		font-size: 10px;
		padding-top: 40px; 
		justify-content: left;
	}

	h2 {
	position: absolute;
	top: 15%; 
	left: 50%;
	transform: translate(-50%, -50%);
	text-align: center;
	justify-content: center;
	font-size: 25px;
	text-decoration: underline;
	justify-content: center;
	align-items: center;
	padding-bottom: 40px;
}
}

/*from 390px screen size*/ 
@media (width: 390px){ 
	form {
		width: 60%;
		max-width: 800px;
		max-height: 550px; 
		margin: 0 auto;
		border: 2px solid #ccc;
		padding: 20px;
		display: block;
		border-radius: 10px;
		background-color: #DCDCDC;
		font-size: 10px;
		padding-top: 40px; 
		justify-content: left;
	}

	h2 {
	position: absolute;
	top: 12%; 
	left: 50%;
	transform: translate(-50%, -50%);
	text-align: center;
	justify-content: center;
	font-size: 25px;
	text-decoration: underline;
	justify-content: center;
	align-items: center;
	padding-bottom: 40px;
}
}




	label {
		display: block;
		margin-bottom: 10px;
		font-size: 16px; 
		font-weight: bold;
	}

	input[type="text"],
	input[type="number"],
	input[type="date"],
	textarea {
		padding: 10px;
		border-radius: 5px;
		margin-bottom: 20px;
		width: 95%;
	}

	input[type="submit"] {
		background-color: #000080;
		color: white;
		padding: 12px 20px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		font-size: 16px;
		margin-top: 10px;
		width: 100%;
		transition: 0.3s ease;
		font-size: 20px; 
	}

	input[type="submit"]:hover {	
		background-color: #4169E1;
		color: #000000; 
	}

	.error {
		color: red;
		margin-bottom: 10px;
		font-size: 16px;
		font-weight: bold;
		text-align: center;
	}
    </style>

    </head> 

    <body> 


        <h2>Add Debit</h2>

<?php
session_start();
if (!isset($_SESSION["user_id"])) {
	header("Location: login.php");
	exit();
}
if (isset($_SESSION["debit-error"])) {
    echo "<div class='error'>" . $_SESSION["debit-error"] . "</div>";
    unset($_SESSION["debit-error"]);
}
?>

        <form action="add_debit_handler.php" method="post">
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" required>
    </div>
    <div>
        <label for="amount">Amount:</label>
        <input type="number" name="amount" required>
    </div>
    <div>
        <label for="payment_installment">Payment Installment:</label>
        <input type="number" name="payment_installment" required>
    </div>
    <div>
        <label for="final_date">Final Date:</label>
        <input type="date" name="final_date" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" required></textarea>
    </div>
    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
    <input type="submit" value="Add Debit">
        </form>
    </body>
</html>