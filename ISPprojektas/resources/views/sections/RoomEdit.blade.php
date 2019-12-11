@extends('layouts.app')
@csrf
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kambario Redagavimas</div>
                <div class="card-body">
                    <form method='POST' action="{{route('rooms.update', $id )}}" class='p-4' enctype='multipart/form-data'>
                        @csrf
                        {{ method_field('PUT') }}
                        <div class='form-group row'>
                            <label for='kaina' class="col-md-4 col-form-label text-md-right">Kaina</label><br />
                            <input type='text' name='kaina' value="">
                        </div>
                        <div class='form-group row'>
                            <label for='img' class="col-md-4 col-form-label text-md-right">Paveikslėlis</label><br />
                            <input type='text' name='img' value="" id='img'>
                        </div>
                        <div class='form-group row'>
                            <label for='comment' class="col-md-4 col-form-label text-md-right">apibudinimas</label>
                            <textarea class='textarea col-md-4' value="" rows='8' name='comment'></textarea>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="Submit" class="btn btn-success">
                                    Atnaujinti
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <form action="{{route('DeleteRoom',$id)}}" method="post">
            @csrf
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-danger" name="button">Ištrinti kambarį</button>
        </form>
        </div>
    </div>
</div>
@endsection
@section('lowFooter')
footer-main
@endsection