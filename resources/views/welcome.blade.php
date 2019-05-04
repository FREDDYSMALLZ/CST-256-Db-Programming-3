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
                @for($i=0;$i<10;$i++)
                    <tr>
                        <td><img src="{{asset('avatar/NBC.png')}}" WIDTH="80"></td>
                        <td>Position:Web Developer</td>
                        <td><i class="fa fa-map-marker" aria-hidden="true"></i>Address:Arizona</td>
                        <td>Date:2019-05-09</td>
                        <td>
                            <button class="btn btn-success btn-sm">Apply for this Job Opening</button>
                        </td>
                    </tr>
                @endfor
                </tbody>
            </table>


        </div>
    </div>
@endsection
