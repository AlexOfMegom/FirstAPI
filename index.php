
<html>
	<head>
	<meta charset="utf-8" />
		<title>API Example</title>
		<style type="text/css">
			body{
				text-align: center;
			}
			#container{
				width: 200px;
				position:absolute;
				top:50px;
				left:50%;
				margin-left:-100px;
			}
			div{
				margin-top: 10px;
			}
			select{
				width: 90%;
			}
		</style>
	</head>
	<body>



	<?php
	

	?>
		<div id="container">
			<h2>API Form POST</h2>
			<form method="POST" action="api/client" accept-charset="utf-8">
				<div>
				<!-- было тут -->

					<label for="name">ФИО:</label>
					<input type="text" name="name" id="name" placeholder="ФИО" required/> 
				</div>

				<!-- <div>
			

					<label for="age">Age:</label>
					<input type="text" name="age" id="age" placeholder="Age"/>
				</div> -->
				<!-- <div>

			
					<label for="gender">Gender:</label>
					<select name="gender" id="gender">
						<option value="M">Male</option>
						<option value="F">Female</option>
					</select>
				</div> -->

				<div>
					<label for="company">Компания:</label>
					<input type="text"  name="company" placeholder="Компания" >
				</div>

				<div>
					<label for="telnumber">Телефон:</label>
					<input type="text" name="telnumber" placeholder="Телефон" required >
				</div>

				<div>
					<label for="email">Email:</label>
					<input type="email" name="email" placeholder="Email" required >
				</div>

				<div>
					<label for="brdate">Дата рождения:</label>
					<input type="date"  placeholder="Дата рождения " name="brdate" >
				</div>

				<div>
					<label for="image">Фото:</label>
					<input type="image"  placeholder="Фото" name="nameUser" >
				</div>

				<div>
					<input type="submit" value="Send" name="btn"  /> 
				</div>
			</form>
		</div>

		<?php 

	echo $_GET['q'];

// $conn =  new PDO("mysql:host=127.0.0.1:3307;dbname=api, charset=utf8;", $DB_USER, $DB_PASS);
		// $conn = new PDO("mysql:host=127.0.0.1:3307;dbname=api; charset=utf8", "root", "root");
		// $sql = "SELECT * FROM client";
		// $result = $conn->query($sql);
		
		
		// while($row = $result->fetch()){
		// 	// if ($row['id']!=0){
		// 		echo json_encode($row);echo"<br>";
		// 	// }
		// }
		
		?>

		<!-- <script src="main.js"> -->
		<script src="main.js" >

			// console.log(123);
	// 		async function getVelue(){
    // // let res = await fetch('http://pdo:8081/API_Restful/api/clitnt/1');
    // let res = await fetch('https://api.github.com/repos/javascript-tutorial/en.javascript.info/commits');
    // let posts  = await res.json();

    // console.log(posts);
    // console.log(123);
// }


		</script>
	</body>
</html>



<!-- <form  method="POST">
					<p><input type="text" class="form-control" placeholder="ФИО" name="nameUser" required></p> +
					<p><input type="text" class="form-control" placeholder="Компания" name="nameUser"></p>+
					<p><input type="number" class="form-control" placeholder="Телефон" name="nameUser" required></p>+
					<p><input type="email" class="form-control" placeholder="Email" name="nameUser" required></p>+
					<p><input type="date" class="form-control" placeholder="Дата рождения " name="nameUser" ></p>+
					<p><input type="image" class="form-control" placeholder="Фото" name="nameUser" ></p>
					
					<p><input type="submit" name="add" class="btn btn-info btn-block" value="Сохранить"></p>
				</form> -->