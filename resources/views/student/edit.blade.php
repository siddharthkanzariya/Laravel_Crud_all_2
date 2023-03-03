<html>
    <head>
        <h1 align="center">Edit Student Information</h1>
        <hr>
    </head>
    <body>
        <form action="{{route('student.update',$studentdata->id)}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <table align="center">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="{{$studentdata->st_name}}" required></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        Male : <input type="radio" name="gender" value="male"
                            {{$studentdata->st_gender == 'male' ? 'checked' : ''}}>
                        Female : <input type="radio" name="gender" value="female"
                            {{$studentdata->st_gender == 'female' ? 'checked' : ''}}>
                    </td>
                </tr>
                <tr>
                    <?php
                        $hobby = $studentdata->st_hobby;
                        $array = explode(',',$hobby);
                    ?>
                    <td>Hobby</td>
                    <td>
                        Movie : <input type="checkbox" name="st_hobby[]" value="movie"
                                {{in_array('movie',$array) ? 'checked' : ''}}>
                        Cricket : <input type="checkbox" name="st_hobby[]" value="cricket"
                                {{in_array('cricket',$array) ? 'checked' : ''}}>
                        Coding : <input type="checkbox" name="st_gender[]" value="coding"
                                {{in_array('coding',$array) ? 'checked' : ''}}>
                    </td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="number" name="mobile" value="{{$studentdata->st_mobile}}" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="{{$studentdata->st_email}}" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="{{$studentdata->st_password}}" required></td>
                </tr>
                <tr>
                    <td>BloodGroup</td>
                    <td>
                        <select name="bloodgroup">
                            <option value="A+" @if ($studentdata->st_bloodgroup == 'A+') selected='selected' @endif>A+</option>
                            <option value="AB+" @if ($studentdata->st_bloodgroup == 'AB+') selected='selected' @endif>AB+</option>
                            <option value="B+" @if  ($studentdata->st_bloodgroup == 'B+') selected='selected' @endif>B+</option>
                            <option value="O+" @if  ($studentdata->st_bloodgroup == 'O+') selected='selected' @endif>O+</option>
                            <option value="O-" @if  ($studentdata->st_bloodgroup == 'O-') selected='selected' @endif>O-</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea name="address" value="{{$studentdata->st_address}}"></textarea></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="image" required></td>
                </tr>
                <tr>
                    <td><img src="{{asset('uploads/'.$studentdata->st_image)}}" width="80px"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="UPDATE">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>