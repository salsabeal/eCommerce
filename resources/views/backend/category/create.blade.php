@extends('backend.layouts.app')
@section('content')

<div class="wrapper">
              
          <!--Start Page Title-->
           <div class="page-title-box">
                <h4 class="page-title">Categories</h4>
                <div class="clearfix"></div>
             </div>
              <!--End Page Title-->          
           
           
               <!--Start row-->
               <div class="row">
                   <div class="col-md-12">
                       <div class="white-box">
                           <h2 class="header-title">Create New Category</h2>

                        {!! Form::Open() !!}   
                            <div class="form-group">
                                <label>Parent</label>
                                <select class="form-control" name="parent_id">
                                  <option value="0">No Parent</option>
                                  @foreach($data as $cat)
                                  <option value="{{$cat->id}}">[ {{$cat->name}} ]</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" class="form-control" name="cat_name">
                            </div>
                            <div class="form-group">
                              <select class="form-control" name="active">
                                <option value="1">Actived</option>
                                <option value="0">DeActived</option>
                              </select>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary">Save</button>
                                <a href="{{ url('dashboard/categories') }}" class="btn btn-danger">Back</a>
                            </div>
                      {!! Form::Close() !!}

                       </div>
                   </div>
               </div>
               <!--End row-->
       
               
               
               
			    </div>
        <!-- End Wrapper-->


@stop