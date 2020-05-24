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
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">繪製動力</h5>
                                    <p class="text-content-2">
                                    在愛爾蘭打工渡假的尾聲，我很幸運有那一群台灣朋友，多了他們我的打工渡假更歡樂。<br>
                                    所以，我決定畫他們每個人最生活一面，把我所知道的回憶留在帆布袋上，送給每一個我感謝的人。
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/img/galleryImg/Doublin_bag_1_850.jpg" fluid alt="Fluid image"></b-img>
                                </div>
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

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.gallery_2
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="gallery_2"
                        title="{{ __('Gallery_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">繪製動力</h5>
                                    <p class="text-content-2">
                                    在愛爾蘭打工渡假的尾聲，我很幸運有那一群台灣朋友，多了他們我的打工渡假更歡樂。<br>
                                    所以，我決定畫他們每個人最生活一面，把我所知道的回憶留在帆布袋上，送給每一個我感謝的人。
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/img/galleryImg/Doublin_bag_2_850.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/galleryImg/Doublin_bag_3_850.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
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
                    </b-card-img-lazy>
                        <b-modal 
                        id="gallery_3"
                        title="{{ __('Gallery_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">繪製動力</h5>
                                    <p class="text-content-2">
                                    在愛爾蘭打工渡假的尾聲，我很幸運有那一群台灣朋友，多了他們我的打工渡假更歡樂。<br>
                                    所以，我決定畫他們每個人最生活一面，把我所知道的回憶留在帆布袋上，送給每一個我感謝的人。
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/img/galleryImg/Doublin_bag_3_850.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>
                        </b-modal>

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

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.gallery_4 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="gallery_4"
                        title="{{ __('Gallery_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">繪製動力</h5>
                                    <p class="text-content-2">
                                    因為我蠻喜歡綠色也喜歡外星人</br>
                                    所以我就創造了這個角色</br>
                                    在你的日常生活中，大大小小的事皆可使用</br>
                                    <img src="http://doublinlin.com/doublin/img/galleryImg/Line_mobile.jpg" class="emSpace-2" alt="鼻屎星人" width="100%" />
                                    上圖為在手機上呈現的感覺</br>
                                    想讓有趣的鼻屎星人充滿你的生活？ 快來<a class="font-des-6" href="https://store.line.me/stickershop/product/1221453/zh-Hant" target="_blank"> Line Store </a>把我帶回家</p>
                                </div>
                            </b-container>

                        </b-modal>

                </b-card-group>

                
            </div>
        </div>

    </div>
</div>

<script>
  export default {
    data() {
      return {
        mainProps: { blank: true, blankColor: '#777', width: 75, height: 75, class: 'm1' }
      }
    }
  }
</script>

@endsection
