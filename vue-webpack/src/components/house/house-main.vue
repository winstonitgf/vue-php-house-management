<template>
<div>
    {{msg}}
    <md-speed-dial class="md-bottom-right">
        <md-speed-dial-target style="background-color:red">
            <md-icon>menu</md-icon>
        </md-speed-dial-target>

        <md-speed-dial-content>
            <md-button class="md-icon-button" @click="GoRoute('/category')">
                <md-icon>home</md-icon>
            </md-button>

            <md-button class="md-icon-button" @click="GoRoute('/user')">
                <md-icon>person</md-icon>
            </md-button>

            <md-button class="md-icon-button" @click="GoRoute('/contract')">
                <md-icon>content_paste</md-icon>
            </md-button>

        </md-speed-dial-content>
    </md-speed-dial>

</div>
</template>

<script lang="ts">
import axios from "axios";
import { Component, Prop, Vue } from "vue-property-decorator";

@Component({})
export default class HouseMain extends Vue {
  // Initial data can be declared as instance properties
  msg: string = "Welcome to Your House";
  mounted() {}
  GoRoute(route) {
    this.$router.push(route);
  }
}
</script>

<style scoped>
</style>
