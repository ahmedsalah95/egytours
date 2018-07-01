@extends('dashboard.master')
@section('content')
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <setion class="profile">

        <div class="container">

            <div class="row">

                @if($errors->all())
                    <div style="color: #a94442; background-color: #f2dede; border-color: #ebccd1;" class="alert ">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
            <div class="row">

                            <form action="{{url('/')}}/profile/update" method="post">
                                @csrf



                                <div class="col-lg-8 col-md-8">

                                    <div class="form-group">
                                        <label for="name">name</label>
                                        <input type="text" name="name" class="form-control"
                                               placeholder="name"
                                               id="name"
                                               value="{{\Illuminate\Support\Facades\Auth::user()->name}}"
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="text" name="email" class="form-control"
                                               placeholder="email"
                                               id="email"
                                               value="{{\Illuminate\Support\Facades\Auth::user()->email}}"
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="form-group">
                                        <label for="password">password</label>
                                        <input type="password" name="password" class="form-control"
                                               placeholder="password"
                                               id="password"

                                        >
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="form-group">
                                        <label for="password_confirmation">password_confirmation</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                               placeholder="password confirmation"
                                               id="password_confirmation"

                                        >
                                    </div>
                                </div>

                                <div class="col-lg-8 col-md-8">

                                    <input type="submit" name="submit" class="btn btn-success btn-block">
                                </div>

                            </form>


        </div>

    </setion>


@stop