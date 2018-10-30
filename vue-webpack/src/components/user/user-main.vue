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
    <div >
        <md-card md-with-hover v-for="(item, index) in users" v-bind:index="index" v-bind:key="item.id">
            <div>
                <md-ripple>
                    <md-card-header>
                        <div class="md-title">{{item.name}}</div>
                    </md-card-header>

                    <md-card-content>
                        {{item.user_id}}
                    </md-card-content>

                    <md-card-actions v-if="!isProgress()">
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
    </div>

    <MenuButton></MenuButton>
</div>
</template>

<script lang="ts">
// import axios from "axios";
import USER_VW from "../../models/user-vw";
import store from "../../store";
import { Component, Prop, Vue } from "vue-property-decorator";
import MenuButton from "../share/menu-button.vue";
import { UserServer } from "../../providers/http-server-user";

@Component({
  components: {
    MenuButton
  }
})
export default class UserMain extends Vue {
  users: Array<USER_VW> = new Array<USER_VW>();
  critiria: USER_VW = new USER_VW();
  show: boolean = true;
  Update(viewmodel: USER_VW) {
    store.commit("changeProgressState");
    console.log(viewmodel);
    viewmodel.name = "test";
    UserServer.put(viewmodel.id, viewmodel).then((response: USER_VW) => {
      viewmodel = response;
      store.commit("changeProgressState");
    });
  }
  mounted() {
    this.FetchUsers(this.critiria);
  }
  isProgress() {
    return store.state.isProgress;
  }
  FetchUsers(filters: USER_VW) {
    store.commit("changeProgressState");
    UserServer.fetch(filters).then((response: Array<USER_VW>) => {
      store.commit("changeProgressState");
      this.users = response;
    });
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

.custom-appear-class {
  color: red;
}
</style>
