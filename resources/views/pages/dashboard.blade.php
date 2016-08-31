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

        @include('partials.message')

        <h1 class="ui header">{{ $randomRepo->name }}</h1>

        <div class="ui relaxed divided list">

            @if(!empty($commits))

                @foreach ($commits as $commit)
                    <div class="item">
                        <i class="large github middle aligned icon"></i>
                        <div class="content">
                            <a target="_blank" class="header" href="{{ $commit['html_url'] }}">{{ $commit['commit']['message'] }}</a>
                            <div class="description">By
                                @if($commit['author']['html_url'])
                                    <a target="_blank" href="{{ $commit['author']['html_url'] }}">{{ $commit['commit']['author']['name'] }}</a>
                                @else
                                    {{ $commit['commit']['author']['name'] }}
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

            @else

                <div class="item">
                    <i class="large github middle aligned icon"></i>
                    <div class="content">
                        <a class="header">No Commits Found</a>
                        <div class="description">Please trying again</div>
                    </div>
                </div>

            @endif

        </div>

        <button id="reload" class="ui primary button">
            <i class="icon refresh"></i>
            Randomize Repo
        </button>

    </div>
@stop

@section('footer')
    <script>
        $('.message .close').on('click', function () {
            $(this).closest('.message').fadeOut();
        });

        $('#reload').click(function() {
            $('#wrapper').fadeOut('medium');
            $('.modal-overlay').addClass('active');
            location.reload();
        });
    </script>
@stop