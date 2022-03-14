@extends('welcome')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        
        <div class="card">
            
            <div class="card-body">

            <div class="row">
                <div class="col-sm-3"> <h4 class="card-title">Videos</h4>  </div>
                <div class="col-sm-6"> </div>
                <div class="col-sm-3"> <a href="{{ url('/videos/post')}}"> <button type="button" class="btn btn-sm btn-primary" style="float:right;"> Add video </button> </a> </div>
            </div>
                <p class="card-description">
                    All videos
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Created</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($videos['data'] as $data)
                            <tr>
                                <td> Lakayiti.com Achetez en ligne Leaderboard <button type="button" class="btn btn-sm btn-link">
                                        <span class="badge badge-success">play</span>
                                    </button></td>
                                <td> {{ $data['createdAt'] }} </td>
                                <td> <label class="badge badge-danger"> Pending </label> </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection