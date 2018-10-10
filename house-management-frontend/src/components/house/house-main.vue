<template>
  <div>

    <h1>{{ msg }}</h1>

  </div>
</template>

<script>
export default {
  name: "HouseMain",
  data() {
    return {
      msg: "Welcome to Your HouseMain!"
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
