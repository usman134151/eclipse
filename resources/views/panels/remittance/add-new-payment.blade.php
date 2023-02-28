{{-- Add New Payment - Start --}}
<x-off-canvas show="addNewPayment">
	<x-slot name="title">Add New Payment</x-slot>
	<p>Add new payment for an individual provider, multiple providers and or for a team. When adding a new payment for the team you can split the amount equally in the team or pay the same to each team member.</p>
	  <div>
		<div class="mb-4">
		  <label class="form-label" for="">
			Select Providers Or Team <span class="mandatory">*</span>
		  </label>
		  <select class="form-select" aria-label="Select Providers Or Team">
			<option>Select Providers</option>
		  </select>
		</div>
		<div class="mb-4">
		  <label class="form-label" for="ReasonforPayment">
			Reason for Payment
		  </label>
			<input type="email" class="form-control" id="ReasonforPayment" placeholder="Reason for Payment">
		</div>
		<div class="mb-4">
		  <label class="form-label" for="Amount">
			Amount <span class="mandatory">*</span>
		  </label>
			<input type="email" class="form-control" id="Amount" placeholder="$00.00">
		</div>
		<div class="mb-4">
		  <div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="ChargetoCustomer">
			<label class="form-check-label" for="ChargetoCustomer">
			  Charge to Customer
			</label>
		  </div>
		</div>
		<div class="mb-4">
		  <label class="form-label" for="PaymentOptions">
			Payment Options
		  </label>
		  <div class="form-check">
			<input class="form-check-input" type="radio" name="PaymentOptions" id="SplitBetweenProviders">
			<label class="form-check-label" for="SplitBetweenProviders">
			  Split between providers
			</label>
		  </div>
		  <div class="form-check">
			<input class="form-check-input" type="radio" name="PaymentOptions" id="MultipleByProviders" checked>
			<label class="form-check-label" for="MultipleByProviders">
			  Multiple by providers
			</label>
		  </div>
		</div>
		<div class="mb-4">
		  <label class="form-label" for="TotalSelectedProviders">Total Selected Providers</label>
		  <div>Teams: 1</div>
		  <div>Providers: 10</div>
		  <div>Payable Amount: $00.00</div>
		</div>
		<div class="form-actions d-flex gap-3">
		  <button type="button" class="btn btn-outline-dark rounded">CANCEL</button>
		  <button type="submit" class="btn btn-primary rounded">ADD</button>
		</div>
	  </div>
</x-off-canvas>
{{-- Add New Payment - End --}}