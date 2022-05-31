<div class="main-wrapper">
    <div class="app" id="app">
        @section('title', 'Add Students')
        @extends('layouts.admin-master')
        @section('content')
        @extends('includes.admin-sidebar')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Edit Student <a class="btn btn-info" href="/all-student">Back</a></h1>
                <p class="title-description"> </p>
            </div>
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item">
                            <form role="form" method="post" action="{{route('update')}}">
                                @if(session()->has('message'))
                                    <div class="alert alert-success" id="alertMessage">
                                    {{session()->get('message')}}
                                    </div>
                                @endif
                                @csrf
                                <input type="hidden" name="id" value="{{$student->id}}">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class="col-form-label">Name <span style="color:red">*</span></label>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{$student->name}}">
                                       
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class=" col-form-label">Roll <span style="color:red">*</span></label>
                                        <input type="text" name="roll" class="form-control" placeholder="Roll" value="{{$student->roll}}">
                                        
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class="col-form-label">Class<span style="color:red">*</span></label>
                                        <input type="text" name="class" class="form-control" placeholder="Class" value="{{$student->class}}">
                                       
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class="col-form-label">Branch<span style="color:red">*</span></label>
                                        <input type="text" name="branch" class="form-control" placeholder="Branch" value="{{$student->branch}}">
                                      
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class=" col-form-label">Semester <span style="color:red">*</span></label>
                                        <input type="text" name="semester" class="form-control" id="colFormLabel" placeholder="Semester" value="{{$student->semester}}">
                                        
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class=" col-form-label">Mobile </label>
                                        <input type="text" name="mobile" class="form-control" id="colFormLabel" placeholder="Mobile" value="{{$student->mobile}}">
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label for="colFormLabel" class="col-form-label">Email<span style="color:red">*</span></label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{$student->email}}">
                                        
                                    </div>
                                   
                                   
                              </div>
                                <center>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Save</button>

                                    </div>
                                </center>

                            </form>
                        </div>
                    </div>
                </div>
               
            </section>
        </article>
    </div>
</div>

@stop