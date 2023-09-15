@extends('layouts.app')

@section('content')
    <div class="fullscreen">
        <div class="center-div-job" style="display: flex; flex-direction: row;">
            <div
                style="width: 100%; padding: 20px; background-color: #f4eeee; display: flex; justify-content: center; align-items: center; ">
                <div style="width: 80%;">
                    <h3 style="margin-bottom: 10px;">MODIFIER UNE MISSION</h3>
                    <div class="barre-job"></div>

                    <form action="{{ route('jobs.update', $job->id) }}" method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div style="display: flex; flex-direction: column;">

                            <div class="input-container">
                                <label for="titre"><strong>Titre :</strong></label>
                                <input type="text" name="titre" class="form-control" placeholder="Titre de la mission"
                                    required autocomplete="off" value="{{ $job->titre }}"
                                    style="margin-bottom: 20px; border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;">
                            </div>

                            <div class="input-container">
                                <label for="description"><strong>Description :</strong></label>
                                <textarea class="form-control" name="description" rows="5" placeholder="Description"
                                    style="margin-bottom: 20px; border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;"> {{ $job->description }}</textarea>
                            </div>

                            <div class="input-container">
                                <div class="form-group">
                                    <label for="jobcat"><strong>Catégorie :</strong></label>
                                    <select class="form-control" name="jobcat"
                                        style="margin-bottom: 20px; border: 1px solid rgb(100, 203, 112); transition: border-color 0.3s;"
                                        id="jobcat">
                                        @foreach ($jobcats as $jobcat)
                                            <option value="{{ $jobcat->id }}"
                                                {{ $job->jobcat_id === $jobcat->id ? 'selected' : '' }}>{{ $jobcat->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <button type="submit" style="align-self: flex-end;">Modifier la mission</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
