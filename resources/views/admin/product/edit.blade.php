@extends('admin.layout.layout')

@section('content')
<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Add <small>Add product details</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br>
									<form action="{{route('product.update',$product->id)}}" method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data">
                                     @csrf
                                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Category Name<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="category_id" id="category_id" class="form-control">
                                                <option value="">Category name</option>
                                                    @foreach($categories as $categorie)
                                                    <option value="{{$categorie->id}}" @if($product->category_id==$categorie->id) selected @endif>{{$categorie->name}}</option>
                                                    @endforeach
                                                </select>
											</div>
									</div>

                                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Product Name<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="name" class="form-control" value="{{$product->name}}" required="">
											</div>
									</div>

                                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Product Price<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" name="price" class="form-control" value="{{$product->price}}" required="">
											</div>
									</div>

                                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Product Image<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="image" class="form-control">
                                                <img src="{{asset('public/uploads/'.$product->image)}}" style="height:80px;width:80px;" >
											</div>
									</div>

                                    <div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success">Save</button>
											</div>
										</div>

                                    

									</form>
								</div>
							</div>
						</div>
					</div>
@endsection