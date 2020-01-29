window.axios = require("axios");
window.vue = require("vue");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
