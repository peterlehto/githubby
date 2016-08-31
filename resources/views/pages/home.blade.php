@extends('app')

@section('content')
   <div id="wrapper" class="ui middle aligned center aligned grid">
      <div class="column">
         <div class="octocat">
            <a class="githubby" href="{{ url('/auth/github/') }}">
               {!! Html::image('/img/octocat.png') !!}
            </a>
         </div>
         <a class="ui basic button githubby" href="{{ url('/auth/github/') }}">
            <i class="large github middle aligned icon"></i>
            Login with GitHub
         </a>
      </div>
   </div>
@stop

@section('footer')
   <script>
      $(document).on('click', '.githubby', function(){
         $('#wrapper').fadeOut('medium');
         $('.modal-overlay').addClass('active');
      });
   </script>
@stop