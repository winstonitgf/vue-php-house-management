<template>
<div>
    <h1>{{ msg }}</h1>
    <md-card md-with-hover v-for="(item, index) in categories" v-bind:index="index" v-bind:key="item.id">
        <md-ripple>
            <md-card-header>
                <div class="md-title">{{item.flex1}}</div>
            </md-card-header>

            <md-card-content>
                {{item.flex2}}
            </md-card-content>

            <md-card-actions>
                <md-button @click="goRoute(item.flex3)">Entry</md-button>
            </md-card-actions>
        </md-ripple>
    </md-card>
</div>
</template>

<script>
import axios from "axios";
export default {
  name: "Category",
  data() {
    return {
      msg: "Choose a business you want start with.",
      categories: null
    };
  },
  methods: {
    goRoute(route) {
      this.$router.push(route);
    }
  },
  mounted() {
    axios
      .get(process.env.API_ROOT + "api/configs", {
        headers: {
          "Access-Control-Allow-Origin": process.env.API_ROOT,
          "Access-Control-Allow-Methods": "GET, PUT, POST, DELETE, OPTIONS",
          "Access-Control-Max-Age": "86400"
        }
      })
      .then(response => (this.categories = response.data));
  }
};
</script>

<style scoped>
.md-card {
  width: 320px;
  margin: 4px;
  display: inline-block;
  vertical-align: top;
}
</style>
