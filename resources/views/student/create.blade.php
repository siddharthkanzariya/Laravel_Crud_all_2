<html>
    <head>
        <h1 align="center">Enter Student Information</h1>
        <hr>
    </head>
    <body>
        <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <table align="center">
                <tr>
                    <th>Enter Name</th>
                    <td><input type="text" name="name" placeholder="Enter Student Name" required></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>
                        Male : <input type="radio" name="gender" value="male">
                        Female : <input type="radio" name="gender" value="female">
                    </td>
                </tr>
                <tr>
                    <th>Hobby</th>
                    <td>
                        Movie : <input type="checkbox" name="st_hobby[]" value="movie">
                        Cricket : <input type="checkbox" name="st_hobby[]" value="cricket">
                        Coding : <input type="checkbox" name="st_hobby[]" value="coding">
                    </td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td><input type="number" name="mobile" placeholder="Enter Student Mobile" required></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="email" name="email" placeholder="Enter Student EmailID"></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="password" placeholder="Enter Student Password"></td>
                </tr>
                <tr>
                    <th>BloodGroup</th>
                    <td>
                        <select name="bloodgroup">
                            <option value="A+">A+</option>
                            <option value="AB+">AB+</option>
                            <option value="B+">B+</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><textarea name="address"></textarea></td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td><input type="file" name="image" required></td>
                </tr>
                <tr>
                    <td><input type="submit"> <input type="reset"></td>
                </tr>
            </table>
        </form>
    </body>
</html>