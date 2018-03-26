@section("header")
  <div class="cover">
    <img src="/img/Rhenova-logo-Wit.png" class="logo"/>
    <img src="/img/Scouting_NL_logo-e1423658895373.png" class="logo_sn"/>
  </div>
  <div class="navigation">
    <a class="{{ Route::is('index') ? 'active' : '' }}"
      href="{{ URL::route('index') }}">Home</a>
    <a class="{{ Route::is('info') ? 'active' : '' }}"
      href="{{ URL::route('info') }}">Info</a>
    <a class="{{ Route::is('contact') ? 'active' : '' }}"
      href="{{ URL::route('contact') }}">Contact</a>
  </div>
@show