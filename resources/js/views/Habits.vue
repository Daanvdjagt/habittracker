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
                {{ currentHabitValue(habit) }}
            </p>
        </tile>
        <modal v-if="isModalActive" @close="isModalActive = false">
            <p slot="modal-title">
                {{ this.selectedHabit.name }}
            </p>
            <p slot="modal-subtitle">
                {{ currentHabitValue(this.selectedHabit) }}
            </p>

            <p slot="modal-question">
                How many {{ this.selectedHabit.valueType }} would you like to
                add?
            </p>
        </modal>
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
        },

        currentHabitValue(habit) {
            return (
                "You have " +
                habit.currentValue +
                " " +
                habit.valueType +
                " today."
            );
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
