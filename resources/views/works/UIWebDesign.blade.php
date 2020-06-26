@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="page-body">
            <div class="page-content">
                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day1.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_1')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_1 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_1"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_1')}}<br>
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day1.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day2.jpg" 
                        img-alt="Image"
                        img-top
                        tag="article"
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_2')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_2 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_2"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_2')}}<br>

                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day2.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day3.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_3')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_3
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_3"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_3')}}<br>
                
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day3.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>
                </b-card-group>

                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day4.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_4')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_4
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_4"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_4')}}<br>
        
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day4.gif" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day5.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_5')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_5 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_5"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_5')}}<br>

                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day5.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day6.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_6')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_6
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_6"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_6')}}<br>
                
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day6.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                </b-card-group>

                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day7.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_7')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_7
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_7"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_7')}}<br>
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day7.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day8.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_8')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_8 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_8"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_8')}}<br>

                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day8.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day9.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_9')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_9 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_9"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_9')}}<br>
                
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day9.gif" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                </b-card-group>

                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day10.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_10')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_10 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_10"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_10')}}<br>

                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day10.gif" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day11.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_11')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_11 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_11"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_11')}}<br>
        
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <iframe 
                                    height="600" 
                                    style="width: 100%;" 
                                    scrolling="no" 
                                    title="Single Product" 
                                    src="https://codepen.io/Doublin/embed/gGGgZb?height=600&theme-id=light&default-tab=result" 
                                    frameborder="no" 
                                    allowtransparency="true" 
                                    allowfullscreen="true">
                                    See the Pen 
                                    <a href='https://codepen.io/Doublin/pen/gGGgZb'>Single Product</a> by Doublin
                                    (<a href='https://codepen.io/Doublin'>@Doublin</a>) on <a href='https://codepen.io'>CodePen</a>.
                                    </iframe>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day12.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_12')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_12 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_12"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_12')}}<br>
        
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day12.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                </b-card-group>

                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day13.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_13')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_13 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_13"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_13')}}<br>
            
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day13.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day14.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_14')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_14 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_14"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_14')}}<br>
            
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <iframe 
                                    height="600" 
                                    style="width: 100%;" 
                                    scrolling="no" 
                                    title="Countdown Timer" 
                                    src="https://codepen.io/Doublin/embed/xQOxWE?height=600&theme-id=light&default-tab=result" 
                                    frameborder="no" 
                                    allowtransparency="true" 
                                    allowfullscreen="true">
                                    See the Pen 
                                    <a href='https://codepen.io/Doublin/pen/xQOxWE'>Countdown Timer</a> by Doublin
                                    (<a href='https://codepen.io/Doublin'>@Doublin</a>) on <a href='https://codepen.io'>CodePen</a>.
                                    </iframe>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day15.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_15')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_15 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_15"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_15')}}<br>
        
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <iframe 
                                    height="600" 
                                    style="width: 100%;" 
                                    scrolling="no" 
                                    title="On/ Off Switch" 
                                    src="https://codepen.io/Doublin/embed/qPpjKV?height=600&theme-id=light&default-tab=result" 
                                    frameborder="no" 
                                    allowtransparency="true" 
                                    allowfullscreen="true">
                                    See the Pen 
                                    <a href='https://codepen.io/Doublin/pen/qPpjKV'>On/ Off Switch</a> by Doublin
                                    (<a href='https://codepen.io/Doublin'>@Doublin</a>) on <a href='https://codepen.io'>CodePen</a>.
                                    </iframe>
                                </div>
                            </b-container>

                        </b-modal>

                </b-card-group>

                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day16.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_16')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_16 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_16"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_16')}}
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <iframe 
                                        height="600" 
                                        style="width: 100%;" 
                                        scrolling="no" 
                                        title="Pop-up" 
                                        src="https://codepen.io/Doublin/embed/MPzMMB?height=600&theme-id=light&default-tab=result" 
                                        frameborder="no" 
                                        allowtransparency="true" 
                                        allowfullscreen="true">
                                        See the Pen 
                                        <a href='https://codepen.io/Doublin/pen/MPzMMB'>Pop-up</a> by Doublin
                                        (<a href='https://codepen.io/Doublin'>@Doublin</a>) on <a href='https://codepen.io'>CodePen</a>.
                                    </iframe>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Day17.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_1')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_17')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_17 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_17"
                        title="{{ __('Web_UI_Title_1')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Title_1')}}<br>
                                    {{ __('Web_UI_Content_17')}}<br>
    
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <iframe 
                                        height="600" 
                                        style="width: 100%;" 
                                        scrolling="no" 
                                        title="Email Receipt" 
                                        src="https://codepen.io/Doublin/embed/JmQWZL?height=600&theme-id=light&default-tab=result" 
                                        frameborder="no" 
                                        allowtransparency="true" 
                                        allowfullscreen="true">
                                        See the Pen 
                                        <a href='https://codepen.io/Doublin/pen/JmQWZL'>Email Receipt</a> by Doublin
                                        (<a href='https://codepen.io/Doublin'>@Doublin</a>) on <a href='https://codepen.io'>CodePen</a>.
                                    </iframe>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/swap.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_18')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_18')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_18 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_18"
                        title="{{ __('Web_UI_Title_18')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Reason_Content_18-1')}}<br>
                                    {{ __('Web_UI_Reason_Content_18-2')}}<br>
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/swap.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                </b-card-group>

                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Doublin(2016-2017)-web.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_19')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_19')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_19 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_19"
                        title="{{ __('Web_UI_Title_19')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Reason_Content_19-1')}}<br>
                                    </p>
                                    <b-button  
                                        href="http://doublinlin.com/doublin/doublin(2017-2019)/doublin(2016-2017)/protfolio.php" 
                                        class="font-des-6" 
                                        target="_blank"
                                        variant="outline-dark"
                                        size="sm"
                                    >
                                    {{ __('Web_UI_Click_Me_Into_Web')}}
                                    </b-button>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Doublin(2016-2017)-web.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Doublin(2017-2019)-web-01.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_20')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_20')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_20 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_20"
                        title="{{ __('Web_UI_Title_20')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Reason_Content_20-1')}}<br>
                                    </p>
                                    <b-button  
                                        href="http://doublinlin.com/doublin/doublin(2017-2019)/doublin(2017-2019)/index.html" 
                                        class="font-des-6" 
                                        target="_blank"
                                        variant="outline-dark"
                                        size="sm"
                                    >
                                    {{ __('Web_UI_Click_Me_Into_Web')}}
                                    </b-button>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Doublin(2017-2019)-web-01.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>
                
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/BDIOT-web.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_21')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_21')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_21 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_21"
                        title="{{ __('Web_UI_Title_21')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Reason_Content_21-1')}}<br>
                                    </p>
                                    <b-button  
                                        href="http://doublinlin.com/doublin/BDIOT/index.html" 
                                        class="font-des-6" 
                                        target="_blank"
                                        variant="outline-dark"
                                        size="sm"
                                    >
                                    {{ __('Web_UI_Click_Me_Into_Web')}}
                                    </b-button>
                                </div>
                                <div class="mb-5">
                                <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/BDIOT-web.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>
                </b-card-group>

                <b-card-group deck>
                    <b-card-img-lazy
                        img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Topology-web.jpg"
                        img-alt="Image"
                        img-top
                        class="mt-3"
                    >
                        <b-card-title>{{ __('Web_UI_Title_22')}}</b-card-title>
                        <b-card-text>{{ __('Web_UI_Content_22')}}</b-card-text>

                        <!-- v-b-modal.都小寫 -->
                        <b-button 
                        v-b-modal.uiwebdesign_22 
                        variant="outline-dark"
                        size="sm"
                        >more
                        </b-button>
                    </b-card-img-lazy>
                        <b-modal 
                        id="uiwebdesign_22"
                        title="{{ __('Web_UI_Title_22')}}"
                        size="lg"
                        scrollable
                        hide-footer
                        >
                        
                            <b-container>
                                <div class="mb-5">
                                    <h5 class="text-title-2">{{ __('Web_UI_Reason_Title_1')}}</h5>
                                    <p class="text-content-2">
                                    {{ __('Web_UI_Reason_Content_22-1')}}<br>
                                    </p>
                                    <b-button  
                                        href="http://doublinlin.com/doublin/Topology/index.html" 
                                        class="font-des-6" 
                                        target="_blank"
                                        variant="outline-dark"
                                        size="sm"
                                    >
                                    {{ __('Web_UI_Click_Me_Into_Web')}}
                                    </b-button>
                                </div>
                                <div class="mb-5">
                                    <b-img src="http://doublinlin.com/doublin/doublin(2017-2019)/img/uiWebDesignImg/Topology-web.jpg" fluid alt="Fluid image"></b-img>
                                </div>
                            </b-container>

                        </b-modal>

                </b-card-group>

            </div>
        </div>

    </div>
</div>
@endsection
