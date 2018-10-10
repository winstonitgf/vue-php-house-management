<template>
  <div>

     <md-speed-dial class="md-bottom-right">
      <md-speed-dial-target style="background-color:red">
        <md-icon>menu</md-icon>
      </md-speed-dial-target>

      <md-speed-dial-content>
        <md-button class="md-icon-button" @click="goRoute('/Category')">
          <md-icon>home</md-icon>
        </md-button>

        <md-button class="md-icon-button" @click="goRoute('/HouseMain')">
          <md-icon>domain</md-icon>
        </md-button>

        <md-button class="md-icon-button" @click="goRoute('/UserMain')">
          <md-icon>person</md-icon>
        </md-button>

      </md-speed-dial-content>
    </md-speed-dial>

  </div>
</template>

<script>
export default {
  name: "ContractMain",
  data() {
    return {
      msg: "Welcome to Your ContractMain!"
    };
  },
  methods: {
    goRoute(route) {
      this.$router.push(route);
    }
  }
};
</script>

<style scoped>
</style>
