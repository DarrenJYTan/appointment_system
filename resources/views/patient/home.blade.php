@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h2>Hi patient!</h2>
                    <form method="POST" action="/getAC">
                    @csrf
                        <div class="card-body">
                            <h1>Appointment Code: </h1>
                            <button onclick="generateAppointmentCode()">Take Code</button>
                            <h1 id="demo"></h1>
                            <button id="subBtn" style="display: none">OK</button>
                            <script>
                                function generateAppointmentCode() {
                                    event.preventDefault();
                                    document.getElementById("demo").innerHTML = Math.floor(Math.random() * 1000);
                                    document.getElementById("subBtn").style.display="block";
                                }
                            </script>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection