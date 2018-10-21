<template>
  <div class="hello">
    <img src="../assets/logo.png">
    <h1>{{ msg }}</h1>
    <h2>Winston & Wade</h2>
    <md-button class="md-raised" :md-ripple="false" @click="goRoute('/Category')">Start</md-button>
  </div>
</template>

<script>
export default {
  name: "Welcome",
  data() {
    return {
      msg: "Welcome to Your Business!",
      rout: "/Category"
    };
  },
  methods: {
    goRoute(route) {
      this.$router.push(route);
    }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1,
h2 {
  font-weight: normal;
}
</style>
