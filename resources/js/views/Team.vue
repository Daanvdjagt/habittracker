<template>
    <div class="team-wrapper">
        <profile v-for="person in people" :key="person.id">
            <p slot="name">{{ person.name }} {{ person.surname }}</p>
            <img :src="person.image_url" slot="image" />
            <p slot="function">{{ person.function }}</p>
            <p slot="twitter">{{ person.socials.twitter }}</p>
            <p slot="instagram">{{ person.socials.instagram }}</p>
            <p slot="email">{{ person.email }}</p>
            <p slot="phone">{{ person.phone }}</p>
        </profile>
    </div>
</template>

<script>
import Profile from "../components/Profile.vue";

export default {
    data: function() {
        return {
            people: []
        };
    },
    mounted() {
        window.axios
            .get("/team")
            .then(response => (this.people = response.data));
    },
    components: {
        Profile
    }
};
</script>

<style scoped>
.card-wrapper {
    padding: 16px;
}
</style>
