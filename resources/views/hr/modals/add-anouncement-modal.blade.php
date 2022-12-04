<!-- Add -->
<div class="modal fade" id="addannouncement">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Post Announcement</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>

        
       
            <div class="modal-body">

                <form action="{{ route('create_announcement.perform') }}" enctype="multipart/form-data" method="post">

                    @csrf
                
         

                <div class="row">
                 
                    <div class="col-6 text-s">
                        <div class="form-group">
                            <label for="name">Subject:</label>
                            <input type="text" class="form-control" placeholder="Enter Subject" id="name" name="subject"
                                required />
                        </div>
                    </div>

                </div>


           

                <div class="row">
               
                    <div class="col-6  text-s">
                        <div class="form-group">
                            <label for="name">Department:</label>
                        <select class="form-control" name="department" id="">
                            <option value="0">Department 1</option>
                            <option value="1">Department 2</option>
                            <option value="2">Department 3</option>
                         
                        </select>

                        </div>
                    </div>
                </div>

                <div class="row">
               
                    <div class="col-6  text-s">
                        <div class="form-group">
                            <label for="name">Program Head:</label>
                        <select class="form-control" name="programhead" id="">
                            <option value="0">Select Program Head</option>
                            @foreach ($programhead as $programheaditem)
                            <option value="{{ $programheaditem->userID }}">{{ $programheaditem->ph_firstname }}</option> 
                            @endforeach

                   
                         
                        </select>

                        </div>
                    </div>
                </div>


                <div class="row">
     
                    <div class="col-6  text-s">
                        <label class="form-label">Announcement: </label>
                    </div>
              
                    
                    <div class="col-md-10 text-s">
                        <div class="form-group mb-0">
                         
                            <textarea class="form-control" name="announcement" rows="4" placeholder="Announcement here.."></textarea>
                        </div>
                    </div>
                

                </div>

                <div class="row mt-3">
              
                    
                    <div class="col-6  text-s">
                        <div class="form-group">
                         
                            <label for="name">Attachments:</label>
                            <input type="file" class="form-control" placeholder="HR" id="name" name="attachment"
                                required />

                        </div>
                    </div>
                </div>


           

            </div>

            <div class="form-group button-align">
                <div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        Post
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