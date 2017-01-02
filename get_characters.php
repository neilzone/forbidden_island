<?php
echo "<html>
<head>
<title>Forbidden Island characters</title>
<style>
body {
	background-color: linen;
}
p {
font-family: HelveticaNeue-Light, Helvetica Neue Light, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;
font-size: 1.5em;
#line-height: 2.5em;
margin: 1em 0;
}
.holder {
	background-color: linen;
	display: inline-block;
	text-align: center;
	width: 100%;
	height: 100%;
}
.Pilot {
	background-color: blue;
	color: white;
	}
.Messenger {
	background-color: gray;
	color: white;
	}
.Diver {
	background-color: black;
	color: white;
	}
.Engineer {
	background-color: red;
	color: white;
	}
.Explorer {
	background-color: green;
	color: white;
	}
.Navigator {
	background-color: yellow;
	}
.starter {
	font-weight: bold;
	}	
.error {
	text-align:center;
	}
</style>
</head>
<meta name=\"viewport\" content=\"width=device-width\">
<body>
";

#define the array to hold the player_names

$player_names = array();


#see what has been passed by the form and, if anything, add that to the array.


if (!empty($_POST['player_1'])) {
	$player_names[] = $_POST['player_1'];
}

if (!empty($_POST['player_2'])) {
	$player_names[] = $_POST['player_2'];
}

if (!empty($_POST['player_3'])) {
	$player_names[] = $_POST['player_3'];
}

if (!empty($_POST['player_4'])) {
	$player_names[] = $_POST['player_4'];
}

if (!empty($_POST['player_5'])) {
	$player_names[] = $_POST['player_5'];
}

if (!empty($_POST['player_6'])) {
	$player_names[] = $_POST['player_6'];
}

#number of players

$number_of_players = count($player_names);


if ($number_of_players == 0) {
	echo "<div class=\"error\">";
	echo "<p>You have to put some player names in for this to work!</p><p> <a href=\"./\">Try again!</a></p>";
	echo "</div>";
	die;
}

#this file will take the names submitted to it, work out how many and then give character names and say who starts


#here is the list of characters
$characters = array("Pilot", "Messenger", "Diver", "Engineer", "Explorer","Navigator");


#mix up the character array

shuffle($characters);


#assign characters to players

$i = 0;

echo "<div class=\"holder\">";

while ($i < ($number_of_players)) {
	echo "<div class=\"".$characters[$i]."\">";
	echo "<p>$player_names[$i] is " . $characters[$i] . "</p>";
	echo "</div>";
	$i = $i + 1;
}

#select player from array

$starting_player = array_rand($player_names, 1);

echo "<div>";
echo "<p class=\"starter\">".$player_names[$starting_player]." starts</p>";
echo "</div>";

echo "<div>";
echo "<p class=\"again\"><a href=\"./\">Forget all names and start again</a></p>";
echo "</div>";

echo "</div>";

echo "
<!--Copyright (c) 2015, Neil Brown
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.-->

";
?>
