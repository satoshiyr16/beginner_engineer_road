<html>
  @extends('layouts.app')
  @section('additionHeader')
    <link rel="stylesheet" href="{{ asset('css/topPage.css') }}">
    <script src="{{ asset('js/topPage.js') }}"></script>
  @endsection
  <div id="l-loading">
    <div id="c-loading_text">0%</div>
    <div id="c-loading_bar"></div>
    <div id="c-loading_bar_overlap"></div>
</div>
  @section('content')
      <div class="l-topPage_area">
        <div class="p-title_area">
          <div class="p-title_section">
            <h1 class="p-title">雑魚の産声</h1>
            <p class="p-sub_title">未経験エンジニアの成り上がり記録</p>
            <div class="wave">
              <canvas id="waveCanvas"></canvas>
            </div>
          </div>
        </div>
        <div class="c-postContent_area">

        </div>
      </div>

  @endsection
</html>
