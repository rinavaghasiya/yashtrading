@extends('Admin.admincontent')
@section('title')
Dashboard
@endsection
@section('body')
<?php
use Carbon\Carbon;?>
 <div class="page-wrapper">
 <div class="page-container">
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-7 col-lg-4">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                            <!-- <i class="fas  fa-list-alt"></i> -->
                                            </div>
                                            <div class="text">
                                        <?php $category=App\Category::select('select * from category')->count(); ?>
                                                <h2>{{$category}}</h2>
                                                <span>Total Category</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7 col-lg-4">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                            <!-- <i class="fas  fa-list-alt"></i>  -->
                                                <!-- <i class="fa fa-cog fa-spin fa-3x fa-fw"></i> -->
                                                   

                                            </div>
                                            <div class="text">
                                            <?php $subcategory=App\SubCategory::select('select * from subcategory')->count(); ?>
                                                <h2>{{$subcategory}}</h2>
                                                <span>Total SubCategory</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7 col-lg-4">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                            <!-- <i class="fas  fa-list-alt"></i> -->
                                            </div>
                                            <div class="text">

                                            <?php $product=App\Product::select('select * from product')->count(); ?>
                                                <h2>{{$product}}</h2>
                                                <span>Total Product</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Earnings By Items</h2>
                                <div class="table-responsive table--no-card m-b-40" style="height:500px;overflow-y: scroll; width:1000px">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Category</th>
                                                <th>SubCategory</th>
                                                <!--<th class="text-right">Price</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order as $data)
                                            <tr>
                                                <td>{{$data->id}}</td>
                                                <td>{{$data->cname}}</td>
                                                <td>{{$data->subcname}}</td>                                    </td>
                                                <!--<td class="text-right">-->
                                                <!-- Rs. {{$data->price}}-->
                                                <!--</td>-->
                                               
                                            </tr>
                                            @endforeach
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
@stop