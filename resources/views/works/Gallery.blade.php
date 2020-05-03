@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="page-body">
            <div class="page-content">
                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/galleryImg/Doublin_bag_1_850.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Gallery_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Gallery_Content_1')}}</b-card-text>
                        
                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.gallery_1 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="gallery_1"
                        title="{{ __('Gallery_Title_1')}}"
                        scrollable
                        hide-footer>
                        
                            <b-container class="bv-example-row">
                                111
                            </b-container>
                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/galleryImg/Doublin_bag_2_850.jpg"
                        img-alt="Image"
                        img-top
                        tag="article"
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Gallery_Title_2')}}</b-card-title>
                        <b-card-text>{{ __('Gallery_Content_2')}}</b-card-text>

                        <b-button href="#" variant="outline-dark">more</b-button>
                    </b-card-img-lazy>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/galleryImg/Doublin_bag_3_850.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Gallery_Title_3')}}</b-card-title>
                        <b-card-text>{{ __('Gallery_Content_3')}}</b-card-text>

                        <b-button href="#" variant="outline-dark">more</b-button>
                    </b-card-img-lazy>
                </b-card-group>

                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/galleryImg/Line_name.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >

                        <b-card-title>{{ __('Gallery_Title_4')}}</b-card-title>
                        <b-card-text>{{ __('Gallery_Content_4')}}</b-card-text>

                        <b-button href="#" variant="outline-dark">more</b-button>
                    </b-card-img-lazy>

                </b-card-group>

                
            </div>
        </div>

    </div>
</div>
@endsection
