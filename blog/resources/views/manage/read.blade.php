@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-group">
            <label for="usr">Title: </label>
            {{$article->title}}
        </div>
        <div class="form-group">
            <label for="usr">Body: </label>
            {{$article->body}}
        </div>


        <table class="table table-stripped">
            <tr>
                <td>Comments</td>
            </tr>

            @foreach($article->comments as $com)
                <tr>
                    <td>{{$com->body}}</td>
                </tr>
            @endforeach
        </table>

        <form action="/read/{{$article->id}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="usr">Body: </label>
                <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <input type="submit" value="Add Comment" class="btn btn-primary">
        </form>

    </div>
@endsection
