@extends('app')
@section('content')
    <h1>Statement List</h1>
    <table class="table">
        <thead>
        {{--<tr>
            <th colspan="2"><h4><a href="{{ url('/blog/create') }}">Add New</a></h4></th>

            <th></th>
            <th></th>
        </tr>--}}
        <tr>
            <th>Sr. No</th>
            <th>Actor Name</th>
            <th>Actor mbox</th>
            <th>Verb Id</th>
            <th>Verb Display</th>
            <th>Object Id</th>
            <th>Object Type</th>
            {{--<th><Act></Act>ion</th>--}}
        </tr>
        </thead>
        <tbody>
        @set('i', $page)
        @foreach($statements as $statement)
            <tr class="success">
                {{--{{  dd($statement->statement['actor']) }}--}}
                <td>{{$i}}</td>
                <td>{{ $statement->statement['actor']['name'] }}</td>
                <td>{{ $statement->statement['actor']['mbox'] }}</td>
                <td>{{ $statement->statement['verb']['id'] }}</td>
                <td>{{ $statement->statement['verb']['display']['en-US'] }}</td>
                <td>{{ $statement->statement['object']['id'] }}</td>
                <td>{{ $statement->statement['object']['objectType'] }}</td>

                {{--<td><a href="{{url('/blog/'.$blog->id.'/edit') }}"> Edit </a>/ <a href="javascript:checkDelete({{$blog->id}});
                ">Delete</a></td>--}}
            </tr>
            {{--{{$i = $i+1}}--}}
            @set('i', $i+1)
        @endforeach
        </tbody>
    </table>
@stop

@section('footer')

@stop