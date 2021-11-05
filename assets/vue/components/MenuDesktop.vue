<template>
	<v-navigation-drawer app :permanent="!$vuetify.breakpoint.smAndDown">
		<v-list>
			<v-list-item>
				<v-list-item-title>FacilEpargne</v-list-item-title>
			</v-list-item>
		</v-list>
		<v-divider></v-divider>
		<v-list>
			<v-list-item>
				<v-list-item-icon>
					<v-icon>mdi-folder</v-icon>
				</v-list-item-icon>
				<v-list-item-title>Dashboard</v-list-item-title>
			</v-list-item>
			<v-list-item>
				<v-list-item-icon>
					<v-icon>mdi-cash-multiple</v-icon>
				</v-list-item-icon>
				<v-list-item-title>Comptes</v-list-item-title>
			</v-list-item>
			<v-list-item>
				<v-list-item-icon>
					<v-icon>mdi-cards-outline</v-icon>
				</v-list-item-icon>
				<v-list-item-title>Magic</v-list-item-title>
			</v-list-item>
		</v-list>
	</v-navigation-drawer>
</template>
<script>
export default {
	name: "menu-desktop",
};
</script>

<style scoped></style>
