@extends('layout.layout')

@section('content')
    <table class="table table-stripped">
        <thead>
            <tr>
                <td>no</td>
                <td>nama pemain</td>
                <td>no punggung</td>
                <td>posisi</td>
            </tr>
        </thead>
        <tbody>
            @php
                $count = 0;
            @endphp

            @foreach ($pemains as $pemain)
                @php
                    $count++;
                @endphp
                <tr>
                    <td>{{ $count }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
