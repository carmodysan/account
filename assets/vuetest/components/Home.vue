<template>
	<v-app>
		<v-container fill-height fluid>
			<v-row align="center" justify="center" class="d-flex flex-column">
				<v-row class="d-flex justify-center">
					<div class="text-h3 mb-6 text-center">Comptes mensuels</div>
				</v-row>
				<v-row class="d-flex justify-center mb-6 mx-3">
					<v-card elevation="5" outlined max-width="700">
						<div class="pa-2 text-center">
							<p class="font-weight-light font-italic">
								"Faire ses comptes est indépendant de faire un budget. Autrement dit, vous pouvez simplement commencer par tracer vos revenus et vos dépenses sans
								avoir de budget précis. Le plus important, dans tous les cas, c'est de commencer."
							</p>
						</div>
					</v-card>
				</v-row>
				<v-row class="d-flex justify-center">
					<v-btn depressed color="primary" href="/login">Se connecter</v-btn>
				</v-row>
			</v-row>
		</v-container>
	</v-app>
</template>
<script>
export default {
	name: "home",
};
</script>
<style scoped></style>
