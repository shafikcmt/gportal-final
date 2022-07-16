 @extends('layouts.master')
    @section('title', 'Personal Details')
    @section('content')
  
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 style="background:#F6A94F;" class="title well p-2 rounded"> Personal Details </h1>
            </div>
            <section class="section">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        
                    </div>
                </div>
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="table-responsive shadow-lg p-3 mb-5 bg-white rounded">
                            <table class="table table-striped table-bordered table-hover">
                                <tr>
                                    <th>Name</th>
                                    <td>:</td>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Roll</th>
                                    <td>:</td>
                                    <td>{{$data->roll}}</td>
                                </tr>
                               
                                <tr>
                                    <th>Branch</th>
                                    <td>:</td>
                                    <td>{{$data->branch}}</td> 
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
