<template>
<div>
    <md-speed-dial class="md-bottom-right">
        <md-speed-dial-target style="background-color:red">
            <md-icon>menu</md-icon>
        </md-speed-dial-target>

        <md-speed-dial-content>

            <md-button class="md-icon-button">
                <md-icon>add</md-icon>
            </md-button>

            <md-button class="md-icon-button" @click="GoRoute('/category')">
                <md-icon>home</md-icon>
            </md-button>

            <md-button class="md-icon-button" @click="GoRoute('/user')">
                <md-icon>people</md-icon>
            </md-button>

            <md-button class="md-icon-button" @click="GoRoute('/house')">
                <md-icon>domain</md-icon>
            </md-button>

            <md-button class="md-icon-button" @click="GoRoute('/contract')">
                <md-icon>content_paste</md-icon>
            </md-button>

        </md-speed-dial-content>
    </md-speed-dial>
</div>
</template>

<script lang="ts">
import { Component, Vue } from "vue-property-decorator";

@Component({})
export default class MenuButton extends Vue {
  GoRoute(route) {
    this.$router.push(route);
  }
}
</script>

<style scoped>
</style>
