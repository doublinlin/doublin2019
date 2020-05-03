@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="page-body">
            <div class="page-content">
                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/designImg/bulubuki_businessCard.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_1')}}</b-card-text>

                        <b-button href="#" variant="outline-dark">more</b-button>
                    </b-card-img-lazy>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/designImg/Ireland_rose.jpg"
                        img-alt="Image"
                        img-top
                        tag="article"
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_2')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_2')}}</b-card-text>

                        <b-button href="#" variant="outline-dark">more</b-button>
                    </b-card-img-lazy>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/designImg/musicCastle-animal.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_3')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_3')}}</b-card-text>

                        <b-button href="#" variant="outline-dark">more</b-button>
                    </b-card-img-lazy>
                </b-card-group>

                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/designImg/Tempa_businessCard.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_4')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_4')}}</b-card-text>

                        <b-button href="#" variant="outline-dark">more</b-button>
                    </b-card-img-lazy>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/designImg/gentleman_businessCard.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_5')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_5')}}</b-card-text>

                        <b-button href="#" variant="outline-dark">more</b-button>
                    </b-card-img-lazy>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/designImg/theyNeedU.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_6')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_6')}}</b-card-text>

                        <b-button href="#" variant="outline-dark">more</b-button>
                    </b-card-img-lazy>

                </b-card-group>

                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/designImg/BDIOT-businessCard.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_7')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_7')}}</b-card-text>

                        <b-button href="#" variant="outline-dark">more</b-button>
                    </b-card-img-lazy>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/designImg/Topology-stage.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_8')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_8')}}</b-card-text>

                        <b-button href="#" variant="outline-dark">more</b-button>
                    </b-card-img-lazy>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/designImg/12.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_9')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_9')}}</b-card-text>

                        <b-button href="#" variant="outline-dark">more</b-button>
                    </b-card-img-lazy>

                </b-card-group>
            </div>
        </div>

    </div>
</div>
@endsection
