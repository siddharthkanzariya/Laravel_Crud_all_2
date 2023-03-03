<b>ID</b> : {{$studentdata->id}}
<br>
<b>Name</b> : {{$studentdata->st_name}}
<br>
<b>Gender</b> : {{$studentdata->st_gender}}
<br>
<b>Hooby</b> : {{$studentdata->st_hobby}}
<br>
<b>Mobile</b> : {{$studentdata->st_mobile}}
<br>
<b>Email</b> : {{$studentdata->st_email}}
<br>
<b>Password</b> : {{$studentdata->st_password}}
<br>
<b>Bloodgroup</b> : {{$studentdata->st_bloodgroup}}
<br>
<b>Address</b> : {{$studentdata->st_address}}
<br>
<img src="{{asset('uploads/' . $studentdata->st_image)}}" width="90px">
<br>
<a href="{{route('student.index')}}">Back</a>
