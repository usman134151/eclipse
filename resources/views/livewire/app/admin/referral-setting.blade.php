<div>
	<section id="multiple-column-form">
		<div class="row">
		  <div class="col-12">
			<div class="card">
			  <div class="card-body">
	  
				  <div class="row">
					<div class="col-md-12 mb-md-2">
					  <h1 class="mt-2 ">Referral Settings </h1>   
					  </div>
					   <div class="row">
						<div class="col-lg-12">
						  <p>Here you can set up referral incentives for your current customers and providers to refer new customers. In the right-hand column, enter the amount or percentage discount you will offer new customers when they redeem a referral code. In the left-column, enter the bonus awarded to the referring customer or provider. Referral codes can be found in customers' and providers' profiles. 
							If you do not wish to execute a referral program, leave all fields at "0."</p>
						</div>
					   </div> </div>                        
				   
				   <form action="">
					<div class="row">
					  <div class="col-lg-3">
						<div class="form-group">
						  <label for="provider-referrer">Provider Referrer Bonus</label>
						  <span class="mandatory" aria-hidden="true">*</span>
						  <input type="text" id="provider-referrer" class="form-control" placeholder="Enter provider referrer bonus">
						</div>
					  </div>
					  <div class="col-lg-9">
						<div class="row">
						  <div class="col-lg-7">
							<div class="form-group">
							<label for="customer-referee-discount">Customer Referee Discount</label>
							<span class="mandatory" aria-hidden="true">*</span>
							<input type="text" id="customer-referee-discount" class="form-control" placeholder="Enter customer referee discount"> </div>
							</div>
							<div class="col-lg-5">
							  <div class="form-group">
							  <label for="provider-discount-type">Provider Discount Type</label>
							  <select class="select2 form-select" id="provider-discount-type">
								<option>%</option>
								<option>$</option>
							  </select></div>
							  </div>
						  </div>
						</div>
					  </div>
					  <div class="row">
						<div class="col-lg-3">
						  <div class="form-group">
							<label for="customer-referrer">Customer Referrer Bonus</label>
							<span class="mandatory" aria-hidden="true">*</span>
							<input type="text" id="customer-referrer" class="form-control" placeholder="Enter customer referrer bonus">
						  </div>
						</div>
						<div class="col-lg-9">
						  <div class="row">
							<div class="col-lg-7">
							  <div class="form-group">
							  <label for="customer-referee">Customer Referee Discount</label>
							  <span class="mandatory" aria-hidden="true">*</span>
							  <input type="text" id="customer-referee" class="form-control" placeholder="Enter customer referee discount"></div>
							  </div>
							  <div class="col-lg-5">
								<div class="form-group">
								<label for="customer-discount">Customer Discount Type</label>
								<select class="select2 form-select" id="customer-discount">
									<option>%</option>
									<option>$</option>
								  </select></div>
								</div>
							</div>
						  </div>
						</div>
						<div class="col-12 justify-content-center form-actions d-flex">
						  <button type="submit" class="btn btn-primary rounded mx-2">Save</button>
						</div>
				   </form>
					</div>
					  </div>
				  </div>
			  
			  </div>
			</div>
		  </div>
		</div>
	  </section>
</div>

<script>
function updateVal(attrName,val){

    Livewire.emit('updateVal', attrName, val);

}
</script>