@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="media-heading">Addd New Article</h2>
        <form action="add" method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <label for="usr">Title: </label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="usr">body: </label>
                <textarea name="body" id="" cols="50" rows="4" class="form-control"></textarea>
            </div>

            <br>
            <input type="submit" value="add new" class="btn btn-primary">
        </form>
    </div>
@endsection
