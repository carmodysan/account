<template>
	<v-app-bar app fixed v-if="$vuetify.breakpoint.xsOnly" hide-on-scroll>
		<v-app-bar-nav-icon></v-app-bar-nav-icon>

		<v-toolbar-title>Page title</v-toolbar-title>

		<v-spacer></v-spacer>

		<v-btn icon>
			<v-icon>mdi-heart</v-icon>
		</v-btn>

		<v-btn icon>
			<v-icon>mdi-magnify</v-icon>
		</v-btn>
	</v-app-bar>
</template>
<script>
export default {
	name: "menu-mobile",
};
</script>

<style scoped></style>
