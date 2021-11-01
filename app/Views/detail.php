<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
   <style>
       @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");

*{
	margin: 0;
	padding: 0;
}

body{
	font-family: Roboto, sans-serif;
}

.image{
	height: 100vh;
	position: relative;
	width: 100%;
	overflow: hidden;
}

.image img{
	height: 100vh;
	width: 100vw;
	z-index: -1;
	object-fit: cover;
	filter: saturate(140%);
	position: fixed;
}

.image .overlay{
	z-index: 1;
	height: 100%;
	position: absolute;
	width: 100%;
	background: linear-gradient(transparent,rgba(19,21,21,0.2), rgba(19,21,21,0.4),rgba(19,21,21,0.6), rgba(19, 21, 21, 0.8),rgba(19, 21, 21, 0.9),rgba(19, 21, 21, 0.980), #171A21);
	display: flex;
	flex-direction: column;
	justify-content: flex-end;
	flex-wrap: wrap;
	flex-grow: 1;
	padding-left: 50px;
	padding-right: 50px;
}

.image .overlay h1{
	font-size: 15vmin;
	width: 60%;
	color: rgba(255,250,251, 0.9);
	padding-bottom: 30px;
	font-style: italic;
}

.image .overlay h4{
	font-size: 1em;
	margin-bottom: 50px;
	color: rgba(255,250,251, 0.6);
	font-style: italic;
}

.afterImage{
	height: auto;
	min-height: 100vh;
	background:#171A21;
	width: 100%;
	display: flex;
}

.afterImage .left{
	height: auto;
	display: flex;
	flex-direction: column;
	flex: 2;
	padding: 50px;
	padding-top: 150px;
}

.afterImage .left h3{
	font-size: 1.5em;
	margin-bottom: 20px;
	color: rgba(255,250,251, 0.9);
	font-weight: 200;
	text-transform: uppercase;
	letter-spacing: 2px;
}

.afterImage .left p{
	font-size: 1em;
	margin-bottom: 20px;
	color: rgba(255,250,251, 0.6);
}

.afterImage .left p:first-letter{
	color: #339989;
	font-size: 1.2em;
}

.afterImage .right{
	height: 400px;
	display: flex;
	flex-direction: column;
	flex: 1;
	padding: 50px;

	background: rgba(29,32,32,0.4);
	margin: 40px;
	border-radius: 10px/10px;
}

@media(max-width: 800px){
	.afterImage{
		flex-direction: column
	}
}
   </style>

<div class="main">
	<div class="image">
		<img src="https://cdn130.picsart.com/307561283104201.png" />
		<div class="overlay">
			<h1><?= $movie['title']; ?></h1>
			<h4><?= $movie['created_at'];  ?></h4>
		</div>
	</div>
	<div class="afterImage">
		<div class="left">
			<h3>Description</h3>
			<p><?= $movie['shortdesc']; ?>
</p>
		</div>
		<div class="right" style="margin-bottom:400px;">
        <img src="<?= base_url('img/'.$movie['thumb']);  ?>" style="height:700px;">
		</div>
	</div>

</div>
</body>
</html>