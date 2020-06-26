<template>
<!-- vue-easy-lightbox -->
  <div class="page-body">
        <div class="page-content">
              <div id="lightbox"></div>
                  <div class="gallery">
                      <div
                      v-for="(src, index) in imgs"
                      :key="index"
                      class="pic"
                      @click="() => showImg(index)"
                      >
                      <img :src="src">
                      </div>
                  </div>
                  <vue-easy-lightbox
                      :visible="visible"
                      :imgs="imgs"
                      :index="index"
                      @hide="handleHide"
                  ></vue-easy-lightbox>
        </div> 
  </div>

</template>

<script>
import VueEasyLightbox from 'vue-easy-lightbox'

export default {
    el: '#lightbox',
  components: {
    VueEasyLightbox
  },
  data() {
    return {
      visible: false,
      index: 0,   // default: 0
      imgs : [
         'http://doublinlin.com/doublin/doublin(2017-2019)/img/photoImg/photo-7.jpg',
         'http://doublinlin.com/doublin/doublin(2017-2019)/img/photoImg/photo-6.jpg',
         'http://doublinlin.com/doublin/doublin(2017-2019)/img/photoImg/photo-1.jpg',
         'http://doublinlin.com/doublin/doublin(2017-2019)/img/photoImg/photo-3.jpg',
         'http://doublinlin.com/doublin/doublin(2017-2019)/img/photoImg/photo-4.jpg',
         'http://doublinlin.com/doublin/doublin(2017-2019)/img/photoImg/photo-5.jpg',
      ],
    }
  },
  methods: {
    showImg (index) {
      this.index = index
      this.visible = true
    },
    handleHide() {
      this.visible = false
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
/* button {
  background-color: #fff;
  border: none;
}
button:active {
  background-color: #fff;
  border: none;
} */
.gallery{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}
.pic {
    width: calc(30% - 5px);
    margin: 10px;
    cursor: pointer;
}

img {
    border-radius: 2%;
    width: 100%;
    -webkit-transition: .3s ease;
    transition: .3s ease;
}
</style>
