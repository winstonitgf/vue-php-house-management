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
    <div>
        <transition-group name="list">
            <md-card md-with-hover v-for="(item, index) in users" v-bind:index="index" v-bind:key="item.id">
                <div>
                    <md-ripple>
                        <md-card-header>
                            <div class="md-title">{{item.name}}</div>
                        </md-card-header>

                        <md-card-content>
                            <div v-if="!item.editable">
                                <div>{{item.address}}</div>
                                <div>{{item.user_id}}</div>
                            </div>

                            <div v-else>
                                <md-field>
                                    <label>User ID</label>
                                    <md-input v-model="item.user_id" maxlength="10"></md-input>
                                </md-field>
                                <md-field>
                                    <label>Address</label>
                                    <md-input v-model="item.address"></md-input>
                                </md-field>
                            </div>
                        </md-card-content>

                        <md-card-actions v-show="!isProgress()">
                            <md-button class="md-primary md-icon-button" v-if="!item.editable" @click="EnableUpdate(item)">
                                <md-icon>edit</md-icon>
                            </md-button>
                            <md-button class="md-primary md-icon-button" v-if="item.editable" @click="Update(item)">
                                <md-icon>done</md-icon>
                            </md-button>
                            <md-button class="md-accent md-icon-button" v-if="item.editable" @click="EnableUpdate(item)">
                                <md-icon>cancel</md-icon>
                            </md-button>
                        </md-card-actions>
                    </md-ripple>
                </div>
            </md-card>
        </transition-group>
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
  EnableUpdate(viewmodel: USER_VW) {
    viewmodel.editable = !viewmodel.editable;
  }
  Update(viewmodel: USER_VW) {
    store.commit("changeProgressState");
    UserServer.put(viewmodel.id, viewmodel).then((response: USER_VW) => {
      viewmodel.editable = false;
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
      response.forEach(function(x) {
        x.editable = false;
      });
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

.list-enter-active,
.list-leave-active {
  transition: all 1s;
}

.list-enter,
.list-leave-to {
  opacity: 0;
  transform: translateY(50px);
}
</style>
