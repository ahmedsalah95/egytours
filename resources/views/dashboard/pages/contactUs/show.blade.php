@extends('dashboard.master')
@section('content')
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <section class="show">
        <div class="container">
            @if(isset($data))

                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center"> message ID : <b>{{$data->id}}</b> </h2>
                        <h2 class="text-center">email : <b>{{$data->email}}</b></h2>
                        <h2 class="text-center">subject : <b>{{$data->subject}}</b></h2>


                        <hr>
                        <h1 class="text-center"><b>Message</b></h1>
                        <center>

                            <div>

                                <p>{{$data->message}}</p>
                            </div>


                        </center>


                    </div>
                </div>

            @endif
        </div>




    </section>




@stop