<template>
  <div class="position-relative language">
    <button
      type="button"
      class="d-flex align-items-center"
      @click="toggleVisibility"
      @keydown.space.exact.prevent="toggleVisibility"
      @keydown.esc.exact="hideDropdown"
      @keydown.shift.tab="hideDropdown"
      @keydown.up.exact.prevent="startArrowKeys"
      @keydown.down.exact.prevent="startArrowKeys"
    >
      <img :src="`http://doublinlin.com/doublin/doublin/public/images/lang/flag_${locale}.png`" alt="flag" style="width: 24px; height: 24px;">
      <span class="ms-2 text-uppercase">{{ locale }}</span>
      <i class="bi bi-caret-down-fill ms-1" style="font-size: 0.7rem;"></i>
    </button>

    <transition name="dropdown-fade">
      <ul v-if="isVisible" ref="dropdown"
          class="position-absolute bg-white border rounded mt-2 py-1 list-unstyled"
          style="width: 150px; right: 0;">
        <li>
          <a
            :href="linkEn"
            ref="account"
            class="d-flex align-items-center px-3 py-2 hover-gray text-decoration-none text-dark"
            @keydown.up.exact.prevent=""
            @keydown.tab.exact="focusNext(false)"
            @keydown.down.exact.prevent="focusNext(true)"
            @keydown.esc.exact="hideDropdown"
          >
            <img src="http://doublinlin.com/doublin/doublin/public/images/lang/flag_en.png" alt="english flag" style="width: 20px; height: 20px;">
            <span class="ms-2">English</span>
          </a>
        </li>
        <li>
          <a
            :href="linkZh"
            class="d-flex align-items-center px-3 py-2 hover-gray text-decoration-none text-dark"
            @keydown.shift.tab="focusPrevious(false)"
            @keydown.up.exact.prevent="focusPrevious(true)"
            @keydown.down.exact.prevent=""
            @keydown.tab.exact="hideDropdown"
            @keydown.esc.exact="hideDropdown"
          >
            <img src="http://doublinlin.com/doublin/doublin/public/images/lang/flag_zh.png" alt="chinese flag" style="width: 20px; height: 20px;">
            <span class="ms-2">中文</span>
          </a>
        </li>
      </ul>
    </transition>
  </div>
</template>

<script>
export default {
  props: ['locale', 'link-en', 'link-zh'],
  data() {
    return {
      isVisible: false,
      focusedIndex: 0,
    }
  },
  methods: {
    toggleVisibility() {
      this.isVisible = !this.isVisible
    },
    hideDropdown() {
      this.isVisible = false
      this.focusedIndex = 0
    },
    startArrowKeys() {
      if (this.isVisible) {
        // this.$refs.account.focus()
        this.$refs.dropdown.children[0].children[0].focus()
      }
    },
    focusPrevious(isArrowKey) {
      this.focusedIndex = this.focusedIndex - 1
      if (isArrowKey) {
        this.focusItem()
      }
    },
    focusNext(isArrowKey) {
      this.focusedIndex = this.focusedIndex + 1
      if (isArrowKey) {
        this.focusItem()
      }
    },
    focusItem() {
      this.$refs.dropdown.children[this.focusedIndex].children[0].focus()
    },
    setLocale(locale) {
      this.$i18n.locale = locale
      this.$router.push({
        params: { lang: locale }
      })
      this.hideDropdown()
    }
  }
}
</script>

<style scoped>
    button {
      padding: 0;
      border: none;
      font: inherit;
      color: inherit;
      background-color: transparent;
      cursor: pointer;
    }
    .flex {
        display: flex;
        align-items: center;
    }
    img {
        width: 1rem;
        height: 1rem;
    }
    @media (max-width:768px){
      ul {
          list-style-type: none;
          padding-left: 0;
          position: absolute;
          z-index: 30;
          left: 0;
          width: 150px;
      }
    }
    ul {
        list-style-type: none;
        padding-left: 0;
        position: absolute;
        z-index: 30;

    }
    .hover-gray:hover {
        background-color: #f8f9fa;
        color: #000;
    }
    /* 確保下拉選單能正確浮動在上方 */
    .position-absolute {
        top: 100%;
        left: 0;
    }
    /* 修正 Vue 3 的 Transition 類別名稱 (Vue 3 使用 -enter-from) */
    .dropdown-fade-enter-from, .dropdown-fade-leave-to {
        opacity: 0;
        transform: translateY(-12px);
    }
    .language{
        color: var(--bs-nav-link-color);
        margin: 8px 0 0 10px;

    }
    .dropdown-fade-enter-active, .dropdown-fade-leave-active {
        transition: all .1s ease-in-out;
    }
    .dropdown-fade-enter, .dropdown-fade-leave-to {
        opacity: 0;
        transform: translateY(-12px);
    }
</style>
