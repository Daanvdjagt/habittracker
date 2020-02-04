<template>
    <div class="tile">
        <div class="tile  is-parent">
            <article class="tile is-child box">
                <p class="title"><slot name="title"></slot></p>
                <p class="subtitle is-6"><slot name="subtitle"></slot></p>
                <div class="content">
                    <p class="subtitle"><slot name="value"></slot></p>
                </div>
                <footer class="card-footer">
                    <p class="card-footer-item">
                        <span>
                            Add some more
                            <a v-on:click="emitsGlobalModalOpen">progress</a>
                        </span>
                    </p>
                    <p class="card-footer-item">
                        <span> Remove this <a>habit</a> </span>
                    </p>
                </footer>
            </article>
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        emitsGlobalModalOpen() {
            this.$emit("open");
        }
    }
};
</script>

<style scoped>
.tile {
    padding: 8px;
}
</style>
