@extends('layouts.master')


@section('title')
    Developer's Best Friend
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop


@section('content')

    <h2>Developer's Best Friend!</h2><br><br>


    <h3>Lorem Ipsum Generator</h3> <br><br>

    <blockquote>
  <p>In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself") is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content with placeholder text allows viewers to focus on graphic aspects such as font, typography, and page layout without being distracted by the content. It also reduces the need for the designer to come up with meaningful text, as they can instead use quickly-generated lorem ipsum.</p>
  <small>Definition from <cite title="Wikipedia"><a href='https://en.wikipedia.org/wiki/Lorem_ipsum'>Wikipedia</a></cite></small>
</blockquote>
    <a href='/LoremIpsum'>Generate Lorem Ipsum Paragraphs</a> <br><br>

    <h3>Random User Generator</h3> <br><br>

    <blockquote>
      <p>Random users can be generated here for populating databases or for any other use.</p>
    </blockquote>

    <a href='/RandomUser'>Generate Random Users</a>


@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
