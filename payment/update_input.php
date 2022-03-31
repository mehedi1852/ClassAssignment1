<?php

	$payment_id = $_GET["payment_id"];
	$student_id = $_GET["student_id"];
	$amount = $_GET["amount"];
	$date = $_GET["date"];
?>



<h1>Update Record</h1>



<form method=get action=update_result.php>

	<input type=hidden name=payment_id value='<?php echo $payment_id; ?>'> <br>

	Student id: <input type=text name=student_id value='<?php echo $student_id; ?>'>
	<p>
	Amount: <input type=text name=amount value='<?php echo $amount; ?>'>
	<p>
	Date: <input type=date name=date value='<?php echo $date; ?>'>
	<p>
	<input type=submit value=Update>

</form>