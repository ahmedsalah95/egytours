@extends('dashboard.master')
<script src="//cdn.ckeditor.com/4.9.0/full/ckeditor.js"></script>
@section('content')



   {{$data = \App\About::where('id',$id)->first()}}

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
                <form action="/saveUpdate/{{$id}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="col-lg-4 col-md-4 col-sm-4 pull right">
                        <img src="{{\Illuminate\Support\Facades\Config::get('app.url')}}/egy-tour/public/img/alt_images/{{$data->image}}"
                             alt="logo" class="img-responsive img-thumbnail" >
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">

                        <div class="form-group">
                            <label for="image">image</label>
                            <input type="file" class="form-control" id="image" name="image" value="{{$data->image}}">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">

                        <div class="form-group">
                            <label for="title">title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{$data->title}}">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea  id="description" cols="10" rows="3" name="description"
                                       class="form-control"

                            >{{$data->description}}</textarea>
                        </div>
                    </div>


                    <input type="submit" name="submit" class="btn btn-success btn-block">


                </form>
            </div>

        </div>


    </div>





    <script>
        CKEDITOR.replace( 'description' );
    </script>

@stop