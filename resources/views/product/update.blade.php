@extends('admin.layout.app')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Aroma Mart</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add Product <small></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="#">Settings 1</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">
                                @csrf
                                <div id="add_product">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Product
                                            Name
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="" name="name" required="required" value="{{ $product->name }}"
                                                class="form-control ">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="price">price<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="number" id="price" name="price" placeholder="₹"
                                                required="required" value="{{ $product->price }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="img">Product_img<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="file" id="img" name="img" required="required"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="">Category<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select name="category_id" id="categroy" required="required"
                                                class="form-control">
                                                @foreach ($categroies as $categroy)
                                                    <option value="{{ $product->categroy_id }}"> {{ $categroy->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="item form-group" style="display: none;" id="aaaa">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="">Brand<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select name="brand_id" id="sub-category" required="required"
                                                class="form-control">
                                            </select>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="price">About<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea  id="price" name="about" t
                                            required="required" class="form-control">{{ $product->about }}</textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="price"><span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="checkbox" name="Availibility" value="1" > &nbsp;available in full stock
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="user_id" value="{{ Auth::user()->id }}"  hidden>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
@push('script')
    <script>
        $(document).on('change', '#categroy', function() {
            // console.log(111111111);
            var id = $(this).val();

            $.ajax({
                type: 'GET',
                url: "{{ route('product.brand') }}",
                data: {id:id},
                success: function(res) {
                    var brands = res.brands;
                    $('#aaaa').show();
                    $('#sub-category').html('');
                    // for (let i = 1; i <= brands.length; i++) {
                        
                    //     var html = '<option value="'+brands[i].id+'">'+brands[i].name+'</option>';
                    //     $('#sub-category').append(html);
                    // }
                    $.each(brands, function (index, brand) {
                        var html = '<option value="'+brand.id+'">'+brand.name+'</option>';
                        $('#sub-category').append(html);
                    });
                }
            });
        })
    </script>
@endpush
