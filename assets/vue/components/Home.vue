<template>
    <div>
        <p>This is an example of a new components in VueJs</p>
        <v-btn elevation="2" href="/login">Home Vuetify</v-btn>
        <v-divider></v-divider>
        <v-skeleton-loader
      class="mx-auto"
      max-width="300"
      type="card"
    ></v-skeleton-loader>
    </div>
</template>
<script>
    export default {
        name: "home"
    }
</script>
<style scoped>
</style>