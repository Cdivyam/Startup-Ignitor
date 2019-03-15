
<!-- @extends('startupview.app')

@section('content')

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs--
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
      <div class="row">
        <div class="col-12">
            <div class="mesgs">
                <div class="msg_history">
                  <div class="incoming_msg">
                    <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                      <div class="received_msg">
                          <div class="received_withd_msg">
                              <p>Test which is a new approach to have all
                              solutions</p>
                              <span class="time_date"> 11:01 AM    |    June 9</span></div>
                          </div>
                      </div>
                  <div class="outgoing_msg">
                    <div class="sent_msg">
                      <p>Test which is a new approach to have all
                        solutions</p>
                      <span class="time_date"> 11:01 AM    |    June 9</span> </div>
                  </div>
                  <div class="incoming_msg">
                    <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    <div class="received_msg">
                      <div class="received_withd_msg">
                        <p>Test, which is a new approach to have</p>
                        <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
                    </div>
                  </div>
                  <div class="outgoing_msg">
                    <div class="sent_msg">
                      <p>Apollo University, Delhi, India Test</p>
                      <span class="time_date"> 11:01 AM    |    Today</span> </div>
                  </div>
                  <div class="incoming_msg">
                    <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    <div class="received_msg">
                      <div class="received_withd_msg">
                        <p>We work directly with our designers and suppliers,
                          and sell direct to you, which means quality, exclusive
                          products, at a price anyone can afford.</p>
                        <span class="time_date"> 11:01 AM    |    Today</span></div>
                    </div>
                  </div>
                </div>
                <div class="type_msg">
                  <div class="input_msg_write">
                    <input type="text" class="write_msg" placeholder="Type a message" />
                    <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                  </div>
                </div>
              </div>
            </div>
    
        </div>
      </div>

      

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper--
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Startup Igniter 2019</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button--
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal--
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
  </div> -->

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  
  <!DOCTYPE html>
  <html>
    <head>
      <title>Chat</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
    </head>
    <!--Coded With Love By Mutiullah Samim-->
    <body>
    <h1><u>CHATS</u></h1>
      <div class="container-fluid h-100">
        <!-- <div class="row justify-content-center h-100">
          <div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
            <div class="card-header">
              <div class="input-group">
                <input type="text" placeholder="Search..." name="" class="form-control search">
                <div class="input-group-prepend">
                  <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                </div>
              </div>
            </div>
            <div class="card-body contacts_body">
              <ui class="contacts">
              <li class="active">
                <div class="d-flex bd-highlight">
                  <div class="img_cont">
                    <img src="https://devilsworkshop.org/files/2013/01/enlarged-facebook-profile-picture.jpg" class="rounded-circle user_img">
                    <span class="online_icon"></span>
                  </div>
                  <div class="user_info">
                    <span>Maryam Naz</span>
                    <p>Maryam is online</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex bd-highlight">
                  <div class="img_cont">
                    <img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img">
                    <span class="online_icon offline"></span>
                  </div>
                  <div class="user_info">
                    <span>Sahar Darya</span>
                    <p>Sahar left 7 mins ago</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex bd-highlight">
                  <div class="img_cont">
                    <img src="https://i.pinimg.com/originals/54/6e/6d/546e6d4c6ce4322e6aa3b2f8ca73ac28.jpg" class="rounded-circle user_img">
                    <span class="online_icon"></span>
                  </div>
                  <div class="user_info">
                    <span>Yolduz Rafi</span>
                    <p>Yolduz is online</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex bd-highlight">
                  <div class="img_cont">
                    <img src="http://profilepicturesdp.com/wp-content/uploads/2018/07/sweet-girl-profile-pictures-9.jpg" class="rounded-circle user_img">
                    <span class="online_icon offline"></span>
                  </div>
                  <div class="user_info">
                    <span>Nargis Hawa</span>
                    <p>Nargis left 30 mins ago</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex bd-highlight">
                  <div class="img_cont">
                    <img src="https://www.freshmorningquotes.com/wp-content/uploads/2015/11/cute-and-beautifull-girls-profile-pictures.jpg" class="rounded-circle user_img">
                    <span class="online_icon offline"></span>
                  </div>
                  <div class="user_info">
                    <span>Khadija Mehr</span>
                    <p>Khadija left 50 mins ago</p>
                  </div>
                </div>
              </li>
              </ui>
            </div>
            <div class="card-footer"></div>
          </div></div> --> 
          <br>
          <div class="jumbotron">
          <div class="col-md-8 col-xl-6 chat">
            <div class="card">
              <div class="card-header msg_head">
                <div class="d-flex bd-highlight">
                  <div class="img_cont">
                    <img src="/bingoimages/images/vid.jpg" class="rounded-circle user_img">
                    <span class="online_icon"></span>
                  </div>
                  <div class="user_info">
                    <span>Chat with Jane Doe &nbsp;&nbsp; <p>     </p></span>
                    <p>1767 Messages</p>
                  </div>
                  <div class="video_cam">
                    <span><i class="fas fa-video"></i></span>
                    <span><i class="fas fa-phone"></i></span>
                  </div>
                </div>
                <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                <div class="action_menu">
                  <ul>
                    <li><i class="fas fa-user-circle"></i> View profile</li>
                    <li><i class="fas fa-users"></i> Add to close friends</li>
                    <li><i class="fas fa-plus"></i> Add to group</li>
                    <li><i class="fas fa-ban"></i> Block</li>
                  </ul>
                </div>
              </div>
              <div class="card-body msg_card_body">
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img src="/bingoimages/images/vid.jpg" class="rounded-circle user_img_msg">
                  </div>
                  <div class="msg_cotainer">
                    Hi, how are you John?
                    <br>
                    <p class="text-secondary"><span class="msg_time">8:56 AM, Today</span></p>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    Hi Jane i am good tnx how about you?
                    <br>
                    <p class="text-secondary"><span class="msg_time">9:01 AM, Today</span></p>
                  </div>
                  <div class="img_cont_msg">
                <img src="/bingoimages/images/vid2.jpg" class="rounded-circle user_img_msg">
                  </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img src="/bingoimages/images/vid.jpg" class="rounded-circle user_img_msg">
                  </div>
                  <div class="msg_cotainer">
                    I am good too, thank you for your chat template
                    <br>
                    <p class="text-secondary"><span class="msg_time">9:09 AM, Today</span></p>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    Your welcome Jane
                    <br>
                    <p class="text-secondary"><span class="msg_time">9:10 AM, Today</span></p>
                  </div>
                  <div class="img_cont_msg">
                <img src="/bingoimages/images/vid2.jpg" class="rounded-circle user_img_msg">
                  </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img src="/bingoimages/images/vid.jpg" class="rounded-circle user_img_msg">
                  </div>
                  <div class="msg_cotainer">
                    I am looking for your next templates
                    <br>
                    <p class="text-secondary"><span class="msg_time">9:11 AM, Today</span></p>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    Ok, thank you have a good day
                    <br>
                    <p class="text-secondary"><span class="msg_time">9:13 AM, Today</span></p>
                  </div>
                  <div class="img_cont_msg">
              <img src="/bingoimages/images/vid2.jpg" class="rounded-circle user_img_msg">
                  </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img src="/bingoimages/images/vid.jpg" class="rounded-circle user_img_msg">
                  </div>
                  <div class="msg_cotainer">
                    Bye, see you
                    <br>
                    <p class="text-secondary"><span class="msg_time">9:14 AM, Today</span></p>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="input-group">
                  <div class="input-group-append">
                    <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                  </div>
                  <textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
                  <div class="input-group-append">
                    <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
  </html>
  


@endsection