<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>@students.bowiestate.edu.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
    <h2>Bowie State University</h2>
		<h2>M&E Bank</h2>
		<div class="imgcontainer">
			<img src="logo.png" alt="Logo" class="logo" width="500" height="400" />
		</div>

		<div id="account-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 mb-3">
						<div class="deposit status">
							<h5>Deposit</h5>
							<h2>$ <span id="current-deposit">00</span></h2>
						</div>
					</div>

					<div class="col-lg-4 mb-3">
						<div class="withdraw status">
							<h5>Withdraw</h5>
							<h2>$ <span id="current-withdraw">00</span></h2>
						</div>
					</div>

					<div class="col-lg-4 mb-3">
						<div class="balance status">
							<h5>Balance</h5>
							<h2>$ <span id="current-balance">1240</span></h2>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="submit-area">
							<h4>Deposit Amount</h4>
							<input
								id="deposit-amount"
								type="text"
								class="form-control"
								placeholder="Enter deposit amount"
							/><br />
							<button id="deposit-btn" class="btn btn-success">Deposit</button>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="submit-area">
							<h4>Withdraw Amount</h4>
							<input
								id="withdraw-amount"
								type="text"
								class="form-control"
								placeholder="Enter withdraw amount"
							/><br />
							<button id="withdraw-btn" class="btn btn-success">
								Withdraw
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>