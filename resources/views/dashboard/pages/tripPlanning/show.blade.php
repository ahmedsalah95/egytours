@extends('dashboard.master')
@section('content')
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <section class="show">
        <div class="container">
            @if(isset($data))

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Planned Trip ID : <b>{{$data->id}}</b> </h2>
                    <h2 class="text-center">name : <b>{{$data->name}}</b></h2>
                    <h2 class="text-center">email : <b>{{$data->email}}</b></h2>
                    <h2 class="text-center">Nationality : <b> {{$data->nationality}}</b></h2>
                    <h2 class="text-center">phone number and whatsapp : <b>{{$data->whatsapp}}</b></h2>
                    <h2 class="text-center">payment currancy : <b>{{$data->coin}}</b> </h2>

                    <hr>
                    <h1 class="text-center"><b>customer {{$data->name}}'s plan</b></h1>
                    <center>

                        <div>

                            <p>{{$data->plan}}</p>
                        </div>


                    </center>


                </div>
            </div>

                @endif
        </div>




    </section>




@stop