<template>
	<v-app>
		<v-container fill-height fluid>
			<v-row align="center" justify="center" class="d-flex flex-column">
				<v-row class="d-flex justify-center">
					<div class="text-h1 mb-6 text-center">404</div>
				</v-row>
				<v-row class="d-flex justify-center mb-6 mx-3">
					<v-card elevation="5" outlined max-width="700">
						<div class="pa-2 text-center">
							<p class="font-weight-light font-italic">
								"La page n'a pas été trouvée, mais nous pouvons continuer à la chercher ;-)"
							</p>
						</div>
					</v-card>
				</v-row>
				<v-row class="d-flex justify-center">
					<v-btn depressed color="primary" href="/home">Revenir à la page d'accueil</v-btn>
				</v-row>
			</v-row>
        </v-container>
	</v-app>
</template>
<script>
export default {
	name: "404",
};
</script>
<style scoped></style>
