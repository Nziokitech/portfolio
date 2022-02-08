@extends ('layouts.master')
@section ('title', 'Home')
@section ('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Home Page</h1>

            <form action="" method="POST" >
            @csrf
            <label for="fname">First Name</label><br>
            <input type="text" name="fname" id="" placeholder="Enter First name"><br>

            <label for="lname">Last Name</label><br>
            <input type="text" name="lname" id="" placeholder="Enter Last name"><br>

            <label for="mail">Email</label><br>
            <input type="email" name="mail" id="" placeholder="Enter Email"><br>

            <label for="pwd">Password</label><br>
            <input type="password" name="pwd" id="" placeholder="Enter password"><br>

            <button type="submit"></button>


            </form>



        </div>
    </div>
</div>
@endsection
