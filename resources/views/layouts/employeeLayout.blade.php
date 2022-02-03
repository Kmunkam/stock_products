<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('tille')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>
    {{-- sidebar --}}
    <div class="wrapper">
        <div class="sidebar">
            <nav>
                <img src="{{asset('assets/img/jaehyun1.jpg')}}" class="rounded-circle" alt="profile" width="150px" height="150px">
                <p>ID : </p>
                <p>Name : </p>
            </nav>
            <ul class="mt-5">
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/product') }}">Product</a></li>
                <li><a href="{{ url('/login') }}">Logout</a></li>
            </ul>
        </div>

        {{-- contents --}}
        <div class="main_content container">
            <h3 class="m-2 ms-0 border-bottom">NAME Store</h3>


            {{-- nav --}}
            {{-- <div class="row g-3 mt-3 ">
                <div class="col-sm-3">
                    <a href="{{ url('/AddProducts') }}" type="button" class="btn btn-success btn-sm">เพิ่มสินค้า</a>
                </div>
                <div class="col-sm input-group input-group-sm mb-3">
                    <form class="d-flex ms-auto input-group-sm">
                        <input type="text" class="form-control rounded-start rounded-0" placeholder="search" aria-label="search" aria-describedby="button-search">
                        <button class="btn btn-outline-secondary rounded-end rounded-0" type="button" id="button-search">Button</button>
                    </form>
                </div>
            </div> --}}



            @yield('content')
        </div>
    </div>



</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<style>

body{
    background:white;
}

.wrapper{
    display: flex;
    position: relative;
}

.wrapper .sidebar{
    position: fixed;
    width: 250px;
    height: 100%;
    background: #528B8B;
    padding: 30px 0;
}

.wrapper .sidebar nav {
    color: white;
    text-transform: uppercase;
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
}
.wrapper .sidebar nav p{
    line-height: 0;
    margin-top: 20px;
    font-size: 12px;
}

/* .wrapper .sidebar ul {
    margin-top: 60px;
} */

.wrapper .sidebar ul li {
    padding: 15px;
    border-bottom: 1px solid #528B8B;
    border-top: 1px solid #528B8B;
    list-style-type: none;
    font-size: 20px;
}

.wrapper .sidebar ul li a{
    color: white;
    display: block;
    text-decoration: none;
}

.wrapper .sidebar ul li :hover{
    color: wheat;
}

.wrapper .main_content{
    width: 100%;
    margin-left: 270px;
    margin-top: 20px;
}

</style>
</html>
