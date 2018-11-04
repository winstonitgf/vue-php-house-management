<template>
<div>
    <img src="../assets/logo.png">
    <h1>{{ msg }}</h1>
    <h2>Winston & Wade</h2>
    <md-button class="md-raised" :md-ripple="false" @click="goRoute('/main')">Start</md-button>
</div>
</template>

<script lang="ts">
import { Component, Prop, Vue } from "vue-property-decorator";

@Component({})
export default class Welcome extends Vue {
  // Initial data can be declared as instance properties
  msg: string = "Welcome to Your Vue.js App";
  goRoute(route) {
    this.$router.push(route);
  }
}
</script>

<style scoped>
h1 {
  font-weight: normal;
}
</style>
