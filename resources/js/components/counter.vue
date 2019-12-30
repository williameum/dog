<template>
  <div>
    <h2>The Count Is: {{count}}</h2>
    <hr>
    <p>
      <button class="button is-primary" @click="count += 1">Increment</button>
    </p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      count: 0
    };
  }
};
</script>