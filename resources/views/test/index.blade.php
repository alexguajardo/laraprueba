<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{$article->title}}</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">

  </head>
  <body>

    HOLA ALEJANDRO <br><br>

    <h1>{{$article->title}}</h1>
    <hr>
    {{$article->content}}
    <hr>
    {{$article->user->name}} | {{$article->category->name}} |

    @foreach($article->tags  as $tag)

      {{$tag->name}}

    @endforeach

  </body>
</html>
