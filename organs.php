<?php include('header.php'); ?>
  <div class="organs">
  <label for="Organs" align="center">Choose Organs:</label><br>
      <select id="organs" name="organs">
      <option value="Choose Organs">Choose organs</option>
      <option value="Heart">Heart</option>
      <option value="Kidney">Kidney</option>
      <option value="Skin">Skin</option>
      <option value="Eyes">Eyes</option>
      <option value="Lungs">Lungs</option>
    </select>
  </div>
   <style type="text/css"> 
    .organs{
      margin :200px 100px -100px 100px;
    
    }
    #organs{
      margin-top: 10px;
      padding: 10px;
      border: 1px solid black;
      background-color: #87CEEB;
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    }
    .new{
    margin-top: -200px;
    }
    #sidebar{
      margin-top: -115px;
    }
    #Pasttable{
      margin-top: 200px;
      margin-left:100px;
      margin-bottom: 100px; 
       font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
       background-color: #87CEEB;
       border:2px solid black;
    }
    

#Pasttable td, #Pasttable th {
  border: 1px solid #ddd;
  padding: 8px;
}

#Pasttable tr:nth-child(even){background-color: #ADD8E6;}

#Pasttable tr:hover {background-color: #ddd;}

#Pasttable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#87CEEB;
  color: white;
}
  </style>
<table style="width:80%" id="Pasttable">
  <tr>
    <th>Organ id</th>
    <th>Name of Donor</th>
    <th>Organ to be Donated</th>
    <th>Donor's Age</th>
    <th>Donor's Email</th>
    <th>Donor's Phone</th>
    <th>Blood Group</th>
  </tr>
  <tr>
    <th> rahul</th>
    <th>roy</th>

 </tr>
  <tr>
   <th>raju</th>
   <th>rani</th>
  </tr>
</table>
<?php include('footer.php'); ?>
