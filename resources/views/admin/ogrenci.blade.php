@extends("admin/layout")
@section("admin_main")

    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <div style="width: 83%;margin-left: 325px; margin-top: 60px";>

        <table id="example" class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>email</th>
                <th>telefon</th>
                <th>bölüm</th>
                <th>sinif</th>
                <th>okul no</th>
                <th>resim</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($array as $ay)
                <tr>
                    <td>{{$ay['name']}}</td>
                    <td>{{$ay['surname']}}</td>
                    <td>{{$ay['email']}}</td>
                    <td>{{$ay['telefon']}}</td>
                    <td>{{$ay['bolum']}}</td>
                    <td>{{$ay['sinif']}}</td>
                    <td>{{$ay['ogrenci_no']}}</td>
                    <td><img src="image/{{$ay['resim']}}" style="width: 50px; height: 50px;" ></td>

                    <td>
                        <button class="btn btn-danger" onclick="window.location.assign('ogrencisil/{{$ay['id']}}')">Sil</button>
                    </td>
                </tr>

            @endforeach

            </tbody>

        </table>
    </div>
@endsection
