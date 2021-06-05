<template>
  <div>
    <div class="alert alert-success" v-if="success">{{ message }}</div>
    <div class="alert alert-danger" v-if="failure">{{ message }}</div>
    <div class="alert alert-info" v-if="loading">
      <div class="spinner-border text-light small" role="status" style="height: 1rem; width: 1rem;">
        <span class="visually-hidden"></span>
      </div>
      <span>{{ loadingMessage || 'Please wait' }}</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "Errors",
  props: ['success', 'failure', 'message', 'loading', 'loadingMessage']
}
</script>