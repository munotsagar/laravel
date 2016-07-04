@extends('app')
@section('content')
    <h1>Blog List</h1>
    <table class="table">
        <thead>
        {{--<tr>
            <th colspan="2"><h4><a href="{{ url('/blog/create') }}">Add New</a></h4></th>

            <th></th>
            <th></th>
        </tr>--}}
        <tr>
            <th>Sr. No</th>
            <th>Statement Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @set('i', $page)
        @foreach($statements as $statement)
            <tr class="success">
                {{--{{ dd($blog) }}--}}
                <td>{{$i}}</td>
                <td>{{--$blog->name--}}
                   {{$statement->_id}}
                </td>
                <td>{{ $statement->updated_at }}</td>
                <td>{{ $statement->created_at }}</td>
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
    {{--<script>
        function checkDelete(id) {
            if (confirm('Really delete?')) {
                $.ajax({
                    type: "DELETE",
                    url: '/blog/' + id,
                    dataType: "json",
                    success: function(result) {
                        if(result.response.error == false)
                        {
                            alert("Blog deleted successfully...");
                            document.location.reload(true);
                        }
                    }
                });
            }
        }
    </script>--}}
@stop