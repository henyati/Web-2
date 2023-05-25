@php
$nama = 'Heny';
$nilai = 90;
@endphp

@if ($nilai > 60)
@php
    $ket = "Lulus";
@endphp

@else
@php
    $ket = "Gagal";
@endphp

@endif

Mahasiswa {{ $nama }} dengan nilai {{ $nilai }} dinyatakan {{ $ket }}