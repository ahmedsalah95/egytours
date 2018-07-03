@extends('dashboard.master')
<script src="//cdn.ckeditor.com/4.9.0/full/ckeditor.js"></script>
@section('content')

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

@foreach($data as $d)
    <section class="homeSettings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="/homeSettings" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="header">
                            <h2 class="text-center">header edit</h2>


                            <div class="form-group">
                                <label for="image">image</label>
                                <input type="file" class="form-control" id="image" name="image" value="{{$d->image}}">

                            </div>
                            <div class="form-group">
                                <h3 class="current header image"></h3>
                                <img src="{{url('/')}}/img/alt_images/{{$d->image}}
                                        "  alt="logo" class="img-responsive img-thumbnail" width="250" height="250">

                            </div>

                            <div class="form-group">
                                <label for="titleOfHeader">header title</label>
                                <input type="text" class="form-control" id="titleOfHeader" name="title" value="{{$d->title}}">
                            </div>


                        </div>

                        <div class="section3">
                            <h2 class="text-center">section 3</h2>
                            <div class="form-group">
                                <label for="section_3_title">title</label>
                                <input type="text" class="form-control" id="section_3_title" name="section_3_title"
                                       value="{{$d->section_3_title}}"
                                       placeholder="title...">

                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea  id="description" cols="10" rows="3" name="section_3_desc"
                                           class="form-control"

                                >{{$d->section_3_desc}}</textarea>
                            </div>


                        </div>

                        <hr>
                        <div class="section5">
                            <h2 class="text-center">section 5</h2>


                            <div class="form-group">
                                <label for="section_5_image">image</label>
                                <input type="file" class="form-control" id="section_5_image"
                                       value="{{$d->section_5_image}}"
                                       name="section_5_image"
                                >

                            </div>

                            <div class="form-group">
                                <h3 class="current header image"></h3>
                                <img src="{{url('/')}}/img/alt_images/{{$d->section_5_image}}"
                                     alt="logo" class="img-responsive img-thumbnail" width="250" height="250">

                            </div>


                            <div class="form-group">
                                <label for="section_5_title">title</label>
                                <input type="text" class="form-control" id="section_5_title" name="section_5_title"
                                       value="{{$d->section_5_title}}"
                                       placeholder="title...">

                            </div>

                            <div class="form-group">
                                <label for="description2">Description</label>
                                <textarea  id="description2" cols="10" rows="3" name="section_5_desc"
                                           class="form-control"

                                >{{$d->section_5_desc }}</textarea>
                            </div>


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
    CKEDITOR.replace( 'description2' );
</script>
@stop