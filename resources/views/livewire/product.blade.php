<div class="row">
    @if (count($products) > 0)
        @foreach ($products as $product)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="box">
                    <a href="">
                        <div class="img-box">
                            <img src="{{$product->thumbnail}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>
                                {{$product->title}}
                            </h6>
                            <h6>
                                Price
                                <span>
                     {{$product->price}}$
                  </span>
                            </h6>
                        </div>
                        <div class="new">
                <span>
                  New
                </span>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    @else
        <tr>
            <td colspan="3" align="center">
                No Posts Found.
            </td>
        </tr>
    @endif
</div>
