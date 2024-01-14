<template>
  <div id="l-loading" v-show="isVisible">
    <div id="c-loading_text">{{ loadingPercentage }}%</div>
    <!-- <div id="c-loading_bar"></div>
    <div id="c-loading_bar_overlap" :style="{ width: loadingPercentage + '%' }"></div> -->
    <video id="loading_video" autoplay loop muted>
      <source src="/videos/loading_fish.mp4" type="video/mp4">
    </video>
  </div>
</template>

<script>
export default {
  data() {
    return {
      loadingPercentage: 0,
      isVisible: true,
    };
  },
  mounted() {
    this.startLoading();
  },
  methods: {
    startLoading() {
      const interval = setInterval(() => {
        if (this.loadingPercentage >= 100) {
          clearInterval(interval);
          setTimeout(this.fadeOutLoadingPage, 1000);
        } else {
          this.loadingPercentage++;
        }
      }, 10);
    },
    fadeOutLoadingPage() {
      let opacity = 1;
      const fadeInterval = setInterval(() => {
        if (opacity <= 0) {
          clearInterval(fadeInterval);
          this.isVisible = false;
        } else {
          opacity -= 0.01;
          this.$el.style.opacity = opacity;
          // this.$refs.loadingVideo.style.opacity = opacity;
        }
      }, 10);
    },
  },
};
</script>

<style scoped>
#l-loading {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #CAEDFF;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;

  #c-loading_bar {
    position: absolute;
    left: 0;
    height: 2px;
    background-color: #f1f1f1;
    width: 100%;
    z-index: -99;
  }

  #c-loading_bar_overlap {
    position: absolute;
    left: 0;
    height: 2px;
    background-color: black;
    width: 0;
    z-index: -98;
  }

  #c-loading_text {
    font-size: 30px;
    font-family: 'Pacifico', cursive;
    color: black;
    z-index: 10;
    margin-bottom: 40px;
  }

  #loading_video {
    position: absolute;
    top: 46%; /* 画面の垂直中央 */
    left: 49%; /* 画面の水平中央 */
    transform: translate(-50%, -50%);
    z-index: -100;
    width: 250px;
    height: 250px;
  }

}
</style>
