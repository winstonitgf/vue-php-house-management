<template>
<div id="app">
  <md-progress-bar class="md-accent" md-mode="indeterminate" v-if="isProgress()"></md-progress-bar>
    <router-view />
</div>
</template>
<script lang="ts">
import Vue from "vue";
import Component from "vue-class-component";

import store from "./store";
@Component({})
export default class App extends Vue {
  isProgress() {
    return store.state.isProgress;
  }
}
</script>
<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
#app > .md-progress-bar {
  height: 2px;
}
</style>
