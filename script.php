<?php


?>
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h3>JavaScript Test</h3> </br>

<div class="row form-group">
      <label class="control-label col-sm-2" for="email">Date:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="userInput" placeholder="Enter date" name="Date">
      </div>
</div>
<div class="row form-group">
	<div class="col-sm-2">

	</div>
	<div class="col-sm-4">
		<button class="btn btn-primary" onclick="formatDate('12/31/2014')">Change Date</button>
	</div>
</div>
<div class="row form-group">
	<div class="col-sm-2">

	</div>
	<div class="col-xs-4">
		<button class="btn btn-primary" onclick="createCheckDigit('55555')">Check Membership</button>
	</div>
</div>
<div class="row">
	<p id="result"></p>
</div>
<div class="row">
	<p id="personDetails" onmouseover="mouseOverFunction()" onmouseout="mouseOutFunction()">Move Your Mouse over me</p>
	<p id="testContent" style="display:none;"> Welcome to JavaScript </p>
</div>
</div>

<script>

function formatDate(userDate) {
  // format from M/D/YYYY to YYYYMMDD
	var userInput=document.getElementById("userInput").value;
	var newDate= new Date(userInput);
	y=newDate.getFullYear();
	m=newDate.getMonth()+1;
	d=newDate.getDate();
	newDate=""+y+m+d;
	document.getElementById("result").innerHTML=newDate;
	//testing object
	var person = {firstName: "David",
				lastName: "Bakes",
				dateOfBirth:"25/11/2000"
	};
	
	document.getElementById("personDetails").innerHTML=person.firstName;
	
	
	//testng object ends
console.log(formatDate("12/31/2014"));
	return ("20141231");
}
function mouseOverFunction()
{
	document.getElementById("testContent").style.display="block";
}
function mouseOutFunction()
{
	document.getElementById("testContent").style.display="none";
}
function createCheckDigit(membershipId) {
  // Write the code that goes here.
var str=membershipId.trim();
var result=parseInt(str);
while (result>9)
{	
	var sum=0;
	var str=""+result;
	for(var i=0; i<str.length ;i++)
	{
		var ch=str.charAt(i);
		ch=parseInt(ch);
		sum=sum+ch;
	}
	result=sum;
}

document.getElementById("result").innerHTML=result;
  return result;
}


</script>
</body>
</html>