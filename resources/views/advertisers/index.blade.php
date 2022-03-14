@extends('welcome')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-sm-3"> <h4 class="card-title">Advertisers</h4>  </div>
                <div class="col-sm-6"> </div>
                <div class="col-sm-3"> <a href="{{ url('/advertisers/post')}}"> <button type="button" class="btn btn-sm btn-primary" style="float:right;"> Add advertiser </button> </a> </div>
            </div>
                <p class="card-description">
                    All Advertisers
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <td> Le Nouvelliste </td>
                            <td> Campaigns <span class="badge badge-primary">6</span> </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection