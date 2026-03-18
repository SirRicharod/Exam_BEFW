@extends('layouts.app')

@section('header')
<h1>Dashboard</h1>
@endsection

@section('content')
<h2>Active Courses</h2>
<ul>
    @foreach($courses as $course)
    <li>
        <b>{{ $course->title }}</b>
        <p>{{ $course->description }}</p>
        <form action="/courses/{{ $course->id }}/toggle" method="POST" style="display:inline;">
            @csrf
            <button type="submit" style="margin-bottom: 15px;">deactivate</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection