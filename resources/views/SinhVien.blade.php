<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Sinh vien</h1>
    @php
    foreach($users as $sinhVien):
    @endphp
    <p>Ho ten: {{ $sinhVien->sinh_vien_name }} Nganh: {{ $sinhVien->khoa_name }}</p>
    @php
    endforeach;
    @endphp

    <h1>======================</h1>

    @php
    foreach($count as $demKhoa):
    @endphp
    <p>Khoa: {{ $demKhoa->khoa_name }} So luong: {{ $demKhoa->sinh_vien_count }}</p>
    @php
    endforeach;
    @endphp

</body>
</html>