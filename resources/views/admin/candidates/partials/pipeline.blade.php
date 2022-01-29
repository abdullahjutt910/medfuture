<div class="candidate-profile-table">
    <div class="testimonial-heading">
        <h3>Job Order Pipeline</h3>
    </div>
    <table id="dtpipeline" class="table  table-striped table-bordered table-sm" cellspacing="0"
        width="100%">
        <thead>
            <tr>
                <th class="th-sm">Title</th>
                <th class="th-sm">Clients</th>
                <th class="th-sm">Owner</th>
                <th class="th-sm">Added</th>
                <th class="th-sm submit-table-head">Submitted</th>
                <th class="th-sm">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="pipeline-data">
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2022/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr class="pipeline-data-d-none">
                <td><input type="text" value="Tiger Nixon"></td>
                <td><input type="text" value="System Architect"></td>
                <td><input type="text" value="Edinburgh"></td>
                <td><input type="number" value="61"></td>
                <td class="pipeline-date"><input class="form-control date" type="calander" name="Pipeline_Date" placeholder=""
                    id="Pipeline_Date" value="2022/04/25">
                    <img src="{{asset('img/dashboard/calendar-icon.png')}}" class="calendar"
                    alt="calendar-icon">
                </td>
                <td><input type="number" value="320800"></td>
            </tr>
        </tbody>
    </table>
    <div class="pipeline-btn pipeline-btn-d-none ">
        <div class="add-pipeline">
            <button class="btn add-pipeline-btn">Add This Candidate To Job Order Pipeline</button>
        </div>
        <div class="edit-brn">
            <button class="btn pipeline-edit-btn"><img src=" {{asset('img/dashboard/Edit.png')}}" class="img-fluid"
                alt="Edit-img"> Edit
            </button>
        </div>
        <div class="popup-pipeline">
        <i class="fas fa-times cross-icon"></i>
             <h3>Add this candidate to the pipeline for a job order.</h3>
             <div class="padd-20">
             <p class="popup-pipeline-heading-1">Add this candidate to the pipeline for a job order.</p>
            <p>Search for a job order below, and then click on the job title to add the candidate to the selected job order pipeline.</p>
            <div>
                <form action="" class="row pipeline-search-form">
                <div class="col-md-6">
                    <label for="search job title"> Search by Job Title:</label>
                    <div class="pipeline-search">
                    <input type="text" class="form-control">
                    <span class="pipeline-search-txt search-job-title-btn">Go</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="search job title"> Search by Client Name:</label>
                    <div class="pipeline-search">
                    <input type="text" class="form-control">
                    <span class="pipeline-search-txt search-client-btn">Go</span>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        <div class="popup-pipeline-form">
            <form action="" class="pipeline-form row">
                <div class="col-md-8 profile-eidt-form-inner form-group">
                        <select name="placement_term" id="placement_term" class="form-control">
                            <option value="Other " selected diable > Other </option>
                            <option value="Contacted">Contacted</option>
                            <option value="Initial Screening">Initial Screening</option>
                            <option value="Short Listed">Short Listed</option>
                            <option value="Shelved">Shelved</option>
                            <option value="Job Matching">Job Matching</option>
                            <option value="Submissions">Submissions</option>
                            <option value="Declined">Declined</option>
                            <option value="Interviews">Interviews</option>
                            <option value="Due Diligence Check">Due Diligence Check</option>
                            <option value="Rejected / Accepted">Rejected / Accepted</option>
                            <option value="Placed">Placed</option>
                            <option value="Archived">Archived</option>
                            <option value="Testimony">Testimony</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-8 profile-eidt-form-inner form-group">
                        <select name="placement_term" id="placement_term" class="form-control">
                            <option value="General" selected diable > General </option>
                            <option value="Contacted">Contacted</option>
                            <option value="Initial Screening">Initial Screening</option>
                            <option value="Short Listed">Short Listed</option>
                            <option value="Shelved">Shelved</option>
                            <option value="Job Matching">Job Matching</option>
                            <option value="Submissions">Submissions</option>
                            <option value="Declined">Declined</option>
                            <option value="Interviews">Interviews</option>
                            <option value="Due Diligence Check">Due Diligence Check</option>
                            <option value="Rejected / Accepted">Rejected / Accepted</option>
                            <option value="Placed">Placed</option>
                            <option value="Archived">Archived</option>
                            <option value="Testimony">Testimony</option>
                        </select>
                        <i class="fas fa-sort-down"></i>
                </div>
                <div class="col-md-8 profile-eidt-form-inner">
                <textarea name="activity-textarea" id="activity-textarea" cols="30" rows="5" placeholder="Your Notes"></textarea>
                </div>
                    <div class=" col-md-12 activity-form-back-btn">
                        <div class=" profile-eidt-form-btn">
                            <button class="btn back-btn pipeline-cancel-btn">Cancel</button>
                            <input type="submit" class="btn" placeholder="Submit">
                        </div>
                </div>
            </form>
        </div>
    </div>
    <div class="pipeline-back-btn">
        <div class="col-md-12 profile-eidt-form-btn">
        <button class="btn back-btn">Back</button>
        <input type="submit" class="btn" placeholder="Submit">
        </div>
    </div>
</div>
<div class="forms-colored-div">
        <div class="blue"></div>
        <div class="purple"></div>
        <div class="pink"></div>
    </div>

