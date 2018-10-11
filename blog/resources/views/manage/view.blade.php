@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-stripped">
            <tr>
                <td>Title</td>
            </tr>

            @foreach($articles as $art)
                <tr>
                    <td><a href="{{"/read/".$art->id}}">{{$art->title}}</a></td>
                </tr>
            @endforeach
        </table>

        <a href="add" class="btn btn-primary">Addd New Article</a>
    </div>
@endsection
