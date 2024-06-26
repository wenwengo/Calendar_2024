<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Weekly Challenge</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- days sourced from: https://nationaldaycalendar.com/february/ -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo&family=Roboto:wght@900&display=swap" rel="stylesheet">

<div id="title" class="center">
	<h1>FEB 2022</h1>
	<p>Holidays and Daily Observances in the United States</a>
</div>

<div class="calendar-frame center">
	<div class="day-frame placeholder"></div>
	<div class="day-frame placeholder"></div>
	<div class="day-frame center real" id='one'>
		<h2 class="day-number">1</h2>
		<div class="day-label center">Dark Chocolate Day</div>
	</div>
	<div class="day-frame center real" id='two'>
		<h2 class="day-number">2</h2>
		<div class="day-label center">Groundhog Day</div>
	</div>
	<div class="day-frame center real" id='three'>
		<h2 class="day-number">3</h2>
		<div class="day-label center">Carrot Cake Day</div>
	</div>
	<div class="day-frame center real" id="four">
		<h2 class="day-number">4</h2>
		<div class="day-label center">Wear Red Day</div>
	</div>
	<div class="day-frame center real" id='five'>
		<h2 class="day-number">5</h2>
		<div class="day-label center">Weatherperson's Day</div>
	</div>
	<div class="day-frame center real" id='six'>
		<h2 class="day-number">6</h2>
		<div class="day-label center">Chopsticks Day</div>
	</div>
	<div class="day-frame center real" id='seven'>
		<h2 class="day-number">7</h2>
		<div class="day-label center">Periodic Table Day</div>
	</div>
	<div class="day-frame center real" id='eight'>
		<h2 class="day-number">8</h2>
		<div class="day-label center">Kite Flying Day</div>
	</div>
	<div class="day-frame center real" id='nine'>
		<h2 class="day-number">9</h2>
		<div class="day-label center">Pizza Day</div>
	</div>
	<div class="day-frame center real" id='ten'>
		<h2 class="day-number">10</h2>
		<div class="day-label center">Umbrella Day</div>
	</div>
	<div class="day-frame center real" id='eleven'>
		<h2 class="day-number">11</h2>
		<div class="day-label center">Inventor's Day</div>
	</div>
	<div class="day-frame center real" id='twelve'>
		<h2 class="day-number">12</h2>
		<div class="day-label center">Global Movie Day</div>
	</div>
	<div class="day-frame center real" id='thirteen'>
		<h2 class="day-number">13</h2>
		<div class="day-label center">Tortellini Day</div>
	</div>
	<div class="day-frame center real" id='fourteen'>
		<h2 class="day-number">14</h2>
		<div class="day-label center">Valentine's Day</div>
	</div>
	<div class="day-frame center real" id='fifteen'>
		<h2 class="day-number">15</h2>
		<div class="day-label center">Gumdrop Day</div>
	</div>
	<div class="day-frame center real" id='sixteen'>
		<h2 class="day-number">16</h2>
		<div class="day-label center">Do a Grouch a Favor</div>
	</div>
	<div class="day-frame center real" id='seventeen'>
		<h2 class="day-number">17</h2>
		<div class="day-label center">Cabbage Day</div>
	</div>
	<div class="day-frame center real" id='eighteen'>
		<h2 class="day-number">18</h2>
		<div class="day-label center">Battery Day</div>
	</div>
	<div class="day-frame center real" id='nineteen'>
		<h2 class="day-number">19</h2>
		<div class="day-label center">Chocolate Mint Day</div>
	</div>
	<div class="day-frame center real" id='twenty'>
		<h2 class="day-number">20</h2>
		<div class="day-label center">Love Your Pet Day</div>
	</div>
	<div class="day-frame center real" id='twenty-one'>
		<h2 class="day-number">21</h2>
		<div class="day-label center">President's Day</div>
	</div>
	<div class="day-frame center real" id='twenty-two'>
		<h2 class="day-number">22</h2>
		<div class="day-label center">Sweet Potato Day</div>
	</div>
	<div class="day-frame center real" id='twenty-three'>
		<h2 class="day-number">23</h2>
		<div class="day-label center">Tile Day</div>
	</div>
	<div class="day-frame center real" id='twenty-four'>
		<h2 class="day-number">24</h2>
		<div class="day-label center">Toast Day</div>
	</div>
	<div class="day-frame center real" id='twenty-five'>
		<h2 class="day-number">25</h2>
		<div class="day-label center">Clam Chowder Day</div>
	</div>
	<div class="day-frame center real" id='twenty-six'>
		<h2 class="day-number">26</h2>
		<div class="day-label center">Pistachio Day</div>
	</div>
	<div class="day-frame center real" id='twenty-seven'>
		<h2 class="day-number">27</h2>
		<div class="day-label center">Polar Bear Day</div>
	</div>
	<div class="day-frame center real" id='twenty-eight'>
		<h2 class="day-number">28</h2>
		<div class="day-label center">Tooth Fairy Day</div>
	</div>
	<div class="day-frame center real" id='twenty-nine'>
		<h2 class="day-number">29</h2>
		<div class="day-label center">Tooth Fairy Day</div>
	</div>
	<div class="day-frame center real" id='thirty'>
		<h2 class="day-number">30</h2>
		<div class="day-label center">Tooth Fairy Day</div>
	</div>
	<div class="day-frame center real" id='thirty-one'>
		<h2 class="day-number">31</h2>
		<div class="day-label center">Tooth Fairy Day</div>
	</div>
	<div class="day-frame placeholder"></div>
	<div class="day-frame placeholder"></div>
	<div class="day-frame placeholder"></div>
	<div class="day-frame placeholder"></div>
	<div class="day-frame placeholder"></div>
</div>
<!-- partial -->
  
</body>
</html>
