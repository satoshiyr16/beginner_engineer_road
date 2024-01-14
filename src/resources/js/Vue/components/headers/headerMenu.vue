<template>
  <div class="l-nav_area">
    <div class="c-button_area">
      <button class="p-nav_button" @click="openNav" :class="{ 'close': menuClose }">
        <span class="p-nav_bar"></span>
        <span class="p-nav_bar"></span>
        <span class="p-nav_bar"></span>
      </button>
    </div>
    <nav class="p-nav_content" :class="{ 'panelactive': navActive }">
      <div class="c-button_area">
        <span class="c-button_close" @click="closeNav"></span>
      </div>
      <ul class="p-nav_list">
        <a href="/">
          <li>TOP</li>
        </a>
        <a href="/add_post">
          <li>POST</li>
        </a>
        <li>う</li>
        <li>え</li>
        <li>お</li>
      </ul>
    </nav>
  </div>
</template>

<script>
export default {
  data() {
    return {
      navActive: false,
      menuClose: false,
    };
  },
  methods: {
    openNav() {
      this.navActive = true;
      this.menuClose = true;
    },
    closeNav() {
      this.navActive = false;
      this.menuClose = false;
    }
  }
}
</script>

<style>
button {
  border-color: transparent;
  background: transparent;
  cursor: pointer;
}

li {
  list-style: none;
}

.close {
  opacity: 0;
  pointer-events: none;
}

.c-button_area {
  display: flex;
  justify-content: end;

  .p-nav_button {
    width: 40px;
    height: 32px;
    position: relative;
    margin-top: 30px;
    margin-right: 30px;
  }

  .p-nav_bar {
    display: block;
    width: 100%;
    height: 4px;
    position: absolute;
    left: 0;
    background: #000;

    &:nth-child(1) {
      top: 0;
    }

    &:nth-child(2) {
      top: 50%;
      transform: translateY(-50%);
    }

    &:nth-child(3) {
      top: 100%;
      transform: translateY(-100%);
    }
  }
}

.p-nav_content {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  z-index: -999;
  opacity: 0;
  background-color: rgba(173, 216, 230, 0.9);
  transition: opacity 0.5s ease;

  .c-button_area {
    height: 10%;
    margin: 30px 35px;
  }

  .p-nav_list {
    height: 60%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
}

.panelactive {
  z-index: 999;
  opacity: 1;
}

.c-button_close {
  display: block;
  position: relative;
  width: 30px;
  height: 30px;
}

.c-button_close::before,
.c-button_close::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  width: 8px;
  height: 40px;
  background: #333;
  cursor: pointer;
}

.c-button_close::before {
  transform: translate(-50%, -50%) rotate(45deg);
}

.c-button_close::after {
  transform: translate(-50%, -50%) rotate(-45deg);
}
</style>
