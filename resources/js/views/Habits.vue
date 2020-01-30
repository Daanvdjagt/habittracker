<template>
    <div class="wrapper">
        <tile v-for="habit in habits" :key="habit.id">
            <p slot="title">{{ habit.name }}</p>
            <p slot="subtitle">{{ habit.subtitle }}</p>
            <p slot="value">{{habit.currentValue}} {{habit.valueType}} today</p>
        </tile>
    </div>
</template>

<script>
import Tile from "../components/Tile";

export default {
    data: function() {
        return {
            habits: []
        };
    },
    mounted() {
        window.axios
            .get("/habits")
            .then(response => (this.habits = response.data));
    },
    components: {
        Tile
    }
};
</script>

<style></style>
