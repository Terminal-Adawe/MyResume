@include('head')
<body class="body">
	<div class="container-fluid">
    <div class="row">
      <div class="col-lg-1 col-md-1 col-sm-12">
      </div>

      <div class="col-lg-9">
        <h2>Personal Details</h2>
        <p>Enter your personal details</p>
 
        <form action="/savepersonaldetails" class="needs-validation" method="post" novalidate>
          {{ csrf_field() }}
          <div class="form-group">
            <label for="firstname">Surname:</label>
            <input type="text" class="form-control" id="firstname" placeholder="Enter Your  Surame" name="surname" value="{{ $data['personaldetails']->surname ?? '' }}" required>
          </div>
          <div class="form-group">
            <label for="othernames">Other names:</label>
            <input type="text" class="form-control" id="othernames" placeholder="Enter Other Names" name="othernames" value="{{ $data['personaldetails']->other_names ?? '' }}" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{ $data['personaldetails']->email ?? '' }}" required>
          </div>
          <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" class="form-control" id="country" placeholder="Enter Country" name="country" value="{{ $data['personaldetails']->country ?? '' }}"mrequired>
          </div>
          <div class="form-group">
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" value="{{ $data['personaldetails']->city ?? '' }}" required>
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="{{ $data['personaldetails']->address ?? '' }}" required>
          </div>
          <div class="form-group">
            <label for="contactnumber">Contact Number(s):</label>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" id="email" placeholder="Contact Number 1" name="contact1" value="{{ $data['personaldetails']->contact_number_1 ?? '' }}">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Contact Number 2" name="contact2" value="{{ $data['personaldetails']->contact_number_2 ?? '' }}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <button type="submit" class="stylessbutton"><img src="https://img.icons8.com/ultraviolet/40/000000/circled-chevron-right.png"/> Add Professional Experience</button>
            </div>
            <div class="col">
              <button type="button" class="stylessbutton"><img src="https://img.icons8.com/color/48/000000/submit-progress--v1.png"/> View Resume</button>
            </div>
          </div>
        </form>

      </div>

      <div class="col-lg-2 col-md-2 col-sm-12">
      </div>
    </div>
  </div>
	@include('footer')