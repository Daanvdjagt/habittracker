import Axios from "axios";
import Vue from "vue";

new Vue({
    el: "#app",
    data: {
        message: "Hello world"
    },
    mounted() {
        Axios.get("/skills").then(response => console.log(response.data));
    }
});
