@extends('dashboard.master')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//cdn.ckeditor.com/4.9.0/full/ckeditor.js"></script>
@section('content')


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
                <form action="/trip/{{$id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <img src="{{url('/')}}/img/alt_images/{{$dataOfTrips->image}}" alt="logo"
                             class="img-responsive img-thumbnail">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">

                        <div class="form-group">
                            <label for="image">image</label>
                            <input type="file" class="form-control" id="image" name="image">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">

                        <div class="form-group">
                            <label for="images">images</label>
                            <input type="file" class="form-control" id="images" name="images[]" multiple>

                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="title">title</label>
                            <input id="title" name="title"
                                   class="form-control"
                                   value="{{$dataOfTrips->title}}"
                            >
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="category">category</label>
                            <select class="form-control" name="category_id" id="category">

                                @if ($categories->count())

                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>


                                    @endforeach
                                @endif

                            </select>
                        </div>
                    </div>


                    <div class="tab-unit">


                        @if($visitors)

                            @foreach($visitors as $visitor)

                                <div class="removable">


                                    <div class="col-lg-5 col-md-5 col-sm-5">
                                        <div class="form-group">
                                            <label for="no_of_visitors">number of visitors</label>
                                            <input type="text" name="no_of_visitors[]" class="form-control"
                                                   placeholder="number of visitors"
                                                   id="no_of_visitors"
                                                   value="{{$visitor->no_of_visitors}}"

                                            >
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-5 col-sm-5">
                                        <div class="form-group">
                                            <label for="price_of_visitor">price of visitor</label>
                                            <input type="text" name="price_of_visitor[]" class="form-control"
                                                   placeholder="price of one visitor"
                                                   id="price_of_visitor"
                                                   value="{{$visitor->price_of_visitor}}"

                                            >

                                        </div>

                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <label for="price_of_visitor" style="    visibility: hidden;"> .</label>
                                        <div class=" btn btn-danger form-control removeBt"
                                             onclick="del(this)">Delete</div>
                                    </div>
                                </div>
                            @endforeach
                        @endif


                    </div>
                    <hr>
                    <button type="button" class="btn btn-warning btn-block appendText">add visitors</button>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" cols="10" rows="3" name="description"
                                      class="form-control"

                            >
                                {{$dataOfTrips->description}}

                            </textarea>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="inclusion">inclusion</label>
                            <textarea id="inclusion" cols="10" rows="3" name="inclusion"
                                      class="form-control"
                            > {{$dataOfTrips->inclusion}}</textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="exclusion">exclusion</label>
                            <textarea id="exclusion" cols="10" rows="3" name="exclusion"
                                      class="form-control"
                            >{{$dataOfTrips->exclusion}}</textarea>
                        </div>
                    </div>


                    <input type="submit" name="submit" class="btn btn-success btn-block">


                </form>
            </div>

        </div>


    </div>



    <script>

        var row = '<div class="removable"> <div class="col-lg-5 col-md-5 col-sm-5">\n' +
            '                            <div class="form-group">\n' +
            '                                <label for="no_of_visitors">number of visitors</label>\n' +
            '                                <input type="text" name="no_of_visitors[]" class="form-control"\n' +
            '                                       placeholder="number of visitors"\n' +
            '                                       id="no_of_visitors">\n' +


            '                            </div>\n' +
            '                        </div>\n' +
            '\n' +
            '                        <div class="col-lg-5 col-md-5 col-sm-5">\n' +
            '                            <div class="form-group">\n' +
            '                                <label for="price_of_visitor">price of visitor</label>\n' +
            '                                <input type="text" name="price_of_visitor[]" class="form-control"\n' +
            '                                       placeholder="price of one visitor"\n' +
            '                                       id="price_of_visitor">\n' +

            '                            </div>\n' +
            '                        </div> <div class="col-lg-2 col-md-2 col-sm-2"><label for="price_of_visitor" style="    visibility: hidden;"> .</label><div  class="btn btn-danger form-control removeBt"' +
            '                            onclick="del(this)">Delete</div></div>  </div><hr>';

        $('.appendText').on('click', function () {

            $('.tab-unit').append(row);


        });


        function del(e) {
            var x = $(e).parents('.removable');
            x.remove();
        }
    </script>

    <script>
        CKEDITOR.replace('description');
        CKEDITOR.replace('inclusion');
        CKEDITOR.replace('exclusion');
    </script>

@stop