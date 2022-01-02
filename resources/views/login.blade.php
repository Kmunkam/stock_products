<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>LOGIN</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

   <div class="container">
    <div class="row justify-content-md-center mt-5">
      <div class="col col-lg-5 col-md-12 mt-5">
        <div class=" mt-5 py-3 shadow-lg p-3 bg-body rounded" style="background-color: #4b5154;">
            <div class="p-2 ">
                <h4 class="mb-4" style="text-align:center">Account Login</h4>

                <div class="form-floating mb-3 mt-2">
                    <input type="number" class="form-control form-control-sm" id="floatingInput" placeholder="idEmployee">
                    <label for="floatingInput">ID Employee</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control form-control-sm" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="d-grid gap-2 mt-1">
                    <button class="btn btnh" type="submit" >LOGIN</button>
                </div>
            </div>
      </div>

  </div>


</body>

<style>

body{
    background-color: #528B8B;
    /* background-color: #87c0c0; */
    /* background-color: #95C8D7; */
    /* color: white; */

}
.btnh{
    background-color:#34826C;
    color: white;
}
.btnh:hover {
    background-color: #B4CFB1;
    color: white;
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>

</html>


