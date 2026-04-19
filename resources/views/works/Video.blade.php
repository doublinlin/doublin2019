@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="page-body">
            <div class="page-content">

                    <b-card>
                        <b-card-title>{{ __('Video_Title_1') }}</b-card-title>
                        <div class="ratio ratio-16x9 mb-3">
                            <iframe
                                src="https://www.youtube.com/embed/videoseries?list=PLuqlbhaqZjOkTuPUCwre1qr65R0nk3NAB"
                                allowfullscreen
                            >
                            </iframe>
                        </div>
                        <b-card-text>{{ __('Video_Content_1')}}</b-card-text>
                    </b-card>

            </div>
        </div>

    </div>
</div>
@endsection
