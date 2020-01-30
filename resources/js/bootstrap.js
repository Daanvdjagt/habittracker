import Vue from "vue";
import Axios from "axios";
import VueRouter from "vue-router";
import vSwitchCase from "v-switch-case";

window.Vue = Vue;

Vue.use(VueRouter);
Vue.use(vSwitchCase);

window.axios = Axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
