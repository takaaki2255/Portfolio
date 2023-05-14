@extends('layouts.welcome')

@section('content')
<div class="container">
                    <!--.envのAppNameを変える-->
                    <a class="navbar-brand" style="font-size:250%;" 
                                            href="{{ url('/') }}">
                        {{ config('app.name', 'C00KMEMOS') }}
                    </a>
                    <a class="navbar-brand" href="{{ url('/portfolio')}}">
                         {{ config('app.twoname', 'RECIPE') }}
                    </a>
                    <a class="navbar-brand" href="{{ url('/profile')}}">
                         {{ config('app.thirdname', 'PROFILE') }}
                    </a>
</div>
@endsection
