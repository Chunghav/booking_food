@if(Auth::user())
<a href="{{ route('pages.homepage') }}"> <img class="logo" src="{{asset('fe/Images/Logo.jpg')}}" alt="" width="400" height="150"> </a>
@else
<a href="{{ url('/') }}"> <img class="logo" src="{{asset('fe/Images/Logo.jpg')}}" alt="" width="400" height="150"> </a>
 
@endif


      