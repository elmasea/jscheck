<html>
<head>
<title>Kultmedia - Jscheck</title>
<style>
.error{
 color: red;
 }

.correct{
 color: green;
 }


</style>
</head>
<body>

<?

if ($_POST['jscheck'] == "yes"){
echo "Javascript is <span class=\"correct\">ON</span>
<br />
Here are the submitted info:<br /><br />
<strong>Name:</strong> $_POST[name]<br />
<strong>Email address:</strong> $_POST[email]
";
}
else {
echo "Javascript is <span class=\"error\">OFF</span>";
}

echo "<br /><br />Back to <a href=\"index.php\">Main page</a>.";

?>