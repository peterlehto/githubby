@if (Session::has('flash_message'))
    <div class="ui success message">
        <i class="close icon"></i>
        <div class="header">
            {{ session('flash_message_header') }}
        </div>
        <p>{{ session('flash_message') }}</p>
    </div>
@endif