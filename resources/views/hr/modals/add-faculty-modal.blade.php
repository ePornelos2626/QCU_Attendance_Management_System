<!-- Add -->
<div class="modal fade" id="addnewfaculty">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>

            <h4 class="modal-title"><b>Add User</b></h4>
            <div class="modal-body">

                <div class="card-body text-left">

                    <form method="POST" action="{{ route('create_faculty.perform') }}">

                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name"
                                required />
                        </div>

                        <input type="hidden" name="role" value="4" >

                        <input type="hidden" name="department" value="{{ $department }}" >
               
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" placeholder="Enter User Name" id="username" name="username">
                        </div>

                        
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" placeholder="Enter Email" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Password</label>

                            <button type="button" onclick="genPassword()" id="generate" class="btn btn-primary waves-effect waves-light">
                                Generate Password
                            </button>

                            <br>
                            <br>

                            <input type="password" class="form-control" placeholder="Enter Password" id="password" name="password">

                            <input type="hidden" class="form-control" id="passwordshow" name="passwordshow">

                            <input id="showpass" onclick="showPass()" type="checkbox">
                            <label for="">Show password</label>
                  

                      
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5" data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>


        </div>

    </div>
</div>
</div>