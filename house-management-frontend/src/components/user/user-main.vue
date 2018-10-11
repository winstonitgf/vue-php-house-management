<template>
<div>
<div class="row">
    <md-field class="filterTextWidth">
        <label>Name</label>
        <md-input v-model="filters.name"></md-input>
    </md-field>

    <md-field class="filterTextWidth">
        <label>User ID</label>
        <md-input v-model="filters.user_id" maxlength="10"></md-input>
    </md-field>
</div>


    <md-card md-with-hover v-for="(item, index) in users" v-bind:index="index" v-bind:key="item.id">
        <md-ripple>
            <md-card-header>
                <div class="md-title">{{item.name}}</div>
            </md-card-header>

            <md-card-content>
                {{item.user_id}}
            </md-card-content>

            <md-card-actions>
                <md-button >Entry</md-button>
            </md-card-actions>
        </md-ripple>
    </md-card>

    <md-speed-dial class="md-bottom-right">
        <md-speed-dial-target style="background-color:red">
            <md-icon>menu</md-icon>
        </md-speed-dial-target>

        <md-speed-dial-content>

            <md-button class="md-icon-button">
                <md-icon>add</md-icon>
            </md-button>

            <md-button class="md-icon-button" @click="GoRoute('/Category')">
                <md-icon>home</md-icon>
            </md-button>

            <md-button class="md-icon-button" @click="GoRoute('/HouseMain')">
                <md-icon>domain</md-icon>
            </md-button>

            <md-button class="md-icon-button" @click="GoRoute('/ContractMain')">
                <md-icon>content_paste</md-icon>
            </md-button>

        </md-speed-dial-content>
    </md-speed-dial>
</div>
</template>

<script>
import axios from "axios";
export default {
  name: "UserMain",
  data() {
    return {
      msg: "Welcome to Your UserMain!",
      filters: {
        name: null,
        user_id: null
      },
      users: null
    };
  },
  methods: {
    GoRoute(route) {
      this.$router.push(route);
    },
    FetchUsers(filters) {
      axios
        .get(process.env.API_ROOT + "api/users", {
          headers: {
            "Access-Control-Allow-Origin": process.env.API_ROOT,
            "Access-Control-Allow-Methods": "GET, PUT, POST, DELETE, OPTIONS",
            "Access-Control-Max-Age": "86400"
          }
        })
        .then(response => (this.users = response.data));
    }
  },
  mounted: function() {
    this.FetchUsers();
  }
};
</script>

<style scoped>
.filterTextWidth {
  width: 20%;
  display: inline-block;
}
.md-card {
  width: 320px;
  margin: 4px;
  display: inline-block;
  vertical-align: top;
}
</style>
