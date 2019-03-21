@extends('frontend.layout.user.master')
@section('content')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h2></h2>
                        <div class="beta-products-details">
                            <p class="pull-left">Có {{count($restaurant)}} địa điểm </p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach($restaurant as $res)
                             @if($res->categories_id == $categories_id)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{route('show.Restaurant',$res->id)}}"><img src="{{ asset('storage/'.$res->image) }}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$res->name}}</p>
                                        <p class="single-item-price">
                                            <span>$34.55</span>
                                        </p>
                                    </div>
                                    <td>
                                        <input id="input-1" name="input-1" class="rating rating-loading"  data-min="0" data-max="5" data-step="0.1" value="" data-size="xs" disabled="">
                                    </td>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('show.Restaurant',$res->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <!-- <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div>
                                                        <th width="400px">Star</th>
                                                        <th width="100px">View</th>
                                                    </div>
                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <script type="text/javascript">
                                    $("#input-id").rating();
                                </script>
                            </div>
                            @endif
                            @endforeach

                        </div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>
                </div>
            </div>
        </div> <!-- end section with sidebar and main content -->
    </div> <!-- .main-content -->
</div> <!-- #content -->
@endsection