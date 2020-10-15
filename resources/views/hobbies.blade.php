@include('head')
<body class="body">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-1 col-md-1 col-sm-12">
      </div>

      <div class="col-lg-7 col-md-8 col-sm-8">
        <h2>Hobbies</h2>
        <p>What do you like doing?</p>
        <form action="/savehobby" class="needs-validation" method="post" id="form" novalidate>
          {{ csrf_field() }}
          <input type="hidden" value="0" id="hiddencheck" name='hiddencheck'>
          <div class="form-group">
            <label for="hobby">Hobby:</label>
            <input type="text" class="form-control" id="skill" placeholder="Enter Hobby" name="hobby" required>
          </div>
          
          <div class="row">
            <div class="col">
                <button type="submit" class="stylessbutton"><img src="https://img.icons8.com/officel/40/000000/add.png"/> Add Hobby</button>
            </div>
            <div class="col">
              <button type="button" class="stylessbutton" id="next"><img src="https://img.icons8.com/ultraviolet/40/000000/circled-chevron-right.png"/> Add Summary</button>
            </div>
            <div class="col">
              <button type="button" class="stylessbutton" id="viewResume"><img src="https://img.icons8.com/color/48/000000/submit-progress--v1.png"/> View Resume</button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-2 col-md-1 col-sm-1">
        <div class="row">
          List of Hobbies
        </div>

        @foreach($data['hobbies'] as $hobby)
        <div class="card bg-info text-white mt-1">
          <div class="card-body">{{ $hobby->hobby }}</div>
        </div>
        @endforeach
      </div>

      <div class="col-lg-2 col-md-2 col-sm-12">
        <a href="https://icons8.com/icon/eLDQ6zxrIhcP/add">Add icon by Icons8</a>
      </div>
    </div>
  </div>
 @include('footer')