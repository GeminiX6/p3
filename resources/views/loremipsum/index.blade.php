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

    <a href='/'''>Back to Home</a>

    <h2>Generate Lorem Ipsum Paragraphs</h2><br><br>

    <form method='POST' action='/LoremIpsum' class="form-horizontal">
        <fieldset>
        <input type='hidden' name='_token' value='{{csrf_token()}}'>

        @if(count($errors) > 0)
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        @endif

        <div class="form-group">
        <label for="number_of_paragraphs" class="col-lg-2 control-label">Number of paragraphs (Max: 99)</label>
      <div class="col-xs-1">
        <input type="text" class="form-control" id="number_of_paragraphs" name="number_of_paragraphs" value="5" width=10%>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Generate some paragraphs!</button>
      </div>
    </div>
  </fieldset>
    </form>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
