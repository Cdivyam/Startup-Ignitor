@extends('startupview.app')

@section('content')



  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">List Of Mentors</li>
      </ol>
     
  <br>
      <div class="row">
        <div class="col-12">
          <h1>Mentors</h1>
          <p>Here is the list of mentors available in our Organisation</p>
        </div>
      </div>
    </div>
    <div class="col-sm-12 mb-3">
      <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Search for names..">
    </div>

    <div class="section">
       <div class="container">
          <div class="row" >
                <div class="col-md-12">
              </div>
          </div>
          <div class="row"  id="myItems">
            <div class="card-deck">
            
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
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card-deck">
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
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card profile-card-2">
                                    
                                    <div class="card-body pt-5" class="card-body text-dark">
                                        <img src="" alt="profile-image" class="profile"/>
                                        <h5 class="card-title"><a href="#">Abhi</a></h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                        <a href="#" class="btn btn-primary">View profile</a>
                                        <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                    </div>
                                </div>
                        </div>
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
    </div>

    <script>
     function myFunction() {
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
