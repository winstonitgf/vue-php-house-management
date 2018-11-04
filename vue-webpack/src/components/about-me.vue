<template>
<div class="my-backgroundimage">
    <slot></slot>
    <div style="text-align:left;width:40vw;">
        <slot name="about"></slot>
    </div>
</div>
</template>

<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
@Component({})
export default class AboutMe extends Vue {
  msg: string = "Welcome to Your Main App";
}
</script>

<style scoped>
.my-backgroundimage {
  background-image: url("../assets/logo.png");
  background-repeat: no-repeat;
  background-position: right;
}
</style>
