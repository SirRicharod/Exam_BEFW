@extends('layouts.app')

@section('header')
    <h1>Create a new course</h1>
@endsection

@section('content')
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/courses" method="POST">
        @csrf

        <div>
            <label>Title:</label><br>
            <input type="text" name="title" placeholder="New Course Title">
        </div>

        <br>

        <div>
            <label>Description:</label><br>
            <textarea name="description" placeholder="Enter a short description..."></textarea>
        </div>

        <br>

        <div>
            <label>
                <input type="checkbox" name="active" value="1" checked> Active
            </label>
        </div>

        <br>

        <button type="submit">Create Course</button>
    </form>
@endsection