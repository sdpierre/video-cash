@extends('welcome')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add a video</h4>
                <form enctype="multipart/form-data" method="post" action="https://videocash.herokuapp.com/videos" class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Advertiser</label>
                        <select class="form-control"> 
                            <option> Le Nouvelliste </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Campaign</label>
                        <select class="form-control"> 
                            <option> Artisanat en Fete </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">File</label>
                        <input type="file" name="file" id="exampleFormControlFile1">
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection