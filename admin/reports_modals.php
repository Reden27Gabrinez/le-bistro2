<div id="my-modal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close float-right">&times;</span>
        <!-- <h2 class="float-left">Modal Header</h2> -->
      </div>
      <div class="modal-body">
        <p class="h3">Reports</p>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 card">
                    <div class="border p-3">
                        <form action="reports.php" method="POST">
                            <div class="form-group">
                                <label for="">Input Date From</label>
                                <input type="date" name="fromdate" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Input Date To</label>
                                <input type="date" name="todate" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="GET" class="btn btn-success float-right">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <!-- <h3>Modal Footer</h3> -->
      </div>
    </div>
  </div>

  <script>
    // Get DOM Elements
const modal = document.querySelector('#my-modal');
const modalBtn = document.querySelector('#modal-btn');
const closeBtn = document.querySelector('.close');

// Events
modalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', outsideClick);

// Open
function openModal() {
  modal.style.display = 'block';
}

// Close
function closeModal() {
  modal.style.display = 'none';
}

// Close If Outside Click
function outsideClick(e) {
  if (e.target == modal) {
    modal.style.display = 'none';
  }
}

  </script>