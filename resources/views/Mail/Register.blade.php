<html>
    <head>
        <style>
            table {
                border: 1px solid black;
                border-collapse: collapse;
                width: 100%;
                }

                th, td {
                border: 1px solid black;
                text-align: center;
                padding: 8px;
                }
                th {background-color: rgb(44, 42, 42); color: white}
        </style>
    </head>
<body>
    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                <th>Profession</th>
                <th>Candidate name</th>
                <th>Date of Birth</th>
                <th>mobile</th>
                <th>email</th>
                <th>address_1</th>
                <th>town</th>
                <th>state</th>
                <th>country</th>
                <th>post_code</th>
                <th>specialty</th>
                <th>senority</th>
                <th>work_rights_status</th>
                <th>password</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$data['title']}}</td>
                    <td>{{ $data['first_name']." ".$data['last_name']}}</td>
                    <td>{{$data['dob']}}</td>
                    <td>{{$data['mobile']}}</td>
                    <td>{{$data['email']}}</td>
                    <td>{{$data['address_1']}}</td>
                    <td>{{$data['town']}}</td>
                    <td>{{$data['state']}}</td>
                    <td>{{$data['country']}}</td>
                    <td>{{$data['post_code']}}</td>
                    <td>{{$data['specialty']}}</td>
                    <td>{{$data['senority']}}</td>
                    <td>{{$data['work_rights_status']}}</td>
                    <td>{{$data['password']}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
