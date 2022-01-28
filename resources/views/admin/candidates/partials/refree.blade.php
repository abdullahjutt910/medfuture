<div class="row candidate-reference">
    <div class="col-md-12 padd-l-0">
        <div class="reference-txt">
            <h3>Reference</h3>
            <div class="reference-lock">
                <img src=" {{asset('img/dashboard/Lock.png')}}" class="img-fluid" alt="Edit-img">
                <div class="candidate-date">
                    <div class="form-group">
                        <select class="form-control" name="#" id="title" required="">
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
        </div>
        <div class="reference-form">
            <form action="" method="post" class="reference-form-inner">
                <h4>Referee 1</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="title[]" id="title" placeholder="Title"
                             value="{{ old('title[]',$candidate->reference[0]->title ?? '') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" id="first_name" placeholder="First Name"
                                name="first_name[]" value="{{ old('first_name',$candidate->reference[0]->first_name ?? '') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="last_name[]" id="title"
                                placeholder="Last Name" value="{{ old('last_name',$candidate->reference[0]->last_name ?? '') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="number" name="telephone[]" id="first_name"
                                placeholder="Telephone" value="{{ old('telephone',$candidate->reference[0]->telephone ?? '') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email[]" id="title" placeholder="Email"
                         value="{{ old('email',$candidate->reference[0]->email ?? '') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="job_title[]" id="first_name"
                                placeholder="Referee’s Job Titile" value="{{ old('job_title',$candidate->reference[0]->job_title ?? '') }}">
                        </div>
                    </div>
                </div>
                <h4>Referee 2</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="title[]" id="title" placeholder="Title"
                             value="{{ old('title[]',$candidate->reference[1]->title ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" id="first_name" placeholder="First Name"
                                name="first_name[]" value="{{ old('first_name[]',$candidate->reference[1]->first_name ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="last_name[]" id="title"
                                placeholder="Last Name" value="{{ old('last_name[]',$candidate->reference[1]->last_name ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="number" name="telephone[]" id="first_name"
                                placeholder="Telephone" value="{{ old('telephone[]',$candidate->reference[1]->telephone ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email[]" id="title" placeholder="Email"
                             value="{{ old('email[]',$candidate->reference[1]->email ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="job_title[]" id="first_name"
                                placeholder="Referee’s Job Titile" value="{{ old('job_title[]',$candidate->reference[1]->job_title ?? '') }}" required>
                        </div>
                    </div>
                </div>
                <h4>Referee 3</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="title[]" id="title" placeholder="Title"
                             value="{{ old('title[]',$candidate->reference[2]->title ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" id="first_name" placeholder="First Name"
                                name="first_name[]" value="{{ old('first_name[]',$candidate->reference[2]->first_name ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="last_name[]" id="title"
                                placeholder="Last Name" value="{{ old('last_name[]',$candidate->reference[2]->last_name ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="number" name="telephone[]" id="first_name"
                                placeholder="Telephone" value="{{ old('telephone[]',$candidate->reference[2]->telephone ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email[]" id="title" placeholder="Email"
                             value="{{ old('email[]',$candidate->reference[2]->email ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="job_title[]" id="first_name"
                                placeholder="Referee’s Job Titile" value="{{ old('job_title[]',$candidate->reference[2]->job_title ?? '') }}" required>
                        </div>
                    </div>
                </div>
                <div class="edit-brn">
                    <button class="btn reference-edit-btn"><img src=" {{asset('img/dashboard/Edit.png')}}"
                            class="img-fluid" alt="Edit-img"> Edit</button>
                </div>
            </form>

            <form action="{{ url('insert_reference') }}/{{  $candidate->id ?? '' }}" method="post"
                class="reference-form-inner-d-none">
                @csrf
                <h4>Referee 1</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="title[]" id="title" placeholder="Title"
                                required value="{{ old('title[]',$candidate->reference[0]->title ?? '') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" id="first_name" placeholder="First Name"
                                name="first_name[]" required value="{{ old('first_name',$candidate->reference[0]->first_name ?? '') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="last_name[]" id="title"
                                placeholder="Last Name" required value="{{ old('last_name',$candidate->reference[0]->last_name ?? '') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="number" name="telephone[]" id="first_name"
                                placeholder="Telephone" required value="{{ old('telephone',$candidate->reference[0]->telephone ?? '') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email[]" id="title" placeholder="Email"
                            required value="{{ old('email',$candidate->reference[0]->email ?? '') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="job_title[]" id="first_name"
                                placeholder="Referee’s Job Titile" required value="{{ old('job_title',$candidate->reference[0]->job_title ?? '') }}">
                        </div>
                    </div>
                </div>
                <h4>Referee 2</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="title[]" id="title" placeholder="Title"
                                value="{{ old('title[]',$candidate->reference[1]->title ?? '') }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" id="first_name" placeholder="First Name"
                                name="first_name[]" value="{{ old('first_name[]',$candidate->reference[1]->first_name ?? '') }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="last_name[]" id="title"
                                placeholder="Last Name" value="{{ old('last_name[]',$candidate->reference[1]->last_name ?? '') }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="number" name="telephone[]" id="first_name"
                                placeholder="Telephone" value="{{ old('telephone[]',$candidate->reference[1]->telephone ?? '') }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email[]" id="title" placeholder="Email"
                                value="{{ old('email[]',$candidate->reference[1]->email ?? '') }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="job_title[]" id="first_name"
                                placeholder="Referee’s Job Titile" value="{{ old('job_title[]',$candidate->reference[1]->job_title ?? '') }}" >
                        </div>
                    </div>
                </div>
                <h4>Referee 3</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="title[]" id="title" placeholder="Title"
                                value="{{ old('title[]',$candidate->reference[2]->title ?? '') }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" id="first_name" placeholder="First Name"
                                name="first_name[]" value="{{ old('first_name[]',$candidate->reference[2]->first_name ?? '') }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="last_name[]" id="title"
                                placeholder="Last Name" value="{{ old('last_name[]',$candidate->reference[2]->last_name ?? '') }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="number" name="telephone[]" id="first_name"
                                placeholder="Telephone" value="{{ old('telephone[]',$candidate->reference[2]->telephone ?? '') }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email[]" id="title" placeholder="Email"
                                value="{{ old('email[]',$candidate->reference[2]->email ?? '') }}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="job_title[]" id="first_name"
                                placeholder="Referee’s Job Titile" value="{{ old('job_title[]',$candidate->reference[2]->job_title ?? '') }}" >
                        </div>
                    </div>
                </div>
                <div class="col-md-12 profile-eidt-form-btn">
                    <button class="btn back-btn">Back</button>
                    <input type="submit" class="btn" placeholder="Submit">
                </div>
            </form>

            <div class="referee-document">
                <h4>Referee Documents</h4>
                <div class="row profile-details-upload">
                    <div class="col-md-12">
                        <div class="row profile-details">
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-1 card-img">
                                            <img src="{{asset('img/dashboard/PDF.png')}}"
                                                class="img-fluid pdf-upload rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-11 padd-l-0">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    Referee Report 1 .pdf
                                                </h5>
                                                <p class="card-text">
                                                    <small class="text-muted">
                                                        32KB | 12/3/2021 
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
                                        <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid" alt="Eye">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid gray-color"
                                            alt="download">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid gray-color"
                                            alt="Upload">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                            class="img-fluid gray-color" alt="Delete-Trash">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row profile-details-upload">
                    <div class="col-md-12">
                        <div class="row profile-details">
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-1 card-img">
                                            <img src="{{asset('img/dashboard/Video-File.png')}}"
                                                class="img-fluid pdf-upload rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-11 padd-l-0">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    Referee Report 2 .pdf
                                                </h5>
                                                <p class="card-text">
                                                    <small class="text-muted">
                                                        32KB | 12/3/2021
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
                                        <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid " alt="Eye">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid gray-color"
                                            alt="download">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid gray-color"
                                            alt="Upload">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                            class="img-fluid gray-color" alt="Delete-Trash">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row profile-details-upload">
                    <div class="col-md-12">
                        <div class="row profile-details">
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-1 card-img">
                                            <img src="{{asset('img/dashboard/MP3.png')}}"
                                                class="img-fluid pdf-upload rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-11 padd-l-0">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    Referee Report 3 .pdf
                                                </h5>
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
                                        <img src="{{asset('img/dashboard/Eye.png')}}" class="img-fluid" alt="Eye">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('img/dashboard/Download.png')}}" class="img-fluid gray-color"
                                            alt="download">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('img/dashboard/Upload.png')}}" class="img-fluid gray-color"
                                            alt="Upload">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('img/dashboard/Delete-Trash.png')}}"
                                            class="img-fluid gray-color" alt="Delete-Trash">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="edit-brn">
                    <button class="btn refere-doc-edit-btn"><img src=" {{asset('img/dashboard/Edit.png')}}"
                            class="img-fluid" alt="Edit-img"> Edit</button>
                </div>
            </div>
        </div>
        <div class="forms-colored-div">
            <div class="blue"></div>
            <div class="purple"></div>
            <div class="pink"></div>
        </div>
    </div>

</div>