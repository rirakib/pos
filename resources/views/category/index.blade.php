<h1>Category List</h1>
<a href="{{url('/home/category/create')}}">Create Category</a></br></br>

@if(session('stutus'))
<h1>{{session('stutus')}}</h1>
@endif
<table border="1">
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td><a href="{{url('/home/category/'.$category->id.'/edit')}}">Edit</a></td>
            <td>
                <form action="{{url('/home/category/'.$category->id)}}" method="post">
                @csrf
                @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>