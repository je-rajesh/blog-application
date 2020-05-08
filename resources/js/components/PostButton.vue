<template>
  <div>
    <div class="row justify-content-end">
      <button class="btn btn-primary btn-md">Post</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "PostButton",
  mounted() {
    console.log("Component is passed and mounted.");
  }
};
</script>
