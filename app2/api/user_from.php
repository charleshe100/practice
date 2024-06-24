<div class="modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addLabel"><h2>
            <?=(!isset($_GET['id']))?'新增':'編輯';?>學生資料</h2></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action='./api/save.php' method='post'>
          <?php
            if(isset($_GET['id'])){
              include_once "db.php";
              $user=$Student->find($_GET['id']);
              $classStu=$ClassStudent->find($_GET['id']);
              $schoolnum=$Student->q("SELECT `student_scores`.`school_num` FROM `students` INNER JOIN `student_scores` ON `students`.`school_num` = `student_scores`.`school_num` WHERE `students`.`id`='{$_GET['id']}'");              
              if(!empty($schoolnum)){
                $schoolnum=$schoolnum[0]['school_num'];
                $scoreStu=$StudentScores->q("SELECT `school_num`,`score` FROM `student_scores` WHERE `school_num`='$schoolnum'");
                $score=$scoreStu[0]['score'];
              };

              // dd($user); 一維陣列
              // dd($scoreStu); 二維陣列

              //解構陣列，將之變為每個變數
              extract($user);
              extract($classStu);
              // extract($scoreStu); extract()只能解構一維陣列
            }
            ?>
            <div class="input-group mb-3">
              <!-- <label for="name" class="form-label">姓名</label> -->
              <span class="input-group-text">姓名</span>
              <input type="text" class="form-control" name="name" id="name" placeholder="王小明" value="<?=$name??'';?>">
            </div>            
            <div class="input-group mb-3">
              <span class="input-group-text">學號</span>
              <input type="text" class="form-control" name="school_num" id="school_num" placeholder="911001" value="<?=$school_num??'';?>">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">身份證字號</span>
              <input type="text" class="form-control" name="uni_id" id="uni_id" placeholder="A123456789" value="<?=$uni_id??'';?>">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">生日</span>
              <input type="date" class="form-control" name="birthday" id="birthday" placeholder="2018-01-01" value="<?=$birthday??'';?>">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">電話</span>
              <input type="text" class="form-control" name="tel" id="tel" placeholder="02-12345678" value="<?=$tel??'';?>">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">地址</span>
              <input type="text" class="form-control" name="addr" id="addr" placeholder="台北市大安區大安路1號" value="<?=$addr??'';?>">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">家長</span>
              <input type="text" class="form-control" name="parents" id="parents" placeholder="王大明" value="<?=$parents??'';?>">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">科系</span>              
              <!-- <input type="text" class="form-control" name="dept" id="dept" placeholder="商業經營科"> -->
              <div class="form-floating" id="floatingSelect1" aria-label="Floating label select example">
                <select class="form-select" id="deptSelect" name="dept" value="<?=$dept??'';?>">
                  <!-- <option selected>請選擇</option> -->                
                </select>
              <label for="floatingSelect">下拉選單</label>
              </div>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">畢業學校</span>
              <!-- <input type="text" class="form-control" name="graduate_at" id="graduate_at" placeholder="縣立仁愛國中"> -->
              <div class="form-floating d-flex" id="floatingSelect2" aria-label="Floating label select example">
                <select class="form-select" id="graduateSelect" name="graduate_at" value="<?=$graduate_at??'';?>">
                </select>
              <label for="floatingSelect">下拉選單</label>
              </div>
            </div>
            <div class="row d-flex">
              <div class="col-6">
            <div class="input-group mb-3">
              <span class="input-group-text">狀態</span>              
              <div class="form-floating" id="floatingSelect3" aria-label="Floating label select example">
                <select class="form-select" id="statusSelect" name="status_code" value="<?=$status_code??'';?>">
                  <!-- <option selected>請選擇</option> -->                
                </select>
              <label for="floatingSelect">下拉選單</label>
              </div>
            </div>
            </div>
            <div class="col-6">
            <div class="input-group mb-3">
              <span class="input-group-text">班級</span>              
              <div class="form-floating" id="floatingSelect4" aria-label="Floating label select example">
                <select class="form-select" id="classcodeSelect" name="class_code" value="<?=$class_code??'';?>">
                  <!-- <option selected>請選擇</option> -->                
                </select>
              <label for="floatingSelect">下拉選單</label>
              </div>
            </div>
            </div>
            </div>
            <div class="row d-flex">              
            <div class="col-4">
            <div class="input-group mb-3">
              <span class="input-group-text">座號</span>
              <input type="text" class="form-control" name="seat_num" id="seat_num" placeholder="1" value="<?=$seat_num??'';?>">
            </div>
            </div>
            <div class="col-4">
            <div class="input-group mb-3">
              <span class="input-group-text">學年</span>
              <input type="text" class="form-control" name="year" id="year" placeholder="2000" value="<?=$year??'';?>">
            </div>
            </div>
            <div class="col-4">
            <div class="input-group mb-3">
              <span class="input-group-text">成績</span>
              <input type="text" class="form-control" name="score" id="score" placeholder="100" value="<?=$score??'';?>">
            </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary"><?=(!isset($_GET['id']))?'確認新增':'編輯更新';?></button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
            </div>                
          </form>
        </div>
        
      </div>
    </div>
    </div>