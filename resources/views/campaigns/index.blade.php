@extends('welcome')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-sm-3"> <h4 class="card-title">Campaigns</h4>  </div>
                <div class="col-sm-6"> </div>
                <div class="col-sm-3"> <a href="{{ url('/advertisers/post')}}"> <button type="button" class="btn btn-sm btn-primary" style="float:right;"> Add campaigns </button> </a> </div>
            </div>
                <p class="card-description">
                    All Campaigns
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Updated</th>
                                <th>Videos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>Artisanat en fete - Le Nouvelliste </td>
                            <td><span class="badge badge-primary"> Running </span> </td>
                            <td> </td>
                            <td>Videos (6)</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection