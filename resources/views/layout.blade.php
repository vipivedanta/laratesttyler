@if( Session::has('msg_s') )
<div style="color:green;">{{ Session::get('msg_s') }}</div>
@endif

@yield('content')