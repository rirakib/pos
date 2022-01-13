<h1>Create SubCategory</h1>
<a href="{{url('home/subcategory/create')}}">Create Subcategory</a>

@if(session('stutus'))
<h1>{{session('stutus')}}</h1>
@endif

<table border="1">
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Category</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $subcategory)
        <tr>
            <td>{{$subcategory->id}}</td>
            <td>{{$subcategory->name}}</td>
            <td>{{$subcategory->category->name}}</td>
            <td><a href="{{url('/home/subcategory/'.$subcategory->id.'/edit')}}">Edit</a></td>
            <td>Delete</td>
        </tr>
        @endforeach
    </tbody>
</table>