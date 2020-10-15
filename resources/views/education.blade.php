@include('head')
<body class="body">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-1 col-md-1 col-sm-12">
      </div>

      <div class="col-lg-7 col-md-8 col-sm-8">
        <h2>Educational Background</h2>
        <p>Where did you go to school?</p>
        <form action="/saveeducation" class="needs-validation"  method="post" id="form" novalidate>
          {{ csrf_field() }}
          <input type="hidden" value="0" id="hiddencheck" name='hiddencheck'>
          <div class="form-group">
            <label for="school">Name of School:</label>
            <input type="text" class="form-control" id="school" placeholder="Enter Name of School" name="school" required>
          </div>
          <div class="form-group">
            <label for="certification">Select Certification:</label>
            <select class="form-control" id="certification" name="certification">
              @foreach($data['certificates'] as $certificate)
              <option>{{ $certificate->certification }}</option>
              @endforeach
            </select>
          </div> 
          <div class="form-group">
            <label for="courses">Courses:</label>
            <input type="text" class="form-control" id="courses" placeholder="Enter Courses" name="courses" required>
          </div>
          <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" class="form-control" id="country" placeholder="Enter Country" name="country" required>
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
          </div>

          <div class="form-group row">
            <div class="col">
              <label for="example-datetime-local-input">From:</label>
                <input class="form-control" type="date" id="example-datetime-local-input" name="fromdate">
            </div>

            <div class="col">
              <label for="example-datetime-local-input">To:</label>
                <input class="form-control" type="date" id="example-datetime-local-input" name="todate">
            </div>

          </div>

          <div class="form-group">
            <label for="projects">Project <small>(what projects have you worked on?)</small>:</label>
            <textarea rows='5' id='projects' name='projects' class="form-control"></textarea>
          </div>
          <div class="row">
            <div class="col">
                <button type="submit" class="stylessbutton" id="add"><img src="https://img.icons8.com/officel/40/000000/add.png"/> Add Education</button>
            </div>
            <div class="col">
              <button type="button" class="stylessbutton" id="next"><img src="https://img.icons8.com/ultraviolet/40/000000/circled-chevron-right.png"/> Add Skills</button>
            </div>
            <div class="col">
              <button type="button" class="stylessbutton"><img src="https://img.icons8.com/color/48/000000/submit-progress--v1.png"/> View Resume</button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-2 col-md-1 col-sm-1">
        <div class="row">
          List of schools attended
        </div>
        @foreach($data['education'] as $education)
        <div class="card bg-info text-white mt-1">
          <div class="card-body">{{ $education->school }}</div>
        </div>
        @endforeach
      </div>

      <div class="col-lg-2 col-md-2 col-sm-12">
        <a href="https://icons8.com/icon/eLDQ6zxrIhcP/add">Add icon by Icons8</a>
      </div>
    </div>
  </div>
 @include('footer')