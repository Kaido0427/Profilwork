@extends('layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
           
            <h2>
                Ajouter une nouvelle proposition
            </h2>
         
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="/home"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> <br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ url('propositions') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div id="ltdm" class="form-group">
                <strong>Lettre de motivation:</strong>
                <textarea class="form-control" style="height:150px" name="text_mot" placeholder="Entrer du texte..."></textarea>
               
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Uploader votre CV:</strong>
                <input type="file" name="cv" class="form-control" placeholder="cv">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prix:</strong>
                <input type="text" name="prix" class="form-control" placeholder="faire une offre $$" required autocomplete="prix">
            </div>
        </div>
        <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
        <input type="hidden" name="job_id" id="job_id" value="{{ isset($job->id) ? $job->id :''}}">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center justify-between">
                <button type="submit" class="btn btn-primary">Ajouter la proposition</button>
            <a class="btn btn-primary" href="#idmis"> Revenir à la mission</a>
        </div>
    </div>
   
</form>
@endsection