@extends('app')

@section('content')

<style>
.ContieneSing{
    margin-top: 10%;
    margin-bottom: 10%;
    background-color: #545454;
    height:fit-content;
    border-radius: 15px;
    width: 60%;
    box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2)
}

.TittleSign{
    display: grid;
    width: 30%;
    font-size: 30px;
    padding: 10px;
    gap: 10px;
    color: black;
}

.NewUser{
    background-color:black;
    color: #eeffff;
    margin-top: 10px;
    width: 45%;
}


.NewLink{
    color: #eeffff;
    margin-top: 10px;
    transition: 0.2s all ease;
    width: 30%;
    height: 40px;
}



.NewLink:hover{
    color:black
}

hr{
    color: white;
}

.bar{
    width: 90%;
    left: 5%;
    height: 3px;
    background-color: white;
    position: relative;
    top: 10px;
}
</style>

<div class="ContieneSing container-fluid">
    <div class="row">
    <div class="row">
        <h1 class="TittleSign mx-auto">Cree un usuario</h1>
    </div>
    <hr class="bar"/>
    <div class="row">
        <input  class="NewUser mx-auto" type="Text" placeholder="Primer nombre.">
    </div>
    <div class="row">
        <input  class="NewUser mx-auto" type="Text" placeholder="Segundo Nombre.">
    </div>
    <div class="row">
        <input  class="NewUser mx-auto" type="Text" placeholder="Ingrese nombre de usuario.">
    </div>
    <div class="row">
        <input  class="NewUser mx-auto" type="Text" placeholder="Ingrese correo.">
    </div>
    <div class="row">
        <input class="NewUser mx-auto" type="Text" placeholder="Ingrese pasword.">
    </div>
    <hr class="bar"/>
    <div class="row">
        <select class="NewUser mx-auto" name="select">
            <option value="value1">Nombre mascota</option>
            <option value="value2" selected>Nombre de la madre</option>
            <option value="value3">Nombre del padre</option>
            <option value="value4">Color favorito</option>
            <option value="value5">Nombre mejor amigo</option>
        </select>
    </div>
    <div class="row">
        <input class="NewUser mx-auto" type="Text" placeholder="Ingrese Respuesta.">
    </div>
    <div class="row">
        <select class="NewUser mx-auto" name="select">
            <option value="value1">Nombre mascota</option>
            <option value="value2">Nombre de la madre</option>
            <option value="value3">Nombre del padre</option>
            <option value="value4"selected >Color favorito</option>
            <option value="value5">Nombre mejor amigo</option>
        </select>
    </div>
    <div class="row">
        <input class="NewUser mx-auto" type="Text" placeholder="Ingrese Respuesta.">
    </div>
    <div class="row">
        <select class="NewUser mx-auto" name="select">
            <option value="value1" selected>Nombre mascota</option>
            <option value="value2">Nombre de la madre</option>
            <option value="value3">Nombre del padre</option>
            <option value="value4">Color favorito</option>
            <option value="value5">Nombre mejor amigo</option>
        </select>
    </div>
    <div class="row">
        <input class="NewUser mx-auto" type="Text" placeholder="Ingrese Respuesta.">
    </div>
    <hr class="bar"/>
    <div class="row">
        <input class="NewUser mx-auto" type="Text" placeholder="Ingrese nombre del banco de la tarjeta.">
    </div>
    <div class="row">
        <input class="NewUser mx-auto" type="Text" placeholder="Ingrese codigo de tarjeta.">
    </div>
    <hr class="bar"/>
    <div class="row">
        <button class="NewUser mx-auto"><i class="fa-solid fa-magnifying-glass"/>Ingresar</button>
    </div>
    <hr class="bar"/>
    <div class="row">
        <a class="NewLink mx-auto" href="https://www.Youtube.com" target="_blank">Ya tienes un usuario creado?</a>
    </div>
    </div>
</div>
@endsection