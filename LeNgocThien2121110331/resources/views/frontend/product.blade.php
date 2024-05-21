@extends('layouts.site')
@section('title','Product')
@section('content')

   
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                   <x-category/>
                
                    <x-brand/>
                    
                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well">
                             <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                             <b>$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->
                    
                   
                    
                </div>
            </div>
            
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">All Product</h2>
                    <div class="col-sm-4">
                        <x-productitem/>

                    </div>
                    <div class="col-sm-4">
                        <x-productitem/>

                    </div>
                    <div class="col-sm-4">
                        <x-productitem/>

                    </div>
                    <div class="col-sm-4">
                        <x-productitem/>

                    </div>
                    <div class="col-sm-4">
                        <x-productitem/>

                    </div>
                    <div class="col-sm-4">
                        <x-productitem/>

                    </div>
                    <div class="col-sm-4">
                        <x-productitem/>

                    </div>
                    <div class="col-sm-4">
                        <x-productitem/>

                    </div>
                    <div class="col-sm-4">
                        <x-productitem/>

                    </div>
                    <div class="col-sm-4">
                        <x-productitem/>

                    </div>
                    <div class="col-sm-4">
                        <x-productitem/>

                    </div>
                    <div class="col-sm-4">
                        <x-productitem/>

                    </div>

                    
                    <ul class="pagination">
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">&raquo;</a></li>
                    </ul>
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>
@endsection
