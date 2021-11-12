import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home";
import Test from "../views/Test";
import Months from "../views/Month";
import MonthDetail from "../views/MonthDetail";
import Carrousel from "../views/Carrousel";

Vue.use(VueRouter);

export default new VueRouter({
  mode: "history",
  routes: [
    { path: "/spa/home", component: Home },
    { path: "/spa/test", component: Test },
    { path: "/spa/months", component: Months },
    { path: "/spa/month/:id", component: MonthDetail },
    { path: "/spa/carrousel", component: Carrousel },
    { path: "/spa/*", redirect: "/spa/home" },
    { path: "/*", redirect: "/spa/home" }
  ]
});
