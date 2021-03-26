@extends('web.master')
@section('content')
    <h1>Content</h1>
    @{{message}}



    <div class="card" v-for='post in posts' style="display:none;">
        <img v-bind:src=" 'images/' + post.image" class="card-img-top"  alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">@{{post.title}}</h5>
          <p class="card-text">@{{post.content}}</p>
          <a href="#" class="btn btn-primary">Ver resumen</a>
        </div>
     </div>

     <list-posts title="Titulo" :final_posts="posts"></list-posts>
     <example-component></example-component>
@endsection
