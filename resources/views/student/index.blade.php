<h1 align="center">Student Information Table</h1>
<hr>
@if(session()->get('success'))
    {{ session()->get('success') }}
@endif
<br>
<table border="1" align="center">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>GENDER</th>
        <th>HOBBY</th>
        <th>MOBILE</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>BLOODGROUP</th>
        <th>ADDRESS</th>
        <th>IMAGE</th>
        <th colspan="4">ACTION</th>
    </tr>
    @foreach($studentarray as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->st_name}}</td>
            <td>{{$student->st_gender}}</td>
            <td>{{$student->st_hobby}}</td>
            <td>{{$student->st_mobile}}</td>
            <td>{{$student->st_email}}</td>
            <td>{{$student->st_password}}</td>
            <td>{{$student->st_bloodgroup}}</td>
            <td>{{$student->st_address}}</td>
            <td><img src="{{asset('uploads/' . $student->st_image)}}" width="90px"></td>
            <td>
                <a href="{{route('student.show',$student->id)}}">SHOW</a>
            </td>
            <td>
                <a href="{{route('student.edit',$student->id)}}">EDIT</a>
            </td>
            <td>
                <form method="post" action="{{route('student.destroy',$student->id)}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="DELETE">
                </form>
            </td>
        </tr>
    @endforeach
</table>