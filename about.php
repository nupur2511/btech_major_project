<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ICA Website</title>
    <style>
			@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
	*       {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				font-family: 'Poppins', sans-serif;
			}

			html,body{
				display: grid;
				height: 100%;
				width: 100%;
				place-items: center;
				background: url(bg6.jpg) no-repeat;
				background-size: cover;
				height: 100vh;
			}
			::selection{
				background: #1a75ff;
				color: #fff;
			}
			.navbar{
				position: fixed;
				height: 80px;
				width: 100%;
				top: 0;
				left: 0;
				background: rgba(0,0,0,0.4);
			}
			.navbar .logo{
				width: 500px;
				height: 90px;
				padding: 20px 100px;
			}
			.navbar ul{
				float: right;
				margin-right: 20px;
			}
			.navbar ul li{
				list-style: none;
				margin: 0 8px;
				display: inline-block;
				line-height: 80px;
			}
			.navbar ul li a{
				font-size: 20px;
				font-family: 'Roboto', sans-serif;
				color: white;
				padding: 6px 13px;
				text-decoration: none;
				transition: .4s;
			}
			.navbar ul li a.active,
			.navbar ul li a:hover{
				background: rgb(55, 2, 153);
				border-radius: 2px;
			}
			.wrapper{
				overflow: hidden;
				max-width: 900px; 
				/*background: #fff;*/
				padding: 30px;
				/*border-radius: 15px;
				box-shadow: 0px 15px 20px rgba(0,0,0,0.19);*/
				color: #fff;
			}
			.wrapper .title-text{
				display: flex;
				width: 200%;
			}
			.wrapper .title{
				width: 50%;
				font-size: 35px;
				font-weight: 600;
				text-align: center;
				transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
			}
			.wrapper .slide-controls{
				position: relative;
				display: flex;
				height: 50px;
				width: 100%;
				overflow: hidden;
				margin: 30px 0 10px 0;
				justify-content: space-between;
				border: 1px solid lightgrey;
				border-radius: 15px;
			}
			.slide-controls .slide{
				height: 100%;
				width: 100%;
				color: #fff;
				font-size: 18px;
				font-weight: 500;
				text-align: center;
				line-height: 48px;
				cursor: pointer;
				z-index: 1;
				transition: all 0.6s ease;
			}
			.slide-controls label.signup{
				color: #000;
			}
			.slide-controls .slider-tab{
				position: absolute;
				height: 100%;
				width: 50%;
				left: 0;
				z-index: 0;
				border-radius: 15px;
				background: -webkit-linear-gradient(left,#003366,#004080,#0059b3
				, #0073e6);
				transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
			}
			input[type="radio"]{
				display: none;
			}
			#signup:checked ~ .slider-tab{
				left: 50%;
			}
			#signup:checked ~ label.signup{
				color: #fff;
				cursor: default;
				user-select: none;
			}
			#signup:checked ~ label.login{
				color: #000;
			}
			#login:checked ~ label.signup{
				color: #000;
			}
			#login:checked ~ label.login{
				cursor: default;
				user-select: none;
			}
			.wrapper .form-container{
				width: 100%;
				overflow: hidden;
			}
			.form-container .form-inner{
				display: flex;
				width: 200%;
			}
			.form-container .form-inner form{
				width: 50%;
				transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
			}
			.form-inner form .field{
				height: 50px;
				width: 100%;
				margin-top: 20px;
			}
			.form-inner form .field input{
				height: 100%;
				width: 100%;
				outline: none;
				padding-left: 15px;
				border-radius: 15px;
				border: 1px solid lightgrey;
				border-bottom-width: 2px;
				font-size: 17px;
				transition: all 0.3s ease;
			}
			.form-inner form .field input:focus{
				border-color: #1a75ff;
				/* box-shadow: inset 0 0 3px #fb6aae; */
			}
			.form-inner form .field input::placeholder{
				color: #999;
				transition: all 0.3s ease;
			}
			form .field input:focus::placeholder{
				color: #1a75ff;
			}
			.form-inner form .pass-link{
				margin-top: 5px;
			}
			.form-inner form .signup-link{
				text-align: center;
				margin-top: 30px;
			}
			.form-inner form .pass-link a,
			.form-inner form .signup-link a{
				color: #1a75ff;
				text-decoration: none;
			}
			.form-inner form .pass-link a:hover,
			.form-inner form .signup-link a:hover{
				text-decoration: underline;
			}
			form .btn{
				height: 50px;
				width: 100%;
				border-radius: 15px;
				position: relative;
				overflow: hidden;
			}
			form .btn .btn-layer{
				height: 100%;
				width: 300%;
				position: absolute;
				left: -100%;
				background: -webkit-linear-gradient(right,#003366,#004080,#0059b3
				, #0073e6);
				border-radius: 15px;
				transition: all 0.4s ease;;
			}
			form .btn:hover .btn-layer{
				left: 0;
			}
			form .btn input[type="submit"]{
				height: 100%;
				width: 100%;
				z-index: 1;
				position: relative;
				background: none;
				border: none;
				color: #fff;
				padding-left: 0;
				border-radius: 15px;
				font-size: 20px;
				font-weight: 500;
				cursor: pointer;
				}
				#section1 h1 {
				color: rgb(247, 244, 244);
				letter-spacing: 0.05cm;
				font-size: 35px;
				font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
				margin-left: 20px;
				padding-top: 50px;
				}
				#section1 p {
				font-size: 20px;
				font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
				margin-left: 20px;
				padding-top: 0px;
				}
				#section2{
				min-height:20px;
				text-align: left;
				color: rgb(250, 250, 250);
				}
				#section2 h1 {
				color: rgb(247, 244, 244);
				letter-spacing: 0.05cm;
				font-size: 35px;
				font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
				margin-left: 20px;
				padding-top: 20px;
				}
				#section2 p {
				font-size: 20px;
				font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
				margin-left: 20px;
				padding-top: 0px;
				}
				#section3{
				min-height: 600px;
				text-align: left;
				color: rgb(250, 250, 250);
				}
				#section3 h1 {
				color: rgb(247, 244, 244);
				letter-spacing: 0.05cm;
				font-size: 35px;
				font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
				margin-left: 20px;
				padding-top: 100px;	
				}
				#section3 p {
				font-size: 20px;
				font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
				margin-left: 20px;
				padding-top: 50px;
				}
				#section4{
				min-height: 600px;
				text-align: left;
				color: rgb(250, 250, 250);
				}
				#section5{
				min-height: 700px;
				text-align: center;
				}
				.center h1{
				color: white;
				font-size: 60px;
				width: 900px;
				font-weight: bold;
				text-align: center;
				}
				.center h2{
				color: #ffffff;
				font-size: 30px;
				font-weight: bold;
				margin-top: 50px;
				width: 885px;
				text-align: center;
				}
				#section1{
				min-height:70px;
				text-align: left;
				color: rgb(250, 250, 250);
				}
			</style>
        <meta charset="UTF-8">
        <!--<link rel="stylesheet" href="style.css">-->
    </head>
    <body>
        <div class="wrapper">
            <nav class="navbar">
                <img class="logo" src="logo.PNG" alt="logo.PNG">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a class="active" href="about.php">About</a></li>
                    <li><a href="http://127.0.0.1:5000/prediction.html">Prediction</a></li>
                    <li><a href="index.php">Login</a></li>
                </ul>
            </nav>
            <section id="section3">
                <div class="container">
                    <h1>ABOUT</h1>
                    <p>
                        In India, there has been a drastic pattern of crime observed in the past few years giving rise to a threat to the security of common man. Considering this perilous situation, main aim was to study these crime patterns and realise the changes in the overall crime ratio based on the demographic/population ratios which shall ease the process of reaching the future crime-cases prediction. Along with this, predictions are made on the maximum criminal activities that need to be controlled and the amount of security measures that need to be taken to decelerate/curb the occurrence of any mild to treacherous level criminal activities.
                        This website depicts the overall scenerio of crime pattern analysis done with the help of the most trending field of computer science namely Machine Learning. It includes the pictorial study of crime patterns using ML algorithm, for visualizations and predictions based on the data acquired from the Indian Government.
                    </p>
                    <p>ICA's Management Team<br>
                        <pre style="font-size: 20px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                            Gayatri Kolte                       gayatriskolte@gmail.com
                            Nupur Patel                         nupurrbpatel@gmail.com

                        </pre>
                     </p>
                </div>
            </section>
        </div>
    </body>
</html>
