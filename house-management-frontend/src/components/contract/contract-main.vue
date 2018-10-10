<template>
  <div>

    <h1>{{ msg }}</h1>

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
