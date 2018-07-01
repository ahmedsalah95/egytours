@extends('dashboard.master')
@section('content')
    <script src="//cdn.ckeditor.com/4.9.0/full/ckeditor.js"></script>
@foreach($data as $d)



    <section class="settings">
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

                <div class="col-lg-12 col-md-12">
                    <form action="/submitImg" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="logo">logo</label>
                                <input type="file" class="form-control" id="logo" name="image" value="{{$d->image}}">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                         <img src="{{\Illuminate\Support\Facades\Config::get('app.url')}}/egy-tour/public/img/alt_images/{{$d->image}}"
                              alt="logo" class="img-responsive img-thumbnail" >
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$d->email}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone">phone</label>
                                <input type="number" class="form-control" id="phone" name="phone" placeholder="phone" value="{{$d->phone}}">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="address">address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="address" value="{{$d->address}}">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="description">History Description</label>
                                <textarea name="description" id="description" cols="10" rows="3" name="description"
                                          class="form-control"
                                          placeholder="History Description"

                                >{{$d->description}}</textarea>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="facebook">facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="facebook" value="{{$d->facebook}}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="twitter">twitter</label>
                                <input type="text" class="form-control" id="twitter" name="twitter" placeholder="twitter"value="{{$d->twitter}}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="insta">instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram" placeholder="instagram" value="{{$d->instagram}}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="youtube">youtube</label>
                                <input type="text" class="form-control" id="youtube" name="youtube" placeholder="youtube" value="{{$d->youtube}}">
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="link1">link1</label>
                                <input type="text" class="form-control" id="link1" name="link1" placeholder="link1" value="{{$d->link1}}">
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="link2">link2</label>
                                <input type="text" class="form-control" id="link2" name="link2" placeholder="link2" value="{{$d->link2}}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="link3">link3</label>
                                <input type="text" class="form-control" id="link3" name="link3" placeholder="link3" value="{{$d->link3}}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="link4">link4</label>
                                <input type="text" class="form-control" id="link4" name="link4" placeholder="link4" value="{{$d->link4}}">
                            </div>
                        </div>


                        <input type="submit" class="btn btn-success btn-block" name="submit" >



                    </form>

                </div>

            </div>
        </div>
    </section>


    <script>
        CKEDITOR.replace( 'description' );
    </script>
@endforeach

@stop