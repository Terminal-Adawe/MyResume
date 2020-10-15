<!DOCTYPE html>
<html lang="en">
<head>
<title>Orange Template</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Resume site">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/967d61a618.js" crossorigin="anonymous"></script>
</head>
<body style="width: 100%; position: relative; margin:0; padding: 0;">
  <div style="position: relative; width: 90%; background-color: yellow; left:50%; transform: translate(-50%, 0%);">
    <!-- Heading -->
    <div style="width: 100%; position: relative;">
      <!-- Name -->
      <div style="width: 75%; float:left; margin:0">
        <div style="padding: 15px; text-align: center;">
          <p>
            <h1 style="font-size: 44px">{{ $data['personaldetails']->surname }} {{ $data['personaldetails']->other_names }}</h1>
          </p>
        </div>
      </div>
      <!-- address -->
      <div style="position: relative; width: 25%; float: left;">
        <div style="padding-top: 19px; font-size: 22px;">
          <p>
            {{ $data['personaldetails']->address }}
            <br>
            {{ $data['personaldetails']->city }}, {{ $data['personaldetails']->country }}
          </p>
          <p>
            <small><b>{{ $data['personaldetails']->contact_number_1 }}</b></small>
            <br>
            <small><b>{{ optional($data['personaldetails'])->contact_number_2 }}</b></small>
            <br>
            <small><b>{{ $data['personaldetails']->email }}</b></small>
          </p>

        </div>
      </div>
    </div>
  
    <!-- Other information -->
    <div style="position: relative; width: 100%;">
      <!-- Experience Details -->
      <div style="width: 75%; float:left; margin:0">
        <!-- Summary -->
        <div style="width: 93%; font-size: 23px; color: #424949;">
          <h5 style="color: #5480f9">SUMMARY</h5>
          <p>
            {{ $data['summary']->summary }}
          </p>
        </div>
        <!-- Professional Experience Details -->
        <div style="width: 93%; font-size: 23px; color: #424949; top: 45px">
          <h5 style="color: #5480f9">EXPERIENCE</h5>
          @foreach($data['professionalexperience'] as $experience)
          <div style="width: 100%; position: relative; display: block; padding-top: 13px; padding-bottom: 13px;">
            <b>{{ $experience->company }}, </b>{{ $experience->address }}, {{ $experience->city }}
            <br>
            <small>{{ $experience->date_started }} to {{ $experience->date_ended }}</small>
            <div style="width: 100%; position: relative; top: 10px">
              <!-- <div style="width: 7px; height: 7px; border-radius: 50%; background-color: #abb2b9; float: left; top: 3px; position: relative;"></div>  -->
              <div style="float: left; position: relative; left: 15px;">
                {{ nl2br(e($experience->duties)) }}
              </div>
            </div>
          </div>
          <br>
          @endforeach
        </div>
        <!-- Education Details -->
        <div style="width: 93%; font-size: 23px; color: #424949; top: 45px">
          <h5 style="color: #5480f9">EDUCATION</h5>
          @foreach($data['education'] as $education)
          <div style="width: 100%; position: relative;">
            <b>{{ $education->school }}, </b>{{ $education->address }}, {{ $education->country }}
            <br>
            <small>{{ $education->date_started }} to {{ $education->date_ended }}</small>
            <div style="width: 100%; position: relative; top: 10px">
              <div style="float: left; position: relative; left: 15px;">
                {{ $education->projects }}
              </div>
            </div>
          </div>
          <br>
          @endforeach
        </div>
      </div>

      <!-- Right Side bar -->
      <div style="position: relative; width: 25%; float: left;">
        <!-- Skills -->
        <div style="width: 100%;">
          <div style="padding-top: 19px; font-size: 19px;">
            <h5 style="color: #5480f9">SKILLS</h5>
            @foreach($data['skills'] as $skill)
            <div style="width: 7px; height: 7px; border-radius: 50%; background-color: #abb2b9; float: left; top: 3px; position: relative;"></div> <div style="float: left; position: relative; padding-left: 38px"> {{ $skill->skill }}  </div>
            <br>
           @endforeach
          </div>
        </div>
        <!-- Hobbies -->
        <div style="width: 100%;">
          <div style="padding-top: 19px; font-size: 19px;">
            <h5 style="color: #5480f9">HOBBIES</h5>
            @foreach($data['hobbies'] as $hobby)
            <div style="width: 7px; height: 7px; border-radius: 50%; background-color: #abb2b9; float: left; top: 3px; position: relative;"></div> <div style="float: left; position: relative; padding-left: 38px"> {{ $hobby->hobby }}  </div>
            <br>
           @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</body>