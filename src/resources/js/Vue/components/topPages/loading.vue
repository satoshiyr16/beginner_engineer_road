<template>
  <div id="l-loading" v-show="isVisible">
    <div id="c-loading_text">{{ loadingPercentage }}%</div>
    <div id="c-loading_bar"></div>
    <div id="c-loading_bar_overlap" :style="{ width: loadingPercentage + '%' }"></div>
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
          setTimeout(this.fadeOutLoadingPage, 500);
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
  background-color: white;
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
  }

  #c-loading_bar_overlap {
    position: absolute;
    left: 0;
    height: 2px;
    background-color: blue;
    width: 0;
  }

  #c-loading_text {
    font-size: 20px;
    color: black;
    z-index: 10;
    margin-bottom: 40px;
  }

}
</style>
