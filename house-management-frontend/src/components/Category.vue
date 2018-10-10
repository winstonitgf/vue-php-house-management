<template>
<div>
    <h1>{{ msg }}</h1>
    <md-card md-with-hover v-for="(item, index) in categories" v-bind:index="index" v-bind:key="item.id">
        <md-ripple>
            <md-card-header>
                <div class="md-title">{{item.FLEX1}}</div>
            </md-card-header>

            <md-card-content>
                {{item.FLEX2}}
            </md-card-content>

            <md-card-actions>
                <md-button @click="goRoute(item.FLEX3)">Entry</md-button>
            </md-card-actions>
        </md-ripple>
    </md-card>
</div>
</template>

<script>
export default {
  name: "Category",
  data() {
    return {
      msg: "Choose a business you want start with.",
      categories: [
        {
          ID: 1,
          FLEX1: "House",
          FLEX2: "Manage your house information",
          FLEX3: "/HouseMain"
        },
        {
          ID: 2,
          FLEX1: "User",
          FLEX2: "Manager your user profile",
          FLEX3: "/UserMain"
        },
        {
          ID: 3,
          FLEX1: "Contract",
          FLEX2: "Manager your contract detail",
          FLEX3: "/ContractMain"
        }
      ]
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
.md-card {
  width: 320px;
  margin: 4px;
  display: inline-block;
  vertical-align: top;
}
</style>
