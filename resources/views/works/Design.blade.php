@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="page-body">
            <div class="page-content">
                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/bulubuki_businessCard.jpg"
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
                                    <h5 class="text-title-2">{{ __('Design_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Design_Reason_Content_1-1')}}</br>
                                    {{ __('Design_Reason_Content_1-2')}}</br>
                                    <a class="font-des-6" href="https://www.facebook.com/bulubuki.tw/" target="_blank"> {{ __('Design_Reason_Content_1-3')}} </a></br>
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/bulubuki_DM.jpg" class="emSpace-2" alt="Bulubuki" width="100%" />
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/bulubuki_menu.jpg" class="emSpace-2" alt="Bulubuki" width="100%" />
                                    </p>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/Ireland_rose.jpg"
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
                                    <h5 class="text-title-2">{{ __('Design_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Design_Reason_Content_2-1')}}
                                    </p>
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/Ireland_rose.jpg" class="emSpace-2" alt="Bulubuki" width="100%" />
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/musicCastle-animal.jpg"
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
                                    <h5 class="text-title-2">{{ __('Design_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Design_Reason_Content_3-1')}}
                                    </p>
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/musicCastle-animal.jpg" class="emSpace-2" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                </b-card-group>

                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/Tempa_businessCard.jpg"
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
                                    <h5 class="text-title-2">{{ __('Design_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Design_Reason_Content_4-1')}}</p>
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/Tempa_businessCard.jpg" class="emSpace-2" alt="tempa" width="100%" />
                                    <!-- <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/Tempa_box.jpg" class="emSpace-2" alt="tempa" width="100%" /> -->
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/Tempa_banner_1.jpg" class="emSpace-2" alt="tempa" width="100%" />
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/Tempa_banner_5.jpg" class="emSpace-2" alt="tempa" width="100%" />
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/Tempa_banner_4.jpg" class="emSpace-2" alt="tempa" width="100%" />
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/Tempa_package.jpg" class="emSpace-2" alt="tempa" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/gentleman_banner_1.jpg"
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
                                    <h5 class="text-title-2">{{ __('Design_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Design_Reason_Content_5-1')}}</p>
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/gentleman_businessCard.jpg" class="emSpace-2" alt="gentleman" width="100%" />
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/gentleman_banner_1.jpg" class="emSpace-2" alt="gentleman" width="100%" />
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/gentleman_banner_2.jpg" class="emSpace-2" alt="gentleman" width="100%" />
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/gentleman_DM.jpg" class="emSpace-2" alt="gentleman" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/theyNeedU.jpg"
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
                                    <h5 class="text-title-2">{{ __('Design_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Design_Reason_Content_6-1')}}</br>
                                    {{ __('Design_Reason_Content_6-2')}}<a class="font-des-6" href="https://play.google.com/store/apps/details?id=com.dreamlin.activity.sharecare&hl=zh_TW" target="_blank"> {{ __('Design_Reason_Content_6-3')}} </a>
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/theyNeedU.jpg" class="emSpace-2" alt="gentleman" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                </b-card-group>

                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/BDIOT-businessCard.jpg"
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
                                    <h5 class="text-title-2">{{ __('Design_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Design_Reason_Content_7-1')}}</p>
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/BDIOT-businessCard.jpg" class="emSpace-2" alt="BDIOT" width="100%" />
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/BDIOT-DM.jpg" class="emSpace-2" alt="BDIOT" width="100%" />
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/BDIOT-t-shirt.jpg" class="emSpace-2" alt="BDIOT" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/12.jpg"
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
                                    <h5 class="text-title-2">{{ __('Design_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Design_Reason_Content_8-1')}}</p>
                                    <img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/designImg/12-1.jpg" class="emSpace-2" alt="12" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                        <!-- DozzyCozy -->
                        <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin/public/images/design/DozzyCozy_logo.jpg"
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
                                    <h5 class="text-title-2">{{ __('Design_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Design_Reason_Content_9-1')}}</p>
                                    <img src="http://doublinlin.com/doublin/doublin/public/images/design/DozzyCozy_logo_01.jpg" class="emSpace-2" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                </b-card-group>

                <b-card-group deck>
                    <!-- AirCozy -->
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin/public/images/design/AirCozy_logo.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_10')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_10')}}</b-card-text> 

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.design_10
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="design_10"
                        title="{{ __('Design_Title_10')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Design_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Design_Reason_Content_10-1')}}</p>
                                    <img src="http://doublinlin.com/doublin/doublin/public/images/design/AirCozy_logo_01.jpg" class="emSpace-2" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                    <!-- Wedding Card -->
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin/public/images/design/Wedding_invitation.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_11')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_11')}}</b-card-text> 

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.design_11
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="design_11"
                        title="{{ __('Design_Title_11')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Design_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Design_Reason_Content_11-1')}}</p>
                                    <img src="http://doublinlin.com/doublin/doublin/public/images/design/Wedding_invitation_01.jpg" class="emSpace-2" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                    <!-- Dozzycozy others-->
                    <b-card-img-lazy
                        img-src="{{ url('images/design/Dozzycozy_buessineCard.jpg') }}"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_12')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_12')}}</b-card-text> 

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.design_12
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="design_12"
                        title="{{ __('Design_Title_12')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Design_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Design_Reason_Content_12-1')}}</p>
                                    <img src="{{ url('images/design/Dozzycozy_buessineCard.jpg') }}" class="emSpace-2" width="100%" />
                                    <img src="{{ url('images/design/Dozzycozy_pillowBox.jpg') }}" class="emSpace-2" width="100%" />
                                    <img src="{{ url('images/design/Dozzycozy_manual.jpg') }}" class="emSpace-2" width="100%" />
                                    <img src="{{ url('images/design/Dozzycozy_flyer.jpg') }}" class="emSpace-2" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                </b-card-group>
                
                <b-card-group deck>
                    <!-- Trendigi -->
                    <b-card-img-lazy
                        img-src="{{ url('images/design/Trendigi_bookCover.jpg') }}"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Design_Title_13')}}</b-card-title>
                        <b-card-text>{{ __('Design_Content_13')}}</b-card-text> 

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.design_13
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="design_13"
                        title="{{ __('Design_Title_13')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Design_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Design_Reason_Content_13-1')}}</p>
                                    <img src="{{ url('images/design/Trendigi_bookCover_02.jpg') }}" class="emSpace-2" width="100%" />
                                </div>
                            </b-container>
                        </b-modal>

                </b-card-group>
            </div>
        </div>

    </div>
</div>
@endsection
