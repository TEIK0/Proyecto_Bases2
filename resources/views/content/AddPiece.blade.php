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
    select{
        font-size: 30px;
        width: 45%;
    }
</style>

    <div class="container-fluid Cont">
            <form action="">
                    <label class="Tittle"for="">Ingrese imagen de referencia</label>
                    <button class="ImageB  ">Agregar imagen</button>
            </form>
        <div class="row">
            <input class="NewUser mx-auto" type="text" name="" id="" placeholder="Nombre Obra">
        </div>
        <div class="row">
            <select class="NewUser mx-auto" style="height:60px" name="tipo" id="">
                <option value="Artista1">Artista1</option>
                <option value="Artista2">A2</option>
                <option value="Artista3">A3</option>
                <option value="Artista4">A4</option>
                <option value="Artista5">A5</option>
            </select>
        </div>
        <div class="row">
            <label class="NewUser mx-auto" style="color: black; width:fit-content" for="">No esta registrado el artista?</label>
        </div>
        <div class="row">
            <button class="ImageB  mx-auto">Agregar artista</button>
        </div>
        <div class="row">
            <input class="NewUser mx-auto" type="text" name="" id="" placeholder="Genero">
        </div>
        <div class="row">
            <label class="NewUser mx-auto" style="color: black; width:fit-content" for="">Tipo</label>
        </div>
        <div class="row">
            <select class="NewUser mx-auto" style="height:60px" name="tipo" id="">
                <option value="pintura">Pintura</option>
                <option value="fotografia">Fotografia</option>
                <option value="escultura">Escultura</option>
                <option value="orfebreria">Orfebreria</option>
                <option value="ceramica">Ceramica</option>
            </select>
        </div>

    </div>

@endsection