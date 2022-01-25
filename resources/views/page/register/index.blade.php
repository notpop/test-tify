@extends('layout.frame')

@section('title', 'Register')

@include('block.head')

@section('css')
  <link rel="stylesheet" href="" media="screen">
@endsection

@section('main')
  @include('block.header')
  @include('block.nav.error')

  <div id="inputContainer">
    <form id="form" method="post">
      @csrf

      <h2>Register for your account.</h2>
      <p>
        <label for="name">UserName</label>
        <input type="text" id="name" name="name">
      </p>
      <p>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
      </p>
      <p>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
      </p>

      <button type="submit">Register</button>
    </form>
  </div>

@endsection


@section('script')

@endsection
