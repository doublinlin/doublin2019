@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="page-body">
            <div class="page-content">
                <b-container class="bv-example-row">
                <b-row>
                    <b-col md="6">
                        <b-img src="{{ url('images/ItsMe/myPhoto.jpg') }}" fluid alt="Responsive image"></b-img>
                    </b-col>
                    <b-col md="6">
                    <b-row class="config">
                        <b-col md="3" class="text-title">{{ __('Name_Title') }}</b-col>
                        <b-col md="9" class="text-content">{{ __('Name_Content') }}</b-col>

                        <b-col md="3" class="text-title">{{ __('Birthday_Title') }}</b-col>
                        <b-col md="9" class="text-content">{{ __('Birthday_Content') }}</b-col>

                        <b-col md="3" class="text-title">{{ __('Education_Title') }}</b-col>
                        <b-col md="9" class="text-content">
                        <p>{{ __('Education_Content_1') }}<br>
                        {{ __('Education_Content_2') }}
                        </p>
                        </b-col>

                        <b-col md="3" class="text-title">{{ __('Software_Title') }}</b-col>
                        <b-col md="9" class="text-content">
                        <ul class="ps-m2rem">
                            <li>{{ __('Software_Content_1') }}</li>
                            <li>{{ __('Software_Content_2') }}</li>
                        </ul>
                        </b-col>

                        <b-col md="3" class="text-title">{{ __('Skills_Title') }}</b-col>
                        <b-col md="9" class="text-content">
                        <ul class="ps-m2rem">
                            <li>{{ __('Skills_Content_1') }}</li>
                            <li>{{ __('Skills_Content_2') }}</li>
                            <li>{{ __('Skills_Content_3') }}</li>
                        </ul>
                        </b-col>

                        <b-col md="3" class="text-title">{{ __('Certificate_Title') }}</b-col>
                        <b-col md="9" class="text-content">
                        <ul class="ps-m2rem">
                            <li>{{ __('Certificate_Content_1') }}</li>
                            <li>{{ __('Certificate_Content_2') }}</li>
                        </ul>
                        </b-col>

                        <b-col md="3" class="text-title">{{ __('Experience_Title') }}</b-col>
                        <b-col md="9" class="text-content">
                        <b-button
                        v-b-modal.experience
                        variant="outline-dark"
                        size="sm"
                        style="font-size: 0.85rem; padding: 0.2rem 0.5rem;"
                        >{{ __('Experience_Content') }}</b-button>
                        <b-modal
                        id="experience"
                        title="{{ __('Work_Experience_Title') }}"
                        scrollable
                        hide-footer>
                            <p class="my-4">
                            <b-container class="bv-example-row">
                                <b-row class="config-2">
                                <b-col md="12" class="text-title">
                                <i class="bi bi-briefcase-fill"></i>
                                &nbsp;{{ __('Work_Experience_Content_1') }}<br>
                                &emsp;&ensp;2014 - 2016
                                </b-col>
                                <b-col md="12" class="text-content">
                                &emsp;&ensp;{{ __('Work_Experience_Content_2') }}<br>
                                </b-col>
                                </b-row>
                                <b-row class="config-2">
                                <b-col md="12" class="text-title">
                                <i class="bi bi-briefcase-fill"></i>
                                &nbsp;{{ __('Work_Experience_Content_3') }}<br>
                                &emsp;&ensp;2016 - 2017
                                </b-col>
                                <b-col md="12" class="text-content">
                                &emsp;&ensp;{{ __('Work_Experience_Content_4') }}
                                </b-col>
                                </b-row>

                                <b-row class="config-2">
                                <b-col md="12" class="text-title">
                                <i class="bi bi-briefcase-fill"></i>
                                &nbsp;{{ __('Work_Experience_Content_5') }}<br>
                                &emsp;&ensp;2018 - 2019
                                </b-col>
                                <b-col md="12" class="text-content">
                                &emsp;&ensp;{{ __('Work_Experience_Content_6') }}
                                </b-col>
                                </b-row>

                                <b-row class="config-2">
                                <b-col md="12" class="text-title">
                                <i class="bi bi-briefcase-fill"></i>
                                &nbsp;{{ __('Work_Experience_Content_7') }}<br>
                                &emsp;&ensp;2019 - 2022
                                </b-col>
                                <b-col md="12" class="text-content">
                                &emsp;&ensp;{{ __('Work_Experience_Content_8') }}
                                </b-col>
                                </b-row>

                                <b-row class="config-2">
                                <b-col md="12" class="text-title">
                                <i class="bi bi-briefcase-fill"></i>
                                &nbsp;{{ __('Work_Experience_Content_9') }}<br>
                                &emsp;&ensp;2022 - 2023
                                </b-col>
                                <b-col md="12" class="text-content">
                                &emsp;&ensp;{{ __('Work_Experience_Content_10') }}
                                </b-col>
                                </b-row>

                                <b-row class="config-2">
                                <b-col md="12" class="text-title">
                                <i class="bi bi-briefcase-fill"></i>
                                &nbsp;{{ __('Work_Experience_Content_11') }}<br>
                                &emsp;&ensp;2023 - now
                                </b-col>
                                <b-col md="12" class="text-content">
                                &emsp;&ensp;{{ __('Work_Experience_Content_12') }}
                                </b-col>
                                </b-row>

                            </b-container>
                            </p>
                        </b-modal>
                        </b-col>
                    </b-row>
                    </b-col>
                </b-row>
                </b-container>
            </div>
        </div>

    </div>
</div>
@endsection
