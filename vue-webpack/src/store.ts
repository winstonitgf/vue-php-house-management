import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    count: 0,
    isProgress: false
  },
  mutations: {
    increment(state) {
      state.count++;
    },
    changeProgressState(state) {
      state.isProgress = !state.isProgress;
    }
  },
  actions: {}
});
