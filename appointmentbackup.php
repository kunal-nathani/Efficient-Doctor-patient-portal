<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/appoint.css">
<div class="appt">
  <label for="Name of Doctor">Doctor's name</label>
  <input type="text" name="doctor" placeholder="Enter name of Doctor.."/required>
    <label for="date">Date of Appointment</label>
  <input type="date" name="date" placeholder="Enter date of Appointment.."/required>
  <label for="time">Time of Appointment</label>
<select id="cars">
  <option value="10AM-11AM">10AM-11AM</option>
  <option value="11AM-12AM">11AM-12AM</option>
  <option value="12AM-1PM">12AM-1PM</option>
  <option value="1PM-2PM">1PM-2PM</option>
  <option value="2PM-3PM">2PM-3PM</option>
  <option value="3PM-4PM">3PM-4PM</option>
  <option value="6PM-7PM">6PM-7PM</option>
  <option value="7PM-8PM">7PM-8PM</option>
  <option value="8PM-9PM">8PM-9PM</option>
</select>
   <label for="submit"></label>
   <input type="submit" name="submit" value="submit">
 </div>
<div class="footer">
  <ul>
    <li><a href="contact.php">Contactus</a></li>
    <li><a href="feedback.php">Feedback</a></li>
</ul>
</div>
</body>
</html>
