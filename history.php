<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/history.css">
<div class="about">
  <h1>History</h1>
	   <label for="First Name">First Name</label>
      <input type="text" id="Fname" name="fname" placeholder="Your First Name.." maxlength="10" /required>
      <label for="Last Name">Last Name</label>
      <input type="text" id="lname" name="lname" placeholder="Your Last Name.."maxlength="10"/required>      
      <label for="Gender">Choose Gender:</label>
      <select id="Gender" name="Gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Others">Others</option>
      </select><br>
      <label for=" Please list any drug allergies:"> Please list any drug allergies:</label><br>
      <textarea id="drug" name="drug" rows="4" cols="50" placeholder="Please list any drug allergies..">
      </textarea><br>
      Have you ever had (Please check all that apply):<br>
      <input type="checkbox" id="diesease" name="diesease" value="Anemia">
      <label for="disease"> Anemia </label><br>
      <input type="checkbox" id="disease" name="disease" value="Asthma">
      <label for="disease"> Asthma </label><br>
      <input type="checkbox" id="disease" name="disease" value="Arthritis">
      <label for="disease"> Arthritis </label><br>
      <input type="checkbox" id="disease" name="disease" value="Cancer">
      <label for="disease"> Cancer </label><br>
      <input type="checkbox" id="disease" name="disease" value="Gout">
      <label for="disease"> Gout </label><br>
      <input type="checkbox" id="disease" name="disease" value="Diabetes">
      <label for="disease"> Diabetes </label><br>
      <input type="checkbox" id="disease" name="disease" value="Emotional Disorder">
      <label for="disease"> Emotional Disorder </label><br>
      <input type="checkbox" id="disease" name="disease" value="Epilepsy SeizureS">
      <label for="disease"> Epilepsy Seizures</label><br>
      <input type="checkbox" id="disease" name="disease" value="Fainting Spellst">
      <label for="disease"> Fainting Spells </label><br>    
      <input type="checkbox" id="disease" name="disease" value="Gallstones">
      <label for="disease"> Gallstones</label><br>
      <input type="checkbox" id="disease" name="disease" value="Heart Disease">
      <label for="disease"> Heart Disease </label><br>
      <input type="checkbox" id="disease" name="disease" value="Heart Attack">
      <label for="disease"> Heart Attack </label><br>
      <input type="checkbox" id="disease" name="disease" value="Rheumatic Fever">
      <label for="disease"> Rheumatic Fever </label><br>
      <input type="checkbox" id="disease" name="disease" value="High Blood Pressure">
      <label for="disease"> High Blood Pressure </label><br>
      <input type="checkbox" id="disease" name="disease" value="Digestive Problems">
      <label for="disease"> Digestive Problems </label><br>
      <input type="checkbox" id="disease" name="disease" value="Ulcerative Colitis">
      <label for="disease"> Ulcerative Colitis </label><br>
      <input type="checkbox" id="disease" name="disease" value="Ulcer Disease">
      <label for="disease"> Ulcer Disease </label><br>
      <input type="checkbox" id="disease" name="disease" value="Hepatitis">
      <label for="disease"> Hepatitis </label><br>
      <input type="checkbox" id="disease" name="disease" value="Kidney Disease">
      <label for="disease"> Kidney Disease </label><br>
      <input type="checkbox" id="disease" name="disease" value="Liver Disease">
      <label for="disease"> Liver Disease </label><br>
      <input type="checkbox" id="disease" name="disease" value="Sleep Apnea">
      <label for="disease"> Sleep Apnea </label><br>
      <input type="checkbox" id="disease" name="disease" value="Use a C-PAP machine">
      <label for="disease"> Use a C-PAP machine </label><br>
      <input type="checkbox" id="disease" name="disease" value="Thyroid Problems">
      <label for="disease"> Thyroid Problems </label><br>
      <input type="checkbox" id="disease" name="disease" value="Tuberculosis">
      <label for="disease"> Tuberculosis </label><br>
      <input type="checkbox" id="disease" name="disease" value="Venereal Disease">
      <label for="disease"> Venereal Disease </label><br>
      <input type="checkbox" id="disease" name="disease" value="Neurological Disorders">
      <label for="disease"> Neurological Disorders </label><br>
      <input type="checkbox" id="disease" name="disease" value="Bleeding Disorder">
      <label for="disease"> Bleeding Disorder </label><br>
      <input type="checkbox" id="disease" name="disease" value="Lung Disease">
      <label for="disease"> Lung Disease </label><br>
      <input type="checkbox" id="disease" name="disease" value="Emphysema">
      <label for="disease"> Emphysema </label><br>
     Other illnesses:<br>
      <label for="Other illnesses"></label>
      <input type="text" id="Other illnesses" name="Other illnesses" placeholder="Your Other illnesses.."maxlength="10"/required>  
      <label for="Height">Height</label>
      <input type="number" id="Height" name="Height" placeholder="Your Height.."maxlength="3"> 	
      <label for="Weight">Weight</label>
      <input type="number" id="Weight" name="Weight" placeholder="Your Weight.."maxlength="3">
      <label for="birthday">Birthday:</label>
      <input type="date" id="birthday" name="birthday">  
      <label for="Please list any Operations and Dates of Each:"> Please list any Operations and Dates of Each:</label><br>
      <textarea id="operation" name="operation" rows="4" cols="50" placeholder="Please list any Operations and Dates of Each..">
      </textarea><br>
      <label for="Please list your Current Medications:"> Please list your Current Medications:</label><br>
      <textarea id="medicine" name="medicine" rows="4" cols="50" placeholder="Please list your Current Medications..">
      </textarea><br>
       Previous reports (if any):<br>
       <label for="myfile">Select files:</label><br>
       <input type="file" id="myfile" name="myfile" multiple><br><br>



              <input type="submit" value="Submit" action="homepage2.html">

</div>
 <header>

 <div class="footer">
  <ul>
    <li><a href="contact.html">Contactus</a></li>
    <li><a href="feedback.html">Feedback</a></li>
</ul>
</div>	
</header>
</body>
</html>