<template>
  <div>

    <h1>{{ msg }}</h1>

  </div>
</template>

<script>
export default {
  name: "UserMain",
  data() {
    return {
      msg: "Welcome to Your UserMain!"
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
