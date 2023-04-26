<?php include 'header.php';
include 'conn.php';
?>
		<!-- breadcrumb-section -->
		<div class="breadcrumb-section breadcrumb-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center">
						<div class="breadcrumb-text">
							
							<h1>Login page</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end breadcrumb section -->

		<div class="container">
    	<form method="post" action="">
        <div id="div_login">
            <br><h1 align="center">Login</h1>
            <div align="center"><br>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div><br>
            <div align="center">
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div align="center"><br>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
</div>
<?php

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from user_info where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            echo "<br><h3>Log in succesful!</h3>";
        }else{
            echo "<br><h3>Invalid username and password</h3>";
        }

    }

}
?>	
		<?php include 'footer.php'; ?>