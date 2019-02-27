
<header class="navigation navbar navbar-fixed-top ">
    <div class="container">
       <div class="navbar-header">
          <!-- responsive nav button -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <!-- /responsive nav button -->
          <!-- logo -->
          <a class="navbar-brand logo" href="index.html">
             <img class="logo-default" src="bingoimages/logo.png" alt="logo" />
             <img class="logo-white" src="bingoimages/logo-white.png" alt="logo" />
          </a>
          <!-- /logo -->
       </div>
       <!-- main nav -->
       <nav class="collapse navbar-collapse navbar-right">
          <ul id="nav" class="nav navbar-nav menu">
                
                <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ecosystem <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                      <li><a href="/about-ecosystem">about</a></li>
                      <li><a href="/how-to">Spread Out</a></li>
                   </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Connect <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li><a href="index.html">Forum</a></li>
                       <li><a href="/blogs">Blog</a></li>
                       <li><a href="/event-session">Events & Sessions</a></li>
                       <li><a href="/faqs">FAQs</a></li>
                    </ul>
                 </li>
                {{-- <li><a href="portfolio.html">Portfolio</a></li> --}}
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Details <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li><a href="/schemes">Schemes</a></li>
                       <li><a href="/templates">Templates</a></li>
                       <li><a href="/live-session">Live Sessions</a></li>
                       <li><a href="/tutorial">Tutorials</a></li>
                    </ul>
                 </li>
                {{-- <li><a href="contact.html"><button type="button" class="btn btn-success">Login</button></a></li>
                <li><a href="pricing.html">Register</a></li> --}}
                @if (Route::has('login'))
                
                    @auth
                         <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                        <li><a href="/login">Login</button></a></li>
                        {{-- <a href="{{ route('login') }}"> --}}
                        @if (Route::has('register'))
                            <li><a href="/register">Register</a></li>
                            {{-- <a href="{{ route('register') }}"> --}}
                        @endif
                    @endauth
                </div>
            @endif
             </li>
          </ul>
       </nav>
       <!-- /main nav -->
    </div>
 </header>
 
   
 
   <!-- Modal login-->
   <div class="modal fade" id="mylogin" role="dialog">
     <div class="modal-dialog">
     
       <!-- Modal content-->
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Modal Header</h4>
         </div>
         <div class="modal-body">
           <p>Some text in the modal.</p>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
       </div>
       
     </div>
   </div>
   <div class="modal fade" id="myreg" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Register</h4>
          </div>
          <div class="modal-body">
            <div class="card bg-light">
               
                  
                     
                  <div class="form-group input-group">
                        <div class="input-group-addon">
                        <span class="glyphicon glyphicon-envelope"></span> 
                        </div>
                           <input class="form-control" id="email" name="email" placeholder="Enter Email" type="text"/>
                     </div>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                     
                     
                       
                     <div class="input-group-addon">
                     <span class="glyphicon glyphicon-envelope"></span> 
                     </div>
                     <input class="form-control" id="email" name="email" placeholder="Enter Phone" type="number"/>
                        
                     
                  </div> <!-- form-group// -->

      
                   <div class="form-group input-group">
                     <div class="input-group-addon">
                        <span class="glyphicon glyphicon-envelope"></span> 
                     </div>
                     <select class="form-control">
                        <option selected=""> Select job type</option>
                        <option>Designer</option>
                        <option>Manager</option>
                        <option>Accaunting</option>
                     </select>
                  </div> <!-- form-group end.// -->
                   <div class="form-group input-group">
                        <div class="input-group-addon">
                           <span class="glyphicon glyphicon-envelope"></span> 
                        </div>
                       <input class="form-control" placeholder="Create password" type="password">
                   </div> <!-- form-group// -->
                   <div class="form-group input-group">
                        <div class="input-group-addon">
                           <span class="glyphicon glyphicon-envelope"></span> 
                        </div>
                       <input class="form-control" placeholder="Repeat password" type="password">
                   </div> <!-- form-group// -->                                      
                   <div class="form-group input-group" style="text-align:center;">
                       <button type="submit" class="btn btn-primary " style="text-align:center;margin-left:200%;"> Create Account  </button>
                   </div> <!-- form-group// -->      
                   <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
               </form>
               
               </div> 
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
          </div>
          
        </div>
        
      </div>
    </div>
<style>
   .divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
   </style>