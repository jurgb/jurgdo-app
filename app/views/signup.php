<div class="row">
        <div id='signup' class="login-panel panel panel-default col-md-6 col-md-offset-3">
          <div class="panel-heading">
            <h3 class="panel-title">Signup for IMDFolio</h3>
          </div>
          <div class="panel-body">
          <form class="form-horizontal" method="post" role="form">
            @if($errors->has())
                @foreach ($errors->all() as $error)
                  <p class="alert alert-danger error">{{ $error }}</p>
                @endforeach
                <!--$email_val = Input::old('email');-->    
            @endif 
            @if(Session::has('message'))
              <p class="alert alert-success success">{{ Session::get('message') }}</p>
            @endif

            <div class="form-group">
              <label for="inputFirstname" class="col-sm-3 control-label">Firstname</label>
              <div class="col-sm-9 inputsignup">
                <input type="text" class="form-control" name="firstname" id="inputFirstname" placeholder="Firstname" value="{{ Input::old('firstname'); }}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputName" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-9 inputsignup">
                <input type="text"  name="name" class="form-control" id="inputName" placeholder="Name" value="{{ Input::old('name'); }}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputstudent" class="col-sm-3 control-label">What kind?</label>
              <div class="col-sm-9 inputsignup">
                <select id="select" class="form-control" name="usertype">
                  <option value="" disabled selected>Select who you are</option>
                  <option value="1">Student</option>
                  <option value="2">Teacher</option>
                  <option value="3">Company</option>
                </select>
              </div>
            </div>

            <div id="option1">
              <div class="form-group">
                <label for="studentklas" class="col-sm-3 control-label">Class</label>
                <div class="col-sm-9 inputsignup">
                 <input type="text" name="class" class="form-control" id="inputClass" placeholder="Your Class" value="{{ Input::old('class'); }}">                
               </div>
              </div> 

              <div class="form-group">  
                <label for="studentnummer" class="col-sm-3 control-label">Student number</label>
                <div class="col-sm-9 inputsignup">
                  <input type="text" name="studentnr" class="form-control" id="inputStudentnr" placeholder="Your Student number" value="{{ Input::old('studentnr'); }}">                
                </div>
              </div>
            </div>

            <div id="option2" class="form-group">
              <label for="teacher" class="col-sm-3 control-label">Teacher number</label>
              <div class="col-sm-9 inputsignup">
                <input type="text" name="teachernr" class="form-control" id="inputTeachernr" placeholder="Your Teacher number">                
              </div>
            </div>

            <div id="option3">
              <div class="form-group">
                <label for="company" class="col-sm-3 control-label">Company name</label>
                <div class="col-sm-9 inputsignup">
                  <input type="text" name="companyname" class="form-control" id="inputCompanyname" placeholder="Your Company name">                
                </div>
              </div>  
              <div class="form-group">
                <label for="companyaddress" class="col-sm-3 control-label">Address?</label>
                <div class="col-sm-9 inputsignup">
                  <input type="text" name="companyaddress" class="form-control" id="inputCompanyaddress" placeholder="Your Company's address">                
                </div>
              </div> 

              <div class="form-group">
                <label for="companypostal" class="col-sm-3 control-label">Postal code?</label>
                <div class="col-sm-9 inputsignup">
                  <input type="text" name="companypostal" class="form-control" id="inputCompanypostal" placeholder="Your Company's postal code">                
                </div>
              </div> 

              <div class="form-group">  
                <label for="companycity" class="col-sm-3 control-label">The city you're from</label>
                <div class="col-sm-9 inputsignup">
                  <input type="text" name="companycity" class="form-control" id="inputCompanycity" placeholder="City">                
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="inputEmail" class="col-sm-3 control-label">Email</label>
              <div class="col-sm-9 inputsignup">
                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{ Input::old('email'); }}">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="col-sm-3 control-label">Password</label>
              <div class="col-sm-9 inputsignup">
                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
              </div>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="col-sm-3 control-label">Confirm Password</label>
              <div class="col-sm-9 inputsignup">
                <input type="password" name="checkpassword" class="form-control" id="inputPassword3" placeholder="Password">
              </div>
            </div>

            <div class="form-group signupbtn">
             <p class="col-sm-6 col-sm-offset-3" id="loginredirect">Already a Folio member? Go on and <a href="/users/login" class=" btn-xs btn-primary">Login</a>.</p>
             <button type='submit' class="btn btn-lg btn-default col-sm-3">Join Now!</button>
            </div>
          </form> 
         </div>
        </div>
    </div>