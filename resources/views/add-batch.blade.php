
    
        @extends('layouts.admin-master')
        @section('title', 'Add Batch')
        @section('content')
      
        <article class="content responsive-tables-page">
            <div class="title-block">
                <h1 class="title well p-3">Add Batch </h1>
            </div>
            <section class="section">
                <div class="row sameheight-container">
                    <div class="col-md-12">
                        <div class="card card-block sameheight-item">
                            <form role="form" method="POST" action="{{route('create-batch')}}">
                                @if(session()->has('add-batch'))
                                <div class="alert alert-success" id="alertMessage">
                                    {{session()->get('add-batch')}}
                                </div>
                                @endif
                                @if(session()->has('delete-batch'))
                                <div class="alert alert-success">{{session()->get('delete-batch')}}</div>
                                @endif
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Batch Name</label>
                                    <input type="text" name="batch_name" class="form-control" id="category" placeholder="Enter Batch">
                                    <span class="text-danger">@error('batch_name') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row sameheight-container">


                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-block">
                                <div class="card-title-block">
                                    <h3 class="title"> Batches List </h3>
                                </div>
                                <section class="example">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover text-center align-middle">
                                            <thead>
                                                <tr>
                                                    <th>Serial</th>
                                                    <th>Title</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                @foreach($batches as $key => $batch)
                                                <tr class="align-middle">
                                                    <td>{{$batches->firstItem() + $key}}</td>

                                                    <td>{{$batch->batch_name}}</td>

                                                    <td>
                                                        <a href="/edit-batch/{{$batch->id}}" class="btn btn-primary"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="/batch-delete/{{$batch->id}}" class="btn btn-primary"><i
                                                                class="fa-solid fa-trash"></i></a>
                                                    </td>

                                                </tr>
                                               
                                                @endforeach

                                            </tbody>
                                        </table>
                                        {{$batches->links()}}
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </div>
</div>
@stop
