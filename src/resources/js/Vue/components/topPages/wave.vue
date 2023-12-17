<template>
  <div class="wave">
    <canvas ref="waveCanvas"></canvas>
  </div>
</template>

<script>
export default {
  data() {
    return {
      windowWidth: document.documentElement.clientWidth
    };
  },
  mounted() {
    window.addEventListener('resize', this.handleResize);
    this.initWaveAnimation();
  },
  beforeDestroy() {
    window.removeEventListener('resize', this.handleResize);
  },
  methods: {
    handleResize() {
      this.windowWidth = document.documentElement.clientWidth;
      this.initWaveAnimation();
    },
    initWaveAnimation() {
      const canvas = this.$refs.waveCanvas;
      canvas.width = this.windowWidth;
      canvas.height = 200;
      const context = canvas.getContext('2d');

      const colorList = ['#0ff', '#ff0', '#f00', '#00f', '#f0f'];
      let seconds = 0;
      let t = 0;

      const update = () => {
        context.clearRect(0, 0, canvas.width, canvas.height);
        this.drawWave(canvas, colorList, seconds, t);
        seconds += 0.014;
        t = seconds * Math.PI;
        requestAnimationFrame(update);
      };

      update();
    },
    drawWave(canvas, colorList, seconds, t) {
      colorList.forEach((color, index) => {
        const alpha = [0.8, 0.5, 0.3, 0.2, 0.5][index];
        const zoom = [3, 4, 1.6, 3, 1.6][index];
        const delay = [0, 0, 0, 100, 250][index];
        this.drawSingleWave(canvas, color, alpha, zoom, delay, t);
      });
    },
    drawSingleWave(canvas, color, alpha, zoom, delay, t) {
      const context = canvas.getContext('2d');
      context.strokeStyle = color;
      context.lineWidth = 1;
      context.globalAlpha = alpha;
      context.beginPath();
      this.drawSine(canvas, t / 0.5, zoom, delay);
      context.stroke();
    },
    drawSine(canvas, t, zoom, delay) {
      const unit = 100;
      const xAxis = Math.floor(canvas.height / 2);
      let x, y;
      const context = canvas.getContext('2d');
      for (let i = 0; i <= canvas.width + 10; i += 10) {
        x = t + (-xAxis + i) / unit / zoom;
        y = Math.sin(x - delay) / 3;
        context.lineTo(i, unit * y + xAxis);
      }
    }
  }
}
</script>

<style scoped>
.wave {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  z-index: -999;
}
</style>
