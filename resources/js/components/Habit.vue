<template>
  <div class="card">
    <div class="card-content">
      <p class="title">
        <slot name="title"></slot>
      </p>
      <p>
        <slot name="subtitle"></slot>
      </p>
      <p class="subtitle">
        <slot name="value"></slot>
      </p>
    </div>
    <footer class="card-footer">
      <p class="card-footer-item">
        <span>
          Add new
          <a href="#">progress</a>
        </span>
      </p>
      <p class="card-footer-item">
        <span>
          Remove this
          <a href="#">Habit</a>
        </span>
      </p>
    </footer>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>