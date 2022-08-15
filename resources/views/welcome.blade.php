@extends('layouts.guest')

@section('content')
  @include('components.navguest')

  @include('components.homeguest')
  @include('components.aboutguest')

  <section id="footer" >
    <footer class="text-center pb-5 ">
      <p>Copyright &copy; 2022 By Dumas</p>
    </footer>
  </section>

@endsection
