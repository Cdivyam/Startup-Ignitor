@extends('startupview.app')

@section('content')

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Memorandum of Understanding</h1>
          <h3>Relationship</h3>
          <p>We have voluntarily entered into a mentoring relationship. As a mentee I will openly discuss my career goals and experiences for the purpose of shared learning and career enhancement. As a mentor I agree to respect my mentee in regards to their independent goals. We agree to attempt to work thorough any communication challenges or relationship conflicts that may arise during the relationship, butunderstand that we can terminate this relationship at any time by contacting the mentoring program coordinator. We may or may not be matched with a different mentor/ mentee.</p>
          <h3>Confidentiality </h3>
          <p>We understand that confidentiality is critical to developing a trusting mentoring relationship. Consequently, we agree to maintain theconfidentiality of the person and business experiences that we share with each other. Furthermore, we understand that we will both uphold the same standard of confidentiality.</p>
          <h3>Time Commitment</h3>
          <p>We commit to meet at least once in six months, with that including Staff Mentorship Speaker Series presentations which are one hour sessions, to include the initial orientation.</p>
          <h3>Expectations</h3>
          <p>We will hold ourselves to the expectations as outlined in the initial training session. Together we will create long-term and short-term objectives to make our time together meaningful and productive.</p>
          <form>
          <div class="checkbox">
            <label><input type="checkbox" value="">I understand and agree to the terms on this page.</label>
          </div>
          </form>
          <div class="row">
          <div class="col-sm-6" style="background-color:lavender;">
            <div>Name of mentee:
              <p><input placeholder="Enter your name..." onfocus="this.value=''" oninput="this.className = ''" name="name" ></p>
            </div>
          </div>
          <div class="col-sm-6" style="background-color:lavender;">
            <div>Name of mentor:
              <p><input placeholder="Enter your name..." onfocus="this.value=''" oninput="this.className = ''" name="name" ></p>
            </div>
          </div>
          </div>
          <div class="row">
          <div class="col-sm-6" style="background-color:lavender;">
            <div>Date:
              <p><input placeholder="Enter date..." onfocus="this.value=''" oninput="this.className = ''" name="date" ></p>
            </div>
          </div>
          <div class="col-sm-6" style="background-color:lavender;">
            <div>Date:
              <p><input placeholder="Enter date..." onfocus="this.value=''" oninput="this.className = ''" name="date" ></p>
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