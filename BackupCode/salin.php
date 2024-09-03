<a href="index.php?logout=true" class="btn btn-danger w-10" data-toggle="modal"
                                data-target="#exampleModal">edit</a>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">First
                                                        Name</label>
                                                    <input type="text" class="form-control" id="recipient-name" name="firstname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Last
                                                        Name</label>
                                                    <input type="text" class="form-control" id="recipient-name" name="lastname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Emial Addres</label>
                                                    <input type="email" class="form-control" id="recipient-name" name="emailaddres">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Send message</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->