@extends('app')

@section('content')

<style>

    .Tittle{
    
    width:fit-content;
    font-size: 30px;
    color: black;
    padding-left: 35%;
    }

    .ImageB{
        width:fit-content;
        height:fit-content;
        background-color: #A6A6A6;
        border radius: 10px;
        box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.2);
    }

    .Cont{
        margin-top: 50px;
        background-color: #545454;
        height: max-content;
        border-radius: 15px;
        width: 90%;
        padding: 20px;
        box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2);
    }

    .NewUser{
        font-size: 30px;
        width: 45%;
    }

    .row{
        padding-top: 10px;
        padding-bottom: 10px;
    }
    textarea{
        font-size: 25px;
    }
</style>

    <div class="container-fluid Cont">
            <form action="">
                    <label class="Tittle"for="">Ingrese imagen de referencia</label>
                    <button class="ImageB  ">Agregar imagen</button>
            </form>
        <div class="row">
            <input class="NewUser mx-auto" type="text" name="" id="" placeholder="Nombre autor">
        </div>
        <div class="row">
            <input class="NewUser mx-auto" type="text" name="" id="" placeholder="Fecha de nacimiento">
        </div>
        <div class="row">
            <input class="NewUser mx-auto" type="text" name="" id="" placeholder="Nacionalidad">
        </div>
        <div class="row">
            <textarea name="" id="" cols="30" rows="10" placeholder="ingrese biografia"></textarea>
        </div>

    </div>

@endsection