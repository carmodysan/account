<template>
	<v-app-bar app fixed v-if="$vuetify.breakpoint.xsOnly" hide-on-scroll>
		<v-btn icon href="/home">
			<v-icon>$feicon</v-icon>
		</v-btn>
		<v-toolbar-title>FacilEpargne</v-toolbar-title>
		<v-spacer></v-spacer>
		<v-menu>
			<template v-slot:activator="{ on, attrs }">
			<v-btn icon v-bind="attrs" v-on="on">
				<v-icon>mdi-dots-vertical</v-icon>
			</v-btn>
			</template>
			<v-list>
				<v-list-item v-for="(item, i) in items" :key="i" link :href="item.href">
					<v-list-item-icon><v-icon>{{ item.icon }}</v-icon></v-list-item-icon>
					<v-list-item-title>{{ item.title }}</v-list-item-title>
				</v-list-item>
			</v-list>
			<v-divider></v-divider>
			<v-list>
				<v-list-item link href="/logout">
					<v-list-item-icon>
						<v-icon>mdi-logout</v-icon>
					</v-list-item-icon>
					<v-list-item-title>Se déconnecter</v-list-item-title>
				</v-list-item>
			</v-list>
		</v-menu>
	</v-app-bar>
</template>
<script>
export default {
	name: "menu-mobile",

	data: () => ({
      items: [
        { title: 'Dashboard', icon: 'mdi-monitor-dashboard', href: '/dashboard' },
        { title: 'Account', icon: 'mdi-cash-multiple', href: '/account' },
        { title: 'Magic', icon: 'mdi-cards-outline', href: '/magic' },
      ],
    }),
};
</script>

<style scoped></style>
