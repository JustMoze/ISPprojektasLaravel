@extends('layouts.app')
@csrf
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Naujo kambario pridėjimas</div>
                <div class="card-body">
                    <form method='POST' action="{{ action('RoomController@submit')}}" class='p-4' enctype='multipart/form-data'>
                        @csrf
                        <div class='form-group row'>
                            <label for='kaina' class="col-md-4 col-form-label text-md-right">Kaina</label><br />
                            <input type='text' name='kaina' value=''>
                        </div>

                        <div class='form-group row'>
                            <label for='plotas' class="col-md-4 col-form-label text-md-right">Plotas</label><br />
                            <input type='text' name='plotas' value=''>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="type">Tipas</label>
                            <select class="form-control col-md-3" name='type' id="type">
                                <option value="1" >Liuksas</option>
                                <option  value="2" >Karaliskas</option>
                                <option  value="3" >Ekonominis</option>
                                <option  value="4" >Rukanciuju</option>
                                <option  value="5" >Verslo_klases</option>
                            </select>
                        </div>
                        <div class='form-group row'>
                            <label for='vietos' class="col-md-4 col-form-label text-md-right">Vietų skaičius</label><br />
                            <input type="number" name='vietos' id='vietos' value="1" min="1" max="4" step="1" />
                        </div>
                        <div class='form-group row'>
                            <label for='img' class="col-md-4 col-form-label text-md-right">Paveikslėlis</label><br />
                            <input type='text' name='img' id='img'>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="jura">Vaizdas į jūra</label>
                            <input type="checkbox" name='jura' class="form-check-input col-md-8" id="jura">

                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="gyvunai">Pritaikytas gyvunams</label>
                            <input type="checkbox" name='gyvunai' class="form-check-input col-md-8" id="gyvunai">
                        </div>
                        <div class='form-group row'>
                            <label for='comment' class="col-md-4 col-form-label text-md-right">apibudinimas</label>
                            <textarea class='textarea col-md-4' rows='8' name='comment'></textarea>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="Submit" class="btn btn-success">
                                    Pridėti
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('lowFooter')
footer-main
@endsection