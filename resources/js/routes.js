import VueRouter from "vue-router";

let routes = [
    {
        path: "/",

        component: require("./views/Home.vue").default
    },

    {
        path: "/habits",

        component: require("./views/Habits.vue").default
    }
];

export default new VueRouter({
    routes
});
