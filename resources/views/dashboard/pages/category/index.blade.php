@extends('dashboard.master')
@section('content')
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <section class="aboutUs">


        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <a href="{{url('/')}}/category/create" class="btn btn-success btn-block">add new category</a>
                </div>
            </div>
        </div>


        <style>
            .filterable {
                margin-top: 15px;
            }
            .filterable .panel-heading .pull-right {
                margin-top: -20px;
            }
            .filterable .filters input[disabled] {
                background-color: transparent;
                border: none;
                cursor: auto;
                box-shadow: none;
                padding: 0;
                height: auto;
            }
            .filterable .filters input[disabled]::-webkit-input-placeholder {
                color: #333;
            }
            .filterable .filters input[disabled]::-moz-placeholder {
                color: #333;
            }
            .filterable .filters input[disabled]:-ms-input-placeholder {
                color: #333;
            }
        </style>

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
                <div class="panel panel-primary filterable">
                    <div class="panel-heading">
                        <h3 class="panel-title">Users</h3>
                        <div class="pull-right">
                            <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                        <tr class="filters">
                            <th><input type="text" class="form-control" placeholder="search with id..." disabled></th>
                            <!--  <th><input type="text" class="form-control" placeholder="First Name" disabled></th>
                              <th><input type="text" class="form-control" placeholder="Last Name" disabled></th>
                              <th><input type="text" class="form-control" placeholder="Username" disabled></th> -->
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>id</td>
                            <td>name</td>
                            <td>description</td>
                            <td>action</td>

                        </tr>
                        @foreach($data as $d)
                        <tr>

                            <td>{{$d->id}}</td>
                            <td>{{$d->name}}</td>
                            <td>{!! str_limit($d->description,50)  !!}</td>
                            <td>

                                <a href="/category/{{$d->id}}/edit" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                <a href="#" onclick="event.preventDefault();
                                        document.getElementById('delete-form{{$d->id}}').submit();"
                                   style="font-size: 20px;margin-right: 5px;color: #D73925;">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                <form id="delete-form{{$d->id}}"
                                      action="{{url('/category/'.$d->id) }}"
                                      method="post"
                                      style="display: none;">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete"/>

                                </form>

                            </td>

                        </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <center>{{$data->links()}}</center>
            </div>
        </div>


        <script>

            /*
    Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
    */
            $(document).ready(function(){
                $('.filterable .btn-filter').click(function(){
                    var $panel = $(this).parents('.filterable'),
                        $filters = $panel.find('.filters input'),
                        $tbody = $panel.find('.table tbody');
                    if ($filters.prop('disabled') == true) {
                        $filters.prop('disabled', false);
                        $filters.first().focus();
                    } else {
                        $filters.val('').prop('disabled', true);
                        $tbody.find('.no-result').remove();
                        $tbody.find('tr').show();
                    }
                });

                $('.filterable .filters input').keyup(function(e){
                    /* Ignore tab key */
                    var code = e.keyCode || e.which;
                    if (code == '9') return;
                    /* Useful DOM data and selectors */
                    var $input = $(this),
                        inputContent = $input.val().toLowerCase(),
                        $panel = $input.parents('.filterable'),
                        column = $panel.find('.filters th').index($input.parents('th')),
                        $table = $panel.find('.table'),
                        $rows = $table.find('tbody tr');
                    /* Dirtiest filter function ever ;) */
                    var $filteredRows = $rows.filter(function(){
                        var value = $(this).find('td').eq(column).text().toLowerCase();
                        return value.indexOf(inputContent) === -1;
                    });
                    /* Clean previous no-result if exist */
                    $table.find('tbody .no-result').remove();
                    /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
                    $rows.show();
                    $filteredRows.hide();
                    /* Prepend no-result row if all rows are filtered */
                    if ($filteredRows.length === $rows.length) {
                        $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
                    }
                });
            });
        </script>



    </section>





@stop
