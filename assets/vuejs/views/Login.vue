<template>
    <div>
        <v-img
            max-width="600"
            max-height="600"
            lazy-src="/images/under-construction.gif"
            src="/images/under-construction.gif" />
        <div class="row col">
          <h1>Homepage</h1>
        </div>

        <div class="row col">
          <p>This is the homepage of our Vue.js application.</p>
          <v-data-table
            :headers="headers"
            :items="desserts"
            :items-per-page="5"
            class="elevation-1"
          ></v-data-table>
        </div>
    </div>
</template>

<script>
export default {
  name: "Login",
  data: () => ({
  }),
};
</script>
