<h1>Edit Categroy</h1>
<a href="{{url('/home/category/')}}">Back</a></br></br>

<form action="{{url('/home/category/'.$data->id)}}" method="post">
    @csrf
    @method('put')
    <input type="hidden" name="" value="{{$data->id}}">
    <input type="text" name="name" value="{{$data->name}}" placeholder="Category Name"></br></br>
    <input type="submit" value="Update">
</form>

@if(session('stutus'))
<p>{{session('stutus')}}</p>
@endif