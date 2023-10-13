@extends('admin.layout.layout')

@section('content')

<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Update <small>Change Category data</small></h2>
									
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br>
									<form action="{{route('category.update',$category->id)}}" method="post" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                                     @csrf
                                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Category Name<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="name" class="form-control" value="{{$category['name']}}">
											</div>
									</div>

                                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Sub Category of
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="category_id">
                                                   <option value="" @if($category->category_id==null) selected @endif)>No Subcategory</option>
                                                   @foreach($categories as $categorie)
                                                      <option value="{{$categorie->id}}" @if($category->category_id !=null && $category->category_id==$categorie->id) selected @endif>{{$categorie->name}}</option>
                                                   @endforeach
                                                </select>
											</div>
									</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success">Update</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
@endsection      