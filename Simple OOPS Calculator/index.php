<!DOCTYPE html>
<html lang="en">
<head>
	<title>Simple Calculator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div style="padding-top: 150px;">
	<div class="wrapper clear">
		<header class="headeropt clear">
			<h2>Simple Calculator</h2>
		</header>
		<section class="content clear">
			<div class="element">
				<?php 
					class Calculator{
						public $num1;
						public $num2;
						public $operation;

						public function getValue($num1, $num2, $operation){
							$this->num1      = $num1;
							$this->num2      = $num2;
							$this->operation = $operation;
						}

						public function add(){
							return ($this->num1 + $this->num2);
						}

						public function sub(){
							return ($this->num1 - $this->num2);
						}

						public function mul(){
							return ($this->num1 * $this->num2);
						}

						public function div(){
							return ($this->num1 / $this->num2);
						}
					}
				 ?>
				<?php 
					if (isset($_POST['submit'])) {
						$num1      = $_POST['num1'];
						$num2      = $_POST['num2'];
						$operation = $_POST['operation'];
						
						if ($num1 == "" || $num2 == "" || $operation == "") {
							echo "<p style='color:red'>Please enter two number !</p>";
						} else {
							$cal = new Calculator();
							$cal->getValue($num1, $num2, $operation);
							?>
								<table class="tblone">
									<tr>
										<td>First Number:</td>
										<td><b><?php echo $cal->num1; ?></b></td>
									</tr>
									<tr>
										<td>Second Number:</td>
										<td><b><?php echo $cal->num2; ?></b></td>
									</tr>
									<tr>
										<td>Result: </td>
										<td>
											<b style='color:green'>
											<?php 
												switch ($operation) {
													case 'add':
														echo $cal->add();
														break;
													case 'sub':
														echo $cal->sub();
														break;
													case 'mul':
														echo $cal->mul();
														break;
													case 'div':
														echo $cal->div();
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
			<p>&copy; Copyright Simple Calculator | Developed By Codesbridge</a></p>
		</footer>
	</div>	
	</div>
</body>
</html>