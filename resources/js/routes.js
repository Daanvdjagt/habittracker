import VueRouter from "vue-router";

let routes = [
    {
        path: "/",

        component: require("./views/About.vue").default
    },

    {
        path: "/habits",

        component: require("./views/Habits.vue").default
    },

    {
        path: "/team",

        component: require("./views/Team.vue").default
    }
];

export default new VueRouter({
    linkExactActiveClass: 'is-active',
    routes
});
