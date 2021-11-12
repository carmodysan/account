<template>
	<v-app>
		<MenuDesktop />
        <v-overlay :value="isLoading" :absolute="absolute" z-index="10">
			<v-progress-circular indeterminate size="64"></v-progress-circular>
		</v-overlay>
		<router-view />
	</v-app>
</template>

<style scoped></style>

<script>
import MenuDesktop from "./MenuDesktop";
import { mapGetters } from "vuex";

export default {
	name: "App",

	data: () => ({
		absolute: true,
	}),

	components: {
		MenuDesktop,
	},

	computed: {
		...mapGetters({
			isLoading: "getLoading",
		}),
	},
};
</script>
