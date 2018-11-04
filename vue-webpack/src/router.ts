import Vue from "vue";
import Router from "vue-router";
import Welcome from "./components/Welcome.vue";

Vue.use(Router);

export default new Router({
  routes: [
    {
      path: "/",
      name: "welcome",
      component: Welcome
    },
    {
      path: "/category",
      name: "category",
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () =>
        import(/* webpackChunkName: "about" */ "@/components/Category.vue")
    },
    {
      path: "/main",
      name: "main",
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () =>
        import(/* webpackChunkName: "about" */ "@/components/main.vue")
    },
    {
      path: "/user",
      name: "user",
      component: () => import("@/components/user/user-main.vue")
    },
    {
      path: "/house",
      name: "house",
      component: () => import("@/components/house/house-main.vue")
    },
    {
      path: "/contract",
      name: "contract",
      component: () => import("@/components/contract/contract-main.vue")
    },
    {
      path: "/*",
      redirect: "/"
    }
  ]
});
