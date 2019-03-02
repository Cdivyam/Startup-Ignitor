@extends('stakeholders.app')

@section('content')

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"></li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Registration 1</h1>
          <p align="center">Time to update your profile</p>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->

        <!DOCTYPE html>
        <html>
<!--         <meta name="viewport" content="width=device-width, initial-scale=1.0"><! --><link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">-->
        <style>
        * {
          box-sizing: border-box;
        }
        body {
          background-color: #f1f1f1;
        }

        #regForm {
          background-color: #ffffff;
          margin: 100px auto;
          font-family: Raleway;
          padding: 40px;
          width: 70%;
          min-width: 300px;
        }

        h1 {
          text-align: center;  
        }

        <style> 
        input[type] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          box-sizing: border-box;
          border: 4px solid red;
          border-radius: 4px;
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
        <body>

        <form id="regForm" action="" style="background-color: #E6E6FA">
          <!-- <h1>Registration 1:</h1>
          <h2>Time to update your registration...</h2> -->
          <!-- One "tab" for each step in the form: -->
          <div >Name:
            <p><input placeholder= "(First)(Middle)(Last)"oninput="this.className = ''" name="name" size="78"></p>
          </div>
          <div>Email Id
            <p><input placeholder="Eg: name@gmail.com" oninput="this.className = ''" name="email"size="78"></p>
          </div>
          <div>Phone Number:
          <p><input type="phone" placeholder="eg: 5852445512" oninput="this.className = ''" name="phone"size="78"></p>
          </div>
           <div>Specialization Role:
            <p>
           <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="incubator" checked>Incubator
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="accelerator">Accelerator
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios3" value="Investor">Investor
            </label>
            </div>
             <div class="radio">
            <label>
            <input type="radio" name="optionsRadios" id="optionsRadios4" value="service provider">Service Provider
            </label>
            </div>
          </p>
          </div>
           <div>Organisation Location
            <p><input placeholder="Eg: Mumbai,Maharashtra" oninput="this.className = ''" name="orgloc"size="78"></p>
          </div>
            
            <div class="form-group">
              <label for="comment">About Yourself</label>
              <p>
              <textarea class="form-control" rows="5" id="About"></textarea>
            </p>
            </div>
             <div  class="form-group" 
              <label for="comment">How can you help?</label>
              <p>
              <textarea class="form-control" rows="5" size="90" id="help" ></textarea>
            </p>
            </div>

            <a href="reglvl2">
            <button type="button" class="btn btn-success btn-circle"> Next<i class="fa fa-link"></i></button>
            </a> 
         <!--  
          <div style="overflow:auto;">
            <div style="float:right;">
              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
              <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
          </div>
          Circles which indicates the steps of the form: -->
          <!-- <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
          </div> -->
        </body>  
        </form>
        <!--
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
        -->
        <script >
        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("tab");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" clas5s to the field:
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

        </body>
        </html>




    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright ©Startup Ignitors 2019</small>
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

@endsection