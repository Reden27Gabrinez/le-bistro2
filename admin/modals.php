<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Export Data</h5>
       <!-- <button onclick="a()" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>-->
      </div>
      <div class="modal-body">
        <div class="">
            
                <label for="">CSV</label>
                <div class="row">
                    <div class="col-3">
                        <a href="Orders-ExportAll.php" class="btn btn-success form-control">All Data</a>
                    </div>
                    <form action="Orders-ExportDate.php" method="POST">
                      <div class="col-9">
                          <div class="row">
                              <div class="col-5"><input required type="date" name="fromdate" class="form-control"></div>
                              <div class="col-5"><input required type="date" name="todate" class="form-control"></div>
                              <div class="col-2"><input type="submit" value="EXPORT" name="submit" class="btn btn-success"></div>
                          </div>
                      </div>
                    </form>
                </div>
            
            
        </div>
      </div>
      <div class="modal-footer">
        <button  onclick="a()" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>
        function a()
        {
            location.reload();
        }

    </script>