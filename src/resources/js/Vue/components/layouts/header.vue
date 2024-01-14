<template>
  <div class="l-header_container">
    <wave-component></wave-component>
    <div class="l-logo_area">
      <img class="p-logo" src="/images/zakoubu_logo.jpg">
    </div>
     <div class="l-title_area">
        <p class="p-title">雑魚の産声</p>
        <p class="p-sub_title">駆け出しエンジニアの成り上がり記録</p>
     </div>
     <div class="l-menu_area">
      <header-menu-component></header-menu-component>
     </div>
    </div>
</template>

<script>
  import waveComponent from '../headers/wave.vue';
  import headerMenuComponent from '../headers/headerMenu.vue';


  export default {
  components: {
    waveComponent,
    headerMenuComponent
  }
}
</script>

<style>
.l-header_container {
  width: 100%;
  max-height: 20vh;
  display: flex;
  justify-content: space-between;

.l-logo_area {
  .p-logo {
    margin: 20px 0 0 20px;
    width: 50px;
    height: 50px;
  }
}
  .l-title_area {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

    .p-title {
      font-size: 2rem;
    }
    .p-sub_title {
      font-size: 1rem;
    }
  }
}
</style>
