<html>
    <head>
        <title>Registration Page</title>
</head>
<body>

<style>
    .container{
        border:1px solid black;
        positon:relative;
        padding:20px;
        align:center;
    }
    </style>
    <div class="container">
        <form>
            <center>
            <h2>Registration Page</h2>
            <p>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name">
			</p>			
			
            <p>
				<label for="email">Email:</label>
				<input type="email" name="email" id="email">
			</p>


            <p>
				<label for="phoneno">Phone No:</label>
				<input type="text" name="phoneno" id="phoneno">
			</p>

            <p>
				<label for="password">password:</label>
				<input type="password" name="password" id="password">
			</p>	

            <a href="http://localhost/php/loginandsignup/login.php">
                <button>Submit</button>
           </a>
</center>		
			
</form>

</div>
</body>
</html>
