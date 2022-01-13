
<h1>Create Sub Category</h1>
<a href="{{url('/home/subcategory/')}}">Back</a></br></br>

<form action="{{url('/home/subcategory/')}}" method="post">
    @csrf  
    <input type="text" name="name" placeholder="Subcategory Name"></br></br>
    <select name="cat_id">
        <option>---Choose Category---</option>
        @foreach(DB::table('categories')->get() as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
        
    </select></br></br>
    <input type="submit" value="Create">
</form>