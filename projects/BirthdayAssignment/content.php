<img src="Pics/p1.png" alt="Noobs">

<h1> Your Birthday Registration! </h1>

<!-- What form does, it's puts things in a formular form, so i can refer to it and link it to in endpage, in this case result.php
Also, fieldset is to maintain a clear structure and 'wrap' our content -->

<form action="result.php" method="post">
<fieldset>
	<legend> Please fill out this form!</legend>
      <p><label class="field" for="First Name">First Name:</label><input type="text" name="fname" class="tbox" /></p> <!-- tbox is styled in the css -->
      <p><label class="field" for="Middle Name">Middle Name:</label><input type="text" name="mname" class="tbox" /></p> <!-- gave names, to make output with php easier -->
      <p><label class="field" for="Last Name">Last Name:</label><input type="text" name="lname" class="tbox" /></p>
      <p><label class="field" for="Your Gender">Your Gender:</label></p>  
          <?php $genderErr = "";  ?>  <!-- it actually errors if u didnt put in a gender -->
   <div>
      <label class="nom" for="Your Gender"><input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?>  value="Female"><a>Female</label></a>
      <label class="nom" for="Your Gender"><input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?>  value="Male"><a>Male</label></a>
      <span class="error"><?php echo $genderErr;?></span>
  </div>
      <p><label class="field" for="State/Country">State/Country:</label><input type="text" name="state" class="tbox" /></p>       
      <p><label class="field" for="ZIP-Code">ZIP-Code:</label><input type="text" name="zip" class="tbox" /></p>   
      <p><label class="field" for="City">City:</label><input type="text" name="city" class="tbox" /></p>      
      <p><label class="field" for="Mother's Fullname">Mother's Fullname:</label><input type="text" name="mfname" class="tbox" /></p>
      <p><label class="field" for="Father's Fullname">Father's Fullname:</label><input type="text" name="ffname" class="tbox" /></p>
      <p><label class="field" for="Your Birthday">Your Birthday:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="textbox1" name="ybirthday" class="nom"/></p>
         <!-- included my selfmade calendar, stole the design tho ;P, javabased, format is MM//DD//YYYY -->
          <script type="text/javascript"> 
             $(document).ready(function () { 
             $("#textbox1").wijinputdate(
               {
                  showTrigger: true
             });
           });
</script>
<button type="submit" name="" value="" class="button">Register Me!</button> <!-- class button is styled in the css. -->
</fieldset>
</form>

<!-- end of our content -->
