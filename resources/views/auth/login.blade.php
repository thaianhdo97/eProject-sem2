@extends("layout.customer-layout")
@section("content")
<div class="form-container">
    <form action="#" method="get">
        <h1>Login</h1>
        <div class="textbox">
            <i class="fa fa-user"></i>
            <input type="text" name="username" placeholder="Username">
        </div>

        <div class="textbox">
            <i class="fa fa-lock"></i>
            <input type="password" name="password" placeholder="Password">
        </div>

        <input type="submit" value="Sign in" class="login-btn">
    </form>
</div>
<style>
    .form-container {
        width: 100vw;
        height: 100vh;
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: url("/img/background/bg3.jpg") no-repeat rgba(0,0,0, .6);
        background-blend-mode: multiply;
        position: relative;
    }

    form {
        width: 280px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
    }

    form h1 {
        width: 120px;
        text-align: left;
        clear: both;
        font-size: 40px;
        border-bottom: 6px solid #2ed573;
        margin-bottom: 50px;
        padding: 13px 0;
    }

    .textbox {
        width: 100%;
        overflow: hidden;
        font-size: 20px;
        padding: 8px 0;
        margin:8px 0 ;
        border-bottom: 1px solid white;
    }

    .textbox i {
        width: 26px;
        float: left;
        text-align: center;
        color: white;
    }

    .textbox input {
        outline: none;
        background: none;
        border: none;
        font-size: 18px;
        width: 80%;
        color: white;
        float: left;
        margin: 0 10px;
    }

    input[type="submit"] {
        width: 100%;
        background: none;
        text-align: center;
        outline: none;
        border: 2px solid #2c3e50;
        padding: 10px 0;
        font-weight: 300;
        font-size: 18px;
        cursor: pointer;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        color: yellow;
    }

</style>
@endsection
