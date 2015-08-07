<!DOCTYPE html>
<html lang="en">
<head>
  <title>PingPong RazorFish</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href=" ">
  <link href="styles.css" rel="stylesheet" type="text/css" />
  <link href="bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <script type="text/javascript" src="jQuery-Autocomplete/scripts/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="jQuery-Autocomplete/scripts/jquery.mockjax.js"></script>
    <script type="text/javascript" src="jQuery-Autocomplete/src/jquery.autocomplete.js"></script>
    <script type="text/javascript" src="jQuery-Autocomplete/src/jquery.autocomplete.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap-datetimepicker.js" charset="UTF-8"></script>
</head>
<body>
  <form  action = "SaveGame.php" method="post">
	<div class="container">
<!-- 			<div class="ui-widget">
			  <label for="tags">Tag programming languages: </label>
			  <input id="tags" size="50">
			</div> -->
	  		<div class="tabs">
			   <div class="tab">
			       <input type="radio" id="tab-1" name="tab-group-1" checked>
			       <label  class="tab1" for="tab-1" >SCORES</label>
			       <div class="content">
						<ul>
							<li class ="row">
								<div class="ui-widget player1 input-list style-1 clearfix ">
									 <input type="text" placeholder="Player 1/ Team1" name="first_player" id="autocomplete">VS
								</div>
								<div class="ui-widget player2 input-list style-1 clearfix ">
									<input type="text" placeholder="Player 2/Team2" name="second_player" id="autocomplete1">
								</div>
							</li>
							<li class = "row">
								<div class="score1 input-list style-1 clearfix " >
									<input type="text" placeholder="Score" style="width:15%" name = "first_score"> VS
								</div>
								<div class="score2 input-list style-1 clearfix " >
									<input type="text" placeholder="Score" style="width:15%" name = "second_score">
								</div>
							</li>
              <li class ="row">
                <div class="date input-list style-1 clearfix">
                  <input  name="start_date" min="2015-01-01"  type="date">
                </div>
                 <div class="time input-list style-1 clearfix">
                  <input  name="start_time"  type="time">
                </div>
              </li>
						<!-- 	<li class ="row">
										<div class = "another-game" style="margin-left:41%">
											Add another game
										</div>
							</li> -->
							<li class ="row">
                <input class ="btn" type="Submit" name = "Submit">
								<!-- <button class ="btn" type="button" name = "Submit" value ="Submit" id = "Submit">Submit</button>	 -->
							</li>
						</ul>	
			       </div> 
			   </div>
			   <div class="tab">
			       <input type="radio" id="tab-2" name="tab-group-1">
			       <label for="tab-2" class="tab2">ANALYTICS</label>
			       
			       <div class="content">
			       </div> 
			   </div>
			</div>
	</div>
      <script>
        var players = [
            { value: 'Praveen Mareedu', data: 'praveen.mareedu@razorfish.com' },
            // ...
            { value: 'David Gogh', data: 'david.gogh@razorfish.com' },
            { value: 'Jacob Reamer', data: 'Jacob.Reamer@razorfish.com' }
        ];
        $('#autocomplete').autocomplete({
            lookup: players,
            onSelect: function (suggestion) {
                // alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
            }
        });
        $('#autocomplete1').autocomplete({
            lookup: players,
            onSelect: function (suggestion) {
                // alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
            }
        });
      </script>
  </form>
</body>
</html>