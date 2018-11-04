<template>
<div>
    <div class="page-container">
        <md-app md-waterfall md-mode="fixed">
            <md-app-toolbar class="md-primary">
                <span class="md-title">Winston Profile</span>
            </md-app-toolbar>
            <md-app-drawer md-permanent="full">
                <md-toolbar class="md-transparent" md-elevation="0">
                    Navigation
                </md-toolbar>
                <md-list>
                    <md-list-item @click="ChangeComponent('showAboutMe')">
                        <md-icon>move_to_inbox</md-icon>
                        <span class="md-list-item-text">About Me</span>
                    </md-list-item>
                    <md-list-item>
                        <md-icon>send</md-icon>
                        <span class="md-list-item-text">Expertise</span>
                    </md-list-item>
                    <md-list-item>
                        <md-icon>delete</md-icon>
                        <span class="md-list-item-text">Contact Me</span>
                    </md-list-item>

                    <md-list-item>
                        <md-icon>error</md-icon>
                        <span class="md-list-item-text">Spam</span>
                    </md-list-item>
                </md-list>
            </md-app-drawer>

            <md-app-content>
                <transition name="fade">
                    <AboutMe v-if="showAboutMe">
                        <h1 style="text-align:left">Winston Lu</h1>
                        <p slot="about">與傳統規格式的表單履歷不同，也有別於線上其他履歷模板，CakeResume 的履歷模板以「內容類型」區分，有「經歷列表時間軸」、「技能敘述欄」、各種不同長度的「自由文字區」、「圖片與影音」、「社群網站與聯絡方式」等不同的區塊，讓使用者依照自己喜歡的呈現方式，輸入各區塊內容，自由拼貼組合成一個網頁式的履歷。</p>
                    </AboutMe>
                </transition>
            </md-app-content>

        </md-app>

    </div>
</div>
</template>

<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import AboutMe from "./about-me.vue";
@Component({
  components: {
    AboutMe
  }
})
export default class Main extends Vue {
  msg: string = "Welcome to Your Main App";
  menuVisible: boolean = false;
  showAboutMe: boolean = false;
  ChangeComponent(show: string) {
    switch (show) {
      case "showAboutMe":
        this.showAboutMe = true;
    }
  }
}
</script>

<style scoped>
.md-app {
  /* max-height: 100vh; */
  border: 1px solid rgba(#000, 0.12);
  height: 100vh;
}

.md-drawer {
  width: 230px;
  max-width: calc(100vw - 125px);
}
.fade-enter-active,
.fade-leave-active {
  transition: opacity 1s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>
