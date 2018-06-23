<!DOCTYPE html>
<html lang="en">
<head>
	<title>Simple Calculator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper clear">
		<header class="headeropt clear">
			<h2>Simple Calculator</h2>
		</header>
		<section class="content clear">
			<div class="element">
				<?php 
					if (isset($_POST['submit'])) {
						$num1      = $_POST['num1'];
						$num2      = $_POST['num2'];
						$operation = $_POST['operation'];
						
						if ($num1 == "" || $num2 == "" || $operation == "") {
							echo "<p style='color:red'>Please enter two number !</p>";
						} else {
							?>
								<table class="tblone">
									<tr>
										<td>First Number:</td>
										<td><b><?php echo $num1; ?></b></td>
									</tr>
									<tr>
										<td>Second Number:</td>
										<td><b><?php echo $num2; ?></b></td>
									</tr>
									<tr>
										<td>Result: </td>
										<td>
											<b style='color:green'>
											<?php 
												switch ($operation) {
													case 'add':
														echo $num1 + $num2;
														break;
													case 'sub':
														echo $num1 - $num2;
														break;
													case 'mul':
														echo $num1 * $num2;
														break;
													case 'div':
														echo $num1 / $num2;
														break;		
													default:
														# code...
														break;
												}
											 ?>
											</b>
										</td>
									</tr>
								</table>
							<?php
						}
					}
				 ?>
				 <h2>My Calculator</h2>
				<form action="" method="post">
					<table>
						<tr>
							<td>First Number: </td>
							<td><input type="text" name="num1" placeholder="Please enter first number"></td>
						</tr>
						<tr>
							<td>Second Number: </td>
							<td><input type="text" name="num2" placeholder="Please enter second number"></td>
						</tr>
						<tr>
							<td>Operation: </td>
							<td>
								<input type="radio" name="operation" value="add" checked>Add
								<input type="radio" name="operation" value="sub">Sub
								<input type="radio" name="operation" value="mul">Mul
								<input type="radio" name="operation" value="div">Div
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td>
								<input type="submit" name="submit" value="Calculate">
								<input type="reset" name="reset" value="Reset">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</section>
		<footer class="footeropt clear">
			<p>&copy; Copyright Simple Calculator | Developed By CodesBridge</a></p>
		</footer>
	</div>	
</body>
</html>