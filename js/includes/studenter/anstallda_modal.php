<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Stäng fönster</button>
            <h4 class="modal-title">Fyll i de fälten ni vill ändra</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label>Redigera förnamn</label>
                <input type="text" id="fname" class="form-control">
              </div>
              <div class="form-group">
                <label>Redigera efternamn</label>
                <input type="text" id="lname" class="form-control">
              </div>

               <div class="form-group">
                <label>Redigera email</label>
                <input type="text" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label>Byt sektion</label>
                <select id="sektion" style="width: 100%">
                    <option value="">Redigera sektion</option>   
                    <option value="Biljonsen">Biljonsen</option>
                    <option value="Dansen">Dansen</option>
                    <option value="Tåget">Tåget</option>
                    <option value="AdministerIT">AdministerIT</option>
                </select>
              </div>
                <input type="hidden" id="userId" class="form-control">
                <button type="button" id="btn_update" data-id1="<?php echo $row["pnr"];?>">Update</button>

          </div>
          <div class="modal-footer">
          </div>
        </div>

      </div>
    </div>