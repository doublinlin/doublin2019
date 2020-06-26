<template>
  <div class="page-body">
      <div class="page-content">
        <b-carousel
          id="carousel-1"
          v-model="slide"
          :interval="4000"
          controls
          indicators
          background="#ababab"
          img-width="1024"
          img-height="480"
          style="text-shadow: 1px 1px 2px #333;"
          @sliding-start="onSlideStart"
          @sliding-end="onSlideEnd"
        >
          <!-- Slides with image only -->
          <b-carousel-slide img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/Doublin_bag_1.jpg"></b-carousel-slide>
          <b-carousel-slide img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/Doublin_bag_2.jpg"></b-carousel-slide>
          <b-carousel-slide img-src="http://doublinlin.com/doublin/doublin(2017-2019)/img/Doublin_bag_3.jpg"></b-carousel-slide>
        </b-carousel>
      </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        slide: 0,
        sliding: null
      }
    },
    methods: {
      onSlideStart(slide) {
        this.sliding = true
      },
      onSlideEnd(slide) {
        this.sliding = false
      }
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
