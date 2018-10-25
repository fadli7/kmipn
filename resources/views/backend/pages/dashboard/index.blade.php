@extends('backend.master')

@section('content')
    <div class="page-header">
        <h2>Dashboard</h2>
    </div>

    <div class="row">
        <table>
            <tr>
                <td>{{ $data }}</td>
            </tr>
        </table>
    </div>
@endsection
