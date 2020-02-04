import Vue from "vue";
import Axios from "axios";
import VueRouter from "vue-router";

window.Vue = Vue;

Vue.use(VueRouter);

window.axios = Axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
