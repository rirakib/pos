<h1>Home Page</h1>

<p>{{session()->get('username')}}</p>

<a href="{{url('logout')}}">Logout</a>


<h1>Menu List Here</h1>

<ul>
    <li><a href="{{url('/home/category/')}}">Category</a></li>
    <li><a href="{{url('/home/subcategory/')}}">Subcategory</a></li>
</ul>
