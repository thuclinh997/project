@extends('backend.layouts.master')
@section('title')
@lang('language.brand')
@endsection
@section('content')
<ul class="breadcrumb">
    <li><a href="{{ route('home.admin') }}">@lang('language.home') </a></li>                    
    <li class="active">@lang('language.brand') </li>
</ul>
<div class="page-content-wrap">                

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>create @lang('language.brand')</h3>
                    <form action="{{ route('brands.store') }}" method="post" class="form-inline" role="form">
                        @csrf
                            <div class="input-group" style="width: 80%">                                
                                <label class="sr-only">Name</label>
                                <input class="form-control" name="name" type="text" placeholder="name @lang('language.category')">
                            </div>
                        <button type="submit" class="btn btn-danger">Create</button>
                    </form>                   
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>@lang('language.brand')</h3>
                    <div class="table-responsive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th></th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)
                                <tr>
                                    <form action="{{ route('brands.update', $brand->id) }}" method="post" class="form-inline" role="form">
                                        @method('PATCH')
                                        @csrf
                                        <td>
                                            <input class="form-control" name="name" type="text" value="{{ $brand->name }}">
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></button>
                                        </td>
                                    </form>
                                    <td>
                                        <form action="{{ route('brands.destroy', $brand->id) }}" method="post">
                                            @method("DELETE")
                                            @csrf
                                            <button class="btn btn-danger btn-rounded btn-condensed btn-sm" onclick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END DEFAULT DATATABLE -->

        </div>
    </div>                                
    
</div>
@endsection
