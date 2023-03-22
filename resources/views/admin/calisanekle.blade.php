@extends("admin/layout")
@section("admin_main")
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .eklediv{
            width: 600px;
            display: flex;
            justify-content: center;
            align-content: center;
            margin: auto;
        }
        label,input,select,textarea{
            margin-top: 5px;
            width: 100%;
            height: 30px;
        }
        textarea{
            height: 200px;
        }
    </style>
<div class="eklediv">
    <form action="calisankaydet" method="get" enctype="multipart/form-data">
        <label for="" >Çalışan Adı:</label>
        <input type="text" name="name" id="">
        <label for="" >Çalışan Soyadı:</label>
        <input type="text" name="surname" id="">
        <label for="" >Çalışan Email:</label>
        <input type="email" name="email" id="">
        <label for="" >Çalışan telefon:</label>
        <input type="number" name="tel" id="">
        <label for="" >Çalışan görev:</label>
        <select name="gorev">
            <option value="sofor">Şoför</option>
            <option value="muavin">Muavin</option>
            <option value="rehber">Rehber</option>
        </select>
        <label for="" >Çalışan sorumluluk :</label>
        <textarea name="sorumluluk"></textarea>
        <label for="" >Çalışan resim:</label>
        <input type="file" name="resim" id="">
        <input type="submit" value="Kaydet">
    </form>
</div>

@endsection
