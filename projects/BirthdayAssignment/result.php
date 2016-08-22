<!-- basically i included my header again so i wont be bothered by defining a new style for the result page.
The CSS is refering to the header, but since i didnt include the content, it works perfectly.
Furthermore, the php code is just to get the information i put in the forms. 

PAY ATTENTION THAT THE ORDER IN WHICH U INCLUDE THE PHP FILES MATTERS -->




<?php include 'end.php'; ?>

<fieldset>
	<!-- REMEMBER: the . infront of the $_post is important to exclude it from the rest, also the easiest way to do. -->
<legend> Thank you!</legend>
<p class="totalend"><label class="field" for="First Name"> <?php echo "<a>First name:</a></label> " .$_POST['fname']; 
?></p>
<p class="totalend"><label class="field" for="Middle Name"> <?php echo "<a>Middle name:</a></label> " .$_POST['mname']; 
?></p>
<p class="totalend"><label class="field" for="Last Name"> <?php echo "<a>Last name:</a></label> " .$_POST['lname']; 
?></p>
<p class="totalend"><label class="field" for="Your Gender"> <?php echo "<a>Gender:</a></label> " .$_POST['gender']; 
?></p>
<p class="totalend"><label class="field" for="ZIP-Code"><?php echo "<a>ZIP-Code:</a></label> " .$_POST['zip']; 
?></p>
<p class="totalend"><label class="field" for="City"><?php echo "<a>City:</a></label> " .$_POST['city']; 
?></p>
<p class="totalend"><label class="field" for="Mother's Fullname"><?php echo "<a>Mother's name:</a></label> " .$_POST['mfname']; 
?></p>
<p class="totalend"><label class="field" for="Father's Fullname"><?php echo "<a>Father's name:</a></label> " .$_POST['ffname']; 
?></p>
<p class="totalend"><label class="field" for="Your Birthday"><?php echo "<a>Your birthday:</a></label> " .$_POST['ybirthday']; 
?></p>
</fieldset>

<!-- Thorben Luepkes, BAAA, 2015, November 7th, 3hrs work -->