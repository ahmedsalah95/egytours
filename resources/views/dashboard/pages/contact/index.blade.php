@extends('dashboard.master')
@section('content')
    <script src="//cdn.ckeditor.com/4.9.0/full/ckeditor.js"></script>
@foreach($data as $d)


    <section class="contact">
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
                <div class="col-lg-12">

                    <form action="/contact" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="map">map (address)</label>
                            <input type="text" class="form-control" id="map" name="map" value="{{$d->map}}">
                        </div>

                        <div class="form-group">
                            <label for="title">title</label>
                            <input type="text" class="form-control" id="title" name="page_title" value="{{$d->page_title}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea  id="description" cols="10" rows="3" name="description"
                                       class="form-control"

                            >{{$d->description}}</textarea>
                        </div>


                        <input type="submit" name="submit" class="btn btn-success btn-block">
                    </form>

                </div>
            </div>
        </div>
    </section>
@endforeach

    <script>
        CKEDITOR.replace( 'description' );
    </script>

@stop