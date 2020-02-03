<template>
    <div class="modal is-active">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <p class="title">Lorem ipsum dolor sit amet</p>
                <p class="subtitle">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Impedit, dolorum ducimus, recusandae magni quam eligendi
                    suscipit ullam laboriosam voluptatibus totam architecto
                    nostrum vel quo soluta blanditiis quaerat, explicabo enim
                    illum!
                </p>
            </div>
        </div>
        <button
            class="modal-close is-large"
            aria-label="close"
            @click="$emit('close')"
        ></button>
    </div>
</template>

<script>
export default {};
</script>

<style></style>
