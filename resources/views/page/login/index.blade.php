@extends('layout.frame')

@section('title', 'Login')

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

      <h2>Login to your account.</h2>
      <p>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
      </p>
      <p>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
      </p>

      <button type="submit">Login</button>
    </form>
  </div>

@endsection


@section('script')

@endsection
