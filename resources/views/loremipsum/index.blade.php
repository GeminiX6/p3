@extends('layouts.master')


@section('title')
    Generate Lorem Ipsum Paragraphs
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop


@section('content')
    <h1>Generate Lorem Ipsum Paragraphs</h1>

    <form method='POST' action='/LoremIpsum'>

        <input type='hidden' name='_token' value='{{csrf_token()}}'>

        @if(count($errors) > 0)
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        @endif

        Number of paragraphs: <input type='text' name='number_of_paragraphs' value='5'><br><br>

        <input type='submit' value='Generate some paragraphs!'>
    </form>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
