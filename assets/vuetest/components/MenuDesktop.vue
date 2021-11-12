<template>
	<v-navigation-drawer app :permanent="!$vuetify.breakpoint.smAndDown">
		<v-list>
			<v-list-item link href="/home">
				<v-list-item-icon>
					<v-icon>$feicon</v-icon>
				</v-list-item-icon>
				<v-list-item-title>FacilEpargne</v-list-item-title>
			</v-list-item>
		</v-list>
		<v-divider></v-divider>
		<v-list>
			<v-list-item link href="/dashboard">
				<v-list-item-icon>
					<v-icon>mdi-monitor-dashboard</v-icon>
				</v-list-item-icon>
				<v-list-item-title>Dashboard</v-list-item-title>
			</v-list-item>
			<v-list-item link href="/account">
				<v-list-item-icon>
					<v-icon>mdi-cash-multiple</v-icon>
				</v-list-item-icon>
				<v-list-item-title>Comptes</v-list-item-title>
			</v-list-item>
			<v-list-item link href="/magic">
				<v-list-item-icon>
					<v-icon>mdi-cards-outline</v-icon>
				</v-list-item-icon>
				<v-list-item-title>Magic</v-list-item-title>
			</v-list-item>
		</v-list>
		<template v-slot:append>
		<v-divider></v-divider>
		<v-list>
			<v-list-item link href="/logout">
				<v-list-item-icon>
					<v-icon>mdi-logout</v-icon>
				</v-list-item-icon>
				<v-list-item-title>Se déconnecter</v-list-item-title>
			</v-list-item>
		</v-list>
		</template>
	</v-navigation-drawer>
</template>
<script>
export default {
	name: "menu-desktop",
};
</script>

<style scoped></style>
