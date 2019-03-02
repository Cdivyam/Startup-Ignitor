@extends('stakeholders.app')

@section('content')
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}
input[type=text], select, textarea {
  width:100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

#regForm {
  background-image: linear-gradient(20deg, #ffe6e6,#ccffcc);
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
  box-shadow: -12px -17px 9px 0px rgba(144, 172,203,0.25)
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
input.type{
  width: 100%
}
/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Your Uploads</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">Stakeholder Registration</h1>
          <form id="regForm" action="StakeholderController@store">
  <h1>Register:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Organisation Name:
    <p><input placeholder="Enter name..."onfocus="this.value=''" oninput="this.className = ''" name="name"></p>
    Type:<div class="radio" >
      <label><input type="radio" name="optradio" style=" width: 50px;">Incubators</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio"style=" width: 50px;">Acclerators</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio"style=" width: 50px;">Investors</label>
    </div>
     <div class="radio">
      <label><input type="radio" name="optradio"style=" width: 50px;">Service Provider</label>
    </div>
    Preferred Stage:<div class="radio">
      <label><input type="radio" name="optradio" style=" width: 50px;">Ideation</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio"style=" width: 50px;">Validation</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio"style=" width: 50px;">Early Traction</label>
    </div>
     <div class="radio">
      <label><input type="radio" name="optradio"style=" width: 50px;">Scaling</label>
    </div>
    
    Industry<p><input placeholder="Enter your industry..." onfocus="this.value=''" oninput="this.className = ''" name="Industry" required></p>
    Sector<p><input placeholder="Enter your sector..." onfocus="this.value=''" oninput="this.className = ''" name="Sector" required  ></p>
    Services<p><input placeholder="Enter your services..." onfocus="this.value=''" oninput="this.className = ''" name="Services" required  ></p>
    Resources<p><input placeholder="Enter your resources..." onfocus="this.value=''" oninput="this.className = ''" name="Resources" required  ></p>
    <!--<label for="Country">Country</label>
    <select id="country" name="Country">
      <option value="India">India</option>
    </select>
    <label for="City">City</label>
    <select id="City" name="City">
      <option value="Mumbai">Mumbai</option>
      <option value="delhi">Delhi</option>
      <option value="Banglore">Banglore</option>
      <option value="Hyderabad">Hyderabad</option>
      <option value="Ahmedabad">Ahmedabad</option>
      <option value="Chennai">Chennai</option>
      <option value="Kolkata">Kolkata</option>
      <option value="surat">Surat</option>
      <option value="Pune">Pune</option>
      <option value="Jaipur">Jaipur</option>
      <option value="Lucknow">Lucknow</option>
      <option value="Kanpur">Kanpur</option>
      <option value="Nagpur">Nagpur</option>
      <option value="Indore">Indore</option>
      <option value="Thane">Thane</option>
      <option value="Bhopal">Bhopal</option>
      <option value="Visakhapatnam">Visakhapatnam</option>
      <option value="Pimpri & Chinchwad">Pimpri & Chinchwad</option>
      <option value="Patna">Patna</option>
      <option value="Vadodara">Vadodara</option>
      <option value="Ghaziabad">Ghaziabad</option>
      <option value="Ludhiana">Ludhiana</option>
      <option value="Agra">Agra</option>
      <option value="Nashik">Nashik</option>
      <option value="Faridabad">Faridabad</option>
      <option value="Meerut">Meerut</option>
      <option value="Rajkot">Rajkot</option>
      <option value="Kalyan & Dombivali">Kalyan & Dombivali</option>
      <option value="Varanasi">Varanasi</option>
      <option value="Srinagar">Srinagar</option>
      <option value="Aurangabad">Aurangabad</option>
      <option value="Amritsar">Amritsar</option>
      <option value="Allahabad">Allahabad</option>
      <option value="Ranchi">Ranchi</option>
      <option value="Haora">Haora</option>
      <option value="Coimbatore">Coimbatore</option>
      <option value="Jabalpur">Jabalpur</option>
      <option value="Gwalior">Gwalior</option>
      <option value="Jodhpur">Jodhpur</option>
      <option value="Madurai">Madurai</option>
      <option value="Kota">Kota</option>
      <option value="Guwahati">Guwahati</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Hubli-and-dharwad">Hubli and Dharwad</option>
      <option value="Mysore">Mysore</option>
      <option value="Gurgaon">Gurgaon</option>
      <option value="Jalandhar">Jalandhar</option>
      <option value="Tiruchirappalli">Tiruchirappalli</option>
    </select>

    <label for="State">State</label>
    <select id="State" name="State">
      <option value="Mumbai">Maharashtra</option>
      <option value="Delhi">Delhi</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Telangana">Telangana</option>
      <option value="Gujarat">Gujarat</option>
      <option value="West-Bengal">West Bengal</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Uttar-Pradesh">Uttar Pradesh</option>
      <option value="Madhya-Pradesh">Madhya Pradesh</option>
      <option value="Punjab">Punjab</option>
      <option value="Tamil-nadu">Tamil Nadu</option>
    </select>
    <label for="email">Email</label>
    <p><input type="email" value="" onfocus="this.value=''" placeholder="name@email.com" required /></p>-->
    Government-Funded<p><input placeholder="Government-Funded..." onfocus="this.value=''" oninput="this.className = ''" name="government_funded" required  ></p>
    <label for="phonenumber">Phone Number</label>
    <p><input type="tel" placeholder="Phone Number..." onfocus="this.value=''" oninput="this.className = ''" name="phone"></p>
    Organisation Location<p><input placeholder="Enter organisation location..."onfocus="this.value=''" oninput="this.className = ''" name="organisationName"></p>
    About Yourself<textarea id="subject" onfocus="this.value=''" name="subject" placeholder="Write something.." style="height:100px"></textarea>
    
  </div>
   <div class="tab">Documents:
     Upload Your Image<p><input type="file" name="pic" accept="image/*"></p>
     Upload Your Organisation Certificate<p><input type="file" name="pic" accept="image/*"></p>
     Upload Your Approval letter<p><input type="file" name="pic" accept="image/*"></p>

  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

          
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Startup Ignitor 2019</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

@endsection