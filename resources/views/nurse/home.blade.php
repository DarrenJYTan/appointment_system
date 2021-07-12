@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h1>Hi nurse!</h1>

                    <table>
                        <tr>
                            <th>Patient Name</th>
                            <th>Appointment Code</th>
                            <th>...</th>
                            <th>...</th> 
                        </tr>
                        @foreach()
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection