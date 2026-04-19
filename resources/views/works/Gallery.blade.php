@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="page-body">
            <div class="page-content">
                <b-card-group deck>
                    <b-card
                        img-src="{{ url('images/gallery/Doublin_bag_1_850.jpg') }}"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                        loading="lazy"
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
                    </b-card>
                        <b-modal
                        id="gallery_1"
                        title="{{ __('Gallery_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >

                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Gallery_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Gallery_Reason_Content_1-1')}}<br>
                                    {{ __('Gallery_Reason_Content_1-2')}}
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="{{ url('images/gallery/Doublin_bag_1_850.jpg') }}" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card
                        img-src="{{ url('images/gallery/Doublin_bag_2_850.jpg') }}"
                        img-alt="Image"
                        img-top
                        tag="article"
                        class="mt-3"
                        loading="lazy"
                    >
                        <b-card-title>{{ __('Gallery_Title_2')}}</b-card-title>
                        <b-card-text>{{ __('Gallery_Content_2')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button
                        v-b-modal.gallery_2
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card>
                        <b-modal
                        id="gallery_2"
                        title="{{ __('Gallery_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >

                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Gallery_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Gallery_Reason_Content_1-1')}}<br>
                                    {{ __('Gallery_Reason_Content_1-2')}}
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="{{ url('images/gallery/Doublin_bag_2_850.jpg') }}" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card
                        img-src="{{ url('images/gallery/Doublin_bag_3_850.jpg') }}"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                        loading="lazy"
                    >
                        <b-card-title>{{ __('Gallery_Title_3')}}</b-card-title>
                        <b-card-text>{{ __('Gallery_Content_3')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button
                        v-b-modal.gallery_3
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card>
                        <b-modal
                        id="gallery_3"
                        title="{{ __('Gallery_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >

                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Gallery_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Gallery_Reason_Content_1-1')}}<br>
                                    {{ __('Gallery_Reason_Content_1-2')}}
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="{{ url('images/gallery/Doublin_bag_3_850.jpg') }}" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>
                        </b-modal>

                </b-card-group>

                <b-card-group deck>
                    <b-card
                        img-src="{{ url('images/gallery/Line_name.jpg') }}"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                        loading="lazy"
                    >

                        <b-card-title>{{ __('Gallery_Title_4')}}</b-card-title>
                        <b-card-text>{{ __('Gallery_Content_4')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button
                        v-b-modal.gallery_4
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card>
                        <b-modal
                        id="gallery_4"
                        title="{{ __('Gallery_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >

                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Gallery_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Gallery_Reason_Content_4-1')}}<br>
                                    {{ __('Gallery_Reason_Content_4-2')}}</br>
                                    <img src="{{ url('images/gallery/Line_mobile.jpg') }}" class="emSpace-2" alt="鼻屎星人" width="100%" />
                                    {{ __('Gallery_Reason_Content_4-3')}}</br>
                                    {{ __('Gallery_Reason_Content_4-4')}}
                                    <a class="font-des-6" href="https://store.line.me/stickershop/product/1221453/zh-Hant" target="_blank"> Line Store </a>{{ __('Gallery_Reason_Content_4-5')}}</p>
                                </div>
                            </b-container>
                        </b-modal>

                </b-card-group>

            </div>
        </div>

    </div>
</div>

<!-- <script>
  export default {
    data() {
      return {
        mainProps: { blank: true, blankColor: '#777', width: 75, height: 75, class: 'm1' }
      }
    }
  }
</script> -->

@endsection
