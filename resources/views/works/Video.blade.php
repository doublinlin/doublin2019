@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="page-body">
            <div class="page-content">

                    <b-card>
                        <b-card-title>{{ __('Video_Title_1') }}</b-card-title>
                        <b-embed
                            class="pb-3"
                            type="iframe"
                            aspect="16by9"
                            src="https://www.youtube.com/embed/videoseries?list=PLuqlbhaqZjOkTuPUCwre1qr65R0nk3NAB"
                            allowfullscreen
                        >
                        </b-embed>
                        <b-card-text>{{ __('Video_Content_1')}}</b-card-text>
                    </b-card>

            </div>
        </div>

    </div>
</div>
@endsection
