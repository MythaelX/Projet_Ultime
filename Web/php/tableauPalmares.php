<div class="palmares">
	<h1>Meilleurs scores</h1>
	<!-- Bouton des 4 différentes difficultés pour afficher les 15 premiers scores de la base de donnée par rapport a la difficultés choisi -->
	<input type="submit" value="Vegan" id="boutonVegan"/>
	<input type="submit" value="Vegetarien" id="boutonVegetarien"/>
	<input type="submit" value="Omnivore" id="boutonOmnivore"/>
	<input type="submit" value="Carnivore" id="boutonCarnivore"/>

	<!-- Tableau des 15 meilleurs scores -->
	<table >
		<thead>
			<tr>
				<th scope="col">Poids</th>
				<th scope="col">Pseudos</th>
				<th scope="col">Scores / Temps</th>
				<th scope="col">Dates</th>
			</tr>
		</thead>
		<tbody id="tableauPalmares">
		</tbody>
	</table>

</div>
