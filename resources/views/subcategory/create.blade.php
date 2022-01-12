
<h1>Create Sub Category</h1>
<a href="{{url('/home/subcategory/')}}">Back</a></br></br>

<form action="{{url('/home/subcategory/')}}" method="post">
    @csrf  
    <input type="text" name="name" placeholder="Subcategory Name"></br></br>
    <select name="category">
        <option>---Choose Category---</option>
        <option value="">First Category</option>
        <option value="">Second Category</option>
    </select></br></br>
    <input type="submit" value="Create">
</form>