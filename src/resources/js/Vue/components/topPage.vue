<template>
    <div class="l-topPage_area">
      <loading-component></loading-component>
      <div class="p-title_area">
        <div class="p-title_section">
          <h1 class="p-title">雑魚の産声</h1>
          <p class="p-sub_title">駆け出しエンジニアの成り上がり記録</p>
          <wave-component></wave-component>
        </div>
      </div>
      <div class="c-postContent_area">
        <!-- その他のコンテンツ -->
      </div>
    </div>
</template>

<script>
import LoadingComponent from './topPages/loading.vue';
import WaveComponent from './topPages/wave.vue';

export default {
  components: {
    LoadingComponent,
    WaveComponent
  },
}
</script>

<style>
  .l-topPage_area {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    
    .p-title_area{
      display: flex;
      justify-content: center;
      align-items: center;
      height: 85%;
      width: 100%;

      .p-title_section{
        position: relative;
        display: flex;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        width: 100%;

        .p-sub_title{
          margin: 20px;
        }
      }
    }
  }
</style>
