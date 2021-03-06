@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <h1>These are the Most Recent Jobs</h1>
            <table class="table">
                <thead>

                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>

                </thead>
                <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td><img src="{{asset('avatar/NBC.png')}}" WIDTH="80"></td>
                        <td>Position:{{$job->position}} <br>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            &nbsp; {{$job->type}}
                        </td>
                        <td><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Address:{{$job->address}}</td>
                        <td><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;{{$job->created_at->diffForHumans()}}</td>
                        <td>
                            <button class="btn btn-success btn-sm">Apply for this Job Opening</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        </div>
    </div>
@endsection
<style>
    .fa{
        color: #3f9ae5;
    }
</style>
