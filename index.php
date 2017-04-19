<?php
session_start();
session_destroy();
session_start();

?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="cs.css">
<head>
<script href="ja.js"></script>
</head>
<body background="coding2.jpg" style="background-size:cover;">
<div class="container-fluid bg-info">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
        <span class="label label-warning" id="qid" style="position:absolute; font-size:36px; left:84%; top:37%; text-align:center; color:white;"><b>LOGIN</b></span>
        </div>
	<form style="position:absolute; left:80%; top:45%; text-align:center;" method="post" action="round1.php">
	<fieldset >
          <input type="text" placeholder="UserName Here!" name="name" autocomplete="off" required></input>
	<br/><br/>  <input type="password" id="pword" placeholder="Password Here!" pattern="code123" required autocomplete="off"></input>
	<br/><br/>
	<button type="submit" style="display:inline-block; background:inherit; color:white;">GO</button>	  
</fieldset></form> 
   </div>
<div style="position:absolute; color:white; left:1%; bottom:0%; width:30%">

<h3 style="font-size:32px; position:absolute; top:-48; ">Instructions</h3>
<h4>1.First round consists of 30 questions.</h4>
<h4>2.Duration:30 minutes.</h4>
<h4>3.The Answers will be automatically submitted after 30 minutes.(if not submitted by then).</h4>
<h4>4.Each question carries 1 mark.</h4>
</div>
</div>
</div>
</div>
