<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="UTF-8">
 <link href="https://fonts.googleapis.com/css?family=Fondamento" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="style.css">
 <style>
  .viesti_lomake {
    width: 60%;
	border: 1px solid RGB(56,41,12);
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	box-shadow: 10px 10px 5px grey;
  }
  input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    /*background-color: #f8f8f8;*/
    resize: none;
  }
  input[type=submit] {
    width: 40%;
    background-color: RGB(83,76,24); /*#4CAF50*/
    color: white;
	font-size: 18px;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type=submit]:hover {
    background-color: RGB(192,175,56);
	color: RGB(128,0,0);
  }
  .Xfile{
	color:white; 
  }
  a.Xfile:hover{
	color: white;
    text-decoration: none;	 
  }
  #list  p {
    font: arial;
    font-size: 18px;
	width: 700px;
	padding: 10 px;
	border: 1px solid darkred;
    background-color: white;
	box-shadow: 10px 10px 5px grey;
  }
  </style>
</head>
<body>

<div class="header">
  <h1> Steampunk - Sivulla kokeillaan ja demotaan viestien lähettämistä </h1>
</div>

<div class="row">

 <div class="col-3 col-s-3 menu">
  <div class="aside varjo">
    <h2> Uutta </h2>
    <p> Tämän www-sivuston vaihe-vaiheelta ohjeet. </p>
    <h2> Missä ? </h2>
    <p> Tietenkin ICT-open osoittamassa paikassa.</p>
    <h2> Kuinka ?</h2>
    <p> Tietysti koodaamalla sekä soveltamalla.</p>
	<h2 style="color:orange"> Ota yhteyttä</h2>
    <p style="color:orange"> Yhteyden ottamiseen demo-versio.</p>
  </div>
 </div>

 <div class="col-9 col-s-9">
  <h1> Oliko tullut viestejä ? </h1>
  <p>Tämänkin sivun tarkoitus on toimia kuvitteellisen sivuston ylläpitäjälle lähetettävien viestien testauspaikkana.</p>
  
  <p>Kysy tarkemmin ratkaisumallista oppaiden kokoajilta.</p>
  
  <p>&nbsp;</p>
   <!--<p>viestit.txt</p>-->
  <p>&nbsp;</p>
  <div id="list">
   <p><iframe src="viestit.txt" frameborder="0" height="400"
      width="100%"></iframe></p>
  </div>
  
 </div>
</div>

<div class="footer">
  <p><a class="Xfile" href="http://tietokanta.dy.fi/softa13/nevavesi.tuomo/PHP/poista_viestit.php">Edit</a> by player</a>.</p>
</div>

</body>
</html>