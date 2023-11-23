<div>
  <div class="content-header row">
		<div class="content-header-left col-12 mb-4">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">
             Support Tickets
					</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Home">
									{{-- Updated by Shanila to Add svg icon--}}
									<svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
										<use xlink:href="/css/common-icons.svg#home"></use>
									</svg>
									{{-- End of update by Shanila --}}
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="#">
									Settings
								</a>
							</li>
							<li class="breadcrumb-item">
							  Support Tickets
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
    <section id="multiple-column-form">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-12 mb-md-2">
                      <div class="row">
                        <div class="col-md-12 mb-md-2">
                          <h1 class="mt-2 ">Support Tickets</h1>   
                          </div>
                           <div class="row">
                            <div class="col-lg-12">
                             <P>Here you can manage your support requests submitted to the Eclipse Scheduling Help Desk. </P>
                              </div>
                           </div> </div> 
                    </div>    
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                      <div class="d-inline-flex align-items-center gap-4">
                        <label for="show_records_number" class="form-label">Show</label>
                        <select class="form-select" id="show_records_number">
                          <option>10</option>
                          <option>15</option>
                          <option>20</option>
                          <option>25</option>
                        </select>
                      </div>
                      <div class="d-inline-flex align-items-center gap-4">
                        <label for="search" class="form-label fw-semibold">Search</label>
                        <input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
                      </div>
                    </div>
                    <div class="table-responsive">
                        <table id="remittances" class="table table-hover" aria-label="Jira Status">
                          <thead>
                              <tr role="row">                                      
                                  <th scope="col">Issue ID</th>
                                  <th scope="col">Feedback Type</th>   
                                  <th scope="col">Feedback</th>
                                  <th scope="col">User End</th>
                                  <th scope="col">Page Issue at</th>
                                  <th scope="col">Issue Key</th>
                                  <th scope="col">Status</th>   
                                  <th scope="col">Created by</th>
                            </tr>
                          </thead>
                            <tbody>
                              <tr role="row" class="odd">                                   
                                <td>1007</td>
                                <td>Complaint </td>
                                <td>slow loading speed</td>
                                <td>Admin portal</td>
                                <td>booking form</td>
                                <td>123</td>
                                <td>pending</td>
                                <td>user</td>
                                </tr>
                                <tr role="row" class="even">                                 
                                  <td>1002</td>
                                  <td>Complaint </td>
                                  <td>slow loading speed</td>
                                  <td>Admin portal</td>
                                  <td>booking form</td>
                                  <td>123</td>
                                  <td>pending</td>
                                  <td>user</td>
                                  </tr>
                                  <tr role="row" class="odd">      
                                    <td>1003</td>
                                    <td>Complaint </td>
                                    <td>slow loading speed</td>
                                    <td>Admin portal</td>
                                    <td>booking form</td>
                                    <td>123</td>
                                    <td>pending</td>
                                    <td>user</td>
                                    </tr>

                                    <tr role="row" class="even">                                 
                                      <td>1005</td>
                                      <td>Complaint </td>
                                      <td>slow loading speed</td>
                                      <td>Admin portal</td>
                                      <td>booking form</td>
                                      <td>123</td>
                                      <td>pending</td>
                                      <td>user</td>
                                      </tr>

                                      <tr role="row" class="odd">                                   
                                        <td>1006</td>
                                        <td>Complaint </td>
                                        <td>slow loading speed</td>
                                        <td>Admin portal</td>
                                        <td>booking form</td>
                                        <td>123</td>
                                        <td>pending</td>
                                        <td>user</td>
                                        </tr>

                                        <tr role="row" class="even">
                                          <td>1008</td>
                                          <td>Complaint </td>
                                          <td>slow loading speed</td>
                                          <td>Admin portal</td>
                                          <td>booking form</td>
                                          <td>123</td>
                                          <td>pending</td>
                                          <td>user</td>
                                          </tr>

                                          <tr role="row" class="odd">
                                            <td>1099</td>
                                            <td>Complaint </td>
                                            <td>slow loading speed</td>
                                            <td>Admin portal</td>
                                            <td>booking form</td>
                                            <td>123</td>
                                            <td>pending</td>
                                            <td>user</td>
                                            </tr>

                                            <tr role="row" class="even">  <td>100995-6</td>
                                              <td>Complaint </td>
                                              <td>slow loading speed</td>
                                              <td>Admin portal</td>
                                              <td>booking form</td>
                                              <td>123</td>
                                              <td>pending</td>
                                              <td>user</td>
                                              </tr>
                                </tbody>
                            </table>
                        </div>
                  <div class="d-flex justify-content-between mt-4">
                    <div>
                      <p class="fw-semibold">Showing 1 to 5 of 30 entries</p>
                    </div>
                    <nav aria-label="Page Navigation">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">Previous
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item active"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">Next
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
              </div>
            
            </div>
          </div>
        </div>
      </section>
</div>
