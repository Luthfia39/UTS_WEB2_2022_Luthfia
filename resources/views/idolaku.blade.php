@extends("/welcome")
@section("content")
<h3 class="text-center mt-5 mb-3">Data Idolaku :</h3>
<table class="table table-striped table-hover text-center" style="border-color: saddlebrown;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alasan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($idola as $data)
        <tr>
            <td>{{++$no}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->alasan}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection