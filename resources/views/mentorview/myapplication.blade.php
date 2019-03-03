@extends('mentorview.app')
@section('content')

<style>

    * {
      box-sizing: border-box;
    }
    
    body {
      background-color: #f1f1f1;
      padding: 20px;
      font-family: Arial;
    }
    
    /* Center website */
    .main {
      max-width: 1000px;
      margin: auto;
    }
    
    h1 {
      font-size: 50px;
      word-break: break-all;
    }
    
    .row {
      margin: 8px -16px;
    }
    
    /* Add padding BETWEEN each column (if you want) */
    .row,
    .row > .column {
      padding: 8px;
    }
    
    /* Create three equal columns that floats next to each other */
    .column {
      float: left;
      width: 33.33%;
      display: none; /* Hide columns by default */
    }
    
    /* Clear floats after rows */ 
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Content */
    .content {
      background-color: white;
      padding: 10px;
    }
    
    /* The "show" class is added to the filtered elements */
    .show {
      display: block;
    }
    
    /* Style the buttons */
    /* .btn {
      border: none;
      outline: none;
      padding: 12px 16px;
      background-color:#0069D9;
      cursor: pointer;
    } */
    
    /* Add a grey background color on mouse-over */
    .btn:hover {
      background-color: #ddd;
    }
    
    /* Add a dark background color to the active button */
    .btn.active {
      background-color: #666;
       color: white;
    }
    
    </style>

