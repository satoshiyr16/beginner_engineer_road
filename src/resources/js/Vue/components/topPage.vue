<template>
  <loading-component></loading-component>
  <div id="l-page_content">
    <header-component></header-component>
  </div>
</template>

<script>
import headerComponent from './layouts/header.vue';
import loadingComponent from './topPages/loading.vue';

export default {
  components: {
    headerComponent,
    loadingComponent,
  },
  data() {
    return {
      isNavOpen: false,
    };
  },
  methods: {
    toggleNav() {
      this.isNavOpen = !this.isNavOpen;
    }
  }
}
</script>

<style>
.l-topPage_area {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;

  .p-title_area {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 85%;
    width: 100%;

    .p-title_section {
      position: relative;
      display: flex;
      justify-content: center;
      flex-direction: column;
      text-align: center;
      width: 100%;

      .p-sub_title {
        margin: 20px;
      }
    }
  }
}
</style>
