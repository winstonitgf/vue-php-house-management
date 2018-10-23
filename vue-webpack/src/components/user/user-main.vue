<template>
<div>
    <div class="row">
        <md-field class="filterTextWidth">
            <label>Name</label>
            <md-input v-model="critiria.name"></md-input>
        </md-field>

        <md-field class="filterTextWidth">
            <label>User ID</label>
            <md-input v-model="critiria.user_id" maxlength="10"></md-input>
        </md-field>
    </div>

    <md-card md-with-hover v-for="(item, index) in users" v-bind:index="index" v-bind:key="item.id">
        <div v-if="item.isProgress">
            <md-progress-spinner md-mode="indeterminate"></md-progress-spinner>
        </div>
        <div v-if="!item.isProgress">
            <md-ripple>
                <md-card-header>
                    <div class="md-title">{{item.name}}</div>
                </md-card-header>

                <md-card-content>
                    {{item.user_id}}
                </md-card-content>

                <md-card-actions>
                    <md-button class="md-primary md-icon-button" @click="Update(item)">
                        <md-icon>edit</md-icon>
                    </md-button>
                    <md-button class="md-accent md-icon-button">
                        <md-icon>cancel</md-icon>
                    </md-button>
                </md-card-actions>
            </md-ripple>
        </div>

    </md-card>

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
// import axios from "axios";
import USER_VW from "../../models/user-vw";
import { Component, Prop, Vue } from "vue-property-decorator";
import { UserServer } from "../../providers/http-server-user";

@Component({})
export default class UserMain extends Vue {
  users: USER_VW = new USER_VW();
  critiria: USER_VW = new USER_VW();

  Update(viewmodel: USER_VW) {
    // viewmodel.isProgress = true;
    // axios
    //   .put(process.env.API_ROOT + `api/users/${viewmodel.id}`, viewmodel)
    //   .then(response => (viewmodel.isProgress = false));
  }
  mounted() {
    this.FetchUsers(this.critiria);
  }
  GoRoute(route) {
    this.$router.push(route);
  }
  FetchUsers(filters: USER_VW) {
    UserServer.fetch(filters).then(
      (response: USER_VW) => (this.users = response)
    );
    // axios
    //   .get(process.env.API_ROOT + "api/users", {
    //     headers: {
    //       "Access-Control-Allow-Origin": process.env.API_ROOT,
    //       "Access-Control-Allow-Methods": "GET, PUT, POST, DELETE, OPTIONS",
    //       "Access-Control-Max-Age": "86400"
    //     }
    //   })
    //   .then(response => (this.users = response.data));
  }
}
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
