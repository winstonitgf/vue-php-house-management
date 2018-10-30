<template>
<div>
    {{ msg }}
   <MenuButton></MenuButton>

</div>
</template>

<script lang="ts">
import axios from "axios";
import MenuButton from "../share/menu-button.vue";
import { Component, Model, Vue } from "vue-property-decorator";

@Component({
  components: { MenuButton }
})
export default class ContractMain extends Vue {
  // Initial data can be declared as instance properties
  msg: string = "Welcome to Your Contract";
  mounted() {}
}
</script>

<style scoped>
</style>