<div class="content-wrapper">
    <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Status Of Applications</li>
            </ol>
            <div class="row">
              <div class="col-12">
                <h1>Applications</h1>
                <p>List Of Applications</p>
              </div>
            </div>
          </div>
          <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')">Show all</button>
                <button class="btn btn-success" onclick="filterSelection('accepted')">Accepted</button>
                <button class="btn btn-danger" onclick="filterSelection('rejected')">Rejected</button>
                <button class="btn btn-warning" onclick="filterSelection('pending')">Pending</button>
              </div>

              <div class="section">
                <div class="container">
                  
                   <div class="row" >                                                                
                    <div class="row"  id="myItems">                                             
                     <div class="card-deck">
                        <div class="column accepted">                        
                        <div class="card border-dark mb-3" style="max-width: 18rem;">                        
                           <div class="card profile-card-2">                                   
                                   <div class="card-body pt-5" class="card-body text-dark">
                                       <img src="" alt="profile-image" class="profile"/>
                                       <h5 class="card-title"><a href="#">Kshiti Ghelani</a></h5>
                                       <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                       <a href="/mentorviewprofile" class="btn btn-primary">View profile</a>
                                       <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                   </div>
                           </div>
                               </div>
                       </div>
                       <div class="column accepted">                                    
                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                <div class="card profile-card-2">                                      
                                        <div class="card-body pt-5" class="card-body text-dark">
                                            <img src="" alt="profile-image" class="profile"/>
                                            <h5 class="card-title"><a href="#">John Doe</a></h5>
                                            <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                            <a href="/mentorviewprofile_2" class="btn btn-primary">View profile</a>
                                            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                        </div>
                                </div>
                                    </div>
                            </div>
                            <div class="column accepted">
                     
                                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                                        <div class="card profile-card-2">
                                                
                                                <div class="card-body pt-5" class="card-body text-dark">
                                                    <img src="" alt="profile-image" class="profile"/>
                                                    <h5 class="card-title"><a href="#">Jane Doe</a></h5>
                                                    <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                                    <a href="#" class="btn btn-primary">View profile</a>
                                                    <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                                </div>
                                        </div>
                                            </div>
                                    </div>
                                    <div class="column rejected">
                     
                                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                                <div class="card profile-card-2">
                                                        
                                                        <div class="card-body pt-5" class="card-body text-dark">
                                                            <img src="" alt="profile-image" class="profile"/>
                                                            <h5 class="card-title"><a href="#">Name</a></h5>
                                                            <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                                            <a href="#" class="btn btn-primary">View profile</a>
                                                            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                                        </div>
                                                </div>
                                                    </div>
                                            </div>
                     
                     
                                    <div class="column rejected">
                     
                                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                                <div class="card profile-card-2">
                                                        
                                                        <div class="card-body pt-5" class="card-body text-dark">
                                                            <img src="" alt="profile-image" class="profile"/>
                                                            <h5 class="card-title"><a href="#">Name</a></h5>
                                                            <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                                            <a href="#" class="btn btn-primary">View profile</a>
                                                            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                                        </div>
                                                </div>
                                                    </div>
                                            </div>
                                            <div class="column rejected">
                     
                                                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                                                        <div class="card profile-card-2">
                                                                
                                                                <div class="card-body pt-5" class="card-body text-dark">
                                                                    <img src="" alt="profile-image" class="profile"/>
                                                                    <h5 class="card-title"><a href="#">Name</a></h5>
                                                                    <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                                                    <a href="#" class="btn btn-primary">View profile</a>
                                                                    <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                                                </div>
                                                        </div>
                                                            </div>
                                                    </div>
                                                    <div class="column pending">
                     
                                                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                                                <div class="card profile-card-2">
                                                                        
                                                                        <div class="card-body pt-5" class="card-body text-dark">
                                                                            <img src="" alt="profile-image" class="profile"/>
                                                                            <h5 class="card-title"><a href="#">Name</a></h5>
                                                                            <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                                                            <a href="#" class="btn btn-primary">View profile</a>
                                                                            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                                                        </div>
                                                                </div>
                                                                    </div>
                                                            </div>
                                                            <div class="column pending">
                     
                                                                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                                                                        <div class="card profile-card-2">
                                                                                
                                                                                <div class="card-body pt-5" class="card-body text-dark">
                                                                                    <img src="" alt="profile-image" class="profile"/>
                                                                                    <h5 class="card-title"><a href="#">Name</a></h5>
                                                                                    <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                                                                    <a href="#" class="btn btn-primary">View profile</a>
                                                                                    <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                                                                </div>
                                                                        </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="column pending">
                     
                                                                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                                                                <div class="card profile-card-2">
                                                                                        
                                                                                        <div class="card-body pt-5" class="card-body text-dark">
                                                                                            <img src="" alt="profile-image" class="profile"/>
                                                                                            <h5 class="card-title"><a href="#">Name</a></h5>
                                                                                            <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                                                                            <a href="#" class="btn btn-primary">View profile</a>
                                                                                            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                                                                        </div>
                                                                                </div>
                                                                                    </div>
                                                                            </div>

                                                                            <div class="column accepted">
                     
                                                                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                                                                <div class="card profile-card-2">
                                                                                        
                                                                                        <div class="card-body pt-5" class="card-body text-dark">
                                                                                            <img src="" alt="profile-image" class="profile"/>
                                                                                            <h5 class="card-title"><a href="#">Name</a></h5>
                                                                                            <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                                                                            <a href="#" class="btn btn-primary">View profile</a>
                                                                                            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                                                                        </div>
                                                                                </div>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="column accepted">
                     
                                                                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                                                                <div class="card profile-card-2">
                                                                                        
                                                                                        <div class="card-body pt-5" class="card-body text-dark">
                                                                                            <img src="" alt="profile-image" class="profile"/>
                                                                                            <h5 class="card-title"><a href="#">Name</a></h5>
                                                                                            <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                                                                            <a href="#" class="btn btn-primary">View profile</a>
                                                                                            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                                                                        </div>
                                                                                </div>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="column pending">
                     
                                                                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                                                                <div class="card profile-card-2">
                                                                                        
                                                                                        <div class="card-body pt-5" class="card-body text-dark">
                                                                                            <img src="" alt="profile-image" class="profile"/>
                                                                                            <h5 class="card-title"><a href="#">Name</a></h5>
                                                                                            <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                                                                            <a href="#" class="btn btn-primary">View profile</a>
                                                                                            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                                                                        </div>
                                                                                </div>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="column pending">
                     
                                                                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                                                                <div class="card profile-card-2">
                                                                                        
                                                                                        <div class="card-body pt-5" class="card-body text-dark">
                                                                                            <img src="" alt="profile-image" class="profile"/>
                                                                                            <h5 class="card-title"><a href="#">Name</a></h5>
                                                                                            <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                                                                            <a href="#" class="btn btn-primary">View profile</a>
                                                                                            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                                                                        </div>
                                                                                </div>
                                                                                    </div>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                            
                             
                           
                       </div>
                       
                      </div>
                   </div>
                 
                </div>
                <script>
                    filterSelection("all") // Execute the function and show all columns
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1); 
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

function myFunction() {
  var checkBox = document.getElementById("myAccelerator");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
                        
function myFunction1() {
    var input, filter, cards, cardContainer, h5, title, i;
    input = document.getElementById("myFilter");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("myItems");
    cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".card-body h5.card-title");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}
                        </script>
@endsection