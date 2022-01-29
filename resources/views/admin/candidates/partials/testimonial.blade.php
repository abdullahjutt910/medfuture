
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-heading">
                    <h3>Testimonial</h3>
                    <div class="candidate-date">
                        <div class="form-group">
                            <select class="form-control" name="title" id="title" required="">
                                <option value="" selected="">2020-2021</option>
                                <option value="2019-2020">2019-2020</option>
                                <option value="2018-2019">2018-2019</option>
                                <option value="2017-2018">2017-2018</option>
                                <option value="2016-2017">2016-2017</option>
                                <option value="2015-2016">2015-2016</option>
                            </select>
                            <i class="fas fa-sort-down"></i>
                        </div>
                        <span class="date-background"></span>
                    </div>
                </div>
                <div class="testimonial-txt-edit">
                    <div class="testimonial-txt">
                        <p>{{ $candidate->testimonial[0]->testimonial_summary ?? '' }}</p>
                        <p><b>{{ $candidate->testimonial[0]->testimonial_name ?? '' }}</b></p> 
                        <p>{{ $candidate->testimonial[0]->testimonial_date ?? ''}}</p>
                    </div>
                    <div class="edit-brn">
                        <button class="btn testimonial-edit-btn"><img src=" {{asset('img/dashboard/Edit.png')}}"
                                class="img-fluid" alt="Edit-img"> Edit</button>
                        <button class="btn testimonial-remove-btn"><img
                                src=" {{asset('img/dashboard/Delete-Chat.png')}}" class="img-fluid" alt="Edit-img">
                            Remove</button>
                    </div>
                    <div class="row testimonial-upload">
                        <div class="col-md-5">
                            <div class="row profile-details profile-details-upload">
                                <div class="col-md-8">
                                    <div class="card mb-3">
                                        <div class="row g-0">
                                            <div class="col-md-1 card-img">
                                                <img src="http://127.0.0.1:8000/img/dashboard/MP3.png"
                                                    class="img-fluid pdf-upload rounded-start" alt="...">
                                            </div>
                                            <div class="col-md-11 padd-l-0">
                                                <div class="card-body">
                                                    <h5 class="card-title">Referee Report 3 .pdf</h5>
                                                    <p class="card-text">
                                                        <small class="text-muted">
                                                            56KB | 12/3/2021
                                                        </small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="profile-buttons">

                                        <a href="#">
                                            <img src="http://127.0.0.1:8000/img/dashboard/Eye.png" class="img-fluid"
                                                alt="Eye">
                                        </a>
                                        <a href="#">
                                            <img src="http://127.0.0.1:8000/img/dashboard/Download.png"
                                                class="img-fluid gray-color" alt="download">
                                        </a>
                                        <a href="#">
                                            <img src="http://127.0.0.1:8000/img/dashboard/Upload.png"
                                                class="img-fluid gray-color" alt="Upload">
                                        </a>
                                        <a href="#">
                                            <img src="http://127.0.0.1:8000/img/dashboard/Delete-Trash.png"
                                                class="img-fluid gray-color" alt="Delete-Trash">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-txt-d-none">
                    <form action="{{ url('insert_testimonial') }}/{{  $candidate->id ?? '' }}" method="POST" class="row">
                        @csrf
                        <div class="col-md-12 profile-eidt-form-inner">
                            <label for="Job Summary Note">Job Summary Note</label>
                            <textarea name="testimonial_summary" id="Job_Summary_Note" cols="100" 
                            rows="5">
                            {{ $candidate->testimonial[0]->testimonial_summary ?? '' }} 
                        </textarea>
                        </div>
                        <div class="col-md-4 profile-eidt-form-inner">
                            <label for="Testimonial Note Name">Testimonial Note Name</label>
                            <input class="form-control" type="text" name="testimonial_name"
                                id="Testimonial_Note_Name" value="
                                {{ $candidate->testimonial[0]->testimonial_name ?? '' }} 
                                ">
                        </div>
                        <div class="col-md-4 profile-eidt-form-inner form-group">
                            <label for="Testimonial Note Date">Testimonial Note Date</label>
                            <input class="form-control date" type="calander" name="testimonial_date" placeholder=""
                                id="Testimonial_Note_Date" value="
                                {{ $candidate->testimonial[0]->testimonial_date ?? ''}}
                                ">
                            <img src="{{asset('img/dashboard/calendar-icon.png')}}" class="calendar"
                                alt="calendar-icon">
                        </div>
                        <div class="row testimonial-upload">
                            <div class="col-md-5">
                                <div class="row profile-details profile-details-upload">
                                    <div class="col-md-8">
                                        <div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-1 card-img">
                                                    <img src="http://127.0.0.1:8000/img/dashboard/MP3.png"
                                                        class="img-fluid pdf-upload rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-11 padd-l-0">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Referee Report 3 .pdf</h5>
                                                        <p class="card-text">
                                                            <small class="text-muted">
                                                                56KB | 12/3/2021
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="profile-buttons">
                                            <a href="#">
                                                <img src="http://127.0.0.1:8000/img/dashboard/Eye.png" class="img-fluid"
                                                    alt="Eye">
                                            </a>
                                            <a href="#">
                                                <img src="http://127.0.0.1:8000/img/dashboard/Download.png"
                                                    class="img-fluid gray-color" alt="download">
                                            </a>
                                            <a href="#">
                                                <img src="http://127.0.0.1:8000/img/dashboard/Upload.png"
                                                    class="img-fluid gray-color" alt="Upload">
                                            </a>
                                            <a href="#">
                                                <img src="http://127.0.0.1:8000/img/dashboard/Delete-Trash.png"
                                                    class="img-fluid gray-color" alt="Delete-Trash">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 profile-eidt-form-btn">
                            <button type="reset" class="btn back-btn">Back</button>
                            <input type="submit" class="btn" placeholder="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    