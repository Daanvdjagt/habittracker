import Axios from "axios";
import Vue from "vue";

Vue.component("habit-list", {
    template: `
    <div>
        <habit v-for="habit in habits">
            <p slot="title">{{habit.title}}</p>
            <p slot="subtitle">{{habit.subtitle}}</p>
            <p slot= "value">{{habit.currentValue}}</p>
        </habit>
    </div>
    `,
    data() {
        return {
            habits: []
        };
    },
    mounted() {
        Axios.get("/habits").then(response => (this.habits = response.data));
    }
});

new Vue({
    el: ".app",
    data: {}
});
