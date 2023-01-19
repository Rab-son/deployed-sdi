@section('title','SDI | Apply')
@include('layouts.front_end.header')

<body>
    <div class="container-xxl bg-white p-0">


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            @include('layouts.front_end.nav')

            <div class="container-xxl py-5 bg-success hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Apply Now</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Apply</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container py-6 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Application Form<span></span></p>
                    <h4 class="text-center mb-5">{{ $programDetails->name }}<br> Application Form</h4>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <p class="text-center mb-4">
                                Start Your Application Today
                            </p>
                            <h1 class="text-center fs-4">Fill Out The Form</h1>
                            <form id="signUpForm" method="post" enctype="multipart/form-data" action="{{ url('apply/store') }}"> @csrf
                                <!-- start step indicators -->
                                <div class="form-header d-flex mb-4">
                                    <span class="stepIndicator">Step 1</span>
                                    <span class="stepIndicator">Step 2</span>
                                    <span class="stepIndicator">step 3</span>
                                </div>
                                <!-- end step indicators -->
                            
                                <!-- step one -->
                                <div class="step">
                                    <div class="mb-3">
                                        <label>Program Name</label>
                                        <p><b>{{ $programDetails->name}}</b></p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Program Requirement</label>
                                        <textarea class="select-input" id="description" rows="5" cols="57" readonly>{{ $programDetails->requirement}}</textarea>
                                    </div>

                                    <input type="hidden" name="program_id" value="{{ $programDetails->id }}">

                                    <div class="mb-3">
                                        <input type="text" placeholder="First Name" oninput="this.className = ''" name="first_name">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" placeholder="Last Name" oninput="this.className = ''" name="last_name">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" placeholder="Email Address" oninput="this.className = ''" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" placeholder="ID Number" oninput="this.className = ''" name="id_number">
                                    </div>
                                    <div class="mb-3">
                                        <select class="select-input"  name="district_id" required>
                                            <option value="default" selected>Select District</option>
                                            @foreach ($districts as $district )
                                                <option value="{{ $district->id }}">{{ $district->districtname }}</option>                                    
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" placeholder="Your Contact (Phone Number)" oninput="this.className = ''" name="phone_number">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" placeholder="Your Contact (Phone Number)" oninput="this.className = ''" name="alt_number">
                                    </div>
                                    <div class="mb-3">
                                        <label>Date of Birth (DD/MM/YYYY)</label>
                                        <input type="date" placeholder="Birthday Date" oninput="this.className = ''" name="dob">
                                    </div>


                                </div>
                            
                                <!-- step two -->
                                <div class="step">
                                    <div class="mb-3">
                                        <input type="text" placeholder="TA" oninput="this.className = ''" name="traditional_authority">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" placeholder="Employement" oninput="this.className = ''" name="employment">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" placeholder="Position (If Employed)" oninput="this.className = ''" name="position">
                                    </div>
                                </div>
                            
                                <!-- step three -->
                                <div class="step">
                                    <div class="mb-3">
                                        <label class="upload"></label>Upload Your CV</label>
                                        <input name='cv' type="file"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="upload"></label>Upload Your Copy or Certificate</label>
                                        <input name='certificate' type="file"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="upload"></label>Upload Proof of Payment</label>
                                        <input name='proof_of_payment'  type="file"/>
                                    </div>
                                </div>
                            
                                <!-- start previous / next buttons -->
                                <div class="form-footer d-flex">
                                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                </div>
                                <!-- end previous / next buttons -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

        @include('layouts.front_end.footer')

    <!-- Template Javascript -->
    <script>var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        
        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("step");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }
        
        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("step");
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("signUpForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }
        
        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("step");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if ((y[i].value == "" && y[i].name !== "employment_id" && y[i].name !== "position") 
                    || (y[i].tagName === "SELECT" && y[i].value === "default"))
                {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }
                
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("stepIndicator");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }</script>
</body>

</html>