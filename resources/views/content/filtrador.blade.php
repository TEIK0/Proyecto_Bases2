@extends('app')

@section('content')

<style>

.Bot{
    display: grid;
    justify-content: center;
    color:black;
    background-color: #A6A6A6;
    width: 50%;
    
}

.Tag{
    margin-top: 15px;
    width: 34%;
    color: black;
}

.Filtrador{
    height: 50px;
    width: 100%;
    background-color: #00213f;
}

.C{
    width: 30px;
    height: 20px;
    background-color: black;
    color: #6e211a;
    align-self: center;
}

.Cont{
    height:250px;
    width: 50%;
    margin-top: 20px;
    margin-bottom: 20px;
    background-color: #545454;
    box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2)
}

.NameS{
    display: grid;
    width: 40%;
    display: grid;
    margin-left: 5%;
    margin-top: 15px;
    color:black;
    background-color: #A6A6A6;

}

label{
    color: black;
    padding: 15px;
    gap: 15px;
}

</style>

<div class="container-fluid Cont">
    <div class="row">
    <h1 class="col-xs-6 Tag mx-auto">Autores</h1>
    <h1 class="col-xs-6 Tag mx-auto" >Precio Max</h1>
    <input type="Text" class="NameS col-xs-6 mx-auto" placeholder="Artist Name.">
    <input type="Text" class="NameS col-xs-6 mx-auto" placeholder="Max Prize.">

    <div class="col-xs-12">
        <label><input class=" C" type="checkbox" name="tipo"/>Pintura</label>
        <label><input  class="C" type="checkbox" name="tipo"/>Escultura</label>
        <label><input  class="C" type="checkbox" name="tipo"/>Fotografia</label>
        <label><input  class="C" type="checkbox" name="tipo"/>Ceramica</label>
        <label><input  class="C" type="checkbox" name="tipo"/>Orfebreria</label>
    </div>
    <div class="col-xs-12" style="padding-bottom: 25px">
        <button class="Bot mx-auto"><i class="fa-solid fa-magnifying-glass">Search</button>
    </div>
    </div>
</div>

@endsection