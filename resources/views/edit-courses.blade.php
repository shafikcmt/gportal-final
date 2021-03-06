@extends('layouts.admin-master')
@section('title', 'Add Courses')
@section('content')

<article class="content responsive-tables-page">

    <section class="section">
        <div class="row sameheight-container ">

            <div class="col-md-12">
                <div class="card card-block sameheight-item shadow-lg p-3 bg-light rounded">
                    <div class="title-block">
                        <h1 class="title well p-2 bg-orange">Edit Courses <a class="btn btn-primary"
                                href="/add-courses">Back</a></h1>
                    </div>
                    @if(session()->has('update-courses'))
                    <div class="alert alert-success" id="alertMessage">
                        {{session()->get('update-courses')}}
                    </div>
                    @endif
                    <form method="POST" action="{{route('update-courses')}}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{$course->id}}">
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Course Name</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$course->name}}" name="name" class="form-control"
                                    id="colFormLabel" placeholder="Name">
                                <div class="text-danger">@error('name') {{$message}} @enderror</div>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Course category</label>
                            <div class="col-sm-8">

                                <select class="form-control" name="category_id">
                                    <option selected>Select category</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">@error('category_id') {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Course start date</label>
                            <div class="col-sm-8">
                                <input type="date" value="{{$course->start_date}}" name="start_date"
                                    class="form-control" id="colFormLabel" placeholder="col-form-label">
                                <div class="text-danger">@error('start_date') {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Course end date</label>
                            <div class="col-sm-8">
                                <input type="date" value="{{$course->end_date}}" name="end_date" class="form-control"
                                    id="colFormLabel" placeholder="col-form-label">
                                <div class="text-danger">@error('end_date') {{$message}} @enderror</div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Course image</label>
                            <div class="col-sm-8">
                                <input type="file" name="image" class="form-control mb-2" id="colFormLabel"
                                    placeholder="col-form-label">
                                <img width="120px;" src="{{asset('images')}}/{{$course->image}}" alt="">
                                <div class="text-danger">@error('image') {{$message}} @enderror</div>

                            </div>
                        </div>

                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>


    </section>

</article>
</div>
</div>
@stop
