@extends('app')

@section('content')

<style>
    .Contiene{
        margin-top: 10%;
        background-color: #545454;
        height: 250px;
        border-radius: 15px;
        width: 60%;
        box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2)
    }

    .Title{
        display:grid;
        padding-top: 10px;
        justify-content: center;
        color: black;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

    }

    .User{
        background-color:black;
        color: #eeffff;
        margin-top: 10px;
        width: 35%;
    }

    .Paswor{
        background-color:black;
        color: #eeffff;
        margin-top: 10px;
        width: 35%;
    }

    .Bot{
        background-color: #A6A6A6;
        color: black;
        margin-top: 10px;
        margin-bottom: 10px;
        width: 25%;
        border radius: 10px;
        box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.2);
    }

    .Bot:hover{
        color:white

    }

    .Link{
        color: #eeffff;
        margin-top: 10px;
        padding-left: 30px;
        width: 25%;
    }
    .Link:hover{
        color:black;
    }
</style>

<div class="row">
<div class="container-fluid Contiene">
    <div class="row">
    <div class="row">
        <h1 class="Title mx-auto">Ingrese sesión</h1>
    </div>
    <div class="row">
        <input  class="User mx-auto" type="Text" placeholder="Ingrese nombre de usuario.">
    </div>
    <div class="row">
        <input class="Paswor  mx-auto" type="Text" placeholder="Ingrese pasword.">
    </div>
    <div class="row">
        <button class="Bot mx-auto">Ingresar</button>
    </div>
    <div class="row">
        <a class="Link mx-auto" href="https://www.Youtube.com" target="_blank">Olvidaste tu pasword?</a>
    </div>
    </div>
</div>
</div>
@endsection