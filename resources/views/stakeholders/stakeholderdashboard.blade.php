@extends('stakeholders.app')

@section('content')
<style>
.checked {
  color: orange;
}
</style>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><a href="/reglvl1">Registration</a></li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">STAKEHOLDERS</h1>
          <div class="section">
       <div class="container">
          <div class="row">
                <div class="col-md-12">
              </div>
          </div>
          <div class="row" id="myItems">
            <div class="card-deck">     
                   
              <div class="card border-dark  mb-3" style="max-width: 18rem; ">             
                  <div class="card profile-card-2">                          
                          <div class="card-body pt-5">
                              <img src="" alt="profile-image" class="profile">
                              <h5 class="card-title"><p>Name:abcd</p></h5>
                              <p id="text"> Type:Stakeholder</p>
                              <p>Stage:Ideation</p>
                              <a href="#" class="btn btn-primary">View profile</a>
                              <h2>Rating</h2>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                          </div>
                  </div>
              </div>
              <div class="card border-dark mb-3" style="max-width: 18rem;">
                  <div class="card profile-card-2">                         
                          <div class="card-body pt-5">
                              <img src="" alt="profile-image" class="profile">
                              <h5 class="card-title"><a href="#">Name</a></h5>
                              <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                              <a href="#" class="btn btn-primary">View profile</a>
                              <h2>Rating</h2>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                          </div>
                      </div>
              </div>
              <div class="card border-dark mb-3" style="max-width: 18rem;">
                  <div class="card profile-card-2">                          
                          <div class="card-body pt-5">
                              <img src="" alt="profile-image" class="profile">
                              <h5 class="card-title"><a href="#">Name</a></h5>
                              <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                              <a href="#" class="btn btn-primary">View profile</a>
                              <h2>Rating</h2>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                          </div>
                      </div>
              </div>
              <div class="card border-dark mb-3" style="max-width: 18rem;">
                  <div class="card profile-card-2">                          
                          <div class="card-body pt-5">
                              <img src="" alt="profile-image" class="profile">
                              <h5 class="card-title"><a href="#">Name</a></h5>
                              <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                              <a href="#" class="btn btn-primary">View profile</a>
                              <h2>Rating</h2>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                          </div>
                  </div>
              </div>
              <div class="card border-white mb-3" style="max-width: 18rem;">             
                    <button type="button" class="btn btn-info btn-block">Filter</button>
                      <div class="checkbox">
                        <label><input type="checkbox" value="">International Users</label>
                      </div>
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 8px; margin-right: 0px; padding-left: 56px;padding-right: 56px;padding-top: 6px;">User Type
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                              <div class="checkbox">
                              <label><input type="checkbox" value="">Startup</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="">Mentee</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="">Acclerators</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="">Investors</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="">Incubators</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="">Service Providers</label>
                            </div>
                          </ul>
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 8px; margin-right: 0px; padding-left: 72px;padding-right: 72px;padding-top: 6px;">Stage
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <div class="checkbox">
                              <label><input type="checkbox" value="">Ideation</label>
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox" value="">Validation</label>
                              </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="">Early Traction</label>
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox" value="">Scaling</label>
                            </div>
                          </ul>
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="margin-top: 8px; margin-right: 0px; padding-left: 61px;padding-right: 61px;padding-top: 6px;">Location
                            <span class="caret"></span></button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <div class="checkbox">
                                <label><input type="checkbox" value="">Mumbai</label>
                                </div>
                                <div class="checkbox">
                                <label><input type="checkbox" value="">Delhi</label>
                                </div>
                                <div class="checkbox">
                                <label><input type="checkbox" value="">Kanpur</label>
                                </div>
                                <div class="checkbox">
                                <label><input type="checkbox" value="">Ahemdabad</label>
                                </div>
                                <div class="checkbox">
                                <label><input type="checkbox" value="">Indore</label>
                                </div>                  
                              </ul>
                        <div class="dropdown">
                          <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="margin-top: 8px; margin-right: 0px; padding-left: 63px;padding-right: 63px;padding-top: 6px;">Industry
                          <span class="caret"></span></button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <div class="checkbox">
                              <label><input type="checkbox" value="">Automotive</label>
                              </div>
                              <div class="checkbox">
                              <label><input type="checkbox" value="">Chemical</label>
                              </div>
                              <div class="checkbox">
                              <label><input type="checkbox" value="">Education</label>
                              </div>
                              <div class="checkbox">
                              <label><input type="checkbox" value="">Finance Technology</label>
                              </div>
                              <div class="checkbox">
                              <label><input type="checkbox" value="">IT Sevices</label>
                              </div>
                              <div class="checkbox">
                              <label><input type="checkbox" value="">Media & Enterainment</label>
                              </div>
                              <div class="checkbox">
                              <label><input type="checkbox" value="">Technology Hardware</label>
                              </div>   
                            </ul>
                        <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="margin-top: 8px; margin-right: 0px; padding-left: 66px;padding-right: 66px;padding-top: 6px;">Sectors
                        <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <div class="checkbox">
                                <label><input type="checkbox" value="">Daily Farming</label>
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox" value="">Food Processing</label>
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox" value="">Business Intelligence</label>
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox" value="">Industrial Design</label>
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox" value="">E-Learning</label>
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox" value="">Healthcare Services</label>
                              </div>
                              <div class="checkbox">
                                <label><input type="checkbox" value="">Integrated Communication Services</label>
                              </div>   
                              </ul>
                    </div>
                  </div>
              </div>
            </div>
        </div>
            </div>
                <div class="col-md-12">
                    <div class="card-deck">
                
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card profile-card-2">                                    
                                    <div class="card-body pt-5">
                                        <img src="" alt="profile-image" class="profile">
                                        <h5 class="card-title"><a href="#">Name</a></h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                        <a href="#" class="btn btn-primary">View profile</a>
                                        <h2>Rating</h2>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                            </div>
                        </div>
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card profile-card-2">
                                    
                                    <div class="card-body pt-5">
                                        <img src="" alt="profile-image" class="profile">
                                        <h5 class="card-title"><a href="#">Name</a></h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                        <a href="#" class="btn btn-primary">View profile</a>
                                        <h2>Rating</h2>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                        </div>
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card profile-card-2">                                    
                                    <div class="card-body pt-5">
                                        <img src="" alt="profile-image" class="profile">
                                        <h5 class="card-title"><a href="#">Name</a></h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                        <a href="#" class="btn btn-primary">View profile</a>
                                        <h2>Rating</h2>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>                           
                                    </div>
                                </div>
                        </div>
                      <div class="card border-dark mb-3" style="max-width: 18rem;">
                          <div class="card profile-card-2">                                
                                  <div class="card-body pt-5">
                                      <img src="" alt="profile-image" class="profile">
                                      <h5 class="card-title"><a href="#">Name</a></h5>
                                      <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                      <a href="#" class="btn btn-primary">View profile</a>
                                      <h2>Rating</h2>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star checked"></span>
                                      <span class="fa fa-star"></span>
                                  </div>
                          </div>
                      </div>
                      <div class="card border-white mb-3" style="max-width: 18rem;">                                     
                          </div>
                      
                      </div>
                    
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                    <div class="card-deck">
                  
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card profile-card-2">                                    
                                    <div class="card-body pt-5">
                                        <img src="" alt="profile-image" class="profile">
                                        <h5 class="card-title"><a href="#">Name</a></h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                        <a href="#" class="btn btn-primary">View profile</a>
                                        <h2>Rating</h2>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                            </div>
                        </div>
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card profile-card-2">                                    
                                    <div class="card-body pt-5">
                                        <img src="" alt="profile-image" class="profile">
                                        <h5 class="card-title"><a href="#">Name</a></h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                        <a href="#" class="btn btn-primary">View profile</a>
                                        <h2>Rating</h2>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                            </div>
                        </div>
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card profile-card-2">                                    
                                    <div class="card-body pt-5">
                                        <img src="" alt="profile-image" class="profile">
                                        <h5 class="card-title"><a href="#">Name</a></h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                        <a href="#" class="btn btn-primary">View profile</a>
                                        <h2>Rating</h2>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                            </div>
                        </div>
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card profile-card-2">                                    
                                    <div class="card-body pt-5">
                                        <img src="" alt="profile-image" class="profile">
                                        <h5 class="card-title"><a href="#">Name</a></h5>
                                        <p class="card-text">Lorem Ipsum is simply dummy text Lorem Ipsum has been the industry's standard dummy text</p>
                                        <a href="#" class="btn btn-primary">View profile</a>
                                        <h2>Rating</h2>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                            </div>
                        </div>
                        <div class="card border-white mb-3" style="max-width: 18rem; border colour: #ffffff;">

</div>
                      </div>
                  </div>
              </div>
              
              
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
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