<template>
    <div class="wrapper">
        <tile
            v-for="habit in habits"
            :key="habit.id"
            @open="(isModalActive = true), updateSelectedHabit(habit)"
        >
            <p slot="title">{{ habit.name }}</p>
            <p slot="subtitle">{{ habit.subtitle }}</p>
            <p slot="value">
                {{ habit.currentValue }} {{ habit.valueType }} today
            </p>
        </tile>
        <modal v-if="isModalActive" @close="isModalActive = false"> </modal>
    </div>
</template>

<script>
import Tile from "../components/Tile";
import Modal from "../components/Modal";

export default {
    data: function() {
        return {
            habits: [],
            isModalActive: false,
            selectedHabit: {}
        };
    },
    methods: {
        updateSelectedHabit(habit) {
            this.selectedHabit = habit;
            console.log(this.selectedHabit);
        }
    },
    mounted() {
        window.axios
            .get("/habits")
            .then(response => (this.habits = response.data));
    },
    components: {
        Tile,
        Modal
    }
};
</script>

<style></style>
