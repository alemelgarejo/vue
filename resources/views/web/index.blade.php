@extends('web.master')
@section('content')
    <h1>Content</h1>
    @{{message}}

    <ul>
        <li v-for='post in posts'>@{{post}}</li>
    </ul>
@endsection
