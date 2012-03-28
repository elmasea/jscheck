<html>
<head>
<title>Kultmedia - Jscheck</title>
<style>
.error{
 color: red;
 font-size: 13px;
 margin-left: 6px;
 }
</style>
</head>
<body>

<h1>Kultmedia - Jscheck</h1>

<h2>Example form</h2>

<form id="example" method="post" action="result.php">

<input autocomplete="off" placeholder="Name" type="text" name="name" id="name" /><span class="error" id="err-name"></span>
<br />
<input autocomplete="off" placeholder="Email" type="text" name="email" id="email" /><span class="error" id="err-email"></span>
<br />


<input type="hidden" name="jscheck" id="jscheck" value="" />

<input type="submit" value="Send" />


</form>


<div class="credits">
Made by <a href="http://www.kultmedia.com" target="blank">Kultmedia.com</a> &copy; 2012
</div>


<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jscheck.js"></script>

<script type="text/javascript" src="formvalidation.js"></script>


	
    
</body>


</html>