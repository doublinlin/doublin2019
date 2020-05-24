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

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.design_1
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="design_1"
                        title="{{ __('Design_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">繪製動力</h5>
                                    <p class="text-content-2">
                                    這家店是自己親手製作新鮮食物，專門為寵物著想</br>
                                    他們很細心做好每一份鮮食，成品皆有通過 SGS 認證</br>
                                    有養毛小孩或想送禮的人可以來<a class="font-des-6" href="https://www.facebook.com/bulubuki.tw/" target="_blank"> Bulubuki 粉絲專頁 </a>，有問題可詢問他們喔</br>
                                    <img src="http://doublinlin.com/doublin/img/designImg/bulubuki_DM.jpg" class="emSpace-2" alt="Bulubuki" width="100%" />
                                    <img src="http://doublinlin.com/doublin/img/designImg/bulubuki_menu.jpg" class="emSpace-2" alt="Bulubuki" width="100%" />
                                    </p>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/designImg/Ireland_rose.jpg"
                        img-alt="Image"
                        img-top
                        tag="article"
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_2')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_2')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.design_2 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="design_2"
                        title="{{ __('Design_Title_2')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">繪製動力</h5>
                                    <p class="text-content-2">
                                    用玫瑰花代替 Rose 中的 o，使用有質感的字體組成
                                    </p>
                                    <img src="http://doublinlin.com/doublin/img/designImg/Ireland_rose.jpg" class="emSpace-2" alt="Bulubuki" width="100%" />
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/designImg/musicCastle-animal.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_3')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_3')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.design_3
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="design_3"
                        title="{{ __('Design_Title_3')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">繪製動力</h5>
                                    <p class="text-content-2">
                                    音樂城堡舉辦的音樂會，演奏的曲目為動物狂歡節。
                                    </p>
                                    <img src="http://doublinlin.com/doublin/img/designImg/musicCastle-animal.jpg" class="emSpace-2" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

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

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.design_4 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="design_4"
                        title="{{ __('Design_Title_4')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">繪製動力</h5>
                                    <p class="text-content-2">
                                    一間賣樂器的網拍公司，走鄉村甜美風</p>
                                    <img src="http://doublinlin.com/doublin/img/designImg/Tempa_box.jpg" class="emSpace-2" alt="tempa" width="100%" />
                                    <img src="http://doublinlin.com/doublin/img/designImg/Tempa_banner_1.jpg" class="emSpace-2" alt="tempa" width="100%" />
                                    <img src="http://doublinlin.com/doublin/img/designImg/Tempa_banner_5.jpg" class="emSpace-2" alt="tempa" width="100%" />
                                    <img src="http://doublinlin.com/doublin/img/designImg/Tempa_banner_4.jpg" class="emSpace-2" alt="tempa" width="100%" />
                                    <img src="http://doublinlin.com/doublin/img/designImg/Tempa_package.jpg" class="emSpace-2" alt="tempa" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/designImg/gentleman_businessCard.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_5')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_5')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.design_5 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="design_5"
                        title="{{ __('Design_Title_5')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">繪製動力</h5>
                                    <p class="text-content-2">
                                    賣著看似普通但不簡單的水煎包</p>
                                    <img src="http://doublinlin.com/doublin/img/designImg/gentleman_banner_1.jpg" class="emSpace-2" alt="gentleman" width="100%" />
                                    <img src="http://doublinlin.com/doublin/img/designImg/gentleman_banner_2.jpg" class="emSpace-2" alt="gentleman" width="100%" />
                                    <img src="http://doublinlin.com/doublin/img/designImg/gentleman_DM.jpg" class="emSpace-2" alt="gentleman" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/designImg/theyNeedU.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_6')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_6')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.design_6 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="design_6"
                        title="{{ __('Design_Title_6')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">繪製動力</h5>
                                    <p class="text-content-2">
                                    有能力想幫助別人，但是卻找不到管道嗎？</br>
                                    現在立即下載<a class="font-des-6" href="https://play.google.com/store/apps/details?id=com.dreamlin.activity.sharecare&hl=zh_TW" target="_blank"> 我要關懷 App </a>，簡單三步驟即可幫助需要的人
                                    <img src="http://doublinlin.com/doublin/img/designImg/theyNeedU.jpg" class="emSpace-2" alt="gentleman" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

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

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.design_7 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="design_7"
                        title="{{ __('Design_Title_7')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">繪製動力</h5>
                                    <p class="text-content-2">
                                    BDIOT 週邊設計</p>
                                    <img src="http://doublinlin.com/doublin/img/img/designImg/BDIOT-DM.jpg" class="emSpace-2" alt="BDIOT" width="100%" />
                                    <img src="http://doublinlin.com/doublin/img/img/designImg/BDIOT-t-shirt.jpg" class="emSpace-2" alt="BDIOT" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/designImg/Topology-stage.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_8')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_8')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.design_8 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="design_8"
                        title="{{ __('Design_Title_8')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">繪製動力</h5>
                                    <p class="text-content-2">
                                    Topology 記者會週邊設計</p>
                                    <img src="http://doublinlin.com/doublin/img/img/designImg/Topology-DM.jpg" class="emSpace-2" alt="Topology" width="100%" />
                                    <img src="http://doublinlin.com/doublin/img/img/designImg/Topology-board.jpg" class="emSpace-2" alt="Topology" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/img/designImg/12.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_9')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_9')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.design_9 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="design_9"
                        title="{{ __('Design_Title_9')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">繪製動力</h5>
                                    <p class="text-content-2">
                                    設計logo</p>
                                    <img src="http://doublinlin.com/doublin/img/designImg/12-1.jpg" class="emSpace-2" alt="12" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                </b-card-group>
            </div>
        </div>

    </div>
</div>
@endsection
