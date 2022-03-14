@extends('welcome')

@section('content')
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-sm-3"> <h4 class="card-title">Prizes</h4>  </div>
                <div class="col-sm-6"> </div>
              
            </div>
                <p class="card-description">
                    All Campaigns
                </p>
                
                <form enctype="multipart/form-data" method="post" action="https://videocash.herokuapp.com/videos" class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Amount</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Amount">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputUsername1">Campaign</label>
                        <input type="date" value="">
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
    <div class="card">
            <div class="card-body">
            <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Code</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td> Vous avez gagnez : $50 </td>
                                <td> XCD8HJ</td>
                                <td> sdpierre</td>
                                <td> 13 janvier 2021 a 8:00 am</td>
                                <td> <label class="badge badge-danger"> Pending </label>  <a href="#"> Effacer </a> </td>
                            </tr>
                            
                        </tbody>
                    </table>
            </div>
            </div>
        
    </div>
</div>
@endsection
