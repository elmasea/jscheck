Jscheck 1.0
28.03.2012

Developed by Antonio Cosentino at Kultmedia.com
Live Demo: http://www.kultmedia.com/lab/jscheck



DESCRIPTION
===============================
Jscheck is a jQuery + PHP script to check if Javascript is enabled in the user's browser after a form submission. In this way you can choose to execute specific code depending on the Javascript browser configuration.


USAGE
===============================
1) Add a hidden input in your form called "jscheck" like shown in this example:
   <input type="hidden" name="jscheck" id="jscheck" value="" />
   

2) Include jQuery and Jscheck like shown in this example:
   <script type="text/javascript" src="jquery.min.js"></script>
   <script type="text/javascript" src="jscheck.js"></script>
   

3) That's all! After your form submission you will have a POST variable called "jscheck". 
   If this variable is set to "yes" Javascript is enabled, if the variable is empty Javascript is not enabled.
   Here is a basic example in PHP:
   
   if ($_POST['jscheck'] == "yes"){
   // do something
   }
   else{
   // do something else
   }
   


REQUIREMENTS
===============================
A Web server with PHP


ADDITIONAL INFO
===============================
In the zip file you will find a working demo, with jQuery validation and jscheck verification.




Thanks for using Jscheck!
If you want to give me some feedback about this little script you can do it via Twitter (@ilkose)





