<template>
    <div class="modal is-active">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <div class="modal-header">
                    <p class="title"><slot name="modal-title"></slot></p>
                    <p class="subtitle is-4">
                        <slot name="modal-subtitle"></slot>
                    </p>
                </div>
                <div class="modal-form">
                    <p class="subtitle is-6">
                        <slot name="modal-question"></slot>
                    </p>
                    <form>
                        <input
                            class="input is-primary"
                            type="number"
                            ref="valueField"
                        />
                        <div id="modal-span">
                            <span
                                ><a @click="emitGlobalClose()"
                                    >Add progress</a
                                ></span
                            >
                        </div>
                    </form>
                </div>
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
import { EventBus } from "../event-bus.js";

export default {
    methods: {
        emitGlobalClose() {
            EventBus.$emit("closeModal", this.$refs.valueField.value);
        }
    }
};
</script>

<style></style>
