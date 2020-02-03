<template>
    <div class="card-wrapper">
        <div class="card">
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-96x96">
                            <slot name="image"></slot>
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-4"><slot name="name"></slot></p>
                        <p class="subtitle is-6">
                            <slot name="function"></slot>
                        </p>
                    </div>
                </div>

                <div class="content">
                    <div class="socials">
                        <div class="socials-left">
                            Twitter:
                            <a><slot name="twitter"></slot> </a> Instagram:
                            <a><slot name="instagram"></slot></a>
                        </div>
                        <div class="socials-right">
                            Email:<a><slot name="email"></slot> </a> Phone:<a
                                ><slot name="phone"></slot
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style scoped></style>
