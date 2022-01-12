<h1>Create Categroy</h1>
<a href="{{url('/home/category/')}}">Back</a></br></br>

<form action="{{url('/home/category/')}}" method="post">
    @csrf  
    <input type="text" name="name" placeholder="Category Name"></br></br>
    <input type="submit" value="Create">
</form>

