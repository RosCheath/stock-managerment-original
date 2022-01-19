@extends('home')

@section('content')


<div id="container" class="effect mainnav-full">
    <div class="boxed">
        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">
            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="pageheader">
                <h3><i class="fa fa-home"></i> Forms Validation </h3>
                <div class="breadcrumb-wrapper">
                    <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Home </a> </li>
                        <li class="active"> Forms Validation </li>
                    </ol>
                </div>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->
            <!--Page content-->
            <!--===================================================-->
            <form method="post" action="{{ route('products.store')}}">
            @csrf
            <div id="page-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel">
                            <!-- Panel heading -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Tooltip Validation</h3>
                            </div>
                            <div id="demo-tooltip-validation" class="form-horizontal">

                                <div class="panel-body">
                                    <!--SHOWING ERRORS IN TOOLTIP-->
                                    <!--===================================================-->
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Name</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required value="{{old('name')}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"> Category </label>
                                        <div class="col-lg-5">
                                            <!-- Bootstrap Select with Search Input -->
                                            <!--===================================================-->
                                            <select class="form-control selectpicker" data-live-search="true" id="category_id" name="category_id">
                                                @foreach($categories as $category)--}}
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            <!--===================================================-->
                                        </div>
                                    </div>
{{--                                    <input type="text" class="hidden" name="stock_id" value="{{Auth::id()}}">--}}
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Unit Price</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="unit_price" placeholder="Unit Price" required value="{{old('quanity')}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Selling Price</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="selling_price" placeholder="Selling Price" required value="{{old('selling_price')}}">
                                        </div>
                                    </div>

                                    <!--===================================================-->
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel">
                            <!-- Panel heading -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Tooltip Validation</h3>
                            </div>
                            <div id="demo-tooltip-validation" class="form-horizontal">
                                <div class="panel-body">
                                    <!--SHOWING ERRORS IN TOOLTIP-->
                                    <!--===================================================-->
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Year</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="year" placeholder="year" required value="{{old('year')}}">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">quantity</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="quantity" placeholder="quantity" required value="{{old('quantity')}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">location</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="location" placeholder="location" required value="{{old('location')}}">
                                        </div>
                                    </div>

                                    <!--===================================================-->
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-sm-7 col-sm-offset-3">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--===================================================-->
            <!--End page content-->
        </div>
            </form>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->
    </div>

    <!-- SCROLL TOP BUTTON -->
    <!--===================================================-->
    <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
    <!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->
<!--Form validation [ SAMPLE ]-->

@endsection
