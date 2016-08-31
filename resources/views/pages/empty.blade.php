@extends('app')

@section('nav')
    <div class="ui fixed inverted menu">
        <div class="ui container">
            <div class="right menu">
                <a href="{{ url('/logout') }}" class="item">Logout</a>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div id="wrapper" class="ui main container dashboard">

        <h1 class="ui header">Oops!</h1>

        <div class="ui relaxed divided list">

                <div class="item">
                    <i class="large github middle aligned icon"></i>
                    <div class="content">
                        <a class="header">No Repository Found or Empty</a>
                        <div class="description">Please create a <a target="_blank" href="http://github.com">GitHub</a> repository</div>
                    </div>
                </div>

        </div>

    </div>
@stop

@section('footer')
    <script>
        $('.message .close').on('click', function () {
            $(this).closest('.message').fadeOut();
        });

    </script>
@stop