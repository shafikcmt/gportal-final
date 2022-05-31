<div class="main-wrapper">
    <div class="app" id="app">
    @section('title', 'Personal Details')
    @extends('layouts.master')
    @section('content')
    @include('includes.student-sidebar')
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3"> Personal Details </h1>
            </div>
            <section class="section">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        
                    </div>
                </div>
                <div class="row sameheight-container">
                    <div class="col-md-10 offset-md-1">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <tr>
                                    <td rowspan="5">
                                    </td>
                                    <th>Name</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Roll</th>
                                    <td>{{$data->roll}}</td>
                                </tr>
                                <tr>
                                    <th>College</th>
                                    <td>GGI</td>
                                </tr>
                                <tr>
                                    <th>Branch</th>
                                    <td>{{$data->branch}}</td> 
                                </tr>
                                <tr>
                                <td colspan="3"></td>
                                </tr>
                                <tr>
                                    <th>Class</th>
                                    <td>:</td>
                                    <td>{{$data->class}}</td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <th>Semister</th>
                                    <td>:</td>
                                    <td>{{$data->semester}}</td>
                                </tr>
                                <tr>
                                    <th>Mobile Number</th>
                                    <td>:</td>
                                    <td>{{$data->mobile}}</td>
                                </tr>
                                <tr>
                                    <th>Email Id</th>
                                    <td>:</td>
                                    <td>{{$data->email}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

        </article>
    </div>
</div>
@stop
