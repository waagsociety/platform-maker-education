<section class="form-section">
	<div class="form">
		<h1>Aanmelden voor een voucher</h1>
		<form method="post">
			<h3 class="left full-width">Gegevens van de school</h3>
			<div class="input_block left">
				<input type="text" name="naam" placeholder="Naam School" required>
			</div>
			<div class="input_block radio left">
				<div class="radio-block left">
					<input id="po" class="left" type="radio" name="type" value="PO" required> <label class="left" for="po">Primair onderwijs</label>
				</div>
				<div class="radio-block left">
					<input id="vo" class="left" type="radio" name="type" value="VO" required> <label class="left" for="vo">Voortgezet onderwijs</label>
				</div>
				<div class="radio-block left">
					<input id="anders" class="left" type="radio" name="type" value="anders" required> <label class="left" for="anders">Anders</label>
				</div>
				<div class="input_block input-anders left">
					<input type="text" name="namelijk" placeholder="Namelijk">
				</div>
			</div>
			<div class="input_block left">
				<input type="text" name="adres" placeholder="Adres">
			</div>
			<div class="input_block left">
				<input type="text" name="website" placeholder="website">
			</div>
			<div class="input_block left">
				<input type="text" name="brin" placeholder="BRIN nummer" required>
			</div>
			<div class="input_block left">
				<input type="text" name="contactpersoon" placeholder="Contactpersoon" required>
			</div>
			<div class="input_block left">
				<input type="email" name="email" placeholder="E-mailadres" required>
			</div>

			<h3 class="left full-width">Partner</h3>
			<div class="input_block left">
				<input type="text" id="partnername" name="partnername" placeholder="Naam partner" required>
			</div>
	    <div class="input_block left">
	      <h6 class="left full-width">Type</h6>
				<!-- <label class="full-width-label">Type: [PO], [VO], anders</label> -->
				<div class="radio-block left">
					<input id="makerspace" class="left" type="radio" name="typepartner" value="Makerspace"> <label class="left" for="makerspace">Makerspace</label>
				</div>
				<div class="radio-block left">
					<input id="maker" class="left" type="radio" name="typepartner" value="Maker"> <label class="left" for="maker">Maker</label>
				</div>
			</div>
			<div class="input_block left">
				<input type="text" id="partneradres" name="partneradres" placeholder="Adres partner">
			</div>
			<div class="input_block left">
				<input type="text" id="partnerwebsite" name="partnerwebsite" placeholder="Website partner">
			</div>
			<div class="input_block left">
				<input type="text" id="partnerkvk" name="partnerkvk" placeholder="KVK partner" required>
			</div>
			<div class="input_block left">
				<input type="text" id="partnercontact" name="partnercontact" placeholder="Contactpersoon partner">
			</div>
			<div class="input_block left">
				<input type="email" id="partneremail" name="partneremail" placeholder="E-mail partner" required>
			</div>

	    <h3 class="left full-width">Activiteit</h3>
	    <div class="input_block left">
	      <h6 class="left full-width">Gewenste activiteit</h6>
				<!-- <label class="full-width-label">Type: [PO], [VO], anders</label> -->
				<div class="radio-block left">
					<input id="workshop" class="left" type="radio" name="typeactiviteit" value="workshop" required> <label class="left" for="workshop">Workshop €500,-</label>
				</div>
				<div class="radio-block left">
					<input id="presentatie" class="left" type="radio" name="typeactiviteit" value="presentatie" required> <label class="left" for="presentatie">Presentatie €250,-</label>
				</div>
			</div>
			<div class="input_block left">
				<input type="text" id="activiteitbijdrage" name="activiteitbijdrage" placeholder="Eigen bijdrage">
			</div>
	    <div class="input_block left voor-wie">
	      <h6 class="left full-width">Voor wie?</h6>
				<!-- <label class="full-width-label">Type: [PO], [VO], anders</label> -->
				<div class="radio-block left" required>
					<input id="leerkrachten" class="left" type="radio" name="voorwie" value="leerkrachten" required> <label class="left" for="leerkrachten">Leerkrachten / Docenten</label>
				</div>
				<div class="radio-block left" required>
					<input id="leerlingen" class="left" type="radio" name="voorwie" value="leerlingen" required> <label class="left" for="leerlingen">Leerlingen</label>
				</div>
			</div>
			<div class="input_block left">
				<textarea id="activiteitbeschrijving" name="activiteitbeschrijving" placeholder="Wat gaan jullie doen? maximaal 200 woorden" rows=10 required></textarea>
			</div>

			<button class="btn-2" type="submit" name="submit" value="Submit">Verstuur</button>
		</form>
	</div>




</section>
